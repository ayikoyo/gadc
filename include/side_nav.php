<?php include'functions/functions.php';
  $users = countPersons("","system");
  $drivers = countPersons("","drivers");
  $parents = countPersons("","parents");
?>

<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Administrator</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="user_new.php"><i class="fa fa-user-plus"></i>New user</a></li>
            <li class="active"><a href="users_list.php"><i class="fa fa-list"></i>System users</a></li>
            <li class="active"><a href="user_profile.php"><i class="fa fa-user"></i>User profile</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bus"></i>
            <span>Driver</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="driver_new.php"><i class="fa fa-user-plus"></i>New driver</a></li>
            <li><a href="drivers_list.php"><i class="fa fa-list"></i></i>Drivers list
              <span class="pull-right-container">
              <span class="label label-primary pull-right"><?php echo $drivers;?> Drivers</span>
            </span>
            </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Parent</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="parent_new.php"><i class="fa fa-user-plus"></i></i>New parent</a></li>
            <li><a href="parents_list.php"><i class="fa fa-list"></i></i>Parents list
              <span class="pull-right-container">
              <span class="label label-primary pull-right"><?php echo $parents;?> Parents</span>
            </span>
            </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i><span>Enrolment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="children_list.php"><i class="fa fa-child"></i>Children list</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Appointments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="appointment_new.php"><i class="fa  fa-hand-o-right"></i>Recent appointments</a></li>
            <li><a href="appointment_assign.php"><i class="fa fa-tags"></i>Assigned appointments</a></li>
            <li><a href="appointment_cancel.php"><i class="fa fa-remove"></i>Cancelled appointments</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope-o"></i>
            <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="mailbox.php"><i class="fa fa-inbox"></i>Inbox
              <span class="pull-right-container">
              <span class="label label-primary pull-right">4 New mails</span>
            </span>
            </a></li>
            <li><a href="mail_compose.php"><i class="fa fa-edit"></i>Compose</a></li>
            <li><a href="drivers_list.php"><i class="fa fa-trash"></i>Trash</a></li>
          </ul>
        </li>
        <li><a href="logout.php"><i class="fa fa-power-off"></i>Sign out</a></li>
      </ul>