<?php
	require_once '../dbc.php';
	require_once 'common-function.php'; 
	$action = isset($_POST['action']) ? $_POST['action'] : ''; 
	switch($action)
	{
		case 'addBanner':
		 	addBanner($conn);		
			break;	
		case 'editBanner':
		 	editBanner($conn);
			break;
		case 'addCategory':
			addCategory($conn);
			break;
		case 'editCategory':
			editCategory($conn);
			break;
		case 'addSubCategory':
			addSubCategory($conn);
			break;
		case 'editSubCategory':
			editSubCategory($conn);
			break;
		case 'addProduct':
		 	addProduct($conn);		
			break;	
		case 'editProduct':
		 	editProduct($conn);
			break;		
		case 'addGallery':
		 	addGallery($conn);		
			break;	
		case 'editGallery':
		 	editGallery($conn);
			break;
		case 'addBlog':
		 	addBlog($conn);		
			break;	
		case 'editBlog':
		 	editBlog($conn);
			break;		
		default :	
	}
	$action2 = isset($_GET['action2']) ? $_GET['action2'] : '';
	switch($action2)
	{
		case 'deleteBanner':
		 	deleteBanner($conn);
			break;
		case 'deleteCategory':
			deleteCategory($conn);
			break;
		case 'deleteSubCategory':
			deleteSubCategory($conn);
			break;
		case 'deleteProduct':
		 	deleteProduct($conn);
			break;	
		case 'deleteGallery':
		 	deleteGallery($conn);
			break;	
		case 'deleteBlog':
		 	deleteBlog($conn);
			break;		
		default :	
	}	
/*--------Add Banner-----------------------------------------------*/

function addBanner($conn)
{  	
	$name		= mysqli_real_escape_string($conn,$_POST['txtname']); 

	
	if(isset($_POST['txtstatus'])){$status=1;}else{$status=0;}

	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];

	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../banner.php?m=2&n=Rooms Image');exit(0);}
	//------------------------------------------------------------------
		//------now clear all condtion is good-------------if two image not avale-----
	function getExtension($str) {
		$i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
	}
			$no = rand(1,999);
			$tno = rand(1,999);	
	///////--------------Upload Logo Image-----------------////////////


	global $bannerPath;	
	global $bannerPathThumb;	
	$ImagePath = "$bannerPath/";
	$ImageThumbPath = "$bannerPathThumb/";
	//================================ Image 1 ==============================	

	if(	$imagefleimagename1!=""){
			//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename1;
			$uploadedfile = $imagefleimagename1;
			$imagefleimagename1 = stripslashes($imagefleimagename1);
			$extension = getExtension($imagefleimagename1);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") ) {
					header('Location: ../banner.php?m=3');
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setheight=400;
			 $ratio=0.0;
			 /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
			if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight = $height ;
            	  $newwidth = $width ;
			 }
			 $newfile1=$no.$imagefleimagename1;

			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$newfile1);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$imageThumbName = $tno.$imagefleimagename1;
			$imagefleimagename = "$ImageThumbPath/". $imageThumbName;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
			

	//////---------------End Image 1 end------------////////////
	}else{
	$newfile1="";
	 $imageThumbName="";
	}


	$sql="insert into  tbl_banner(name,image,thumb,status) values('$name','$newfile1','$imageThumbName','$status')";
	if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
	{
		header('Location: ../banner-list.php?m=1');
		//echo "success";
	}
	else
	{
		header('Location: ../banner-list.php?m=0');
		//echo "fail";
	}
} 	
   /*--------Add Banner close-----------------------------------------------*/

   /*--------Delete Banner -----------------------------------------------*/	
   function deleteBanner($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	
	$del =	"delete from tbl_banner where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
			
		header('Location: ../banner-list.php?&m=6');
	}
	else
	{
	
		header('Location: ../banner-list.php?m=7');
	}

}
 /*--------Delete Banner close-----------------------------------------------*/
  /*--------Edit Banner close-----------------------------------------------*/

 function editBanner($conn)
{

	$id				    = $_POST['txtid']; 
	
	$name		= mysqli_real_escape_string($conn,$_POST['txtname']); 

	
	if(isset($_POST['txtstatus'])){$status=1;}else{$status=0;} 

	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];

	//------now clear all condtion is good-------------if two image not avale-----
function getExtension($str) {
	$i = strrpos($str,".");
	 if (!$i) { return ""; } 

	 $l = strlen($str) - $i;
	 $ext = substr($str,$i+1,$l);
	 return $ext;
}

// ------------- get all images  name  -------------------------
$sel = mysqli_query($conn,"select * from tbl_banner where id = '$id' ");
$row = mysqli_fetch_assoc($sel);
$Un_OrginalImage1 	= $row['image'];	
$Un_Image1 			= $row['thumb'];

/*--------------insert record varible record------------*/
$InsertImage1 				= $row['image'];	
$InsertImagethumb1 			= $row['thumb'];

/*---------------------------*/
$flagImage1		=0;
$flagImage2		=0;
// ------------- get all images  name  -------------------------	
			$no = rand(1,999);
			$tno = rand(1,999);	
///////--------------Upload Logo Image-----------------////////////
 	global $bannerPath;	
	global $bannerPathThumb;	
	$ImagePath = "$bannerPath/";
	$ImageThumbPath = "$bannerPathThumb/";
//================================ Image 1 ==============================	
if(	$imagefleimagename1!=""){
	$flagImage1		=1;
	//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename1;
			$uploadedfile = $imagefleimagename1;
			$imagefleimagename1 = stripslashes($imagefleimagename1);
			$extension = getExtension($imagefleimagename1);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")) {
					header('Location: ../banner-list.php?m=16&id='.$id);
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setwidth=400;
			 $ratio=0.0;
			 if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }
			/*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/
			 

			 $InsertImage1=$no.$imagefleimagename1;

			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$InsertImage1);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$InsertImagethumb1 = $tno.$imagefleimagename1;
			$imagefleimagename = "$ImageThumbPath/". $InsertImagethumb1;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
	//////---------------End Upload Brand Image------------////////////
}	



	$sqladd = mysqli_query($conn,"update tbl_banner set 
	name='$name',
	image='$InsertImage1',
	thumb='$InsertImagethumb1',
	status='$status'
	 where id = '$id'") or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn) > 0)
	{
		// echo "1";
		header('Location: ../banner-list.php?m=4');
	}
	else
	{
		// echo "0";
		header('Location: ../banner-list.php?m=5');
	}

} 
 /*--------Edit banner close-----------------------------------------------*/
	/*--------Add Category-----------------------------------------------*/

