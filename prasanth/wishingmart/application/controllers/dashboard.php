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
    //$this->load->model("registration_model");
    $this->load->helper('security');
    $this->load->library('encrypt');



  }

  public function index(){ // TO GET MyAccount PAGE
    //self::logcheck(); //TO CHECK USER LOGIN OR NOT
    $data['thispage']="1";
    $data['title']="MyAccount || WishingMart";

    $this->load->view('dashboard/index', $data);
  }

  public function grantlist(){ // TO GET Grant Product List PAGE
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


    $url_country=$this->apiurl."wishing/country".$this->apikey;
    $data['country'] = self::getapi($url_country);
    
    $url_category=$this->apiurl."wishing/category".$this->apikey;
    $data['category'] = self::getapi($url_category);
    
    $url_subcategory=$this->apiurl."wishing/subcategory".$this->apikey;
    $data['subcategory'] = self::getapi($url_subcategory);

    $data['thispage']="9";
    $data['title']="Update Wishing Product Details || WishingMart";

    $data['wid']=$this->uri->segment(3);// for query string
    $data['wstatus']=$this->uri->segment(4);// for query string

    //echo $data['wid'].'////'.$data['wstatus'];
    if($data['wid'] || $data['wstatus']){
      //echo "have";exit();
      $url_wish_details=$this->apiurl."dashboard/wishid/wid/".$data['wid'].$this->apikey;
      $data['wish_details'] = self::getapi($url_wish_details);
      //print_r($data['wish_details']);exit();
      if($data['wid'] != $data['wish_details'][0]['wid'] || $data['wstatus'] != $data['wish_details'][0]['status']){
        redurect('dashboard/wishlist');
      }
      $scategory_url=$this->apiurl."wishing/subcategoryid/id/".$data['wish_details'][0]['scid'].$this->apikey;
      $data['sub_category'] = self::getapi($scategory_url);
      //print_r($data['subcategory']);exit();

    }

    $this->load->view('dashboard/index', $data);

  }

  public function profile(){ // TO GET Profile Details PAGE
    $data['thispage']="5";
    $data['title']="Profile Details || WishingMart";

    $this->load->view('dashboard/index', $data);
  }

  public function changepassword(){ // TO GET Profile Password Change PAGE
    $data['thispage']="6";
    $data['title']="Profile Password Change || WishingMart";

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
    $data['thispage']="31";
    $data['title']="View Grant Request || WishingMart";

    $this->load->view('dashboard/index', $data);
  }
  
  public function shippingadd(){ // TO GET Shipping Address Details PAGE
    $data['thispage']="32";
    $data['title']="Shipping Address Details || WishingMart";

    $this->load->view('dashboard/index', $data);
  }

  public function invoice(){ // TO GET Shipping Address Details PAGE
    $data['thispage']="8";
    $data['title']="Invoice || WishingMart";

    $this->load->view('dashboard/index', $data);
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
