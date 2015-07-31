
<?php require('admin/header_top.php'); ?>
<?php require('admin/nav.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Sales
      <small>Control</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="#">Sales</a></li>
    </ol>
  </section>
  

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-success">
          <div class="box-header">
            <h3>Daily / Weekly / Monthly / Yearly - Sales Reports</h3>
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
              <div class="col-md-6">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Area Chart</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="areaChart" height="270" width="510" style="width: 510px; height: 270px;"></canvas>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- box box-primary end -->
              </div><!-- col-md-6 end-->

              <!-- line chat -->
              <div class="col-md-6">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Line Chart</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="lineChart" height="280" width="510" style="width: 510px; height: 280px;"></canvas>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- box box-primary end -->
              </div><!-- col-md-6 end-->
            </div> <!-- row end -->










          </div><!-- /.box-body -->
        </div><!-- box box-success end-->


      </div><!-- col-xs-12 end-->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->