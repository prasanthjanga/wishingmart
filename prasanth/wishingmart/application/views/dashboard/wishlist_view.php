<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
 
     <div><h3 class="title">
     Wishes List
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
                  <th>Wish Id</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Date</th>  
                  <th>Status</th>  
                  <th></th>                    
               </tr>
              </thead>
              <tbody>
<?php
//print_r($wish_list);
//exit();
//echo count($wish_list);
for($i=0;$i<=(count($wish_list)-1);$i++){
  //echo $i;
  //echo $wish_list[$i]['wid'];
  //exit();
?>
  <tr>
    <td>
      <?php echo $wish_list[$i]['wid']; ?>
    </td>

    <td>
      <img src="<?php echo base_url()."images/products/wished/".$wish_list[$i]['wpimg']; ?>" width="50px" height="50px" title="<?php echo $wish_list[$i]['wpn']; ?>" alt=""/>

    </td>
    <td>
      <?php echo $wish_list[$i]['wpn']; ?>
    </td>
    <td>
<?php 

$str_wpdec=$wish_list[$i]['wpdec'];
//$str_count=strlen($wish_list[$i]['wpdec']);

$small = substr($str_wpdec, 0, 25);
echo "<span title='$str_wpdec'>".$small." ...</span>";
//echo $wish_list[$i]['wpdec']; 
?>
    </td>
    <td>

<?php 
$date_date=$wish_list[$i]['wpdate'];
$date_ymd=date("Y-M-d",strtotime($date_date));
?>
  <span title="<?php echo $date_date; ?>"><?php echo $date_ymd; ?></span>

    </td>
    <td>
      <?php
        if($wish_list[$i]['status']=='0'){
          echo '<input type="hidden" name="wpstatus" value="nostatus">';
          echo "<span class='label label-info'>No Status</span>";
        }elseif($wish_list[$i]['status']=='1'){
          echo '<input type="hidden" name="wpstatus" value="requested">';
          echo "<span class='label label-warning'>Requested</span>";
        }elseif($wish_list[$i]['status']=='2'){
          echo "<span class='label label-success'>Granted</span>";
        }elseif($wish_list[$i]['status']=='3'){
          echo "<span class='label label-danger'>Deleted</span>";
        }else{
          echo "<span class='label label-danger'></span>";
        }
        //echo $wish_list[$i]['status']; 
      ?>
    </td>
    <td>
      <?php
        if($wish_list[$i]['status'] =='0'){
          echo '<a href='.base_url("dashboard/updatewish").'/'.$wish_list[$i]["wid"].'/'.$wish_list[$i]["status"].' class="btn btn-danger">Update/View</a>';
        }elseif($wish_list[$i]['status'] =='1'){
          echo '<a href='.base_url("dashboard/updatewish").'/'.$wish_list[$i]["wid"].'/'.$wish_list[$i]["status"].' class="btn btn-danger">View</a>';
        }
      ?>
    </td>
  </tr>
<?php
}//FOR END
?>
                
              </tbody>
              <tfoot>
                 <tr>
                  <th>Wish Id</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Description</th>
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