<?php
$head = "admin/head.php"; 
include_once($head); 
$head_top = "admin/head_top.php"; 
include_once($head_top); 
	//require('admin/head.php');
	//require('admin/head_top.php');
?>



<div class="content fullpage homepage">
<div style="padding: 100px; text-align:center">

<a href="<?php echo base_url('wishgrant/wishing'); ?>" class="btn btn-danger ">Make a Wish</a>

<a href="<?php echo base_url('wishgrant/granting'); ?>" class="btn btn-danger ">Grant A Wish</a>
</div>

</div>



<?php
$footer_top = "admin/footer_top.php"; 
include_once($footer_top); 
$footer = "admin/footer.php"; 
include_once($footer); 
//require('admin/footer_top.php');
//require('admin/footer.php');
?>
