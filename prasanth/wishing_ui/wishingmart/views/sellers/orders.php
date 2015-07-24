
<?php require('admin/header_top.php'); ?>
<?php require('admin/nav.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Order
      <small>Control</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="#">Orders List</a></li>
    </ol>
  </section>
  


  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Orders Data Table</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                  <th><a class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a></th>
                  <th>Order No.</th>
                  <th>Bill To</th>
                  <th>Ship To</th>
                  <th>Ordered On</th>
                  <th>Status</th>
                  <th>Total</th>
                  <th>View</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>12345678</td>
                  <td>ABCDEF</td>
                  <td>Malaysia,KL</td>
                  <td>23/07/2015 05:02 PM</td>
                  <td><!-- select -->
                      <span style="display:inline-block;">
                      <select class="form-control selectpicker bs-select-hidden">
                          <option>Order Placed</option>
                          <option>Pending</option>
                          <option>Processing</option>
                          <option>Sipping</option>
                          <option>On Hold</option>
                          <option>Cancelled</option>
                          <option>Delivered</option>
                      </select>
                      </span>
                      <span style="display:inline-block;">
                      <a href="" class="btn btn-success btn-sm">
                        <span class="glyphicon glyphicon-floppy-disk"></span> Save
                      </a>
                    </span>

                  </td>
                  <td>90</td>
                  <td>
                    <a href="<?php echo base_url('index.php/seller/order_view');?>" class="btn btn-primary btn-sm">
                      <span class="glyphicon glyphicon-search"></span> View
                    </a>
                  </td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>12345678</td>
                  <td>ABCDEF</td>
                  <td>Malaysia,KL</td>
                  <td>23/07/2015 05:02 PM</td>
                  <td><!-- select -->
                      <span style="display:inline-block;">
                      <select class="form-control selectpicker bs-select-hidden">
                          <option>Order Placed</option>
                          <option>Pending</option>
                          <option>Processing</option>
                          <option>Sipping</option>
                          <option>On Hold</option>
                          <option>Cancelled</option>
                          <option>Delivered</option>
                      </select>
                      </span>
                      <span style="display:inline-block;">
                      <a class="btn btn-success btn-sm"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
                    </span>

                  </td>
                  <td>90</td>
                  <td><a class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> View</a></td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th><a class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a></th>
                  <th>Order No.</th>
                  <th>Bill To</th>
                  <th>Ship To</th>
                  <th>Ordered On</th>
                  <th>Status</th>
                  <th>Total</th>
                  <th>View</th>
                </tr>
              </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Orders Data Table With Full Features</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th><a class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a></th>
                  <th>Order No.</th>
                  <th>Bill To</th>
                  <th>Ship To</th>
                  <th>Ordered On</th>
                  <th>Status</th>
                  <th>Total</th>
                  <th>View</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>12345678</td>
                  <td>ABCDEF</td>
                  <td>Malaysia,KL</td>
                  <td>23/07/2015 05:02 PM</td>
                  <td><!-- select -->
                      <span style="display:inline-block;">
                      <select class="form-control selectpicker bs-select-hidden">
                          <option>Order Placed</option>
                          <option>Pending</option>
                          <option>Processing</option>
                          <option>Sipping</option>
                          <option>On Hold</option>
                          <option>Cancelled</option>
                          <option>Delivered</option>
                      </select>
                      </span>
                      <span style="display:inline-block;">
                      <a class="btn btn-success btn-sm"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
                    </span>

                  </td>
                  <td>90</td>
                  <td><a class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> View</a></td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>12345678</td>
                  <td>ABCDEF</td>
                  <td>Malaysia,KL</td>
                  <td>23/07/2015 05:02 PM</td>
                  <td><!-- select -->
                      <span style="display:inline-block;">
                      <select class="form-control selectpicker bs-select-hidden">
                          <option>Order Placed</option>
                          <option>Pending</option>
                          <option>Processing</option>
                          <option>Sipping</option>
                          <option>On Hold</option>
                          <option>Cancelled</option>
                          <option>Delivered</option>
                      </select>
                      </span>
                      <span style="display:inline-block;">
                      <a class="btn btn-success btn-sm"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
                    </span>

                  </td>
                  <td>90</td>
                  <td><a class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> View</a></td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th><a class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a></th>
                  <th>Order No.</th>
                  <th>Bill To</th>
                  <th>Ship To</th>
                  <th>Ordered On</th>
                  <th>Status</th>
                  <th>Total</th>
                  <th>View</th>
                </tr>
              </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->