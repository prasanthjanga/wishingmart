<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//require(APPPATH.'libraries/REST_Controller.php');
//require(APPPATH.'libraries/My_Email.php');

class Email extends CI_Controller{


	public function __construct(){

        parent::__construct();
		//$this->load->model('navmodel');
          
	}

	public function index(){ 

		$config=Array(
			'potocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_user' => 'prasanth.janga@gmail.com',
			'smtp_pass' => 'jsdpreddy'
		);
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");

		$to    = 'prasanth.janga@gmail.com';
		$from     =  'prasanth@voguerobot.com'; 
		$subject  =  'Email Test';
		$msg  =  'Message Body Sample !!!';

		$this->email->from($from,"prasanth");
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($msg);

		if($this->email->send()){
			echo "send mail...";
		}else{
			show_error($this->email->print_debugger());
			echo "Not send...";
		}





		

	}
}