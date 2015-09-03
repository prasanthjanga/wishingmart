<?php
require('admin/head.php');
require('admin/head_top.php');
require('admin/left_nav.php');


if($thispage == "1"){
	require('dashboard_view.php');
}elseif($thispage == "2"){
	require('listofwishes_view.php');
}elseif($thispage == "3"){
	require('grantlist_view.php');
}elseif($thispage == "4"){
	require('wishlist_view.php');
}elseif($thispage == "5"){
	require('profile_view.php');
}elseif($thispage == "6"){
	require('changepassword_view.php');
}elseif($thispage == "7"){
	require('invoiceslist_view.php');
}else{
	require('.php');
}

require('admin/footer_top.php');
require('admin/footer.php');
?>