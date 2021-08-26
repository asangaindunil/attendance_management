<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <style>
        .error{
            color:red;
            font-weight: normal;
        }
        .glow {
            font-size: 80px;
            color: #fff;
            text-align: center;
            -webkit-animation: glow 1s ease-in-out infinite alternate;
            -moz-animation: glow 1s ease-in-out infinite alternate;
            animation: glow 1s ease-in-out infinite alternate;
        }

        @-webkit-keyframes glow {
            from {
                text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
            }

            to {
                text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
            }
        }
    </style>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://js.pusher.com/4.3/pusher.min.js"></script>

    <![endif]-->
</head>
<!-- <body class="sidebar-mini skin-black-light"> -->
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>AMS</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Attendance</b> MS</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image"/>
                            <span class="hidden-xs"><?php echo $name; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                                <p>
                                    <?php echo $name; ?>
                                    <small><?php echo $role_text; ?></small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo base_url(); ?>loadChangePass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Change Password</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo $name; ?>
                    </p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="<?php echo base_url(); ?>dashboard">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
                    </a>
                </li>


                <?php
                if($role == ROLE_EMPLOYEE) {
                    ?>
                    <li>
                        <a href="<?php echo base_url(); ?>searchstudent" style="font-size: 16px;">
                            <i class="fa fa-plane"></i>
                            <span>Search Student</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo base_url(); ?>attendents" >
                            <i class="fa fa-ticket"></i>
                            <span>Attendance</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>attendents" style="font-size: 16px;">
                                    <i class="fa fa-plane"></i>
                                    <span>Attendance Mark</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>ViewAttendents" style="font-size: 16px;">
                                    <i class="fa fa-plane"></i>
                                    <span>View Attendance</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#" >
                            <i class="fa fa-thumb-tack"></i>
                            <span>Reports</span>
                        </a>
                    </li>
                    <?php
                }
                if($role == ROLE_ADMIN || $role == ROLE_MANAGER)
                {
                    ?>
                    <li class="treeview">
                        <a href="<?php echo base_url(); ?>Pos">
                            <i class="fa fa-plane"></i>
                            <span>Student</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>newstudent" style="font-size: 16px;">
                                    <i class="fa fa-plane"></i>
                                    <span>New Student</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>searchstudent" style="font-size: 16px;">
                                    <i class="fa fa-plane"></i>
                                    <span>Search Student</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo base_url(); ?>attendents" >
                            <i class="fa fa-ticket"></i>
                            <span>Attendance</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>attendents" style="font-size: 16px;">
                                    <i class="fa fa-plane"></i>
                                    <span>Attendance Mark</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>ViewAttendents" style="font-size: 16px;">
                                    <i class="fa fa-plane"></i>
                                    <span>View Attendance</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#" >
                            <i class="fa fa-thumb-tack"></i>
                            <span>Reports</span>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="<?php echo base_url(); ?>Attendancerepo" style="font-size: 16px;">
                                        <i class="fa fa-plane"></i>
                                        <span>Attendance History</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>Studentrepo" style="font-size: 16px;">
                                        <i class="fa fa-plane"></i>
                                        <span>Student Details</span>
                                    </a>
                                </li>
                            </ul>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#" >
                            <i class="fa fa-upload"></i>
                            <span>Setup</span>
                        </a>

                    </li>
                    <?php
                        }
                        if($role == ROLE_ADMIN)
                        {
                            ?>
                            <li class="treeview">
                                <a href="<?php echo base_url(); ?>userListing">
                                    <i class="fa fa-users"></i>
                                    <span>Users</span>
                                </a>
                            </li>

                    <?php
                }
                ?>

                <?php
                if($role == ROLE_Student )
                {
                ?>
                <li class="treeview">
                    <a href="<?php echo base_url(); ?>Viewprofile" >
                        <i class="fa fa-ticket"></i>
                        <span>My Profile</span>
                    </a>
                 </li>
                    <li class="treeview">
                    <a href="<?php echo base_url(); ?>myattendents" >
                        <i class="fa fa-ticket"></i>
                        <span>Attendance History</span>
                    </a>
                </li>
                    <?php
                }
                ?>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>