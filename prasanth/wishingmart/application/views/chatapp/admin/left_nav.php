<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <a href="<?php echo base_url('chat/index'); ?>">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php 
          if($this->session->userdata('prof_img')!=''){
              echo base_url().'images/profile/'.$this->session->userdata('prof_img');
          }else{
              echo base_url().'assets/images/profile-null.png';
          }
          ?>"  class="img-circle" alt="User Image" height="45px"/>
      </div>
      <div class="pull-left info">
        <p>
          <?php echo $this->session->userdata('email'); ?>
        </p>
      </div>
    </div>
    </a>
 
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
<!--
      <li class="treeview <?php //if($thispage=='c2'){ echo 'active'; } ?>">
        <a href="<?php //echo base_url('chat/friendswithyou'); ?>">
          <i class="fa fa-circle-o text-red"></i> <span>Friends With You</span> 
        </a>
      </li>
      <li class="treeview <?php //if($thispage=='c3'){ echo 'active'; } ?>">
        <a href="<?php //echo base_url('chat/youwithfriends'); ?>">
          <i class="fa fa-comments-o"></i> <span>You With Friends</span> 
        </a>
      </li>
-->

      <li class="treeview <?php if($thispage=='c4'){ echo 'active'; } ?>">
        <a href="<?php echo base_url('chat/offline'); ?>">
          <small class="label label-danger"><i class="fa fa-clock-o"></i></small>
            <span>Offline Chat</span> 
        </a>
      </li>
<!--
      <li class="treeview <?php //if($thispage=='4'){ echo 'active'; } ?>">
        <a href="">
          <i class="fa fa-comment"></i> <span>Chat Options</span> 
          <i class="fa fa-angle-left pull-right"></i>
        </a>
      </li>

      <li class="treeview <?php //if($thispage=='4' || $thispage=='9'){ echo 'active'; } ?>">
        <a href="">
          <i class="fa fa-comments-o"></i> <span>Friends List</span> 
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php //echo base_url('chat/'); ?>"><i class="fa fa-circle-o"></i>My Friends</a></li>
        </ul>
      </li>
-->
      <li class="treeview">
        <a href="<?php echo base_url('landing/logout'); ?>">
        <i class="fa fa-sign-out"></i>
        <span>Sign Out</span>
        </a>
      </li>
     
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<!-- header -->