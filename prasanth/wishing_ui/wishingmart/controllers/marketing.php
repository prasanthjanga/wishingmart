<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Marketing extends CI_Controller
{

     public function __construct(){

          parent::__construct();
          
     }

     public function index(){

        $data['title']="Sample Marketing page";
        $this->load->view('admin/header',$data);
        $this->load->view('body_view');
        $this->load->view('admin/footer');

     }

}