
<?php  

    include "includes/header.php";


    if (!ifItIsMethod('get') && !isset($_GET['forgot'])) {
        redirect('index');
    }

    if (ifItIsMethod('post')) {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $length = 50;
            $tokan = bin2hex(openssl_random_pseudo_bytes($length));

            if (email_exists($email)) {
               $update_qry = mysqli_prepare($conn,"UPDATE users SET tokan = '{$tokan}' WHERE user_email = ?");
               mysqli_stmt_bind_param($update_qry,"s",$email);
               mysqli_stmt_execute($update_qry);
               mysqli_stmt_close($update_qry);
            }

        }
    }
    



?>


<!-- Page Content -->
<div class="container">

    <div class="form-gap"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">


                                <h3><i class="fa fa-lock fa-4x"></i></h3>
                                <h2 class="text-center">Forgot Password?</h2>
                                <p>You can reset your password here.</p>
                                <div class="panel-body">




                                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                                <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input name="recover-submit" class="btn btn-md btn-primary btn-block" value="Reset Password" type="submit">
                                        </div>

                                        <input type="hidden" class="hide" name="token" id="token" value="">
                                    </form>

                                </div><!-- Body-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <hr>

    <?php include "includes/footer.php";?>

</div> <!-- /.container -->