function addCategory($conn)
{  	
	$categoryname		= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$order		 	    = mysqli_real_escape_string($conn,$_POST['txtorder']); 
	$url	            = strtolower(str_replace(" ","-",$categoryname));
	$url	            = strtolower(str_replace("&","and",$url));
	
	if(isset($_POST['txtstatus'])){$status=1;}else{$status=0;}

	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];

	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../category.php?m=2&n=Rooms Image');exit(0);}
	//------------------------------------------------------------------
		//------now clear all condtion is good-------------if two image not avale-----
	function getExtension($str) {
		$i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
	}
			$no = rand(1,999);
			$tno = rand(1,999);	
	///////--------------Upload Logo Image-----------------////////////


	global $categoryPath;	
	global $categoryPathThumb;	
	$ImagePath = "$categoryPath/";
	$ImageThumbPath = "$categoryPathThumb/";
	//================================ Image 1 ==============================	

	if(	$imagefleimagename1!=""){
			//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename1;
			$uploadedfile = $imagefleimagename1;
			$imagefleimagename1 = stripslashes($imagefleimagename1);
			$extension = getExtension($imagefleimagename1);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") ) {
					header('Location: ../category.php?m=3');
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setheight=400;
			 $ratio=0.0;
			 /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
			if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight = $height ;
            	  $newwidth = $width ;
			 }
			 $newfile1=$no.$imagefleimagename1;

			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$newfile1);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$imageThumbName = $tno.$imagefleimagename1;
			$imagefleimagename = "$ImageThumbPath/". $imageThumbName;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
			

	//////---------------End Image 1 end------------////////////
	}else{
	$newfile1="";
	 $imageThumbName="";
	}


	$sql="insert into  tbl_category(name,image,thumb,url,order_number,status) values('$categoryname','$newfile1','$imageThumbName','$url','$order','$status')";
	if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
	{
		header('Location: ../category-list.php?m=1');
		//echo "success";
	}
	else
	{
		header('Location: ../category-list.php?m=0');
		//echo "fail";
	}
} 	
   /*--------Add Category close-----------------------------------------------*/	

 /*--------Delete Category -----------------------------------------------*/	
   function deleteCategory($conn)
{

	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql="SELECT * FROM tbl_subcategory where category_id='$id'";
     $run=mysqli_query($conn,$sql) or die(mysqli_error($conn));
      $row=mysqli_num_rows($run);
	if($row<1)
	{
			$del =	"delete from tbl_category where id = '$id' ";

			if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
			{
				
				header('Location: ../category-list.php?&m=6');
			}
			else
			{
			
				header('Location: ../category-list.php?m=7');
			}
	}
	else
	{
		header('Location: ../category-list.php?m=17');
	}		
}
 /*--------Delete Category close-----------------------------------------------*/

  /*--------Edit Category close-----------------------------------------------*/

 function editCategory($conn)
{

	$id				    = $_POST['txtid']; 
	$categoryname		= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$order		 	    = mysqli_real_escape_string($conn,$_POST['txtorder']); 
	$url	            = strtolower(str_replace(" ","-",$categoryname));
	$url	            = strtolower(str_replace("&","and",$url));
	
	if(isset($_POST['txtstatus'])){$status=1;}else{$status=0;} 

	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];

	//------now clear all condtion is good-------------if two image not avale-----
function getExtension($str) {
	$i = strrpos($str,".");
	 if (!$i) { return ""; } 

	 $l = strlen($str) - $i;
	 $ext = substr($str,$i+1,$l);
	 return $ext;
}

// ------------- get all images  name  -------------------------
$sel = mysqli_query($conn,"select * from tbl_category where id = '$id' ");
$row = mysqli_fetch_assoc($sel);
$Un_OrginalImage1 	= $row['image'];	
$Un_Image1 			= $row['thumb'];

/*--------------insert record varible record------------*/
$InsertImage1 				= $row['image'];	
$InsertImagethumb1 			= $row['thumb'];

/*---------------------------*/
$flagImage1		=0;
$flagImage2		=0;
// ------------- get all images  name  -------------------------	
			$no = rand(1,999);
			$tno = rand(1,999);	
///////--------------Upload Logo Image-----------------////////////
 	global $categoryPath;	
	global $categoryPathThumb;	
	$ImagePath = "$categoryPath/";
	$ImageThumbPath = "$categoryPathThumb/";
//================================ Image 1 ==============================	
if(	$imagefleimagename1!=""){
	$flagImage1		=1;
	//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename1;
			$uploadedfile = $imagefleimagename1;
			$imagefleimagename1 = stripslashes($imagefleimagename1);
			$extension = getExtension($imagefleimagename1);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")) {
					header('Location: ../category-list.php?m=16&id='.$id);
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setwidth=400;
			 $ratio=0.0;
			 if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }
			/*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/
			 

			 $InsertImage1=$no.$imagefleimagename1;

			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$InsertImage1);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$InsertImagethumb1 = $tno.$imagefleimagename1;
			$imagefleimagename = "$ImageThumbPath/". $InsertImagethumb1;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
	//////---------------End Upload Brand Image------------////////////
}	



	$sqladd = mysqli_query($conn,"update tbl_category set 
	name='$categoryname',
	image='$InsertImage1',
	thumb='$InsertImagethumb1',
	url='$url',
	order_number='$order',
	status='$status'
	 where id = '$id'") or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn) > 0)
	{
		// echo "1";
		header('Location: ../category-list.php?m=4');
	}
	else
	{
		// echo "0";
		header('Location: ../category-list.php?m=5');
	}

} 
 /*--------Edit Category close-----------------------------------------------*/
 	/*--------Add Sub Category-----------------------------------------------*/

