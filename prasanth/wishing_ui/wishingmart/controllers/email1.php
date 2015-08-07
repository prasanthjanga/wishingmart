<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'libraries/REST_Controller.php');
//require(APPPATH.'libraries/My_Email.php');

class Email extends CI_Controller{


	public function __construct(){

        parent::__construct();
		//$this->load->model('navmodel');
          
	}

	public function index(){ // TO VIEW DASHBOARD
		$this->load->library('email');

			$subject = 'This is a test';
            $message = '<p>This message has been sent for testing purposes.</p>';

            // Get full html:
            $body = "Sample Body".$message."Sampel Data";


		$result = $this->email
                ->from('prasanth.janga@gmail.com')
                ->reply_to('prasanth@voguerobot.com')    // Optional, an account where a human being reads.
                ->to('prasanth.janga@gmail.com')
                ->subject($subject)
                ->message($body)
                ->send();

            var_dump($result);
            echo '<br />';
            echo $this->email->print_debugger();

            exit;


	}
	public function mail(){
		$config=Array(
			'potocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'prashanthjanga88@gmail.com',
			'smtp_pass' => 'prashanth88',
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