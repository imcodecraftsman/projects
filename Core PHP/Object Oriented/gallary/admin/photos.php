<?php include("includes/header.php"); ?>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php  include("includes/top_nav.php"); ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php  include("includes/side_nav.php"); ?>
        </nav>
<style type="text/css">
    .admin-photo-thumbnail{
        width: 200px;
        border-radius: 10px;
    }
</style>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           All Photos
                        </h1>
                        <p class="bg-success"><?php echo $message; ?></p>
                        <!-- <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol> -->

                        <div class="col-md-12">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Id</th>
                                        <th>File Name</th>
                                        <th>Title</th>
                                        <th>Size</th>
                                        <th>Comments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

                                    $photos = Photo::find_all();

                                    foreach ($photos as $photo) { ?>
                                        <tr>
                                            <td><img class="admin-photo-thumbnail" src="<?php echo $photo->picture_path(); ?>" >
                                                <div class="pictures_link">
                                                    <a class="delete_link" href="delete_photo.php?id=<?php echo $photo->id; ?>">Delete</a>
                                                    <a href="edit_photo.php?id=<?php echo $photo->id; ?>">Edit</a>
                                                    <a href="../photo.php?id=<?php echo $photo->id; ?>">View</a>
                                                </div>
                                            </td>
                                            <td><?php echo $photo->id; ?></td>
                                            <td><?php echo $photo->filename; ?></td>
                                            <td><?php echo $photo->title; ?></td>
                                            <td><?php echo $photo->size; ?></td>
                                            <td><a href="comment_photo.php?id=<?php echo $photo->id; ?>"><?php 
                                                $photos = Comment::find_the_comments($photo->id);
                                                echo count($photos);

                                            ?></a></td>
                                        </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>