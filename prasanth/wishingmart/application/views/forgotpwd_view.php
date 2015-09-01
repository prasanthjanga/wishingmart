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
Forgot Password
  <span class="bottom"></span>
</h1>
   <div class="row">
   <form id="registerForm" class="form-horizontal col-sm-6 col-sm-offset-3" data-toggle="validator" role="form" method="post" action="">
            <div class="col-sm-6 col-lg-offset-1 col-lg-10">
           
                <div class="form-group">
                <div class="help-block pull-right"></div>
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                </div>
              <div class="form-group">
				
               <button type="submit" class="btn btn-danger pull-right">Submit</button>
               
              
          </div>
           <hr>
                  <div class="form-group">
				
                <a href="<?php echo base_url('landing/registration'); ?>" class="btn btn-danger pull-left">Register</a>
               
				 <a href="<?php echo base_url('landing/login'); ?>" class="btn btn-danger pull-right">Login</a>
								
				</div>
               </div>
            </form>
    </div>  
</div>
  </div>


<!-- footer -->
<div class="footer navbar-fixed-bottom" role="navigation">
	<div class="pull-left">
    <div class="links">
    	<a href="About.html">About Us</a>  
        <a href="SellerInfo.html">Earn with Us</a>
        <a href="BuyerInfo.html">Buyer</a>  
        <a href="Tools.html">Tools &amp; Apps</a> 
        <a href="ContactUs.html">Help &amp; Contacts</a>
        <a href="Testimonial.html">Testimonials</a> 
         <a href="Termscondition.html">Terms &amp; Conditions</a>   	    
    </div>
    </div>
    <div class="social pull-right">
  
    	<a href="https://www.facebook.com/"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a>
    	<a href="https://www.instagram.com/"><i class="fa fa-instagram"  data-toggle="tooltip" data-placement="top" data-original-title="instragram"></i></a>
    	<a href="https://www.twitter.com/"><i class="fa fa-twitter-square" data-toggle="tooltip" data-placement="top" data-original-title="twitter"></i></a>
    	<a href="https://www.pinterest.com/"><i class="fa fa-pinterest-square" data-toggle="tooltip" data-placement="top" data-original-title="pinterest"></i></a>
    	<a href="https://plus.google.com/"><i class="fa fa-google-plus-square" data-toggle="tooltip" data-placement="top" data-original-title="google+"></i></a>
   
    
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
