<?php
$head = "admin/head.php"; 
include_once($head); 
$head_top = "admin/head_top.php"; 
include_once($head_top); 
	//require('admin/head.php');
	//require('admin/head_top.php');
?>


<div class="container">

<div class="content inside-page create-account">

<h1 class="title h2">
  <span class="top"></span>
Login
  <span class="bottom"></span>
</h1>


   <div class="row">
   <form id="registerForm" class="form-horizontal col-sm-6 col-sm-offset-3" data-toggle="validator" role="form" method="post" action="<?php echo base_url('landing/login'); ?>">
    <div class="col-sm-6 col-lg-offset-2 col-lg-9">
      
        <div class="form-group">
        <label for="Email1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
        <div class="help-block control-label"></div>
        </div>
        <div class="form-group">
        <label for="password1">Password</label>
        <input type="password" name="pwd" class="form-control" id="InputPassword1" placeholder="Password" required>
        <div class="help-block control-label"></div>
        </div>
        
        
          <div class="form-group">
        <div class="checkbox control-label pull-left ">
        
        <label>
        <input type="checkbox"/>  Remember Me &nbsp; || &nbsp; <a href="<?php echo base_url('landing/forgotpassword'); ?>" class=" control-label ">Forgot Password ?</a></label>
        </div>
       
          </div>
          <hr>
          <div class="form-group">
		<div class="col-sm-6 ">
        <a href="<?php echo base_url('landing/registration'); ?>" class="btn btn-danger pull-left">Register</a>
       
        </div>
		<div class="col-sm-6">
		 <button type="submit" class="btn btn-danger pull-right ">Login</button>
		</div>				
		</div>
          
    
    </div>
    

    
    </form>
    </div>  
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
