<?php 
include'loginQuery/session_start.php';
include'dbc.php';
$getvendorid=$_GET['vendorid'];
$sqlvendor=mysqli_query($conn,"select * from tbl_vendor where vendorid='$getvendorid'") or die(mysqli_error($conn));
$rowvendor=mysqli_fetch_assoc($sqlvendor);

$pageTitle="List of Pending Product ";
$pageName="Pending Vendor Product List";
$linkName="Add Vendor";
$tableName="tbl_vendor";
$addPageUrl="vendor.php";
$deleteMode="deleteVendor";
$sql=mysqli_query($conn,"select * from tbl_subcategory")or die(mysqli_error($conn));
while($row=mysqli_fetch_assoc($sql)){
    $categoryAry[$row['id']]=$row['name'];
}

$sql=mysqli_query($conn,"select * from tbl_category")or die(mysqli_error($conn));
while($row2=mysqli_fetch_assoc($sql)){
    $categoryAry2[$row2['id']]=$row2['name'];
}

$sql2=mysqli_query($conn,"select * from tbl_sub_subcategory")or die(mysqli_error($conn));
while($row22=mysqli_fetch_assoc($sql2)){
    $subsubcategoryAry[$row22['id']]=$row22['name'];

}
$sql3=mysqli_query($conn,"select * from tbl_color")or die(mysqli_error($conn));
while($row33=mysqli_fetch_assoc($sql3)){
    $colorAry[$row33['id']]=$row33['name'];

}
$sql=mysqli_query($conn,"select * from tbl_product")or die(mysqli_error($conn));
$row3=mysqli_fetch_assoc($sql);
    $productid=$row3['productid'];  
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
            <div class="panel-body" style="background-color:indianred;color: white;">
                <div id="hbreadcrumb" class="pull-right">
                   
                </div>
                <h2 class="font-light m-b-xs" style="text-align: center;font-size: 18px;">
                      <?php echo $pageTitle; ?> - 
                     <span style="color: yellow;font-weight: 700;"><?php echo $rowvendor['vendor_name']; ?></span>
                </h2>
            </div>
        </div>
    </div>

<div class="content">



    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-heading">
                    Pending Product List
                </div>
                <div class="panel-body" >
                <table id="example1" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th width="30">#</th>
                        <th  width="80">Category</th>
                        <th width="80">Product Name</th>
                        <th width="80">Image</th>  
                        <th width="80">Check</th>
                         <th width="80">Action</th>
                                      
                       
                </tr>
                </thead>
                <tbody>
                <?php  
                   $i=1;
                   $wi=1;
                   $kl=1;
                   $ty=1;
                   $sql=mysqli_query($conn,"select * from tbl_product where vendorid='$getvendorid' and adminstatus='0' and status='1' ORDER BY id desc")or die(mysqli_error());
                while($row=mysqli_fetch_assoc($sql))
                {
                   extract($row);
                   $sql7=mysqli_query($conn,"select * from tbl_product_price where productId='$productid'")or die(mysqli_error($conn));
                   $row7=mysqli_fetch_assoc($sql7);
                   $price=$row7['pprice'];
                ?>
                    <tr>
                       
                      <td><?php echo $i++;?></td>
                        <td><?php echo $categoryAry2[$category_id];?>/<br><?php echo $categoryAry[$sub_category_id];?>/<br><?php echo $subsubcategoryAry[$sub_sub_category_id];?></td>                       
                        <td><?php echo $productname;?><br><b>Code: <small style="color: red;"><?php echo $skucode;?></small></b>  </td> 
                        <td><img height="50" width="50" src="../media/product/<?php echo $image1;?>"></td> 
                        <td><button type="button" class="btn-sm btn-primary" data-toggle="modal" indexing="<?php echo $wi++; ?>" data-target="#myModal<?php echo $kl++; ?>"><i class="fa fa-eye" aria-hidden="true"></i> Check Product</button></td>
                        <!-- modal start -->
                        <div class="modal fade" id="myModal<?php echo $ty++; ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="color-line"></div>
                                <div class="modal-header">
                                    <h4 class="modal-title"><?php echo $productname;?></h4>
                                </div>
                                <div class="modal-body">
                                  <form>
                                        <div class="mb-3">
                                            <label class="col-form-label">Product Name:</label>
                                            <input type="text" class="form-control" readonly value="<?php echo $productname;?>">
                                        </div><br>
                                        <div class="mb-3">
                                            <label class="col-form-label">Main Category - Sub Category - Child Category :</label>
                                            <input type="text" class="form-control" readonly value="<?php echo $categoryAry2[$category_id];?> - <?php echo $categoryAry[$sub_category_id];?> - <?php echo $subsubcategoryAry[$sub_sub_category_id];?>">
                                        </div><br>
                                        <div class="mb-3">
                                            <label class="col-form-label"> SIZE - PRICE - MRP - STOCK :</label>
                                              <?php 
                                             $sqlsp=mysqli_query($conn,"select * from tbl_product_price where productId='$productid'") or die(mysqli_error($conn));
                                                while($rowsp=mysqli_fetch_assoc($sqlsp))
                                            { ?>
                                            <input type="text" class="form-control" readonly value="SIZE  : ( <?php echo $rowsp['psize'];?> ) - PRICE: ( <?php echo $rowsp['pprice'];?> ) - MRP: ( <?php echo $rowsp['pmrp'];?> ) - STOCK: ( <?php echo $rowsp['pqty'];?> )">
                                              <?php } ?>
                                        </div><br>
                                        <div class="mb-3">
                                            <label class="col-form-label">COLOR:</label>
                                            <input type="text" class="form-control" readonly value="<?php echo $colorAry[$color];?>">
                                        </div><br>
                                        <div class="mb-3">
                                            <label class="col-form-label">COD Available:</label>
                                            <input type="text" class="form-control" readonly value="<?php if($codcheck=='1') echo 'Yes Available'; else echo 'Not Available';?>">
                                        </div><br>
                                         <div class="mb-3">
                                            <label class="col-form-label">Return Available:</label>
                                            <input type="text" class="form-control" readonly value="<?php if($returnn=='1') echo 'Yes Available'; else echo 'Not Available';?>">
                                        </div><br>
                                        <div class="mb-3">
                                            <label class="col-form-label">Exchange Available:</label>
                                            <input type="text" class="form-control" readonly value="<?php if($exchange=='1') echo 'Yes Available'; else echo 'Not Available';?>">
                                        </div><br>
                                        <div class="mb-3">
                                            <label class="col-form-label">Shipping Charge:</label>
                                            <input type="text" class="form-control" readonly value="<?php echo $shippingcharge; ?>">
                                        </div><br>
                                        <div class="mb-3">
                                            <label class="col-form-label">Description:</label>
                                            <textarea rows="4" cols="50"  class="form-control" readonly> <?php echo $short_description;?> </textarea>
                                        </div><br>
                                        <div class="mb-3">
                                            <label class="col-form-label">Images</label>
                                             <img src="../media/product/<?php echo $image1; ?>" style="width: 160px;"></img>
                                             <img src="../media/product/<?php echo $image2; ?>" style="width: 160px;"></img>
                                             <img src="../media/product/<?php echo $image3; ?>" style="width: 160px;"></img>
                                        </div><br>
                                         
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- model close -->
                        <td><a href="dataQuery/process.php?action3=activeProduct&id=<?php echo $id?>&vendorid=<?php echo $getvendorid?>" class="btn-sm btn-success">GO LIVE</a></td>
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