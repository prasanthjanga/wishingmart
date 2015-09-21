
<script type="text/javascript">
function test()
{
    $('#edit_div').slideDown();
    $('#hide_div').slideUp();
}
function sample()
{
    $('#edit_div').slideUp();
    $('#hide_div').slideDown();
}
function about()
{
    $('#edit_about').slideDown();
    $('#hide_about').slideUp();
}
function about1()
{
    $('#edit_about').slideUp();
    $('#hide_about').slideDown();
}
function payment()
{
    $('#edit_payment').slideDown();
    $('#hide_payment').slideUp();
}
function payment1()
{
    $('#edit_payment').slideUp();
    $('#hide_payment').slideDown();
}

</script>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
           <div><h3 class=" title ">
         Personal Details
            </h3></div>
         
    <!-- Main content-->        
    <section class="content create-account inside-page">
<div class="row">
<!--<form id="registerForm" class="form-horizontal col-sm-6 col-sm-offset-3 col-lg-offset-1 col-lg-10" data-toggle="validator" role="form" method="post" action="">
    -->
<div class="form-horizontal col-sm-6 col-sm-offset-3 col-lg-offset-1 col-lg-10">    
    <div class="form-group">
    <div class= " col-sm-6 col-lg-offset-4 col-lg-4" id="hide_div">
        <img  class="img-responsive" style="margin:10px;" src="<?php echo base_url('assets/images/slide1.jpg'); ?>" width="200" height="200" alt=""/>
        
        <div class="form-group">
          <label for="" class="col-sm-4 control-label"></label>
          <div class="col-sm-8">
            <input type="submit" data-toggle="collapse" data-target="#demo"
         onclick="test()" class="btn btn-danger pull-right" value="Edit" >
            
          </div>                
        </div>
    </div>
    <div class= " col-sm-6 col-lg-offset-4 col-lg-4" id="edit_div" style="display:none;">
        <input type="file" name="userfile">
        <input type="submit" class="btn btn-danger pull-right">
        <input type="cancel" data-toggle="collapse" data-target="#demo"
         onclick="sample()" class="btn btn-danger pull-right" value="cancel">        
    </div>
    </div>


<section>
 <h4 class="">About Me</h4>
<hr>
<div class="row" id='hide_about'>
 <div class="col-sm-6">
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">First Name</label>
        <div class="col-sm-8">
            <p class="wishform">Shalini</p>
        </div>				
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Last Name</label>
        <div class="col-sm-8">
            <p class="wishform">Devi</p>
        </div>				
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Email</label>
        <div class="col-sm-8"> 
            <p class="wishform">jo_kris@yahoo.com</p>
        </div>				
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Date Of Birth</label>
        <div class="col-sm-8">
            <p class="wishform">1993/05/14</p>
        </div>				
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Gender</label>
        <div class="col-sm-8">
            <p class="wishform">Female</p>
        </div>				
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Nationality</label>
        <div class="col-sm-8">
            <p class="wishform">Malaysia</p>
        </div>				
    </div>

 </div>
 <div class="col-sm-6">
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Email ID</label>
        <div class="col-sm-8">
            <p class="wishform">jo_kris@yahoo.com</p>
        </div>				
    </div>

    <div class="form-group">
        <label for="" class="col-sm-4 control-label"> Mobile No </label>
        <div class="col-sm-8">
            <p class="wishform">0060129377410</p>
        </div>				
    </div>

    <div class="form-group">
        <label for="" class="col-sm-4 control-label">House No </label>
        <div class="col-sm-8">
            <p class="wishform">0060340514051</p>
        </div>				
    </div>

    <div class="form-group">
        <label for="" class="col-sm-4 control-label"> Mobile No </label>
        <div class="col-sm-8">
            <p class="wishform">0060129377410</p>
        </div>				
    </div>
</div>
<div class="form-group">
  <label for="" class="col-sm-4 control-label"></label>
  <div class="col-sm-8">
        <input type="submit"data-toggle="collapse" data-target="#demo"
     onclick="about()" class="btn btn-danger pull-right" value="edit">  </div>                
</div>

</div>


