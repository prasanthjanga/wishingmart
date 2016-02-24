<?php defined('BASEPATH') OR exit('No direct script access allowed');

function post_datatoapi($post_url,$post_data){
  if($post_url){
    $username = 'admin';
    $password = '1234';
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, $post_url);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $post_data);
     
    // Optional, delete this line if your API is open
    curl_setopt($curl_handle, CURLOPT_USERPWD, $username . ':' . $password);
     
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);
     
    $result = json_decode($buffer);
    return $result;
  }//URL IF END
}