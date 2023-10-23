<?php include_once 'Lheader.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <?= form_open('/Login/login'); ?>
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter Username" name="username" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                             <button type="submit" class="btn btn-md btn-primary btn-block">Signin</button>
                        </fieldset>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'Lfooter.php'; ?>

