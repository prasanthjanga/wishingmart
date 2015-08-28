<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>404 || Page Not Found </title>


</head>
<body>

<div id="container">
    <h1>Page Not Found In WishingMart!</h1>

    <div id="body">

        <h2><a href="<?php echo site_url('rest-server'); ?>">REST Server Tests</a></h2>


    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  '; ?></p>
</div>

</body>
</html>
