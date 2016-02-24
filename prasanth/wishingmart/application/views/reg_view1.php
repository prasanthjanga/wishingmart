<?php
$head = "admin/head.php"; 
include_once($head); 
$head_top = "admin/head_top.php"; 
include_once($head_top); 
	//require('admin/head.php');
	//require('admin/head_top.php');
?>

<div class="container">

<!-- Register form -->
<div class="content inside-page create-account" >
<h1 class="title h2">
  <span class="top"></span>
Register
  <span class="bottom"></span>
</h1>

<div class="row">

		<form class="form-horizontal col-sm-6 col-sm-offset-3" method="post" action="<?php echo base_url('landing/registration'); ?>" data-toggle="validator" role="form" >
			<div class="panel-body">
		        <div class="form-group">
					<div class="help-block center h2">
			          <?php echo $this->session->flashdata('flashmsg'); ?>	
		        	</div>				
				</div>
				
						<?php //echo validation_errors(); ?>

				<div class="form-group">
					<label for="" class="col-sm-4 control-label">First Name</label>
					<div class="col-sm-8">
						<input type="text" name="firstname" value="<?php echo set_value('firstname'); ?>" class="form-control" id="FirstName" required >
					<div class="help-block pull-right"><?php echo form_error('firstname'); ?></div>
				</div>				
				</div>

                <div class="form-group">
					<label for="" class="col-sm-4 control-label">Last Name</label>
					<div class="col-sm-8">
						<input type="text" name="lastname" value="<?php echo set_value('lastname'); ?>" class="form-control" id="LastName" required>
					<div class="help-block pull-right"><?php echo form_error('lastname'); ?></div>
				</div>				
				</div>

				<div class="form-group">
					<label for="" class="col-sm-4 control-label">Date Of Birth</label>
					<div class="col-sm-8">
		               	<div class="input-group input-append date" id="datePicker">
						<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
						<input type="text" name="dob" value="<?php echo set_value('dob'); ?>" class="form-control" id="dob" required>
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
					<div class="help-block pull-right"><?php echo form_error('gender'); ?></div>
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
					<div class="help-block pull-right"><?php echo form_error('country'); ?></div>
					</div>
				</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-4 control-label">Email</label>
				<div class="col-sm-8">
					<input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" id="EmailId" required>
					<div class="help-block pull-right"><?php echo form_error('email'); ?></div>
				</div>				
			</div>	

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-4 control-label">Password</label>
				<div class="col-sm-8">
					<input type="password" name="pwd" value="<?php echo set_value('pwd'); ?>" class="form-control" id="password1" required>
					<div class="help-block pull-right"><?php echo form_error('pwd'); ?></div>
				</div>				
			</div>

			<div class="form-group">
				<label for="" class="col-sm-4 control-label">Re-Enter Password</label>
				<div class="col-sm-8">
					<input type="password" name="rpwd" value="<?php echo set_value('rpwd'); ?>" class="form-control" id="password2" required >
					<div class="help-block pull-right"><?php echo form_error('rpwd'); ?></div>
				</div>				
			</div>
                

            <div class="form-group">
				<div id="register_tnc_error">
					<label class="checkbox">
						<input type="checkbox" name="tnc" required/> &nbsp; I agree to the <a href="<?php echo base_url('landing/termscondition'); ?>">Terms of Service</a> and <a href="<?php echo base_url('landing/termscondition'); ?>">Privacy Policy</a>
					<div class="help-block pull-right"><?php echo form_error('tnc'); ?></div>
					</label>  
				</div>
			</div>	
           
		<input type="submit" name="sub" value="REGISTER" class="btn btn-danger pull-right"> 
		</form>
	</div><!-- .row end -->
</div><!-- Register form -->

</div><!-- .container end-->






<?php
$footer_top = "admin/footer_top.php"; 
include_once($footer_top); 
$footer = "admin/footer.php"; 
include_once($footer); 
//require('admin/footer_top.php');
//require('admin/footer.php');
?>