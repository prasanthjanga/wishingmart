<?php defined('BASEPATH') OR exit('No direct script access allowed');

class chat_model extends CI_Model
{

    function get_bothchat($chat_no){
        $chat_from=$chat_no['from'];
        $chat_to=$chat_no['to'];

        $CI = &get_instance();
        $this->chat = $CI->load->database('chat', TRUE);
        $query = $this->chat->query("SELECT * FROM `chat` WHERE chat.from_id = $chat_from and chat.to_id = $chat_to order by id ASC");

        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function post_chatinsert($chat_ins){
        $CI = &get_instance();
        $this->chat = $CI->load->database('chat', TRUE);
        $query = $this->chat->query('SELECT MAX(id) FROM chat');
        if($query->num_rows() > 0){
            $row = $query->result_array();
        }
        $max = $row[0]['MAX(id)'];

        if($max==0){
            $chat_id = $max+101; 
        }else{
            $chat_id = $max+1; 
        }

        $ins_chat=array(
            'id'       => $chat_id,
            'from_id'  => $chat_ins['from'],
            'to_id'    => $chat_ins['to'],
            'message'  => $chat_ins['msg'],
            'sent'     => $chat_ins['time'],
            'recd'     => '0',
        );

        $chat_insert=$this->chat->insert("chat", $ins_chat);
        return $chat_insert;
    }

    function post_online($chat_on_update){ // Online Update User
        $CI = &get_instance();
        $this->chat = $CI->load->database('chat', TRUE);

        $chat_on = array( 'online' => $chat_on_update['online'] );

        $chat_online=$this->chat->where('uid', $chat_on_update['uid']);
        $chat_online=$this->chat->update('online', $chat_on);
        return $chat_online;
    }

    function get_online_status($chat_uid){ // Online Update User
        $CI = &get_instance();
        $this->chat = $CI->load->database('chat', TRUE);

        $this->chat->select("online");
        $query = $this->chat->get_where("online", array("uid" => $chat_uid));
        if($query->num_rows() == 1){
            return $query->row();
        }
    }

    function get_all_chat($chat_uid){ // Online Update User
        $CI = &get_instance();
        $this->chat = $CI->load->database('chat', TRUE);

        $this->chat->select('chat.id,chat.from_id,ol.online from_online,chat.to_id,oll.online to_online,chat.sent,chat.message,chat.recd');
        $this->chat->from('chat');
        $this->chat->join('online ol', 'ol.uid = chat.from_id', 'left outer');
        $this->chat->join('online oll', 'oll.uid = chat.to_id', 'left outer');
        $this->chat->like('from_id', $chat_uid, 'none');
        $this->chat->or_like('to_id', $chat_uid, 'none');
        $this->chat->group_by("chat.from_id");
        $this->chat->order_by("chat.sent","DESC");
        return $this->chat->get()->result_array();
    }



}