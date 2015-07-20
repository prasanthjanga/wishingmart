
<?php require('admin/header_top.php'); ?>
<?php require('admin/nav.php'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Products
            <small>Products Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="#">Products</a></li>
          </ol>
        </section>
        <section class="content-header">
          <a href="<?php echo base_url('index.php/seller/product_add'); ?>" class="btn btn-block btn-success btn-lg">Add New Product</a>
        </section>


        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Product Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>In Stock</th>
                        <th>Options</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Product-1</td>
                        <td>50</td>
                        <td>8</td>
                        <td><a class="btn btn-primary btn-xs">Edit</a> <a class="btn btn-danger btn-xs">Delete</a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Product-2</td>
                        <td>20</td>
                        <td>5</td>
                        <td><a class="btn btn-primary btn-xs">Edit</a> <a class="btn btn-danger btn-xs">Delete</a></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>In Stock</th>
                        <th>Options</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Product Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>In Stock</th>
                        <th>Options</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Product-1</td>
                        <td>50</td>
                        <td>8</td>
                        <td><a class="btn btn-primary btn-xs">Edit</a> <a class="btn btn-danger btn-xs">Delete</a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Product-2</td>
                        <td>20</td>
                        <td>5</td>
                        <td><a class="btn btn-primary btn-xs">Edit</a> <a class="btn btn-danger btn-xs">Delete</a></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>In Stock</th>
                        <th>Options</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->