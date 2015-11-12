<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Wishgrant extends CI_Controller {
    
  private $apiurl='http://localhost/wishing_ui1/prasanth/wmapi/';
  private $apikey="/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";
  public function __construct(){
    parent::__construct();
    self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->helper('file');
    $this->load->helper('date');
    //$this->load->library('session');
    $this->load->helper('security');
    $this->load->library('encrypt');
    //$this->load->library('image_lib');
    $this->load->model('img_upload_model');
    $this->load->library('form_validation');
    $this->load->library('cart');



  }

  public function index(){
    self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $data['thispage']="7";
    $data['title']="WishingMart || Wishing / Granting.";
    $this->load->view('wishgrant/wishgrant_view',$data);
  }

  public function wishing(){
    self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $data['thispage']="5";
    $data['title']="WishingMart || Wishing Page.";
    //echo "<span style='color:red;'>sample same form</span>";
    //echo $this->input->post('userfile');
    $url_country=$this->apiurl."wishing/country".$this->apikey;
    $data['country'] = self::getapi($url_country) ;
    
    $url_category=$this->apiurl."wishing/category".$this->apikey;
    $data['category'] = self::getapi($url_category) ;
    
    $url_subcategory=$this->apiurl."wishing/subcategory".$this->apikey;
    $data['subcategory'] = self::getapi($url_subcategory) ;

  if(isset($_POST['sub'])){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('pname', 'Product Name', 'required');
    $this->form_validation->set_rules('category', 'Category Name', 'callback_select_validate');
    $this->form_validation->set_rules('scategory', 'Sub-Category Name', 'callback_select_validate');
    $this->form_validation->set_rules('country', 'Country Name', 'callback_select_validate');
    $this->form_validation->set_rules('brand', 'Brand Name', 'required');
    $this->form_validation->set_rules('colour', 'Colour', 'required');
    $this->form_validation->set_rules('desc', 'Description', 'required');
    $this->form_validation->set_rules('userfile', 'Product Image', 'callback_handle_upload');
    $this->form_validation->set_error_delimiters('<div>','</div>');
    
    if($this->form_validation->run() == FALSE){
      //echo "<span style='color:red;'>Form Errors Plz Ceck.</span>";
      $this->load->view('wishgrant/wishing_view',$data);
    }else{
      //echo "<span style='color:red;'>sample same form</span>";
      $data['images'] = $this->img_upload_model->do_upload();
      if(isset($data['images']['error'])){
        $this->session->set_flashdata('flashmsg','<div>The Image Size Is Not Alowed.</div>'); 
        $this->load->view('wishgrant/wishing_view',$data);
      }else{
        //echo $this->input->post("pname");
        //echo $this->input->post("scategory");
        //echo $this->input->post("country");
        //echo $this->input->post("colour");
        //echo $this->input->post("brand");
        //echo $this->input->post("uid");
        //echo $this->input->post("desc");
        //exit();
        //print_r($array);

        $url_wish=$this->apiurl."wishing/new_wish".$this->apikey;
        if($url_wish){
          $username = 'admin';
          $password = '1234';
          $curl_handle = curl_init();
          curl_setopt($curl_handle, CURLOPT_URL, $url_wish);
          curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($curl_handle, CURLOPT_POST, 1);
          curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
            'pname'     =>$this->input->post("pname"),
            'scategory' =>$this->input->post("scategory"),
            'country'   =>$this->input->post("country"),
            'colour'    =>$this->input->post("colour"),
            'brand'     =>$this->input->post("brand"),
            'rid'       =>$this->session->userdata("uid"),
            'desc'      =>$this->input->post("desc"),
            'userfile'  =>$data['images'][0]['filename'],
          ));
           
          // Optional, delete this line if your API is open
          curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
           
          $buffer = curl_exec($curl_handle);
          curl_close($curl_handle);
           
          $result = json_decode($buffer);
          //print_r($result);exit();
          if(isset($result->status) && $result->status == 'success'){
            $this->session->set_userdata('flashmsg','<div>Your Wish Has Been Created Successfully.</div>'); 
            redirect('wishgrant/listofwishes');
            //$this->load->Controller('wishgrant/listofwishes',$data);
          }else{
            $this->session->set_flashdata('flashmsg','<div>You Wish Not Created.</div>'); 
          }
        }//if end
      }//else end
    }//ELSE END 
  }//if end
  $this->load->view('wishgrant/wishing_view',$data);
  }



  function wishlist(){
    self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $data['thispage']="7";
    $data['title']="WishingMart || All Wish List Page.";
    $this->load->view('wishgrant/wishlist_view',$data);
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
  
  function select_validate($select){
    // 'none' is the first option that is default "-------Choose Country-------"
    if($select=="none"){
      $this->form_validation->set_message('select_validate', 'Please Select Your %s.');
      return false;
      } else{
      // User picked something.
      return true;
    }
  }



  public function granting(){
    self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $allwishes_url=$this->apiurl."wishing/subcategoryid/id/".$this->session->userdata("wscatugery").$this->apikey;
    $data['subcategory'] = self::getapi($allwishes_url);

    $url_country=$this->apiurl."wishing/country".$this->apikey;
    $data['country'] = self::getapi($url_country) ;

    $url_chat_on=$this->apiurl."chat/online_status/uid/".$this->session->userdata("wrid").$this->apikey;
    $data['online'] = self::getapi($url_chat_on) ;

    $url_wish_user=$this->apiurl."wishing/wishuser/wrid/".$this->session->userdata("wrid").$this->apikey;
    $data['wish_user'] = self::getapi($url_wish_user) ;
    //print_r($data['wish_user']);
    //exit();

    //print_r($this->session->userdata());  
    //exit();

    $data['wish_details']=array(
      'wid'       => $this->session->userdata("wid"),
      'wrid'      => $this->session->userdata("wrid"),
      'wpname'    => $this->session->userdata("wpname"),
      'wcountry'  => $this->session->userdata("wcountry"),
      'wcatugory' => $data['subcategory'][0]['cname'],
      'wscatugory'=> $data['subcategory'][0]['scname'],
      'wbrand'    => $this->session->userdata("wbrand"),
      'wcolour'   => $this->session->userdata("wcolour"),
      'wdesc'     => $this->session->userdata("wdesc"),
      'wimg'      => $this->session->userdata("wimg"),
    );
    //print_r($data['wish_details']);
    //exit();
    if(isset($data['wish_details'])){
      $data['thispage']="6";
      $data['title']="WishingMart || granting Page.";
      //echo $data['wid']=$this->uri->segment(3);// for query string
      //echo $this->session->userdata('wid');
      if(isset($_POST['sub'])){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('gt_country', 'Country Name', 'callback_select_validate');
        $this->form_validation->set_rules('gt_p_desc', 'Description', 'required');
        $this->form_validation->set_rules('userfile', 'Product Image', 'callback_handle_upload');
        $this->form_validation->set_rules('gt_price', 'Product Price In $', 'required');
        $this->form_validation->set_error_delimiters('<div>','</div>');
        
        if($this->form_validation->run() == FALSE){
          //echo "<span style='color:red;'>Form Errors Plz Ceck.</span>";
          $this->load->view('wishgrant/granting_view',$data);
        }else{
          $data['images'] = $this->img_upload_model->do_upload();
          if(isset($data['images']['error'])){
            $this->session->set_flashdata('flashmsg','<div>The Image Size Is Not Alowed.</div>'); 
            $this->load->view('wishgrant/granting_view',$data);
          }else{
            //echo $data['wish_details']['wid'];
            //echo $this->session->userdata("uid");
            //echo $this->input->post("gt_price");
            //echo $this->input->post("gt_p_desc");
            //echo $this->input->post("gt_country");
            //echo $data['images'][0]['filename'];
            //exit();
            $url_grant=$this->apiurl."wishing/grant_wish".$this->apikey;
            if($url_grant){
              $username = 'admin';
              $password = '1234';
              $curl_handle = curl_init();
              curl_setopt($curl_handle, CURLOPT_URL, $url_grant);
              curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
              curl_setopt($curl_handle, CURLOPT_POST, 1);
              curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
                'wid'     =>$data['wish_details']['wid'],
                'gtuid'   =>$this->session->userdata("uid"),
                'gtprice' =>$this->input->post("gt_price"),
                'gtdesc'  =>$this->input->post("gt_p_desc"),
                'gtcname' =>$this->input->post("gt_country"),
                'userfile'=>$data['images'][0]['filename'],
              ));
               
              // Optional, delete this line if your API is open
              curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
               
              $buffer = curl_exec($curl_handle);
              curl_close($curl_handle);
               
              $result = json_decode($buffer);
              //print_r($result);exit();
              //if(isset($result->status) && ($result->status == 'success')){
              $this->session->set_userdata('flashmsg','<div>Your Grant Has Been Send Successfully.</div>');
              //$data['wish_details'];exit();
              //$this->session->unset_userdata($data['wish_details']);
              redirect('wishgrant/listofwishes');
            }else{
              $this->session->set_flashdata('flashmsg','<div>You Grant Not Send.</div>'); 
              //}//ELSE END
            }//IF END
          }//ELSE END
        }//ELSE END
      }// IF END

      $this->load->view('wishgrant/granting_view',$data);
    }else{
      redirect("wishgrant/listofwishes");
    }
  }

  public function listofwishes(){ // TO GET LANDING PAGE
    self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $this->session->unset_userdata("wid");
    $this->session->unset_userdata("wrid");
    $this->session->unset_userdata("wpname");
    $this->session->unset_userdata("wcountry");
    $this->session->unset_userdata("wcatugory");
    $this->session->unset_userdata("wscatugery");
    $this->session->unset_userdata("wscatugory");
    $this->session->unset_userdata("wbrand");
    $this->session->unset_userdata("wcolour");
    $this->session->unset_userdata("wdesc");
    $this->session->unset_userdata("wimg");

    $data['thispage']="2";
    $data['title']="MyAccount || WishingMart";
    //$allwishes_url="http://localhost/wishing_ui1/prasanth/wmapi/wishing/all_wish_list/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";

    $data['flashmsg']=$this->session->userdata('flashmsg');
    $this->session->unset_userdata('flashmsg');

    
    $allwishes_url=$this->apiurl."wishing/all_wish_list".$this->apikey;
    $data['allwishes'] = self::getapi($allwishes_url) ;
    //print_r($data['allwishes']);exit();

    $url_country=$this->apiurl."wishing/country".$this->apikey;
    $data['country'] = self::getapi($url_country) ;
    //print_r($data['country']);exit();
    if(isset($_POST['sub'])){
      //echo "helloooooooooooooo";
      echo $login_id=$this->session->userdata('uid');
      echo $wrid = $this->input->post("wrid");
      if($login_id != $wrid){
        $wish_details=array(
          'wid'       => $this->input->post("wid"),
          'wrid'      => $this->input->post("wrid"),
          'wpname'    => $this->input->post("wpname"),
          'wcountry'  => $this->input->post("wcountry"),
          'wscatugery'=> $this->input->post("wscatugery"),
          'wbrand'    => $this->input->post("wbrand"),
          'wcolour'   => $this->input->post("wcolour"),
          'wdesc'     => $this->input->post("wdesc"),
          'wimg'      => $this->input->post("wimg"),
        );
        //print_r($wish_details);
        $this->session->set_userdata($wish_details);
        redirect("wishgrant/granting");
      }else{
        $this->session->set_flashdata('flashmsg','<div>This Wish Is Make By You !!!.</div>'); 
      }//IF END
    }//IF END
    $this->load->view('wishgrant/listofwishes_view', $data);
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

  function logcheck(){
    if($this->session->userdata('logged_in') == '1'){ 
      return TRUE;
    }else{
      redirect("landing"); 
      return FALSE;
    }
  }

}//CALL END