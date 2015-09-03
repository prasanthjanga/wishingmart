<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/images/women.jpg'); ?>" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>Vogue Robot</p>
      </div>
    </div>
 
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      
      <li class="treeview">
        <a href="GrantRequest.html">
          <i class="fa fa-magic"></i>
          <span>Grant Requests</span>
          <span class="label label-primary pull-right">4</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('wishgrant/listofwishes'); ?>"><i class="fa fa-circle-o"></i>Grant A Wish</a></li>
          <li><a href="<?php echo base_url('dashboard/grantlist'); ?>"><i class="fa fa-circle-o"></i>Grant Requests
          <span class="label label-primary pull-right">4</span></a></li>
        </ul>
      </li>
         <li class="treeview">
        <a href="Account.html">
          <i class="fa fa-star"></i> <span>Wish</span> 
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('wishgrant/wishing'); ?>"><i class="fa fa-circle-o"></i>Make A Wish</a></li>
          <li><a href="<?php echo base_url('dashboard/wishlist'); ?>"><i class="fa fa-circle-o"></i>Wish List</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="Account.html">
          <i class="fa fa-user"></i>
          <span>My Account</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('dashboard/profile'); ?>"><i class="fa fa-circle-o"></i>Personal Details</a></li>
          <li><a href="<?php echo base_url('dashboard/changepassword'); ?>"><i class="fa fa-circle-o"></i> Change Password</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i>Sign Out</a></li>
          
        </ul>
      </li>
      <li class="treeview">
        <a href="<?php echo base_url('dashboard/invoiceslist'); ?>">
          <i class="fa fa-money"></i>
          <span>Transactions</span>
        </a>
      </li>
      <li class="treeview">
        <a href="ComingSoon.html">
        <i class="fa fa-shopping-cart"></i>
        <span>Shopping</span>
        </a>
        </li>
     
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<!-- header -->