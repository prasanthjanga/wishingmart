<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'libraries/REST_Controller.php');

class Shipping extends CI_Controller{
     public function __construct(){
        parent::__construct();
        $this->load->library('USPS');

     }
     public function shipping(){
        $this->load->view('shipping_view');
     }

}