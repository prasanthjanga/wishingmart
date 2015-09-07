<?php

//debemos colocar esta línea para extender de REST_Controller
require(APPPATH.'/libraries/REST_Controller.php');

class Registration extends REST_Controller
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
        $this->load->model("registration_model");
        $this->load->helper('date');
        $this->load->helper('security');
        $this->load->library('encrypt');




    }


    //To Get country Names
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/registration/country/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function country_get()
    {
        $this->load->model("registration_model");
        $users = $this->registration_model->get_country();

        if($users){
            $this->response($users, 200);
        }else{
            $this->response(NULL, 400);
        }
    }

    //To Get email Id
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/registration/checkmail/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function checkmail_get()
    {
        $this->load->model("registration_model");
        $users = $this->registration_model->get_mail();

        if($users){
            $this->response($users, 200);
        }else{
            $this->response(NULL, 400);
        }
    }

    //create New User
    //http://localhost/foldername/api/new_user/X-API-KEY/miapikey
    //http://localhost/wmapi/registration/new_user/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function new_user_post()
    {
        
        $fn      = $this->post("firstname");
        $ln      = $this->post("lastname");
        $gender  = $this->post("gender");
        $dob     = $this->post("dob");
        $cnid    = $this->post("country");
        $email   = $this->post("email");
        $pwd     = $this->post("pwd");

        $datetime = mdate('%Y-%m-%d %h:%i:%s',time());

        //$ra=rand(10000,100000);
        //$ra=$email.$ra;
        $link=md5($email); // to create randum number for activation link
        
        $pwd = do_hash($pwd, 'md5');

        if($fn && $ln && $dob && $gender && $cnid && $email && $pwd && $datetime && $link){
            
            $this->load->model("registration_model");

            $new_user = $this->registration_model->create_user($fn,$ln,$dob,$gender,$cnid,$email,$pwd,$datetime,$link);
            if($new_user === false){
                $this->response(array("status" => "failed"));
            }else{
                $this->response(array("status" => "success"));
            }
        }
    }

    //To Get email Id
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wishing_ui1/prasanth/wmapi/registration/send/username/email@email.com/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS    
    public function send_get(){
        $mail=$this->get("username");//exit();
        $dec_username=str_replace(array('-', '_', '~'), array('+', '/', '='), $mail);
        $dec_username=$this->encrypt->decode($dec_username);
        //echo $dec_username;//exit();
        if($dec_username){
            $this->load->model("registration_model");
            $new_user = $this->registration_model->checkmail($dec_username);
            if($new_user){
                //$this->response($new_user, 200);
                $this->response(array("status" => "success"));

            }else{
                //$this->response(NULL, 400);
                $this->response(array("status" => "failed"));

            }
        }
    }
    

    
}