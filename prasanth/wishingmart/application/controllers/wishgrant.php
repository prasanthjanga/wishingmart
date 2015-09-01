<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishgrant extends CI_Controller {
    
  public function __construct(){
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->helper('file');
    $this->load->helper('date');
    $this->load->helper('security');
    $this->load->library('encrypt');
    //$this->load->library('image_lib');
    $this->load->model('img_upload_model');

    $this->load->library('form_validation');

  }

  public function index(){
    $data['thispage']="7";
    $data['title']="WishingMart || Wishing / Granting.";
    
    $this->load->view('wishgrant_view',$data);
  }

  public function wishing(){
    $data['thispage']="5";
    $data['title']="WishingMart || Wishing Page.";
    //echo "<span style='color:red;'>sample same form</span>";
    //echo $this->input->post('userfile');
    //$url="http://localhost/wishing_ui1/prasanth/wmapi/wishing/country/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";
    //$obj_pre = self::getapi($url) ;
    //print_r($obj_pre);

    $this->load->library('form_validation');
    $this->form_validation->set_rules('pname', 'Product Name', 'required|alpha');
    $this->form_validation->set_rules('category', 'Category Name', 'required');
    $this->form_validation->set_rules('scategory', 'Sub-Category Name', 'required');
    $this->form_validation->set_rules('country', 'Country Name', 'required');
    $this->form_validation->set_rules('brand', 'Brand Name', 'required');
    $this->form_validation->set_rules('colour', 'Colour', 'required|alpha');
    $this->form_validation->set_rules('desc', 'Description', 'required');
    $this->form_validation->set_rules('userfile', 'Product Image', 'callback_handle_upload');
    $this->form_validation->set_error_delimiters('<div>','</div>');
    
    if($this->form_validation->run() == FALSE){
      //echo "<span style='color:red;'>Form Errors Plz Ceck.</span>";
      
      $this->load->view('wishing_view',$data);
    }else{
      //echo "<span style='color:red;'>sample same form</span>";
      $data['images'] = $this->img_upload_model->do_upload();
      //echo "<pre>";
      //print_r($data);
      //echo "</pre>";

      $this->load->view('wishsuccess_view',$data);
   }//ELSE END 

  }



  function handle_upload(){
      //print_r($this->input->post('userfile'));
    if(!$this->input->post('userfile')){
      //$data['images'] =  $this->img_upload_model->do_upload();
      return true;
    }else{
      $this->form_validation->set_message('handle_upload', 'Please select %s file.');
      return false;
    }
  }
  
  public function granting(){
    $data['thispage']="6";
    $data['title']="WishingMart || granting Page.";
    
    //echo "<span style='color:red;'>".base_url('assets/error.png')."</span>";




    $this->load->view('granting_view',$data);
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


}//CALL END