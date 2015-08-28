<?php

class login_model extends CI_Model
{

    public function check_name(){
        // Loading second db and running query.
        $CI = &get_instance();
        //setting the second parameter to TRUE (Boolean) the function will return the database object.
        $this->user = $CI->load->database('user', TRUE);
        $query = $this->user->query("SELECT uname FROM user");


        //$query = $this->cms_db->select("users");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }
    function get_login(){
        // Loading second db and running query.
        $CI = &get_instance();
        //setting the second parameter to TRUE (Boolean) the function will return the database object.
        $this->user = $CI->load->database('user', TRUE);
        $query = $this->user->query("SELECT * FROM user");


        //$query = $this->cms_db->select("users");
        if($query->num_rows() > 0){
            return $query->result();
        }

        //return $cms_db->select()->from("users")->get()->row();
    }

}