function addSubCategory($conn)
{  	
	$category		        = mysqli_real_escape_string($conn,$_POST['selcategory']); 
	$subcategoryname		= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$order		 	        = mysqli_real_escape_string($conn,$_POST['txtorder']); 
	$url	                = strtolower(str_replace(" ","-",$subcategoryname));
	$url	                = strtolower(str_replace("&","and",$url));

	if(isset($_POST['txtstatus'])){$status=1;}else{$status=0;}

	$sql="insert into  tbl_subcategory(category_id,name,url,order_number,status) values('$category','$subcategoryname','$url','$order','$status')";
	if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
	{
		header('Location: ../sub-category-list.php?m=1');
		//echo "success";
	}
	else
	{
		header('Location: ../sub-category-list.php?m=0');
		//echo "fail";
	}
} 	
   /*--------Add Sub Category close-----------------------------------------------*/	
    /*--------Delete Sub Category -----------------------------------------------*/	
   function deleteSubCategory($conn)
{

	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql="SELECT * FROM tbl_product where 	sub_category_id='$id'";
     $run=mysqli_query($conn,$sql) or die(mysqli_error($conn));
      $row=mysqli_num_rows($run);
	if($row<1)
	{
	
			$del =	"delete from tbl_subcategory where id = '$id' ";

			if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
			{
				
				header('Location: ../sub-category-list.php?&m=6');
			}
			else
			{
			
				header('Location: ../sub-category-list.php?m=7');
			}
    }
    else
    {
    	header('Location: ../sub-category-list.php?m=18');
    }
}
 /*--------Delete Sub Category close-----------------------------------------------*/

 /*--------Edit Sub Category close-----------------------------------------------*/

 function editSubCategory($conn)
{

	$id				        = $_POST['txtid']; 
	$category		        = mysqli_real_escape_string($conn,$_POST['selcategory']); 
	$subcategoryname		= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$order		 	        = mysqli_real_escape_string($conn,$_POST['txtorder']); 
	$url	                = strtolower(str_replace(" ","-",$subcategoryname));
	$url	                = strtolower(str_replace("&","and",$url));

	if(isset($_POST['txtstatus'])){$status=1;}else{$status=0;}
	


	$sqladd = mysqli_query($conn,"update tbl_subcategory set 
	category_id='$category',	
	name='$subcategoryname',
	order_number='$order',
	status='$status'
	where id = '$id'") or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn) > 0)
	{
		// echo "1";
		header('Location: ../sub-category-list.php?m=4');
	}
	else
	{
		// echo "0";
		header('Location: ../sub-category-list.php?m=5');
	}

} 
/*--------Edit Sub Category close-----------------------------------------------*/

/*--------Add product-----------------------------------------------*/
function addProduct($conn)
{  
	$category	                = 	mysqli_real_escape_string($conn,$_POST['selcategory']);
	$subcategory	            = 	mysqli_real_escape_string($conn,$_POST['selsubcategory']);
	$name	 				    = 	mysqli_real_escape_string($conn,$_POST['txtproductname']); 	
	$url					    = 	strtolower(str_replace(" ","-",$name));
	$url					    = 	strtolower(str_replace("&","and",$url));
  		
	$shortdescription		 	= 	mysqli_real_escape_string($conn,$_POST['txtshortdescription']); 
	$skucode		 			    = 	mysqli_real_escape_string($conn,$_POST['txtskucode']);
	 $rand=rand(10000,99999);
	 $productId="ES".$rand;
      $date=date('d/m/Y H:i', time());	
	
	if(isset($_POST['txtstatus'])){$status=1;}else{$status=0;}
	if(isset($_POST['txtfeatured'])){$featured=1;}else{$featured=0;}
	if(isset($_POST['txtlatests'])){$latest=1;}else{$latest=0;}
	
	/*-------------------------Image info-----------------------------*/
	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	$imagefleimagename2 			= $_FILES['image2fleimage']['name']; 
	$imagefleimagename2_tmp 		= $_FILES['image2fleimage']['tmp_name'];
	$imagefleimagename3 			= $_FILES['image3fleimage']['name']; 
	$imagefleimagename3_tmp 		= $_FILES['image3fleimage']['tmp_name'];
	$imagefleimagename4 			= $_FILES['image4fleimage']['name']; 
	$imagefleimagename4_tmp 		= $_FILES['image4fleimage']['tmp_name'];
	$imagefleimagename5 			= $_FILES['image5fleimage']['name']; 
	$imagefleimagename5_tmp 		= $_FILES['image5fleimage']['tmp_name'];
	$imagefleimagename6 			= $_FILES['image6fleimage']['name']; 
	$imagefleimagename6_tmp 		= $_FILES['image6fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../product.php?m=2&n=Rooms Image');exit(0);}
	//------------------------------------------------------------------

	//-----------------------check compalsory image-------------------------------------------
	/*if($imagefleimagename1==""){
	header('Location: ../add-image.php?m=3&n=Product Image&id='.$productID);exit(0);
	}
	//----------------------------------------------------------------------------------------

	//-----------------------check compalsory image size--------------------------------------
	list($width1,$height1)=getimagesize($imagefleimagename1_tmp);
	if($width1<1000){
		header('Location: ../add-image.php?m=13&n=1000px Product Image&id=');exit(0);
	}
	//----------------------------------------------------------------------------------------*/
	//------now clear all condtion is good-------------if two image not avale-----
	function getExtension($str) {
		$i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
	}
			$no = rand(1,999);
			$tno = rand(1,999);	
	///////--------------Upload Logo Image-----------------////////////


	global $productPath;	
	global $productPathThumb;	
	$ImagePath = "$productPath/";
	$ImageThumbPath = "$productPathThumb/";
	//================================ Image 1 ==============================	

	if(	$imagefleimagename1!=""){
			//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename1;
			$uploadedfile = $imagefleimagename1;
			$imagefleimagename1 = stripslashes($imagefleimagename1);
			$extension = getExtension($imagefleimagename1);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") ) {
					header('Location: ../product.php?m=3');
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setheight=400;
			 $ratio=0.0;
			 /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
			if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight = $height ;
            	  $newwidth = $width ;
			 }
			 $newfile1=$no.$imagefleimagename1;

			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$newfile1);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$imageThumbName = $tno.$imagefleimagename1;
			$imagefleimagename = "$ImageThumbPath/". $imageThumbName;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
			

	//////---------------End Image 1 end------------////////////
	}else{
	$newfile1="";
	 $imageThumbName="";
	}

		//================================ Image 2 ==============================	

	if(	$imagefleimagename2!=""){
			//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename2;
			$uploadedfile = $imagefleimagename2;
			$imagefleimagename2 = stripslashes($imagefleimagename2);
			$extension = getExtension($imagefleimagename2);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") ) {
					header('Location: ../product.php?m=3');
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename2_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename2_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setheight=400;
			 $ratio=0.0;
			 /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
			if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight = $height ;
            	  $newwidth = $width ;
			 }
			 $newfile2=$no.$imagefleimagename2;

			move_uploaded_file($_FILES["image2fleimage"]['tmp_name'], "$ImagePath".$newfile2);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$image2ThumbName = $tno.$imagefleimagename2;
			$imagefleimagename = "$ImageThumbPath/". $image2ThumbName;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
			

	//////---------------End Image 2 end------------////////////
	}else{
	$newfile2="";
	 $image2ThumbName="";
	}

		//================================ Image 3 ==============================	

	if(	$imagefleimagename3!=""){
			//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename3;
			$uploadedfile = $imagefleimagename3;
			$imagefleimagename3 = stripslashes($imagefleimagename3);
			$extension = getExtension($imagefleimagename3);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") ) {
					header('Location: ../product.php?m=3');
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename3_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename3_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setheight=400;
			 $ratio=0.0;
			 /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
			if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight = $height ;
            	  $newwidth = $width ;
			 }
			 $newfile3=$no.$imagefleimagename3;

			move_uploaded_file($_FILES["image3fleimage"]['tmp_name'], "$ImagePath".$newfile3);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$image3ThumbName = $tno.$imagefleimagename3;
			$imagefleimagename = "$ImageThumbPath/". $image3ThumbName;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
			

	//////---------------End Image 3 end------------////////////
	}else{
	$newfile3="";
	 $image3ThumbName="";
	}
			//================================ Image 4 ==============================	

	if(	$imagefleimagename4!=""){
			//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename4;
			$uploadedfile = $imagefleimagename4;
			$imagefleimagename4 = stripslashes($imagefleimagename4);
			$extension = getExtension($imagefleimagename4);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") ) {
					header('Location: ../product.php?m=3');
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename4_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename4_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setheight=400;
			 $ratio=0.0;
			 /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
			if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight = $height ;
            	  $newwidth = $width ;
			 }
			 $newfile4=$no.$imagefleimagename4;

			move_uploaded_file($_FILES["image4fleimage"]['tmp_name'], "$ImagePath".$newfile4);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$image4ThumbName = $tno.$imagefleimagename4;
			$imagefleimagename = "$ImageThumbPath/". $image4ThumbName;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
			

	//////---------------End Image 4 end------------////////////
	}else{
	$newfile4="";
	 $image4ThumbName="";
	}

			//================================ Image 5 ==============================	

	if(	$imagefleimagename5!=""){
			//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename5;
			$uploadedfile = $imagefleimagename5;
			$imagefleimagename5 = stripslashes($imagefleimagename5);
			$extension = getExtension($imagefleimagename5);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") ) {
					header('Location: ../product.php?m=3');
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename5_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename5_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setheight=400;
			 $ratio=0.0;
			 /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
			if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight = $height ;
            	  $newwidth = $width ;
			 }
			 $newfile5=$no.$imagefleimagename5;

			move_uploaded_file($_FILES["image5fleimage"]['tmp_name'], "$ImagePath".$newfile5);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$image5ThumbName = $tno.$imagefleimagename5;
			$imagefleimagename = "$ImageThumbPath/". $image5ThumbName;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
			

	//////---------------End Image 5 end------------////////////
	}else{
	$newfile5="";
	 $image5ThumbName="";
	}

			//================================ Image 6 ==============================	

	if(	$imagefleimagename6!=""){
			//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename6;
			$uploadedfile = $imagefleimagename6;
			$imagefleimagename6 = stripslashes($imagefleimagename6);
			$extension = getExtension($imagefleimagename6);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") ) {
					header('Location: ../product.php?m=3');
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename6_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename6_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setheight=400;
			 $ratio=0.0;
			 /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
			if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight = $height ;
            	  $newwidth = $width ;
			 }
			 $newfile6=$no.$imagefleimagename6;

			move_uploaded_file($_FILES["image6fleimage"]['tmp_name'], "$ImagePath".$newfile6);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$image6ThumbName = $tno.$imagefleimagename6;
			$imagefleimagename = "$ImageThumbPath/". $image6ThumbName;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
			

	//////---------------End Image 6 end------------////////////
	}else{
	$newfile6="";
	 $image6ThumbName="";
	}

	// insert in price 
        for($i=0;$i<=15;$i++)
            {

              $size[$i]	 = 	mysqli_real_escape_string($conn,$_POST['size'][$i]);
              $price[$i] = 	mysqli_real_escape_string($conn,$_POST['price'][$i]);
          $listprice[$i] = 	mysqli_real_escape_string($conn,$_POST['listprice'][$i]);
              $stock[$i] = 	mysqli_real_escape_string($conn,$_POST['stock'][$i]);
               
                if($price[$i]!='')
                {
                    $query=mysqli_query($conn,"insert into tbl_product_price (productId,psize,pprice,pmrp,pstock,pdate,status) values ('$productId','$size[$i]','$price[$i]','$listprice[$i]','$stock[$i]','$date','$status')");
                }

             }

           // insert in stock
        for($j=0;$j<=15;$j++)
            {
              
                 $stock[$j] = 	mysqli_real_escape_string($conn,$_POST['stock'][$j]);
                if($stock[$j]!='')
                {

                    $query1=mysqli_query($conn,"insert into tbl_product_stock (productId,stockIn,stockOut,stock,sdate,status) values ('$productId','$stock[$j]','$stock[$j]','$stock[$j]','$date','$status')");
                }

             }
       // insert in product          

	$sql="insert into tbl_product(category_id,sub_category_id,productname,productid,url,skucode,short_description,image1,thumb1,image2,thumb2,image3,thumb3,image4,thumb4,image5,thumb5,image6,thumb6,status,featured,latest,productDate) 
	values('$category','$subcategory','$name','$productId','$url','$skucode','$shortdescription','$newfile1','$imageThumbName','$newfile2','$image2ThumbName','$newfile3','$image3ThumbName','$newfile4','$image4ThumbName','$newfile5','$image5ThumbName','$newfile6','$image6ThumbName','$status','$featured','$latest','$date')";
 				
			if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
			{
				header('Location: ../product-list.php?m=1');
				// echo "suucess";
				
			}
			else
			{
								//echo "fail";
				header('Location: ../product-list.php?m=0');
				
			}


} 

