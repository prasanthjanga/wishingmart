

<?php if($thispage=="1"){ ?>
<!---scrolling-->
<script type="text/javascript" src="<?php echo base_url('assets/landingpage/js/move-top.js'); ?>"></script>
<script type="text/javascript">
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
<!---//scrolling-->
<script type="text/javascript">
$(document).ready(function() {
    /*
    var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
    };
    */
    
    $().UItoTop({ easingType: 'easeOutQuart' });
        
});
</script>
<a href="#move-top" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span></a>

<!--//End-copy-right-->
<?php } //IF thispage == 1 END ?>

<!-- // WISHING PAGE CSS AND SCRIPT -->
<?php if($thispage==" "){ ?>
<!-- JS -->
<script type="text/javascript" src="<?php echo base_url('assets/wishing/js/jquery-1.11.0.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/wishing/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/wishing/js/jquery.fitvids.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/wishing/js/jquery.fittext.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/wishing/js/retina-1.1.0.min.js'); ?>"></script>        
<script type="text/javascript" src="<?php echo base_url('assets/wishing/js/jquery.parallaxify.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/wishing/js/jquery.particleground.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/wishing/js/owl.carousel.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/wishing/js/jquery.downCount.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/wishing/js/jquery.easing.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/wishing/js/jquery.backstretch.min.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/wishing/js/jquery.mb.YTPlayer.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/wishing/js/scripts-custom.js'); ?>"></script> 


<?php }else{ if($thispage!="1"){ ?>

<script src="<?php echo base_url('assets/jquery.js'); ?>"></script>
<!-- wow script -->
<script src="<?php echo base_url('assets/wow/wow.min.js'); ?>"></script>
<!-- uniform -->
<script src="<?php echo base_url('assets/uniform/js/jquery.uniform.js'); ?>"></script>
<!-- boostrap -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js'); ?>" type="text/javascript" ></script>
<!-- jquery mobile -->
<script src="<?php echo base_url('assets/mobile/touchSwipe.min.js'); ?>"></script>
<!-- jquery mobile -->
<script src="<?php echo base_url('assets/respond/respond.js'); ?>"></script>
<!-- jQuery easing plugin --> 
<script src="<?php echo base_url('assets/form/jquery.easing.min.js'); ?>" type="text/javascript"></script>
<!-- custom script -->
<script src="<?php echo base_url('assets/script.js'); ?>"></script>

<script src="<?php echo base_url('assets/bootstrap-datepicker.js'); ?>"></script>


<script>
$(document).ready(function() {
    $('#datePicker')
        .datepicker({
            format: 'yyyy/mm/dd',
            startDate: '1950/01/01',
            //endDate: '2007/12/31'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#dateForm').formValidation('revalidateField', 'dob');
        });
		
});
</script>

<?php } // IF thispage!=1 COND END 
 } // ELSE END ?>
<?php if($thispage == "2" || $thispage == "3" || $thispage == "8"){ ?>
<script src="<?php echo base_url('assets/wishgrant/js/classie.js'); ?>"></script>
<script src="<?php echo base_url('assets/wishgrant/js/cbpViewModeSwitch.js'); ?>"></script>
<?php } // ELSE END?>

<?php if($thispage == "7"){ ?>
<!-- script start -->
<script type='text/javascript' src='<?php echo base_url('assets/wishgrant/js/jquery-1.11.2.min.js'); ?>'></script>
<!--[if lt IE 10]>
<script type='text/javascript' src='<?php //echo base_url('assets/wishgrant/js/ie/jquery.placeholder.js'); ?>'></script>
<script type='text/javascript' src='<?php //echo base_url('assets/wishgrant/js/ie/ie.js'); ?>'></script>
<![endif]-->
<script type='text/javascript' src='<?php echo base_url('assets/wishgrant/js/plugin.js'); ?>'></script>
<script type='text/javascript' src='<?php echo base_url('assets/wishgrant/js/variable.js'); ?>'></script>
<script type='text/javascript' src='<?php echo base_url('assets/wishgrant/js/main.js'); ?>'></script>
<!-- script end -->
<?php } ?>

<script type="text/javascript" src="<?php echo base_url('assets/wishing/js/jquery.nicescroll.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/form/validator.js'); ?>"></script>

<!-- jQuery 2.1.4 -->
<!--<script src="<?php //echo base_url('assets/Dashboard/jQuery-2.1.4.min.js'); ?>" type="text/javascript"></script>
-->
<script type="text/javascript">
$(document).ready(function() {
    $('#ProductCategory').change(function() {
        if ( $("#ProductCategory").val ()  == "1") 
        {                              
            $("#Category").show();
            $("#ProductCategory1").prop("required","true");
            
             $("#SubCategory").hide();
            $("#ProductSubCategory").prop("required","false");
        }
        else
            $("#Category").hide();
            $("#ProductCategory1").prop("required","false");
            
            $("#SubCategory").show();
            $("#ProductSubCategory").prop("required","true");
    }); 
});

$(document).ready(function() {
    $('#ProductSubCategory').change(function() {
        if ( $("#ProductSubCategory").val ()  == "1") 
        {                              
            $("#SubCategory1").show();
            $("#ProductSubCategory1").prop("required","true");
        }
        else
            $("#SubCategory1").hide();
            $("#ProductSubCategory1").prop("required","false");
    }); 
});
</script>


</body>
</html>