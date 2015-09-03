
<script src="<?php echo base_url('assets/jquery.js'); ?>"></script>

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

<!-- jQuery 2.1.4 -->
<script src="<?php echo base_url('assets/Dashboard/jQuery-2.1.4.min.js'); ?>" type="text/javascript"></script>
    
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>

<!-- FastClick -->
<script src="<?php echo base_url('assets/Dashboard/fastclick.min.js'); ?>" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/Dashboard/app.min.js'); ?>" type="text/javascript"></script>

<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url('assets/Dashboard/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>

<?php if($thispage=="3" || $thispage=="4" || $thispage=="7"){ ?>
<!-- DataTables -->
<script src="<?php echo base_url('assets/Dashboard/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/Dashboard/datatables/dataTables.bootstrap.min.js'); ?>"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php } ?>
</body>
</html>