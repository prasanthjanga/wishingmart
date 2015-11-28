<?php

//debemos colocar esta línea para extender de REST_Controller
require(APPPATH.'/libraries/REST_Controller.php');

class Wishing extends REST_Controller
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
        $this->load->model("wishing_model");
        $this->load->helper('date');
        $this->load->helper('security');
        $this->load->library('encrypt');




    }

    //To Get country Names
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/wishing/country/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function country_get()
    {
        $users = $this->wishing_model->get_country();

        if($users){
            $this->response($users, 200);
        }else{
            $this->response(NULL, 400);
        }
    }

    //To Get country Names using Country ID
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/wishing/countryid/id/2/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function countryid_get()
    {
        if(!$this->get("id")){
            $this->response(NULL, 400);
        }
        $this->load->model("wishing_model");
        $user = $this->wishing_model->get_countryid($this->get("id"));
        if($user){
            $this->response($user, 200);
        }else{
            $this->response(NULL, 400);
        }
    }

    //To Get Category Names
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/wishing/category/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function category_get()
    {
        $users = $this->wishing_model->get_category();

        if($users){
            $this->response($users, 200);
        }else{
            $this->response(NULL, 400);
        }
    }

    //To Get Sub-Category Names
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/wishing/subcategory/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function subcategory_get()
    {
        $users = $this->wishing_model->get_subcategory();

        if($users){
            $this->response($users, 200);
        }else{
            $this->response(NULL, 400);
        }
    }

    //To Get Sub-Category Names using Sub-Category ID
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/wishing/subcategoryid/id/2/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function subcategoryid_get()
    {
        if(!$this->get("id")){
            $this->response(NULL, 400);
        }
        $this->load->model("wishing_model");
        $user = $this->wishing_model->get_subcategoryid($this->get("id"));
        if($user){
            $this->response($user, 200);
        }else{
            $this->response(NULL, 400);
        }
    }

    //create New Wish
    //http://localhost/foldername/api/new_user/X-API-KEY/miapikey
    //http://localhost/wishing_ui1/prasanth/wmapi/wishing/new_wish/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function new_wish_post()
    {
        
        //$pname      = $this->post("pname");
        //$category   = $this->post("category");
        //$scategory  = $this->post("scategory");
       // $country    = $this->post("country");
        //$brand      = $this->post("brand");
        //$colour     = $this->post("colour");
        //$desc       = $this->post("desc");
        //$userfile   = $this->post("userfile");
        $array=array(
            'pname'     =>$this->post("pname"),
            'scategory' =>$this->post("scategory"),
            'country'   =>$this->post("country"),
            'colour'    =>$this->post("colour"),
            'brand'     =>$this->post("brand"),
            'rid'       =>$this->post("rid"),
            'desc'      =>$this->post("desc"),
            'userfile'  =>$this->post("userfile"),
        );
        //echo $pname;exit();
        
        if($array){
            
            $this->load->model("wishing_model");

            $new_wish = $this->wishing_model->create_wish($array);
            if($new_wish == false){
                $this->response(array("status" => "failed"));
            }else{
                $this->response(array("status" => "success"));
            }
        }
    }

    //create New Wish
    //http://localhost/foldername/api/new_user/X-API-KEY/miapikey
    //http://localhost/wishing_ui1/prasanth/wmapi/wishing/grant_wish/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function grant_wish_post()
    {
        $array=array(
            'wid'       =>$this->post("wid"),
            'gtuid'     =>$this->post("gtuid"),
            'gtprice'   =>$this->post("gtprice"),
            'gtdesc'    =>$this->post("gtdesc"),
            'gtimg'     =>$this->post("userfile"),
            'gtcname'   =>$this->post("gtcname"),
            'scompany'  =>$this->post("scompany"),
            'scost'     =>$this->post("scost"),
            'sedays'    =>$this->post("sedays"),
            'bweight'   =>$this->post("bweight"),
            'bwsize'    =>$this->post("bwsize"),
            'bhsize'    =>$this->post("bhsize"),
        );
        //print_r($array);exit();
        
        if($array){
            $this->load->model("wishing_model");

            $new_grant = $this->wishing_model->grant_wish($array);
            if($new_grant == false){
                $this->response(array("status" => "failed"));
            }else{
                $this->response(array("status" => "success"));
            }
        }
    }

    //create New Wish
    //http://localhost/foldername/api/new_user/X-API-KEY/miapikey
    //http://localhost/wishing_ui1/prasanth/wmapi/wishing/all_wish_list/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function all_wish_list_get()
    {
        $wishes = $this->wishing_model->get_all_wishes();

        if($wishes){
            $this->response($wishes, 200);
        }else{
            $this->response(NULL, 400);
        }
    }// all_wish_list_get END


    //To Get Wishing user details for granting page
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/wishing/wishuser/wrid/104/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function wishuser_get()
    {
        if(!$this->get("wrid")){
            $this->response(NULL, 400);
        }
        $this->load->model("wishing_model");
        $user = $this->wishing_model->get_wishuser($this->get("wrid"));
        if($user){
            $this->response($user, 200);
        }else{
            $this->response(NULL, 400);
        }
    }

    //To Get Wishing details by wish id
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/wishing/wishbyid/wpid/101/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function wishbyid_get()
    {
        if(!$this->get("wpid")){
            $this->response(NULL, 400);
        }
        $this->load->model("wishing_model");
        $user = $this->wishing_model->get_wishbyid($this->get("wpid"));
        if($user){
            $this->response($user, 200);
        }else{
            $this->response(NULL, 400);
        }
    }

 

    
}// CLASS END