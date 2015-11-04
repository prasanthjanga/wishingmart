<?php
include('application/views/admin/head.php');
include('application/views/admin/head_top.php');
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

<?php echo form_open_multipart('wishgrant/granting',array('id' => 'registerForm', 'data-toggle'=>'validator', 'class'=>'form-horizontal col-sm-6 col-sm-offset-2 col-lg-offset-1 col-lg-11','autocomplete'=>'on' )); ?>
      
    <p><h1>Product Description</h1></p>
        <hr>
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
        <?php echo $wish_details['wpname']; ?>
        </div>        
    </div>
                 
                   
    <div class="form-group">
        <label for="" class="col-sm-4 control-label"> Country *</label>
        
          <div class="col-sm-8">
          <?php
            $count=round(count($country));
            echo "<select class='form-control' name='gt_country' required>";
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
    </div>
                        
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Brand</label>
        <div class="col-sm-8">
        <?php echo $wish_details['wbrand']; ?>
        </div>        
    </div>
                
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Colour</label>
        <div class="col-sm-8">
        <?php echo $wish_details['wcolour']; ?>
        </div>        
    </div>
                
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Description </label>
        <div class="col-sm-8">
            <textarea id="productdesc" class="form-control" name="gt_p_desc" placeholder="Give us more details about the product you wish for (eg.size,model,specifications)"></textarea>
        </div>        
    </div>
                
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Image</label>
        <div class="col-sm-8">
        <input type="file" class="form-control" name="userfile" id="ProductImage" required>
        </div>        
    </div>
                
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Price *</label>
        <div class="col-sm-8">
        <input type="number" class="form-control" name="gt_price" id="price" required>
        </div>        
    </div>
    
    <input type="submit" name="sub" value="Send Grant Request" data-toggle="modal" data-target="#popup" class="btn btn-danger pull-right" >

</form>
</div>
    </div>
    <div class="col-sm-6">
        <div class="row">

      
    <div class="form-horizontal col-sm-6 col-sm-offset-3 col-lg-offset-1 col-lg-11" >
  <div class="panel-body">
    
        <div class="form-group">
          <div class="col-sm-9 image">
            <h1>Wish Details</h1>
          </div>
          <div class="col-sm-2 pull-left wishform">
            <?php if($online['online']== '1'){ ?>
            <a href="#" onclick="funenter()">
                <h4 class="label label-success">User Online</h4>
            </a>
            <?php }else{//if end ?>
            <a href="#" onclick="funoffline()">
                <h4 class="label label-danger">User Offline</h4>
            </a>
            <?php }//else end ?>
          </div>
        </div>
        <hr>

        <div class="form-group">
          <div class="col-sm-4 center image">
              <img src="<?php echo base_url('assets/images/women.jpg'); ?>" class="img-circle" alt="User Image" height="50px">
          </div>
          <div class="col-sm-7 pull-left wishform">
              <p>Vogue Robot<br>Malaysia</p>
        </div>

      </div>
        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Id</label>
        <div class="col-sm-8">
        <p class="wishform"><?php echo $wish_details['wid']; ?></p>
        </div>        
        </div>
        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Name</label>
        <div class="col-sm-8">
        <p class="wishform"><?php echo $wish_details['wpname']; ?></p>
        </div>        
        </div>
                
                <div class="form-group">
        <label for="" class="col-sm-4 control-label">Made In</label>
        <div class="col-sm-8">
        <p class="wishform"><?php echo $wish_details['wcountry']; ?></p>
        </div>        
        </div>
                
                 <div class="form-group">
        <label for="" class="col-sm-4 control-label">Category</label>
        <div class="col-sm-8">
        <p class="wishform"><?php echo $wish_details['wcatugory']; ?></p>
        </div>        
        </div>
                
                 <div class="form-group">
        <label for="" class="col-sm-4 control-label">Sub-Category</label>
        <div class="col-sm-8">
        <p class="wishform"><?php echo $wish_details['wscatugory']; ?></p>
        </div>        
        </div>

                 <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Description</label>
        <div class="col-sm-8">
        <p class="wishform">
            Brand : <?php echo $wish_details['wbrand']; ?> 
            <br> 
            Color: <?php echo $wish_details['wcolour']; ?>  
            <br>
            <?php echo $wish_details['wdesc']; ?>
        </p>
        </div>        
        </div>
                
                <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Image</label>
        <div class="col-sm-8">
        <img src="<?php echo base_url()."images/thumbs/".$wish_details['wimg']; ?>" width="200" height="200" alt=""/>
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



<?php
include('application/views/admin/footer_top.php');
include('application/views/admin/footer.php');
?>
