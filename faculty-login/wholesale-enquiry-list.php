<?php 
include'loginQuery/session_start.php';
include'dbc.php';

$pageTitle="List of Wholesale Enquiry ";
$pageName="List of Wholesale Enquiry";
$linkName="Add Vendor";
$tableName="tbl_vendor";
$addPageUrl="vendor.php";
$deleteMode="deleteVendor";
 

$sql=mysqli_query($conn,"select * from tbl_vendor")or die(mysqli_error($conn));
while($row=mysqli_fetch_assoc($sql)){
    $vendorAry[$row['vendorid']]=$row['vendor_name'];
    $vendormobileAry[$row['vendorid']]=$row['mobile'];
}

$sql=mysqli_query($conn,"select * from tbl_product")or die(mysqli_error($conn));
while($row2=mysqli_fetch_assoc($sql)){
    $productnameAry2[$row2['productid']]=$row2['productname'];
    $productimageAry2[$row2['productid']]=$row2['image1'];
    $productskuAry2[$row2['productid']]=$row2['skucode'];
}

// $sql2=mysqli_query($conn,"select * from tbl_sub_subcategory")or die(mysqli_error($conn));
// while($row22=mysqli_fetch_assoc($sql2)){
//     $subsubcategoryAry[$row22['id']]=$row22['name'];

// }

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
<style>
    .flex-item {
      margin-bottom: 10px;
      border: 1px solid lightgrey;
    padding: 9px;
    }
    .flex-item strong{
          margin-right: 27px;
    }
</style>
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
            <div class="panel-body" style="background-color:orange;color: white;">
                <div id="hbreadcrumb" class="pull-right">
                   
                </div>
                <h2 class="font-light m-b-xs" style="text-align: center;font-size: 18px;">
                      <?php echo $pageTitle; ?>
                </h2>
            </div>
        </div>
    </div>

<div class="content">



    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
              
                <div class="panel-body" >
                <table id="example1" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th width="30">#</th>
                        <th width="80">Enquiry Date</th>
                        <th  width="80">Vendor Name</th>
                        <th width="80">Product Name</th>
                        <th width="80">Image</th>  
                         <th width="80">View Enquiry Detail</th>
                                      
                       
                </tr>
                </thead>
                <tbody>
                <?php  
                   $i=1;
                   $wi=1;
                   $kl=1;
                   $ty=1;
                   $sql=mysqli_query($conn,"select * from tbl_bulkorder ORDER BY id desc")or die(mysqli_error());
                while($row=mysqli_fetch_assoc($sql))
                {
                   $productidd=$row['productid'];
                   $vendoridd=$row['vendorid'];
                   $date=$row['datee'];
                   extract($row);
                   
                //   $sql=mysqli_query($conn,"select * from tbl_product where productid='$productidd'")or die(mysqli_error($conn));
                //   $row3=mysqli_fetch_assoc($sql);
                //         $productname=$row3['productname'];
                //         $productimage=$row3['image1'];
                //         $productsku=$row3['skucode'];
                        
                //     $sqlvendor=mysqli_query($conn,"select * from tbl_vendor where vendorid='$vendoridd'")or die(mysqli_error($conn));
                //     $rowvendor=mysqli_fetch_assoc($sqlvendor);
                //         $vendorname=$rowvendor['vendor_name'];
                //         $vendormobile=$rowvendor['mobile']; 
                ?>
                    <tr>
                       
                      <td><?php echo $i++;?></td>
                        <td><?php echo $date; ?> </td> 
                        <td><?php echo $vendorAry[$vendoridd];?><br><?php echo $vendormobileAry[$vendoridd];?></td>                       
                        <td><?php echo $productnameAry2[$productidd];?> </td> 
                        <td><img height="50" width="50" src="../media/product/<?php echo $productimageAry2[$productidd];?>"></td> 
                        <td><button type="button" class="btn-sm btn-primary" data-toggle="modal" indexing="<?php echo $wi++; ?>" data-target="#myModal<?php echo $kl++; ?>"><i class="fa fa-eye" aria-hidden="true"></i> View Customer Detail</button></td>
                        <!-- modal start -->
                        <div class="modal fade" id="myModal<?php echo $ty++; ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="color-line"></div>
                                <div class="modal-header">
                                    <h4 class="modal-title">Wholesale Enquiry</h4>
                                </div>
                                <div class="modal-body">
                                  <form>
                                      <div style="background-color: ghostwhite;padding: 23px;">
                                              <h3 style="font-weight: 600;font-size: 17px;">Vendor Detail :  </h3>
                                              <div class="flex-item">
                                                   <strong>Vendor Name :</strong> <?php echo $vendorAry[$vendoridd];?>
                                              </div>
                                              <div class="flex-item">
                                                   <strong>Vendor Mobile :</strong> <?php echo $vendormobileAry[$vendoridd];?>
                                              </div>
                                      </div>
                                      <hr>
                                        <div style="background-color: floralwhite;padding: 23px;">
                                              <h3 style="font-weight: 600;font-size: 17px;">Product Detail :  </h3>
                                              <div class="flex-item">
                                                   <strong>Product Name :</strong> <?php echo $productnameAry2[$productidd];?>
                                              </div>
                                              <div class="flex-item">
                                                   <strong>Product SKU :</strong> <?php echo $productskuAry2[$productidd];?>
                                              </div>
                                              <div class="flex-item">
                                                   <strong>Product Image :</strong> <img src="../media/product/<?php echo $productimageAry2[$productidd];?>" style="width: 217px;">
                                              </div>
                                      </div>
                                      <hr>
                                        <div style="background-color: aliceblue;padding: 23px;">
                                              <h3 style="font-weight: 600;font-size: 17px;">Customer Detail :  </h3>
                                              <div class="flex-item">
                                                   <strong>Cusotmer Name :</strong> <?php echo $name;?>
                                              </div>
                                              <div class="flex-item">
                                                   <strong> Mobile Number :</strong> <?php echo $mobile;?>
                                              </div>
                                              <div class="flex-item">
                                                   <strong>Email ID :</strong> <?php echo $email;?>
                                              </div>
                                              <div class="flex-item">
                                                   <strong>Message :</strong> <?php echo $message;?>
                                              </div>
                                      </div>
                            
            
                                         
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- model close -->
                       
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