<?php
include('application/views/admin/head.php');
include('application/views/admin/head_top.php');
?>

<div class="container">

<!-- Register form -->
<div class="content inside-page create-account" >
<div class="row">
  <div class="col-md-6">
  <?php echo form_open_multipart('wishgrant/granting',array('id' => '', 'data-toggle'=>'validator', 'class'=>'')); ?>
    <h1>Grant Wish</h1>
    <hr>
    <?php if($this->session->flashdata('flashmsg') != "" || validation_errors() != ""){ ?>
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><?php echo $this->session->flashdata('flashmsg'); ?>
        <?php echo validation_errors(); ?>
      </div>
    <?php } //IF COND FLASHMSG END ?>
    
    <div class="group">
      <div class="row">
        <div class="col-sm-4">
          <span class="label_dis">Product Name</span>
        </div><!-- col-sm-4 CLASS END -->
        <div class="col-sm-8">
          <?php echo $wishbyid[0]['wpn']; ?>
          <input type="hidden" name="wpid" value="<?php echo $wishbyid[0]['wid']; ?>">
        </div><!-- col-sm-8 CLASS END -->
      </div><!-- ROW CLASS END -->
    </div><!-- group CLASS END -->

    <span class="label_dis">Country *</span>
    <div class="group">
      <?php
        $count=round(count($country));
        echo "<select name='gt_country' selected=".set_value('gt_country').">";
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
    </div><!-- group CLASS END -->

    <div class="group">
      <input type="text" name="gt_p_desc" value="<?php echo set_value('gt_p_desc'); ?>" id="Description" required >
      <span class="highlight"></span><span class="bar"></span>
      <label>Description (eg.size,model,specifications) *</label>
    </div><!-- group CLASS END -->

    <span class="label_dis">Product Image *</span>
    <div class="group">
      <input type="file" name="userfile" id="ProductImage" required>
      <span class="highlight"></span><span class="bar"></span>
      <label></label>
    </div><!-- group CLASS END -->
    
    <div class="group">
      <input type="number" name="gt_price" id="price" required>
      <span class="highlight"></span><span class="bar"></span>
      <label>Price *</label>
    </div><!-- group CLASS END -->
    
    <div class="group">
      <input type="text" name="s_company" id="" required>
      <span class="highlight"></span><span class="bar"></span>
      <label>Shipping Company *</label>
    </div><!-- group CLASS END -->

    <div class="group">
      <input type="number" name="s_cost" id="" required>
      <span class="highlight"></span><span class="bar"></span>
      <label>Shipping Cost *</label>
    </div><!-- group CLASS END -->

    <div class="group">
      <input type="number" name="s_edays" id="" required>
      <span class="highlight"></span><span class="bar"></span>
      <label>Eistmated No.of Days *</label>
    </div><!-- group CLASS END -->

    <div class="group">
      <input type="text" name="b_weight" id="" required>
      <span class="highlight"></span><span class="bar"></span>
      <label>Box Weight (Kg) *</label>
    </div><!-- group CLASS END -->
        
    <div class="group">
      <div class="col-sm-3">
        <span class="label_dis">Box Size (W * H)*</span>
      </div>
      <div class="col-sm-3">
        <input type="number" name="b_wsize" id="" required>
        <span class="highlight"></span><span class="bar"></span>
        <label>W</label>
      </div>
      <div class="col-sm-2">
        <span class="label_dis">X</span>
      </div>
      <div class="col-sm-3">
        <input type="number" name="b_hsize" id="" required>
        <span class="highlight"></span><span class="bar"></span>
        <label>H</label>
      <br />
      </div>
      <div class="col-sm-1">
        <span class="label_dis">CM</span>
      </div>
    </div><!-- group CLASS END -->
      <input type="submit" name="sub" class="button buttonBlue" value="Send Grant Request">
    <?php echo form_close(); ?><!-- FORM END-->

  </div><!-- col-md-6 CLASS END -->
  <div class="col-md-6">
    <form>
      <div class="row">
        <div class="col-sm-9 image">
          <h1>Wish Details</h1>
        </div><!-- col-sm-9 image CLASS END -->
        <div class="col-sm-2 pull-left wishform">
          <?php if($online['online']== '1'){ ?>
          <a href="#" onclick="javascript:chatWith('<?php echo $wishbyid[0]['rid']; ?>')">
              <span class="label label-success">User Online</span>
          </a>
          <?php }else{//if end ?>
          <a href="#" onclick="javascript:chatWith('<?php echo $wishbyid[0]['rid']; ?>')">
              <span class="label label-danger">User Offline</span>
          </a>
          <?php }//else end ?>
        </div><!-- col-sm-2 pull-left wishform CLASS END -->
      </div><!-- ROW CLASS END -->
      <hr>

      <div class="group">
        <div class="col-sm-4 center image">
          <img src="<?php 
          if($wishbyid[0]['prof_img']!=''){
              echo base_url().'images/profile/'.$wishbyid[0]['prof_img'];
          }else{
              echo base_url().'assets/images/profile-null.png';
          }
          ?>"  class="img-circle" alt="User Image" height="50px"/>
        </div><!-- col-sm-4 center image CLASS END -->
        <div class="col-sm-7 pull-left wishform">
          <p>
            <?php echo $wishbyid[0]['fn']; ?><br>
            <?php echo $wishbyid[0]['wu_country']; ?>
          </p>
        </div><!-- col-sm-7 pull-left wishform CLASS END -->
        <br />
      </div><!-- group CLASS END -->
        
      <div class="group">
        <div class="row">
          <div class="col-sm-4">
            <span class="label_dis">Product Id</span>
          </div><!-- col-sm-4 CLASS END -->
          <div class="col-sm-8">
            <?php echo $wishbyid[0]['wid']; ?>
          </div><!-- col-sm-8 CLASS END -->
        </div><!-- ROW CLASS END -->
      </div><!-- group CLASS END -->

      <div class="group">
        <div class="row">
          <div class="col-sm-4">
            <span class="label_dis">Product Name</span>
          </div><!-- col-sm-4 CLASS END -->
          <div class="col-sm-8">
            <?php echo $wishbyid[0]['wpn']; ?>
          </div><!-- col-sm-8 CLASS END -->
        </div><!-- ROW CLASS END -->
      </div><!-- group CLASS END -->

      <div class="group">
        <div class="row">
          <div class="col-sm-4">
            <span class="label_dis">Made In</span>
          </div><!-- col-sm-4 CLASS END -->
          <div class="col-sm-8">
            <?php echo $wishbyid[0]['wp_country']; ?>
          </div><!-- col-sm-8 CLASS END -->
        </div><!-- ROW CLASS END -->
      </div><!-- group CLASS END -->

      <div class="group">
        <div class="row">
          <div class="col-sm-4">
            <span class="label_dis">Category</span>
          </div><!-- col-sm-4 CLASS END -->
          <div class="col-sm-8">
            <?php echo $wishbyid[0]['category']; ?>
          </div><!-- col-sm-8 CLASS END -->
        </div><!-- ROW CLASS END -->
      </div><!-- group CLASS END -->

      <div class="group">
        <div class="row">
          <div class="col-sm-4">
            <span class="label_dis">Sub-Category</span>
          </div><!-- col-sm-4 CLASS END -->
          <div class="col-sm-8">
            <?php echo $wishbyid[0]['subcategory']; ?>
          </div><!-- col-sm-8 CLASS END -->
        </div><!-- ROW CLASS END -->
      </div><!-- group CLASS END -->

      <div class="group">
        <div class="row">
          <div class="col-sm-4">
            <span class="label_dis">Product Description</span>
          </div><!-- col-sm-4 CLASS END -->
          <div class="col-sm-8">
            Brand : <?php echo $wishbyid[0]['brand']; ?> 
            <br> 
            Color: <?php echo $wishbyid[0]['wpcolour']; ?>  
            <br>
            <?php echo $wishbyid[0]['wpdec']; ?>
          </div><!-- col-sm-8 CLASS END -->
        </div><!-- ROW CLASS END -->
      </div><!-- group CLASS END -->

      <div class="group">
        <div class="row">
          <div class="col-sm-4">
            <span class="label_dis">Product Image</span>
          </div><!-- col-sm-4 CLASS END -->
          <div class="col-sm-8">
            <img src="<?php echo base_url()."images/products/wished/".$wishbyid[0]['wpimg']; ?>" width="200" height="200" alt=""/>
          </div><!-- col-sm-8 CLASS END -->
        </div><!-- ROW CLASS END -->
      </div><!-- group CLASS END -->

      <div class="group">
        <a href="<?php echo base_url('wishgrant/listofwishes'); ?>"  class="button buttonBlue">Grant List </a>
      </div><!-- group CLASS END -->
  
  <form><!-- FORM END-->
  </div><!-- col-md-6 CLASS END -->

</div><!-- row CLASS END -->    
</div><!-- .panel-body end -->
<!-- REGISTRATION FROM END -->
</div><!-- .container end-->











<?php
include('application/views/admin/footer_top.php');
include('application/views/admin/footer.php');
?>
