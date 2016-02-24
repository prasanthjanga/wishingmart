<!-- Online chatting pluggin Start-->
<div class="chatbox" id="tab1" style="bottom:0px; display:none;">

    <div class="chatboxhead"><?php echo $this->session->userdata('from_id'); ?>
        <div class="chatboxoptions">
            <a href="javascript:void(0)" onclick="toggler('myContent');">- </a>
<!--
        <a href="javascript:void(0)" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'">x</a>
-->
        <a href="#" onclick="funclose()">X</a>
        </div>
    </div>
    <div style="clear:both"></div>
    <div id="myContent">
        <div id="divcontent" class="chatboxcontent"></div>
        <div class="chatboxinput">
            <textarea type="text" id="txtmsg" class="chatboxtextarea" onkeypress="funsend(event)" ></textarea>
        </div>
    </div>
</div>
<!-- Online chatting pluggin end-->

<!-- footer -->
<div class="footer navbar-fixed-bottom" role="navigation">
<!-- <div class="colorbox rainbow"></div> -->
  <div class="pull-left">
    <div class="links">
      <a href="<?php echo base_url('landing/termscondition'); ?>">Terms &amp; Conditions</a>   
      <a href="<?php echo base_url('landing/aboutus'); ?>">About Us</a>
      <a href="<?php echo base_url('landing/contactus'); ?>">Contact Us</a>
      <a href="<?php echo base_url('landing/testimonial'); ?>">Testimonials</a>   
      <a href="<?php echo base_url('landing/buyerseller'); ?>">Buyer &amp; Seller</a> 
      <a href="<?php echo base_url('landing/toolsapps'); ?>">Tools &amp; Apps</a> 
      &nbsp;&nbsp;     
    </div>
    <div class="links">
      <a href="<?php echo base_url('landing'); ?>">
        WishingMart &copy; <?php echo date("Y",time()); ?>
      </a>
    </div>
<!--
    <div class="links">
      <p>Page rendered in <strong>{elapsed_time}</strong> seconds</p>
    </div>
-->
  </div>
<div class="social pull-right">
  
<a href="https://www.facebook.com/"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a>
<a href="https://www.instagram.com/"><i class="fa fa-instagram"  data-toggle="tooltip" data-placement="top" data-original-title="instragram"></i></a>
<a href="https://www.twitter.com/"><i class="fa fa-twitter-square" data-toggle="tooltip" data-placement="top" data-original-title="twitter"></i></a>
<a href="https://www.pinterest.com/"><i class="fa fa-pinterest-square" data-toggle="tooltip" data-placement="top" data-original-title="pinterest"></i></a>
<a href="https://plus.google.com/"><i class="fa fa-google-plus-square" data-toggle="tooltip" data-placement="top" data-original-title="google+"></i></a>

</div>
    
</div>
</div>

<!-- footer -->