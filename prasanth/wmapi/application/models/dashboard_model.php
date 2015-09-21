<?php defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_model extends CI_Model
{

    function get_wishlistid($uid){

        $query = $this->db->query("SELECT * FROM wishing WHERE rid=$uid ORDER BY wpdate ASC");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }
    function get_wishdetails($wid){

        $query = $this->db->query("SELECT * FROM wishing WHERE wid=$wid");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }


}