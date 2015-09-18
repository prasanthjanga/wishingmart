<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
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

    $this->load->view('dashboard/index', $data);
  }

  public function updatewish(){ // TO GET Wishing Product List PAGE
    $data['thispage']="9";
    $data['title']="Update Wishing Product Details || WishingMart";

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


}
