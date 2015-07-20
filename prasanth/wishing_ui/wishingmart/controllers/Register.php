<?php
/* 
 * File Name: employee.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        //load the employee model
        $this->load->model('regmodel');
    }

    //index function
    function index(){
		//Including validation library
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		//Validating Name Field
		$this->form_validation->set_rules('fname', 'First Name', 'required|alpha');
		$this->form_validation->set_rules('lname', 'Last Name', 'required|alpha');

		//Validating Email Field
		$this->form_validation->set_rules('email', 'Email Id', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		//Validating Mobile no. Field
		$this->form_validation->set_rules('dob', 'Date Of Birth', 'required');

		//Validating Address Field
		$this->form_validation->set_rules('gender', 'Gender', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('reg_view');
		}else{
			//Setting values for tabel columns
			$data_reg = array(
				'id' => '',
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'username' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'dob' => $this->input->post('dob'),
				'gender' => $this->input->post('gender')
			);
			//Transfering data to Model
			$this->regmodel->form_insert_reg($data_reg);
			
			$data_reg['message'] = 'Data Inserted Successfully';
			//Loading View
			$this->load->view('home_view');

			//$this->load->view('reg');
		}	
    }
}