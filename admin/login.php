<?php
session_start();

require '../conn.php';
$msg = "";

if(isset($_SESSION['admin']) && isset($_SESSION['admin_id'])){
     echo " <script>
        window.location.href='index';
        </script>";

}


if(isset($_POST['login'])){
    

    $username = mysqli_real_escape_string($con,$_POST['username']);
     $password = mysqli_real_escape_string($con,$_POST['password']);

     $sql = "SELECT * FROM users WHERE username = '$username' && password = '$password'";
     $result = mysqli_query($con,$sql);
     if($result){
        if(mysqli_num_rows($result)==1){
           // session_start();

            while($row = mysqli_fetch_array($result)){

                 $_SESSION['admin_id'] = $row['id'];
             $_SESSION['admin'] =$row['username'];
               $_SESSION['admin_id'];
                $_SESSION['admin'];

       echo " <script>
        window.location.href='admin';
        </script>";
            }


        }else{

            $msg = "Account not found";

        }


     }else{
        $msg = mysqli_error($con);

     }


}

?>

<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/simple/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2022 03:39:10 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

    </head>

    <body>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-4 mt-3">
                                    <a href="index.html">
                                        <span><img src="assets/images/logo-dark.png" alt="" height="30"></span>
                                    </a>

                                </div>
                                <form  class="p-2" method="POST">
                                    <div> <p style="color: red"><?php echo $msg ?></p></div>
                                    <div class="form-group">
                                        <label for="emailaddress">Username</label>
                                        <input class="form-control" type="text" id="" required="" name="username" placeholder="username">
                                    </div>
                                    <div class="form-group">
                                        <a href="page-recoverpw.html" class="text-muted float-right">Forgot your password?</a>
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" name="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-4 pb-3">
                                        <div class="custom-control custom-checkbox checkbox-primary">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <button name="login" class="btn btn-primary btn-block" type="submit"> Sign In </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                       <!--  <div class="row mt-4">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted mb-0">Don't have an account? <a href="pages-register.html" class="text-dark ml-1"><b>Sign Up</b></a></p>
                            </div>
                        </div> -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>


<!-- Mirrored from coderthemes.com/simple/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2022 03:39:11 GMT -->
</html>