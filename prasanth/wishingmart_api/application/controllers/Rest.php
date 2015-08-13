<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';


class Rest extends REST_Controller {


    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['user_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['user_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['user_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->model('user_model');
       // $this->load->spark('restclient/2.1.0');

        $this->load->library('rest');
        
    }

	public function test_get(){

        echo "put data";

		$data = $this->user_model->user_get();

        $this->response($data,200); // OK (200) being the HTTP response code

	}

    public function index_get(){
        $users = $this->user_model->get();
        if(! is_null($users)){
            $this->response(array('response' => $users), 200);
        }else{
            $this->response(array('error' => 'NO User Found'), 404);
        }
    }// index_get end
    
    public function find_get($id){
        if(! $id){
            $this->response(NULL, 400);
        }
        $user = $this->user_model->get($id);
        if(! is_null($user)){
            $this->response(array('response' => $user), 200);
        }else{
            $this->response(array('error' => 'No Id Found In Table'), 404);
        }
    }// find_get end

    public function index_post(){
        $data=array(
            'id'        =>  $this->post('id'), 
            'username'  =>  $this->post('username'),
            'password'  =>  $this->post('password'),
            'active'    =>  $this->post('active')
        );
       if(! $data){
            $this->response(NULL, 400);
        }
        $userid = $this->user_model->save($data);
        if(! is_null($userid)){
            $this->response(array("response" => $userid),200);
        }else{
            $this->response(array('error' => 'No Rows Inserted In Table'), 404);
        }

    }
    public function index_put($id){
        
    }
    public function index_delete($id){

    }


/*
    public function index_post(){
        $insert_data=array(
            'id'=> '', 
            'username'=>'hello',
            'password'=>'hello',
            'active'=>1 
        );
        $result = $this->user_model->insert($insert_data);
        $this->response($result, 200); // CREATED (201) being the HTTP response code

    }
*/

/*    
    public function test2_delete(){
        echo "delete";



        //$id = (int) $this->get('id');
        $id= 1;

        // Validate the id.
        if ($id <= 0)
        {
            // Set the response and exit
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        }

        $this->user_model->delete($id);
        $message = [
            'id' => $id,
            'message' => 'Deleted the resource'
        ];

        $this->set_response($message, REST_Controller::HTTP_NO_CONTENT); // NO_CONTENT (204) being the HTTP response code

 

   }
*/

}
