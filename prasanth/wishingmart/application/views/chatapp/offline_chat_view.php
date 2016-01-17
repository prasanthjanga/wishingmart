
<div class="content-wrapper">
<!-- Content Header (Page header) -->

  <div><h3 class=" title ">
      Offline Chat List
  </h3></div>

<section class="content-header">
<div class="row">
  <div class="col-md-3">
    <div class="box box-solid">
      <div class="box-header with-border">
        <h4 class="box-title">Friends List</h4>
      </div>

<ul class="sidebar-menu">

<?php
$u_id=$this->session->userdata('uid');
if( !empty($friends_list) ) {
  foreach($friends_list as $k=>$v){
    if($v['fromlist'] != $u_id){
?>

  <li class="treeview <?php //echo ($v['fromlist'] ? 'active' : ''); ?>">
    <a href="#" onclick="javascript:showHint(<?php echo $v['fromlist']; ?>)">
      <i class="fa fa-circle text-<?php echo ($v['from_on'] ? 'success' : 'red'); ?>"></i>
      <span><?php echo $v['fn']; ?></span>
    </a>
  </li>


<?php
      //echo "<i class='fa fa-circle-o text-red'></i> <a href='#' onclick='javascript:showHint(".$v['fromlist'].")'>".$v['fn']."</a><br>";
    }// IF COND END
  }// FOR EACH END
}// IF COND END
//echo ($friends_list[0]['from'] == $u_id ? 'yesssss' : 'nooooooooo');
?>
</ul>

      <div class="box-body">
        <!-- the events -->
        <div id="external-events">
          
        </div>
      </div><!-- /.box-body -->
    </div><!-- /. box -->
  </div><!-- /.col -->

<script>
function showHint(str) {
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET", "<?php echo base_url('chat/user_with').'/'; ?>" + str, true);
    xmlhttp.send();
  }
}
</script>

  <div class="col-md-9">

<span id="txtHint">
        <!-- DIRECT CHAT SUCCESS -->
        
</span>





  </div><!-- /.col -->
</div><!-- /.row -->
</section>




</div><!-- /.content-wrapper -->

</div>
