<div class="footer-bottom">
	<div class="container">
		<div class="col-sm-3 footer-bottom-cate">
			<h6>Categories</h6>
			<ul>
				<li><a href="#">Curabitur sapien</a></li>
				<li><a href="#">Dignissim purus</a></li>
				<li><a href="#">Tempus pretium</a></li>
				<li><a href="#">Dignissim neque</a></li>
				<li><a href="#">Ornared id aliquet</a></li>
				
			</ul>
		</div>
		<div class="col-sm-3 footer-bottom-cate">
			<h6>Feature Projects</h6>
			<ul>
				<li><a href="#">Curabitur sapien</a></li>
				<li><a href="#">Dignissim purus</a></li>
				<li><a href="#">Tempus pretium</a></li>
				<li><a href="#">Dignissim neque</a></li>
				<li><a href="#">Ornared id aliquet</a></li>
				
			</ul>
		</div>
		<div class="col-sm-3 footer-bottom-cate">
			<h6>Top Brands</h6>
			<ul>
				<li><a href="#">Curabitur sapien</a></li>
				<li><a href="#">Dignissim purus</a></li>
				<li><a href="#">Tempus pretium</a></li>
				<li><a href="#">Dignissim neque</a></li>
				<li><a href="#">Ornared id aliquet</a></li>
				<li><a href="#">Ultrices id du</a></li>
				<li><a href="#">Commodo sit</a></li>
				
			</ul>
		</div>
		<div class="col-sm-3 footer-bottom-cate cate-bottom">
			<h6>Our Address</h6>
			<ul>
				<li>Aliquam metus  dui. </li>
				<li>orci, ornareidquet</li>
				<li> ut,DUI.</li>
				<li>nisi, dignissim</li>
				<li>gravida at.</li>
				<li class="phone">PH : 6985792466</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<p class="footer-class"> © <?php echo date("Y",time()); ?> Fashion Mania. All Rights Reserved | Design by <a href="#" target="_blank">My Solutions</a> </p>
	</div>
</div><!--//footer-bottom class end-->

</div><!--//footer class end-->

<?php if($thispage=='p2'){ ?>
	<!-- slide -->
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/imagezoom.js'); ?>"></script>
<!-- start menu -->
<link href="<?php echo base_url('assets/css/memenu.css'); ?>" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo base_url('assets/js/memenu.js'); ?>"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="<?php echo base_url('assets/js/simpleCart.min.js'); ?>"> </script>
<!--initiate accordion-->
<script type="text/javascript">
$(function() {
    var menu_ul = $('.menu-drop > li > ul'),
           menu_a  = $('.menu-drop > li > a');
    menu_ul.hide();
    menu_a.click(function(e) {
        e.preventDefault();
        if(!$(this).hasClass('active')) {
            menu_a.removeClass('active');
            menu_ul.filter(':visible').slideUp('normal');
            $(this).addClass('active').next().stop(true,true).slideDown('normal');
        } else {
            $(this).removeClass('active');
            $(this).next().stop(true,true).slideUp('normal');
        }
    });

});
</script>
<!-- FlexSlider -->
<script defer src="<?php echo base_url('assets/js/jquery.flexslider.js'); ?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/css/flexslider.css'); ?>" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!---pop-up-box---->
<link href="<?php echo base_url('assets/css/popuo-box.css'); ?>" rel="stylesheet" type="text/css" media="all"/>
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.js'); ?>" type="text/javascript"></script>
<!---//pop-up-box---->
 <script>
	$(document).ready(function() {
	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: false,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});
																	
	});
</script>

<?php }//IF COND END ?>

</body>
</html>

