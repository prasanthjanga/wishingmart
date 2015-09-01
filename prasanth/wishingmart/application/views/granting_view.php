<?php
//$head = "admin/head.php"; 
//include_once($head); 
require('admin/head.php');
$head_top = "admin/head_top.php"; 
include_once($head_top); 
	//require('admin/head_top.php');
?>



    <div class="container" data-parallaxify-range="100">
  
 <!-- form -->
<div class="content inside-page create-account" >
 <h1 class="title h2">
  <span class="top"></span>
Grant Wish
  <span class="bottom"></span>
</h1>

<div class=" info h4"> </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6">
        
<div class="row">
<div></div>

  <form id="registerForm" class="form-horizontal col-sm-6 col-sm-offset-2 col-lg-offset-1 col-lg-11" autocomplete="on">
      
                <p><strong>Product Description</strong></p>
                <hr>
                      
        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Name</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="ProductName" >
        </div>        
        </div>
                 
                   
        <div class="form-group">
                <label for="" class="col-sm-4 control-label"> Country</label>
        
          <div class="col-sm-8">
          <select class="form-control">
          <option>United Kingdom</option>
          <option>Australia</option>
          <option>America</option>
          <option>Russia</option>
                    <option>India</option>
          <option>Singapore</option>
          <option>Malaysia</option>
          <option>China</option>
          <option>Nepal</option>
          </select>
          </div>
        </div>
                        
                <div class="form-group">
        <label for="" class="col-sm-4 control-label">Brand</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="Brand" >
        </div>        
        </div>
                
                <div class="form-group">
        <label for="" class="col-sm-4 control-label">Colour</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="colour" >
        </div>        
        </div>
                
                <div class="form-group">
        <label for="" class="col-sm-4 control-label">Description</label>
        <div class="col-sm-8">
                <textarea id="productdesc" class="form-control" placeholder="Give us more details about the product you wish for (eg.size,model,specifications)"></textarea>
        </div>        
        </div>
                
                <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Image</label>
        <div class="col-sm-8">
        <input type="file" class="form-control" id="ProductImage" required>
        </div>        
        </div>
                
                <div class="form-group">
        <label for="" class="col-sm-4 control-label">Price</label>
        <div class="col-sm-8">
        <input type="number" class="form-control" id="price" required>
        </div>        
        </div>
                
        <a href="#" data-toggle="modal" data-target="#popup" class="btn btn-danger pull-right" >Send Grant Request </a>

</form>
</div>
    </div>
    <div class="col-sm-6">
        <div class="row">

      
    <div class="form-horizontal col-sm-6 col-sm-offset-3 col-lg-offset-1 col-lg-11" >
  <div class="panel-body">
    
        <div><h1>Wish Details</h1></div>
         
                <hr>
                
        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Name</label>
        <div class="col-sm-8">
        <p class="wishform">Mayo Sunflower Handbag</p>
        </div>        
        </div>
                
                <div class="form-group">
        <label for="" class="col-sm-4 control-label">Country</label>
        <div class="col-sm-8">
        <p class="wishform">Italy</p>
        </div>        
        </div>
                
                 <div class="form-group">
        <label for="" class="col-sm-4 control-label">Category</label>
        <div class="col-sm-8">
        <p class="wishform">Accessories</p>
        </div>        
        </div>
                
                 <div class="form-group">
        <label for="" class="col-sm-4 control-label">Sub-Category</label>
        <div class="col-sm-8">
        <p class="wishform">Handbags</p>
        </div>        
        </div>

                 <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Description</label>
        <div class="col-sm-8">
        <p class="wishform">Brand :Mayo Designer Club <br> Color: Yellow &amp; Green <br> Model: Sunflower <br> A very stunning handbag with outstanding design. </p>
        </div>        
        </div>
                
                <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Image</label>
        <div class="col-sm-8">
        <img src="<?php echo base_url('assets/images/handbags.jpg'); ?>" width="100" height="100" alt=""/>
                </div>        
        </div>
        
        <div class="form-group"></div>
              
</div>
</div>
</div>
</div>
</div>
    </div>
  </div>
  </div>
<!-- footer -->
<div class="footer navbar-fixed-bottom" role="navigation">
  <div class="pull-left">
    <div class="links">
      <a href="Termscondition.html">Terms &amp; Conditions</a>   
      <a href="About.html">About Us</a>
         <a href="ContactUs.html">Contact Us</a>
        <a href="Testimonial.html">Testimonials</a>   
        <a href="SellerInfo.html">Buyer &amp; Seller</a> 
        <a href="Tools.html">Tools &amp; Apps</a> 
      
         &nbsp;
         &nbsp;     
    </div>
     
     <div class="links"> <a href="../Index.html">WishingMart &copy; 2015</a></div>
    
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
