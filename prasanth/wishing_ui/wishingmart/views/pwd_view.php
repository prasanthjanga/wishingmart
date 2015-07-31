<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reset Password Page</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url('asserts/login-css/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('asserts/login-css/font-awesome/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('asserts/login-css/css/form-elements.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('asserts/login-css/css/style.css'); ?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">

    </head>

    <body>

        <!-- Top menu -->
        <nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Wishing Mart</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="top-navbar-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <span class="li-text">
                                Put some text or
                            </span> 
                            <a href="#"><strong>Vogue Robot</strong></a> 
                            <span class="li-text">
                                here, or some icons: 
                            </span> 
                            <span class="li-social">
                                <a href="#"><i class="fa fa-facebook"></i></a> 
                                <a href="#"><i class="fa fa-twitter"></i></a> 
                                <a href="#"><i class="fa fa-envelope"></i></a> 
                                <a href="#"><i class="fa fa-skype"></i></a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text">
                            <h1>Reset Your <strong>Wishing Mart</strong> Password</h1>
                            <div class="description">
                                <p>
                                    This is a dual-purpose login script that you can adapt to either the admin section or the main application. A login form takes input from a user and then validates it by checking if the username or password matches an entry in a database. 
                                </p>
                            </div>
                            <div class="top-big-link">
                                <a class="btn btn-link-1" href="<?php echo base_url('index.php/signup/registration'); ?>">Create Account</a>
                                <a class="btn btn-link-1" href="<?php echo base_url('index.php/signin/login'); ?>">Sign In</a>
                            </div>
                        </div>
                        <div class="col-sm-5 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Reset your password</h3>
                                    <p>Enter the email address you use to buy or sell on <strong>Wishing Mart</strong></p>
                                </div>
                                <div class="form-top-right">
                                    <img src="<?php echo base_url('asserts/login-css/images/logo_small.png'); ?>">
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="" method="post" class="registration-form">
                                    
                                    <div class="form-group">
                                        <label class="sr-only" for="form-email">Email</label>
                                        <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                                    </div>
                                    
                                    <button type="submit" class="btn">Continue</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url('asserts/login-css/js/jquery-1.11.1.min.js'); ?>"></script>
        <script src="<?php echo base_url('asserts/login-css/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('asserts/login-css/js/jquery.backstretch.min.js'); ?>"></script>
        <script src="<?php echo base_url('asserts/login-css/js/retina-1.1.0.min.js'); ?>"></script>
        <script src="<?php echo base_url('asserts/login-css/js/scripts.js'); ?>"></script>
        
        <!--[if lt IE 10]>
            <script src="asserts/login-css/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>