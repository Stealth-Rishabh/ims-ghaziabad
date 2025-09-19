<?php 
include'loginQuery/session_start.php';
include'dbc.php';
$pageTitle="List of Patient Care";
$pageName="Patient Care List";
$linkName="Add Franchise";
$tableName="tbl_patient_care_detail";
$addPageUrl="franchise.php";
$deleteMode="deleteFranchise";
$getid=$_GET['id'];
$sqlpatientcare=mysqli_query($conn,"select * from tbl_patient_care_detail where id='$getid'")or die(mysqli_error());
$rowpatientcare=mysqli_fetch_assoc($sqlpatientcare);
$patient_care_service_id=$rowpatientcare['patient_care_service_id'];
$patient_care_id=$rowpatientcare['patient_care_id'];
$city_id=$rowpatientcare['city_id'];
$serviceidAry = explode(',',$patient_care_service_id);
$location_id=$rowpatientcare['location_id'];
$locationidAry = explode(',',$location_id);

$sqlpatientcarereg=mysqli_query($conn,"select * from tbl_patient_care_registration where id='$patient_care_id'")or die(mysqli_error());
$rowpatientcarereg=mysqli_fetch_assoc($sqlpatientcarereg);

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
                   View Patient Care Detail
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
            <b style="color:green;"><h4>Personal Information</h4></b>
                <tr>
                    <th>Name </th>
                    <td><?php echo $rowpatientcare['name'];?></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td><?php echo $rowpatientcare['gender'];?></td>
                </tr>
                <tr>
                    <th>Experience </th>
                    <td><?php echo $rowpatientcare['experience'];?></td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td><?php echo $rowpatientcare['mobile'];?></td>
                </tr>
                 <tr>
                    <th>Email</th>
                    <td><?php echo $rowpatientcare['email'];?></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><?php echo $rowpatientcarereg['show_password'];?></td>
                </tr>
                <tr>
                    <th>Registration Date</th>
                    <td><?php echo $rowpatientcare['profiledate'];?></td>
                </tr>
                 <tr>
                    <th>Address</th>
                    <td><?php echo $rowpatientcare['address'];?></td>
                </tr>
                <tr>
                    <th>City</th>
                    <td>
                        <?php echo $cityNameAry[$city_id];?>
                    </td>
                </tr>
                <tr>
                    <th>About </th>
                    <td>
                        <?php echo $rowpatientcare['about'];?>
                    </td>
                </tr>
</table>
 <table class="table table-striped table-bordered table-hover">
                 <b style="color:green;"><h4>Services</h4></b>
                <tr>
                    <th>Services</th>
                    <td>
                         <?php
                            foreach ($serviceidAry as $patient_care_service_id) {
                            $patient_care_service_id = mysqli_real_escape_string($conn, $patient_care_service_id);
                            $sqlservice = mysqli_query($conn, "SELECT * FROM tbl_patient_service WHERE id='$patient_care_service_id' AND status='1'") or die(mysqli_error($conn));
                                if ($rowservice = mysqli_fetch_assoc($sqlservice)) {
                                    extract($rowservice);
                                    ?> 
                                        <ul>
                                            <li><?php echo $rowservice['name']; ?></li>
                                        </ul> 
                                    <?php
                                    }
                                }
                          ?>
                    </td>
                </tr>
            </table>
             <table class="table table-striped table-bordered table-hover">
              <b style="color:green;"><h4>Service Locations</h4></b>
                  <tr>
                    <th>Services Location</th>
                    <td>
                         <?php
                            foreach ($locationidAry as $locationid) {
                            $locationid = mysqli_real_escape_string($conn, $locationid);
                            $sqllocation = mysqli_query($conn, "SELECT * FROM tbl_location WHERE id='$locationid' AND status='1'") or die(mysqli_error($conn));
                                if ($rowlocation = mysqli_fetch_assoc($sqllocation)) {
                                    extract($rowlocation);
                                    ?> 
                                        <ul>
                                            <li><?php echo $rowlocation['location']; ?></li>
                                        </ul> 
                                    <?php
                                    }
                                }
                          ?>
                    </td>
                </tr>
            </table>
             <table class="table table-striped table-bordered table-hover">
        <b style="color:green;"><h4>Education Information</h4></b>
                 <tr>
                    <th>Certificate / Diploma Name</th>
                    <td><?php echo $rowpatientcare['certificate_name'];?></td>
                </tr>
                <tr>
                    <th>Certificate / Diploma View</th>
                    <td><a href="../media/patientcareKYC/<?php echo $rowpatientcare['certificate_file'];?>" target="_blank"><b>view →</b></a></td>
                </tr>
            </table>
             <table class="table table-striped table-bordered table-hover">
        <b style="color:green;"><h4>KYC</h4></b>
                <tr>
                    <th>Aadhar card (Front Image)</th>
                    <td><a href="../media/patientcareKYC/<?php echo $rowpatientcare['adhar_front_file'];?>" target="_blank"><b>view →</b></a></td>
                </tr>
                 <tr>
                    <th>Aadhar card (Back Image)</th>
                    <td><a href="../media/patientcareKYC/<?php echo $rowpatientcare['adhar_back_file'];?>" target="_blank"><b>view →</b></a></td>
                </tr>
                  <tr>
                    <th>Profile Photo</th>
                    <td><a href="../media/patientcareProfile/<?php echo $rowpatientcare['profile_pic'];?>" target="_blank"><b>view →</b></a></td>
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