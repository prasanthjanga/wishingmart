<body class="skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url('landing'); ?>" class="logo navbar-brand">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>W</b>M</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
          <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="logo" class="navbar-brand">
        </span>
      </a>

      <!-- Header Navbar-->
      <nav class="navbar navbar-static-top" role="navigation">
      
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
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
                <!--<span class="label label-danger">19</span>-->
              </a>
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
        </div>
      </nav>
    </header>