/*--------Add product close-----------------------------------------------*/	
/*--------Delete Product -----------------------------------------------*/	
   function deleteProduct($conn)
{

	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	
	$del =	"delete from tbl_product where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
		
		header('Location: ../product-list.php?&m=6');
	}
	else
	{
	
		header('Location: ../product-list.php?m=7');
	}

}
 /*--------Delete Product close-----------------------------------------------*/

  /*--------Edit Product -----------------------------------------------*/

 function editProduct($conn)
{ 

	$id	                        =	$_POST['txtid']; 	
	$category	                = 	mysqli_real_escape_string($conn,$_POST['selcategory']);
	$subcategory	            = 	mysqli_real_escape_string($conn,$_POST['selsubcategory']);
	$name	 				    = 	mysqli_real_escape_string($conn,$_POST['txtproductname']); 	
	$url					    = 	strtolower(str_replace(" ","-",$name));
	$url					    = 	strtolower(str_replace("&","and",$url));
	$stock		 			    = 	mysqli_real_escape_string($conn,$_POST['txtstock']);
	$saleprice		 			= 	mysqli_real_escape_string($conn,$_POST['txtsaleprice']); 
	$mrp		 			    = 	mysqli_real_escape_string($conn,$_POST['txtmrp']);  		
	$shortdescription		 	= 	mysqli_real_escape_string($conn,$_POST['txtshortdescription']); 
	$shipping		 			= 	mysqli_real_escape_string($conn,$_POST['txtshipping']);
	$shippingzonal		 		= 	mysqli_real_escape_string($conn,$_POST['txtshippingzonal']);
	$shippinginternational		= 	mysqli_real_escape_string($conn,$_POST['txtshippinginternational']);
	$pcode		 			    = 	mysqli_real_escape_string($conn,$_POST['txtpcode']);
	

if(isset($_POST['txtstatus'])){$status=1;}else{$status=0;}
if(isset($_POST['txtfeatured'])){$featured=1;}else{$featured=0;}
	if(isset($_POST['txtlatests'])){$latest=1;}else{$latest=0;}
	/*-------------------------Image info-----------------------------*/
	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	$imagefleimagename2 			= $_FILES['image2fleimage']['name']; 
	$imagefleimagename2_tmp 		= $_FILES['image2fleimage']['tmp_name'];
	$imagefleimagename3 			= $_FILES['image3fleimage']['name']; 
	$imagefleimagename3_tmp 		= $_FILES['image3fleimage']['tmp_name'];
	$imagefleimagename4 			= $_FILES['image4fleimage']['name']; 
	$imagefleimagename4_tmp 		= $_FILES['image4fleimage']['tmp_name'];
	$imagefleimagename5 			= $_FILES['image5fleimage']['name']; 
	$imagefleimagename5_tmp 		= $_FILES['image5fleimage']['tmp_name'];
	$imagefleimagename6 			= $_FILES['image6fleimage']['name']; 
	$imagefleimagename6_tmp 		= $_FILES['image6fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
//------now clear all condtion is good-------------if two image not avale-----
function getExtension($str) {
	$i = strrpos($str,".");
	 if (!$i) { return ""; } 

	 $l = strlen($str) - $i;
	 $ext = substr($str,$i+1,$l);
	 return $ext;
}

// ------------- get all images  name  -------------------------
$sel = mysqli_query($conn,"select * from tbl_product where id = '$id' ");
$row = mysqli_fetch_assoc($sel);
$Un_OrginalImage1 	= $row['image1'];	
$Un_Image1 			= $row['thumb1'];
$Un_OrginalImage2 	= $row['image2'];
$Un_Image2 			= $row['thumb2'];	
$Un_OrginalImage3 	= $row['image3'];
$Un_Image3 			= $row['thumb3'];	
$Un_OrginalImage4 	= $row['image4'];
$Un_Image4 			= $row['thumb4'];
$Un_OrginalImage5 	= $row['image5'];
$Un_Image5 			= $row['thumb5'];
$Un_OrginalImage6 	= $row['image6'];
$Un_Image6 			= $row['thumb6'];
/*--------------insert record varible record------------*/
$InsertImage1 				= $row['image1'];	
$InsertImagethumb1 			= $row['thumb1'];
$InsertImage2 				= $row['image2'];	
$InsertImagethumb2			= $row['thumb2'];
$InsertImage3 				= $row['image3'];	
$InsertImagethumb3			= $row['thumb3'];
$InsertImage4 				= $row['image4'];	
$InsertImagethumb4			= $row['thumb4'];
$InsertImage5 				= $row['image5'];	
$InsertImagethumb5			= $row['thumb5'];
$InsertImage6 				= $row['image6'];	
$InsertImagethumb6			= $row['thumb6'];
	
	
/*---------------------------*/
$flagImage1		=0;
$flagImage2		=0;
$flagImage3		=0;
$flagImage4		=0;
$flagImage5		=0;
$flagImage6		=0;
// ------------- get all images  name  -------------------------	
			$no = rand(1,999);
			$tno = rand(1,999);	
///////--------------Upload Logo Image-----------------////////////
    global $productPath;	
	global $productPathThumb;	
	$ImagePath = "$productPath/";
	$ImageThumbPath = "$productPathThumb/";
//================================ Image 1 ==============================	
if(	$imagefleimagename1!=""){
	$flagImage1		=1;
	//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename1;
			$uploadedfile = $imagefleimagename1;
			$imagefleimagename1 = stripslashes($imagefleimagename1);
			$extension = getExtension($imagefleimagename1);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")) {
					header('Location: ../product-list.php?m=16&id='.$id);
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setwidth=400;
			 $ratio=0.0;
			 if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }
			/*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/
			 

			 $InsertImage1=$no.$imagefleimagename1;

			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$InsertImage1);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$InsertImagethumb1 = $tno.$imagefleimagename1;
			$imagefleimagename = "$ImageThumbPath/". $InsertImagethumb1;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
	//////---------------End Upload Brand Image------------////////////
}	
// ======================= image 2 =========================
if(	$imagefleimagename2!=""){
	$flagImage2		=2;
	//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename2;
			$uploadedfile = $imagefleimagename2;
			$imagefleimagename2 = stripslashes($imagefleimagename2);
			$extension = getExtension($imagefleimagename2);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")) {
					header('Location: ../product-list.php?m=16&id='.$id);
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename2_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename2_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setwidth=400;
			 $ratio=0.0;
			 if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }
			/*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/
			 

			 $InsertImage2=$no.$imagefleimagename2;

			move_uploaded_file($_FILES["image2fleimage"]['tmp_name'], "$ImagePath".$InsertImage2);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$InsertImagethumb2 = $tno.$imagefleimagename2;
			$imagefleimagename = "$ImageThumbPath/". $InsertImagethumb2;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
	//////---------------End Upload Brand Image------------////////////
}	
//================================ Image 2 End==============================
/*----------------------------------------------*/

// ======================= image 3 =========================
if(	$imagefleimagename3!=""){
	$flagImage3	=3;
	//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename3;
			$uploadedfile = $imagefleimagename3;
			$imagefleimagename3 = stripslashes($imagefleimagename3);
			$extension = getExtension($imagefleimagename3);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")) {
					header('Location: ../product-list.php?m=16&id='.$id);
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename3_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename3_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setwidth=400;
			 $ratio=0.0;
			 if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }
			/*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/
			 

			 $InsertImage3=$no.$imagefleimagename3;

			move_uploaded_file($_FILES["image3fleimage"]['tmp_name'], "$ImagePath".$InsertImage3);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$InsertImagethumb3 = $tno.$imagefleimagename3;
			$imagefleimagename = "$ImageThumbPath/". $InsertImagethumb3;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
	//////---------------End Upload Brand Image------------////////////
}	
//================================ Image 3 End==============================

// ======================= image 4 =========================
if(	$imagefleimagename4!=""){
	$flagImage4	=4;
	//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename4;
			$uploadedfile = $imagefleimagename4;
			$imagefleimagename4 = stripslashes($imagefleimagename4);
			$extension = getExtension($imagefleimagename4);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")) {
					header('Location: ../product-list.php?m=16&id='.$id);
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename4_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename4_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setwidth=400;
			 $ratio=0.0;
			 if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }
			/*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/
			 

			 $InsertImage4=$no.$imagefleimagename4;

			move_uploaded_file($_FILES["image4fleimage"]['tmp_name'], "$ImagePath".$InsertImage4);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$InsertImagethumb4 = $tno.$imagefleimagename4;
			$imagefleimagename = "$ImageThumbPath/". $InsertImagethumb4;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
	//////---------------End Upload Brand Image------------////////////
}	
//================================ Image 4 End==============================

// ======================= image 5 =========================
if(	$imagefleimagename5!=""){
	$flagImage5	=5;
	//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename5;
			$uploadedfile = $imagefleimagename5;
			$imagefleimagename5 = stripslashes($imagefleimagename5);
			$extension = getExtension($imagefleimagename5);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")) {
					header('Location: ../product-list.php?m=16&id='.$id);
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename5_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename5_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setwidth=400;
			 $ratio=0.0;
			 if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }
			/*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/
			 

			 $InsertImage5=$no.$imagefleimagename5;

			move_uploaded_file($_FILES["image5fleimage"]['tmp_name'], "$ImagePath".$InsertImage5);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$InsertImagethumb5 = $tno.$imagefleimagename5;
			$imagefleimagename = "$ImageThumbPath/". $InsertImagethumb5;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
	//////---------------End Upload Brand Image------------////////////
}	
//================================ Image 5 End==============================
// ======================= image 6 =========================
if(	$imagefleimagename6!=""){
	$flagImage6	=6;
	//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename6;
			$uploadedfile = $imagefleimagename6;
			$imagefleimagename6 = stripslashes($imagefleimagename6);
			$extension = getExtension($imagefleimagename6);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")) {
					header('Location: ../product-list.php?m=16&id='.$id);
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename6_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename6_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setwidth=400;
			 $ratio=0.0;
			 if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }
			/*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/
			 

			 $InsertImage6=$no.$imagefleimagename6;

			move_uploaded_file($_FILES["image6fleimage"]['tmp_name'], "$ImagePath".$InsertImage6);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$InsertImagethumb6 = $tno.$imagefleimagename6;
			$imagefleimagename = "$ImageThumbPath/". $InsertImagethumb6;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
	//////---------------End Upload Brand Image------------////////////
}	
//================================ Image 6 End==============================


/*----------------------------------------------*/


$sqladd = mysqli_query($conn,"update tbl_product set 
category_id='$category',
sub_category_id='$subcategory',
name='$name',
url='$url',
stock='$stock',
sale_price='$saleprice',
mrp_price='$mrp',
shipping='$shipping',
shippingzonal='$shippingzonal',
shippinginternational='$shippinginternational',
pcode='$pcode',
short_description='$shortdescription',
image1='$InsertImage1',
thumb1='$InsertImagethumb1',
image2='$InsertImage2',
thumb2='$InsertImagethumb2',
image3='$InsertImage3',
thumb3='$InsertImagethumb3',
image4='$InsertImage4',
thumb4='$InsertImagethumb4',
image5='$InsertImage5',
thumb5='$InsertImagethumb5',
image6='$InsertImage6',
thumb6='$InsertImagethumb6',
status='$status',
featured='$featured',
latest='$latest'

where id = '$id'") or die(mysqli_error($conn));





 if(mysqli_affected_rows($conn) > 0)
	{
		if($flagImage1==1){
			if($Un_OrginalImage1!=""){
				unlink($ImagePath.$Un_OrginalImage1);
				unlink($ImageThumbPath.$Un_Image1);
			}
		}
		if($flagImage2==2){
			if($Un_OrginalImage2!=""){
				unlink($ImagePath.$Un_OrginalImage2);
				unlink($ImageThumbPath.$Un_Image2);
			}
		}
		if($flagImage3==3){
			if($Un_OrginalImage3!=""){
				unlink($ImagePath.$Un_OrginalImage3);
				unlink($ImageThumbPath.$Un_Image3);
			}
		}
		if($flagImage4==4){
			if($Un_OrginalImage4!=""){
				unlink($ImagePath.$Un_OrginalImage4);
				unlink($ImageThumbPath.$Un_Image4);
			}
		}
		if($flagImage5==5){
			if($Un_OrginalImage5!=""){
				unlink($ImagePath.$Un_OrginalImage5);
				unlink($ImageThumbPath.$Un_Image5);
			}
		}
		if($flagImage6==6){
			if($Un_OrginalImage6!=""){
				unlink($ImagePath.$Un_OrginalImage6);
				unlink($ImageThumbPath.$Un_Image6);
			}
		}
		header('Location: ../product-list.php?m=4');
		//echo "success";
	}
	else
	{
		header('Location: ../product-list.php?m=5');
	}
} 
	/*--------Add Gallery-----------------------------------------------*/

function addGallery($conn)
{  	
	$name		= mysqli_real_escape_string($conn,$_POST['txtname']); 

	
	if(isset($_POST['txtstatus'])){$status=1;}else{$status=0;}

	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];

	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../gallery.php?m=2&n=Rooms Image');exit(0);}
	//------------------------------------------------------------------
		//------now clear all condtion is good-------------if two image not avale-----
	function getExtension($str) {
		$i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
	}
			$no = rand(1,999);
			$tno = rand(1,999);	
	///////--------------Upload Logo Image-----------------////////////


	global $galleryPath;	
	global $galleryPathThumb;	
	$ImagePath = "$galleryPath/";
	$ImageThumbPath = "$galleryPathThumb/";
	//================================ Image 1 ==============================	

	if(	$imagefleimagename1!=""){
			//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename1;
			$uploadedfile = $imagefleimagename1;
			$imagefleimagename1 = stripslashes($imagefleimagename1);
			$extension = getExtension($imagefleimagename1);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") ) {
					header('Location: ../category.php?m=3');
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setheight=400;
			 $ratio=0.0;
			 /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
			if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight = $height ;
            	  $newwidth = $width ;
			 }
			 $newfile1=$no.$imagefleimagename1;

			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$newfile1);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$imageThumbName = $tno.$imagefleimagename1;
			$imagefleimagename = "$ImageThumbPath/". $imageThumbName;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
			

	//////---------------End Image 1 end------------////////////
	}else{
	$newfile1="";
	 $imageThumbName="";
	}


	$sql="insert into  tbl_gallery(name,image,thumb,status) values('$name','$newfile1','$imageThumbName','$status')";
	if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
	{
		header('Location: ../gallery-list.php?m=1');
		//echo "success";
	}
	else
	{
		header('Location: ../gallery-list.php?m=0');
		//echo "fail";
	}
} 	
   /*--------Add Gallery close-----------------------------------------------*/

   /*--------Delete Gallery -----------------------------------------------*/	
   function deleteGallery($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	
	$del =	"delete from tbl_gallery where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
			
		header('Location: ../gallery-list.php?&m=6');
	}
	else
	{
	
		header('Location: ../gallery-list.php?m=7');
	}

}
 /*--------Delete Gallery close-----------------------------------------------*/
  /*--------Edit Gallery close-----------------------------------------------*/

 function editGallery($conn)
{

	$id				    = $_POST['txtid']; 
	$name		= mysqli_real_escape_string($conn,$_POST['txtname']); 
	
	if(isset($_POST['txtstatus'])){$status=1;}else{$status=0;} 

	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];

	//------now clear all condtion is good-------------if two image not avale-----
