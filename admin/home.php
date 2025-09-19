<?php include 'loginQuery/session_start.php'; 
 include 'dbc.php';
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>Admin Dashboard | <?php echo $companyName; ?></title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="styles/style.css">
<style>
    .full .progress-bar-primary {
    background-color: #34495E !important;
    border-right: 4px solid #171d22 !important;
}
.full .progress-bar-orange {
    background-color: orange !important;
    border-right: 4px solid darkorange !important;
}
.full .progress-bar-deeppink {
    background-color: deeppink !important;
    border-right: 4px solid #a51b66 !important;
}
.full .progress-bar-purple { 
    background-color: purple !important;
    border-right: 4px solid #d075d0 !important;
}

.full .progress-bar-dodgerblue { 
    background-color: dodgerblue !important;
    border-right: 4px solid #163c61 !important;
}

.full .progress-bar-black { 
    background-color: black !important;
    border-right: 4px solid grey !important;
}
.font-extra-bold{
        font-size: 18px !important;
}


</style>
</head>
<body class="light-skin fixed-navbar sidebar-scroll ">

<!-- Header -->
<?php include 'includes/header.php'; ?>

<!-- Navigation -->
<?php include 'includes/sidemenu.php'; 

?>

<!-- Main Wrapper -->
<div id="wrapper">

    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="hpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Dashboard information and statistics
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                
                              <img src="images/dashboard.jpg" style=";height: auto;width: auto;">
                            </div>
                            

                        </div>
                    </div>

                </div>
            </div>
        </div>
   
         <div class="row">
<!-- new code -->  
            

 <!-- new code close-->               
         
        </div>
    </div>

    <!-- Footer-->
   <?php include 'includes/footer.php'; ?>

</div>

<!-- Vendor scripts -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendor/jquery-flot/jquery.flot.js"></script>
<script src="vendor/jquery-flot/jquery.flot.resize.js"></script>
<script src="vendor/jquery-flot/jquery.flot.pie.js"></script>
<script src="vendor/flot.curvedlines/curvedLines.js"></script>
<script src="vendor/jquery.flot.spline/index.js"></script>
<script src="vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="vendor/iCheck/icheck.min.js"></script>
<script src="vendor/peity/jquery.peity.min.js"></script>
<script src="vendor/sparkline/index.js"></script>

<!-- App scripts -->
<script src="scripts/homer.js"></script>
<script src="scripts/charts.js"></script>
<script src="js/custum.js"></script>

</body>
</html>