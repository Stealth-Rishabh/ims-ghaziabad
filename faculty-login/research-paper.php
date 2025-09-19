<?php
include'loginQuery/session_start.php'; 
include'dbc.php';
$pageTitle="Add a Research Paper and other attributes";
$pageName="Research Paper";
$linkName="All Research Paper";
$tableName="tbl_research_paper";
$listPageUrl="research-paper-list.php";
$userid=$_SESSION['userid'];
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
    <link rel="stylesheet" href="vendor/toastr/build/toastr.min.css" />
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
        $mode="editResearchPaper";
        $btnname="Update";
    }
    else
    {
        $id                ="";
        $name             ="";
        $date     ="";
        $year    ="";
        $name_paper="";
        $name_journal="";
        $indexing  ="";
        $link="";
        $mode="addResearchPaper";
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
                    <!-- <ol class="hbreadcrumb breadcrumb">
                        <li><a href="<?php echo $listPageUrl; ?>" class="btn btn-sm btn-primary m-t-n-xs"><strong><?php echo $linkName; ?></strong></a></li>
                    </ol> -->
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
                         <input type="hidden" name="txtfacultyid" value="<?php echo $userid ;?>"   />
                        <div class="form-group" style="float: right;">
                        <input type="checkbox" id="name" name="txtstatus" <?php 
                        if($status==1){ echo "checked";} ?>>
                         <label for="name">Active </label>   
                        </div>
                        <div class="form-group">
                            <label>Select Year *</label> 
                            <select name="txtselyear" class="js-source-states form-control" style="width: 100%">
                                <option value="<?php echo $year; ?>"><b><?php echo $year; ?></b></option>
                                 <option value="2025">2025</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                            </select>
                        </div> 
                        <div class="form-group">
                            <label>Name of the Research Paper *</label> 
                            <input type="text" class="form-control" name="txtpapername" value="<?php echo $name_paper ;?>" required>
                        </div>                
                        <div class="form-group">
                            <label>Name of Referred Journal *</label> 
                            <input type="text" class="form-control" name="txtjournalname" value="<?php echo $name_journal ;?>" required>
                        </div>
                        <div class="form-group">
                            <label>Indexing *</label> 
                            <input type="text" class="form-control" name="txtindexing" value="<?php echo $indexing ;?>" required>
                        </div>
                        <div class="form-group">
                            <label>Link *</label> 
                            <input type="text" class="form-control" name="txtlink" value="<?php echo $link ;?>" required>
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
<script src="vendor/toastr/build/toastr.min.js"></script>
<?php include 'message.php'; ?>
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