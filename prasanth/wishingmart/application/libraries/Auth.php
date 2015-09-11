<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth {
	function Auth() {
		$this->ci =& get_instance();
	}
	
	function token() {
		$token = sha1(md5(uniqid(rand().true).'asasddkjh54sdq345lknsdf*&^*&^><?!@JH6876!H#'));
		$this->ci->session->set_userdata('token',$token);
		return $token;
	}
}