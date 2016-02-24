<?php
$head = "admin/head.php"; 
include_once($head); 
$head_top = "admin/head_top.php"; 
include_once($head_top); 
?>


<!-- search-scripts -->
<script src="<?php echo base_url('assets/landingpage/js/modernizr.custom.js'); ?>"></script>
<script src="<?php echo base_url('assets/landingpage/js/classie.js'); ?>"></script>
<!-- start-slider-->
<div id="move-top"></div>
<div class="slider">
    <!--End-top-nav-->
    <!---start-da-slider-->
    <div id="da-slider" class="da-slider">
    <div class="da-slide">
        <label><span><img src="<?php echo base_url('assets/landingpage/images/wish.png'); ?>"></span></label>
        <h2>WISHING</h2>
        <p>FOR OUR CLIENTS WITH LOVE</p>
        <i><a href="#"> </a></i>
        <small><a href="#about">scroll to see the entire site</a></small>
    </div>
    <div class="da-slide">
        <label><span><img src="<?php echo base_url('assets/landingpage/images/cms.png'); ?>"></span></label>
        <h2>CMS</h2>
        <p>FOR OUR CLIENTS WITH LOVE</p>
        <i><a href="#"> </a></i>
        <small><a href="#about">scroll to see the entire site</a></small>
    </div>
    <div class="da-slide">
        <label><span><img src="<?php echo base_url('assets/landingpage/images/chat.png'); ?>"></span></label>
        <h2>CHAT APP</h2>
        <p>FOR OUR CLIENTS WITH LOVE</p>
        <i><a href="#"> </a></i>
        <small><a href="#about">scroll to see the entire site</a></small>
    </div>
    <nav class="da-arrows">
        <span class="da-arrows-prev"></span>
        <span class="da-arrows-next"></span>
    </nav>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/landingpage/js/jquery.cslider.js'); ?>"></script>
<script type="text/javascript">
    $(function() {
    
        $('#da-slider').cslider({
            autoplay    : true,
            bgincrement : 450
        });
    
    });
</script>
    <!---//End-da-slider-->
</div>
<!-- //End-slider-->
<!---start-works-->
<!---image-hover-effects-->
<script src="<?php echo base_url('assets/landingpage/js/hover.zoom.js'); ?>"></script>
<script>
$(function() {
    $('.pink').hoverZoom({
        overlay: true, // false to turn off (default true)
        overlayColor: '#51A3C8', // overlay background color
        overlayOpacity: 0.7, // overlay opacity
        zoom: 0, // amount to zoom (px)
        speed: 300 // speed of the hover
    });
    
    
}); 
</script>

<!--start-about-->
<div class="about" id="about">
    <div class="wrap">
        <div class="head">
            <span> </span>
            <h3>WishingMart Services</h3>
        </div>
        <div class="about-grids">
            <div class="about-grid">
                <img src="<?php echo base_url('assets/landingpage/images/wish.png'); ?>">
                <h3>Wishing</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet scelerisque orci. Donec molestie magna tincidunt lectus ornare, gravida molestie.</p>
            </div>
            <div class="about-grid">
                <img src="<?php echo base_url('assets/landingpage/images/cms.png'); ?>">
                <h3>CMS</h3>
                <p>Vivamus iaculis urna id dictum tempor. Praesent gravida ante nec imperdiet dignissim. Donec lacinia eget mi eu convallis. lacinia laoreet nulla.</p>
            </div>
            <div class="about-grid">
                <img src="<?php echo base_url('assets/landingpage/images/chat.png'); ?>">
                <h3>Chating</h3>
                <p>Donec suscipit dolor lectus, in eleifend nunc blandit et. Mauris quis lacus eu est fringilla condimentum vitae vel purus. Nunc cursus nisi nec adipiscing ornare. </p>
            </div>
            <div class="clear"> </div>
        </div>
        <div class="clear"> </div>
    </div>
</div>
<!--//End-about-->

<!---//Start-works-->
<div class="works" id="work">
    <div class="wrap">
        <div class="head">
            <span> </span>
            <h3>WISH & GRANT LIST</h3>
        </div>
        <!---start-mfp -->  
        <div id="small-dialog1" class="mfp-hide">
            <div class="pop_up">
                <p class="para">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
            </div>
        </div>
        <!---end-mfp -->


        <script type="text/javascript">
        $(window).load(function() {
            $("#flexiselDemo2").flexisel({
                visibleItems: 5,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });
        });
        </script>
        <ul id="flexiselDemo2">
            <li>
                <div class="latest-news-grid">
                    <h3>WISH </h3>
                    <img src="<?php echo base_url('assets/landingpage/images/p1.jpg'); ?>">
                    <p>Country Name</p>
                </div>
            </li>
            <li>
                <div class="latest-news-grid">
                    <h3>WISH </h3>
                    <img src="<?php echo base_url('assets/landingpage/images/p2.jpg'); ?>">
                    <p>Country Name</p>
                </div>
            </li>
            <li>
                <div class="latest-news-grid">
                    <h3>WISH </h3>
                    <img src="<?php echo base_url('assets/landingpage/images/p3.jpg'); ?>">
                    <p>Country Name</p>
                </div>
            </li>
            <li>
                <div class="latest-news-grid">
                    <h3>WISH </h3>
                    <img src="<?php echo base_url('assets/landingpage/images/p4.jpg'); ?>">
                    <p>Country Name</p>
                </div>
            </li>
        </ul>  
        <div class="clear"> </div>
        <!--//news-grid-scroller-->
