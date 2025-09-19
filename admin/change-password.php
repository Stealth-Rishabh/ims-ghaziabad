<?php
include'loginQuery/session_start.php'; 
include'dbc.php';
$pageTitle="Change Passoword";
$pageName="Change Passoword";
$linkName="Change Passoword ";
$tableName="tbl_degree";
$listPageUrl="Change Passoword";
?>
<!DOCTYPE html>
<html>
<head>
 <title><?php echo $pageName; ?> | <?php echo $companyName; ?></title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/sweetalert/lib/sweet-alert.css" />
    <!-- App styles -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="styles/style.css">
</head>
<body class="fixed-small-header light-skin fixed-navbar sidebar-scroll">
<!-- Header -->
<?php include 'includes/header.php'; ?>

<!-- Navigation -->
<?php include 'includes/sidemenu.php'; ?>
<!-- php code -->
<?php
    
    if(isset($_GET['id']))
    {
        
        $idd=$_GET['id'];
        $sql=mysqli_query($conn,"select * from $tableName where id='$idd'") or die(mysqli_error($conn));
        $row=mysqli_fetch_assoc($sql);
        extract($row);
        $mode="editDegree";
        $btnname="Update";
    }
    else
    {
        $id                ="";
        $name              ="";
        $url ="";
        $order_number      ="";
        $keyword="";
        $thumb    ="";
         $status  ="1";
         $metakeyword="";
         $wholesale="";
         $metadescription="";
         $commissionpercentage="";
            $mode="addDegree";
            $idd="";
            $btnname="Save";
            $active='';
    }
    
?> 
<!-- php code close -->
<!-- Main Wrapper -->
<div id="wrapper">

    <div class="small-header">
        <div class="hpanel">
            <div class="panel-body">
                <div id="hbreadcrumb" class="pull-right">
                    <!-- <ol class="hbreadcrumb breadcrumb">
                        <li><a href="<?php echo $listPageUrl; ?>" class="btn btn-sm btn-primary m-t-n-xs"><strong><?php echo $linkName; ?></strong></a></li>
                    </ol> -->
                </div>
                <h2 class="font-light m-b-xs">
                    <?php echo $pageTitle; ?>
                </h2>
                <small><a href="home.php">Dashboard</a></small>
            </div>
        </div>
    </div>

<div class="content">

    <div class="row">
        <div class="col-lg-6">
            <div class="hpanel">
                
               <div class="panel-body">
                                <div class="row">
                            
                                    <div class="col-xs-8">
                                        <!-- Page Form-->
                                <form action="" id="changepasswordForm">
                                    <div class="form-group">
                                <label class="control-label" for="username">Old Password</label>
                                
                                <input name="txtoldpassword" type="password" placeholder="******"  title="Please enter you Old password" required="" value="" name="oldpassword" id="username" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">New Password</label>
                                <input id="newpassword" name="txtpassword" type="password" title="Please enter your new password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Confirm Password</label>
                                <input id="confirmpassword" name="txtpassword" type="password" title="Please enter your new password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                
                            </div>
                            
                            <button  style="position:relative; height:34px;" id="loginbtn" type="submit" class="btn btn-success btn-block ">change</button>
                            
                            <!--<a class="btn btn-default btn-block" href="home.php">Back to Home</a>-->
                                </form>
                                    </div>
                                    <div class="col-xs-4">
                                    </div>
                                </div>
                                
                            </div>
                            <!--panel body end-->
            </div>
        </div>
    </form>
    </div>
    </div>
    <!-- Footer-->
    <?php include 'includes/footer.php'; ?>

</div>

<!-- Vendor scripts -->

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