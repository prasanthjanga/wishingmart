<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
           <div><h3 class=" title ">
           
            </h3></div>
         
        
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
        <p class="wishform">W4562</p>
        </div>        
        </div>
        
         <div class="form-group">
        <label for="" class="col-sm-4 control-label">Grant ID</label>
        <div class="col-sm-8">
        <p class="wishform">G4562</p>
        </div>        
        </div>
         
         <div class="form-group">
        <label for="" class="col-sm-4 control-label">Grantor Name</label>
        <div class="col-sm-8">
        <p class="wishform">Grnt ABC</p>
        </div>        
        </div>
        
               
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
        <label for="" class="col-sm-4 control-label">Product Description</label>
        <div class="col-sm-8">
        <p class="wishform">Brand: Mayo Designer Club <br> Color: Yellow &amp; Green <br> Model: Sunflower <br> A very stunning handbag with outstanding design. </p>
        </div>        
        </div>
                
                <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Image</label>
        <div class="col-sm-8">
        <img src="<?php echo base_url('assets/images/handbags.jpg'); ?>" width="100" height="100" alt=""/>
                </div>        
        </div>
        
             <div class="form-group">
        <label for="" class="col-sm-4 control-label">Price</label>
        <div class="col-sm-8">
        <p class="wishform">$15.00</p>
        </div>        
        </div>
        
              
</div>
</div>
</div>
</div>

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
					<input type="checkbox" name="ExistingAddress" /> &nbsp; Ship to my address.</label>  
					<div id=""></div>
				</div>
                 </div>
                 
                <div class="form-group" style="display:none">
				<div id="register_tnc_error">
                <div class="help-block pull-left"></div>
					<label class="checkbox">
					<input type="checkbox" name="SaveAddress" /> &nbsp; Save my Details</label>  
					<div id=""></div>
				</div>
                 </div>
  
       <div class="form-group">
        <label for="" class="col-sm-4 control-label">Street</label>
        <div class="col-sm-8">
     	 <input type="text" class="form-control" id="street" placeholder="" >
        </div>
        </div>
        
         <div class="form-group">
        <label for="" class="col-sm-4 control-label">Postcode</label>	
         <div class="col-sm-8">
     	 <input type="number" class="form-control" id="postcode" placeholder="" >
            </div>
            </div>
            
          <div class="form-group"> 
         <label for="" class="col-sm-4 control-label">City</label>
         <div class="col-sm-8">
     	<input type="text" class="form-control" id="city" placeholder="" >
        </div>
        </div>
        
      <div class="form-group">
                <label for="" class="col-sm-4 control-label">Country</label>
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
        <label for="" class="col-sm-4 control-label">Mobile Number</label>
        <div class="col-sm-8">
       <input type="text" class="form-control" id="MobNo" placeholder="">
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
  </div>
    
 		 
        <a href="<?php echo base_url('dashboard/invoice'); ?>" class="btn btn-danger pull-right">Continue</a>
        
        <div class="form-group"></div>

</form>
</div>
 
    </div>
</div>

           </section>
           </div>