function getExtension($str) {
	$i = strrpos($str,".");
	 if (!$i) { return ""; } 

	 $l = strlen($str) - $i;
	 $ext = substr($str,$i+1,$l);
	 return $ext;
}

// ------------- get all images  name  -------------------------
$sel = mysqli_query($conn,"select * from tbl_gallery where id = '$id' ");
$row = mysqli_fetch_assoc($sel);
$Un_OrginalImage1 	= $row['image'];	
$Un_Image1 			= $row['thumb'];

/*--------------insert record varible record------------*/
$InsertImage1 				= $row['image'];	
$InsertImagethumb1 			= $row['thumb'];

/*---------------------------*/
$flagImage1		=0;
$flagImage2		=0;
// ------------- get all images  name  -------------------------	
			$no = rand(1,999);
			$tno = rand(1,999);	
///////--------------Upload Logo Image-----------------////////////
 	global $galleryPath;	
	global $galleryPathThumb;	
	$ImagePath = "$galleryPath/";
	$ImageThumbPath = "$galleryPathThumb/";
//================================ Image 1 ==============================	
if(	$imagefleimagename1!=""){
	$flagImage1		=1;
	//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename1;
			$uploadedfile = $imagefleimagename1;
			$imagefleimagename1 = stripslashes($imagefleimagename1);
			$extension = getExtension($imagefleimagename1);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")) {
					header('Location: ../category-list.php?m=16&id='.$id);
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setwidth=400;
			 $ratio=0.0;
			 if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }
			/*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/
			 

			 $InsertImage1=$no.$imagefleimagename1;

			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$InsertImage1);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$InsertImagethumb1 = $tno.$imagefleimagename1;
			$imagefleimagename = "$ImageThumbPath/". $InsertImagethumb1;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
	//////---------------End Upload Brand Image------------////////////
}	



	$sqladd = mysqli_query($conn,"update tbl_gallery set 
	name='$name',
	image='$InsertImage1',
	thumb='$InsertImagethumb1',
	status='$status'
	 where id = '$id'") or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn) > 0)
	{
		// echo "1";
		header('Location: ../gallery-list.php?m=4');
	}
	else
	{
		// echo "0";
		header('Location: ../gallery-list.php?m=5');
	}

} 
 /*--------Edit Gallery close-----------------------------------------------*/
 /*--------Add Blogs-----------------------------------------------*/

