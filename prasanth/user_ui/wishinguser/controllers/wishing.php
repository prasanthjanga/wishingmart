<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Wishing extends CI_Controller {

	
	public function index()
    {
        
		parent::__construct(); 
	
		//Load the session liberary
		$this->load->library('session');	
		
		//Load Form Helper
		$this->load->helper('form');

		$this->load->view('login');
		

		
	} 
	
} // end class