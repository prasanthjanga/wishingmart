<?php
require('admin/head.php');
require('admin/head_top.php');
if($thispage == 3){
	require('reg_view.php');
}elseif($thispage == 4){
	require('regsuccess_view.php');
}elseif($thispage == "f1"){
	require('termscondition_view.php');
}elseif($thispage == "f2"){
	require('aboutus_view.php');
}elseif($thispage == "f3"){
	require('contactus_view.php');
}elseif($thispage == "f4"){
	require('testimonial_view.php');
}elseif($thispage == "f5"){
	require('buyerseller_view.php');
}elseif($thispage == "f6"){
	require('toolsapps_view.php');
}else{
	require('login_view.php');
}

require('admin/footer_top.php');
require('admin/footer.php');
?>