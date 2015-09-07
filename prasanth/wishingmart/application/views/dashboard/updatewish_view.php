<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
           <div><h3 class=" title ">
           My Wish
            </h3></div>
         
        
       <!-- Main content-->        
     <section class="content create-account inside-page">
  <div class="row">
    <div class="col-sm-6">
        <div class="row">

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
        <p class="wishform">Brand: Mayo Designer Club <br> Color: Yellow &amp; Green <br> Model: Sunflower <br> A very stunning handbag with outstanding design. </p>
        </div>        
        </div>
                
                <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Image</label>
        <div class="col-sm-8">
        <img src="<?php echo base_url('assets/images/handbags.jpg'); ?>" width="100" height="100" alt=""/>
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
    
        <div><h1>Update Wish</h1></div>
       
                <hr>
                      
        <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Name</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="ProductName" >
        </div>        
        </div>
          
          
           <div class="form-group">
                <label for="" class="col-sm-4 control-label">Category</label>
					<div class="col-sm-8">
					<select id="ProductCategory" class="form-control" required>
					<option>Clothing</option>
					<option>Accessories</option>
					<option>Collectibles</option>
					<option>Footwear</option>
                    <option value="1">Others</option>
					</select>
					</div>
                    <span class="help-block pull-right"></span>
				</div>
                
                <div  id="Category" class="form-group" style="display:none">
				<label for="" class="col-sm-4 control-label">Category Name</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" id="ProductCategory1" required>
                  <span class="help-block pull-right"></span>
				</div>				
				</div>
                
                <div id="SubCategory" class="form-group" style="display:none">
                <label for="" class="col-sm-4 control-label">Sub-Category</label>
				
					<div class="col-sm-8">
					<select id="ProductSubCategory" class="form-control" required>
					<option value="">Ladies</option>
					<option>Gents</option>
					<option>Children</option>
					<option>Infants</option>
                    <option value="1">Others</option>
					</select>
					</div>
                    <span class="help-block pull-right"></span>
				</div>
                
                <div id="SubCategory1" class="form-group" style="display:none" >
				<label for="" class="col-sm-4 control-label">Sub-Category Name</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" id="ProductSubCategory1" required>
                <span class="help-block pull-right"></span>
				</div>				
				</div>       
                   
        <div class="form-group">
                <label for="" class="col-sm-4 control-label"> Country</label>
        
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
        <label for="" class="col-sm-4 control-label">Brand</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="Brand" >
        </div>        
        </div>
                
                <div class="form-group">
        <label for="" class="col-sm-4 control-label">Colour</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="colour" >
        </div>        
        </div>
                
                <div class="form-group">
        <label for="" class="col-sm-4 control-label">Description</label>
        <div class="col-sm-8">
                <textarea id="productdesc" class="form-control" placeholder="Give us more details about the product you wish for (eg.size,model,specifications)"></textarea>
        </div>        
        </div>
                
                <div class="form-group">
        <label for="" class="col-sm-4 control-label">Product Image</label>
        <div class="col-sm-8">
        <input type="file" class="form-control" id="ProductImage" >
        </div>        
        </div>
            
                
        <button href="#" class="btn btn-danger pull-right" >Update Wish </button>
        
        <div class="form-group"></div>
   </div>
</form>
</div>
 
    </div>
</div>

           </section>
           </div>