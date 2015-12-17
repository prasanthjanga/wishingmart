<div class="content-wrapper">
<!-- Content Header (Page header) -->
  <div><h3 class=" title "> My Wish </h3></div>
    <!-- Main content-->        
    <section class="content create-account inside-page">
      <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div id="registerForm"  class="form-horizontal col-sm-6 col-sm-offset-3 col-lg-offset-1 col-lg-11" >
              <div class="panel-body">
              <div class="form-group">
                <h1 class="col-sm-8">Wish Details</h1>
                <div class="col-sm-4">
                  <p class="wishform">
                    <?php
                      if($wish_details[0]['status']=='0'){
                        echo "<span class='label label-info'>No Status</span>";
                      }elseif($wish_details[0]['status']=='1'){
                        echo "<span class='label label-warning'>Requested</span>";
                      }
                    ?>
                  </p>
                </div>
              </div>
                <hr>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Product Id</label>
                <div class="col-sm-8">
                  <p class="wishform"><?php echo $wish_details[0]['wid']; ?></p>
                </div>        
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Product Name</label>
                <div class="col-sm-8">
                  <p class="wishform"><?php echo $wish_details[0]['wpn']; ?></p>
                </div>        
              </div>  
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Country</label>
                <div class="col-sm-8">
                <p class="wishform"><?php echo $wish_details[0]['country']; ?></p>
                </div>        
              </div>
                
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Category</label>
                <div class="col-sm-8">
                <p class="wishform"><?php echo $wish_details[0]['category']; ?></p>
                </div>        
              </div>
                
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Sub-Category</label>
                <div class="col-sm-8">
                <p class="wishform"><?php echo $wish_details[0]['subcategory']; ?></p>
                </div>        
              </div>

              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Product Description</label>
                <div class="col-sm-8">
                <p class="wishform">
                  <?php
                    echo "Brand  : ".$wish_details[0]['brand']."<br>";
                    echo "colour : ".$wish_details[0]['wpcolour']."<br>";
                    echo $wish_details[0]['wpdec'];
                  ?>
                </p>
                </div>        
              </div>
                
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Product Image</label>
                <div class="col-sm-8">
                <img src="<?php echo base_url()."images/products/wished/".$wish_details[0]['wpimg']; ?>" width="100px" height="100px" alt=""/>
                </div>        
              </div>
              </div>
            </div>
          </div>
        </div>

 <div class="col-sm-6">

<?php if($wstatus!="1"){ ?>
<div class="row">
<?php echo form_open_multipart('dashboard/updatewish',array('id' => 'registerForm', 'data-toggle'=>'validator', 'class'=>'form-horizontal col-sm-6 col-sm-offset-2 col-lg-offset-1 col-lg-11','autocomplete'=>'on' )); ?>

     <div class="panel-body">   
    
        <div><h1>Update Wish</h1></div>
        <hr>
        <input type="hidden" name="wid" value="<?php echo $wish_details[0]['wid']; ?>">
        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Name</label>
        <div class="col-sm-8">
        <input type="text" name="pname" class="form-control" id="ProductName" placeholder="<?php echo $wish_details[0]['wpn']; ?>">
          <?php echo form_error('pname'); ?>
        </div>        
        </div>
          
        <div class="form-group">
                <label for="" class="col-sm-4 control-label"> Country</label>
        
          <div class="col-sm-8">
          <?php
            $count=round(count($country));
            echo "<select class='form-control' name='country' required>";
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
            <span class="help-block pull-right"></span>
				</div>
                
                
        <div id="SubCategory" class="form-group">
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
              <span class="help-block pull-right"></span>
				</div>
                
                        
        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Brand</label>
        <div class="col-sm-8">
        <input type="text" name="brand" class="form-control" id="Brand" placeholder="<?php echo $wish_details[0]['brand']; ?>">
        </div>        
        </div>
                
        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Colour</label>
        <div class="col-sm-8">
        <input type="text" name="colour" class="form-control" id="colour" placeholder="<?php echo $wish_details[0]['wpcolour']; ?>" >
        </div>        
        </div>
                
        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Description</label>
        <div class="col-sm-8">
          <textarea id="productdesc" name="pdesc" class="form-control" placeholder="<?php echo $wish_details[0]['wpdec']; ?>"></textarea>
        </div>        
        </div>
                
        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Image</label>
        <div class="col-sm-8">
        <input type="file" name="userfile" class="form-control" id="ProductImage" >
        </div>        
        </div>
            
        <input type="submit" name="sub" value="Update Wish" class="btn btn-danger pull-right" >
        
        <div class="form-group"></div>
   </div>
</form>
</div>
<?php } ?>    
</div>
</div>

           </section>
           </div>