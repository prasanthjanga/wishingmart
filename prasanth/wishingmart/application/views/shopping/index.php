
<?php
require("admin/header.php");
require("admin/header_top.php");// menu content header_menu.php




if($thispage == "1"){
	require("admin/header_banner.php");
	require('landing_view.php');
}elseif($thispage == "2"){
	require('login_view.php');
}elseif($thispage == "3"){
	require('registration_view.php');
}elseif($thispage == "4"){
	require('contact_view.php');
}elseif($thispage == "c1"){
	require('checkout_view.php');
}elseif($thispage == "p1"){
	require('products_view.php');
}elseif($thispage == "p2"){
	require('productview_view.php');
}else{
	require('admin/404_view.php');
}


require("admin/footer_top.php");
require("admin/footer.php");
 ?>