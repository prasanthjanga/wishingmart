<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title></title>
<!-- Title Scroling Start-->
<script type='text/javascript'> 
//script by mistonline.in, please donot delete this.Thanks.
msg = " || ";
msg = ' <?php echo $title; ?>' + msg;position = 0;
function scrolltitle() {
document.title = msg.substring(position, msg.length) + msg.substring(0, position); position++;
if (position > msg.length) position = 0
window.setTimeout("scrolltitle()",170);
}
scrolltitle();
</script>
<!-- Title Scroling end-->

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT:400,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>

<!-- bootstrap -->
<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" />
<!-- favico -->
<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>" type="image/x-icon">
<link rel="icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>" type="image/x-icon">

<!-- font awesome -->
<link href="<?php echo base_url('assets/font-awesome.min.css'); ?>" rel="stylesheet">

 <!-- // WISHING PAGE CSS AND SCRIPT -->
<?php if($thispage=="5" || $thispage=="6"){ ?>
<script type="text/javascript" src="<?php echo base_url('assets/wishing/js/modernizr.js'); ?>"></script>
<!-- CSS Global Compulsory -->
<link rel="stylesheet" href="<?php echo base_url('assets/wishing/css/style.css'); ?>" >
<link rel="stylesheet" href="<?php echo base_url('assets/wishing/css/style-responsive.css'); ?>" >
<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="<?php echo base_url('assets/wishing/css/animate.min.css'); ?>">       
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->
<?php }else{ ?>
<!-- uniform -->
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/uniform/css/uniform.default.min.css'); ?>" />
<!-- animate.css -->
<link rel="stylesheet" href="<?php echo base_url('assets/wow/animate.css'); ?>" />

<link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/datepicker.css'); ?>">

<?php } // ELSE END?>


<!-- Language Bar Script Start -->
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style type="text/css">
.goog-te-banner-frame.skiptranslate {display: none !important; background-color:rgba(0, 0, 0, 0.1) !important; }
body { top: 0px !important;overflow-y: auto;overflow-x: auto; }
.skiptranslate{padding-top:4px; font:normal 13px/19px 'Titillium Web';}
a.goog-te-menu-value > span{color:white;}
.goog-te-gadget-simple{border:0 solid #d5d5d5 !important; border-radius:5px;}
.goog-te-gadget-simple { padding:10px;}
.goog-te-gadget-simple > img{background-image: none !important; }
.goog-te-gadget-simple{background-color:rgba(0, 0, 0, 0.0) !important;}
a.goog-te-menu2-item>span.text{color:red;}
.goog-te-menu-frame{background-color:rgba(0, 0, 0, 0.1) !important;}
.goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, 
.goog-te-menu2-item:active div{background-color:black !important;}
.goog-te-menu2{background-color:rgba(0, 0, 0, 0.1) !important;}
a.goog-te-menu2-item-selected div {color:black !important;}
.text{color:red !important;}

</style>
<!-- Language Bar Script End -->


</head>