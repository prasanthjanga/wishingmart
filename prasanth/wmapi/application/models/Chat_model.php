<?php defined('BASEPATH') OR exit('No direct script access allowed');

class chat_model extends CI_Model
{

/********** CICHAT API FUNCTIONS START ************/

    function get_chatto($chat_no){
        $chat_to=$chat_no['uname'];

        $CI = &get_instance();
        $this->chat = $CI->load->database('chat', TRUE);
        //$query = $this->chat->query("select * from chat c where (c.to = '".mysql_real_escape_string($chat_to)."' AND c.recd = 0) order by c.id ASC");
        $query = $this->chat->query("select * from chat c where c.to = '".$chat_to."' AND c.recd = '0' order by c.id ASC");

        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    function post_recd($chat_no){ // Online Update User
        $chat_no = $chat_no['uname'];
        $CI = &get_instance();
        $this->chat = $CI->load->database('chat', TRUE);

        $query = $this->chat->query("update chat set recd = 1 where chat.to = '$chat_no' and recd = 0");
        return $query;
    }

    function post_chatinsert($chat_in){ // Online Update User
        $CI = &get_instance();
        $this->chat = $CI->load->database('chat', TRUE);
        $chat_time = date('Y-m-d H:m:s',time());//2015-10-22 14:16:19

        $query = $this->chat->query("insert into chat (chat.id,chat.from,chat.to,message,sent,recd) values ('','".$chat_in['from']."', '".$chat_in['to']."','".$chat_in['message']."','".$chat_time."',0)");
        return $query;

    }






/********** CICHAT API FUNCTIONS END ************/



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

    function post_chatinsert1($chat_ins){
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
        //echo $chat_on_update['online'];

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

        $this->chat->select('chat.id,chat.from,ol.online from_online,chat.to,oll.online to_online,chat.sent,chat.message,chat.recd');
        $this->chat->from('chat');
        $this->chat->join('online ol', 'ol.uid = chat.from', 'left outer');
        $this->chat->join('online oll', 'oll.uid = chat.to', 'left outer');
        $this->chat->like('from', $chat_uid, 'none');
        $this->chat->or_like('to', $chat_uid, 'none');
        //$this->chat->group_by("chat.from");
        $this->chat->order_by("chat.sent","DESC");
        return $this->chat->get()->result_array();
    }

    function get_friends_list($chat_uid){ // Online Update User
        $CI = &get_instance();
        $this->chat = $CI->load->database('chat', TRUE);

        $query=$this->chat->query("SELECT DISTINCT(c.from) fromlist,r.fn,ol.online from_on
FROM vr_chat.chat c
LEFT JOIN vr_users.registration r ON r.rid = c.from
LEFT JOIN vr_chat.online ol ON ol.uid = c.from
WHERE $chat_uid IN (c.from, c.to)
union
SELECT DISTINCT(cc.to) fromlist,r.fn,ol.online to_on
FROM vr_chat.chat cc
LEFT JOIN vr_users.registration r ON r.rid = cc.to
LEFT JOIN vr_chat.online ol ON ol.uid = cc.to
WHERE $chat_uid IN (cc.from, cc.to)
");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }


    function get_both_chat($chat_id){ // Online Update User
        $CI = &get_instance();
        $this->chat = $CI->load->database('chat', TRUE);
        //SELECT * FROM chat WHERE 102 AND 101 IN (chat.to, chat.from)
        //$this->chat->select('chat.id,chat.from,ol.online from_online,chat.to,oll.online to_online,chat.sent,chat.message,chat.recd');
        //$this->chat->from('chat');
        //$this->chat->join('online ol', 'ol.uid = chat.from', 'left outer');
        //$this->chat->join('online oll', 'oll.uid = chat.to', 'left outer');
        //$this->chat->like('from', $chat_id['fid'], 'none');
        //$this->chat->or_like('to', $chat_id['tid'], 'none');
        //$this->chat->group_by("chat.from");
        
        //$this->chat->where("101","102");
        //$this->chat->in("chat.from","chat.to");
        //$this->chat->order_by("chat.sent","DESC");

        $fid = $chat_id['fid'];
        $tid = $chat_id['tid'];


        $query=$this->chat->query("SELECT c.id,c.from,ol.online from_online,pf.prof_img from_pimg,rf.fn from_fn,c.to,oll.online to_online,pt.prof_img to_pimg,rt.fn to_fn,c.sent,c.message,c.recd
FROM vr_chat.chat c
LEFT JOIN vr_chat.online ol ON ol.uid = c.from
LEFT JOIN vr_chat.online oll ON oll.uid = c.to
LEFT JOIN vr_users.profile pf ON pf.pid = c.from
LEFT JOIN vr_users.profile pt ON pt.pid = c.to
LEFT JOIN vr_users.registration rf ON rf.rid = c.from
LEFT JOIN vr_users.registration rt ON rt.rid = c.to
WHERE c.from LIKE $fid
AND c.to LIKE $tid
union
SELECT cc.id,cc.from,ol.online from_online,pf.prof_img from_pimg,rf.fn from_fn,cc.to,oll.online to_online,pt.prof_img to_pimg,rt.fn to_fn,cc.sent,cc.message,cc.recd
FROM vr_chat.chat cc
LEFT JOIN vr_chat.online ol ON ol.uid = cc.from
LEFT JOIN vr_chat.online oll ON oll.uid = cc.to
LEFT JOIN vr_users.profile pf ON pf.pid = cc.from
LEFT JOIN vr_users.profile pt ON pt.pid = cc.to
LEFT JOIN vr_users.registration rf ON rf.rid = cc.from
LEFT JOIN vr_users.registration rt ON rt.rid = cc.to
WHERE cc.from LIKE $tid
AND cc.to LIKE $fid ");
        if($query->num_rows() > 0){
            return $query->result();
        }
    }



}