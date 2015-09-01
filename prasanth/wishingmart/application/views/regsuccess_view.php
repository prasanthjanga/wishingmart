<?php
$head = "admin/head.php"; 
include_once($head); 
$head_top = "admin/head_top.php"; 
include_once($head_top); 
	//require('admin/head.php');
	//require('admin/head_top.php');
?>

<div class="container">
	<div class="content inside-page create-account" >
	<h2 class="title">Registration Successful</h2>
		<div class="row">
			<div class="col-sm-6">
				<h4>Registration Successful</h4>
				<?php //echo $firstname; ?>
				<p>Please activate your link by the activation link sent to your email address </p>
				<a href="Login.html" class="btn btn-danger">LOGIN</a>
				<a href="index.html" class="btn btn-danger">HOME</a>
			</div>
		</div>  
	</div><!-- Register form -->
</div><!-- .container end-->

<?php
$footer_top = "admin/footer_top.php"; 
include_once($footer_top); 
$footer = "admin/footer.php"; 
include_once($footer); 
//require('admin/footer_top.php');
//require('admin/footer.php');
?>