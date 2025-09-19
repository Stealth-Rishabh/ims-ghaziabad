<?php 
include'loginQuery/session_start.php';
include'dbc.php';
$pageTitle="List of ";
$pageName="Order Type List";
$linkName="Add Product Type";
$tableName="tbl_producttype";
$addPageUrl="product-type.php";
$deleteMode="deleteProducttype";
 $sqlC=mysqli_query($conn,"select * from tbl_registration") or die(mysqli_error($conn));
while($rows=mysqli_fetch_assoc($sqlC)){
    $userNameAry[$rows['id']]=$rows['name'];
    $userMobileAry[$rows['id']]=$rows['mobile'];
}
$sqlS=mysqli_query($conn,"select * from tbl_shipping_address") or die(mysqli_error($conn));
while($rows=mysqli_fetch_assoc($sqlS)){
    $useraddressAry[$rows['id']]=$rows['address'];
    $userdelinstructionAry[$rows['id']]=$rows['delinstruction'];
}
$vendorid=$_GET['vendorid'];
$sqlvendor=mysqli_query($conn,"select * from tbl_vendor where vendorid='$vendorid'");
$vendordata=mysqli_fetch_array($sqlvendor);
$vendorname=$vendordata['vendor_name'];
$vendorid=$vendordata['vendorid'];
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
                <div id="hbreadcrumb" class="pull-right">
                    <ol class="hbreadcrumb breadcrumb">
                        <!--<li><a href="<?php echo $addPageUrl; ?>" class="btn btn-primary m-t-n-xs btn-sm"><strong><?php echo $linkName; ?></strong></a></li>-->
                    </ol>
                </div>
                <h2 class="font-light m-b-xs" style="text-align: center;font-size: 19px;background-color: green;color: white;padding: 11px;">
                    <?php echo $pageTitle; ?> <span style="color: yellow;"><?php echo $vendorname; ?></span> ORDER
                </h2>
                <small><a href="home.php">Dashboard</a></small>
            </div>
        </div>
    </div>

<div class="content">



    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-heading">
                    Order List
                </div>
                <div class="panel-body">
                <table id="example1" class="table table-striped table-bordered table-hover">
                <thead>
                     <tr>
              
                    <th width="20">Sr.No.</th>
                    <th>Order No</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Payable Amount</th>
                    <th width="130">Action</th>
                  </tr>
                    </tr>
                    </thead>
                <tbody>
                <?php  
                   $i=1;
                   $vendorid=$_GET['vendorid'];
                   $sql=mysqli_query($conn,"select *,Sum(price*quanitity) as 'pprice' from view_user_order_details where vendorid='$vendorid' group by orderId order by id desc")or die(mysqli_error());
                while($row=mysqli_fetch_assoc($sql))
                {
                   extract($row);
                ?>
                    <tr>
                  
                         <td><?php echo $i++; ?></td>
                        <td><?php echo $orderId;?><br><small style="font-size: 81%;"><b>Date: </b> <?php echo $orderDate;?></small></td>                       
                         <td><?php echo $userNameAry[$customerid];?></td>  
                        <td><?php echo $useraddressAry[$address];?><br><b><i class="fa fa-phone" aria-hidden="true"></i></b> <?php echo $userMobileAry[$customerid];?></td>
                        <td>Rs. <?php echo $pprice;?></td>   
                       
                      <td style="position:relative">
                      <a href="orderView.php?oid=<?php echo $orderId; ?>&invoice=<?php echo $detailsorder_id; ?>&vendorid=<?php echo  $vendorid; ?>" title="View Order"  class="btn btn btn-info"><strong><i class="fa fa-eye" aria-hidden="true"></i></strong></a>   
                   
                    </td>              
                                             
                        
                       
                    </tr>
                    <?php }?>
                    </tbody>
                </table>

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