<?php
include'loginQuery/session_start.php'; 
include'dbc.php';
$pageTitle="Add a new Child Category and other attributes";
$pageName="Child Category Name";
$linkName="All Child Category";
$tableName="tbl_sub_subcategory";
$listPageUrl="sub-sub-category-list.php";
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
        $mode="editSubSubCategory";
        $btnname="Update";
    }
    else
    {
         $id                     ="";
        if(isset($_GET['cid'])){
        $category_id = $_GET['cid'];   
        }else{
            $category_id            ="";    
        }
        $name              ="";
        $sub_category_id              ="";
        $url ="";
        $order_number      ="";
        $keyword="";
        $thumb    ="";
          $wholesale= "";
         $status  ="1";
         $metakeyword="";
         $metadescription="";
         $commissionpercentage="";
            $mode="addSubSubCategory";
            $idd="";
            $btnname="Save Child Category";
            $active='';
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
                <div class="panel-heading">
                    Add Child Category
                </div>
                <div class="panel-body">
                    <form role="form" id="form" action="dataQuery/process.php" method="post" enctype="multipart/form-data">
                         <input type="hidden" name="action" id="getaction" value="<?php echo $mode;?>"   />
                         <input type="hidden" id="getid" name="txtid" value="<?php echo $id;?>"   />
    
                        <div class="form-group">
                            <label>Select Main Category *</label> 
                            <select name="selcategory" id="getsecondgetcategoryid" class="form-control" required="">
                                <option value="">Select</option>
                                <?php $sql=mysqli_query($conn,"select * from tbl_category order by name ")or die(mysqli_error($conn));
                                while($row=mysqli_fetch_assoc($sql))
                                {?>
                                <option <?php if($category_id==$row['id']){ echo 'selected';}?> value="<?php echo $row['id'];?>"><?php echo $row['name']; ?></option>
                            <?php }?>
                            </select>
                        </div> 
                        <div class="form-group">
                            <label>Select Sub Category *</label> 
                            <select name="selsubcategory" class="form-control" required="">
                            <option value="">Select</option>
                            <?php $sql=mysqli_query($conn,"select * from tbl_subcategory where category_id='$category_id' order by name")or die(mysqli_error($conn));
                            while($row=mysqli_fetch_assoc($sql))
                            {?>
                            <option <?php if($sub_category_id==$row['id']){ echo 'selected';}?> value="<?php echo $row['id'];?>"><?php echo $row['name']; ?></option>
                        <?php }?>
                        </select>
                        </div>
                        <div class="form-group">
                            <label>Sub Category Name *</label> 
                            <input type="name" id="applicationname"  class="form-control" name="txtname" value="<?php echo $name ;?>" required>
                        </div>
                        <div class="form-group">
                            <label>Url *</label> 
                            <input type="name" id="setpageName" class="form-control" name="txturl" value="<?php echo $url ;?>" required>
                        </div>
                        <div class="form-group">
                            <label>Meta Keyword</label> 
                            <input type="name" class="form-control" name="txtmetakeyword" value="<?php echo $metakeyword ;?>">
                        </div>
                        <div class="form-group">
                            <label>Meta Description</label> 
                            <input type="name" class="form-control" name="txtmetadescription" value="<?php echo $metadescription ;?>">
                        </div>
                         <div class="form-group">
                            <label>Order Number *</label> 
                            <input type="name" class="form-control" name="txtorder" value="<?php echo $order_number ;?>" required>
                        </div>   
                           <div class="form-group">
                              <label for="wholesale">Show on Wholesale</label> 
                             <input type="checkbox" id="wholesale" name="txtwholesale" <?php 
                                if($wholesale==1){ echo "checked";} ?>>
                        </div>
                </div>
            </div>
             <!-- comission percentage -->
            <div class="hpanel">
                <div class="panel-heading">
                    Product Type
                </div>
                <div class="panel-body">
                        <div class="form-group">
                            <label for="name">Select Product Type<span class="text-danger">*</span></label>
                                <select name="selproducttype" class="form-control" required="">
                                    <option value="">Select </option>
                                    <?php $sqlc=mysqli_query($conn,"select * from tbl_producttype where status='1' order by name")or die(mysqli_error($conn));
                                    while($rowc=mysqli_fetch_assoc($sqlc))
                                    {?>
                                    <option <?php if($product_type_id==$rowc['id']){ echo 'selected';}?> value="<?php echo $rowc['id'];?>"><?php echo $rowc['name']; ?></option>
                                <?php }?>
                                </select>
                        </div>                
                </div>
            </div>
            <!-- commission percentage close -->
        </div>
        <div class="col-lg-6">
            <div class="hpanel">
                <div class="panel-heading">
                    Add Feature Image *
                </div>
                <div class="panel-body">
                    <div id="brandimageprv1" class="img-content-size-1 common-fram ">
                    <?php if($thumb!=""){?>
                        <img src="../media/subsubcategory/thumb/<?php echo $thumb?>"/>
                    <?php }?>
                    </div>
                    <input class="textbox brand-img1" type="file" name="image1fleimage" > <br>
                    <ul>
                        <li>Recomended image size 1400 x 470 px </li>
                        <li>Image format must be jpg or jpeg</li>     
                    </ul> <br><br>

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

<!-- App scripts -->
<script src="scripts/homer.js"></script>
<script src="scripts/charts.js"></script>
<script src="js/custum.js"></script>

</body>
</html>