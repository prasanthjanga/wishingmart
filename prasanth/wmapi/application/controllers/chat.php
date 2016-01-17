<?php defined('BASEPATH') OR exit('No direct script access allowed');

//debemos colocar esta línea para extender de REST_Controller
require(APPPATH.'/libraries/REST_Controller.php');

class Chat extends REST_Controller
{
    //con esto limitamos las consultas y los permisos a la api
    protected $methods = array(
        'users_get' => array('level' => 0),//para acceder a users_get debe tener level 1 y no hay limite de consultas por hora
        'user_get' => array('level' => 0, 'limit' => 5),//user_get sólo level 0, pero máximo 10 consultas por hora
        'posts_user_get' => array('level' => 0, 'limit' => 10),//se necesita level 0 y sólo se pueden hacer 10 consultas por hora
        'new_user_post' => array('level' => 0),//se necesita level 1, no hay limite de peticiones
        'new_user_put' => array('level' => 0),//se necesita level 1, no hay limite de peticiones
        'user_post' => array('level' => 0, 'limit' => 55),//se necesita level 1 y 5 peticiones
        'delete_user_delete' => array('level' => 0, 'limit' => 5),//se necesita level 1 y 5 peticiones
    );

    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model("chat_model");
        $this->load->helper('date');
        $this->load->helper('security');
        $this->load->library('encrypt');
    }

/********** CICHAT API FUNCTIONS START ************/

    public function chatto_get(){
        $chat_to=$this->get("uname");
        if(empty($chat_to)){
            $this->response(NULL, 400);
        }else{
            $chat_no=array(
                'uname'   => $chat_to,
            );

            $chat = $this->chat_model->get_chatto($chat_no);
            if($chat){
                $this->response($chat, 200);
            }else{
                $this->response(NULL, 400);
            }
        }//ELSE END

    }
    
    public function recd_post(){
        $chat_to = $this->input->post("to");
        if(empty($chat_to)){
            $this->response(NULL, 400);
        }else{
            $chat_no=array(
                'uname'   => $chat_to,
            );

            $chat_read = $this->chat_model->post_recd($chat_no);
            if($chat_read){
                $this->response($chat_read, 200);
            }else{
                $this->response(NULL, 400);
            }
        }//ELSE END
    }

    public function chatinsert_post(){
        $chat_in = array(
            'from'    => $this->input->post("from"),
            'to'      => $this->input->post("to"),
            'message' => $this->input->post("message"),
        );
        if(empty($chat_in)){
            $this->response(NULL, 400);
        }else{
            $chat_insert = $this->chat_model->post_chatinsert($chat_in);
            if($chat_insert){
                $this->response($chat_insert, 200);
            }else{
                $this->response(NULL, 400);
            }
        }//ELSE END
    }


/********** CICHAT API FUNCTIONS END ************/





    //To Get Chat of both sides
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/chat/bothchat/from/104/to/105/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function bothchat_get()
    {
        $chat_from=$this->get("from");
        $chat_to=$this->get("to");
        if(empty($chat_from) || empty($chat_to)){
            $this->response(NULL, 400);
        }else{
            $chat_no=array(
                'from' => $chat_from,
                'to'   => $chat_to,
            );

            $chat = $this->chat_model->get_bothchat($chat_no);
            if($chat){
                $this->response($chat, 200);
            }else{
                $this->response(NULL, 400);
            }
        }//ELSE END
    }


    //To Inser Chat of both users
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/chat/chatinsert/105/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function chatinsert1_post()
    {
        $chat_from = $this->input->post("from");
        $chat_to   = $this->input->post("to");
        $chat_msg  = $this->input->post("msg");
        $chat_time = date('Y-m-d H:m:s',time());//2015-10-22 14:16:19

        if(empty($chat_from)){
            $this->response(NULL, 400);
        }elseif(empty($chat_to)){
            $this->response(NULL, 400);
        }elseif(empty($chat_msg)){
            $this->response(NULL, 400);
        }elseif(empty($chat_time)){
            $this->response(NULL, 400);
        }else{
            $chat_ins=array(
                'from' => $chat_from,
                'to'   => $chat_to,
                'msg'  => $chat_msg,
                'time' => $chat_time,
            );

            $chat_insert = $this->chat_model->post_chatinsert1($chat_ins);
            if($chat_insert === false){
                $this->response(array("status" => "failed"));
            }else{
                $this->response(array("status" => "success"));
            }
        }//ELSE END
    }

    //To put user in Online = 1 offline = 0
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/chat/online/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function online_post()
    {
        $chat_uid    = $this->input->post("uid");
        $chat_online = $this->input->post("online");

        if(empty($chat_uid)){
            $this->response(NULL, 400);
        }else{
            $chat_on_update=array(
                'uid'    => $chat_uid,
                'online' => $chat_online,
            );

            $chat_on = $this->chat_model->post_online($chat_on_update);
            if($chat_on === false){
                $this->response(array("status" => "failed"));
            }else{
                $this->response(array("status" => "success"));
            }
        }//ELSE END
    }

    //To GET user in Online or offline
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/chat/online_status/uid/103/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function online_status_get()
    {
        //$chat_uid = $this->get("uid");
        $chat_uid = $this->get("uid");

        if(empty($chat_uid)){
            $this->response(NULL, 400);
        }else{
            $chat_status = $this->chat_model->get_online_status($chat_uid);
             if($chat_status){
                $this->response($chat_status, 200);
            }else{
                $this->response(array("status" => "failed."));
            }
        }//ELSE END
    }


    //To GET all user chat by user id
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/chat/all_chat/uid/103/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function all_chat_get()
    {
        //$chat_uid = $this->get("uid");
        $chat_uid = $this->get("uid");

        if(empty($chat_uid)){
            $this->response(NULL, 400);
        }else{
            $all_chat = $this->chat_model->get_all_chat($chat_uid);
             if($all_chat){
                $this->response($all_chat, 200);
            }else{
                $this->response(array("status" => "failed."));
            }
        }//ELSE END
    }

    //To GET all user chat by user id
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/chat/friends_list/uid/102/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function friends_list_get()
    {
        $chat_uid = $this->get("uid");

        if(empty($chat_uid)){
            $this->response(NULL, 400);
        }else{
            $list_fri = $this->chat_model->get_friends_list($chat_uid);
             if($list_fri){
                $this->response($list_fri, 200);
            }else{
                $this->response(array("status" => "failed."));
            }
        }//ELSE END
    }


    //To GET all user chat by user id
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/chat/both_chat/fid/102/tid/101/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function both_chat_get()
    {
        //$chat_uid = $this->get("uid");
        $chat_id = array(
            'fid'=>$this->get("fid"),
            'tid'=>$this->get("tid"),
        );

        if(empty($chat_id)){
            $this->response(NULL, 400);
        }else{
            $chat_both = $this->chat_model->get_both_chat($chat_id);
             if($chat_both){
                $this->response($chat_both, 200);
            }else{
                $this->response(array("status" => "failed."));
            }
        }//ELSE END
    }



}// CLASS END