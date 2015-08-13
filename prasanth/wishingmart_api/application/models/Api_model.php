<?php

class Api_model extends CI_Model
{
    public function get($id){
        $this->db->select("username,register_date");
        $query = $this->db->get_where("users_api", array("id" => $id));
        if($query->num_rows() == 1){
            return $query->row();
        }
    }

    public function get_all(){ // TO GET ALL ROWS IN A TABLE
        $query = $this->db->get("login");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    public function posts($id){
        $this->db->where("user_id", $id);
        $query = $this->db->get("messages_api");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    public function create_user($username,$password){
        //echo "sample"; exit();
        $data = array(
            "username" => $username,
            "password" => $password
        );
        return $this->db->insert("users_api", $data);
    }

    public function update($data){

        $this->db->where('id', $data['id']);
        return $this->db->update('users_api',$data); 

         
    }

    public function delete($id){
        $this->db->where('id', $id);
        return $this->db->delete('users_api'); 

         
    }

}