<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Navmodel extends CI_Model{

     public function __construct(){

          parent::__construct();
          
     }

     function get_nav($role){
          
          $query = $this->db->select("*")->from("pages")->get();
          
          if($query->num_rows() > 0){
               return $query->result_array();
          }else{
               return NULL;
          }


     }

}