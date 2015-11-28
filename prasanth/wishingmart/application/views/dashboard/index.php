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
}elseif($thispage == "71"){
	require('invoice_view.php');
}elseif($thispage == "cs"){
	require('commingsoon_view.php');
}elseif($thispage == "31"){
	require('viewgrantrequest_view.php');
}elseif($thispage == "32"){
	require('shippingaddress_view.php');
}elseif($thispage == "91"){
	require('viewwish_view.php');
}elseif($thispage == "9"){
	require('updatewish_view.php');
}elseif($thispage == "10"){
	require('mygrant_view.php');
}elseif($thispage == "11"){
	require('productadd_view.php');
}elseif($thispage == "12"){
	require('orderslist_view.php');
}else{
	require('../404_view.php');
}

require('admin/footer_top.php');
require('admin/footer.php');
?>