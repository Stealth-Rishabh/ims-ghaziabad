<?php
ob_start();
include'loginQuery/session_start.php'; 
include'dbc.php';
$pageTitle="Add a new Upper / Outer Material and other attributes";
$pageName="Upper / Outer Material";
$linkName="";
$tableName="tbl_upper_material";
$listPageUrl="";
$addPageUrl="shoes-upper-material.php";
$deleteMode="deleteupperMaterial";
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
        $mode="editupperMaterial";
        $btnname="Update";
    }
    else
    {
        $id                ="";
        $name              ="";
        $url ="";
        $order_number      ="";
        $keyword="";
        $thumb    ="";
         $status  ="1";
         $metakeyword="";
         $metadescription="";
         $commissionpercentage="";
            $mode="addupperMaterial";
            $idd="";
            $btnname="Save Upper Material";
            $active='';
    }
    
?> 
<!-- php code close -->
<!-- Main Wrapper -->
<div id="wrapper">
    <div class="small-header">
        <div class="hpanel" style="margin-top: 25px;">
            <div class="panel-body">
                <div id="hbreadcrumb" class="pull-right">
    
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
                    Add Upper Material
                </div>
                <div class="panel-body">
                    <form role="form" id="form" action="dataQuery/process.php" method="post" enctype="multipart/form-data">
                         <input type="hidden" name="action" value="<?php echo $mode;?>"   />
                         <input type="hidden" id="getid" name="txtid" value="<?php echo $id;?>"   />
                      
                            <input type="hidden" id="applicationname"  class="form-control" name="txtshoescategory" value="16" required>
                       
                        <div class="form-group">
                            <label>Type *</label> 
                            <input type="text" class="form-control" name="txtname" value="<?php echo $name;?>" required>
                        </div>
                         <div>
                            <button class="btn btn-success btn-sm submitbtn" type="submit"><strong>Submit</strong></button>
                     </div>
                     </form>
                               
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="hpanel">
                <div class="panel-heading">
                    Shoes Upper Material List *
                </div>
                <div class="panel-body">
                     <table id="example1" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th width="20">#</th>
                    <th  width="50">Upper Material</th>
                    <th width="50">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php  
                   $i=1;
                   $sql2=mysqli_query($conn,"select * from $tableName ORDER BY id desc")or die(mysqli_error());
                while($row2=mysqli_fetch_assoc($sql2))
                {extract($row2)
                ?>
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td><?php echo $row2['name']?></td>
                       <td style="position:relative">   
                        <center>
                            <div class="btn-group">
                               <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle btn-sm">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu animated flipInX m-t-xs" role="menu" style="top:0;">
                                        <li><a href="<?php echo $addPageUrl ?>?id=<?php echo $row2['id']?>"><i class="fa fa-pencil"> </i> Edit</a></li>
                                        <li><a class="demo3" path="dataQuery/process.php?action2=<?php echo $deleteMode ?>&id=<?php echo $row2['id']?>" ><i class="fa fa-trash"> </i> Remove</a></li>
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
    </form>
    </div>
    </div>
    <!-- Footer-->
    <?php include 'includes/footer.php'; ?>

</div>

<!-- Vendor scripts -->

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