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
  <div class="row">
   
    <div class="col-md-6">
      <form data-toggle="validator" role="form" method="post" action="<?php echo base_url(''); ?>">
        <h1>Forgot Password</h1>
        <hr>
        <div class="group">
          <input type="email" name="email" value="<?php echo set_value('email'); ?>" required><span class="highlight"></span><span class="bar"></span>
          <label>Email address</label>
          <?php echo form_error('email'); ?>
        </div>
        <button type="submit" name="sub" class="button buttonBlue">Submit
        </button>
      </form>
    </div><!-- col-md-6 CLASS END-->  
    
    <div class="col-md-6">
      <form>
        <h1>Login</h1>
        <hr>
        <ul class="list-unstyled" style="line-height: 2">
          <li><span class="fa fa-check text-success"></span> See all your Wish & Grant list</li>
          <li><span class="fa fa-check text-success"></span> See all your Chat</li>
          <li><span class="fa fa-check text-success"></span> See all your orders</li>
        </ul>
        <a href="<?php echo base_url('landing/login'); ?>" class="button buttonBlue">Login now!</a>
      </form>
    </div><!-- col-md-6 CLASS END-->  

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
