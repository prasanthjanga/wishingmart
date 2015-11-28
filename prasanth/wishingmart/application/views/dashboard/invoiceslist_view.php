<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->

   <div><h3 class="title">
   My Invoice List
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
                <th>Invoice ID</th>
                <th>Product</th>
                <th>Invoce Date</th>
                <th>Ship Company</th>
                <th>Tracking ID</th>
                <th>ship Status</th>
                <th></th>       
             </tr>
            </thead>
            <tbody>
               <tr>
<?php
for($i=0;$i<=(count($invoice_list)-1);$i++){
  //echo $mygrant_list[$i]['gtuid'];
?>

  <td><?php echo $invoice_list[$i]['iid']; ?></td>
  <td><?php echo $invoice_list[$i]['wpn']; ?></td>
<?php
  $date_date=$invoice_list[$i]['inv_date'];
  $date_inv=date('Y-M-d',strtotime($date_date));
?>
  <td><span title="<?php echo $date_date; ?>"><?php echo $date_inv; ?></spam></td>
  <td><?php echo $invoice_list[$i]['escompany']; ?></td>
  <td>
    <?php if(isset($invoice_list[$i]['stid'])){ echo $invoice_list[$i]['stid']; } ?>
  </td>
<td>
<?php
  if($invoice_list[$i]['d_status']=='0'){
    echo "<span class='label label-info'>Not Shipped</span>";
  }elseif($invoice_list[$i]['d_status']=='1'){
    echo "<span class='label label-warning'>Processing</span>";
  }elseif($invoice_list[$i]['d_status']=='2'){
    echo "<span class='label label-success'>Shipped</span>";
  }elseif($invoice_list[$i]['d_status']=='2'){
    echo "<span class='label label-success'>Delevired</span>";
  }else{
    echo "<span class='label label-danger'></span>";
  }
  //echo $wish_list[$i]['status']; 
?>
</td>

                  <td><a href="<?php echo base_url('dashboard/invoiceview').'/'.$invoice_list[$i]["iid"]; ?>" class="btn btn-danger">View Invoice</a></td>
<?php }//FOR END ?>
                </tr>
                
            </tbody>
            <tfoot>
             <tr>
                <th>Invoice ID</th>
                <th>Product</th>
                <th>Invoce Date</th>
                <th>Shipping Company</th>
                <th>Tracking Id</th>
                <th>Ship Status</th>
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
