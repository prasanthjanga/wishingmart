<?php
include('application/views/admin/head.php');
include('application/views/admin/head_top.php');
?>


<!--
<div class="content fullpage homepage">
<div style="padding: 100px; text-align:center">

<a href="<?php //echo base_url('wishgrant/wishing'); ?>" class="btn btn-danger ">Make a Wish</a>

<a href="<?php //echo base_url('wishgrant/listofwishes'); ?>" class="btn btn-danger ">Grant A Wish</a>
</div>

</div>

-->
<div class="overlay"></div> <!-- overlay -->
<div class="pattern"></div> <!-- pattern -->


<!-- fullpage -->
<div id="fullpage">


<!-- home -->
<div class="section active home-section">
  <div class="section-entry">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- section title -->
          <div class="section-heading">
            <h5 class=" title section-title animated" data-animation="fadeInDown" data-delay="0">Wishes do come <span>True!</span>
            </h5>
            <p class="animated" data-animation="fadeInUp" data-delay="100">
             Get your wishes granted and earn profit by granting wishes as well!</p>
          </div>
          <!-- /section title -->
          
          <div class="home-btn-wrapper">
            <a class="btn btn-transparent animated" href="<?php echo base_url('wishgrant/wishing'); ?>"><span class="fa fa-star"></span>Make A Wish</a>
            <a class="btn btn-transparent animated" href="<?php echo base_url('wishgrant/listofwishes'); ?>">
            	<span class="fa fa-magic"></span>Grant A Wish</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /home -->
</div>
<!-- /fullpage -->


<?php
include('application/views/admin/footer_top.php');
include('application/views/admin/footer.php');
?>
