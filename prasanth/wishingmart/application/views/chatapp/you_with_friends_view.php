
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div><h3 class=" title ">
        You With Friends
    </h3></div>

        <!-- Main content -->
        <section class="content inside-page">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><i class="fa fa-comments-o"></i> You Chat With Friends</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Time</th>
                        <th>Online/Offline</th>
                        <th>Message</th>
                      </tr>
                    </thead>
                    <tbody>
<?php //print_r($chat_all); ?>

<?php
//echo $this->session->userdata('uid');
//sort($chat_all);
for($i=0;$i<=(count($chat_all)-1);$i++){
	if($chat_all[$i]['to'] != $this->session->userdata('uid')){
		echo "<tr>";
		echo "<td>";
			echo $chat_all[$i]['id'];
		echo "</td>";
		echo "<td>";
			echo $chat_all[$i]['to'];
		echo "</td>";
		echo "<td>";
			echo $chat_all[$i]['sent'];
			//echo $chat_all[$i]['to'];
		echo "</td>";
		echo "<td>";
			//echo $chat_all[$i]['online'];
		if($chat_all[$i]["to_online"]=="1"){
			echo '<small class="label label-success"><i class="fa fa-clock-o"></i> Online</small>';
		}else{
			echo '<small class="label label-danger"><i class="fa fa-clock-o"></i> Offline</small>';
		}
		echo "</td>";
		echo "<td>";
			echo $chat_all[$i]['message'];
		echo "</td>";
		echo "</tr>";
	}
}

?>

                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Time</th>
                        <th>Online/Offline</th>
                        <th>Message</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

</div>
