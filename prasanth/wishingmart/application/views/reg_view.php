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

<div class="row">
  <div class="col-md-6">
    <form data-toggle="validator" role="form" method="post" action="<?php echo base_url('landing/registration'); ?>">
    <h1>Registration</h1>
    <hr>
    <?php if($this->session->flashdata('flashmsg') != "" || validation_errors() != ""){ ?>
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><?php echo $this->session->flashdata('flashmsg'); ?>
        <?php echo validation_errors(); ?>
      </div>
    <?php } //IF COND FLASHMSG END ?>
    
    <div class="group">
      <div class="col-sm-6">
        <input type="text" name="firstname" value="<?php echo set_value('firstname'); ?>" id="FirstName" required >
        <span class="highlight"></span><span class="bar"></span>
        <label>First Name</label>
      <br />
      </div><!-- col-sm-6 CLASS END -->
        <div class="col-sm-6">
        <input type="text" name="lastname" value="<?php echo set_value('lastname'); ?>" id="LastName" required>
        <span class="highlight"></span><span class="bar"></span>
          <label>Last Name</label>
      <br />
      </div><!-- col-sm-6 CLASS END -->
    <br />
    </div><!-- group CLASS END -->
    <br />

    <span class="label_dis">Date Of Birth</span>
    <div class="group">
      <div class="col-sm-3">
        <select name="date">
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
      <span class="highlight"></span><span class="bar"></span>
      </div><!-- col-sm-3 CLASS END -->
      <div class="col-sm-5">
        <select name="month">
          <option value="01">January</option>
          <option value="02">February</option>
          <option value="03">March</option>
          <option value="04">April</option>
          <option value="05">May</option>
          <option value="06">June</option>
          <option value="07">July</option>
          <option value="08">August</option>
          <option value="09">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
        <span class="highlight"></span><span class="bar"></span>
        </div><!-- col-sm-5 CLASS END -->
      <div class="col-sm-4">
      <?php
        $end_y = date('Y',time());
        $start_y=1900;
        $count= $end_y - $start_y;
        echo '<select name="year" selected='.set_value("year").'>';
        echo  '<option value="">-- Year --</option>'; 
        for($i=0;$i<=$count;$i++){
          $year_y = $end_y - $i;
          echo  '<option value="'.$year_y.'">'.$year_y."</option>"; 
        }
        echo '</select>';
      ?>
      <span class="highlight"></span><span class="bar"></span>
      </div><!-- col-sm-4 CLASS END -->  
    </div><!-- group CLASS END -->
    <br />
    
    <span class="label_dis">Gender</span>
    <div class="group">
      <div class="col-sm-12">
        <select name="gender" selected='<?php echo set_value("gender"); ?>'>
          <option value="M">Male</option>
          <option value="F">Female</option>
        </select>
        <span class="highlight"></span><span class="bar"></span>
        <label></label>
      </div><!-- col-sm-6 CLASS END -->
    </div><!-- group CLASS END -->
    <br />

    <span class="label_dis">Country</span>
    <div class="group">
      <div class="col-sm-12">
      <?php
        $count=round(count($country));
        echo "<select name='country' selected=".set_value("country")." required>";
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
      </div><!-- col-sm-12 CLASS END -->
    </div><!-- group CLASS END -->
    <br />

    <div class="group">
      <div class="col-sm-12">
        <input type="email" name="email" value="<?php echo set_value('email'); ?>" id="EmailId" required>
        <span class="highlight"></span><span class="bar"></span>
        <label>Email</label>
      </div><!-- col-sm-12 CLASS END -->
    </div><!-- group CLASS END -->
    <br />

    <div class="group">
      <div class="col-sm-6">
        <input type="password" name="pwd" value="<?php echo set_value('pwd'); ?>" id="password1" required>
        <span class="highlight"></span><span class="bar"></span>
        <label>Password</label>
      <br />
      </div><!-- col-sm-6 CLASS END -->
      <div class="col-sm-6">
        <input type="password" name="rpwd" value="<?php echo set_value('rpwd'); ?>" id="password2" required >
        <span class="highlight"></span><span class="bar"></span>
        <label>Re-Enter Password</label>
      <br />
      </div><!-- col-sm-6 CLASS END -->
    <br />
    </div><!-- group CLASS END -->
    <br />
    
    <div class="group">
      <input type="checkbox" name="tnc" required/> &nbsp; I agree to the <a href="<?php echo base_url('landing/termscondition'); ?>">Terms of Service</a> and <a href="<?php echo base_url('landing/termscondition'); ?>">Privacy Policy</a>
      <div class="help-block pull-right"><?php echo form_error('tnc'); ?></div>
    </div><!-- group CLASS END -->



    <button type="submit" name="sub" class="button buttonBlue">Register
    </button>
    </form>

  </div><!-- col-md-6 CLASS END -->
    <div class="col-md-6">
    <form>
        <h1>Login <span class="text-success">FREE</span></h1>
        <hr>
          <ul class="list-unstyled" style="line-height: 2">
            <li><span class="fa fa-check text-success"></span> See all your Wish & Grant list</li>
            <li><span class="fa fa-check text-success"></span> See all your Chat</li>
            <li><span class="fa fa-check text-success"></span> See all your orders</li>
            <li><span class="fa fa-check text-success"></span> Shipping is always free</li>
            <li><span class="fa fa-check text-success"></span> Save your favorites</li>
            <li><span class="fa fa-check text-success"></span> Fast checkout</li>
            <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
            <li><span class="fa fa-check text-success"></span>Holiday discounts up to 30% off</li>
          </ul>
        <p><a href="<?php echo base_url('landing/login'); ?>" class="button buttonBlue">Yes please, Login now!</a></p>
    </form><!-- FORM END-->
    
  </div><!-- col-md-6 CLASS END -->
</div><!-- row CLASS END -->    
</div><!-- .panel-body end -->
<!-- REGISTRATION FROM END -->
</div><!-- .container end-->






<?php
$footer_top = "admin/footer_top.php"; 
include_once($footer_top); 
$footer = "admin/footer.php"; 
include_once($footer); 
//require('admin/footer_top.php');
//require('admin/footer.php');
?>