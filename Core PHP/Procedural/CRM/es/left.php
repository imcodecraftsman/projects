<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Admin Dashboard</title>
</head>

<body style="background-color: black;">
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="#">SHLOK ELECTRONICS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">SURAJ KAMOD</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="index.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Admin Panel
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="add_resistor.php"  aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>Add Resistor<span class="badge badge-success"></span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="add_capacitor.php"  aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>Add Capacitor <span class="badge badge-success"></span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="add_diode.php"  aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>Add Diode <span class="badge badge-success"></span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="add_transistor.php"  aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>Add Transistor <span class="badge badge-success"></span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="add_battery.php"  aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>Add Battery <span class="badge badge-success"></span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="add_ic.php"  aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>Add IC <span class="badge badge-success"></span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="add_led.php"  aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>Add LED <span class="badge badge-success"></span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="add_sensor.php"  aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>Add Ultrasonic Sensor <span class="badge badge-success"></span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="add_oscillator.php"  aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>Add Crystal Oscillator <span class="badge badge-success"></span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="add_mosfet.php"  aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>Add MOSFET <span class="badge badge-success"></span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="add_relay.php"  aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>Add Relay <span class="badge badge-success"></span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
   <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>