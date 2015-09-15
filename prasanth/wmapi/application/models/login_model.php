<?php

class login_model extends CI_Model
{



    public function check_login($username){
        $CI = &get_instance();
        $this->user = $CI->load->database('user', TRUE);

        $this->user->select("uid,pwd");
        $query = $this->user->get_where("user", array("uname" => $username));
        if($query->num_rows() == 1){
            return $query->row();
        }
    }



}