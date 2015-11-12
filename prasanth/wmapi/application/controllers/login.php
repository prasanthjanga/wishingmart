<?php

//debemos colocar esta línea para extender de REST_Controller
require(APPPATH.'/libraries/REST_Controller.php');

class Login extends REST_Controller
{
    //con esto limitamos las consultas y los permisos a la api
    protected $methods = array(
        'users_get' => array('level' => 0),//para acceder a users_get debe tener level 1 y no hay limite de consultas por hora
        'user_get' => array('level' => 0,),//user_get sólo level 0, pero máximo 10 consultas por hora
        'posts_user_get' => array('level' => 0, 'limit' => 0),//se necesita level 0 y sólo se pueden hacer 10 consultas por hora
        'new_user_post' => array('level' => 0),//se necesita level 1, no hay limite de peticiones
        'new_user_put' => array('level' => 0),//se necesita level 1, no hay limite de peticiones
        'user_post' => array('level' => 0, 'limit' => 0),//se necesita level 1 y 5 peticiones
        'delete_user_delete' => array('level' => 0, 'limit' => 0),//se necesita level 1 y 5 peticiones
    );

    public function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model("registration_model");
        $this->load->helper('date');
        $this->load->helper('security');
        $this->load->model("login_model");
        $this->load->library('encrypt');

    }


    //To Check username and password
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wishing_ui1/prasanth/wmapi/login/logincheck/username/email@email.com/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS    
    public function logincheck_get(){
        if(!$this->get("username")){
            $this->response(NULL, 400);
        }
        $mail=$this->get("username");//exit();
        $dec_username=str_replace(array('-', '_', '~'), array('+', '/', '='), $mail);
        $dec_username=$this->encrypt->decode($dec_username);
        //echo $dec_username;//exit();
       
        if($dec_username ){
            $new_user = $this->login_model->check_login($dec_username);
            if($new_user){
                $this->response($new_user, 200);
            }else{
                $this->response(array("status" => "User Name Is Not Avalable."));
            }
        }
    }

    //To View 10 product on Landing page from DB 
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wishing_ui1/prasanth/wmapi/login/productlist/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS    
    public function productlist_get(){
        $list_pro = $this->login_model->get_productlist();

        if($list_pro){
            $this->response($list_pro, 200);
        }else{
            $this->response(NULL, 400);
        }
    }
    
}