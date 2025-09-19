<?php 
include'loginQuery/session_start.php';
include'dbc.php';
$pageTitle="List of Top Banner Type";
$pageName="Top Banner List";
$linkName="Add Top Banner";
$tableName="tbl_banner";
$addPageUrl="top-banner.php";
$deleteMode="deleteTopbanner";
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
                        <li><a href="<?php echo $addPageUrl; ?>" class="btn btn-primary m-t-n-xs btn-sm"><strong><?php echo $linkName; ?></strong></a></li>
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
                    Top Banner List
                </div>
                <div class="panel-body">
                <table id="example1" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th width="20">#</th>
                    <th  width="">Banner Name</th>
                    <th width="">Image</th>
                    <th  width="">Order Number</th>
                    <th width="">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php  
                   $i=1;
                   $sql=mysqli_query($conn,"select * from $tableName ORDER BY id desc")or die(mysqli_error());
                while($row=mysqli_fetch_assoc($sql))
                {extract($row)
                ?>
                    <tr>
                         <?php
                        if($status==0)
                             {?>
                                <td style="background-color: indianred;color: white;font-weight: 700;"><?php echo $i++;?></td> <?php
                             }
                         else
                             {?>
                                <td style="background-color: darkseagreen;color: white;font-weight: 700"><?php echo $i++;?></td> <?php
                             }  
 
                         ?>
                        <td><?php echo $name;?></td>
                         <td><img height="50" width="50" src="../media/topbanner/<?php echo $image;?>"></td> 
                          <td><?php echo $order_number;?></td>
                
                       <td style="position:relative">   
                        <center>
                            <div class="btn-group">
                               <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle btn-sm">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu animated flipInX m-t-xs" role="menu" style="top:0;">
                                        <li><a href="<?php echo $addPageUrl ?>?id=<?php echo $id;?>"><i class="fa fa-pencil"> </i> Edit</a></li>
                                        <li><a class="demo3" path="dataQuery/process.php?action2=<?php echo $deleteMode ?>&id=<?php echo $id?>" ><i class="fa fa-trash"> </i> Remove</a></li>
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