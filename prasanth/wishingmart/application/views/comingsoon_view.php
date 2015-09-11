<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 ie-lt10 no-js" lang="en"><![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
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

<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" />
  <link type="text/css" href='<?php echo base_url('assets/comingsoon/css/style.css'); ?>' rel='stylesheet'>
  <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">
  <link href="<?php echo base_url('assets/font-awesome.min.css'); ?>" rel="stylesheet">
  
  <!--[if lt IE 9]>
  <script type="text/javascript" src="<?php //echo base_url('assets/comingsoon/js/ie/html5shiv.min.js'); ?>"></script>
  <![endif]-->
<!-- favico -->
<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>" type="image/x-icon">
<link rel="icon" href="<?php echo base_url('assets/images/favicon.ico'); ?>" type="image/x-icon">


<!-- Language Bar Script Start -->
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style type="text/css">
.goog-te-banner-frame.skiptranslate {display: none !important; background-color:rgba(0, 0, 0, 0.1) !important; }
body { top: 0px !important;overflow-y: auto;overflow-x: auto; }
.skiptranslate{padding-top:4px; font:normal 13px/19px 'Titillium Web';}
a.goog-te-menu-value > span{color:white;}
.goog-te-gadget-simple{border:0 solid #d5d5d5 !important; border-radius:5px;}
.goog-te-gadget-simple { padding:10px 10px 10px 0px;}
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

<body class="csoonbg">
<!-- header -->
<nav class="navbar  navbar-inverse navbar-fixed-top" role="navigation">
    <div class="clearfix">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo base_url('landing'); ?>"><img src="<?php echo base_url('assets/images/logo.png'); ?>"  alt="logo"><h1 class="hide"></h1></a>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">  
    <li class="social user user-menu">
        <a href="<?php echo base_url('wishgrant'); ?>"><i class="fa" data-toggle="tooltip" data-placement="left" data-original-title="wish">
        <img src="<?php echo base_url('assets/images/wish.png'); ?>" class="user-image" alt="Wish" /></i>
        </a>
    </li>
    </ul>
    <ul class="nav navbar-nav">        
   
        <li class="social user user-menu">
         <a href="<?php echo base_url('landing/comingsoon'); ?>" ><i class="fa" data-toggle="tooltip" data-placement="left" data-original-title="Shopping">
        <img src="<?php echo base_url('assets/images/cms.png'); ?>" class="user-image" alt="Shopping" /></i>
              </a>
      </li>

    </ul>
    
    <ul class="nav navbar-nav">   
    <li class="social user user-menu">
   <a href="<?php echo base_url('landing/comingsoon'); ?>"><i class="fa" data-toggle="tooltip" data-placement="left" data-original-title="Chat"><img src="<?php echo base_url('assets/images/chat.png'); ?>" class="user-image" alt="Chat" /></i></a>
    </li>
    </ul>
    
    <ul class="nav navbar-nav">
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="<?php echo base_url('assets/images/women.jpg'); ?>" class="user-image" alt="User Image" />
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <span class="hidden-xs">
              <img src="<?php echo base_url('assets/images/women.jpg'); ?>" class="img-circle" alt="User Image" />
            </span>
            <div style="padding:10px; text-align:center">
              <a href="<?php echo base_url('dashboard'); ?>" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div style="padding:10px; text-align:center">
              <a href="<?php echo base_url('landing'); ?>" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
    </ul> 



    <ul class="nav navbar-nav">          
      <li class="dropdown">
        <div id="google_translate_element"></div>
          <script type="text/javascript">
          function googleTranslateElementInit() {
           new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages: 'en,hi,id,fr,de,zh-CN,ja,bz,es,ru,it,tl', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
          }
          </script>
        </li>
      </ul>


    </div><!-- navbar-collapse -->
    </div><!-- container-fluid -->
</nav>
<!-- header -->

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
                <h1 class="section-title animated" 
                  data-animation="fadeInDown" 
                  data-delay="0">
                We're Coming Up with something<span> Amazing</span>
                </h1>
                <p class="animated" 
                  data-animation="fadeInUp" 
                  data-delay="100">
                  Stay updated to get more of your wishes come true!</p>
              </div>
              <!-- /section title -->
            <!-- subscribe form -->
            <div class="col-md-12">
              <form id="subscribe-form">
                <div class="form-group">
                  <div class="input-group animated" 
                    data-animation="fadeInUp" 
                    data-delay="500">
                    <input type="email" name="email" class="form-control" id="subscribe-email" placeholder="enter email address">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-subscribe">
                        <i class="fa fa-fw fa-paper-plane submit"></i>
                      </button>
                    </span>
                  </div>
                </div>
                <label class="subscribe-notice animated" for="subscribe-email" 
                data-animation="fadeInUp" 
                data-delay="600"></label>
              </form>
            </div>
            <!-- /subscribe-form -->
          </div>
        </div>
      </div>
    </div>
    <!-- /subscribe -->
             
            </div>
          </div>
       <!--home -->
  <!-- /fullpage -->
  
  
<!-- footer -->
<div class="footer navbar-fixed-bottom" role="navigation">
  <div class="pull-left">
    <div class="links">
      <a href="About.html">About Us</a>  
        <a href="SellerInfo.html">Earn with Us</a>
        <a href="BuyerInfo.html">Buyer</a>  
        <a href="Tools.html">Tools &amp; Apps</a> 
        <a href="ContactUs.html">Help &amp; Contacts</a>
        <a href="Testimonial.html">Testimonials</a> 
         <a href="Termscondition.html">Terms &amp; Conditions</a>         
    </div>
    </div>
    <div class="social pull-right">
  
      <a href="https://www.facebook.com/"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a>
      <a href="https://www.instagram.com/"><i class="fa fa-instagram"  data-toggle="tooltip" data-placement="top" data-original-title="instragram"></i></a>
      <a href="https://www.twitter.com/"><i class="fa fa-twitter-square" data-toggle="tooltip" data-placement="top" data-original-title="twitter"></i></a>
      <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-square" data-toggle="tooltip" data-placement="top" data-original-title="pinterest"></i></a>
      <a href="https://plus.google.com/"><i class="fa fa-google-plus-square" data-toggle="tooltip" data-placement="top" data-original-title="google+"></i></a>
   
    
    </div>
    
</div>

<!-- footer -->



<!-- script start -->
<script type='text/javascript' src='<?php echo base_url('assets/comingsoon/js/jquery-1.11.2.min.js'); ?>'></script>
<script type='text/javascript' src='<?php echo base_url('assets/comingsoon/js/bootstrap.min.js'); ?>'></script>
<!--[if lt IE 10]>
<script type='text/javascript' src='<?php //echo base_url('assets/comingsoon/js/ie/jquery.placeholder.js'); ?>'></script>
<script type='text/javascript' src='<?php //echo base_url('assets/comingsoon/js/ie/ie.js'); ?>'></script>
<![endif]-->
<script type='text/javascript' src='<?php echo base_url('assets/comingsoon/js/plugin.js'); ?>'></script>
<script type='text/javascript' src='<?php echo base_url('assets/comingsoon/js/variable.js'); ?>'></script>
<script type='text/javascript' src='<?php echo base_url('assets/comingsoon/js/main.js'); ?>'></script>
<!-- script end -->

</body>

</html>