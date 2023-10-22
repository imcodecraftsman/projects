<?php
    ob_start();
    include 'db.php';
    include 'admin/functions.php';
    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="/cms/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/cms/css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .pager li .active_link{
            background-color: #000 !important;
            color: white;
        }
    </style>
</head>

<body>
     <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/cms">CMS Front</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <?php

                        $query = "SELECT * FROM categories";
                        $query_result = mysqli_query($conn,$query);

                        while ($query_result_row = mysqli_fetch_assoc($query_result)) { 

                            $category_class = "";
                            $ragistration_class = "";
                            $registration_page = "registration.php";

                            $page_name = basename($_SERVER['PHP_SELF']);


                            if (isset($_GET['category']) &&  $_GET['category'] == $query_result_row['cat_id'] ) {
                                $category_class = "active";
                            }else if ($page_name == $registration_page)  {
                                $ragistration_class = "active";
                            }


                            echo "<li  class='$category_class' ><a href='/cms/category/{$query_result_row['cat_id']}'>{$query_result_row['cat_title']}</a></li>";

                      } ?>

                    

                    <?php 

                    if (IsLoggedIn()) { ?>

                            <li>
                                <a href="/cms/admin">Admin</a>
                            </li>

                    <?php }else{ ?>

                            <li>
                                <a href="/cms/login.php">Login</a>
                            </li>

                    <?php } ?>
                    

                    <li class="<?php echo $ragistration_class;   ?>">
                        <a href="/cms/registration">Registration</a>
                    </li>

                    <?php

                        if (isset($_SESSION['user_id'])) {
                            if (isset($_GET['p_id'])) {
                                $post_id = $_GET['p_id'];
                                echo "<li><a href='/cms/admin/posts.php?source=edit_posts&p_id=$post_id'>Edit Post</a></li>";
                            }
                        }
                    ?>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>