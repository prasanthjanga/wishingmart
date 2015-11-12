<?php

class login_model extends CI_Model
{

    public function check_login($username){
        $CI = &get_instance();
        $this->user = $CI->load->database('user', TRUE);
        //echo $username;exit();

        //$this->user->select("uid,pwd");
        //$query = $this->user->get_where("user", array("uname" => $username));
        $query = $this->user->query("SELECT u.uid,u.pwd,p.prof_img FROM user u LEFT OUTER JOIN profile p ON u.uid=p.pid WHERE u.uname = '$username'");
        if($query->num_rows() == 1){
            return $query->row();
        }
    }

    function get_productlist(){
        $query = $this->db->query("SELECT wpn,wpdec,wpimg FROM wishing ORDER BY wpdate DESC LIMIT 5");
        //$query = $this->cms_db->select("users");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }



}