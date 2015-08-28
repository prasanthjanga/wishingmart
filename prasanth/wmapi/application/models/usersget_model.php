<?php

class usersget_model extends CI_Model{

    function get_country(){ // TO GET COUNTRY TABLE DATA.
        $CI = &get_instance();
        $this->user = $CI->load->database('user', TRUE);
        $query = $this->user->query("SELECT * FROM country");

        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_mail(){ // TO GET EMAIL ID FROM USER TABLE.
        $CI = &get_instance();
        $this->user = $CI->load->database('user', TRUE);
        $query = $this->user->query("SELECT uname FROM user");

        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_add(){ // TO GET ADDRESS TABLE DATA.
        $CI = &get_instance();
        $this->user = $CI->load->database('user', TRUE);
        $query = $this->user->query("SELECT * FROM address");

        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_profile(){ // TO GET PROFILE TABLE DATA.
        $CI = &get_instance();
        $this->user = $CI->load->database('user', TRUE);
        $query = $this->user->query("SELECT * FROM profile");

        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_registration(){ // TO GET REGISTRATION TABLE DATA.
        $CI = &get_instance();
        $this->user = $CI->load->database('user', TRUE);
        $query = $this->user->query("SELECT * FROM registration");

        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_sadd(){ // TO GET SHIPPING ADDRESS TABLE DATA.
        $CI = &get_instance();
        $this->user = $CI->load->database('user', TRUE);
        $query = $this->user->query("SELECT * FROM shipping_add");

        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_transaction(){ // TO GET TRANSACTION TABLE DATA.
        $CI = &get_instance();
        $this->user = $CI->load->database('user', TRUE);
        $query = $this->user->query("SELECT * FROM transaction");

        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_user(){ // TO GET USER TABLE DATA.
        $CI = &get_instance();
        $this->user = $CI->load->database('user', TRUE);
        $query = $this->user->query("SELECT * FROM user");

        if($query->num_rows() > 0){
            return $query->result();
        }
    }



}