<?php
require('admin/head.php');
require('admin/head_top.php');
require('admin/left_nav.php');

if($thispage == "1"){
	require('dashboard_view.php');
}elseif($thispage == "f1"){
	require('footerlinks/termscondition_view.php');
}elseif($thispage == "f2"){
	require('footerlinks/aboutus_view.php');
}elseif($thispage == "f3"){
	require('footerlinks/contactus_view.php');
}elseif($thispage == "f4"){
	require('footerlinks/testimonial_view.php');
}elseif($thispage == "f5"){
	require('footerlinks/buyerseller_view.php');
}elseif($thispage == "f6"){
	require('footerlinks/toolsapps_view.php');
}else{
	require('login_view.php');
}

require('admin/footer_top.php');
require('admin/footer.php');
?>