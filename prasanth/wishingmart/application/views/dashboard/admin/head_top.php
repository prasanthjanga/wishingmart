<body class="skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url('landing'); ?>" class="logo navbar-brand">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>W</b>M</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="logo" class="navbar-brand"></span>
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
              <a href="<?php echo base_url('landing/comingsoon'); ?>">
                <i class="fa" data-toggle="tooltip" data-placement="left" data-original-title="Shopping">
                  <img src="<?php echo base_url('assets/images/cms.png'); ?>" class="user-image" alt="Shopping" />
                </i>
              </a>
            </li>
          </ul>
          <ul class="nav navbar-nav">        
            <li class="social user user-menu dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!--<?php //echo base_url('chat'); ?>-->
                <i class="fa" data-toggle="tooltip" data-placement="left" data-original-title="Chat">
                  <img src="<?php echo base_url('assets/images/chat.png'); ?>" class="user-image" alt="Chat" />
                </i>
                <span class="label label-danger">9</span>
              </a>



                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
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
        </div>
      </nav>
    </header>