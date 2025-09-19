<?php
include'loginQuery/session_start.php'; 
include'dbc.php';
$pageTitle="Add a Invoice and other attributes";
$pageName="Invoice";
$linkName="All Invoice";
$tableName="tbl_invoice";
$listPageUrl="invoice-list.php";
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
        $mode="editInvoice";
        $btnname="Update";
    }
    else
    {
        $vendor_id                ="";
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
            $mode="addInvoice";
            $idd="";
            $btnname="Save";
            $active='';
    }
    
?> 
<!-- php code close -->
<!-- Main Wrapper -->
<div id="wrapper">

    <div class="small-header">
        <div class="hpanel" style="margin-top: 28px;">
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
                    Add Invoice Detail
                </div>
                <div class="panel-body">
                    <form role="form" id="form" action="dataQuery/process.php" method="post" enctype="multipart/form-data">
                         <input type="hidden" name="action" value="<?php echo $mode;?>"   />
                         <input type="hidden" id="getid" name="txtid" value="<?php echo $id;?>"   />
                        <div class="form-group">
                            <label>Vendor Name *</label> 
                            <select name="selvendor" class="form-control" required>
                                <option value="">Select Vendor</option>
                                <?php $sql=mysqli_query($conn,"select * from tbl_vendor where status='1' order by vendor_name")or die(mysqli_error($conn));
                                while($row=mysqli_fetch_assoc($sql))
                                {?>
                                <option <?php if($vendor_id==$row['id']){ echo 'selected';}?> value="<?php echo $row['id'];?>"><?php echo $row['vendor_name']; ?></option>
                            <?php }?>
                            </select>
                        </div>
                
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="hpanel">
                <div class="panel-heading">
                    Plan Details *
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Plan Type *</label> 
                <select name="selplan" class="form-control">
                <option value="<?php echo $plan ;?>" selected><?php echo $plan ;?></option>
                <option value="Silver 2 Months">Silver 2 Months</option>
                <option value="Gold 6 Months">Gold 6 Months</option>
                
            </select>
                    </div> 
                    <div class="form-group">
                        <label>Before Discount Amount *</label> 
                        <input type="name" class="form-control" id="beforeDiscount" oninput="calculateDiscount()" name="txtbeforeamount" value="<?php echo $beforeamount ;?>" required>
                    </div> 
                     <div class="form-group">
                        <label>Discount (%) *</label> 
                        <input type="number" class="form-control" id="discount" oninput="calculateDiscount()" name="txtdiscount" value="<?php echo $discount ;?>" required>
                    </div>
                    <div class="form-group">
                        <label>After Discount Amount *</label> 
                        <input type="name" readonly class="form-control" name="txtafteramount" id="afterDiscount" value="<?php echo $afteramount ;?>" required>
                    </div>
                    
                     <div class="form-group">
                        <label>Start Date *</label> 
                        <input type="date"  class="form-control" name="txtstartdate" value="<?php echo $startdate ;?>" required>
                    </div> 
                    <div class="form-group">
                        <label>End Date *</label> 
                        <input type="date" class="form-control" name="txtenddate" value="<?php echo $enddate ;?>" required>
                    </div>
                    <div class="form-group">
                        <label>Payment Mode *</label> 
                         <select name="paymentmode" class="form-control">
                        <option value="<?php echo $paymentmode ;?>" selected><?php echo $paymentmode; ;?></option>
                        <option value="COD">COD</option>
                        <option value="Online Payment">Online Payment</option>
                
                        </select>
                    </div> 
                    
                    
                    <br>
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
<script>
    function calculateDiscount() {
      var beforeDiscount = parseFloat(document.getElementById('beforeDiscount').value);
      var discount = parseFloat(document.getElementById('discount').value);
      
      var afterDiscount = beforeDiscount - (beforeDiscount * (discount / 100));
      
      document.getElementById('afterDiscount').value = afterDiscount.toFixed(2);
    }
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
<script src="scripts/homer.js"></script>
<script src="scripts/charts.js"></script>
<script src="js/custum.js"></script>

</body>
</html>