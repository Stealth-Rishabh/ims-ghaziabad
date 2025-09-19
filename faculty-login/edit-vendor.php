<?php
include'loginQuery/session_start.php'; 
include'dbc.php';
$pageTitle="Edit Vendor and other attributes";
$pageName="Vendor Name";
$linkName="All Vendor";
$tableName="tbl_vendor";
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
        $id                     ="";
        if(isset($_GET['cid'])){
        $category_id = $_GET['cid'];   
        }else{
            $category_id            ="";    
        }
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
         $aadharcard="";
         $gst="";

        
        
        
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
                    Edit Venodr
                </div>
                <div class="panel-body">
                    <form role="form" id="form" action="dataQuery/process.php" method="post" enctype="multipart/form-data">
                         <input type="hidden" name="action" value="<?php echo $mode;?>"/>
                         <input type="hidden" id="getid" name="txtid" value="<?php echo $id;?>"   />
                        
                        
                        <div class="form-group">
                            <label>Vendor Name *</label> 
                            <input type="name"   class="form-control" name="txtname" value="<?php echo $name ;?>" required>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number *</label> 
                            <input type="number" class="form-control" name="txtvendornumber" value="<?php echo $number ;?>" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label> 
                            <input type="name" class="form-control" name="txtemail" value="<?php echo $email ;?>">
                        </div>
                        <div class="form-group">
                            <label>City</label> 
                            <select name="selcity" class="form-control" required="">
                                <option value="">Select Color</option>
                                <?php $sqlci=mysqli_query($conn,"select * from tbl_city where status='1' order by name")or die(mysqli_error($conn));
                                while($rowci=mysqli_fetch_assoc($sqlci))
                                {?>
                                <option <?php if($city==$rowci['id']){ echo 'selected';}?> value="<?php echo $rowci['id'];?>"><?php echo $rowci['name']; ?></option>
                            <?php }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Password *</label> 
                            <input type="name" class="form-control" name="txtpassword" value="<?php echo $password ;?>" required>
                        </div> 
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="hpanel">
                <div class="panel-heading">
                    Edit Business Details
                </div>
                <div class="panel-body">
                    <div class="form-group">
                            <label>Business Category *</label> 
                            <select name="selcategory" id="cateId" class="form-control" required="">
                                <option value="">Select</option>
                                <?php $sql=mysqli_query($conn,"select * from tbl_category order by name")or die(mysqli_error($conn));
                                while($row=mysqli_fetch_assoc($sql))
                                {
                                    $cid=$row['id'];
                                    $cname=$row['name'];
                                    if($cid==$category_id)
                                        {
                                            $select="selected";
                                        }
                                    else
                                        {
                                            $select="";
                                        }
                                        echo "<option value='$cid' $select>$cname</option>";
                                }

                                ?>
                            </select>
                    </div>

                      <div class="form-group">
                            <label>Select Sub Category *</label> 
                            <select name="selsubcategory" id="subcateid" class="form-control">
                                    <option value="">Select</option>
                                    <?php 
                                    $sql=mysqli_query($conn,"select * from tbl_subcategory where category_id='$category_id' order by name")or die(mysqli_error($conn));
                                    while($row=mysqli_fetch_assoc($sql))
                                    {
                                                      $cid2=$row['id'];
                                                      $scname=$row['name'];
                                                      if($cid2==$sub_category_id)
                                                      {
                                                        $select="selected";
                                                      }
                                                      else
                                                      {
                                                        $select="";
                                                      }
                                                      echo "<option value='$cid2' $select>$scname</option>";
                                                    }
                                                  ?>
                                </select>
                        </div>
                    <div class="form-group">
                            <label>Business Name *</label> 
                            <input type="name" class="form-control" name="txtbusinessname" value="<?php echo $businessname ;?>" required>
                    </div>
                        <br><br>
                     <div>
                            <button class="btn btn-sm btn-primary m-t-n-xs submitbtn" type="submit"><strong>Update Vendor</strong></button>
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
 <script type="text/javascript">
    $(document).ready(function()
    {
        $('#cateId').on('change', function()
         {
            var v=$('#cateId').val();
            $.get("ajax-vendor.php",{vl:v},function(data){
            $("#subcateid").html(data);

            });
});
 });
  </script>
<?php include 'message.php'; ?>
</body>
</html>