<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <a href="<?php echo base_url('../dashboard'); ?>">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php 
          if($this->session->userdata('prof_img')!=''){
              echo base_url().'../images/profile/'.$this->session->userdata('prof_img');
          }else{
              echo base_url().'../assets/images/profile-null.png';
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
      <li class="treeview <?php if($thispage=='4' || $thispage=='9'){ echo 'active'; } ?>">
        <a href="">
          <i class="fa fa-star"></i> <span>Wish</span> 
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('../dashboard/wishlist'); ?>" title="Wishes Done By Me"><i class="fa fa-circle-o"></i>Wish List</a></li>
        </ul>
      </li>
      <li class="treeview <?php if($thispage=='3' || $thispage=='31' || $thispage=='32' || $thispage=='10' ){ echo 'active'; } ?>">
        <a href="">
          <i class="fa fa-magic"></i>
          <span>Grant Requests</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('../dashboard/grantlist'); ?>" title="Grant Request For My Wishes"><i class="fa fa-circle-o"></i>Grant Requests
          <span class="label label-primary pull-right">4</span></a></li>
          <li><a href="<?php echo base_url('../dashboard/mygrant'); ?>" title="Grant Request I Sent To Others"><i class="fa fa-circle-o"></i>My Requests</a></li>

        </ul>
      </li>
      
      <li class="treeview <?php if($thispage=='5' || $thispage=='6'){ echo 'active'; } ?>">
        <a href="Account.html">
          <i class="fa fa-user"></i>
          <span>My Account</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('../dashboard/profile'); ?>"><i class="fa fa-circle-o"></i>Personal Details</a></li>
          <li><a href="<?php echo base_url('../dashboard/changepassword'); ?>"><i class="fa fa-circle-o"></i> Change Password</a></li>
          
        </ul>
      </li>
      <li class="treeview <?php if($thispage=='11' || $thispage=='12'){ echo 'active'; } ?>">
        <a href="<?php echo base_url('../dashboard/orderslist'); ?>">
          <i class="fa fa-bars"></i>
          <span>Orders</span>
        </a>
      </li>
      <li class="treeview <?php if($thispage=='7' || $thispage=='71'){ echo 'active'; } ?>">
        <a href="<?php echo base_url('../dashboard/invoicelist'); ?>">
          <i class="fa fa-money"></i>
          <span>Invoices</span>
        </a>
      </li>


      <li class="treeview">
        <a href="<?php echo base_url('../landing/logout'); ?>">
        <i class="fa fa-sign-out"></i>
        <span>Sign Out</span>
        </a>
      </li>
     
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<!-- header -->