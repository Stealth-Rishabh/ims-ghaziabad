<?php 
include'loginQuery/session_start.php';
include'dbc.php';
$pageTitle="List of All De-Active Vendor";
$pageName="All De-Active Vendor List";
$linkName="Add Vendor";
$tableName="tbl_vendor";
$addPageUrl="vendor.php";
$deleteMode="deleteVendor";
$sqlC=mysqli_query($conn,"select * from tbl_category") or die(mysqli_error($conn));
while($rows=mysqli_fetch_assoc($sqlC)){
    $categoryNameAry[$rows['id']]=$rows['name'];
}
$sqlSC=mysqli_query($conn,"select * from tbl_subcategory") or die(mysqli_error($conn));
while($rowss=mysqli_fetch_assoc($sqlSC)){
    $subcategoryNameAry[$rowss['id']]=$rowss['name'];
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
                <div id="hbreadcrumb" class="pull-right">
                    <ol class="hbreadcrumb breadcrumb">
                    
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
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-heading">
                    Vendor List
                </div>
                <div class="panel-body">
                <table id="example1" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th width="20">#</th>
                    <th  width="40" >Vendor Name</th>
                    <th  width="50">Business Name</th>
                    <th width="80">Reg. Date</th>
                    <th width="80">Category</th>
                    <th  width="50">Status</th>
                     <th  width="50">View</th>
                    <th width="50">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php  
                   $i=1;
                   $sql=mysqli_query($conn,"select * from $tableName where status='0' ORDER BY id desc")or die(mysqli_error());
                while($row=mysqli_fetch_assoc($sql))
                {extract($row)
                ?>
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td><?php echo $name;?><br>
                        <?php echo $number;?></td>
                        <td><?php echo $businessname;?><br><b>Vendor ID : </b><?php echo $vendorid; ?></td>
                        <td><?php echo $registration_date;?></td>
                        <td><?php echo $categoryNameAry[$category_id];?> / <?php echo $subcategoryNameAry[$sub_category_id];?></td>
  
                         <td>
                            <center>
                             <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle btn-sm"><?php if ($status=='1'){echo "<span style='color:green; border:2px green;'>Active</span>";}else{ echo "<span style='color:red; border:2px red;'>De-Active</span>";} ?> &nbsp<span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="dataQuery/process.php?action3=activeVendor&id=<?php echo $id?>">Active</a></li>
                                    <li><a href="dataQuery/process.php?action3=deactiveVendor&id=<?php echo $id?>">De-Active</a></li>
                                </ul>
                            </div>
                            </center>
                         </td> 
                         <td><a href="vendor-view.php?vendorid=<?php echo $vendorid; ?>" class="btn-sm btn-primary">View </a></td>
                       <td style="position:relative">   
                        <center>
                            <div class="btn-group">
                               <button data-toggle="dropdown" class="btn btn-danger btn-sm dropdown-toggle btn-sm">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu animated flipInX m-t-xs" role="menu" style="top:0;">
                                        <li><a href="edit-vendor.php?id=<?php echo $id;?>"><i class="fa fa-pencil"> </i> Edit</a></li>
                                        <!--<li><a class="demo3" path="dataQuery/process.php?action2=<?php echo $deleteMode ?>&id=<?php echo $id?>&otpid=<?php echo $otp_id?>" ><i class="fa fa-trash"> </i> Remove</a></li>-->
                                        <li class="divider"></li>
                                        <li><a ><i class="fa "> </i> Cancel</a></li>
                                    </ul>
                                </div>
                        </center>
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