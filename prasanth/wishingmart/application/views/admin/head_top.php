<body <?php if($thispage == "1"){ ?>
 class="clouds-bg content inside inside-page"
<?php }elseif($thispage=="5" || $thispage=="6" ){ ?>
  class="star-background"
<?php }elseif($thispage=="f1" || $thispage=="f2" || $thispage=="f3" || $thispage=="f4" || $thispage=="f5" || $thispage=="f6" ){ ?>
  class="aboutbg"
<?php }elseif($thispage=="7"){?>
  class="wishbg"
<?php }else{?>
  class="bodybg"
<?php } ?>>
<?php if($thispage=="5" || $thispage=="6" ){?>
<div class="pageoverlay"></div> 
<?php } ?>

<?php if($thispage=="1"){ ?>
<!-- cloud script -->
<script id="vs" type="x-shader/x-vertex">
  varying vec2 vUv;void main(){vUv=uv;
  gl_Position=projectionMatrix*modelViewMatrix*vec4(position,1.0);}
</script>
<script id="fs" type="x-shader/x-fragment">
  uniform sampler2D map;
  uniform vec3 fogColor;
  uniform float fogNear;
  uniform float fogFar;
  varying vec2 vUv;
  void main(){float depth=gl_FragCoord.z/gl_FragCoord.w;
  float fogFactor=smoothstep(fogNear,fogFar,depth);
  gl_FragColor=texture2D(map,vUv);gl_FragColor.w*=pow(gl_FragCoord.z,20.0);
  gl_FragColor=mix(gl_FragColor,vec4(fogColor,gl_FragColor.w),fogFactor);}
</script>

<script type="text/javascript" src="<?php echo base_url('assets/landingpage/js/three.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/landingpage/js/detector.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/landingpage/js/clouds-anim.js'); ?>"></script>
<script src="<?php echo base_url('assets/landingpage/aslider.js'); ?>"></script>
<!-- cloud script -->
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
        <a href="<?php echo base_url('landing/comingsoon'); ?>">
          <i class="fa" data-toggle="tooltip" data-placement="left" data-original-title="Shopping">
            <img src="<?php echo base_url('assets/images/cms.png'); ?>" class="user-image" alt="Shopping" />
          </i>
        </a>
      </li>
    </ul>
    <ul class="nav navbar-nav">        
      <li class="social user user-menu">
        <a href="<?php echo base_url('landing/comingsoon'); ?>">
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
              <a href="<?php echo base_url('landing/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
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
    <a href="<?php echo base_url('landing/registration'); ?>">
      Sign-Up
    </a>
  </li>
</ul>
<?php }//IF END thispage=="1" ?>

<?php if($thispage=="1" || $thispage=="3" || $thispage=="8"){ ?>
<ul class="nav navbar-nav">        
  <li class="social user user-menu">
    <a href="<?php echo base_url('landing/login'); ?>">
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
</nav>
<!-- header -->


