
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
function p_add()
{
    $('#edit_p_add').slideDown();
    $('#hide_p_add').slideUp();
}
function p_add1()
{
    $('#edit_p_add').slideUp();
    $('#hide_p_add').slideDown();
}

</script>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
           <div><h3 class="title">
         Personal Details
            </h3></div>
         
    <!-- Main content-->        
    <section class="content create-account inside-page">
<div class="row">
<!--<form id="registerForm" class="form-horizontal col-sm-6 col-sm-offset-3 col-lg-offset-1 col-lg-10" data-toggle="validator" role="form" method="post" action="">
    -->
<div class="form-horizontal col-sm-6 col-sm-offset-3 col-lg-offset-1 col-lg-10">
    <div class="form-group">
      <label for="" class="col-sm-4 control-label">
        <?php echo $this->session->flashdata('flashmsg'); ?> 
      </label> 
    </div>
    <div class="form-horizontal form-group">
<br>
 <h4 class=""><i class="fa fa-picture-o"></i> Profile Picture</h4>
    <hr>
    <div class= " col-sm-12 col-lg-offset-4 col-lg-12" id="hide_div"><br>

        <img src="<?php 
          if($profile[0]['prof_img'] !=''){
              echo base_url().'images/profile/'.$profile[0]['prof_img'];
          }else{
              echo base_url().'assets/images/profile-null.png';
          }
        ?>" width="200" height="200" alt="" style="border-radius:100px;"/>
        
        <div class="form-group">
          <label for="" class="col-sm-4 control-label">
          </label>
        </div>
        <div class="col-sm-6">
            <input type="submit" data-toggle="collapse" data-target="#demo"
             onclick="test()" class="btn btn-danger pull-right" required="" value="Change Profile Picture" >
        </div>  
    </div>
    
    <div class= " col-sm-10 col-lg-11" id="edit_div" style="display:none;"><br>
    <?php echo form_open_multipart('dashboard/profile_pic',array('id' => 'registerForm', 'data-toggle'=>'validator')); ?>
        <div class="row">
            <div class="col-sm-8">
                <input type="file" name="userfile" class="form-control" required>
            </div>
            <div class="col-sm-2">
                <input type="submit" name="sub" class="btn btn-danger">
            </div>
            <div class="col-sm-2">
                <input type="cancel" onclick="sample()" class="btn btn-danger pull-left" value="cancel"> 
            </div>

        </div>

    </form>       
    </div>
    </div>


<section>

<div class="form-horizontal row form-group" id='hide_about'>
<br>
 <h4 class="">About Me</h4>
    <hr>
  <div class="col-sm-6">
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">First Name</label>
        <div class="col-sm-8">
            <p class="wishform"><?php echo $profile[0]['fn']; ?></p>
        </div>				
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Last Name</label>
        <div class="col-sm-8">
            <p class="wishform"><?php echo $profile[0]['ln']; ?></p>
        </div>				
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Date Of Birth</label>
        <div class="col-sm-8">
            <p class="wishform"><?php echo $profile[0]['dob']; ?></p>
        </div>				
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Gender</label>
        <div class="col-sm-8">
            <p class="wishform"><?php if($profile[0]['gender'] == "M"){ echo "Male"; }else{ echo "Female"; } ?></p>
        </div>				
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Nationality</label>
        <div class="col-sm-8">
            <p class="wishform"><?php echo $profile[0]['r_country']; ?></p>
        </div>				
    </div>

 </div>
 <div class="col-sm-6">
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Email ID</label>
        <div class="col-sm-8">
            <p class="wishform"><?php echo $profile[0]['uname']; ?></p>
        </div>				
    </div>

    <div class="form-group">
        <label for="" class="col-sm-4 control-label"> Mobile No </label>
        <div class="col-sm-8">
            <p class="wishform"><?php echo $profile[0]['contact']; ?></p>
        </div>				
    </div>

    <div class="form-group">
        <label for="" class="col-sm-4 control-label">House No </label>
        <div class="col-sm-8">
            <p class="wishform"><?php echo $profile[0]['hcontact']; ?></p>
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


<div class="form-horizontal row form-group" id='edit_about' style="display:none"><!-- style="display:none"-->
<br>
 <h4 class="">About Me</h4>
    <hr>