<div class="row" id='edit_about' style="display:none">
 <div class="col-sm-6">
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">First Name</label>
        <div class="col-sm-8">
            <input type="text" class="form-control">
        </div>              
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Last Name</label>
        <div class="col-sm-8">
            <input type="text" class="form-control">
        </div>              
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Email</label>
        <div class="col-sm-8"> 
            <p class="wishform">jo_kris@yahoo.com</p>
        </div>              
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Date Of Birth</label>
        <div class="col-sm-8">
            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            <input type="text" name="dob" value="<?php echo set_value('dob'); ?>" class="form-control" id="dob" required>
        </div>              
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Gender</label>
        <div class="col-sm-8">
            <label class="radio-inline">
                <input type="radio" name="gender" id="RadMale" value="M" <?php echo set_radio('gender', 'M'); ?> required>Male 
            </label>
            <label class="radio-inline">
                <input type="radio" name="gender" id="RadFemale" value="F" <?php echo set_radio('gender', 'F'); ?> required>Female
            </label>
        </div>              
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Nationality</label>
        <div class="col-sm-8">
            <select class="form-control">
                <option>Malaysia</option>
                <option>singapour</option>
                <option>Bahrain</option>
                <option>Australia</option>
                <option>China</option>
            </select>
        </div>              
    </div>

 </div>
 <div class="col-sm-6">
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Email ID</label>
        <div class="col-sm-8">
            <p class="wishform">jo_kris@yahoo.com</p>
        </div>              
    </div>

    <div class="form-group">
        <label for="" class="col-sm-4 control-label"> Mobile No </label>
        <div class="col-sm-8">
            <input type="text" class="form-control">
        </div>              
    </div>

    <div class="form-group">
        <label for="" class="col-sm-4 control-label">House No </label>
        <div class="col-sm-8">
            <input type="text" class="form-control">
        </div>              
    </div>

    <div class="form-group">
        <label for="" class="col-sm-4 control-label"> Mobile No </label>
        <div class="col-sm-8">
            <input type="text" class="form-control">
        </div>              
    </div>
</div>
    <div class="form-group">
      <label for="" class="col-sm-4 control-label"></label>
      <div class="col-sm-8">
        <input type="submit"data-toggle="collapse" data-target="#demo"
     onclick="about()" class="btn btn-danger pull-right" value="Submit">
        <input type="cancel"data-toggle="collapse" data-target="#demo"
     onclick="about1()" class="btn btn-danger pull-right" value="Cancel">        
      </div>                
    </div>
</div>




<section>
<h4>Payment Details</h4>
<hr>
<div class="row" id="hide_payment">
  <div class="col-sm-6">
    <div class="form-group">
        <label for="" class="col-sm-4 control-label"> Credit Card No </label>
        <div class="col-sm-8">
            <p class="wishform">9999000012345678</p>
        </div>
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Card Type</label>  
        <div class="col-sm-8">
            <p class="wishform">Master</p>
        </div>
    </div>
        
    <div class="form-group"> 
        <label for="" class="col-sm-4 control-label">Issued Bank</label>
        <div class="col-sm-8">
            <p class="wishform">CIMB</p>
        </div>
    </div>
    
    <div class="form-group"> 
        <label for="" class="col-sm-4 control-label">Country</label>    
        <div class="col-sm-8">
            <p class="wishform">Malaysia</p>
        </div>
    </div>
  </div>
<div class="form-group">
  <label for="" class="col-sm-4 control-label"></label>
  <div class="col-sm-8">
    <input type="submit" class="btn btn-danger pull-right" value="edit" onclick="payment()">
  </div> 
</div>          
</div>


<div class="row" id="edit_payment" style="display:none">
  <div class="col-sm-6">
    <div class="form-group">
        <label for="" class="col-sm-4 control-label"> Credit Card No </label>
        <div class="col-sm-8">
            <p class="wishform">9999000012345678</p>
        </div>
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Card Type</label>  
        <div class="col-sm-8">
            <p class="wishform">Master</p>
        </div>
    </div>
        
    <div class="form-group"> 
        <label for="" class="col-sm-4 control-label">Issued Bank</label>
        <div class="col-sm-8">
            <p class="wishform">CIMB</p>
        </div>
    </div>
    
    <div class="form-group"> 
        <label for="" class="col-sm-4 control-label">Country</label>    
        <div class="col-sm-8">
            <p class="wishform">Malaysia</p>
        </div>
    </div>
  </div>

<div class="form-group">
  <label for="" class="col-sm-4 control-label"></label>
  <div class="col-sm-8">
    <input type="submit" class="btn btn-danger pull-right" value="Submit">
    <input type="cancel" class="btn btn-danger pull-right" value="Cancel" onclick="payment1()">
</div> 
</div>  
</section>


<section>
<h4>Postal Address</h4>
<hr>
 <div class="row">
 <div class="col-sm-6">
 
   <div class="form-group">
    <label for="" class="col-sm-4 control-label"> Street </label>
    <div class="col-sm-8">
 	<p class="wishform">No.45 Jalan Pipit , Taman Pipit</p>
    </div>
    </div>
    
     <div class="form-group">
    <label for="" class="col-sm-4 control-label"> Postcode</label>	
     <div class="col-sm-8">
 		<p class="wishform">51200</p>
        </div>
        </div>
        
      <div class="form-group"> 
     <label for="" class="col-sm-4 control-label"> City</label>
     <div class="col-sm-8">
 	<p class="wishform">Kuala Lumpur</p>
    </div>
    </div>
    
     <div class="form-group"> 
    <label for="" class="col-sm-4 control-label"> Country</label>	
     <div class="col-sm-8">
 	<p class="wishform">Malaysia</p>
    </div>
    </div>
    </div>
    </div>			

 </section>

 
    <div class="form-group">
        <label for="" class="col-sm-4 control-label"></label>
        <div class="col-sm-8">
            <a href="updateProfile.html" class="btn btn-danger pull-right">Update</a>
        </div>				
    </div>

</section>
</div>    			
<!--</form>-->
</div>

           </section>
           </div>