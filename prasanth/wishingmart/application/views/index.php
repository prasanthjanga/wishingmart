<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to WishingMart Landing Page</title>



</head>
<body>

<div id="container">
	<h1>Welcome to WishingMart!</h1>

	<div id="body">
		<?php echo $_SERVER['REQUEST_METHOD']; ?>
		<?= phpinfo(16); ?>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>