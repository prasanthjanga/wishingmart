
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
            <h3 class="box-title">Order Full Details</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-4">
                <div class="box-header with-border">
                  <h3 class="box-title"><dt>Account Info</dt></h3>
                </div><!--box-header with-border end-->
                <div class="box-body text-left">
                  <dt>Name</dt>
                  <dd>Email Id</dd>
                  <dd>Contact Number</dd>
                </div><!--box-body text-left-->
              </div><!--col-md-4 end-->
              <div class="col-md-4">
                <div class="box-header with-border">
                  <h3 class="box-title"><dt>Billing Address</dt></h3>
                </div><!--box-header with-border end-->
                <div class="box-body text-left">
                  <dt>Name</dt>
                  <dd>D.NO / F.NO / H.NO</dd>
                  <dd>Street</dd>
                  <dd>State</dd>
                  <dd>Country</dd>
                  <dd>PIN</dd>
                  <dd>Email Id</dd>
                  <dd>Contact Number</dd>
                </div><!--box-body text-left-->
              </div><!--col-md-4 end-->
              <div class="col-md-4">
                <div class="box-header with-border">
                  <h3 class="box-title"><dt>Shipping Address</dt></h3>
                </div><!--box-header with-border end-->
                <div class="box-body text-left">
                  <dt>Name</dt>
                  <dd>D.NO / F.NO / H.NO</dd>
                  <dd>Street</dd>
                  <dd>State</dd>
                  <dd>Country</dd>
                  <dd>PIN</dd>
                  <dd>Email Id</dd>
                  <dd>Contact Number</dd>
                </div><!--box-body text-left-->
              </div><!--col-md-4 end-->
            </div><!-- ROW END -->

            <div class="row">
              <div class="col-md-4">
                <div class="box-header with-border">
                  <h3 class="box-title"><dt>Order Details Info</dt></h3>
                </div><!--box-header with-border end-->
                <div class="box-body text-left">
                  <dt>Order No</dt>
                  <dd>Order Date</dd>
                  <dd>ETC</dd>
                </div><!--box-body text-left-->
              </div><!--col-md-4 end-->
              <div class="col-md-4">
                <div class="box-header with-border">
                  <h3 class="box-title"><dt>Payment Method</dt></h3>
                </div><!--box-header with-border end-->
                <div class="box-body text-left">
                  <dt>Cash On Delivery</dt>
                  <dd>Online Pay</dd>
                  <dd>ETC</dd>
                </div><!--box-body text-left-->
              </div><!--col-md-4 end-->
              <div class="col-md-4">
                <div class="box-header with-border">
                  <h3 class="box-title"><dt>Shipping Details</dt></h3>
                </div><!--box-header with-border end-->
                <div class="box-body text-left">
                  <dt>Name</dt>
                  <dd>Shipping date</dd>
                </div><!--box-body text-left-->
              </div><!--col-md-4 end-->
            </div><!-- ROW END -->
            <div class="row">
              <div class="col-md-12">
                <div class="box-header with-border">
                </div>
                <div class="box-header with-border box-body text-left">
                  <label class="collapse" for="_1">
                    <a class="btn btn-block btn-info btn-lg"><span class="glyphicon glyphicon-envelope"> </span> Email Notification</a>
                  </label>
                  <input id="_1" type="checkbox">
                  <div><!-- Show and hide mail componet start-->
                  <div class="col-md-12">
                    <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">Compose New Message</h3>
                      </div><!-- /.box-header -->
                      <div class="box-body">
                        <div class="form-group">
                          <input class="form-control" placeholder="To:"/>
                        </div>
                        <div class="form-group">
                          <input class="form-control" placeholder="Subject:"/>
                        </div>
                        <div class="form-group">
                          <textarea id="compose-textarea" class="form-control" style="height: 300px">
                            <h1><u>Heading Of Message</u></h1>
                            <h4>Subheading</h4>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee</p>
                            <ul>
                              <li>List item one</li>
                              <li>List item two</li>
                              <li>List item three</li>
                              <li>List item four</li>
                            </ul>
                            <p>Thank you,</p>
                            <p>John Doe</p>
                          </textarea>
                        </div>
                        <div class="form-group">
                          <div class="btn btn-default btn-file">
                            <i class="fa fa-paperclip"></i> Attachment
                            <input type="file" name="attachment"/>
                          </div>
                          <p class="help-block">Max. 5MB</p>
                        </div>
                      </div><!-- /.box-body -->
                      <div class="box-footer">
                        <div class="pull-right">
                          <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                        </div>
                      </div><!-- /.box-footer -->
                    </div><!-- /. box -->
                  </div><!-- /.col -->
                  </div><!-- Show and hide mail componet end-->

                  <div class="row">
                    <div class="col-md-6">
                      <div class="box-header with-border">
                        <h3 class="box-title"><dt>Admin Notes</dt></h3>
                      </div><!--box-header with-border end-->
                      <div class="box-body text-center">
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div><!--box-body text-center-->
                    </div><!--col-md-6 end-->
                    <div class="col-md-3">
                      <div class="box-header with-border">
                        <h3 class="box-title"><dt>Status</dt></h3>
                      </div><!--box-header with-border end-->
                      <div class="box-body text-right">
                        <select class="form-control selectpicker bs-select-hidden">
                          <option>Order Placed</option>
                          <option>Pending</option>
                          <option>Processing</option>
                          <option>Sipping</option>
                          <option>On Hold</option>
                          <option>Cancelled</option>
                          <option>Delivered</option>
                        </select>
                      </div><!--box-body text-right-->
                    </div><!--col-md-3 end-->
                    <div class="col-md-3">
                      <div class="box-header with-border">
                        <h3 class="box-title"><dt>Order Details Info</dt></h3>
                      </div><!--box-header with-border end-->
                      <div class="box-body text-left">
                        <a href="" class="btn btn-success btn-ms">Update</a>
                      </div><!--box-body text-left-->
                    </div><!--col-md-3 end-->
                  </div><!--ROW END-->

  
                </div><!--box-header with-border end-->
              </div><!--col-md-4 end-->
            </div><!-- row end -->
          </div><!-- box-body end-->
          </div><!-- box end-->
      





<div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Total Order Calculations</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                    </tr>
                    <tr>
                      <td>121</td>
                      <td>Product1</td>
                      <td>$ 120</td>
                      <td>2</td>
                      <td>$ 240</td>
                    </tr>
                    <tr>
                      <td>125</td>
                      <td>Product1</td>
                      <td>$ 120</td>
                      <td>1</td>
                      <td>$ 120</td>
                    </tr>
                    <tr>
                      <td colspan="4"><dt>Sub Total</dt></td>
                      <td>$ 360</td>
                    </tr>
                    <tr>
                      <td colspan="4"><dt>Shipping</dt></td>
                      <td>$ 0.00</td>
                    </tr>
                    <tr>
                      <td colspan="4"><dt>Tax</dt></td>
                      <td>$ 0.00</td>
                    </tr>
                    <tr>
                      <td colspan="4"><h3>Total</h3></td>
                      <td><dt>$ 360.00</dt></td>
                    </tr>



                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>










      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->