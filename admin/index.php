<?php 
session_start();// Starting Session
include'dbc.php';
if(isset($_SESSION['username'])){
header('Location: home.php'); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title><?php echo $companyName;?> - Administration Area</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" type="image/ico" href="../for-favicon.png" />

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />
    

    <link rel="stylesheet" href="vendor/toastr/build/toastr.min.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/static_custom.css">

</head>
<body class="blank" style="background-size: cover;background-color:#131e2c">


<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="color-line"></div>


<div class="login-container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center m-b-md">
                <h3 style="font-weight: 400;padding: 5px;"><img src="../public/frontend/images/IMS-logo.webp" style="width: 45%;"></h3>
                <small style="color: white">Login to Admin Console</small>
            </div>
            <div class="hpanel">
                <div class="panel-body">
                        <form action="" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input name="txtuseremail" type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                                <span class="help-block small">Your unique username</span>
                                
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input name="txtpassword" type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                 <span class="help-block small">Yur strong password</span>
                                
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" class="i-checks" checked>
                                     Remember login
                                <p class="help-block small">(if this is a private computer)</p>
                            </div>
                            
                            <button id="loginbtn" type="submit" class="btn btn-primary btn-block" style="background-color:#1B5A90 !important">Login</button>
                            
                            <!-- <a class="btn btn-default btn-block" href="forgot-password.php">Forget</a> -->
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Vendor scripts -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="vendor/iCheck/icheck.min.js"></script>
<script src="vendor/sparkline/index.js"></script>

<script src="vendor/toastr/build/toastr.min.js"></script>

<!-- App scripts -->
<script src="scripts/homer.js"></script>
<script src="js/custum.js"></script>


</body>
</html>