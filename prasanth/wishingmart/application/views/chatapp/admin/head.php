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
<!-- font awesome -->
<link href="<?php echo base_url('assets/font-awesome.min.css'); ?>" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" />

<!-- uniform -->
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/uniform/css/uniform.default.min.css'); ?>" />

<!-- animate.css -->
<link rel="stylesheet" href="<?php echo base_url('assets/wow/animate.css'); ?>" />

<!-- Ionicons -->
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

<!-- favico -->
<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>" type="image/x-icon">
<link rel="icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>" type="image/x-icon">

<?php if($thispage=="c1" || $thispage=="c2" || $thispage=="c3" || $thispage=="10"){ ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url('assets/Dashboard/datatables/dataTables.bootstrap.css'); ?>">

<?php }//IF END ?>

<?php if($thispage=="5"){ ?>
<link rel="stylesheet" href="<?php echo base_url('assets/wow/animate.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/datepicker.css'); ?>">
<?php }//IF END ?>


<link href="<?php echo base_url('assets/Dashboard/AdminLTE.min.css'); ?>" rel="stylesheet" type="text/css" />
<!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
<!--
<link href="<?php //echo base_url('assets/Dashboard/_all-skins.min.css'); ?>" rel="stylesheet" type="text/css" />
-->
<link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<?php if($thispage == "c1" || $thispage == "c2" || $thispage == "c3"){ ?>
    <script src="//code.jquery.com/jquery-1.3.1.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/chat/chat.css'); ?>">
<script type="text/javascript">
    setInterval('funread()',1000)
    function funread(){
        $.post("<?php echo base_url('chat/read'); ?>",{},function(data){
            document.getElementById('divcontent').innerHTML=data
            //$("#divcontent").scrollTop($("#divcontent")[0].scrollHeight);// to scroll down
        })
    }
    function funsend(e){
        if(e.keyCode === 13){
            msg = document.getElementById('txtmsg').value;
            mssg = msg.replace(/^\s+|\s+$/g,"");
            jQuery("#divcontent").load("<?php echo base_url('chat/insert').'/'; ?>" + encodeURIComponent(mssg));
            document.getElementById('txtmsg').value='';
        }
    $("#divcontent").scrollTop($("#divcontent")[0].scrollHeight);
    }
    function funenter(){
        //uname=document.getElementById('txtuname').value;
        uname="<?php echo $this->session->userdata('uid'); ?>";
        //document.getElementById('div1').style.display="none"
        document.getElementById('tab1').style.display="block"
    }
    function funclose(){
        document.getElementById('tab1').style.display="none"
        document.getElementById('div1').style.display="block"
    }


</script>
<script type="text/javascript">
    function toggler(divId) {
        $("#" + divId).toggle();
    }
</script>
<?php }//if end C1 ?>


<!-- Language Bar Script Start -->
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style type="text/css">
.goog-te-banner-frame.skiptranslate {display: none !important; background-color:rgba(0, 0, 0, 0.1) !important; }
body { top: 0px !important;overflow-y: auto;overflow-x: auto; }
.skiptranslate{padding-top:0px; font:normal 13px/19px 'Titillium Web';}
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