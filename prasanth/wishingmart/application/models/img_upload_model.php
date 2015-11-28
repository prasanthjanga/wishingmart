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

		$config=array(
			'allowed_types' => 'jpeg|jpg|png|gif',
			'upload_path'	=>	$this->gallery_path,
			'max_size'		=> '100',
		);

		$this->load->library('upload',$config);
		if ( ! $this->upload->do_upload()){
			$data = array('error' => $this->upload->display_errors());
			return $data;
		}else{
			$data = array('image_data' => $this->upload->data());

			//echo "<pre>";
			//print_r($data['image_data']);//exit();
			//echo "</pre>";

			$config=array(
				'image_library' => 'gd2',
				'source_image'	=> $data['image_data']['full_path'],
				'new_image'		=> $this->gallery_path . '/profile',
				'maintain_ration'=> true,
				'width'			=> 160,
				'height'		=> 160,
			);
			//echo "<pre>";
			//print_r($image_data);
			//echo "</pre>";

			$this->load->library('image_lib');
			$this->image_lib->initialize($config);

			$this->image_lib->resize();


			$files = scandir($this->gallery_path);
			$files = array_diff($files, array('.','..','profile'));

			//print_r($files);
			@unlink( $config['source_image'] );

			$images = array();
			foreach($files as $file){
				if($file == $data['image_data']['file_name']){
					$images[]=array(
						'filename'	=> $file,
						'url'		=> $this->gallery_path_url . $file,
						'thumb_url'	=> $this->gallery_path_url . 'profile/' . $file
					);
				}
			}
			return $images;
		}//else end
	}

	public function granting_do_upload(){ // TO GET LANDING PAGE

		$config=array(
			'allowed_types' => 'jpeg|jpg|png|gif',
			'upload_path'	=>	$this->gallery_path,
			'max_size'		=> '100',
		);

		$this->load->library('upload',$config);
		if ( ! $this->upload->do_upload()){
			$data = array('error' => $this->upload->display_errors());
			return $data;
		}else{
			$data = array('image_data' => $this->upload->data());

			//echo "<pre>";
			//print_r($data['image_data']);//exit();
			//echo "</pre>";

			$config=array(
				'image_library' => 'gd2',
				'source_image'	=> $data['image_data']['full_path'],
				'new_image'		=> $this->gallery_path . '/products/granted',
				'maintain_ration'=> true,
				'width'			=> 160,
				'height'		=> 160,
			);
			//echo "<pre>";
			//print_r($image_data);
			//echo "</pre>";

			$this->load->library('image_lib');
			$this->image_lib->initialize($config);

			$this->image_lib->resize();


			$files = scandir($this->gallery_path);
			$files = array_diff($files, array('.','..','profile'));

			//print_r($files);
			@unlink( $config['source_image'] );

			$images = array();
			foreach($files as $file){
				if($file == $data['image_data']['file_name']){
					$images[]=array(
						'filename'	=> $file,
						'url'		=> $this->gallery_path_url . $file,
						'thumb_url'	=> $this->gallery_path_url . 'profile/' . $file
					);
				}
			}
			return $images;
		}//else end
	}

	public function wishing_do_upload(){ // TO GET LANDING PAGE

		$config=array(
			'allowed_types' => 'jpeg|jpg|png|gif',
			'upload_path'	=>	$this->gallery_path,
			'max_size'		=> '100',
		);

		$this->load->library('upload',$config);
		if ( ! $this->upload->do_upload()){
			$data = array('error' => $this->upload->display_errors());
			return $data;
		}else{
			$data = array('image_data' => $this->upload->data());

			//echo "<pre>";
			//print_r($data['image_data']);//exit();
			//echo "</pre>";

			$config=array(
				'image_library' => 'gd2',
				'source_image'	=> $data['image_data']['full_path'],
				'new_image'		=> $this->gallery_path . '/products/wished',
				'maintain_ration'=> true,
				'width'			=> 160,
				'height'		=> 160,
			);
			//echo "<pre>";
			//print_r($image_data);
			//echo "</pre>";

			$this->load->library('image_lib');
			$this->image_lib->initialize($config);

			$this->image_lib->resize();


			$files = scandir($this->gallery_path);
			$files = array_diff($files, array('.','..','profile'));

			//print_r($files);
			@unlink( $config['source_image'] );

			$images = array();
			foreach($files as $file){
				if($file == $data['image_data']['file_name']){
					$images[]=array(
						'filename'	=> $file,
						'url'		=> $this->gallery_path_url . $file,
						'thumb_url'	=> $this->gallery_path_url . 'products/wished/' . $file
					);
				}
			}
			return $images;
		}//else end
	}


}