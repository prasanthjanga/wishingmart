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
Make A Wish
  <span class="bottom"></span>
</h1>
<div class="row">
<<<<<<< HEAD

  <form class="form-horizontal col-sm-6 col-sm-offset-3" data-toggle="validator" role="form" method="post" action="<?php echo base_url('wishgrant/wishing'); ?>">
=======
<?php
//echo form_open_multipart('wishgrant/wishing');
?>
  <form class="form-horizontal col-sm-6 col-sm-offset-3" data-toggle="validator" role="form" method="post" action="<?php echo base_url('wishgrant/wishing'); ?>" enctype="multipart/form-data" accept-charset="utf-8">
>>>>>>> 121e2cd84d2002ac5494b610d2a48b1f463ec934
    <div class="panel-body">
      <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Name</label>
        <div class="col-sm-8">
          <input type="text" name="pname" value="<?php echo set_value('pname'); ?>" class="form-control" id="ProductName" required>
          <span class="help-block pull-right"><?php echo form_error('pname'); ?></span>
        </div>        
      </div>
              
      <div class="form-group">
        <label for="" class="col-sm-4 control-label">Category</label>
        <div class="col-sm-8">
          <select name="category" id="ProductCategory" class="form-control" required>
            <option value="2">Clothing</option>
            <option>Accessories</option>
            <option>Collectibles</option>
            <option>Footwear</option>
            <option value="1">Others</option>
          </select>
        </div>
        <span class="help-block pull-right"></span>
      </div>
<!--              
      <div  id="Category" class="form-group" style="display:none">
        <label for="" class="col-sm-4 control-label">Category Name</label>
        <div class="col-sm-8">
          <input type="text" name="category" value="<?php //echo set_value('category'); ?>" class="form-control" id="ProductCategory1" required>
          <span class="help-block pull-right"><?php //echo form_error('category'); ?></span>
        </div>        
      </div>style="display:none"
-->              
      <div id="SubCategory" class="form-group" >
        <label for="" class="col-sm-4 control-label">Sub-Category</label>
        <div class="col-sm-8">
          <select name="scategory" id="ProductSubCategory" class="form-control" required>
            <option value="3">Ladies</option>
            <option>Gents</option>
            <option>Children</option>
            <option>Infants</option>
            <option value="1">Others</option>
          </select>
        </div>
        <span class="help-block pull-right"></span>
      </div>
<!--                
      <div id="SubCategory1" class="form-group" style="display:none" >
        <label for="" class="col-sm-4 control-label">Sub-Category Name</label>
        <div class="col-sm-8">
          <input type="text" name="scategory" value="<?php //echo set_value('scategory'); ?>" class="form-control" id="ProductSubCategory1" required>
          <span class="help-block pull-right"><?php //echo form_error('scategory'); ?></span>
        </div>        
      </div>
-->              
              
      <div class="form-group">
        <label for="" class="col-sm-4 control-label"> Country</label>
        <div class="col-sm-8">
          <select name="country" class="form-control" required>
            <option value="1">United Kingdom</option>
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
        <span class="help-block pull-right"></span>
      </div>

      <hr>

      <p><strong>Product Description</strong></p>

      <div class="form-group">
        <label for="" class="col-sm-4 control-label">Brand</label>
        <div class="col-sm-8">
          <input type="text" name="brand" value="<?php echo set_value('brand'); ?>" class="form-control" id="Brand" >
          <span class="help-block pull-right"><?php echo form_error('brand'); ?></span>
        </div>        
      </div>

      <div class="form-group">
        <label for="" class="col-sm-4 control-label">Colour</label>
        <div class="col-sm-8">
          <input type="text" name="colour" value="<?php echo set_value('colour'); ?>" class="form-control" id="colour" >
          <span class="help-block pull-right"><?php echo form_error('colour'); ?></span>
        </div>        
      </div>

      <div class="form-group">
        <label for="" class="col-sm-4 control-label">Description</label>
        <div class="col-sm-8">
          <textarea name="desc" class="form-control" placeholder="Give us more details about the product you wish for (eg. size , model , specifications )"><?php echo set_value('desc'); ?></textarea>
          <span class="help-block pull-right"><?php echo form_error('desc'); ?></span>
        </div>        
      </div>
      
<<<<<<< HEAD
      <div class="form-group">
        <?php 
          if(isset($images) && count($images)){
            foreach($images as $image){
              echo $image['filename'];
              echo "<a href=".$image['url']."><img src=".$image['thumb_url']."></a>";
            }
          }
        ?>
      </div>
      <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Image</label>
        <div class="col-sm-8">
=======

      <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Image</label>
        <div class="col-sm-8">
        <img src="<?php echo $images[0]['thumb_url']; ?> ">

>>>>>>> 121e2cd84d2002ac5494b610d2a48b1f463ec934
          <input type="file" class="form-control" name="userfile" size="20"/>
          <!--<input type="file" class="form-control" id="ProductImage" required>-->
          <span class="help-block pull-right"><?php echo form_error('userfile'); ?></span>

        </div>
      </div>

      <input type="submit" value="Make a Wish" name="sub" class="btn-danger pull-right"/>
  </div>
  </form>
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
