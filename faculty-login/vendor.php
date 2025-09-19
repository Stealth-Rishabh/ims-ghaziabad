<?php
include'loginQuery/session_start.php'; 
include'dbc.php';
$pageTitle="Add a new Vendor and other attributes";
$pageName="Vendor Name";
$linkName="All Vendor";
$tableName="tbl_Vendor";
$listPageUrl="vendor-list.php";
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
     <link rel="stylesheet" href="vendor/toastr/build/toastr.min.css" />
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
        $mode="editVendor";
        $btnname="Update";
    }
    else
    {
        $id                ="";
        $name              ="";
        $address ="";
        $mobile     ="";
        $otp="";
        $password    ="";
         $status  ="1";
         $businessname ="";
         $businessaddress="";
         $category_id              ="";
         $email="";

        
        
        
        $mode="addVendor";
        $idd="";
        $btnname="Save Vendor";
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
                    Add Venodr
                </div>
                <div class="panel-body">
                    <form role="form" id="form" action="dataQuery/process.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="action" value="sendOtp"/>
                     <div class="form-group">
                             <div class="row">
                               <div class="col-lg-8">
                                    <label>Mobile Number *</label> 
                                    <input type="number"  class="form-control" name="txtnumber" value="<?php echo $mobilenum ;?>" required>
                               </div>
                               <div class="col-lg-4">
                                    <br><br>
                                    <button class="btn btn-sm btn-success m-t-n-xs" id="sendOtp" type="submit"><strong>Send OTP</strong></button>
                               </div>
                              </div>
                              <?php
                                 if(isset($_GET['m21']))              
                                {
                                   echo "<p style='color: green;font-weight: 600;'>OTP Send Successfully.</p>";
                                }
                                elseif (isset($_GET['m23'])) {
                                    echo "<p style='color: red;font-weight: 600;'>Mobile Number already exists.</p>";
                                }
                              ?>
                              
                     </div>
                    </form>    
                </div><br>
                <div class="panel-body">
                    <form role="form" id="form" action="dataQuery/process.php" method="post" enctype="multipart/form-data">
                         <input type="hidden" name="action" value="<?php echo $mode;?>"/>
                         <input type="hidden" id="getid" name="txtid" value="<?php echo $id;?>"   />
                        <div class="form-group">
                            <label>OTP *</label> <span id="error" style="float: right;font-size: 12px;"></span>

                            <input type="number" class="form-control" name="txtotp" value="<?php echo $otp ;?>" id="otp" required>

                             <input type="hidden" id="confirm_otp" value="<?php echo $otp1; ?>">
                             <input type="hidden" name="txtvendornumber" value="<?php echo $mobilenum; ?>">
                             <input type="hidden" name="txtotpid" value="<?php echo $getotpid; ?>">
                        </div>
                        <div class="form-group">
                            <label>Vendor Name *</label> 
                            <input type="name"   class="form-control" name="txtname" value="<?php echo $name ;?>" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label> 
                            <input type="name" class="form-control" name="txtemail" value="<?php echo $email ;?>">
                        </div>
                         <div class="form-group">
                            <label>Password *</label> 
                            <input type="name" class="form-control" name="txtpassword" value="<?php echo $password ;?>" required>
                        </div>
                        <div class="form-group">
                            <label>Adhar Card</label> 
                            <input type="file" class="form-control" name="txtadharcard" value="<?php echo $aadharcard ;?>">
                            <input type="hidden"  value="<?php echo $aadharcard ;?>" name="pimg1">
                        </div>
                        <div class="form-group">
                            <label>GST / MSME</label> 
                            <input type="file" class="form-control" name="txtgst" value="<?php echo $gst ;?>">
                            <input type="hidden"  value="<?php echo $gst ;?>" name="pimg2">
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="hpanel">
                <div class="panel-heading">
                    Add Business Details
                </div>
                <div class="panel-body">
                    <div class="form-group">
                            <label>Business Category *</label> 
                            <select name="selcategory" class="form-control" required>
                                <option value="">Select</option>
                                <?php $sql=mysqli_query($conn,"select * from tbl_category order by name ")or die(mysqli_error($conn));
                                while($row=mysqli_fetch_assoc($sql))
                                {?>
                                <option <?php if($category_id==$row['id']){ echo 'selected';}?> value="<?php echo $row['id'];?>"><?php echo $row['name']; ?></option>
                            <?php }?>
                            </select>
                    </div>
                    <div class="form-group">
                            <label>Business Name *</label> 
                            <input type="name" class="form-control" name="txtbusinessname" value="<?php echo $businessname ;?>" required>
                    </div>
                    <div class="form-group">
                            <label>Business Address *</label> 
                            <input type="name" class="form-control" name="txtbusinessaddress" value="<?php echo $businessaddress ;?>" required>
                    </div>
                        <br><br>
                     <div>
                            <button class="btn btn-sm btn-primary m-t-n-xs submitbtn" type="submit"><strong>Submit</strong></button>
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
<script>
    // otp send
 $(document).on('click', '#sendOtp', function(){ 
    alert("button is clicked");
});
// otp send close
</script>
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
<script src="vendor/toastr/build/toastr.min.js"></script>
<script src="scripts/homer.js"></script>
<script src="scripts/charts.js"></script>
<script src="js/custum.js"></script>
<script>
  $(document).ready(function(){
    
     $('#otp, #confirm_otp').on('keyup', function () {
        
       if ($('#otp').val() == $('#confirm_otp').val()) 
       {
          $('#error').html('Valid OTP').css('color', 'green');
       } 
       else 
          $('#error').html('*invalid OTP !').css('color', 'red');
       });

  });
</script>
<?php include 'message.php'; ?>
</body>
</html>