<?php defined('BASEPATH') OR exit('No direct script access allowed');

//debemos colocar esta línea para extender de REST_Controller
require(APPPATH.'/libraries/REST_Controller.php');

class Dashboard extends REST_Controller
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
        $this->load->model("dashboard_model");
        $this->load->helper('date');
        $this->load->helper('security');
        $this->load->library('encrypt');




    }

    //To Get Wishing List based on User id
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/dashboard/wishlistid/uid/105/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function wishlistid_get()
    {
        if(!$this->get("uid")){
            $this->response(NULL, 400);
        }else{
            $uid=$this->get("uid");
            $wishlist = $this->dashboard_model->get_wishlistid($uid);
            if($wishlist){
                $this->response($wishlist, 200);
            }else{
                $this->response(NULL, 400);
            }
        }//ELSE END
    }

    //To Get Wish details based on wishing id
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/dashboard/wishid/wid/105/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function wishid_get()
    {
        if(!$this->get("wid")){
            $this->response(NULL, 400);
        }else{
            $wid=$this->get("wid");
            $wishdetails = $this->dashboard_model->get_wishdetails($wid);
            if($wishdetails){
                $this->response($wishdetails, 200);
            }else{
                $this->response(NULL, 400);
            }
        }//ELSE END
    }

    

}// CLASS END