<?php echo form_open_multipart('dashboard/about_me',array('id' => 'registerForm', 'data-toggle'=>'validator')); ?>
 <div class="col-sm-6">
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">First Name</label>
        <div class="col-sm-8">
            <input type="text" name="fn" placeholder="<?php echo $profile[0]['fn']; ?>" class="form-control" >
        </div>              
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Last Name</label>
        <div class="col-sm-8">
            <input type="text" name="ln" placeholder="<?php echo $profile[0]['ln']; ?>" class="form-control">
        </div>              
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Date Of Birth</label>
        <div class="col-sm-8">
            <div class="input-group input-append date" id="datePicker">
            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            <input type="text" name="dob" placeholder="<?php echo $profile[0]['dob']; ?>" class="form-control" id="dob" required>
        <div class="help-block pull-right"><?php echo form_error('dob'); ?></div>
        </div>
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
            <?php
                $count=round(count($country));
                echo "<select class='form-control' name='country' required>";
                echo "<option value='00' selected='selected'>-- Select Country --</option>";
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

 </div>
 <div class="col-sm-6">
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Email ID</label>
        <div class="col-sm-8">
            <p class="wishform"><?php echo $profile[0]['uname']; ?></p>
        </div>              
    </div>

    <div class="form-group">
        <label for="" class="col-sm-4 control-label"> Mobile No </label>
        <div class="col-sm-8">
            <input type="text" name="contact" placeholder="<?php echo $profile[0]['contact']; ?>" class="form-control">
        </div>              
    </div>

    <div class="form-group">
        <label for="" class="col-sm-4 control-label">House No </label>
        <div class="col-sm-8">
            <input type="text" name="hcontact" placeholder="<?php echo $profile[0]['hcontact']; ?>" class="form-control">
        </div>              
    </div>

</div>
    <div class="form-group">
      <label for="" class="col-sm-4 control-label"></label>
      <div class="col-sm-8">
        <input type="submit" name="sub" data-toggle="collapse" data-target="#demo"
     onclick="about()" class="btn btn-danger pull-right" value="Submit">
        <input type="cancel"data-toggle="collapse" data-target="#demo"
     onclick="about1()" class="btn btn-danger pull-right" value="Cancel">        
      </div>                
    </div>
</form>
</div><!-- row end-->




<div class="form-horizontal row form-group" id="hide_payment">
<br>
    <h4><i class="fa fa-credit-card"></i> Payment Details</h4>
        <hr>
  <div class="col-sm-6">
    <div class="form-group">
        <label for="" class="col-sm-4 control-label"> Credit Card No </label>
        <div class="col-sm-8">
            <p class="wishform"><?php echo $profile[0]['card_no']; ?></p>
        </div>
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Card Type</label>  
        <div class="col-sm-8">
            <p class="wishform"><?php echo $profile[0]['card_type']; ?></p>
        </div>
    </div>
        
    <div class="form-group"> 
        <label for="" class="col-sm-4 control-label">Issued Bank</label>
        <div class="col-sm-8">
            <p class="wishform"><?php echo $profile[0]['issued_bank']; ?></p>
        </div>
    </div>
    
    <div class="form-group"> 
        <label for="" class="col-sm-4 control-label">Country</label>    
        <div class="col-sm-8">
            <p class="wishform"><?php echo $profile[0]['p_country']; ?></p>
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



<div class="form-horizontal row form-group" id="edit_payment" style="display:none">
<br>
    <h4><i class="fa fa-credit-card"></i> Payment Details</h4>
        <hr>
    <?php echo form_open_multipart('dashboard/bac_details',array('id' => 'registerForm', 'data-toggle'=>'validator')); ?>
  <div class="col-sm-6">
    <div class="form-group">
        <label for="" class="col-sm-4 control-label"> Credit Card No </label>
        <div class="col-sm-8">
            <input type="text" name="cno" class="form-control" placeholder="<?php echo $profile[0]['card_no']; ?>">
        </div>
    </div>
    
    <div class="form-group">
        <label for="" class="col-sm-4 control-label">Card Type</label>  
        <div class="col-sm-8">
            <input type="text" name="ct" class="form-control" placeholder="<?php echo $profile[0]['card_type']; ?>">
        </div>
    </div>
        
    <div class="form-group"> 
        <label for="" class="col-sm-4 control-label">Issued Bank</label>
        <div class="col-sm-8">
            <input type="text" name="ib" class="form-control" placeholder="<?php echo $profile[0]['issued_bank']; ?>">
        </div>
    </div>
    
    <div class="form-group"> 
        <label for="" class="col-sm-4 control-label">Country</label>    
        <div class="col-sm-8">
        <?php
            $count=round(count($country));
            echo "<select class='form-control' name='country' required>";
            echo "<option value='00' selected='selected'>-- Select Country --</option>";
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
  </div>

    <div class="form-group">
      <label for="" class="col-sm-4 control-label"></label>
      <div class="col-sm-8">
        <input type="submit" name="sub" class="btn btn-danger pull-right" value="Submit">
        <input type="cancel" class="btn btn-danger pull-right" value="Cancel" onclick="payment1()">
    </div> 
    </div> 
