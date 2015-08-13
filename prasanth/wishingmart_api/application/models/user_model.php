<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class User_model extends CI_Model{

     public function __construct(){

          parent::__construct();
          
     }

     function user_get(){
          
          $query = $this->db->select("*")->from("u_login")->get();
          
          if($query->num_rows() > 0){
               return $query->result_array();
          }else{
               return NULL;
          }
     }

     function get($id = NULL){
          if(! is_null($id)){
               $query = $this->db->select("*")->from("u_login")->where("id",$id)->get();
               if($query->num_rows() === 1){
                    return $query->row_array();

               }
               return NULL;          
          }
          $query = $this->db->select("*")->from("u_login")->get();
          if($query->num_rows() > 0){
               return $query->row_array();

          }
          return NULL; 
     }

     function save($id){
          $this->db->set(
               $this->_setuser($id)          
          )
          ->insert('u_login');
          if($this->db->affected_rows() === 1){
               return $this->db->insert_id();
          }
          return NULL;
     }

     function _setuser(){
          return array(
               'id'         =>   $user['id'],
               'username'   =>   $user['username'],
               'password'   =>   $user['password'],
               'active'     =>   $user['active']
          );
     }



 /*    
     function insert($insert_data){
          $this->db->insert('u_login',$insert_data);
     }

     function delete($id){
          $this->db->delete('u_login', array('id' => $id)); 
     }
 */    

}