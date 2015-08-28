<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('wm')){
    function wm(){
    	$date = @date('Y-m-d H:i:s', time());
    }   
}