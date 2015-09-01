<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Img_upload_model extends CI_Model {

	var $gallery_path;
	var $gallery_path_url;

	public function __construct(){
		parent::__construct();
		$this->gallery_path = realpath(APPPATH . '../images');
		$this->gallery_path_url = base_url().'images/';
	}
    

	public function do_upload(){ // TO GET LANDING PAGE
<<<<<<< HEAD
		$config=array(
			'allowed_types' => 'jpeg|jpg|png|gif',
			'upload_path'	=> $this->gallery_path,
=======

		$config=array(
			'allowed_types' => 'jpeg|jpg|png|gif',
			'upload_path'	=>	$this->gallery_path,
>>>>>>> 121e2cd84d2002ac5494b610d2a48b1f463ec934
			'max_size'		=> 2000
		);

		$this->load->library('upload',$config);
		$this->upload->do_upload();
<<<<<<< HEAD

		$image_data = $this->upload->data();
=======
		$image_data = $this->upload->data();
		//print_r($image_data);

		//return $image_data;

>>>>>>> 121e2cd84d2002ac5494b610d2a48b1f463ec934
		//echo "<pre>";
		//print_r($image_data);
		//echo "</pre>";

		$config=array(
				'source_image'	=> $image_data['full_path'],
				'new_image'		=> $this->gallery_path . '/thumbs',
				'maintain_ration'=> true,
				'width'			=> 150,
				'height'		=> 100,

		);
		//echo "<pre>";
		//print_r($image_data);
		//echo "</pre>";

		$this->load->library('image_lib',$config);
		$this->image_lib->resize();



		$files = scandir($this->gallery_path);
		$files = array_diff($files, array('.','..','thumbs'));

		//print_r($files);

		$images = array();
		foreach($files as $file){
<<<<<<< HEAD
			//echo $file;
			//echo "--".$image_data['file_name']."--";
=======
>>>>>>> 121e2cd84d2002ac5494b610d2a48b1f463ec934
			if($file == $image_data['file_name']){
				$images[]=array(
						'filename'	=> $file,
						'url'		=> $this->gallery_path_url . $file,
						'thumb_url'	=> $this->gallery_path_url . 'thumbs/' . $file
				);
			}
		}
		return $images;
<<<<<<< HEAD
=======


>>>>>>> 121e2cd84d2002ac5494b610d2a48b1f463ec934
	}


}