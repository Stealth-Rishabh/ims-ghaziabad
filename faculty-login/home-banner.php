<?php
include'loginQuery/session_start.php'; 
include'dbc.php';
$pageTitle="Add a new Home Banner and other attributes";
$pageName="Home banner";
$linkName="All Banner";
$tableName="tbl_home_banner";
$listPageUrl="home-banner-list.php";
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
        $mode="editHomebanner";
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
         $link="";
         $metakeyword="";
         $metadescription="";
         $commissionpercentage="";
            $mode="addHomebanner";
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
                    <ol class="hbreadcrumb breadcrumb">
                        <li><a href="<?php echo $listPageUrl; ?>" class="btn btn-sm btn-primary m-t-n-xs"><strong><?php echo $linkName; ?></strong></a></li>
                    </ol>
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
                <div class="panel-heading">
                    Add Banner
                </div>
                <div class="panel-body">
                    <form role="form" id="form" action="dataQuery/process.php" method="post" enctype="multipart/form-data">
                         <input type="hidden" name="action" value="<?php echo $mode;?>"   />
                         <input type="hidden" id="getid" name="txtid" value="<?php echo $id;?>"   />
                        <div class="form-group">
                            <label>Name *</label> 
                            <input type="name" id="applicationname"  class="form-control" name="txtname" value="<?php echo $name ;?>" required>
                        </div>
                         <div class="form-group">
                            <label>Order Number *</label> 
                            <input type="number" class="form-control" name="txtorder" value="<?php echo $order_number ;?>" required>
                        </div>
                        <div class="form-group">
                                    <input type="checkbox" id="name" name="txtstatus" <?php 
                        if($status==1){ echo "checked";} ?>>
                         <label for="name">Active </label>   
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="hpanel">
                <div class="panel-heading">
                    Add Feature Image *
                </div>
                <div class="panel-body">
                    <div id="brandimageprv1" class="img-content-size-1 common-fram ">
                    <?php if($thumb!=""){?>
                        <img src="../media/banner/thumb/<?php echo $thumb?>"/>
                    <?php }?>
                    </div>
                    <input class="textbox brand-img1" type="file" name="image1fleimage" > <br>
                    <ul>
                        <li>Recomended image size 1920 x 857 px </li>
                        <li>Image format must be jpg or jpeg</li>     
                    </ul> <br><br>

                     <div>
                            <button class="btn btn-success btn-sm submitbtn" type="submit"><strong>Submit</strong></button>
                     </div>
                </div>

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