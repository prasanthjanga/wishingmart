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
Your Wish Has Been Created Successfully
  <span class="bottom"></span>
</h1>
<div class="row">
<?php //echo form_open_multipart('wishgrant/wishing'); ?>
    <div id="registerForm"  class="form-horizontal col-sm-6 col-sm-offset-3 col-lg-offset-1 col-lg-11" >
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
        <img src="../images/handbags.jpg" width="100" height="100" alt=""/>
                </div>        
        </div>
        
        
              
</div>
</div>


</div><!-- ROW CLASS END -->
</div>
<!-- form -->
</div> 


<?php
$footer_top = "admin/footer_top.php"; 
include_once($footer_top); 
$footer = "admin/footer.php"; 
include_once($footer); 
//require('admin/footer_top.php');
//require('admin/footer.php');
?>