</div>
<div class="works-bg">
    
</div>
</div>
</div>
    </div>
</div>
<!---//End-works-->

<!--start-services-->
<div class="services" id="services">
    <div class="wrap">
        <div class="head">
            <span> </span>
            <h3>Wishing Services</h3>
        </div>
        <div class="services-grids">
            <div class="services-grid">
                <div class="services-grid-left">
                    <span class="s-icon1"> </span>
                </div>
                <div class="services-grid-right">
                    <h4>Secure</h4>
                    <p>Bacon ipsum dolor sit amet shank tri-tip pig, short loin pork belly boudin ground round flank sirloin bresaola filet mignon sausage beef ribs kielbasa. flow freely, we've created a studio where we can not only work but also have fun and learn.</p>
                </div>
            </div>
            <div class="services-grid">
                <div class="services-grid-left">
                    <span class="s-icon2"> </span>
                </div>
                <div class="services-grid-right">
                    <h4>Trusted</h4>
                    <p>Bacon ipsum dolor sit amet shank tri-tip pig, short loin pork belly boudin ground round flank sirloin bresaola filet mignon sausage beef ribs kielbasa. flow freely, we've created a studio where we can not only work but also have fun and learn.</p>
                </div>
            </div>
            <div class="services-grid">
                <div class="services-grid-left">
                    <span class="s-icon3"> </span>
                </div>
                <div class="services-grid-right">
                    <h4>T & S</h4>
                    <p>Bacon ipsum dolor sit amet shank tri-tip pig, short loin pork belly boudin ground round flank sirloin bresaola filet mignon sausage beef ribs kielbasa. flow freely, we've created a studio where we can not only work but also have fun and learn.</p>
                </div>
            </div>
            <div class="services-grid">
                <div class="services-grid-left">
                    <span class="s-icon4"> </span>
                </div>
                <div class="services-grid-right">
                    <h4>Mobile App</h4>
                    <p>Bacon ipsum dolor sit amet shank tri-tip pig, short loin pork belly boudin ground round flank sirloin bresaola filet mignon sausage beef ribs kielbasa. flow freely, we've created a studio where we can not only work but also have fun and learn.</p>
                </div>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
    <div class="services-bg">
    
    </div>
</div>
<!--//End-services-->


<!---start-purches-it-->
<div class="purches-it">
    <h5>Like?</h5>
    <a href="#">PURCHAISE IT NOW</a>
</div>
<!---//End-purches-it-->
<!--- start-latest-news-->
<div class="latest-news" id="news">
    <div class="wrap">
        <div class="head">
            <span> </span>
            <h3>LAtest Posts</h3>
        </div>
        <!--news-grid-scroller-->
        <script type="text/javascript" src="<?php echo base_url('assets/landingpage/js/jquery.flexisel.js'); ?>"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $("#flexiselDemo3").flexisel({
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });
        });
        </script>
        <ul id="flexiselDemo3">
            <li>
                <div class="latest-news-grid">
                    <h3>Post - 1</h3>
                    <p>Bacon ipsum dolor sit amet shank tri-tip pig, short loin pork belly boudin ground round flank sirloin bresaola filet mignon sausage beef ribs kielbasa.</p>
                </div>
            </li>
            <li>
                <div class="latest-news-grid">
                    <h3>Post - 2</h3>
                    <p>Bacon ipsum dolor sit amet shank tri-tip pig, short loin pork belly boudin ground round flank sirloin bresaola filet mignon sausage beef ribs kielbasa.</p>
                </div>
            </li>
            <li>
                <div class="latest-news-grid">
                    <h3>Post - 3</h3>
                    <p>Bacon ipsum dolor sit amet shank tri-tip pig, short loin pork belly boudin ground round flank sirloin bresaola filet mignon sausage beef ribs kielbasa.</p>
                </div>
            </li>
            <li>
                <div class="latest-news-grid">
                    <h3>Post - 4</h3>
                    <p>Bacon ipsum dolor sit amet shank tri-tip pig, short loin pork belly boudin ground round flank sirloin bresaola filet mignon sausage beef ribs kielbasa.</p>
                </div>
            </li>
        </ul>  
        <div class="clear"> </div>
        <!--//news-grid-scroller-->
        <!--latest-news-bottom-border-->
        <div class="bottom-border">
            <span> </span>
        </div>
        <!--//latest-news-bottom-border-->
    </div>
</div>
<!--- //End-latest-news-->


<?php
$footer_top = "admin/footer_top.php"; 
include_once($footer_top); 
$footer = "admin/footer.php"; 
include_once($footer); 
?>
