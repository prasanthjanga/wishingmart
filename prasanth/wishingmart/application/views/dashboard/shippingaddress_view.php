<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div><h3 class="title"></h3></div>
<!-- Main content-->        
<section class="content create-account inside-page">
 <div class="row">
  <div class="col-sm-6">
   <div class="row">
    <div id="registerForm"  class="form-horizontal col-sm-6 col-sm-offset-3 col-lg-offset-1 col-lg-11 create-account" >
     <div class="panel-body">
      <div><h1>Transaction Details</h1></div>
      <hr>
       <div class="form-group">
        <label for="" class="col-sm-4 control-label">Wish ID</label>
         <div class="col-sm-8">
          <p class="wishform"><?php echo $aprovel_details['wid']; ?></p>
         </div>        
       </div>
        
       <div class="form-group">
        <label for="" class="col-sm-4 control-label">Grant ID</label>
         <div class="col-sm-8">
          <p class="wishform"><?php echo $aprovel_details['gid']; ?></p>
         </div>        
       </div>
         
       <div class="form-group">
        <label for="" class="col-sm-4 control-label">Grantor Name</label>
         <div class="col-sm-8">
          <p class="wishform"><?php echo $aprovel_details['wpn']; ?></p>
         </div>        
       </div>
        
               
       <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Name</label>
         <div class="col-sm-8">
          <p class="wishform"><?php echo $aprovel_details['wpn']; ?></p>
         </div>        
       </div>
                
       <div class="form-group">
        <label for="" class="col-sm-4 control-label">Country</label>
         <div class="col-sm-8">
          <p class="wishform"><?php echo $aprovel_details['gtcname']; ?></p>
         </div>        
       </div>
                
       <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Description</label>
         <div class="col-sm-8">
          <p class="wishform">
                Brand : <?php echo $aprovel_details['brand']; ?> <br>
                Color : <?php echo $aprovel_details['wpcolour']; ?> <br>
                <?php echo $aprovel_details['gtdesc']; ?>
          </p>
         </div>        
       </div>
                
       <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Image</label>
         <div class="col-sm-8">
          <img src="<?php echo base_url()."images/thumbs/".$aprovel_details['gtimg']; ?>" width="100px" height="100px" alt=""/>
         </div>        
       </div>
        
       <div class="form-group">
        <label for="" class="col-sm-4 control-label">Price</label>
         <div class="col-sm-8">
          <p class="wishform">USD <?php echo $aprovel_details['gtprice']; ?></p>
         </div>        
       </div>
     </div><!--panel-body end-->
    </div><!--registerForm end-->
   </div><!-- row end-->
  </div><!--col-sm-6 end-->

  <div class="col-sm-6">
   <div class="row">
    <form id="registerForm" class="form-horizontal col-sm-6 col-sm-offset-2 col-lg-offset-1 col-lg-11" autocomplete="on">
     <div class="panel-body">   
      <div><h1>Shipping Details</h1></div>
      <hr>
      
      <div class="form-group">
	   <div id="register_tnc_error">
        <div class="help-block pull-left"></div>
		 <label class="checkbox">
		  <input type="checkbox" name="ExistingAddress"  id="toggle"/> &nbsp; Ship to my address.
         </label>  
		 <div id=""></div>
	   </div>
      </div>
                 
      <div class="form-group" style="display:none">
	   <div id="register_tnc_error">
        <div class="help-block pull-left"></div>
		<label class="checkbox">
		 <input type="checkbox" name="SaveAddress" /> &nbsp; Save my Details
        </label>  
		<div id=""></div>
	   </div>
      </div>

    <div id="edit_div" style="display:none">
    <form action="<?php echo base_url('dashboard/invoice'); ?>" method="post">
       <div class="form-group">
        <label for="" class="col-sm-4 control-label">Street</label>
        <div class="col-sm-8">
            <p class="wishform">
            <?php echo "address-1"; ?>
            </P>
        </div>
        </div>
                   
        <div class="form-group"> 
        <label for="" class="col-sm-4 control-label">City</label>
        <div class="col-sm-8">
            <p class="wishform">
            <?php echo "address-1"; ?>
            </P>
        </div>
        </div>
        
        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Country</label>
        <div class="col-sm-8">
            <p class="wishform">
            <?php echo "address-1"; ?>
            </P>
        </div>
        </div>  
                
        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Postcode</label>   
         <div class="col-sm-8">
            <p class="wishform">
            <?php echo "address-1"; ?>
            </P>
         </div>
         </div>

        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Mobile Number</label>
        <div class="col-sm-8">
            <p class="wishform">
            <?php echo "address-1"; ?>
            </P>
        </div>              
        </div>

        <div class="form-group">
        <div id="register_tnc_error">
        <div class="help-block pull-left"></div>
        <label class="checkbox">
         <input type="checkbox" name="tnc" required/> &nbsp; I agree to the <a href="terms.html">Terms of Service</a> and <a href="terms.html">Privacy Policy</a>
        </label>  
        <div id=""></div>
        </div>
        </div>  
        <input type="submit" name="sasub" value="Continue" class="btn btn-danger pull-right">
    </form>
    </div><!-- edit_div END-->

     <div id="hide_div">
    <form action="<?php echo base_url('dashboard/invoice'); ?>" method="post">
       <div class="form-group">
        <label for="" class="col-sm-4 control-label">Street</label>
        <div class="col-sm-8">
         <input type="text" name="street" class="form-control" id="street" placeholder="" required>
         <div class="help-block pull-right"><?php echo form_error('street'); ?></div>
        </div>
        </div>
                   
        <div class="form-group"> 
        <label for="" class="col-sm-4 control-label">City</label>
        <div class="col-sm-8">
     	 <input type="text" name="city" class="form-control" id="city" placeholder="" required>
         <div class="help-block pull-right"><?php echo form_error('city'); ?></div>
        </div>
        </div>
        
        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Country</label>
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
         <div class="help-block pull-right"><?php echo form_error('country'); ?></div>
		</div>
		</div>	
                
        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Postcode</label>   
         <div class="col-sm-8">
         <input type="number" name="postcode" class="form-control" id="postcode" placeholder="" required>
         <div class="help-block pull-right"><?php echo form_error('postcode'); ?></div>
        </div>
        </div>

        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Mobile Number</label>
        <div class="col-sm-8">
            <input type="number" name="contact" class="form-control" id="MobNo" placeholder=""required>
         <div class="help-block pull-right"><?php echo form_error('contact'); ?></div>
        </div>				
        </div>

        <div class="form-group">
		<div id="register_tnc_error">
        <div class="help-block pull-left"></div>
		<label class="checkbox">
		 <input type="checkbox" name="tnc" required/> &nbsp; I agree to the <a href="terms.html">Terms of Service</a> and <a href="terms.html">Privacy Policy</a>
		</label>  
         <div class="help-block pull-right"><?php echo form_error('tnc'); ?></div>
		<div id=""></div>
		</div>
        </div> 
        <input type="submit" name="sasub" value="Continue" class="btn btn-danger pull-right">
    </form>
    </div><!-- hide_div END-->
      
     </div><!-- panel-body END-->
   
    <div class="form-group"></div>

    </form>
    </div><!-- ROW END-->
 
    </div><!-- col-sm-6 END-->
 </div><!-- ROW END-->

</section>
</div>

<script type="text/javascript">
//document.write('<div><label><input type="checkbox" id="toggle">Hide</label></div>');
document.getElementById('toggle').onclick = function () {
document.getElementById('hide_div').className = document.getElementById('toggle').checked ? 'hide' : 'show';
document.getElementById('edit_div').className = document.getElementById('toggle').checked ? 'show' : 'hide';
}
</script>