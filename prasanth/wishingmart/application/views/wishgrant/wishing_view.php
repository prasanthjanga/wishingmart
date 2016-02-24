<?php
include('application/views/admin/head.php');
include('application/views/admin/head_top.php');
?>

<div class="container" data-parallaxify-range="100">
  
<!-- MAKE A WISH FORM START -->
<div class="content inside-page create-account" >

<div class="row">
  <div class="col-md-12">
  <?php echo form_open_multipart('wishgrant/wishing',array('id' => 'registerForm', 'data-toggle'=>'validator', 'role'=>'form' )); ?>
    <h1>Make A Wish</h1>
    <hr>
    <?php if($this->session->flashdata('flashmsg') != "" || validation_errors() != ""){ ?>
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><?php echo $this->session->flashdata('flashmsg'); ?>
        <?php echo validation_errors(); ?>
      </div>
    <?php } //IF COND FLASHMSG END ?>
    
    <div class="group">
      <input type="text" name="pname" value="<?php echo set_value('pname'); ?>" id="ProductName" required >
      <span class="highlight"></span><span class="bar"></span>
      <label>Product Name</label>
    </div><!-- group CLASS END -->

    <div class="group">
      <div class="col-sm-6">
        <span class="label_dis">Category</span>
          <?php
            $count=round(count($category));
            echo "<select name='category' id='ProductCategory' required>";
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
        <span class="highlight"></span><span class="bar"></span>
      </div><!-- col-sm-6 CLASS END -->
      <div class="col-sm-6">
        <span class="label_dis">Sub-Category</span>
          <?php
            $count=round(count($subcategory));
            echo "<select name='scategory' required>";
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
        <span class="highlight"></span><span class="bar"></span>
      </div><!-- col-sm-6 CLASS END -->
    <br />
    </div><!-- group CLASS END -->

    <span class="label_dis">Country</span>
    <div class="group">
      <div class="col-sm-12">
        <?php
          $count=round(count($country));
          echo "<select name='country' required>";
          echo "<option value='none' selected='selected'>-- Select Country --</option>";
          for($i=0;$i<$count;$i++){
            foreach($country[$i] as $k=>$v){
                if($k == "cname"){
                    echo "<option value=". $country[$i]['cnid'] .">";
                    echo $country[$i]['cname'];
                    echo "</option>";
                }
            }
          }
          echo "</select>";
        ?>         
        <span class="highlight"></span><span class="bar"></span>
        <label></label>
      </div><!-- col-sm-6 CLASS END -->
    </div><!-- group CLASS END -->



    <div class="group">
      <div class="col-sm-6">
        <input type="text" name="brand" value="<?php echo set_value('brand'); ?>" id="brand" required>
        <span class="highlight"></span><span class="bar"></span>
        <label>Brand</label>
      </div><!-- col-sm-6 CLASS END -->
      <div class="col-sm-6">
        <input type="text" name="colour" value="<?php echo set_value('colour'); ?>" id="colour" required>
        <span class="highlight"></span><span class="bar"></span>
        <label>Colour</label>
      </div><!-- col-sm-6 CLASS END -->
    <br />
    </div><!-- group CLASS END -->

    <div class="group">
      <input type="text" name="desc" value="<?php echo set_value('desc'); ?>" id="desc" required>        
      <span class="highlight"></span><span class="bar"></span>
      <label>Description</label>
    </div><!-- group CLASS END -->

    
    <div class="group">
      <?php
        if(isset($images[0]['thumb_url'])){
          echo "<img src=". $images[0]['thumb_url'] .">";
        }
      ?>
      <input type="file" name="userfile" size="20" required/>

    </div><!-- group CLASS END -->

    <input type="submit" value="Make a Wish" name="sub"  class="button buttonBlue"/>
  </form>

  </div><!-- col-md-6 CLASS END -->
    
</div><!-- row CLASS END -->    
</div><!-- .panel-body end -->
<!-- MAKE A WISH FORM END -->
</div> <!-- .container end -->


<?php
include('application/views/admin/footer_top.php');
include('application/views/admin/footer.php');
?>
