<?php
require('admin/head.php');
require('admin/head_top.php');
if($thispage == 3){
	require('reg_view.php');
}elseif($thispage == 4){
	require('regsuccess_view.php');
}else{
	require('login_view.php');
}

require('admin/footer_top.php');
require('admin/footer.php');
?>