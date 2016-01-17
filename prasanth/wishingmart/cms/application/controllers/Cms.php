<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {

  //private $apiurl='http://localhost/wishing_ui1/prasanth/wmapi/';
  //private $apikey="/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";
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
    $data['title']="MyAccount || WishingMart || CMS";

    $this->load->view('cms/index', $data);
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
