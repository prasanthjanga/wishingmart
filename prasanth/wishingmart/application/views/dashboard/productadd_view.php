<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div><h3 class="title">Order Placing</h3></div>
<!-- Main content-->        
<section class="content create-account inside-page">
 <div class="row">
  <div class="col-sm-12">
   <div class="row">
    <div id="registerForm"  class="form-horizontal col-sm-6 col-sm-offset-3 col-lg-offset-1 col-lg-11 create-account" >
     <div class="panel-body">
      <div><h1>Delivery information</h1></div>
      <hr>

<table id="" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Product Id</th>
      <th>Product</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Sub Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $order_view[0]['wid']; ?></td>
      <td><?php echo $order_view[0]['wpn']; ?></td>
      <td>$ <?php echo $order_view[0]['gtprice']; ?></td>
      <td><?php echo $order_view[0]['quantity']; ?></td>
      <?php $sub_total= $order_view[0]['gtprice'] * $order_view[0]['quantity']; ?>
      <td>$ <?php echo $sub_total; ?></td>
    </tr>
  </tbody>
    <tr>
      <th colspan='4'>Sub Total</th>
      <th>$ <?php echo $sub_total; ?></th>
    </tr>
    <tr>
      <th colspan='4'>Shipping Cost</th>
      <th>$ <?php echo $order_view[0]['escost']; ?></th>
    </tr>
    <tr>
      <th colspan='4'>Total</th>
      <?php $order_total=$sub_total * $order_view[0]['escost']; ?>
      <th>$ <?php echo $order_total; ?></th>
    </tr>
  <tfoot>
    <tr>
      <th colspan='5'></th>
    </tr>
    <tr>
      <th colspan='1'></th>
      <th colspan='2'>Delivery From</th>
      <th colspan='2'>Delivery To</th>
    </tr>
    <tr>
      <th colspan='1'>Name</th>
      <th colspan='2'><?php echo $order_view[0]['wishfn'] .' '. $order_view[0]['wishln']; ?></th>
      <th colspan='2'><?php echo $order_view[0]['grantfn'] .' '. $order_view[0]['grantln']; ?></th>
    </tr>
    <tr>
      <th colspan='1'>D.No , Street</th>
      <th colspan='2'><?php echo $order_view[0]['a_add1']; ?></th>
      <th colspan='2'><?php echo $order_view[0]['s_add1']; ?></th>
    </tr>
    <tr>
      <th colspan='1'>State</th>
      <th colspan='2'><?php echo $order_view[0]['a_add2']; ?></th>
      <th colspan='2'><?php echo $order_view[0]['s_add2']; ?></th>
    </tr>
    <tr>
      <th colspan='1'>Country,Pin</th>
      <th colspan='2'><?php echo $order_view[0]['a_country'] .','. $order_view[0]['a_pincode']; ?></th>
      <th colspan='2'><?php echo $order_view[0]['s_country'] .','. $order_view[0]['s_pincode']; ?></th>
    </tr>
    <tr>
      <th colspan='1'>Contact</th>
      <th colspan='2'><?php echo $order_view[0]['a_contact']; ?></th>
      <th colspan='2'><?php echo $order_view[0]['s_contact']; ?></th>
    </tr>
  </tfoot>
</table>

        <div class="form-group">
        <label for="" class="col-sm-4"></label>
         <div class="col-sm-8">
          <p class="control-label"><a href="" class="btn btn-danger"><i class="fa fa-credit-card"></i> Submit Payment</a></p>
         </div>        
        </div>


     </div><!--panel-body end-->
    </div><!--registerForm end-->
   </div><!-- row end-->
  </div><!--col-sm-12 end-->



    </div><!-- ROW END-->
 
    </div><!-- col-sm-6 END-->
 </div><!-- ROW END-->

</section>
</div>

<script type="text/javascript">
//document.write('<div><label><input type="checkbox" id="toggle">Hide</label></div>');
document.getElementById('toggle').onclick = function () {
document.getElementById('hide_div').className = document.getElementById('toggle').checked ? 'hide' : 'show';
document.getElementById('edit_div').className = document.getElementById('toggle').checked ? 'show' : 'hide';
}
</script>