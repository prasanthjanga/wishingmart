    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <div><h3 class=" title ">
            My Account
        </h3></div>

        <!-- Main content-->
        <section class="content inside-page">

            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Shopping</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Wishes</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-star"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>44</h3>

                            <p>Grants</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-star "></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Transactions</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-cash"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="box box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Bar Chart</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div>
                  <div class="box-body">
                      <canvas id="pieChart" height="275" width="647" style="width: 647px; height: 275px;"></canvas>               
                  </div><!-- /.box-body -->
                </div><!-- /.box box-danger -->
              </div><!-- /.col-md-6 -->
              <div class="col-md-6">
                <div class="box box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Area Chart</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div>
                  <div class="box-body">
                      <canvas id="areaChart" height="280" width="627" style="width: 627px; height: 280px;"></canvas>                  
                  </div><!-- /.box-body -->
                </div><!-- /.box box-danger -->
              </div><!-- /.col-md-6 -->
            </div><!-- /.row -->



            <!-- TABLE: LATEST TRANSACTIONS -->
            <div class="box box-info collapsed-box ">
                <div class="box-header with-border">
                    <h3 class="box-title">Transactions</h3>

                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body ">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th> Grant ID</th>
                                <th>Item</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="">GR9842</a></td>
                                <td>Product1</td>
                                <td><span class="label label-success">Shipped</span></td>
                                <td><a href="<?php echo base_url('dashboard/invoice'); ?>" class="btn btn-danger">View Invoice</a></td>
                            </tr>
                            <tr>
                                <td><a href="">GR1848</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="label label-warning">Pending</span></td>
                                <td><a href="<?php echo base_url('dashboard/invoice'); ?>" class="btn btn-danger">View Invoice</a></td>

                            </tr>
                            <tr>
                                <td><a href="">GR7429</a></td>
                                <td>iPhone 6 Plus</td>
                                <td><span class="label label-danger">Delivered</span></td>
                                <td><a href="<?php echo base_url('dashboard/invoice'); ?>" class="btn btn-danger">View Invoice</a></td>

                            </tr>
                            <tr>
                                <td><a href="">GR7429</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="label label-info">Processing</span></td>
                                <td><a href="<?php echo base_url('dashboard/invoice'); ?>" class="btn btn-danger">View Invoice</a></td>

                            </tr>
                            <tr>
                                <td><a href="">GR1848</a></td>
                                <td>Samsung Smart TV</td>
                                <td><span class="label label-warning">Pending</span></td>
                                <td><a href="<?php echo base_url('dashboard/invoice'); ?>" class="btn btn-danger">View Invoice</a></td>

                            </tr>
                            <tr>
                                <td><a href="">GR7429</a></td>
                                <td>iPhone 6 Plus</td>
                                <td><span class="label label-danger">Delivered</span></td>
                                <td><a href="<?php echo base_url('dashboard/invoice'); ?>" class="btn btn-danger">View Invoice</a></td>

                            </tr>
                            <tr>
                                <td><a href="">GR9842</a></td>
                                <td>zProduct2</td>
                                <td><span class="label label-success">Shipped</span></td>
                                <td><a href="<?php echo base_url('dashboard/invoice'); ?>" class="btn btn-danger">View Invoice</a></td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <a href="<?php echo base_url('dashboard/invoiceslist'); ?>" class="btn btn-sm btn-danger pull-right">View All Transactions</a>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->


            <!-- TABLE: WISHLIST -->
            <div class="box box-info collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Wish List</h3>

                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th>Wish ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="">W9842</a></td>
                                <td>
                                    <div class="product-img">
                                        <img src="<?php echo base_url('assets/images/products/pic.jpg'); ?>" alt="Product Image"/>
                                    </div>
                                </td>
                                <td>Product1</td>
                                <td>Short Description generally about the item wished by the user</td>
                                <td>01/12/2014</td>
                                <td><a href="<?php echo base_url('dashboard/updatewish'); ?>" class="btn btn-danger">Update Wish</a></td>
                                <td><a href="" class="btn btn-danger">Delete Wish</a></td>
                            </tr>

                            <tr>
                                <td><a href="">W9842</a></td>
                                <td>
                                    <div class="product-img">
                                        <img src="<?php echo base_url('assets/images/products/pic.jpg'); ?>" alt="Product Image"/>
                                    </div>
                                </td>
                                <td>Product1</td>
                                <td>Short Description generally about the item wished by the user</td>
                                <td>01/12/2014</td>
                                <td><a href="<?php echo base_url('dashboard/updatewish'); ?>" class="btn btn-danger">Update Wish</a></td>
                                <td><a href="" class="btn btn-danger">Delete Wish</a></td>
                            </tr>
                            <tr>
                                <td><a href="">W9842</a></td>
                                <td>
                                    <div class="product-img">
                                        <img src="<?php echo base_url('assets/images/products/pic.jpg'); ?>" alt="Product Image"/>
                                    </div>
                                </td>
                                <td>Product1</td>
                                <td>Short Description generally about the item wished by the user</td>
                                <td>01/12/2014</td>
                                <td><a href="<?php echo base_url('dashboard/updatewish'); ?>" class="btn btn-danger">Update Wish</a></td>
                                <td><a href="" class="btn btn-danger">Delete Wish</a></td>
                            </tr>
                            <tr>
                                <td><a href="">W9842</a></td>
                                <td>
                                    <div class="product-img">
                                        <img src="<?php echo base_url('assets/images/products/pic.jpg'); ?>" alt="Product Image"/>
                                    </div>
                                </td>
                                <td>Product1</td>
                                <td>Short Description generally about the item wished by the user</td>
                                <td>01/12/2014</td>
                                <td><a href="<?php echo base_url('dashboard/updatewish'); ?>" class="btn btn-danger">Update Wish</a></td>
                                <td><a href="" class="btn btn-danger">Delete Wish</a></td>
                            </tr>
                            <tr>
                                <td><a href="">W9842</a></td>
                                <td>
                                    <div class="product-img">
                                        <img src="<?php echo base_url('assets/images/products/pic.jpg'); ?>" alt="Product Image"/>
                                    </div>
                                </td>
                                <td>Product1</td>
                                <td>Short Description generally about the item wished by the user</td>
                                <td>01/12/2014</td>
                                <td><a href="<?php echo base_url('dashboard/updatewish'); ?>" class="btn btn-danger">Update Wish</a></td>
                                <td><a href="" class="btn btn-danger">Delete Wish</a></td>
                            </tr>
                            <tr>
                                <td><a href="">W9842</a></td>
                                <td>
                                    <div class="product-img">
                                        <img src="<?php echo base_url('assets/images/products/pic.jpg'); ?>" alt="Product Image"/>
                                    </div>
                                </td>
                                <td>Product1</td>
                                <td>Short Description generally about the item wished by the user</td>
                                <td>01/12/2014</td>
                                <td><a href="<?php echo base_url('dashboard/updatewish'); ?>" class="btn btn-danger">Update Wish</a></td>
                                <td><a href="" class="btn btn-danger">Delete Wish</a></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <a href="<?php echo base_url('dashboard/wishlist'); ?>" class="btn btn-sm btn-danger pull-right">View All Wishes</a>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->

            <!-- TABLE: GRANT REQUEST -->
            <div class="box box-info collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">GRANT REQUESTS</h3>

                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th>Wish ID</th>
                                <th>Item</th>
                                <th>Country</th>
                                <th>Price</th>
                                <th>Date</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="">GR9842</a></td>
                                <td>Product1</td>
                                <th>USA</th>
                                <th><span class="fa fa-usd">19.00</span></th>
                                <td>12/01/2015</td>
                                <td><a href="<?php echo base_url('dashboard/viewgrantrequest'); ?>" class="btn btn-danger">View Request</a></td>
                            </tr>
                            <tr>
                                <td><a href="">GR9842</a></td>
                                <td>Product1</td>
                                <th>USA</th>
                                <th><span class="fa fa-usd">19.00</span></th>
                                <td>12/01/2015</td>
                                <td><a href="<?php echo base_url('dashboard/viewgrantrequest'); ?>" class="btn btn-danger">View Request</a></td>
                            </tr>
                            <tr>
                                <td><a href="">GR9842</a></td>
                                <td>Product1</td>
                                <th>USA</th>
                                <th><span class="fa fa-usd">19.00</span></th>
                                <td>12/01/2015</td>
                                <td><a href="<?php echo base_url('dashboard/viewgrantrequest'); ?>" class="btn btn-danger">View Request</a></td>
                            </tr>
                            <tr>
                                <td><a href="">GR9842</a></td>
                                <td>Product1</td>
                                <th>USA</th>
                                <th><span class="fa fa-usd">19.00</span></th>
                                <td>12/01/2015</td>
                                <td><a href="<?php echo base_url('dashboard/viewgrantrequest'); ?>" class="btn btn-danger">View Request</a></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <a href="<?php echo base_url('dashboard/grantlist'); ?>" class="btn btn-sm btn-danger pull-right">View All Requests</a>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </section>
    </div>