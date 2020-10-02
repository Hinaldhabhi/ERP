<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/zircos/layouts/horizontal/page-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Sep 2020 05:17:21 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Login | Nik Tech Solution Admin Dashboard</title>
        <?php include_once('include/headerscript.php');?>

    </head>

    <body>

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="text-center account-logo-box">
                                <div class="mt-2 mb-2">
                                    <a href="dashboard.php" class="text-success">
                                        <span><img src="assets/images/logo.png" alt="" height="36"></span>
                                    </a>
                                </div>
                            </div>

                            <div class="card-body">

                                <form action="#">

                                    <div class="form-group">
                                        <input class="form-control" type="text" id="username" placeholder="Username">
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" type="password" id="password" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox checkbox-success">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group text-center mt-4 pt-2">
                                        <div class="col-sm-12">
                                            <a href="page-recoverpw.php" class="text-muted"><i class="fa fa-lock mr-1"></i> Forgot your password?</a>
                                        </div>
                                    </div>

                                    <div class="form-group account-btn text-center mt-2">
                                        <div class="col-12">
                                            <button class="btn width-md btn-bordered btn-danger waves-effect waves-light" type="submit"><a href="dashboard.php">Log In</a></button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-5">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted">Don't have an account? <a href="page-register.php" class="text-primary ml-1"><b>Sign Up</b></a></p>
                            </div>
                        </div>

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

         <?php include_once('include/footerscript.php');?>

    </body>


<!-- Mirrored from coderthemes.com/zircos/layouts/horizontal/page-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Sep 2020 05:17:21 GMT -->
</html>