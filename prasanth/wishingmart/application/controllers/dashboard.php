<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  private $apiurl='http://localhost/wishing_ui1/prasanth/wmapi/';
  private $apikey="/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";

  public function __construct(){
    parent::__construct();
    self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->helper('security');
    $this->load->library('encrypt');
    $this->load->helper('file');
    $this->load->helper('date');
    $this->load->model('img_upload_model');
    $this->load->library('form_validation');


  }

  public function index(){ // TO GET MyAccount PAGE
    //self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $data['thispage']="1";
    $data['title']="MyAccount || WishingMart";

    $this->load->view('dashboard/index', $data);
  }

  public function grantlist(){ // TO GET Grant Product List PAGE
    $uid=$this->session->userdata('uid');
    $url_grant_list=$this->apiurl."dashboard/grantlistid/uid/".$uid.$this->apikey;
    $data['grant_list'] = self::getapi($url_grant_list);
    //print_r($data['grant_list']);exit();

    $data['thispage']="3";
    $data['title']="Grant Product List || WishingMart";

    $this->load->view('dashboard/index', $data);
  }

  public function wishlist(){ // TO GET Wishing Product List PAGE
    
      $data['thispage']="4";
      $data['title']="Wishing Product List || WishingMart";

      $uid=$this->session->userdata('uid');

      $url_wish_list=$this->apiurl."dashboard/wishlistid/uid/".$uid.$this->apikey;
      $data['wish_list'] = self::getapi($url_wish_list) ;
      //print_r($data['wish_list']);exit();
      //print_r($this->session->userdata());exit();

      $this->load->view('dashboard/index', $data);
  }

  public function updatewish(){ // TO GET Wishing Product List PAGE
    
    $data['wid']=$this->uri->segment(3);// for query string
    $data['wstatus']=$this->uri->segment(4);// for query string

    $url_country=$this->apiurl."wishing/country".$this->apikey;
    $data['country'] = self::getapi($url_country);
    
    $url_category=$this->apiurl."wishing/category".$this->apikey;
    $data['category'] = self::getapi($url_category);
    
    $url_subcategory=$this->apiurl."wishing/subcategory".$this->apikey;
    $data['subcategory'] = self::getapi($url_subcategory);

    $data['thispage']="9";
    $data['title']="Update Wishing Product Details || WishingMart";


    //echo $data['wid'].'////'.$data['wstatus'];
    if($data['wid'] || $data['wstatus']){
      //echo "have";exit();
      $url_wish_details=$this->apiurl."dashboard/wishid/wid/".$data['wid'].$this->apikey;
      $data['wish_details'] = self::getapi($url_wish_details);
      //print_r($data['wish_details']);exit();
      if($data['wid'] != $data['wish_details'][0]['wid'] || $data['wstatus'] != $data['wish_details'][0]['status']){
        redirect('dashboard/wishlist');
      }
      $scategory_url=$this->apiurl."wishing/subcategoryid/id/".$data['wish_details'][0]['scid'].$this->apikey;
      $data['sub_category'] = self::getapi($scategory_url);
      //print_r($data['subcategory']);exit();

    }
    if(isset($_POST['sub'])){

      $wuid      =$this->input->post('wuid');
      $pname     =$this->input->post('pname');
      $country   =$this->input->post('country');
      $category  =$this->input->post('category');
      $scategory =$this->input->post('scategory');
      $brand     =$this->input->post('brand');
      $colour    =$this->input->post('colour');
      $pdesc     =$this->input->post('pdesc');
      //exit();
      $this->load->library('form_validation');
      $this->form_validation->set_rules('pname', 'Product Name', 'required');
      $this->form_validation->set_rules('brand', 'Product Brand', 'required');
      $this->form_validation->set_rules('colour', 'Product Colour', 'required');
      $this->form_validation->set_rules('pdesc', 'Product Description', 'required');
      $this->form_validation->set_error_delimiters('<div>','</div>');
      
      if($this->form_validation->run() == FALSE){
        //echo "<span style='color:red;'>Form Errors Plz Ceck.</span>";
        $redirect_url='dashboard/updatewish/'.$wuid.'/0';//exit();
        redirect($redirect_url);
        //$this->load->view('wishgrant/granting_view',$data);
      }else{
        echo "sample ok ok";exit();
      }

    }

    $this->load->view('dashboard/index', $data);

  }

  public function profile(){ // TO GET Profile Details PAGE
    $data['thispage']="5";
    $data['title']="Profile Details || WishingMart";
    $url_profile=$this->apiurl."dashboard/profile/uid/".$this->session->userdata('uid').$this->apikey;
    $data['profile'] = self::getapi($url_profile);
    //echo "<pre>";
    //print_r($data['profile']); exit();
    $url_country=$this->apiurl."wishing/country".$this->apikey;
    $data['country'] = self::getapi($url_country);

    $this->load->view('dashboard/index', $data);
  }

  public function profile_pic(){ // TO Update Profile Image Details PAGE
    $data['thispage']="5";
    $data['title']="Profile Details || WishingMart";
    if(isset($_POST['sub'])){
      $this->form_validation->set_rules('userfile', 'Profile Image', 'callback_handle_upload');
      $this->form_validation->set_error_delimiters('<div>','</div>');
      
      if($this->form_validation->run() == FALSE){
        //echo "<span style='color:red;'>Form Errors Plz Ceck.</span>";
        $this->load->view('dashboard/index', $data);
      }else{
        $this->load->model('img_upload_model');
        $data['images'] = $this->img_upload_model->do_upload();
        if(isset($data['images']['error'])){
          $this->session->set_flashdata('flashmsg',"<div>The Image Size Is Not Alowed.</div>"); 
          //$this->load->view('dashboard/profile', $data);
          redirect('dashboard/profile');
        }else{
          $data["p_pic"]=array(
            'pid'       => $this->session->userdata('uid'),
            'userfile'  => $data['images'][0]['filename'],
          );
        //print_r($data['prof_pic']);exit();

          $url_prof_pic=$this->apiurl."dashboard/profile_pic".$this->apikey;
          if($url_prof_pic){
            $username = 'admin';
            $password = '1234';
            $curl_handle = curl_init();
            curl_setopt($curl_handle, CURLOPT_URL, $url_prof_pic);
            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl_handle, CURLOPT_POST, 1);
            curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data["p_pic"]);
             
            // Optional, delete this line if your API is open
            curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
             
            $buffer = curl_exec($curl_handle);
            curl_close($curl_handle);
             
            $result = json_decode($buffer);
            //print_r($result);exit();
            if(isset($result->status) && $result->status == 'success'){
              $this->session->set_flashdata('flashmsg',"<div><a href='#' class='close' data-dismiss='alert'>&times;</a>profile picture updated.</div>"); 
              $this->session->unset_userdata('prof_img');
              $this->session->set_userdata('prof_img',$data['images'][0]['filename']);
              redirect('dashboard/profile');
            }else{
              $this->session->set_flashdata('flashmsg',"<div>Profile picture is not updated.</div>"); 
            }//ELSE END
          }//IF END
        }//ELSE END

      }// ELSE END
    }

    $this->load->view('dashboard/index', $data);
  }

  public function about_me(){ // TO Update About Us Profile Details PAGE
    $data['thispage']="5";
    $data['title']="Profile Details || WishingMart";
    if(isset($_POST['sub'])){
      $this->load->library('form_validation');
      $this->form_validation->set_rules('fn', 'First Name', 'alpha_numeric');
      $this->form_validation->set_rules('ln', 'Last Name', 'alpha_numeric');
      //$this->form_validation->set_rules('dob', 'Date Of Birth', '');
      $this->form_validation->set_rules('gender', 'gender', 'alpha');
      $this->form_validation->set_rules('country', 'country Name', 'is_natural');
      $this->form_validation->set_rules('contact', 'Mobile Number', 'is_natural');
      $this->form_validation->set_rules('hcontact', 'House Number', 'is_natural');
      $this->form_validation->set_error_delimiters('<div>','</div>');
      
      //echo "sampleeeeeeeeeeeee"; exit();
      if($this->form_validation->run() == FALSE){
        //echo "<span style='color:red;'>Form Errors Plz Ceck.</span>";
        //$this->session->set_flashdata('flashmsg','<div>Form Errors Please Check.</div>'); 
        //$this->load->view('dashboard/profile', $data);
        redirect('dashboard/profile');
      }else{
        $data["prof_about_me"]=array(
          'uid'      => $this->session->userdata('uid'),
          'fn'       => $this->input->post('fn'),
          'ln'       => $this->input->post('ln'),
          'dob'      => $this->input->post('dob'),
          'gender'   => $this->input->post('gender'),
          'country'  => $this->input->post('country'),
          'contact'  => $this->input->post('contact'),
          'hcontact' => $this->input->post('hcontact'),
        );
        //print_r($data['prof_about_me']);exit();
        $url_about_me=$this->apiurl."dashboard/about_me".$this->apikey;
        if($url_about_me){
          $username = 'admin';
          $password = '1234';
          $curl_handle = curl_init();
          curl_setopt($curl_handle, CURLOPT_URL, $url_about_me);
          curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($curl_handle, CURLOPT_POST, 1);
          curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data["prof_about_me"]);
           
          // Optional, delete this line if your API is open
          curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
           
          $buffer = curl_exec($curl_handle);
          curl_close($curl_handle);
           
          $result = json_decode($buffer);
          //print_r($result);exit();
          if(isset($result->status) && $result->status == 'success'){
            $this->session->set_flashdata('flashmsg',"<div>profile About  updated.</div>"); 
            redirect('dashboard/profile');
          }else{
            $this->session->set_flashdata('flashmsg',"<div>You About Not updated.</div>"); 
          }//ELSE END
        }//IF END
      }// ELSE END
    }
    $this->load->view('dashboard/index', $data);
  }

  public function bac_details(){ // TO Update Bank Account Details PAGE
    $data['thispage']="5";
    $data['title']="Profile Details || WishingMart";
    if(isset($_POST['sub'])){
      $this->load->library('form_validation');
      $this->form_validation->set_rules('cno', 'Card Number', 'is_natural');
      $this->form_validation->set_rules('ib', 'Issued Bank Name', 'alpha_numeric');
      $this->form_validation->set_rules('country', 'Country Name', 'is_natural');
      $this->form_validation->set_rules('ct', 'Card Type', 'alpha_numeric');
      $this->form_validation->set_error_delimiters('<div>','</div>');
      
      //echo "sampleeeeeeeeeeeee"; exit();
      if($this->form_validation->run() == FALSE){
        //$this->session->set_flashdata('flashmsg','<div>Form Errors Please Check.</div>'); 
        redirect('dashboard/profile');
      }else{
        $data["prof_bank_ac"]=array(
          'uid'      => $this->session->userdata('uid'),
          'cno'      => $this->input->post('cno'),
          'ib'       => $this->input->post('ib'),
          'ct'       => $this->input->post('ct'),
          'country'  => $this->input->post('country'),
        );
        //print_r($data['prof_bank_ac']); exit();
        $url_bank_ac=$this->apiurl."dashboard/bank_ac".$this->apikey;
        if($url_bank_ac){
          $username = 'admin';
          $password = '1234';
          $curl_handle = curl_init();
          curl_setopt($curl_handle, CURLOPT_URL, $url_bank_ac);
          curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($curl_handle, CURLOPT_POST, 1);
          curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data["prof_bank_ac"]);
           
          // Optional, delete this line if your API is open
          curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
           
          $buffer = curl_exec($curl_handle);
          curl_close($curl_handle);
           
          $result = json_decode($buffer);
          //print_r($result);exit();
          if(isset($result->status) && $result->status == 'success'){
            $this->session->set_flashdata('flashmsg',"<div>Bank A/C Details updated.</div>"); 
            redirect('dashboard/profile');
          }else{
            $this->session->set_flashdata('flashmsg',"<div>Bank A/C Details Not Updated.</div>"); 
          }//ELSE END
        }//IF END
      }// ELSE END
    }
    $this->load->view('dashboard/index', $data);
  }

  public function postal_details(){ // TO Update Postal address Details PAGE
    //exit();
    $data['thispage']="5";
    $data['title']="Profile Details || WishingMart";
    if(isset($_POST['sub'])){
      $this->load->library('form_validation');
      //$this->form_validation->set_rules('add1', 'Street Name', 'alpha_numeric');
      $this->form_validation->set_rules('add2', 'City Name', 'alpha_numeric');
      $this->form_validation->set_rules('country', 'Country Name', 'is_natural');
      $this->form_validation->set_rules('post', 'Postal Code', 'is_natural');
      $this->form_validation->set_error_delimiters('<div>','</div>');
      
      if($this->form_validation->run() == FALSE){
        $this->session->set_flashdata('flashmsg','<div>Form Errors Please Check.</div>'); 
        redirect('dashboard/profile');
      }else{
        $data["prof_address"]=array(
          'uid'   => $this->session->userdata('uid'),
          'add1'  => $this->input->post('add1'),
          'add2'  => $this->input->post('add2'),
          'add3'  => $this->input->post('country'),
          'post'  => $this->input->post('post'),
        );
        //print_r($data['prof_address']); exit();
        $url_address=$this->apiurl."dashboard/postal_address".$this->apikey;
        if($url_address){
          $username = 'admin';
          $password = '1234';
          $curl_handle = curl_init();
          curl_setopt($curl_handle, CURLOPT_URL, $url_address);
          curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($curl_handle, CURLOPT_POST, 1);
          curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data["prof_address"]);
           
          // Optional, delete this line if your API is open
          curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
           
          $buffer = curl_exec($curl_handle);
          curl_close($curl_handle);
           
          $result = json_decode($buffer);
          //print_r($result);exit();
          if(isset($result->status) && $result->status == 'success'){
            $this->session->set_flashdata('flashmsg','<div>Postal Address Details updated.</div>'); 
            redirect('dashboard/profile');
          }else{
            $this->session->set_flashdata('flashmsg','<div>Postal Address Details Not Updated.</div>'); 
          }//ELSE END
        }//IF END
      }// ELSE END
    }
    $this->load->view('dashboard/index', $data);
  }


  function handle_upload(){
      //print_r($this->input->post('userfile'));
    if(!$this->input->post('userfile')){
      //$data['images'] =  $this->img_upload_model->do_upload();
      return true;
    }else{
      $this->form_validation->set_message('handle_upload', 'Please select %s file.');
      return false;
    }
  }

  public function changepassword(){ // TO GET Profile Password Change PAGE
    $data['thispage']="6";
    $data['title']="Profile Password Change || WishingMart";
    echo $this->input->post('old_pwd');
    echo $this->input->post('new_pwd');

    $this->load->view('dashboard/index', $data);
  }

  public function invoiceslist(){ // TO GET Invoices List PAGE
    $data['thispage']="7";
    $data['title']="Invoices List || WishingMart";

    $this->load->view('dashboard/index', $data);
  }

  public function commingsoon(){ // TO GET Invoices List PAGE
    $data['thispage']="cs";
    $data['title']="commingsoon || WishingMart";

    $this->load->view('dashboard/index', $data);
  }

  public function viewgrantrequest(){ // TO GET View Grant Request PAGE
    $gt_id = $this->uri->segment(3);// for query string
    $wp_id = $this->uri->segment(4);// for query string
    $this->session->set_userdata("from_id",$gt_id);

    $url_grant_list=$this->apiurl."dashboard/grantid/gid/".$gt_id.$this->apikey;
    $data['grant_pro'] = self::getapi($url_grant_list);
    
    $url_grant_list=$this->apiurl."dashboard/wishid/wid/".$data['grant_pro'][0]['wpid'].$this->apikey;
    $data['wish_pro'] = self::getapi($url_grant_list);

    $scategory_url=$this->apiurl."wishing/subcategoryid/id/".$data['wish_pro'][0]['scid'].$this->apikey;
    $data['sub_category'] = self::getapi($scategory_url);

    $url_chat_on=$this->apiurl."chat/online_status/uid/".$gt_id.$this->apikey;
    $data['online'] = self::getapi($url_chat_on) ;
    //print_r($this->session->userdata());  
    //exit();
    
    if($data['grant_pro'][0]['gid'] == $gt_id && $data['grant_pro'][0]['wpid'] == $wp_id){

      
      $data['thispage']="31";
      $data['title']="View Grant Request || WishingMart";

      $this->load->view('dashboard/index', $data);
    }else{
      redirect('dashboard/grantlist');
    }//ELSE END
  }


  
  public function shippingadd(){ // TO GET Shipping Address Details PAGE
    if(isset($_POST['sub'])){
      //echo $this->input->post('wid');
      //echo $this->input->post('gid');
      //echo $this->input->post('wpn');
      //echo $this->input->post('gtcname');
      //echo $this->input->post('brand');
      //echo $this->input->post('wpcolour');
      //echo $this->input->post('gtdesc');
      //echo $this->input->post('gtimg');
      //echo $this->input->post('gtprice');
      $data['aprovel_details']=array(
        'wid'     => $this->input->post('wid'),
        'gid'     => $this->input->post('gid'),
        'wpn'     => $this->input->post('wpn'),
        'gtcname' => $this->input->post('gtcname'),
        'brand'   => $this->input->post('brand'),
        'wpcolour'=> $this->input->post('wpcolour'),
        'gtdesc'  => $this->input->post('gtdesc'),
        'gtimg'   => $this->input->post('gtimg'),
        'gtprice' => $this->input->post('gtprice'),
      );
      //echo "<pre>"; print_r($data['aprovel_details']);      exit();
    
      $url_country=$this->apiurl."wishing/country".$this->apikey;
      $data['country'] = self::getapi($url_country);

      $data['thispage']="32";
      $data['title']="Shipping Address Details || WishingMart";
      $this->load->view('dashboard/index', $data);
    }else{
      redirect('dashboard/viewgrantrequest');
    }//IF END
  }

  public function invoice(){ // TO GET Shipping Address Details PAGE
    if(isset($_POST['sasub'])){
      $data['shipping_add']=array(
        'uid'     => $this->session->userdata('uid'),
        'street'  => $this->input->post('street'),
        'city'    => $this->input->post('city'),
        'country' => $this->input->post('country'),
        'postcode'=> $this->input->post('postcode'),
        'contact' => $this->input->post('contact'),
      );
      $this->session->set_userdata('s_add',$data['shipping_add']);
      //echo $this->input->post('street');
      //echo $this->input->post('city');
      //echo $this->input->post('country');
      //echo $this->input->post('postcode');
      //echo $this->input->post('contact');
      //echo '<pre>';    print_r($data["shipping_add"]);      exit();
      if(isset($data["shipping_add"])){
        $url_ship_add=$this->apiurl."dashboard/shipping_add".$this->apikey;
        if($url_ship_add){
          $username = 'admin';
          $password = '1234';
          $curl_handle = curl_init();
          curl_setopt($curl_handle, CURLOPT_URL, $url_ship_add);
          curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($curl_handle, CURLOPT_POST, 1);
          curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data["shipping_add"]);
           
          // Optional, delete this line if your API is open
          curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
           
          $buffer = curl_exec($curl_handle);
          curl_close($curl_handle);
           
          $result = json_decode($buffer);
          //print_r($result);exit();
          if(isset($result->status) && $result->status == 'success'){
            redirect('dashboard/invoice');
            //$this->load->Controller('wishgrant/listofwishes',$data);
          }else{
            $this->session->set_flashdata('flashmsg','<div>You Wish Not Created.</div>'); 
          }//ELSE END
        }//IF END
      }//IF END
    }else{
      $data['s_add']=$this->session->userdata('s_add');
      if(isset($data['s_add'])){
        //print_r($data['s_add']);
        //exit();
        //redirect('dashboard/shippingadd');
        $data['thispage']="8";
        $data['title']="Invoice || WishingMart";

        $this->load->view('dashboard/index', $data);
      }else{
        //redirect('dashboard/shippingadd');grantlist
        redirect('dashboard/grantlist');
      }//ELSE END
    }//ELSE END
  }
  
  public function mygrant(){ // TO GET Shipping Address Details PAGE
    $data['thispage']="10";
    $data['title']="My Grant Requests || WishingMart";

    $this->load->view('dashboard/index', $data);
  }

  function logcheck(){
    if($this->session->userdata('logged_in') == '1'){ 
      return TRUE;
    }else{
      redirect("landing"); 
      return FALSE;
    }
  }

  public static function getapi($url){
    //$url = "http://tapway.elasticbeanstalk.com/data/venue/".$mo->id."/summary?access_token=abcdef&start=".$start."&end=".$end;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $body = curl_exec($ch);
    $obj = json_decode($body,true);

    if(!isset($obj['status']))
    return $obj ;
    else
    return 0 ;

  } // getapi FUNCTION END  


}
