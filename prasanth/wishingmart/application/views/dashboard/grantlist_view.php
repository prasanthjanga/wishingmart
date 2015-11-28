<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div><h3 class=" title">Grant Requests</h3></div>

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
              <th>Item</th>
              <th>Country</th>
              <th>Price</th>
              <th>Date</th>  
              <th>Status</th>  
              <th></th>                    
           </tr>
          </thead>
          <tbody>
<?php
$count=count($grant_list);
for($i=0;$i<=($count-1);$i++){
  //print_r($grant_list);
  //echo $grant_list[$i]['gid'];
  //echo $grant_list[$i]['wpid'];
  //echo $grant_list[$i]['gtuid'];
  //echo $grant_list[$i]['gtprice'];
  //echo $grant_list[$i]['gtimg'];
  //echo $grant_list[$i]['gtcname'];
  //echo $grant_list[$i]['gtdesc'];
  //echo $grant_list[$i]['gtdate'];
  //echo $grant_list[$i]['status'];
?>            
<tr>
  <td><?php echo $grant_list[$i]['gid']; ?></td>
  <td>
    <img src="<?php echo base_url()."images/products/granted/".$grant_list[$i]['gtimg']; ?>" width="50px" height="50px" alt=""/>
  </td>
  <td><?php echo $grant_list[$i]['country']; ?></td>
  <td><?php echo "$ ".$grant_list[$i]['gtprice']; ?></td>
  <td>
    <span title="<?php echo $grant_list[$i]['gtdate']; ?>">
      <?php echo date("Y-M-d",strtotime($grant_list[$i]['gtdate'])); ?>
    </span>
  </td>
  <td>
    <?php
      if($grant_list[$i]['gstatus']=='0'){
        echo "<span class='label label-warning'>Waiting</span>";
      }elseif($grant_list[$i]['gstatus']=='1'){
        echo "<span class='label label-success'>Accepted</span>";
      }
    ?>
  </td>
  <td>
    <?php
    //echo $grant_list[$i]['gtuid'];
    //echo $this->session->userdata('uid');exit();
    if($grant_list[$i]['gtuid'] != $this->session->userdata('uid')){
    ?>
      <a href="<?php echo base_url('dashboard/viewgrantrequest')."/".$grant_list[$i]['gid']; ?>" class="btn btn-danger <?php if($grant_list[$i]['gstatus']=='1'){ echo 'disabled'; } ?>">View Request</a>
    <?php
    }//IF END
    ?>
  </td>
</tr>

<?php 
}//FOR END
?>            

            
          </tbody>
          <tfoot>
            <tr>
              <th>Grant Id</th>
              <th>Item</th>
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