</form>
    </div><!-- row end--> 
</section>


<section>

<div class="form-horizontal row form-group" id="hide_p_add">
<br>
<h4><i class="fa fa-map-marker"></i> Postal Address</h4>
<hr>
 <div class="col-sm-6">
  
   <div class="form-group">
    <label for="" class="col-sm-4 control-label"> Street </label>
    <div class="col-sm-8">
    <p class="wishform"><?php echo $profile[0]['a_add1']; ?></p>
    </div>
    </div>
    
     <div class="form-group">
    <label for="" class="col-sm-4 control-label"> City</label>  
     <div class="col-sm-8">
        <p class="wishform"><?php echo $profile[0]['a_add2']; ?></p>
        </div>
        </div>
        
      <div class="form-group"> 
     <label for="" class="col-sm-4 control-label"> Country</label>
     <div class="col-sm-8">
    <p class="wishform"><?php echo $profile[0]['a_country']; ?></p>
    </div>
    </div>
    
     <div class="form-group"> 
    <label for="" class="col-sm-4 control-label"> Postcode</label>   
     <div class="col-sm-8">
    <p class="wishform"><?php echo $profile[0]['a_pincode']; ?></p>
    </div>
    </div>
    </div>
    <div class="form-group">
      <label for="" class="col-sm-4 control-label"></label>
      <div class="col-sm-8">
        <input type="submit" class="btn btn-danger pull-right" value="edit" onclick="p_add()">
      </div> 
    </div>
    </div>
<div class="form-horizontal row form-group" id="edit_p_add" style="display:none">
<br>
<h4><i class="fa fa-map-marker"></i> Postal Address</h4>
<hr>
<?php echo form_open_multipart('dashboard/postal_details',array('id' => 'registerForm', 'data-toggle'=>'validator')); ?>
    <div class="col-sm-6">
 
   <div class="form-group">
    <label for="" class="col-sm-4 control-label"> Street </label>
    <div class="col-sm-8">
        <input type="text" name="add1" class="form-control" placeholder="<?php echo $profile[0]['a_add1']; ?>">
    </div>
    </div>
    
     <div class="form-group">
    <label for="" class="col-sm-4 control-label"> City</label>  
     <div class="col-sm-8">
            <input type="text" name="add2" class="form-control" placeholder="<?php echo $profile[0]['a_add2']; ?>">
     </div>
     </div>
        
      <div class="form-group"> 
     <label for="" class="col-sm-4 control-label"> Country</label>
     <div class="col-sm-8">
    <?php
        $count=round(count($country));
        echo "<select class='form-control' name='country' required>";
        echo "<option value='00' selected='selected'>-- Select Country --</option>";
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
    <label for="" class="col-sm-4 control-label"> PostCode</label>   
     <div class="col-sm-8">
        <input type="text" name="post" class="form-control" placeholder="<?php echo $profile[0]['a_pincode']; ?>">
    </div>
    </div>
    </div>
    
    <div class="form-group">
    <label for="" class="col-sm-4 control-label"></label>
    <div class="col-sm-8">
        <input type="submit" name="sub" class="btn btn-danger pull-right" value="Submit">
        <input type="cancel" class="btn btn-danger pull-right" value="Cancel" onclick="p_add1()">
    </div> 
    </div>  
</form>
</div>
 </section>


</section>
</div>    			
<!--</form>-->
</div>

           </section>
           </div>