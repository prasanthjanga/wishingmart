<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
  
  //private $apiurl='http://localhost/wishing_ui1/prasanth/wmapi/';
  //private $apikey="/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";
  public function __construct(){
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->helper('form');
    //$this->load->model("registration_model");
    $this->load->helper('security');
    $this->load->library('encrypt');
    //$this->load->library('session');
    $this->load->library('auth');
    $this->load->library('form_validation');
    

  }

	public function index(){ // TO GET LANDING PAGE
    $data['thispage']="1";
    $data['title']="WishingMart || Your Dream,Our Mission || Wishes Do Come True!";
		
    $url_product_list=base_api_url()."login/productlist".base_api_key();
    $data['product_list'] = self::getapi($url_product_list);
    //print_r($data['product_list']);
    //exit();
    $this->load->view('landing_view', $data);
	}


  public function login(){ // TO GET LOGIN PAGE
    if($this->session->userdata('logged_in') == '1'){
      redirect("landing");
    }else{
    $data['thispage']="2";
    $data['title']="WishingMart || Login";
    $this->session->unset_userdata('session_id');
    //$this->session->sess_destroy();

    if($this->input->post("email") && $this->input->post("pwd")) {
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('pwd', 'Password', 'trim|required');
      $this->form_validation->set_error_delimiters('<div>','</div>');
      if($this->form_validation->run() == TRUE){
        $email=$this->input->post("email");
        $pwd=$this->input->post("pwd");
        $enc_username=$this->encrypt->encode($email);
        $enc_username=str_replace(array('+', '/', '='), array('-', '_', '~'), $enc_username);
        //echo $enc_username; exit();
        $url_check=base_api_url()."login/logincheck/username/".$enc_username.base_api_key();
        $data['check'] = self::getapi($url_check);

        //echo $data->check->pwd; exit();
        $pwd=do_hash($pwd, 'md5');
        if($data['check']['pwd'] == $pwd){
          //Chat User Online
          $url_online=base_api_url()."chat/online".base_api_key();
          if($url_online){
            $username = 'admin';
            $password = '1234';
            $curl_handle = curl_init();
            curl_setopt($curl_handle, CURLOPT_URL, $url_online);
            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl_handle, CURLOPT_POST, 1);
            curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
              "uid"      => $data['check']['uid'],
              "online"   => '1',
            ));
             
            // Optional, delete this line if your API is open
            curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
             
            $buffer = curl_exec($curl_handle);
            curl_close($curl_handle);
             
            $result = json_decode($buffer);
            //print_r($result);
            if(isset($result->status) && $result->status == 'success'){

              $newdata = array(
                'uid'       => $data['check']['uid'],
                'email'     => $email,
                'prof_img'  => $data['check']['prof_img'],
                'logged_in' => TRUE
              );
              $this->session->set_userdata($newdata);
              redirect('wishgrant');              
            }else{
              $this->session->set_flashdata('flashmsg','<div>User in Offline.</div>'); 
              redirect('wishgrant');              
            }// else end
          }// if end
        }else{
          $this->session->set_flashdata('flashmsg','<div>UserName & Password Is Not Matching.</div>'); 
          $this->load->view('login_view', $data);
        }
      }else{
        $this->load->view('login_view', $data);
        return FALSE;
      }//ELSE END 
    }
    $this->load->view('login_view', $data);
    }//ELSE END logged_in !="1"
  }

  public function registration(){ // TO GET REGISTRATION PAGE
    if($this->session->userdata('logged_in') == '1'){
      redirect("landing");
    }else{
      //echo "samplesssssssssssssssssssssssssssss111111111111111111111111111111111111111111111111111111111111111111111111111111111ppppppppppppppppppppppppppppppppppppppppppppppppppppppppppttttttttttttttttttttttttttttttttttt11111111111111111111111111111111111";
      //exit();

    $data['thispage']="3";
    $data['title']="WishingMart || Register";
    $url_country=base_api_url()."wishing/country".base_api_key();
    $data['country'] = self::getapi($url_country) ;


    $this->load->library('form_validation');
    $this->form_validation->set_rules('firstname', 'First Name', 'required|alpha');
    $this->form_validation->set_rules('lastname', 'Last Name', 'required|alpha');
    $this->form_validation->set_rules('date', 'Date', 'required|callback_select_validate');
    $this->form_validation->set_rules('month', 'Month', 'required|callback_select_validate');
    $this->form_validation->set_rules('year', 'Year', 'required|callback_select_validate');
    $this->form_validation->set_rules('gender', 'Gender', 'required|callback_select_validate');
    $this->form_validation->set_rules('country', 'Country', 'required|callback_select_validate');
    $this->form_validation->set_rules('email', 'Email', 'required|callback_username_check');
    $this->form_validation->set_rules('pwd', 'Password', 'trim|required|matches[rpwd]');
    $this->form_validation->set_rules('rpwd', 'Password Confirmation', 'trim|required');
    $this->form_validation->set_rules('tnc', 'Terms of Service and Privacy Policy', 'required');
    $this->form_validation->set_error_delimiters('<div>','</div>');
    
    $dob = $this->input->post('year').'-'.$this->input->post('month').'-'.$this->input->post('date');
    //exit();

    if($this->form_validation->run() == TRUE){
      //$url=base_api_url()."registration/new_user".base_api_key();
      $post_data=array(
        "firstname" => $this->input->post('firstname'),
        "lastname"  => $this->input->post('lastname'),
        "dob"       => $dob,
        "gender"    => $this->input->post('gender'),
        "country"   => $this->input->post('country'),
        "email"     => $this->input->post('email'),
        "pwd"       => $this->input->post('pwd'),
      );
      $post_url=base_api_url()."registration/new_user".base_api_key();
      $result=post_datatoapi($post_url,$post_data);
      //print_r($result);exit();

      if(isset($result->status) && $result->status == 'success'){
        $this->session->set_flashdata('flashmsg','<div>Registration Successfull Please Check Your Email For Activation Link.</div>'); 
        redirect('landing/registration');
        
      }else{ echo 'Something has gone wrong'; }
    }else{
      $this->load->view('reg_view', $data);  
    }//ELSE END 
    }//ELSE END logged_in !="1"
  }// registration FUNCTION END

  public function username_check($str){ //TO CHECK THE USER NAME IS IN DB OR NOT

    $API_username = 'admin';
    $API_password = '1234';

    //$url1="http://localhost/wishing_ui1/prasanth/wmapi/login/user/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";
    $enc_username=$this->encrypt->encode($str);
    $enc_username=str_replace(array('+', '/', '='), array('-', '_', '~'), $enc_username);

    $url1=base_api_url()."registration/send/username/".$enc_username.base_api_key();
    if($url1){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_URL,$url1);
      
      // Optional, delete this line if your API is open
      curl_setopt($ch, CURLOPT_USERPWD, $API_username . ':' . $API_password);
      
      $result=curl_exec($ch);
      curl_close($ch);
      $test = json_decode($result, true);
      //print_r($test);

      if($test == array("status" => "success")){
        $this->form_validation->set_message('username_check', "The %s All Ready Exist $str");
        return FALSE;
      }elseif($test == array("status" => "failed")){
        return TRUE;
      }            
    }// IF END
  }// username_check END


  // Below function is called for validating select option field.
  function select_validate($select){
    // 'none' is the first option that is default "-------Choose Country-------"
    if($select=="none"){
      $this->form_validation->set_message('select_validate', 'Please Select Your Country.');
      return false;
      } else{
      // User picked something.
      return true;
    }
  }

  function regsuccess(){
    $data['thispage']="4";
    $data['title']="WishingMart || Register Successfull.";
    $this->load->view('regsuccess_view',$data);
  }

  function forgotpassword(){
    if($this->session->userdata('logged_in') == '1'){
      redirect("landing");
    }else{
      $data['thispage']="8";
      $data['title']="WishingMart || Forgot Password.";
      $this->load->view('forgotpwd_view',$data);
    }
  }

  public static function getapi($url){
    $API_username = 'admin';
    $API_password = '1234';
    //$url = "http://tapway.elasticbeanstalk.com/data/venue/".$mo->id."/summary?access_token=abcdef&start=".$start."&end=".$end;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // Optional, delete this line if your API is open
    curl_setopt($ch, CURLOPT_USERPWD, $API_username . ':' . $API_password);
    $body = curl_exec($ch);
    $obj = json_decode($body,true);

    if(!isset($obj['status']))
    return $obj;
    else
    return 0 ;

  } // getapi FUNCTION END  

  function logcheck(){ //TO CHECK USER LOGED IN OR NOT
    if($this->session->userdata('logged_in') == '1'){ 
      return TRUE;
      //redirect($redirect);
    }else{
      //redirect("landing"); 
      return FALSE;
    }
  }







  function termscondition(){
    $data['thispage']="f1";
    $data['title']="Terms and Condition || WishingMart.";
    $this->load->view('index',$data);
  }
  function aboutus(){
    $data['thispage']="f2";
    $data['title']="About Us || WishingMart.";
    $this->load->view('index',$data);
  }
  function contactus(){
    $data['thispage']="f3";
    $data['title']="Contact Us || WishingMart.";
    $this->load->view('index',$data);
  }
  function testimonial(){
    $data['thispage']="f4";
    $data['title']="Testimonial || WishingMart.";
    $this->load->view('index',$data);
  }
  function buyerseller(){
    $data['thispage']="f5";
    $data['title']="Buyer & Seller || WishingMart.";
    $this->load->view('index',$data);
  }
  function toolsapps(){
    $data['thispage']="f6";
    $data['title']="Tools & Apps || WishingMart.";
    $this->load->view('index',$data);
  }
  function comingsoon(){
    $data['thispage']="cs";
    $data['title']="Coming Soon || WishingMart.";
    $this->load->view('comingsoon_view',$data);
  }
  function error(){
    $data['thispage']="404";
    $data['title']="404 Page Not Found || WishingMart.";
    $this->load->view('404_view',$data);
  }
  function logout(){
    $data['thispage']="logout";
    $data['title']="Logout || WishingMart.";
    //Chat User Offline
    $url_online=base_api_url()."chat/online".base_api_key();
    if($url_online){
      $username = 'admin';
      $password = '1234';
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, $url_online);
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 1);
      curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
        "uid" => $this->session->userdata('uid'),
        "online"  => '0',
      ));
       
      // Optional, delete this line if your API is open
      curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
       
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
       
      $result = json_decode($buffer);
      //print_r($result);
      if(isset($result->status) && $result->status == 'success'){
        //$this->session->all_userdata();
        $this->session->sess_destroy();
        redirect("landing"); 
      }else{
        $this->session->set_flashdata('flashmsg',"<div>User in online error.</div>"); 
        redirect('landing');
      }// else end
    }// if end
  }




}
