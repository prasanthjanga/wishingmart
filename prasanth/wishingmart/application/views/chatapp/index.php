<?php
require('admin/head.php');
require('admin/head_top.php');
require('admin/left_nav.php');


if($thispage == "c1"){
	require('chat_view.php');
}elseif($thispage == "c2"){
	require('friends_with_you_view.php');
}elseif($thispage == "c3"){
	require('you_with_friends_view.php');
}elseif($thispage == "c4"){
	require('offline_chat_view.php');
}else{
	require('../404_view.php');
}

require('admin/footer_top.php');
require('admin/footer.php');
?>