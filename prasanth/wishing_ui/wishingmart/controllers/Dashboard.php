<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Dashboard extends CI_Controller
{

     public function __construct(){

          parent::__construct();
          
     }

     public function index(){

        $data['title']="Sample Home page";
        $this->load->view('admin/header',$data);
        $this->load->view('body_view');
        $this->load->view('admin/footer');

     }

}