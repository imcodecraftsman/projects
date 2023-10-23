<?php 
use App\Models\UserModel;
$Usermodel = new \App\Models\UserModel;
if (session()->get('logged_in')) {
    $UserFullName = $Usermodel->getUserFullName(session()->get('user_id'));
}else{
    $UserFullName = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>CI-4 Demo Application</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url(); ?>/node_modules/metismenu/dist/metisMenu.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>/node_modules/bootstrap/dist/css/startmin.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>
        <style type="text/css">
            #userRegistrationForm{
                margin-bottom: 24px;
                display: none;
            }
            
            .multiple-select-ul {
              list-style-type: none;
            }

            .multiple-select-ul li {
              display: inline-block;
            }

            input[type="checkbox"][id^="cb"] {
              display: none;
            }

            .label {
              border: 1px solid #fff;
              display: block;
              position: relative;
              cursor: pointer;
            }

            .label:before {
              background-color: white;
              color: white;
              content: " ";
              display: block;
              border-radius: 50%;
              border: 1px solid grey;
              position: absolute;
              top: -5px;
              left: -5px;
              width: 25px;
              height: 25px;
              text-align: center;
              line-height: 28px;
              transition-duration: 0.4s;
              transform: scale(0);
            }

            .label img {
              height: 150px;
              width: 150px;
              transition-duration: 0.2s;
              transform-origin: 50% 50%;
            }

            :checked + .label {
              border: 1px solid #337ab7;
              border-radius: 10px;
            }

            :checked + .label:before {
              content: "✓";
              background-color: #337ab7;
              transform: scale(1);
              z-index: 1;
            }

            :checked + .label img {
              transform: scale(0.9);
              box-shadow: 2px 2px 5px 5px #c9c9c9d6;
              z-index: -1;
              border-radius: 10px;
            }


        </style>
</head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>/admin">CI-4 Demo</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo $UserFullName; ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>/login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>/admin" class="<?= (current_url() != base_url('/admin')) ? '' : 'active';?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>/ragistration" class="<?= (current_url() != base_url('/ragistration')) ? '' : 'active';?>"><i class="fa fa-table fa-fw"></i> Ragistration</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>