function addBlog($conn)
{  	
	$name		= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$desc		= mysqli_real_escape_string($conn,$_POST['txtdescription']);

	
	if(isset($_POST['txtstatus'])){$status=1;}else{$status=0;}

	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];

	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../blog.php?m=2&n=Rooms Image');exit(0);}
	//------------------------------------------------------------------
		//------now clear all condtion is good-------------if two image not avale-----
	function getExtension($str) {
		$i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
	}
			$no = rand(1,999);
			$tno = rand(1,999);	
	///////--------------Upload Logo Image-----------------////////////


	global $blogPath;	
	global $blogPathThumb;	
	$ImagePath = "$blogPath/";
	$ImageThumbPath = "$blogPathThumb/";
	//================================ Image 1 ==============================	

	if(	$imagefleimagename1!=""){
			//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename1;
			$uploadedfile = $imagefleimagename1;
			$imagefleimagename1 = stripslashes($imagefleimagename1);
			$extension = getExtension($imagefleimagename1);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") ) {
					header('Location: ../blog.php?m=3');
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setheight=400;
			 $ratio=0.0;
			 /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
			if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight = $height ;
            	  $newwidth = $width ;
			 }
			 $newfile1=$no.$imagefleimagename1;

			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$newfile1);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$imageThumbName = $tno.$imagefleimagename1;
			$imagefleimagename = "$ImageThumbPath/". $imageThumbName;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
			

	//////---------------End Image 1 end------------////////////
	}else{
	$newfile1="";
	 $imageThumbName="";
	}


	$sql="insert into  tbl_blog(name,description,image,thumb,date,status) values('$name','$desc','$newfile1','$imageThumbName',now(),'$status')";
	if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
	{
		header('Location: ../blog-list.php?m=1');
		//echo "success";
	}
	else
	{
		header('Location: ../blog-list.php?m=0');
		//echo "fail";
	}
} 	
   /*--------Add Blog close-----------------------------------------------*/

   /*--------Delete Blog -----------------------------------------------*/	
   function deleteBlog($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	
	$del =	"delete from tbl_blog where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
			
		header('Location: ../blog-list.php?&m=6');
	}
	else
	{
	
		header('Location: ../blog-list.php?m=7');
	}

}
 /*--------Delete Blog close-----------------------------------------------*/
  /*--------Edit Blog close-----------------------------------------------*/

 function editBlog($conn)
{

	$id				    = $_POST['txtid']; 
	$name		= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$desc		= mysqli_real_escape_string($conn,$_POST['txtdescription']);
	
	if(isset($_POST['txtstatus'])){$status=1;}else{$status=0;} 

	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];

	//------now clear all condtion is good-------------if two image not avale-----
