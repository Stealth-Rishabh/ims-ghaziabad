<?php 
include'loginQuery/session_start.php';
include'dbc.php';
$pageTitle="List of Vendor";
$pageName="Vendor List";
$linkName="Add Vendor";
$tableName="tbl_vendor";
$addPageUrl="vendor.php";
$deleteMode="deleteVendor";
$getvendorid=$_GET['vendorid'];
$sqlvendor=mysqli_query($conn,"select * from tbl_vendor where vendorid='$getvendorid'")or die(mysqli_error());
$rowvendor=mysqli_fetch_assoc($sqlvendor);
extract($rowvendor);

$sqlC=mysqli_query($conn,"select * from tbl_category") or die(mysqli_error($conn));
while($rows=mysqli_fetch_assoc($sqlC)){
    $categoryNameAry[$rows['id']]=$rows['name'];
}
$sqlCS=mysqli_query($conn,"select * from tbl_subcategory") or die(mysqli_error($conn));
while($rowsc=mysqli_fetch_assoc($sqlCS)){
    $subcategoryNameAry[$rowsc['id']]=$rowsc['name'];
}
$sqlCity=mysqli_query($conn,"select * from tbl_city") or die(mysqli_error($conn));
while($rowscity=mysqli_fetch_assoc($sqlCity)){
    $cityNameAry[$rowscity['id']]=$rowscity['name'];
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
                   View Vendor Detail
                </h2>
                <small><a href="home.php">Dashboard</a></small>
            </div>
        </div>
    </div>

<div class="content">



    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-body">
                <table class="table table-striped table-bordered table-hover">
             
                 <tr>
                    <th>Vendor ID</th>
                    <th><?php echo $vendorid; ?></th>
                </tr>   
                <tr>
                    <th>Name</th>
                    <td><?php echo $rowvendor['name'];?></td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td><?php echo $number; ?></td>
                </tr>
                 <tr>
                    <th>Email</th>
                    <td><?php echo $email; ?></td>
                </tr>
                 <tr>
                    <th>Business Category</th>
                    <td><?php echo $categoryNameAry[$category_id];?> / <?php echo $subcategoryNameAry[$sub_category_id];?></td>
                </tr>
                <tr>
                    <th>Registration Date</th>
                    <td><?php echo $date;?></td>
                </tr>
                 <tr>
                    <th>Business Name</th>
                    <td><?php echo $businessname;?></td>
                </tr>
                 <tr>
                    <th>City</th>
                    <td><?php echo $cityNameAry[$city];?></td>
                </tr>
      
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