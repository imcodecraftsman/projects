<?php

    require_once 'admin/includes/init.php';

    include("includes/header.php");


        

    // if (empty($_GET['id'])) {
    //     redirect("index.php");
    // }

    $photo = Photo::find_by_id($_GET['id']);

    if (isset($_POST['submit'])) {

        $author = trim($_POST['author']);
        $body = trim($_POST['body']);

        $new_comment = Comment::create_comment($photo->id,$author,$body);

        if ($new_comment && $new_comment->save()) {
            redirect("photos.php?id=$photo->id");    
        }else{
            $message = "There was some problem saving.";
        }

    }else{
        unset($author);
        unset($body);
    }


    $comments = Comment::find_the_comments($photo->id);

?>
        <div class="row">

            <div class="col-lg-12">

                <!-- Blog Post -->

                <!-- Title -->
                <h1><?php echo $photo->title;  ?></h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">Atish Jaiwal</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="admin/<?php echo $photo->picture_path();  ?>" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $photo->caption;  ?></p>
                <p><?php echo $photo->description;  ?></p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" method="post" >
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" name="author" class="form-control" placeholder="Enter Author">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="body"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <?php  

                    foreach ($comments as $comment) {
                        
                ?>
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment->author;?>
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        <?php echo $comment->body;?>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>
<!--             <div class="col-md-4">
                <?php //include("includes/sidebar.php"); ?>
            </div>
 -->
<br>
<br>
<?php include("includes/footer.php"); ?>