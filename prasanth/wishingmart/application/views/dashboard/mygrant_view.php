<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
 
 
     <div><h3 class=" title ">
     My Grant Request
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
                  <th>Grant Id</th>
                  <th>Product Img</th>
                  <th>Grant User Id</th>
                  <th>Country</th>
                  <th>Price</th>
                  <th>Date</th>  
                  <th>Status</th>  
                  <th></th>                    
               </tr>
              </thead>
              <tbody>
<?php
for($i=0;$i<=(count($mygrant_list)-1);$i++){
  //echo $mygrant_list[$i]['gtuid'];
?>
                <tr>
                  <td><?php echo $mygrant_list[$i]['gid']; ?> </td>
                  <td><img src="<?php echo base_url('images/products/granted/').'/'.$mygrant_list[$i]['gtimg']; ?>" width="50px" height="50px"></td>
                  <td><?php echo $mygrant_list[$i]['fname']." ".$mygrant_list[$i]['lname']; ?></td>
                  <td><?php echo $mygrant_list[$i]['country']; ?></td>
                  <td>USD <?php echo $mygrant_list[$i]['gtprice']; ?></td>
                  <td><span title="<?php echo $mygrant_list[$i]['gtdate']; ?>">
                  <?php echo date("Y-M-d",strtotime($mygrant_list[$i]['gtdate'])); ?></span></td>
                  <td>
<?php
  if($mygrant_list[$i]['status']=='0'){
    echo '<input type="hidden" name="wpstatus" value="nostatus">';
    echo "<span class='label label-info'>No Status</span>";
  }elseif($mygrant_list[$i]['status']=='1'){
    echo '<input type="hidden" name="wpstatus" value="requested">';
    echo "<span class='label label-warning'>Requested</span>";
  }elseif($mygrant_list[$i]['status']=='2'){
    echo "<span class='label label-success'>Granted</span>";
  }elseif($mygrant_list[$i]['status']=='3'){
    echo "<span class='label label-danger'>Deleted</span>";
  }else{
    echo "<span class='label label-danger'></span>";
  }
  //echo $wish_list[$i]['status']; 
?>
                  </td>
                  <td><a href="viewGrant.html" class="btn btn-danger">View Request</a></td>
                </tr>
                 
<?php }//FOR END ?>
                
                
                
              </tbody>
              <tfoot>
                <tr>
                  <th>Wish Id</th>
                  <th>Item</th>
                  <th>Product Img</th>
                  <th>Country</th>
                  <th>Price</th>
                  <th>Date</th>  
                  <th>Status</th>  
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