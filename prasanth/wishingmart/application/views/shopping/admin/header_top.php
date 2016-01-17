<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">

		<div class="col-sm-4 logo">
			<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/shopping/images/logo.png'); ?>" alt=""></a>				
		</div>
		
		<div class="col-sm-4 world">

		</div>
		
		<div class="col-sm-4 header-left">		

			<div class="cart box_1">
				<a href="<?php echo base_url('checkout'); ?>">
				<h3>
				<div class="total">
					<span class="simpleCart_total"></span>
				</div>
					<img src="<?php echo base_url('assets/shopping/images/cart.png'); ?>" alt=""/>
				</h3>
				</a>
				<p>
					<a href="javascript:;" class="simpleCart_empty">Empty Cart</a>
				</p>

			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="col-sm-2 number">
					<span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
				</div>

<?php require("header_menu.php"); ?>


				<div class="col-sm-2 search">		
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
		</div>
		<div class="clearfix"> </div>
			<!---pop-up-box---->
			<script type="text/javascript" src="<?php echo base_url('assets/shopping/js/modernizr.custom.min.js'); ?>"></script>    
			<link href="<?php echo base_url('assets/shopping/css/popuo-box.css'); ?>" rel="stylesheet" type="text/css" media="all"/>
			<script src="<?php echo base_url('assets/shopping/js/jquery.magnific-popup.js'); ?>" type="text/javascript"></script>
			<!---//pop-up-box---->
			<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
					<div class="login">
						<input type="submit" value="">
						<input type="text" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
					</div>
					<p>	Shopping</p>
				</div>				
			</div>
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
	<!---->		
		</div>
	</div>
</div>