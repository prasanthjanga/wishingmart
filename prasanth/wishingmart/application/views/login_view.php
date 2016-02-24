<?php
$head = "admin/head.php"; 
include_once($head); 
$head_top = "admin/head_top.php"; 
include_once($head_top); 
	//require('admin/head.php');
	//require('admin/head_top.php');
?>
<script type="text/javascript">
$(document).ready(function() {
    if( !$("html").hasClass("backgroundclip") )
       $(".rainbow").addClass("rainbowize");
    else
       $(".rainbow").rainbowize();
});
</script>
<div class="container">
 <div class="content inside-page create-account">
  <div class="row">
  
    <div class="col-md-6">
      <form data-toggle="validator" role="form" method="post" action="<?php echo base_url('landing/login'); ?>">
        <h1>Login</h1>
        <hr>
        <?php if($this->session->flashdata('flashmsg')!=""){ ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><?php echo $this->session->flashdata('flashmsg'); ?>
          </div>
        <?php } //IF COND FLASHMSG END ?>

        <div class="group">
          <input type="email" name="email" value="<?php echo set_value('email'); ?>" required>
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Email</label>
          <?php echo form_error('email'); ?>
        </div>
        <div class="group">
          <input type="password" name="pwd" value="<?php echo set_value('email'); ?>" required>
          <span class="highlight"></span>
          <span class="bar"></span>
          <label>Password</label>
          <?php echo form_error('pwd'); ?>
        </div>
        <div class="group">
          <input type="checkbox"/>  Remember Me &nbsp; || &nbsp; <a href="<?php echo base_url('landing/forgotpassword'); ?>" class=" control-label ">Forgot Password ?</a></label>
        </div>
        <button type="submit" name="sub" class="button buttonBlue">Login
        </button>
      </form><!-- FORM END-->
    </div><!-- col-md-6 CLASS END-->  
    
    <div class="col-md-6">
      <form>
        <h1>Register now for <span class="text-success">FREE</span></h1>
        <hr>
          <ul class="list-unstyled" style="line-height: 2">
            <li><span class="fa fa-check text-success"></span> See all your Wish & Grant list</li>
            <li><span class="fa fa-check text-success"></span> See all your Chat</li>
            <li><span class="fa fa-check text-success"></span> See all your orders</li>
            <li><span class="fa fa-check text-success"></span> Shipping is always free</li>
            <li><span class="fa fa-check text-success"></span> Save your favorites</li>
            <li><span class="fa fa-check text-success"></span> Fast checkout</li>
            <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
            <li><span class="fa fa-check text-success"></span>Holiday discounts up to 30% off</li>
          </ul>
        <p><a href="<?php echo base_url('landing/registration'); ?>" class="button buttonBlue">Yes please, register now!</a></p>

      </form><!-- FORM END-->  
    </div><!-- col-md-6 CLASS END-->  
    
  </div><!-- row CLASS END-->  
 </div><!--content inside-page create-account CLASS END -->
</div><!--container CLASS END -->


<?php
$footer_top = "admin/footer_top.php"; 
include_once($footer_top); 
$footer = "admin/footer.php"; 
include_once($footer); 
//require('admin/footer_top.php');
//require('admin/footer.php');
?>
