<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'libraries/REST_Controller.php');

class Seller extends CI_Controller{

     public function __construct(){

        parent::__construct();
		//$this->load->model('navmodel');
          
     }

     public function index(){

        $data['title']="Dashboard";
        $data['role']="seller";

        $this->load->view('sellers/admin/header',$data);
        //$data['pages']=$this->navmodel->get_nav();

        $this->load->view('sellers/dashboard_view',$data);
        $this->load->view('sellers/admin/footer');

     }

     public function products(){

        $data['title']="Products";
        $data['role']="seller";

        $this->load->view('sellers/admin/header',$data);
        //$data['pages']=$this->navmodel->get_nav();

        $this->load->view('sellers/products_view',$data);
        $this->load->view('sellers/admin/footer');

     }
     
     public function product_add(){

        $data['title']="Add Products";
        $data['role']="seller";

        $this->load->view('sellers/admin/header',$data);
        //$data['pages']=$this->navmodel->get_nav();

        $this->load->view('sellers/product_add_view',$data);
        $this->load->view('sellers/admin/footer');

     }
     
     public function product_edit(){

        $data['title']="Edit Products";
        $data['role']="seller";

        $this->load->view('sellers/admin/header',$data);
        //$data['pages']=$this->navmodel->get_nav();

        $this->load->view('sellers/product_edit_view',$data);
        $this->load->view('sellers/admin/footer');

     }
     public function orders(){

        $data['title']="Orders";
        $data['role']="seller";

        $this->load->view('sellers/admin/header',$data);
        //$data['pages']=$this->navmodel->get_nav();

        $this->load->view('sellers/orders_view',$data);
        $this->load->view('sellers/admin/footer');

     }




}