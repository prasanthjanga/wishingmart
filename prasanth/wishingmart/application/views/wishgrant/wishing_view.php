<?php
include('application/views/admin/head.php');
include('application/views/admin/head_top.php');
?>

<div class="container" data-parallaxify-range="100">
  
 <!-- form -->
<div class="content inside-page create-account" >
<h1 class="title h2">
  <span class="top"></span>Make A Wish
  <span class="bottom"></span>
</h1>
<div class="row">
<?php
//echo form_open_multipart('wishgrant/wishing');
?>
<?php echo form_open_multipart('wishgrant/wishing',array('id' => 'registerForm', 'data-toggle'=>'validator', 'class'=>'form-horizontal col-sm-6 col-sm-offset-3','role'=>'form' )); ?>

    <div class="panel-body">
      <div class="form-group">
        <div class="help-block center h2">

          <?php if(isset($images['error'])){ echo $images['error']; } ?>
          <?php //echo validation_errors(); ?>
          <?php echo $this->session->flashdata('flashmsg'); ?>  
        </div>        
      </div>
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
          <?php
            $count=round(count($category));
            echo "<select class='form-control' name='category' id='ProductCategory' required>";
            echo "<option value='none' selected='selected'>-- Select Category --</option>";
            for($i=0;$i<$count;$i++){
                foreach($category[$i] as $k=>$v){
                    if($k == "cname"){
                        echo "<option value=". $category[$i]['cid'] .">";
                        echo $category[$i]['cname'];
                        echo "</option>";
                    }
                }
            }
            echo "</select>";
          ?>  
        </div>

        <span class="help-block pull-right"><?php echo form_error('category'); ?></span>
      </div>
              
     


      <div id="Category1" class="form-group" style="display:none1">
        <label for="" class="col-sm-4 control-label">Sub-Category</label>
        <div class="col-sm-8">
          <?php
            $count=round(count($subcategory));
            echo "<select class='form-control' name='scategory' required>";
            echo "<option value='none' selected='selected'>-- Select Sub-Category --</option>";
            for($i=0;$i<$count;$i++){
                foreach($subcategory[$i] as $k=>$v){
                    if($k == "scname"){
                        echo "<option value=". $subcategory[$i]['scid'] .">";
                        echo $subcategory[$i]['scname'];
                        echo "</option>";
                    }
                }
            }
            echo "</select>";
          ?>  
        </div>
        <span class="help-block pull-right"><?php echo form_error('scategory'); ?></span>
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
        <label for="" class="col-sm-4 control-label"> Country *</label>
        <div class="col-sm-8">
          <?php
            $count=round(count($country));
            echo "<select class='form-control' name='country' required>";
            echo "<option value='none' selected='selected'>-- Select Country --</option>";
            for($i=0;$i<$count;$i++){
                foreach($country[$i] as $k=>$v){
                    if($k == "cname"){
                        echo "<option value=". $country[$i]['cname'] .">";
                        echo $country[$i]['cname'];
                        echo "</option>";
                    }
                }
            }
            echo "</select>";
          ?>  
        </div>
        <span class="help-block pull-right"><?php echo form_error('country'); ?></span>
      </div>

      <hr>

                <p><strong>Product Description <br> &nbsp;<br></strong></p>

      <div class="form-group">
        <label for="" class="col-sm-4 control-label">Brand</label>
        <div class="col-sm-8">
          <input type="text" name="brand" value="<?php echo set_value('brand'); ?>" class="form-control" id="Brand" required>
          <span class="help-block pull-right"><?php echo form_error('brand'); ?></span>
        </div>        
      </div>

      <div class="form-group">
        <label for="" class="col-sm-4 control-label">Colour</label>
        <div class="col-sm-8">
          <input type="text" name="colour" value="<?php echo set_value('colour'); ?>" class="form-control" id="colour" required>
          <span class="help-block pull-right"><?php echo form_error('colour'); ?></span>
        </div>        
      </div>

      <div class="form-group">
        <label for="" class="col-sm-4 control-label">Description</label>
        <div class="col-sm-8">
          <textarea name="desc" class="form-control" placeholder="Give us more details about the product you wish for (eg. size , model , specifications )" required><?php echo set_value('desc'); ?></textarea>
          <span class="help-block pull-right"><?php echo form_error('desc'); ?></span>
        </div>        
      </div>
      

      <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Image</label>
        <div class="col-sm-8">
        <?php
          if(isset($images[0]['thumb_url'])){
            echo "<img src=". $images[0]['thumb_url'] .">";
          }
        ?>
        

          <input type="file" class="form-control" name="userfile" size="20" required/>
          <!--<input type="file" class="form-control" id="ProductImage" required>-->
          <span class="help-block pull-right"><?php echo form_error('userfile'); ?></span>

        </div>
      </div>

      <input type="submit" value="Make a Wish" name="sub"  class="btn btn-danger pull-right"/>
  </div>
  </form>
</div><!-- ROW CLASS END -->
</div>
<!-- form -->
</div> 


<?php
include('application/views/admin/footer_top.php');
include('application/views/admin/footer.php');
?>
