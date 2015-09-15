<?php

class Wishing_model extends CI_Model
{

    public function create_wish($array){
        //print_r($array);
        $query = $this->db->query('SELECT MAX(wid) FROM wishing');
        if($query->num_rows() > 0){
            $row = $query->result_array();
        }
        $max = $row[0]['MAX(wid)'];

        if($max==0){
            $wid = $max+101; 
        }else{
            $wid = $max+1; 
        }
        $datetime = mdate('%Y-%m-%d %h:%i:%s',time());

        //exit();
        $wish_array=array(
            'wid'       => $wid,
            'wpn'       => $array['pname'],
            'wpdec'     => $array['desc'],
            'wpimg'     => $array['userfile'],
            'wpdate'    => $datetime,
            'rid'       => $array['rid'],
            'status'    => $array['userfile'],
            'scid'      => $array['scategory'],
            'cnid'      => $array['category'],
        );
        print_r($array);
        
        $wishing_data = $this->db->insert("wishing", $wish_array);
        //$user = $this->user->insert("user",$user_data);
        return $wishing_data;
    }

    function get_country(){
        // Loading second db and running query.
        $CI = &get_instance();
        //setting the second parameter to TRUE (Boolean) the function will return the database object.
        $this->user = $CI->load->database('user', TRUE);
        $query = $this->user->query("SELECT * FROM country ORDER BY cname ASC");

        //$query = $this->cms_db->select("users");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function get_category(){
        $query = $this->db->query("SELECT * FROM category");

        //$query = $this->cms_db->select("users");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }
    function get_subcategory(){
        $query = $this->db->query("SELECT * FROM subcategory");

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