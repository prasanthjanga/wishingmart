<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
 
     <div><h3 class="title">
     Orders List
    </h3></div>

  <!-- Main content -->
  <section class="content inside-page">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"></h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Wishing Id</th>
                  <th>Granter Name</th>
                  <th>Shipping Country</th>
                  <th>Wish Accepted Date</th>  
                  <th>Payment Status</th>
                  <th></th>  
               </tr>
              </thead>
              <tbody>
<?php
//print_r($orders_list);
//exit();
//echo count($wish_list);
for($i=0;$i<=(count($orders_list)-1);$i++){
  //echo $i;
  //echo $orders_list[$i]['wid'];
  //exit();
?>
  <tr>
    <td>
      <?php echo $orders_list[$i]['wid']; ?>
    </td>

    <td>
      <?php echo $orders_list[$i]['fn'] .' '. $orders_list[$i]['ln']; ?>
    </td>
    <td>
      <?php echo $orders_list[$i]['gtcountry']; ?>
    </td>
    <td>
      <?php
        //$small = substr($str_wpdec, 0, 25);
        //echo $orders_list[$i]['last_update'];
        $date_date=$orders_list[$i]['last_update'];
        $date_ymd=date('Y-M-d',strtotime($date_date));
      ?>
      <span title="<?php echo $date_date; ?>"><?php echo $date_ymd; ?></span>
    </td>
    <td>
      <?php
        if($orders_list[$i]['pay_status']=='0'){
          echo '<input type="hidden" name="wpstatus" value="nostatus">';
          echo "<span class='label label-warning'>Waiting</span>";
        }elseif($orders_list[$i]['pay_status']=='1'){
          echo '<input type="hidden" name="wpstatus" value="requested">';
          echo "<span class='label label-success'>Payed</span>";
        }else{
          echo "<span class='label label-danger'>No Status</span>";
        }
      ?>


      <?php //echo $orders_list[$i]['pay_status']; ?>
    </td>
    <td>
      <a href="<?php echo base_url('dashboard/productadd').'/'.$orders_list[$i]["aid"]; ?>" class="btn btn-danger">Payment</a>
    </td>
  </tr>
<?php
}//FOR END
?>
                
              </tbody>
              <tfoot>
                <tr>
                  <th>Wishing Id</th>
                  <th>Granter Name</th>
                  <th>Shipping Country</th>
                  <th>Wish Accepted Date</th>  
                  <th>Payment Status</th>
                  <th></th>  
               </tr>
              </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->