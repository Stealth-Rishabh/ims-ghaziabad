<?php
include'loginQuery/session_start.php'; 
include'dbc.php';
$pageTitle="Add a new Franchise and other attributes";
$pageName="Franchise Name";
$linkName="All Franchise";
$tableName="tbl_franchise";
$listPageUrl="franchise-list.php";
if(isset($_GET['m21']))              
  {
      $getotpid=$_GET['otpid']; 
      $query2=mysqli_query($conn,"select * from tbl_franchiseotp where otpid='$getotpid'") or die(mysqli_error());

      $rw2=mysqli_fetch_assoc($query2);
      $otp1=$rw2['otp'];
      $mobilenum=$rw2['mobile_number'];                            
   }
   
else
{
    $mobilenum="";$otp1="";$mobilenum="";$getotpid="";
} 
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
     <link rel="stylesheet" href="vendor/select2-3.5.2/select2.css" />
    <link rel="stylesheet" href="vendor/select2-bootstrap/select2-bootstrap.css" />
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
        $cityidAry = explode(',',$city_id);
        $mode="editFranchise";
        $btnname="Update";
    }
    else
    {
        $id                ="";
        $name              ="";
        $address ="";
        $mobile     ="";
        $pincode="";
        $address="";
        $otp="";
        $password    ="";
         $status  ="1";
         $city_id              ="";
         $email="";

        
        
        
        $mode="addFranchise";
        $idd="";
        $btnname="Save Franchise";
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
                    Add Franchise
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

                            <input type="number" class="form-control" name="txtotp" value="<?php echo $otp1 ;?>" id="otp" required readonly>

                             <input type="hidden" id="confirm_otp" value="<?php echo $otp1; ?>">
                             <input type="hidden" name="txtvendornumber" value="<?php echo $mobilenum; ?>">
                             <input type="hidden" name="txtotpid" value="<?php echo $getotpid; ?>">
                        </div>
                        <div class="form-group">
                            <label>Name *</label> 
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
                            <label>Adhar Card ( Front )</label> 
                            <input type="file" class="form-control" name="txtadharcardfront" value="<?php echo $aadharcardfront ;?>">
                            <input type="hidden"  value="<?php echo $aadharcardfront ;?>" name="pimg1">
                        </div>
                        <div class="form-group">
                            <label>Adhar Card ( Back )</label> 
                            <input type="file" class="form-control" name="txtadharcardback" value="<?php echo $aadharcardback ;?>">
                            <input type="hidden"  value="<?php echo $aadharcardback ;?>" name="pimg2">
                        </div>
                         <div class="form-group">
                            <label>Profile Photo</label> 
                            <input type="file" class="form-control" name="txtprofile" value="<?php echo $profile ;?>">
                            <input type="hidden"  value="<?php echo $profile ;?>" name="pimg3">
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="hpanel">
                <div class="panel-heading">
                    Add Address Details
                </div>
                <div class="panel-body">
                    <div class="form-group">
                            <label>City *</label> 
                            <select class="js-source-states-2 form-control" name="selcity[]">
                                <option value="">Select</option>
                                <?php
                                $sqlcity = mysqli_query($conn, "select * from tbl_city order by name") or die(mysqli_error($conn));
                                while ($rowcity = mysqli_fetch_assoc($sqlcity)) {
                                    $isSelected = "";
                                    if ($city_id == "") {
                                        $isSelected = ""; // Leave the option unselected initially
                                    } else {
                                        if (in_array($rowcity['id'], $cityidAry)) {
                                            $isSelected = "selected"; // Mark the option as selected if it matches the criteria
                                        }
                                    }
                                ?>
                                    <option <?php echo $isSelected; ?> value="<?php echo $rowcity['id']; ?>"><?php echo $rowcity['name']; ?></option>
                                <?php } ?>
                            </select>
                    </div>
                    <div class="form-group">
                            <label>Address *</label> 
                            <input type="name" class="form-control" name="txtaddress" value="<?php echo $address ;?>" required>
                    </div>
                    <div class="form-group">
                            <label>Pincode *</label> 
                            <input type="name" class="form-control" name="txtpincode" value="<?php echo $pincode ;?>" required>
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
<script src="vendor/select2-3.5.2/select2.min.js"></script>

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
  $(".js-source-states-2").select2();
 $(".js-source-states").select2();
</script>
<?php include 'message.php'; ?>
</body>
</html>