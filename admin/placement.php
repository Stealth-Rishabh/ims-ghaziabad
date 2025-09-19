<?php
include'loginQuery/session_start.php'; 
include'dbc.php';
$pageTitle="Add a Placement Stories and other attributes";
$pageName="Placement Stories";
$linkName="All Placement Stories";
$tableName="tbl_placement_success";
$listPageUrl="placement-list.php";
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
    <link rel="stylesheet" href="vendor/select2-3.5.2/select2.css" />
    <link rel="stylesheet" href="vendor/select2-bootstrap/select2-bootstrap.css" />
    <!-- App styles -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="styles/style.css">
    <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        
        plugins: [
            "codesample",
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | codesample "
    });


    </script>
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
        $mode="editPlacement";
        $btnname="Update";
    }
    else
    {
        $id                ="";
        $name             ="";
        $year_id ="";
        $logo      ="";
        $logo_thumb    ="";
        $company_name="";
        $graduation_year="";
        $long_description  ="";
        $short_description="";
        $student_image="";
        $student_thumb="";
        $mode="addPlacement";
        $idd="";
        $btnname="Save";
        $status='1';
    }
    
?> 
<!-- php code close -->
<!-- Main Wrapper -->
<div id="wrapper">

    <div class="small-header">
        <div class="hpanel">
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
                <div class="panel-body">
                    <form role="form" id="form" action="dataQuery/process.php" method="post" enctype="multipart/form-data">
                         <input type="hidden" name="action" value="<?php echo $mode;?>"   />
                         <input type="hidden" id="getid" name="txtid" value="<?php echo $id;?>"   />
                        <div class="form-group" style="float: right;">
                        <input type="checkbox" id="name" name="txtstatus" <?php 
                        if($status==1){ echo "checked";} ?>>
                         <label for="name">Active </label>   
                        </div>
                        <div class="form-group">
                            <label>Name *</label> 
                            <input type="name" class="form-control" name="txtname" value="<?php echo $name ;?>" required>
                        </div>
                        <div class="form-group">
                            <label>Select Placed Year *</label> 
                            <select name="txtselyear" class="js-source-states form-control" style="width: 100%">
                                <option value="">Select</option>
                                <?php $sql=mysqli_query($conn,"select * from tbl_placement_year order by year desc")or die(mysqli_error($conn));
                                while($row=mysqli_fetch_assoc($sql))
                                {?>
                                <option <?php if($year_id==$row['id']){ echo 'selected';}?> value="<?php echo $row['id'];?>"><?php echo $row['year']; ?></option>
                            <?php }?>
                            </select>
                        </div> 
                        <div class="form-group">
                            <label>Batch Year *</label> 
                            <input type="name"  class="form-control" name="txtpassingyear" value="<?php echo $graduation_year ;?>" required>
                        </div>
                        <div class="form-group">
                            <label>Company Name *</label> 
                            <input type="name"  class="form-control" name="txtcompanyname" value="<?php echo $company_name ;?>" required>
                        </div>
                        <div class="form-group">
                            <label>Short Description *</label> 
                            <input type="name"  class="form-control" name="txtshortdescription" value="<?php echo $short_description ;?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name">Description</label>
                            <textarea  name="txtlongdescription"  
                              placeholder="enter the item description" ><?php echo $long_description ;?></textarea>
                        </div>  
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="hpanel">
                <div class="panel-body">
                    <div class="container">
                            <div class="panel-heading">
                            <b>Add Student Image *</b>
                            </div>
                        <div id="brandimageprv1" class="img-content-size-1 common-fram ">
                            <?php if($student_thumb!=""){?>
                                <img src="../media/placement/thumb/<?php echo $student_thumb?>"/>
                            <?php }?>
                        </div>
                            <input class="textbox brand-img1" type="file" name="image1fleimage" > <br>
                            <ul>
                                <li>Recomended image size 105 x 112 px </li>
                                <li>Image format must be jpg or jpeg</li>     
                            </ul> <br><br>
                    </div>  
                    <hr>
                    <div class="container">
                            <div class="panel-heading">
                            <b>Add Company Logo *</b>
                            </div>
                        <div id="brandimageprv2" class="img-content-size-1 common-fram ">
                            <?php if($logo_thumb!=""){?>
                                <img src="../media/placement/thumb/<?php echo $logo_thumb?>"/>
                            <?php }?>
                        </div>
                            <input class="textbox brand-img2" type="file" name="image2fleimage" > <br>
                            <ul>
                                <li>Recomended image size 140 x 45 px </li>
                                <li>Image format must be jpg or jpeg</li>     
                            </ul> <br><br>
                    </div>       
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
<script src="vendor/select2-3.5.2/select2.min.js"></script>

<!-- App scripts -->
<script src="scripts/homer.js"></script>
<script src="scripts/charts.js"></script>
<script src="js/custum.js"></script>
  <!-- TinyMCE CDN -->
  <script src="vendor/summernote/dist/summernote.min.js"></script>            
             <script>

    $(function () {

        // Initialize summernote plugin
        $('.summernote').summernote();

        $('.summernote1').summernote({
            toolbar: [
                ['headline', ['style']],
                ['style', ['bold', 'italic', 'underline', 'superscript', 'subscript', 'strikethrough', 'clear']],
                ['textsize', ['fontsize']],
                ['alignment', ['ul', 'ol', 'paragraph', 'lineheight']],
            ]
        });

        $('.summernote2').summernote({
            airMode: true,
        });

    });
$(".js-source-states-2").select2();
 $(".js-source-states").select2();
</script>
</body>
</html>