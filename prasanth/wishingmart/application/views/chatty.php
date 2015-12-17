<?php
//session_start();
echo $_SESSION['username'] = $me; // Must be already set
//echo "111";
?>


<html>
<head>
<title>Sample Chat Application</title>
<style>
body {
	background-color: #eeeeee;
	padding:0;
	margin:0 auto;
	font-family:"Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
	font-size:11px;
}
</style>

<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url(); ?>chat/css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url(); ?>chat/css/screen.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>chat/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>chat/js/chat.js"></script>
<!--[if lte IE 7]>
<link type="text/css" rel="stylesheet" media="all" href="<?=base_url()?>chat/css/screen_ie.css" />
<![endif]-->

</head>
<body>
<div id="main_container">

<a href="javascript:void(0)" onclick="javascript:chatWith('<?php echo $you; ?>')">Chat With <?php echo $you; ?></a>

<!-- YOUR BODY HERE -->

</div>


</body>
</html>