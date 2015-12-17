      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
        <section class="content-header">
<div><h3 class="title">Order View</h3></div>
        
        </section>

<!-- Main content -->
<section class="invoice inside-page">
  <!-- title row -->
  <div class="row">
    <div class="col-xs-12">
      <h2 class="page-header">
        <i class="fa fa-globe"></i>WishingMart
        <small class="pull-right label label-success">Date: <?php echo date("d/M/Y",time()); ?></small>
      </h2>
    </div><!-- /.col -->
  </div>
  <!-- info row -->
  <div class="row invoice-info">
    <div class="col-sm-4 invoice-col">
      <u>From Address</u> :
      <address>
        <strong><?php echo $order_view[0]['grantfn'].' '.$order_view[0]['grantln']; ?></strong><br>
        <?php echo substr($order_view[0]['a_add1'],0,28); ?>,<br>
        <?php echo $order_view[0]['a_add2']; ?>,<br>
        <?php echo $order_view[0]['a_country']; ?>,<br>
        <?php echo $order_view[0]['a_pincode']; ?>.<br>
<!--
        San Francisco, CA 94107<br>
        Phone: (804) 123-5432<br>
        Email: user@gmail.com
-->
      </address>
    </div><!-- /.col -->
    
    <div class="col-sm-4 invoice-col">
      <u>To Address</u> :
      <address>
        <strong><?php echo $order_view[0]['wishfn'].' '.$order_view[0]['wishln']; ?></strong><br>
        <?php echo substr($order_view[0]['s_add1'],0,28); ?>,<br>
        <?php echo $order_view[0]['s_add2']; ?>,<br>
        <?php echo $order_view[0]['s_country']; ?>,<br>
        <?php echo $order_view[0]['s_pincode']; ?>.<br>
      </address>
    </div><!-- /.col -->
    <div class="col-sm-4 invoice-col">
      <br>
      <br>
      <br>
      <b>Wish ID : </b>W<?php echo $order_view[0]['wid']; ?><br>
      <b>Grant ID: </b>G<?php echo $order_view[0]['gid']; ?><br>
      <b>Date : </b><?php echo date('d-M-Y H:i:s',time()); ?>
    </div><!-- /.col -->
  </div><!-- /.row -->

  <!-- Table row -->
  <div class="row">
    <div class="col-xs-12 table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Qty</th>
            <th>Product</th>
            <th>Country</th>
            <th>Subtotal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $order_view[0]['quantity']; ?></td>
            <td><?php echo $order_view[0]['wpn']; ?></td>
            <td><?php echo $order_view[0]['s_add3']; ?></td>
            <?php $sub_total = $order_view[0]['quantity'] * $order_view[0]['gtprice']; ?>
            <td>USD <?php echo $sub_total; ?></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
         
        </tbody>
      </table>
    </div><!-- /.col -->
  </div><!-- /.row -->

  <div class="row">
    <!-- accepted payments column -->
    <div class="col-xs-6">
      <p class="lead">Payment Methods:</p>
      <img src="<?php echo base_url('assets/images/credit/paypal2.png'); ?>" alt="Paypal">
      <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;"> Terms & condition apply <br> Wishingmart is not responsible for the transactions.<br>Shipping Company : <b><?php echo $order_view[0]['escompany']; ?></b> Delivery Service <br> Expected Delivery Time : 14 days
      </p>
    </div><!-- /.col -->
    <div class="col-xs-6">
      <p class="lead">Amount Due </p>
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th style="width:50%">Subtotal:</th>
            <td>USD <?php echo $sub_total; ?></td>
          </tr>
          <tr>
            <th>Tax</th>
            <td></td>
          </tr>
          <tr>
            <th>Shipping:</th>
            <td>USD <?php echo $order_view[0]['escost']; ?></td>
          </tr>
          <tr>
            <th>Total:</th>
<?php
  $total_price = $sub_total + $order_view[0]['escost'];
?>
            <td>USD <?php echo $total_price; ?></td>
          </tr>
        </table>
      </div>
    </div><!-- /.col -->
  </div><!-- /.row -->

  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
      <a href="#" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</a>
      
    </div>
  </div>
</section><!-- /.content -->
        <div class="clearfix"></div>
      </div><!-- /.content-wrapper -->
