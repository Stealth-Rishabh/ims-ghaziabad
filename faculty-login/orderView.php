<?php 
include'loginQuery/session_start.php';
include'dbc.php';
$pageTitle="Order List";
$pageName="Order List";
 date_default_timezone_set("Asia/Kolkata");
$dt= date('d/m/Y', time());
$oid=$_GET['oid'];

$q1=mysqli_query($conn,"select * from view_user_order_details where orderId='$oid'");
$pl=mysqli_fetch_array($q1);
$customerid=$pl['customerid'];
extract($pl);

$vendorid=$_GET['vendorid'];
$sqlvendor=mysqli_query($conn,"select * from tbl_vendor where vendorid='$vendorid'");
$vendordata=mysqli_fetch_array($sqlvendor);
$vendorname=$vendordata['vendor_name'];
$vendorid=$vendordata['vendorid'];

$sqlC=mysqli_query($conn,"select * from tbl_registration") or die(mysqli_error($conn));
while($rows=mysqli_fetch_assoc($sqlC)){
    $userNameAry[$rows['id']]=$rows['name'];
    $userMobileAry[$rows['id']]=$rows['mobile'];
    // $userEmailAry[$rows['id']]=$rows['email'];
}

 $sqlS=mysqli_query($conn,"select * from tbl_shipping_address") or die(mysqli_error($conn));
while($rows=mysqli_fetch_assoc($sqlS)){
    $useraddressAry[$rows['id']]=$rows['address'];
    $userdelinstructionAry[$rows['id']]=$rows['delinstruction'];
}

$sqlP=mysqli_query($conn,"select * from tbl_product") or die(mysqli_error($conn));
while($rows=mysqli_fetch_assoc($sqlP)){
    $productImageAry[$rows['productid']]=$rows['image1'];
    $productNameAry[$rows['productid']]=$rows['productname'];
     $productSkuAry[$rows['productid']]=$rows['skucode'];
}
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title><?php echo $pageName; ?> | <?php echo $companyName; ?></title>
    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/datatables.net-bs/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/toastr/build/toastr.min.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/static_custom.css">

</head>
<body class="fixed-small-header light-skin fixed-navbar sidebar-scroll">


<!-- Header -->
<!-- Header -->
<?php include 'includes/header.php'; ?>
<!-- Navigation -->
<?php include 'includes/sidemenu.php'; ?>

<!-- Main Wrapper -->
<div id="wrapper">

    <div class="small-header">
        <div class="hpanel">
            <div class="panel-body">
                <h2 class="font-light m-b-xs">
                     <h4>ORDER DETAIL</h4>
                </h2>
                <small><a href="home.php">Dashboard</a></small>
            </div>
        </div>
    </div>

<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-body p-xl">
                    <div class="row m-b-xl">
                        <div class="col-sm-6">
                           

                            <address>
                               <h4>VENDOR NAME : <?php echo $vendorname; ?></h4>
                                 <h5>VENDOR ID : <?php echo $vendorid; ?></h5>
                            </address>
                        </div>
                        <div class="col-sm-6 text-right">
                            <h4>Shipping Details:</h4>
                            <address>
                                <strong><?php echo $userNameAry[$customerid];?></strong><br>
                                <?php echo $useraddressAry[$address];?><br><b>Nearby :</b> <?php echo $userdelinstructionAry[$address];?><br>
                                <abbr title="Phone"><i class="fa fa-phone" aria-hidden="true"></i></abbr> <?php echo $userMobileAry[$customerid];?>
                            </address>
                            <p>
                                <span><strong>Order Date:</strong><?php echo $pl['orderDate']; ?></span><br/>
                                <span><strong>Payment Method:</strong> <?php echo $pl['paymentType']; ?></span>
                            </p>
                        </div>
                    </div>

                    <div class="table-responsive m-t">

                                 <table class="table table-striped">
                    <tr>
                      <th colspan="8">
                        <center>
                          <h3><strong>Order Detail</strong></h3>
                        </center>
                      </th>
                    </tr>
                    <tr>
                      <th>Sr.No.</th>
                      <th>Product Image</th>
                      <th>SKU CODE</th>
                      <th>Product</th>
                      <th>Unit</th>
                      <th>Price</th>
                      <th>Qty</th>
                      <th>Total</th>
                    </tr>
              
                    <?php
                       $i=1;
                      $oid=$_GET['oid'];
                      $invoice=$_GET['invoice'];
                      $vendorid=$_GET['vendorid'];
                       $sql=mysqli_query($conn,"select * from view_user_order_details where orderId='$oid' and detailsorder_id='$invoice' and vendorid='$vendorid'")or die(mysqli_error());
                while($data=mysqli_fetch_assoc($sql))
                { 
                  extract($data);

                   $pprice+=$price*$quanitity;
                ?>
                    <tr>
                  

                      <td><?php echo $i++; ?></td>
                      <td><a href="" target="_blank"><img height="50" width="50" src="../media/product/<?php echo $productImageAry[$product_id];?>"></a></td> 
                      <td><?php echo $productSkuAry[$product_id];?></td>
                      <td><?php echo $productNameAry[$product_id];?></td>
                      <td><?php echo $unit;?></td>
                      <td>₹ <?php echo $price; ?></td>
                      <td><?php echo $quanitity; ?></td>
                      <td>₹ <?php echo $price*$quanitity; ?></td>
                    </tr>
                    <?php
                      }
                    ?>
                 
                    <tr>
                      <th colspan="7">Total</th>
                      <th>₹ <?php echo $pprice; ?></th>
                    </tr>
        

                  </table>
                    </div>
                   

                   

                </div>
            </div>

        </div>
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
<script src="vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="vendor/iCheck/icheck.min.js"></script>
<script src="vendor/sparkline/index.js"></script>
<!-- DataTables -->
<script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- DataTables buttons scripts -->
<script src="vendor/pdfmake/build/pdfmake.min.js"></script>
<script src="vendor/pdfmake/build/vfs_fonts.js"></script>
<script src="vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="vendor/toastr/build/toastr.min.js"></script>
<!-- App scripts -->
<script src="scripts/homer.js"></script>

<?php include 'message.php'; ?>
<script>


    $(function () {
        // Initialize Example 2
        $('#example1').dataTable();

    });

</script>
<link rel="stylesheet" href="vendor/sweetalert/lib/sweet-alert.css" />
<script src="vendor/sweetalert/lib/sweet-alert.min.js"></script>
    <script>

   $(document).on('click','.demo3',function(){
        var path=$(this).attr('path');

            swal({
                        title: "Are you sure?",
                        text: "Your will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!"
                    },
                    function () {
                        window.location.href=path
                    });
    });

</script>

</body>
</html>