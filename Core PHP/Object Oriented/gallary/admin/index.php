<?php 
        include("includes/header.php"); 
       (!$session->is_signed_in()) ? redirect("login.php") : "" ;
?>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php  include("includes/top_nav.php"); ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php  include("includes/side_nav.php"); ?>
        </nav>

        <div id="page-wrapper">
            <?php  include("includes/admin_content.php"); ?>
        </div>
        <!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>

<!-- $source = $_GET['source'];
                switch ($source) {
                    case 'index':
                        include("index.php"); 
                        break;
                    case 'users':
                        include("users.php"); 
                        break;
                    case 'upload':
                        include("upload.php"); 
                        break;
                    case 'photos':
                        include("photos.php"); 
                        break;
                    case 'comments':
                        include("comments.php"); 
                        break;
                    default:
                       include("index.php"); 
                        break;
                } -->