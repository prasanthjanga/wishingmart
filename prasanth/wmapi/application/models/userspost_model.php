<?php

class userspost_model extends CI_Model{

    public function create_user($fn,$ln,$dob,$gender,$cnid,$email,$pwd,$datetime,$link){
        //echo "sample"."<br>".$fn."<br>".$ln."<br>".$gender."<br>".$dob."<br>".$cnid."<br>".$email."<br>".$pwd."<br>".$datetime."<br>".$link."<br>"; 

        // Loading second db and running query.
        $CI = &get_instance();
        $this->user = $CI->load->database('user', TRUE);

        $count = $this->user->count_all_results('registration');
        $rid = 101+$count;
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
        $reg = $this->user->insert("registration", $reg_data);
        $user = $this->user->insert("user",$user_data);
        return $reg.$user;
    }




}