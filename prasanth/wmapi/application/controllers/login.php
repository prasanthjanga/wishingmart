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
        

    }

    //To Get country Names
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/login/user/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function user_get()
    {
        $this->load->model("login_model");
        $users = $this->login_model->get_login();

        if($users){
            $this->response($users, 200);
        }else{
            $this->response(NULL, 400);
        }
    }


    //http://localhost/wmapi/login/checkuser/id/2/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function checkuser_get(){
        $posts = $this->login_model->check_name();
        if($posts){
            $this->response($posts, 200);
        }else{
            $this->response(NULL, 400);
        }
    }

    //To Get country Names
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/login/forgot/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function password_get()
    {
        $this->load->model("login_model");
        $users = $this->login_model->get_pwd();

        if($users){
            $this->response($users, 200);
        }else{
            $this->response(NULL, 400);
        }
    }

    

    
}