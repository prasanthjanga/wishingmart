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
        <?php echo $wishbyid[0]['wpn']; ?>
        <input type="hidden" name="wpid" value="<?php echo $wishbyid[0]['wid']; ?>">
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
        <label for="" class="col-sm-4 control-label">Brand</label>
        <div class="col-sm-8">
        <?php echo $wishbyid[0]['brand']; ?>
        </div>        
    </div>
                
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Colour</label>
        <div class="col-sm-8">
        <?php echo $wishbyid[0]['wpcolour']; ?>
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

    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Shipping Company *</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" name="s_company" id="" required>
        </div>        
    </div>

    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Shipping Cost *</label>
        <div class="col-sm-8">
        <input type="number" class="form-control" name="s_cost" id="" required>
        </div>        
    </div>

    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Eistmated No.of Days *</label>
        <div class="col-sm-8">
        <input type="number" class="form-control" name="s_edays" id="" required>
        </div>        
    </div>

    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Box Weight (Kg) *</label>
        <div class="col-sm-7">
        <input type="number" class="form-control" name="b_weight" id="" required>
        </div>        
    </div>

    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Box Size (W * H)*</label>
        <div class="col-sm-3">
        <input type="number" class="form-control" name="b_wsize" id="" required>
        </div>
        <span class="col-sm-1"> X </span>
        <div class="col-sm-3">
        <input type="number" class="form-control" name="b_hsize" id="" required>
        </div>        
        <span class="col-sm-1"> CM </span>
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
            <a href="#" onclick="javascript:chatWith('<?php echo $wishbyid[0]['rid']; ?>')">
                <h4 class="label label-success">User Online</h4>
            </a>
            <?php }else{//if end ?>
            <a href="#" onclick="javascript:chatWith('<?php echo $wishbyid[0]['rid']; ?>')">
                <h4 class="label label-danger">User Offline</h4>
            </a>
            <?php }//else end ?>
          </div>
        </div>
        <hr>
<?php
//print_r($wishbyid);
//exit();
//echo $wishbyid[0]['rid'];
?>
        <div class="form-group">
          <div class="col-sm-4 center image">
        <img src="<?php 
        if($wishbyid[0]['prof_img']!=''){
            echo base_url().'images/profile/'.$wishbyid[0]['prof_img'];
        }else{
            echo base_url().'assets/images/profile-null.png';
        }
        ?>"  class="img-circle" alt="User Image" height="50px"/>
          </div>
          <div class="col-sm-7 pull-left wishform">
              <p>
                <?php echo $wishbyid[0]['fn']; ?><br>
                <?php echo $wishbyid[0]['wu_country']; ?>
              </p>
        </div>

      </div>
        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Id</label>
        <div class="col-sm-8">
        <p class="wishform"><?php echo $wishbyid[0]['wid']; ?></p>
        </div>        
        </div>
        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Name</label>
        <div class="col-sm-8">
        <p class="wishform"><?php echo $wishbyid[0]['wpn']; ?></p>
        </div>        
        </div>
                
                <div class="form-group">
        <label for="" class="col-sm-4 control-label">Made In</label>
        <div class="col-sm-8">
        <p class="wishform"><?php echo $wishbyid[0]['wp_country']; ?></p>
        </div>        
        </div>
                
                 <div class="form-group">
        <label for="" class="col-sm-4 control-label">Category</label>
        <div class="col-sm-8">
        <p class="wishform"><?php echo $wishbyid[0]['category']; ?></p>
        </div>        
        </div>
                
                 <div class="form-group">
        <label for="" class="col-sm-4 control-label">Sub-Category</label>
        <div class="col-sm-8">
        <p class="wishform"><?php echo $wishbyid[0]['subcategory']; ?></p>
        </div>        
        </div>

                 <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Description</label>
        <div class="col-sm-8">
        <p class="wishform">
            Brand : <?php echo $wishbyid[0]['brand']; ?> 
            <br> 
            Color: <?php echo $wishbyid[0]['wpcolour']; ?>  
            <br>
            <?php echo $wishbyid[0]['wpdec']; ?>
        </p>
        </div>        
        </div>
                
                <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Image</label>
        <div class="col-sm-8">
        <img src="<?php echo base_url()."images/products/wished/".$wishbyid[0]['wpimg']; ?>" width="200" height="200" alt=""/>
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
