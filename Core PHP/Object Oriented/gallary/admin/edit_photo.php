<?php include("includes/header.php"); 
    
    if (!empty($_GET['id'])) {
        
        $photo = Photo::find_by_id($_GET['id']);

        if (isset($_POST['update'])) {

            if ($photo) {

                $photo->title = $_POST['title'];
                $photo->caption = $_POST['caption'];
                $photo->alternate_text = $_POST['alternate_text'];
                $photo->description = $_POST['description'];

                $photo->save();

            }


        }


    }else{

        redirect("photos.php");
    }
    

?>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php  include("includes/top_nav.php"); ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php  include("includes/side_nav.php"); ?>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Photos
                            <small>Subheading</small>
                        </h1>
                        <!-- <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol> -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control" placeholder="Enter Photo Title" value="<?php  echo $photo->title; ?>">
                                </div>
                                <div class="form-group">
                                    <a href="#"  class="thumbnail" ><img src="<?php echo $photo->picture_path(); ?>"></a>
                                </div>
                                <div class="form-group">
                                    <label for="caption">Caption</label>
                                    <input type="text" name="caption" class="form-control" placeholder="Enter Photo Caption" value="<?php  echo $photo->caption; ?>" >
                                </div>
                                <div class="form-group">
                                    <label for="alternate_text">Alternate Text</label>
                                    <input type="text" name="alternate_text" class="form-control" placeholder="Enter Photo Alternate Text" value="<?php echo $photo->alternate_text; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="summernote">Description</label>
                                    <textarea rows="5" id="summernote" name="description" class="form-control" placeholder="Enter Description"><?php echo $photo->description; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <div class="photo-info-box">
                                    <div class="info-box-header">
                                       <h4>Save <span id="toggle" class="glyphicon glyphicon-menu-up pull-right"></span></h4>
                                    </div>
                                    <div class="inside">
                                      <div class="box-inner">
                                         <p class="text">
                                           <span class="glyphicon glyphicon-calendar"></span> Uploaded on: April 22, 2030 @ 5:26
                                          </p>
                                          <p class="text ">
                                            Photo Id: <span class="data photo_id_box"><?php echo $photo->id; ?></span>
                                          </p>
                                          <p class="text">
                                            Filename: <span class="data"><?php echo $photo->filename; ?></span>
                                          </p>
                                         <p class="text">
                                          File Type: <span class="data"><?php echo $photo->type; ?></span>
                                         </p>
                                         <p class="text">
                                           File Size: <span class="data"><?php echo $photo->size; ?></span>
                                         </p>
                                      </div>
                                      <div class="info-box-footer clearfix">
                                        <div class="info-box-delete pull-left">
                                            <a  href="delete_photo.php?id=<?php echo $photo->id; ?>" class="btn btn-danger">Delete</a> 
                                        </div>
                                        <div class="info-box-update pull-right ">
                                            <input type="submit" name="update" value="Update" class="btn btn-success ">
                                        </div>   
                                      </div>
                                    </div>          
                              </div>
                          </div>
                        </div>
                    </form>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>


<script type="text/javascript">
    
    $(".info-box-header").click(function(){
        // if (!$(this).hasClass("active")) 
        // {
        //    $(this).addClass("active");
        //    $(this.nextElementSibling).slideUp("slow");

        // }else{

        //     $(this).removeClass("active");
        //     $(this.nextElementSibling).slideDown("slow");

        // }
           
        $(this.nextElementSibling).slideToggle("fast");
        $("#toggle").toggleClass("glyphicon-menu-down glyphicon , glyphicon-menu-up glyphicon ");

    });





</script>