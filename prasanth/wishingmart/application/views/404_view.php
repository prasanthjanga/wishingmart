<?php
require('admin/head.php');
require('admin/head_top.php');
?>

<div class="wrap">
	<div class="content">
		<div class="logo">
			<h1><a href="#"><img src="<?php echo base_url('assets/404/images/logo.png'); ?>"/></a></h1>
			<span><img src="<?php echo base_url('assets/404/images/signal.png'); ?>"/>WhOopsie! The Page you looking for lost among the stars!</span>
		</div>
		<div class="buttom">
			<div class="seach_bar">
				<p>you can go to <span><a href="<?php echo base_url('landing'); ?>">HOME</a></span> page or search here</p>
				<div class="search_box">
				<form>
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require('admin/footer_top.php');
require('admin/footer.php');
?>