<?php

class registration_model extends CI_Model
{

    public function create_user($fn,$ln,$dob,$gender,$cnid,$email,$pwd,$datetime,$link){
        //echo "sample"."<br>".$fn."<br>".$ln."<br>".$gender."<br>".$dob."<br>".$cnid."<br>".$email."<br>".$pwd."<br>".$datetime."<br>".$link."<br>"; 

        // Loading second db and running query.
        $CI = &get_instance();
        $this->user = $CI->load->database('user', TRUE);
        $query = $this->user->query('SELECT MAX(rid) FROM registration');
        if($query->num_rows() > 0){
            $row = $query->result_array();
        }
        $max = $row[0]['MAX(rid)'];

        if($max==0){
            $rid = $max+101; 
        }else{
            $rid = $max+1; 
        }
        //exit();

        $reg_data = array(
            "rid"       => $rid,
            "fn"        => $fn,
            "ln"        => $ln,
            "gender"    => $gender,
            "dob"       => $dob,
            "cnid"      => $cnid,
            "alink"     => $link,
            "status"    => '0',
            "doreg"     => $datetime,
            "plevel"    => '1'
        );

        $user_data = array(
            "uid"   => $rid,
            "uname" => $email,
            "pwd"   => $pwd           
        );

        $reg     = $this->user->insert("registration", $reg_data);
        $user    = $this->user->insert("user",$user_data);

        $last_update = date("Y-m-d G:i:s",time());
        $data_prof=array(
            'pid'        =>$rid,
            'enotice'    =>"0",
            'prof_img'   =>"profile.png",
            'contact'    =>"0",
            'hcontact'   =>"0",
            'last_update'=>$last_update,
        );
        $profile = $this->user->insert("profile",$data_prof);
        $data_pay=array(
            'payid'      =>$rid,
            'card_no'    =>"0",
            'issued_bank'=>"0",
            'country'    =>"0",
            'card_type'  =>"0",
        );
        $payment = $this->user->insert("payment",$data_pay);
        
        $user_online=array(
            'uid'    =>$rid,
            'online' =>"0",
        );
        $CI = &get_instance();
        $this->chat = $CI->load->database('chat', TRUE);
        $data_online = $this->chat->insert("online",$user_online);

        return $reg.$user.$profile.$payment.$data_online;
    }


    function get_country(){
        // Loading second db and running query.
        $CI = &get_instance();
        //setting the second parameter to TRUE (Boolean) the function will return the database object.
        $this->user = $CI->load->database('user', TRUE);
        $query = $this->user->query("SELECT * FROM country");

        //$query = $this->cms_db->select("users");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_mail(){
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
    public function checkmail($username){
        $CI = &get_instance();
        $this->user = $CI->load->database('user', TRUE);
        
        $query = $this->user->get_where("user", array("uname" => $username));
        if($query->num_rows() == 1){
            return $query->row();
        }
    }


}