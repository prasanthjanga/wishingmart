<?php

//debemos colocar esta línea para extender de REST_Controller
require(APPPATH.'/libraries/REST_Controller.php');

class Usersget extends REST_Controller
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
        $this->load->model("usersget_model");
        $this->load->helper('date');
        $this->load->helper('security');

    }

    //TO GET COUNTRY NAMES
    //http://localhost/wmapi/usersget/country/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function country_get(){

        $users = $this->usersget_model->get_country();
        if($users){
            $this->response($users, 200);
        }else{
            $this->response(NULL, 400);
        }
    }

    //TO GET EMAIL ID
    //http://localhost/wmapi/usersget/checkmail/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function checkmail_get(){

        $users = $this->usersget_model->get_mail();
        if($users){
            $this->response($users, 200);
        }else{
            $this->response(NULL, 400);
        }
    }
    
    //TO GET ADDRESS
    //http://localhost/wmapi/usersget/address/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function address_get(){

        $users = $this->usersget_model->get_add();
        if($users){
            $this->response($users, 200);
        }else{
            $this->response(NULL, 400);
        }
    }
    
    //TO GET PROFILE DETAILS
    //http://localhost/wmapi/usersget/profile/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function profile_get(){

        $users = $this->usersget_model->get_profile();
        if($users){
            $this->response($users, 200);
        }else{
            $this->response(NULL, 400);
        }
    }
   
    //TO GET REGISTRATION DETAILS
    //http://localhost/wmapi/usersget/registration/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function registration_get(){

        $users = $this->usersget_model->get_registration();
        if($users){
            $this->response($users, 200);
        }else{
            $this->response(NULL, 400);
        }
    }
  
    //TO GET SHIPPING ADDRESS DETAILS
    //http://localhost/wmapi/usersget/sadd/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function sadd_get(){

        $users = $this->usersget_model->get_sadd();
        if($users){
            $this->response($users, 200);
        }else{
            $this->response(NULL, 400);
        }
    }
 
    //TO GET TRANSACTION DETAILS
    //http://localhost/wmapi/usersget/transaction/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function transaction_get(){

        $users = $this->usersget_model->get_transaction();
        if($users){
            $this->response($users, 200);
        }else{
            $this->response(NULL, 400);
        }
    }

    //TO GET USERS DETAILS
    //http://localhost/wmapi/usersget/user/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function user_get(){

        $users = $this->usersget_model->get_user();
        if($users){
            $this->response($users, 200);
        }else{
            $this->response(NULL, 400);
        }
    }


    

    
}