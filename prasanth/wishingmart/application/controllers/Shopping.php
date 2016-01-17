<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends CI_Controller {
  
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
      $data['title']="WishingMart || Your Dream,Our Mission || Wishes Do Come True! || Online Shopping";
  		
      //$url_product_list=base_api_url()."login/productlist".base_api_key();
      //$data['product_list'] = self::getapi($url_product_list);

      $this->load->view('shopping/index', $data);
	}

  public function login(){
    $data['thispage']="2";
    $data['title']="This Login Page";

    $this->load->view('shopping/index',$data);
  }

  public function registration(){
    $data['thispage']="3";
    $data['title']="This Registration Page";
    $this->load->view('shopping/index',$data);
  }

  public function contact(){
    $data['thispage']="4";
    $data['title']="This Contact Us Page";
    $this->load->view('shopping/index',$data);
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
