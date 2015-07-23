

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url('asserts/dist/img/avatar5.png'); ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Wishing Mart User</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class=<?php if($title == "Dashboard"){ echo "active treeview"; }else{ echo "treeview"; } ?>>
              <a href="<?php echo base_url('index.php/seller'); ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
             </li>
            <li class=<?php if($title == "Products" || $title == "Add Products"|| $title ==  "Edit Products"){ echo "active treeview"; }else{ echo "treeview"; } ?>>
              <a href="<?php echo base_url('index.php/seller/products'); ?>">
                <i class="fa fa-files-o"></i> <span>Products</span>
              </a>
           </li>
            <li class=<?php if($title == "Orders"){ echo "active treeview"; }else{ echo "treeview"; } ?>>
              <a href="<?php echo base_url('index.php/seller/orders'); ?>">
                <i class="fa fa-th"></i> <span>Orders</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Sales</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-flag-checkered"></i>
                <span>Reports</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-globe"></i> <span>Zones</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Shipping & Taxes</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li>
              <a href="pages/calendar.html">
                <i class="fa fa-calendar"></i> <span>Discounts / Promotions</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>
            <li>
              <a href="pages/mailbox/mailbox.html">
                <i class="fa fa-dollar"></i> <span>Currency</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i> <span>Users</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Groups & category</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li><a href="documentation/index.html"><i class="fa fa-comment"></i> <span>Online Chatting</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
