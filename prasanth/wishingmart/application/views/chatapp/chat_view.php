
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div><h3 class=" title ">
        My Chat Account
    </h3></div>


    <!-- Main content-->
    <section class="content inside-page">

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
<?php echo count($chat_all); ?>
                        <sup style="font-size: 20px"><i class="fa fa-circle text-success"></i></sup>
                        </h3>

                        <p>Online</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-chatbubbles"></i>
                    </div>
                    <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>
<?php echo count($chat_all); ?>
                        <sup style="font-size: 20px">
                            <i class="fa fa-circle text-red"></i>
                        </sup>
                        </h3>
                        <p>Off line</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-chatbubble-outline"></i>
                    </div>
                    <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>
<?php echo count($chat_all); ?>
                        </h3>

                        <p>Today Chat</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-chatboxes"></i>
                    </div>
                    <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>
<?php echo count($chat_all); ?>
                        </h3>
                        <p>Total Chats</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-chatbubble-working"></i>
                    </div>
                    <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
                </div>
            </div>
            <!-- ./col -->
        </div>


        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><i class="fa fa-comments-o"></i> Chat From Others To You</h3>
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
	if($chat_all[$i]['from'] != $this->session->userdata('uid')){
		echo "<tr>";
		echo "<td>";
			echo $chat_all[$i]['id'];
		echo "</td>";
		echo "<td>";
			echo $chat_all[$i]['from'];
		echo "</td>";
		echo "<td>";
			echo time_dmtmi($chat_all[$i]['sent']);
			//echo $chat_all[$i]['to'];
		echo "</td>";
		echo "<td>";
			//echo $chat_all[$i]['online'];


		if($chat_all[$i]["from_online"]=="1"){
			echo "<a href='#' onclick='funenter(".$this->session->set_userdata('from',$chat_all[$i]['from']).")'>";
			echo '<small class="label label-success"><i class="fa fa-clock-o"></i> Online</small>';
			echo "</a>";
		}else{
			echo "<a href='#' onclick='funoffline()'>";
			echo '<small class="label label-danger"><i class="fa fa-clock-o"></i> Offline</small>';
			echo "</a>";
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
      

    </section>
</div>
