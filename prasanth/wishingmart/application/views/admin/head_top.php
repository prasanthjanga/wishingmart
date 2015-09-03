<body <?php if($thispage=="5" || $thispage=="6" ){ ?>class="star-background"<?php }else{ ?>class="bodybg"<?php } ?>>
    <?php if($thispage=="5" || $thispage=="6" ){?>
    <div class="pageoverlay"></div> 
    <?php } ?>

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
      <a class="navbar-brand" href="<?php echo base_url('landing/login'); ?>"><img src="<?php echo base_url('assets/images/logo.png'); ?>"  alt="logo"><h1 class="hide"></h1></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav">        
        <li><a href="ComingSoon.html"><span class="fa fa-shopping-cart"> Shopping</span></a></li>
        <li><a href="WishGrant.html"><span class="fa fa-star"> Wish/Grant </span></a></li>
        
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


