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

    //To Get Granted List based on User id
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/dashboard/grantlistid/uid/105/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function grantlistid_get()
    {
        if(!$this->get("uid")){
            $this->response(NULL, 400);
        }else{
            $uid=$this->get("uid");
            $wishlist = $this->dashboard_model->get_grantlistid($uid);
            if($wishlist){
                $this->response($wishlist, 200);
            }else{
                $this->response(NULL, 400);
            }
        }//ELSE END
    }

    //To Get Grant details based on wishing id
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/dashboard/grantid/gid/105/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function grantid_get()
    {
        if(!$this->get("gid")){
            $this->response(NULL, 400);
        }else{
            $gid=$this->get("gid");
            $grantdetails = $this->dashboard_model->get_grantdetails($gid);
            if($grantdetails){
                $this->response($grantdetails, 200);
            }else{
                $this->response(NULL, 400);
            }
        }//ELSE END
    }    

    //To Get Profile details details based on User id
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/dashboard/profile/uid/104/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function profile_get()
    {
        if(!$this->get("uid")){
            $this->response(NULL, 400);
        }else{
            $uid=$this->get("uid");
            $profile = $this->dashboard_model->get_profile($uid);
            //print_r($profile);exit();
            if($profile){
                $this->response($profile, 200);
            }else{
                $this->response(NULL, 400);
            }
        }//ELSE END
    }  

    //To POST Shipping details based on User id
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/dashboard/shipping_add/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function shipping_add_post()
    {
        $address=array(
            'uid'     => $this->post("uid"),
            'add1'    => $this->post("street"),
            'add2'    => $this->post("city"),
            'add3'    => $this->post("country"),
            'pincode' => $this->post("postcode"),
            'contact' => $this->post("contact"),
        );

        if(isset($address)){
            //print_r($address);        exit();
            $new_sadd = $this->dashboard_model->post_shipping_add($address);
            if($new_sadd === false){
                $this->response(array("status" => "failed"));
            }else{
                $this->response(array("status" => "success"));
            }
        }
    }  

    //To POST Profile Pic details based on User id
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/dashboard/profile_pic/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function profile_pic_post()
    {
        $pro_pic=array(
            'pid'     => $this->post("pid"),
            'pro_pic' => $this->post("userfile"),
        );

        if(isset($pro_pic)){
            //print_r($address);        exit();
            $new_pic = $this->dashboard_model->post_profile_pic($pro_pic);
            if($new_pic === false){
                $this->response(array("status" => "failed"));
            }else{
                $this->response(array("status" => "success"));
            }
        }
    } 

    //To POST user details based on User id
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/dashboard/about_me/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function about_me_post()
    {
        $prof_me=array(
            'uid'      => $this->post("uid"),
            'fn'       => $this->post("fn"),
            'ln'       => $this->post("ln"),
            'dob'      => $this->post("dob"),
            'gender'   => $this->post("gender"),
            'country'  => $this->post("country"),
            'contact'  => $this->post("contact"),
            'hcontact' => $this->post("hcontact"),
        );

        if(isset($prof_me)){
            //print_r($prof_me);        exit();
            $new_me = $this->dashboard_model->post_about_me($prof_me);
            if($new_me === false){
                $this->response(array("status" => "failed"));
            }else{
                $this->response(array("status" => "success"));
            }
        }
    } 

    //To POST Bank AC details based on User id
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/dashboard/bank_ac/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function bank_ac_post()
    {
        $bank_ac=array(
            'uid'      => $this->post("uid"),
            'cno'      => $this->input->post('cno'),
            'ib'       => $this->input->post('ib'),
            'ct'       => $this->input->post('ct'),
            'country'  => $this->input->post('country'),
        );

        if(isset($bank_ac)){
            //print_r($bank_ac);        exit();
            $new_bank = $this->dashboard_model->post_bank_ac($bank_ac);
            if($new_bank === false){
                $this->response(array("status" => "failed"));
            }else{
                $this->response(array("status" => "success"));
            }
        }
    } 

    //To POST Postal Address details based on User id
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/dashboard/postal_address/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function postal_address_post()
    {
        $postal_address=array(
            'uid'        => $this->post('uid'),
            'a_add1'     => $this->input->post('add1'),
            'a_add2'     => $this->input->post('add2'),
            'a_add3'     => $this->input->post('add3'),
            'a_pincode'  => $this->input->post('post'),
        );

        if(isset($postal_address)){
            //print_r($postal_address);        exit();
            $new_address = $this->dashboard_model->post_postal_address($postal_address);
            if($new_address === false){
                $this->response(array("status" => "failed"));
            }else{
                $this->response(array("status" => "success"));
            }
        }
    } 

    //To POST Change Of Password based on User id
    //http://localhost/foldername/api/users/X-API-KEY/miapikey
    //http://localhost/wmapi/dashboard/change_password/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS
    public function change_password_post()
    {
        $old_pwd = $this->input->post('old_pwd');
        $new_pwd = $this->input->post('new_pwd');
        $old_pwd = do_hash($old_pwd, 'md5');
        $new_pwd = do_hash($new_pwd, 'md5');

        $change_pwd=array(
            'uid'     => $this->post('uid'),
            'old_pwd' => $old_pwd,
            'new_pwd' => $new_pwd,
        );

        if(isset($change_pwd)){
            //print_r($change_pwd);  exit();
            $new_pass = $this->dashboard_model->post_change_password($change_pwd);
            if($new_pass === false){
                $this->response(array("status" => "failed"));
            }else{
                $this->response(array("status" => "success"));
            }
        }
    } 




}// CLASS END