<body <?php //if($thispage=="6" ){ class="star-background" ?>
<?php //}else
if($thispage=="f1" || $thispage=="f2" || $thispage=="f3" || $thispage=="f4" || $thispage=="f5" || $thispage=="f6" ){ ?>
  class="aboutbg"
<?php }elseif($thispage=="5" || $thispage=="7"){ //echo 'class="wishbg"'; ?>
  class="wishgrant-bg"
<?php }else{ ?>
  class="bodybg"
<?php } ?>>
<?php //if($thispage=="6"){?>
<!--<div class="pageoverlay"></div> -->
<?php //} ?>



<!-- header -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="clearfix">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
      <a class="navbar-brand" href="<?php echo base_url('landing'); ?>"><img src="<?php echo base_url('assets/images/logo.png'); ?>"  alt="logo"><h1 class="hide"></h1></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
<?php if($this->session->userdata('logged_in') == '1'){ ?>

    <ul class="nav navbar-nav">        
      <li class="social user user-menu">
        <a href="<?php echo base_url('wishgrant'); ?>">
          <i class="fa" data-toggle="tooltip" data-placement="left" data-original-title="Wish">
            <img src="<?php echo base_url('assets/images/wish.png'); ?>" class="user-image" alt="Wish" />
          </i>
        </a>
      </li>
    </ul>
    <ul class="nav navbar-nav">        
      <li class="social user user-menu">
        <a href="<?php echo base_url('shopping'); ?>">
          <i class="fa" data-toggle="tooltip" data-placement="left" data-original-title="Shopping">
            <img src="<?php echo base_url('assets/images/cms.png'); ?>" class="user-image" alt="Shopping" />
          </i>
        </a>
      </li>
    </ul>
    <ul class="nav navbar-nav">        
      <li class="social user user-menu dropdown tasks-menu">
        <a href="<?php echo base_url('chat/index'); ?>" class="dropdown-toggle">
          <i class="fa" data-toggle="tooltip" data-placement="left" data-original-title="Chat">
            <img src="<?php echo base_url('assets/images/chat.png'); ?>" class="user-image" alt="Chat" />
          </i>
        </a>
      </li>
    </ul>

    
    <ul class="nav navbar-nav">
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <?php echo $this->session->userdata('email'); ?>
          <img src="<?php 
            if($this->session->userdata('prof_img')!=''){
                echo base_url().'images/profile/'.$this->session->userdata('prof_img');
            }else{
                echo base_url().'assets/images/profile-null.png';
            }
            ?>"  class="user-image" alt="User Image"/>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <span class="hidden-xs">
              <img src="<?php 
                if($this->session->userdata('prof_img')!=''){
                    echo base_url().'images/profile/'.$this->session->userdata('prof_img');
                }else{
                    echo base_url().'assets/images/profile-null.png';
                }
                ?>"  class="img-circle" alt="User Image"/>
            </span>
            <div style="padding:10px; text-align:center">
              <a href="<?php echo base_url('dashboard'); ?>" class="btn">Profile</a>
            </div>
            <div style="padding:10px; text-align:center">
              <a href="<?php echo base_url('landing/logout'); ?>" class="btn">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>      
<?php }//IF END logged_in =="1" ?>

<?php if($this->session->userdata('logged_in') != '1'){  ?>
<?php if($thispage=="1" || $thispage=="2" || $thispage=="8"){ ?>
<ul class="nav navbar-nav">        
  <li class="social user user-menu">
    <a href="<?php echo base_url('landing/registration'); ?>" style="padding-top:15px">
      Sign-Up <?php if($thispage=="1" || $thispage=="8"){ ?> &nbsp;/ <?php } ?>
    </a>
  </li>
</ul>
<?php }//IF END thispage=="1" ?>

<?php if($thispage=="1" || $thispage=="3" || $thispage=="8"){ ?>
<ul class="nav navbar-nav">        
  <li class="social user user-menu">
    <a href="<?php echo base_url('landing/login'); ?>" style="padding-top:15px">
      Sign-In
    </a>
  </li>
</ul>
<?php }//IF END thispage=="1" & "3"?>
<?php }//IF END logged_in =="0" ?>

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
<div class="colorbox rainbow"></div>
</nav>
<!-- header -->


