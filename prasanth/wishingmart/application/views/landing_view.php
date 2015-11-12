<?php
$head = "admin/head.php"; 
include_once($head); 
$head_top = "admin/head_top.php"; 
include_once($head_top); 
	//require('admin/head.php');
	//require('admin/head_top.php');
?>




<div id="fullpage">
    <div class="section " id="section0">
        <div class="intro">
            <header id="site-header">
                <h1 id="site-logo"><img src="<?php echo base_url('assets/landingpage/img/Wish.png'); ?>" alt="" height="180px" width="150px"></h1>
                <div></div>
                <h3 class="title">
                    Wishingmart
                </h3>

                <h3 id="site-subtitle"><strong>Wishes Do Come True</strong></h3>
               <a href=""><i class="fa fa-angle-double-down center"></i></a>
            </header>
        </div>
    </div>
    <div class="section" id="section1">
        <div class="slide" style=" background-image: url('<?php echo base_url('assets/landingpage/img/slide1a.png'); ?>'); background-size:100% 100%; ">

            <a href="<?php echo base_url('wishgrant'); ?>"> <div id="overlay" ></div></a>

        </div>
        <div class="slide" style="background-image: url('<?php echo base_url('assets/landingpage/img/slide1b.png'); ?>'); background-size:100% 100%;">

            <a href="<?php echo base_url('wishgrant'); ?>"> <div id="overlay" ></div></a>

        </div>
        <div class="slide" style="background-image: url('<?php echo base_url('assets/landingpage/img/slide1c.png'); ?>');background-size:100% 100%;">

            <a href="<?php echo base_url('wishgrant'); ?>"> <div id="overlay" ></div></a>

        </div>

    </div>
    <div class="section" id="section2">
        <div id="ps-container" class="ps-container">

            <div class="ps-contentwrapper ">
<?php
//print_r($product_list);
$count=(count($product_list)-1);
for($i=0;$i<=$count;$i++){
?>
<div class="ps-content">
    <h2><?php echo $product_list[$i]['wpn']; ?></h2>
    <span class="ps-price">£100</span>
    <p><?php echo $product_list[$i]['wpdec']; ?></p>
    <a href="">Buy this item</a>
</div>


<?php } ?>


            </div>
            <!-- /ps-contentwrapper -->
            <div class="ps-slidewrapper">

                <div class="ps-slides">

<?php
//print_r($product_list);
$count=(count($product_list)-1);
for($i=0;$i<=$count;$i++){
?>

<div style="background-image:url(<?php echo 'images/thumbs/'.$product_list[$i]["wpimg"]; ?>);"></div>


<?php } ?>


                </div>

                <nav>
                    <a href="#" class="ps-prev"></a>
                    <a href="#" class="ps-next"></a>
                </nav>

            </div>
            <!-- /ps-slidewrapper -->
        </div>
    </div>
    <div class="section" id="section3">
        <a href="index.html"> <div id="overlay" ></div></a>
    </div>
    <div class="section" id="section4">

        <div class="slide" style=" background-image: url('<?php echo base_url('assets/landingpage/img/slide2a.png'); ?>'); background-size:100% 100%; ">

            <a href="index.html"> <div id="overlay" ></div></a>

           </div>
            <div class="slide" style="background-image: url('<?php echo base_url('assets/landingpage/img/slide2b.png'); ?>'); background-size:100% 100%; " >

               <a href="index.html"> <div id="overlay" ></div></a>


            </div>
    </div>

</div>








<?php
$footer_top = "admin/footer_top.php"; 
include_once($footer_top); 
$footer = "admin/footer.php"; 
include_once($footer); 
//require('admin/footer_top.php');
//require('admin/footer.php');
?>
