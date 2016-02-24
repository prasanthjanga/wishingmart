<?php
include('application/views/admin/head.php');
include('application/views/admin/head_top.php');
?>

<!--<div class="overlay"></div>  overlay -->
<!--<div class="pattern"></div>  pattern -->


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
            <h5 class="section-title animated" data-animation="fadeInDown" data-delay="0">Wishes do come <span>True!</span>
            </h5>
            <p class="animated" data-animation="fadeInUp" data-delay="100">
             Get your wishes granted and earn profit by granting wishes as well!</p>
          </div>
          <!-- /section title -->

          <div class="row">
            <a href="<?php echo base_url('wishgrant/wishing'); ?>">
              <div class="col-md-6 btn pull-left plan1">
                <h1 class="section-title">
                  <span class="fa fa-star"></span>
                </h1>
                <hr>
                  <span class="btn_title">Make A Wish</span>
              </div>
            </a>
            <a href="<?php echo base_url('wishgrant/listofwishes'); ?>">
              <div class="col-md-6 btn pull-right plan1">
                <h1 class="section-title">
                  <span class="fa fa-magic"></span>
                </h1>
                <hr>
                <span class="btn_title">Grant A Wish</span>
              </div>
            </a>
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
