
<?php require('admin/header_top.php'); ?>
<?php require('admin/nav.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Reports
      <small>Control</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="#">Reports</a></li>
    </ol>
  </section>
  

  <!-- Main content -->
  <section class="content">
    <div class="row">
    <!-- Best Buyers Reports-->
      <div class="col-xs-12">
        <div class="box box-success">
          <div class="box-header">
            <h3>Best Buyers</h3>
          </div>
          <div class="box-body">
            <!-- Date range -->
            <div class="form-group">
              <label>Date range:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="reservation" Placeholder="Please select two dates">
              </div><!-- /.input group -->
            </div><!-- /.form group -->
            
            <div class="row">
              <!-- area chat -->
              <div class="col-md-12">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>SKU</th>
                      <th>Name</th>
                      <th>Quantity</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Product-11</td>
                      <td>50</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Product-2</td>
                      <td>20</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>SKU</th>
                      <th>Name</th>
                      <th>Quantity</th>
                    </tr>
                  </tfoot>
                </table>
              </div><!-- col-md-12 end-->
            </div> <!-- row end -->
          </div><!-- /.box-body -->
        </div><!-- box box-success end-->
      </div><!-- col-xs-12 end-->

      <!-- Sales Reports-->
      <div class="col-xs-12">
        <div class="box box-success">
          <div class="box-header">
            <div class="col-sm-8"><h3>Sales</h3></div>
            <div class="col-sm-4">
              <div class="col-sm-4 no-padding">
                <select class="form-control pull-right">
                  <option>2015</option>
                  <option>2014</option>
                  <option>2013</option>
                </select>
              </div><!--col-sm-3 end-->
              <div class="col-sm-4 no-padding">
                <input type="submit" class="btn btn-success pull-left" value="Get Monthly Sales">
              </div><!--col-sm-3 end-->
            </div><!--col-sm-6 end-->
          </div><!-- box-header end -->
          <div class="box-body">
            <!-- Date range -->
            

            
            <div class="row">
              <!-- area chat -->
              <div class="col-md-12">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Month/Year</th>
                      <th>Coupon Discounts</th>
                      <th>Gift Card Discounts</th>
                      <th>Products</th>
                      <th>Shipping</th>
                      <th>Tax</th>
                      <th>grand Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Jan-2015</td>
                      <td>$ 0.00</td>
                      <td>$ 200.00</td>
                      <td>$ 111.00</td>
                      <td>$0.00</td>
                      <td>$121.11</td>
                      <td>$1234.11</td>
                    </tr>
                    <tr>
                      <td>Feb-2015</td>
                      <td>$ 0.00</td>
                      <td>$ 200.00</td>
                      <td>$ 111.00</td>
                      <td>$0.00</td>
                      <td>$121.11</td>
                      <td>$1234.11</td>
                    </tr>
                    <tr>
                      <td>Mar-2015</td>
                      <td>$ 0.00</td>
                      <td>$ 200.00</td>
                      <td>$ 111.00</td>
                      <td>$0.00</td>
                      <td>$121.11</td>
                      <td>$1234.11</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Month/Year</th>
                      <th>Coupon Discounts</th>
                      <th>Gift Card Discounts</th>
                      <th>Products</th>
                      <th>Shipping</th>
                      <th>Tax</th>
                      <th>grand Total</th>
                    </tr>
                  </tfoot>
                </table>
              </div><!-- col-md-12 end-->
            </div> <!-- row end -->
          </div><!-- /.box-body -->
        </div><!-- box box-success end-->
      </div><!-- col-xs-12 end-->


    </div><!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->