function getExtension($str) {
	$i = strrpos($str,".");
	 if (!$i) { return ""; } 

	 $l = strlen($str) - $i;
	 $ext = substr($str,$i+1,$l);
	 return $ext;
}

// ------------- get all images  name  -------------------------
$sel = mysqli_query($conn,"select * from tbl_blog where id = '$id' ");
$row = mysqli_fetch_assoc($sel);
$Un_OrginalImage1 	= $row['image'];	
$Un_Image1 			= $row['thumb'];

/*--------------insert record varible record------------*/
$InsertImage1 				= $row['image'];	
$InsertImagethumb1 			= $row['thumb'];

/*---------------------------*/
$flagImage1		=0;
$flagImage2		=0;
// ------------- get all images  name  -------------------------	
			$no = rand(1,999);
			$tno = rand(1,999);	
///////--------------Upload Logo Image-----------------////////////
 	global $blogPath;	
	global $blogPathThumb;	
	$ImagePath = "$blogPath/";
	$ImageThumbPath = "$blogPathThumb/";
//================================ Image 1 ==============================	
if(	$imagefleimagename1!=""){
	$flagImage1		=1;
	//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename1;
			$uploadedfile = $imagefleimagename1;
			$imagefleimagename1 = stripslashes($imagefleimagename1);
			$extension = getExtension($imagefleimagename1);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")) {
					header('Location: ../blog-list.php?m=16&id='.$id);
					exit();
			}
			if($extension=="jpg" || $extension=="jpeg" ){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}else if($extension=="png"){
				$uploadedfile = $imagefleimagename1_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}else {
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setwidth=400;
			 $ratio=0.0;
			 if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }
			/*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/
			 

			 $InsertImage1=$no.$imagefleimagename1;

			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$InsertImage1);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$InsertImagethumb1 = $tno.$imagefleimagename1;
			$imagefleimagename = "$ImageThumbPath/". $InsertImagethumb1;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
	//////---------------End Upload Brand Image------------////////////
}	



	$sqladd = mysqli_query($conn,"update tbl_blog set 
	name='$name',
	description='$desc',
	image='$InsertImage1',
	thumb='$InsertImagethumb1',
	status='$status'
	 where id = '$id'") or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn) > 0)
	{
		// echo "1";
		header('Location: ../blog-list.php?m=4');
	}
	else
	{
		// echo "0";
		header('Location: ../blog-list.php?m=5');
	}

} 
 /*--------Edit Blog close-----------------------------------------------*/
?>		