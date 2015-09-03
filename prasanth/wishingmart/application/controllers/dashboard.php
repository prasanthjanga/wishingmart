<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
  public function __construct(){
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->helper('form');
    //$this->load->model("registration_model");
    $this->load->helper('security');
    $this->load->library('encrypt');



  }

  public function index(){ // TO GET MyAccount PAGE
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



}
