
<?php require('footer_top.php'); ?>




    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('asserts/plugins/jQuery/jQuery-2.1.4.min.js'); ?>"></script>
<?php if($title !="Products" || $title != "Orders"){ ?>
  
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo base_url('asserts/plugins/morris/morris.min.js'); ?>" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url('asserts/plugins/sparkline/jquery.sparkline.min.js'); ?>" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url('asserts/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('asserts/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url('asserts/plugins/knob/jquery.knob.js'); ?>" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('asserts/plugins/daterangepicker/daterangepicker.js'); ?>" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url('asserts/plugins/datepicker/bootstrap-datepicker.js'); ?>" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url('asserts/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>" type="text/javascript"></script>

<?php  }// if end  ?>  
<?php if($title =="Products" || $title != "Orders"){ ?>
    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url('asserts/plugins/datatables/jquery.dataTables.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('asserts/plugins/datatables/dataTables.bootstrap.min.js'); ?>" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": true,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
<?php  }// if end  ?>  
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url('asserts/bootstrap/js/bootstrap.min.js" type="text/javascript'); ?>"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url('asserts/plugins/slimScroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url('asserts/plugins/fastclick/fastclick.min.js'); ?>'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('asserts/dist/js/app.min.js'); ?>" type="text/javascript"></script>        
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('asserts/dist/js/demo.js'); ?>" type="text/javascript"></script>

<?php if($title =="Add Products"){ ?>
    <!-- InputMask -->
    <script src="<?php echo base_url('asserts/plugins/input-mask/jquery.inputmask.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('asserts/plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('asserts/plugins/input-mask/jquery.inputmask.extensions.js'); ?>" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        $("[data-mask]").inputmask();

    });
    </script>
<?php  }// if end  ?>  

<?php if($title =="Orders"){ ?>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- Page Script -->
    <script>
      $(function () {
        //Add text editor
        $("#compose-textarea").wysihtml5();
      });
    </script>
<?php  }// if end  ?>  


  </body>
</html>