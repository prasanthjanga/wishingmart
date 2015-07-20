
<?php require('admin/header_top.php'); ?>
<?php require('admin/nav.php'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            New
            <small>Product</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="#">New Product</a></li>
          </ol>
        </section>


<!-- Main content -->
<section class="content">
<div class="row">     
<!-- right column -->
<div class="col-md-9">
  <!-- general form elements disabled -->
  <div class="box box-warning">
    <div class="box-header">
      <h3 class="box-title">General Elements</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <form role="form">
        <!-- text input -->
        <div class="form-group">
          <label>Product Name</label>
          <input type="text" class="form-control" placeholder="Enter ..."/>
        </div>

        <!-- textarea -->
        <div class="form-group">
          <label>Description</label>
          <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
        </div>

        <!-- File uplode -->
       <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <input type="file" id="exampleInputFile">
          <p class="help-block">Please Select Product Image.</p>
       </div>

        <!-- text input -->
        <div class="form-group">
          <label>Price</label>
          <input type="text" class="form-control" placeholder="Enter ..."/>
        </div>

        <!-- text input -->
        <div class="form-group">
          <label>Instock</label>
          <input type="text" class="form-control" placeholder="Enter ..."/>
        </div>
        <!-- text input -->
        <div class="form-group">
          <label>Wight</label>
          <input type="text" class="form-control" placeholder="Enter ..."/>
        </div>

        <!-- Date dd/mm/yyyy -->
        <div class="form-group">
          <label>Date masks:</label>
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
          </div><!-- /.input group -->
        </div>


        <div class="box-footer">
          <input type="submit" name="sub" value="Insert" class="btn btn-primary right">
        </div>

      </form>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div><!--/.col (right) -->
</div> <!-- row end-->
</section>
</div> <!-- content-wrapper end-->