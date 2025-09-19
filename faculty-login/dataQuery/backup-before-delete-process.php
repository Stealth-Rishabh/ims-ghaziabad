<?php
	require_once '../loginQuery/session_start2.php'; 
	require_once '../dbc.php';
	require_once 'common-function.php'; 
	$action = isset($_POST['action']) ? $_POST['action'] : ''; 
	switch($action)
	{
		case 'addCategory':
		 	addCategory($conn);		
			break;	
		case 'editCategory':
		 	editCategory($conn);
			break;		
		case 'addItem':
			addItem($conn);
			break;
		case 'editItem':
			editItem($conn);
			break;
		case 'addBrand':
			addBrand($conn);
			break;
		case 'editBrand':
			editBrand($conn);
			break;	
			
			
		case 'editSocialSetting':
		 	editSocialSetting($conn);
			break;
		case 'editBusinessSetting':
		 	editBusinessSetting($conn);
			break;
		case 'editCompanyLocationSetting':
		 	editCompanyLocationSetting($conn);
			break;
		case 'editHomePageSetting':
		 	editHomePageSetting($conn);
			break;	
		case 'addCompanyLocation':
		 	addCompanyLocation($conn);		
			break;	
		case 'editCompanyLocation':
		 	editCompanyLocation($conn);
			break;
		
			
		
		case 'addRegestration':
		 	addRegestration($conn);
			break;
		case 'editRegestration':
			editRegestration($conn);
			break;
		case 'addSize':
		 	addSize();
			break;
		case 'editSize':
			editSize();
			break;				
		
		
			
					
		default :
		//header('Location: ../home.php');
	}
	$action2 = isset($_GET['action2']) ? $_GET['action2'] : '';
	switch($action2)
	{
		
		case 'deleteCategory':
			deleteCategory($conn);
			break;
		case 'deleteItem':
			deleteItem($conn);
			break;
		case 'deleteBrand':
			deleteBrand($conn);
			break;	
		case 'deletePersonCategory':
			deletePersonCategory();
			break;
		case 'deleteFieldCategory':
			deleteFieldCategory();
			break;		
		
		case 'deleteSize':
			deleteSize();
			break;
		case 'deleteProduct':
			deleteProduct($conn);
			break;			
		case 'setImage':
			setImage();
			break;	
		case 'deleteProductImage':
			deleteProductImage();
			break;
		case 'deleteActivities':
			deleteActivities();
			break;	
		case 'updateSetting':
			updateSetting();			
			break;		
		default :

	}
	
	// 0- Record has not been saved successfully
	// 1- Record has been saved successfully
	// 2- this image content two dot (.) 
	// 3- Pleas Select Image
	// 4- Record has been updated 
	// 5- Record has not been updated
	// 6- Rrecord has been delteted
	// 7- Record has not been delteted
	
function editSocialSetting($conn)
{
	$facebook	= mysqli_real_escape_string($conn,$_POST['txtfacebook']); 
	$instagram		 	= mysqli_real_escape_string($conn,$_POST['txtinstagram']); 
	$twitter		 	= mysqli_real_escape_string($conn,$_POST['txttwitter']); 
	$youtube	 		= mysqli_real_escape_string($conn,$_POST['txtyoutube']); 
	$googleplus	= mysqli_real_escape_string($conn,$_POST['txtgoogleplus']); 
	
	$sqladd = mysqli_query($conn,"update  tbl_setting set 
	facebook='$facebook',
	instagram='$instagram',
	twitter='$twitter',
	youtube='$youtube',
	
	googleplus='$googleplus'
	where id = '1'") or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn) > 0)
	{
		echo "1";
	}
	else
	{
		echo "0";
	}

} 
/*--------product-----------------------------------------------*/
function editBusinessSetting($conn){
	$companyname	 		= mysqli_real_escape_string($conn,$_POST['txtcompanyname']); 
	$gstno	 				= mysqli_real_escape_string($conn,$_POST['txtgstno']); 
	$customercaremobile		= mysqli_real_escape_string($conn,$_POST['txttcustomercaremobile']); 
	$customercareemail	 	= mysqli_real_escape_string($conn,$_POST['txtcustomercareemail']); 
	$dealercaremobile	 	= mysqli_real_escape_string($conn,$_POST['txtdealercaremobile']); 
	$dealercareemail	 	= mysqli_real_escape_string($conn,$_POST['txtdealercareemail']); 
	$businessphone	 		= mysqli_real_escape_string($conn,$_POST['txtbusinessphone']); 
	$businessemail	 		= mysqli_real_escape_string($conn,$_POST['txtbusinessemail']); 
//------------------brand logo--------------------------
	$imagefleimagename1 	= $_FILES['logofleimage']['name']; 
	$imagefleimagename1_tmp = $_FILES['logofleimage']['tmp_name'];
//------------------brand img 1-------------------------

//------now clear all condtion is good-------------if two image not avale-----
function getExtension($str) {
	$i = strrpos($str,".");
	 if (!$i) { return ""; } 

	 $l = strlen($str) - $i;
	 $ext = substr($str,$i+1,$l);
	 return $ext;
}
// ------------- get all images  name  -------------------------
global $settingPath;	
$ImagePath = "$settingPath/";
$sel = mysqli_query($conn,"select * from  tbl_setting where id = '1' ");
$row = mysqli_fetch_assoc($sel);
$Un_logo 	= $row['logo'];	
$logoImage = $row['logo'];	
//======================== Image 6 ===========================
$flaglogo=0;
if(	$imagefleimagename1!=""){
		$flaglogo	= 1;
		$extension = getExtension($imagefleimagename1);
		$extension = strtolower($extension);
		$no=rand(10000,99999);
		/*-------------------------------*/
		/*---------------------------------*/
		if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") ) {
				//header('Location: ../product.php?m=3');
				//exit();
		}
		$logoImage=$no.$imagefleimagename1;
		move_uploaded_file($_FILES["logofleimage"]['tmp_name'], "$ImagePath".$logoImage);
//////---------------End Upload Brand Image------------////////////
}	
//================================ Image 6 End==============================
/*----------------------------------------------*/
 
$sqladd = mysqli_query($conn,"update tbl_setting set 
company_name='$companyname',
gstno='$gstno',
customer_care_mobile='$customercaremobile',
customer_care_email='$customercareemail',
dealer_care_mobile='$dealercaremobile',
dealer_care_email='$dealercareemail', 
business_phone='$businessphone',
business_email='$businessemail',
logo='$logoImage' 
where id = '1'") or die(mysqli_error($conn));
 if(mysqli_affected_rows($conn) > 0)
	{
		if($flaglogo==1){
			if($Un_logo!=""){
				unlink($ImagePath.$Un_logo);
			}	
		}
		echo "1";
	}
	else
	{
		echo "0";
		//echo "not update";
	}
}		
//---------------------------------------------------------------
function editCompanyLocationSetting($conn)
{
	$companyaddressline1		=	 mysqli_real_escape_string($conn,$_POST['txtcompanyaddressline1']); 
	$companyaddressline2		=	 mysqli_real_escape_string($conn,$_POST['txtcompanyaddressline2']); 
	$pincode		=	 mysqli_real_escape_string($conn,$_POST['txtpincode']); 
	$companyname	 		= mysqli_real_escape_string($conn,$_POST['txtcompanyname']); 
	$gstno	 				= mysqli_real_escape_string($conn,$_POST['txtgstno']); 
	$customercaremobile		= mysqli_real_escape_string($conn,$_POST['txttcustomercaremobile']); 
	$customercareemail	 	= mysqli_real_escape_string($conn,$_POST['txtcustomercareemail']); 
	
	$city					=	 mysqli_real_escape_string($conn,$_POST['selcity']); 
	$state	 				=	mysqli_real_escape_string($conn,$_POST['selstate']); 
	$country					= mysqli_real_escape_string($conn,$_POST['selcountry']); 
	$phone1					=	 mysqli_real_escape_string($conn,$_POST['txtphone1']); 
	$phone2					=	 mysqli_real_escape_string($conn,$_POST['txtphone2']); 
	$map						=	 mysqli_real_escape_string($conn,$_POST['txtmap']); 
	
	//------------------brand logo--------------------------
	$imagefleimagename1 	= $_FILES['logofleimage']['name']; 
	$imagefleimagename1_tmp = $_FILES['logofleimage']['tmp_name'];
//------------------brand img 1-------------------------
	//------now clear all condtion is good-------------if two image not avale-----
function getExtension($str) {
	$i = strrpos($str,".");
	 if (!$i) { return ""; } 

	 $l = strlen($str) - $i;
	 $ext = substr($str,$i+1,$l);
	 return $ext;
}
// ------------- get all images  name  -------------------------
global $settingPath;	
$ImagePath = "$settingPath/";
$sel = mysqli_query($conn,"select * from  tbl_setting where id = '1' ");
$row = mysqli_fetch_assoc($sel);
$Un_logo 	= $row['logo'];	
$logoImage = $row['logo'];	
//======================== Image 6 ===========================
$flaglogo=0;
if(	$imagefleimagename1!=""){
		$flaglogo	= 1;
		$extension = getExtension($imagefleimagename1);
		$extension = strtolower($extension);
		$no=rand(10000,99999);
		/*-------------------------------*/
		/*---------------------------------*/
		if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") ) {
				//header('Location: ../product.php?m=3');
				//exit();
		}
		$logoImage=$no.$imagefleimagename1;
		move_uploaded_file($_FILES["logofleimage"]['tmp_name'], "$ImagePath".$logoImage);
//////---------------End Upload Brand Image------------////////////
}	
//================================ Image 6 End==============================
	
	$sqladd = mysqli_query($conn,"update  tbl_setting set 
	company_name='$companyname',
gstno='$gstno',
customer_care_mobile='$customercaremobile',
customer_care_email='$customercareemail',

	company_address_line1='$companyaddressline1',
	company_address_line2='$companyaddressline2',
	pincode='$pincode',
	city='$city',
	state='$state',
	country='$country',
	phone1='$phone1',
	phone2='$phone2',
	map='$map',
	logo='$logoImage' 
	where id = '1'") or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn) > 0)
	{
		echo "1";
	}
	else
	{
		echo "0";
	}

} 
/*---------------------------------------------------------------*/
/*--------product-----------------------------------------------*/
function editHomePageSetting($conn){
	$fbtitle	 		= mysqli_real_escape_string($conn,$_POST['txtfbtitle']); 
	$fbdescription	 				= mysqli_real_escape_string($conn,$_POST['txtfbdescription']); 
	$twitter		= mysqli_real_escape_string($conn,$_POST['txttwitter']); 
	$twitterdescription	 	= mysqli_real_escape_string($conn,$_POST['txttwitterdescription']); 
	$homepagemetatitle	 	= mysqli_real_escape_string($conn,$_POST['txthomepagemetatitle']); 
	$homepagemetakeyword	 	= mysqli_real_escape_string($conn,$_POST['txthomepagemetakeyword']); 
	$homepagemetadescription	 		= mysqli_real_escape_string($conn,$_POST['txthomepagemetadescription']); 

//------------------brand logo--------------------------
	$imagefleimagename1 	= $_FILES['logofleimage']['name']; 
	$imagefleimagename1_tmp = $_FILES['logofleimage']['tmp_name'];
//------------------brand img 1-------------------------

//------now clear all condtion is good-------------if two image not avale-----
function getExtension($str) {
	$i = strrpos($str,".");
	 if (!$i) { return ""; } 

	 $l = strlen($str) - $i;
	 $ext = substr($str,$i+1,$l);
	 return $ext;
}
// ------------- get all images  name  -------------------------
global $settingPath;	
$ImagePath = "$settingPath/";
$sel = mysqli_query($conn,"select * from  tbl_setting where id = '1' ");
$row = mysqli_fetch_assoc($sel);
$Un_logo 	= $row['fb_image'];	
$logoImage = $row['fb_image'];	
//======================== Image 6 ===========================
$flaglogo=0;
if(	$imagefleimagename1!=""){
		$flaglogo	= 1;
		$extension = getExtension($imagefleimagename1);
		$extension = strtolower($extension);
		$no=rand(10000,99999);
		/*-------------------------------*/
		/*---------------------------------*/
		if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") ) {
				//header('Location: ../product.php?m=3');
				//exit();
		}
		$logoImage=$no.$imagefleimagename1;
		move_uploaded_file($_FILES["logofleimage"]['tmp_name'], "$ImagePath".$logoImage);
//////---------------End Upload Brand Image------------////////////
}	
//================================ Image 6 End==============================
/*----------------------------------------------*/
 
$sqladd = mysqli_query($conn,"update tbl_setting set 

home_page_meta_title='$homepagemetatitle',
home_page_meta_keyword='$homepagemetakeyword', 
home_page_meta_description='$homepagemetadescription'
where id = '1'") or die(mysqli_error($conn));
 if(mysqli_affected_rows($conn) > 0)
	{
		if($flaglogo==1){
			if($Un_logo!=""){
				unlink($ImagePath.$Un_logo);
			}	
		}
		echo "1";
	}
	else
	{
		echo "0";
		//echo "not update";
	}
}	
/*----------------------------------------------------*/
function addCompanyLocation($conn)
{
	$companyaddressline1		=	 mysqli_real_escape_string($conn,$_POST['txtcompanyaddressline1']); 
	$companyaddressline2		=	 mysqli_real_escape_string($conn,$_POST['txtcompanyaddressline2']); 
	$pincode					=	 mysqli_real_escape_string($conn,$_POST['txtpincode']); 
	$city						=	 mysqli_real_escape_string($conn,$_POST['selcity']); 
	$state	 					=	 mysqli_real_escape_string($conn,$_POST['selstate']); 
	$country					=	 mysqli_real_escape_string($conn,$_POST['selcountry']); 
	$phone1						=	 mysqli_real_escape_string($conn,$_POST['txtphone1']); 
	$phone2						=	 mysqli_real_escape_string($conn,$_POST['txtphone2']); 
	$map						=	 mysqli_real_escape_string($conn,$_POST['txtmap']); 
	$location					=	 mysqli_real_escape_string($conn,$_POST['sellocation']); 
	if(isset($_POST['visible'])){
		$visible=1;
	}else{
		$visible=0;
	}
	
	
	
	$sql="insert into  tbl_location(
	location_type_id,
	company_address_line1,
	company_address_line2,
	pincode,
	city,
	state,
	country,
	phone1,
	phone2,
	map,visible) values('$location','$companyaddressline1','$companyaddressline2','$pincode','$city','$state','$country','$phone1','$phone2','$map','$visible')";
	if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
	{
		header('Location: ../location-list.php?m=1');
		//echo "success";
	}
	else
	{
		header('Location: ../location-list.php?m=0');
		//echo "fail";
	}

} 
function editCompanyLocation($conn)
{
	$id	=	$_POST['txtid']; 
	$companyaddressline1		=	 mysqli_real_escape_string($conn,$_POST['txtcompanyaddressline1']); 
	$companyaddressline2		=	 mysqli_real_escape_string($conn,$_POST['txtcompanyaddressline2']); 
	$pincode					=	 mysqli_real_escape_string($conn,$_POST['txtpincode']); 
	$city						=	 mysqli_real_escape_string($conn,$_POST['selcity']); 
	$state	 					=	 mysqli_real_escape_string($conn,$_POST['selstate']); 
	$country					=	 mysqli_real_escape_string($conn,$_POST['selcountry']); 
	$phone1						=	 mysqli_real_escape_string($conn,$_POST['txtphone1']); 
	$phone2						=	 mysqli_real_escape_string($conn,$_POST['txtphone2']); 
	$map						=	 mysqli_real_escape_string($conn,$_POST['txtmap']); 
	$location					=	 mysqli_real_escape_string($conn,$_POST['sellocation']); 
	if(isset($_POST['visible'])){
		$visible=1;
	}else{
		$visible=0;
	}
	
	
	$sqladd = mysqli_query($conn,"update  tbl_location set 
	location_type_id='$location',
	company_address_line1='$companyaddressline1',
	company_address_line2='$companyaddressline2',
	pincode='$pincode',
	city='$city',
	state='$state',
	country='$country',
	phone1='$phone1',
	phone2='$phone2',
	map='$map',
	visible='$visible'
	where id = '$id'") or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn) > 0)
	{
		header('Location: ../location-list.php?m=4');
	}
	else
	{
		header('Location: ../location-list.php?m=5');
	}

} 

function deleteLocation($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql = mysqli_query($conn,"START TRANSACTION");
	$del =	"delete from tbl_location where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
		mysqli_query($conn,"COMMIT");	
		header('Location: ../location-list.php?&m=6');
	}
	else
	{
		mysqli_query($conn,"ROLLBACK");	
		header('Location: ../location-list.php?m=7');
	}

}

/*---------------category--------------------------*/
/*----------------------------------------------------*/
function addCategory($conn)
{
	$name	= mysqli_real_escape_string($conn,$_POST['categoryname']); 
	$url	= strtolower(str_replace(" ","-",$name));
	$sortorder	= mysqli_real_escape_string($conn,$_POST['txtsortorder']); 
	
	$title	= mysqli_real_escape_string($conn,$_POST['txttitle']); 
	$keyword	= mysqli_real_escape_string($conn,$_POST['txtkeyword']); 
	$decription	= mysqli_real_escape_string($conn,$_POST['txtdecription']); 
	if(isset($_POST['status'])){$status	=1;}else{$status=0;}
	 
	
	
	
	
	
	
	
	$sqlc=mysqli_query($conn,"select * from tbl_category where url='$url'") or die(mysqli_query($conn));
	if(mysqli_num_rows($sqlc)>0){
		header('Location: ../category.php?m=14');
		
	}else{
		$sql="insert into  tbl_category(name,url,visibility_status,sort_order,meta_title,meta_keyword,meta_description) values('$name','$url','$status','$sortorder','$title','$keyword','$decription')";
		if(mysqli_query($conn,$sql) or die(mysql_error($conn)))
		{
			header('Location: ../category-list.php?m=1');
		}
		else
		{
			header('Location: ../category-list.php?m=0');
		}
	}
} 
function editCategory($conn)
{
	$id	=	$_POST['txtid']; 
	$name	= mysqli_real_escape_string($conn,$_POST['categoryname']); 
	$url	= strtolower(str_replace(" ","-",$name));
	$sortorder	= mysqli_real_escape_string($conn,$_POST['txtsortorder']); 
	
	$title	= mysqli_real_escape_string($conn,$_POST['txttitle']); 
	$keyword	= mysqli_real_escape_string($conn,$_POST['txtkeyword']); 
	$decription	= mysqli_real_escape_string($conn,$_POST['txtdecription']); 
	if(isset($_POST['status'])){$status	=1;}else{$status=0;}
	
	
	$sqlc=mysqli_query($conn,"select * from tbl_category where url='$url' and id!='$id'") or die(mysqli_query($conn));
	if(mysqli_num_rows($sqlc)>0){
		header('Location: ../category.php?m=14&id='.$id);
	}else{
		$sqladd = mysqli_query($conn,"update  tbl_category set 
		name='$name',
		visibility_status='$status',
		sort_order='$sortorder',
		meta_title='$title',
		meta_keyword='$keyword',
		meta_description='$decription',
		url='$url' where id = '$id'") or die(mysqli_error($conn));
		if(mysqli_affected_rows($conn) > 0)
		{
			header('Location: ../category-list.php?m=4');
		}
		else
		{
			header('Location: ../category-list.php?m=5');
		}
	}
} 

function deleteCategory($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql = mysqli_query($conn,"START TRANSACTION");
	$del =	"delete from tbl_category where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
		mysqli_query($conn,"COMMIT");	
		header('Location: ../category-list.php?m=6');
	}
	else
	{
		mysqli_query($conn,"ROLLBACK");	
		header('Location: ../category-list.php?m=7');
	}

}
/*--------------end category----------------------*/
/*--------product-----------------------------------------------*/
function addItem($conn)
{  
	$variantcode	 		= 	mysqli_real_escape_string($conn,$_POST['variantcode']); 	
	if($variantcode==""){
		$variantcode= rand(1000000000,9999999999);
	}
	
	$itemdescription	 	= 	mysqli_real_escape_string($conn,$_POST['txtitemdescription']); 	
	$itemcategory	 	= 	mysqli_real_escape_string($conn,$_POST['selitemcategory']); 	
	$itemsubcategory	 	= 	mysqli_real_escape_string($conn,$_POST['selproductcategory']); 	
	$name	 		= 	mysqli_real_escape_string($conn,$_POST['txtitemname']); 	
	$sku	 				= 	mysqli_real_escape_string($conn,$_POST['txtsku']); 	
	$stock	 			= 	mysqli_real_escape_string($conn,$_POST['txtstock']); 	
	$mrp	 				= 	mysqli_real_escape_string($conn,$_POST['txtmrp']); 	
	$generalprice	 	= 	mysqli_real_escape_string($conn,$_POST['txtgeneralprice']); 	
	$memberprice			= mysqli_real_escape_string($conn,$_POST['txtmemberprice']); 
	$title			= mysqli_real_escape_string($conn,$_POST['txttitle']); 
	$keyword			= mysqli_real_escape_string($conn,$_POST['txtkeyword']); 
	$decription			= mysqli_real_escape_string($conn,$_POST['txtdecription']); 
	$mlmpoint				= 	mysqli_real_escape_string($conn,$_POST['txtmlmpoint']); 
	$shippingcharge			= 	mysqli_real_escape_string($conn,$_POST['txtshippingcharge']); 
	$brandname			= 	mysqli_real_escape_string($conn,$_POST['selbrandname']); 
	if(isset($_POST['status'])){$status=1;}else{$status=0;}
	
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
	
	
	//------------------brand img 1--------------------------
	
	//---------------------condition--check dots------------------------ 
	/*
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../add-image.php?m=2&n=Brand Logo&id='.$productID);exit(0);}
	//------------------------------------------------------------------

	//-----------------------check compalsory image-------------------------------------------
	if($imagefleimagename1==""){
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
			 $newfile1=$no.$imagefleimagename1;

			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$newfile1);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$imageThumbName = $tno.$imagefleimagename1;
			$imagefleimagename = "$ImageThumbPath/". $imageThumbName;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
			

//////---------------End Upload Brand Image------------////////////
}else{
$newfile1="";
 $imageThumbName="";
}	
//================================ Image 1 End==============================
//================================ Image 1 ==============================	
if(	$imagefleimagename2!=""){
	//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename2;
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
			 $newfile2=$no.$imagefleimagename2;

			move_uploaded_file($_FILES["image2fleimage"]['tmp_name'], "$ImagePath".$newfile2);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$imageThumbName2 = $tno.$imagefleimagename2;
			$imagefleimagename = "$ImageThumbPath/". $imageThumbName2;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
			

//////---------------End Upload Brand Image------------////////////
}else{
	$newfile2="";
 $imageThumbName2="";
}	
//================================ Image 1 End==============================
//================================ Image 3 ==============================	
if(	$imagefleimagename3!=""){
	//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename3;
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
			
			 $newfile3=$no.$imagefleimagename3;

			move_uploaded_file($_FILES["image3fleimage"]['tmp_name'], "$ImagePath".$newfile3);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$imageThumbName3 = $tno.$imagefleimagename3;
			$imagefleimagename = "$ImageThumbPath/". $imageThumbName3;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
			

//////---------------End Upload Brand Image------------////////////
}else{
 $newfile3="";
 $imageThumbName3="";
 
}	
//================================ Image 1 End==============================
//================================ Image 4 ==============================	
if(	$imagefleimagename4!=""){
	//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename4;
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
			
		 	$newfile4=$no.$imagefleimagename4;
			move_uploaded_file($_FILES["image4fleimage"]['tmp_name'], "$ImagePath".$newfile4);		
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$imageThumbName4 = $tno.$imagefleimagename4;
			$imagefleimagename = "$ImageThumbPath/". $imageThumbName4;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
//////---------------End Upload Brand Image------------////////////
}else{
	$newfile4="";
 	$imageThumbName4="";
}	
//================================ Image 4 End==============================


$sql="insert into   tbl_item(
description,
category_id,
sub_category_id,
variant_code,
sku,
mrp,
name,
general_price,
member_price,
stock,
meta_title,
meta_keyword,
meta_description,mlm_point,shipping_charge,
brand_id,
status,

image1,
thumb1,
image2,
thumb2,
image3,
thumb3,
image4,
thumb4)
 values(
 '$itemdescription',
 '$itemcategory',
 '$itemsubcategory',
 '$variantcode',
 '$sku',
 '$mrp',
 '$name',
 '$generalprice',
 '$memberprice',
 '$stock',
 '$title',
 '$keyword',
 '$decription',
 '$mlmpoint',
 '$shippingcharge',
 '$brandname',
 '$status',
 
 '$newfile1',
 '$imageThumbName',
 '$newfile2',
 '$imageThumbName2',
 '$newfile3',
 '$imageThumbName3',
 '$newfile4',
 '$imageThumbName4')";
 				
			if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
			{
				header('Location: ../item-list.php?m=1');
				//echo "suucess";
				
			}
			else
			{
								//echo "fail";
				header('Location: ../item-list.php?m=0');
				
			}


} 	

/*---------------------------edit product-----------------------------------*/
function editItem($conn)
{ 
	$id 					= $_POST['txtid']; 
	
	$itemcategory	 		= 	mysqli_real_escape_string($conn,$_POST['selitemcategory']); 	
	$itemsubcategory	 	= 	mysqli_real_escape_string($conn,$_POST['selproductcategory']); 	
	$name	 				= 	mysqli_real_escape_string($conn,$_POST['txtitemname']); 	
	$sku	 				= 	mysqli_real_escape_string($conn,$_POST['txtsku']); 	
	$stock	 				= 	mysqli_real_escape_string($conn,$_POST['txtstock']); 	
	$mrp	 				= 	mysqli_real_escape_string($conn,$_POST['txtmrp']); 	
	$generalprice	 		= 	mysqli_real_escape_string($conn,$_POST['txtgeneralprice']); 	
	$memberprice			= 	mysqli_real_escape_string($conn,$_POST['txtmemberprice']); 
	$title					= 	mysqli_real_escape_string($conn,$_POST['txttitle']); 
	$keyword				= 	mysqli_real_escape_string($conn,$_POST['txtkeyword']); 
	$decription				= 	mysqli_real_escape_string($conn,$_POST['txtdecription']); 
	$mlmpoint				= 	mysqli_real_escape_string($conn,$_POST['txtmlmpoint']); 
	$shippingcharge			= 	mysqli_real_escape_string($conn,$_POST['txtshippingcharge']); 
	$brandname				= 	mysqli_real_escape_string($conn,$_POST['selbrandname']); 
	$itemdescription	 	= 	mysqli_real_escape_string($conn,$_POST['txtitemdescription']);
	
	if(isset($_POST['status'])){$status=1;}else{$status=0;}
	
	
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
$sel = mysqli_query($conn,"select * from tbl_item where id = '$id' ");
$row = mysqli_fetch_assoc($sel);
$Un_OrginalImage1 	= $row['image1'];	
$Un_Image1 			= $row['thumb1'];	

$Un_OrginalImage2 	= $row['image2'];	
$Un_Image2 			= $row['thumb2'];	

$Un_OrginalImage3 	= $row['image3'];	
$Un_Image3 			= $row['thumb3'];	

$Un_OrginalImage4 	= $row['image4'];	
$Un_Image4 			= $row['thumb4'];	



/*--------------insert record varible record------------*/
$InsertImage1 				= $row['image1'];	
$InsertImagethumb1 			= $row['thumb1'];	

$InsertImage2 				= $row['image2'];	
$InsertImagethumb2 			= $row['thumb2'];	

$InsertImage3 				= $row['image3'];	
$InsertImagethumb3 			= $row['thumb3'];	

$InsertImage4 				= $row['image4'];	
$InsertImagethumb4 			= $row['thumb4'];	


/*---------------------------*/
$flagImage1		=0;
$flagImage2		=0;
$flagImage3		=0;
$flagImage4 	=0;

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
//================================ Image 1 End==============================
//================================ Image 1 ==============================	
if(	$imagefleimagename2!=""){
$flagImage2		=1;

	//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename2;
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
//================================ Image 1 End==============================
//================================ Image 3 ==============================	
if(	$imagefleimagename3!=""){
$flagImage3		=1;
	//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename3;
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
//================================ Image 1 End==============================
//================================ Image 4 ==============================	
if(	$imagefleimagename4!=""){
$flagImage4 	=1;
	//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename4;
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

/*----------------------------------------------*/
$sqladd = mysqli_query($conn,"update tbl_item set 
description='$itemdescription',
category_id='$itemcategory',
sub_category_id='$itemsubcategory',
sku='$sku',
mrp='$mrp',
name='$name',
general_price='$generalprice',
member_price='$memberprice',
stock='$stock',
meta_title='$title',
meta_keyword='$keyword',
meta_description='$decription',
mlm_point='$mlmpoint',
shipping_charge='$shippingcharge',
brand_id='$brandname',
status='$status',


image1='$InsertImage1' ,	
thumb1='$InsertImagethumb1',
image2 = '$InsertImage2' ,	
thumb2 = '$InsertImagethumb2',
image3='$InsertImage3' ,	
thumb3='$InsertImagethumb3',
image4='$InsertImage4' ,	
thumb4='$InsertImagethumb4'
 		

 where id = '$id'") or die(mysqli_error($conn));
 if(mysqli_affected_rows($conn) > 0)
	{
		if($flagImage1==1){
			if($Un_OrginalImage1!=""){
				unlink($ImagePath.$Un_OrginalImage1);
				unlink($ImageThumbPath.$Un_Image1);
			}
		}
		
		if($flagImage2==1){
			if($Un_OrginalImage2!=""){
				unlink($ImagePath.$Un_OrginalImage2);
				unlink($ImageThumbPath.$Un_Image2);
			}
		}
		
		if($flagImage3==1){
			if($Un_OrginalImage3!=""){
				unlink($ImagePath.$Un_OrginalImage3);
				unlink($ImageThumbPath.$Un_Image3);
			}
		}
		
		if($flagImage4==1){
			if($Un_OrginalImage4!=""){
				unlink($ImagePath.$Un_OrginalImage4);
				unlink($ImageThumbPath.$Un_Image4);
			}
		}

		header('Location: ../item-list.php?m=4');
		//echo "success";
	}
	else
	{
		header('Location: ../item-list.php?m=5');
	}
} 
function deleteItem($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	$checkSql=mysqli_query($conn,"select * from  tbl_item where id ='$id'")or die(mysqli_error($conn));
	if(mysqli_num_rows($checkSql)>0)
	{
		$rowi=mysqli_fetch_assoc($checkSql);
		$image1=$rowi['image1'];
		$thumb1=$rowi['thumb1'];

		$image2=$rowi['image2'];
		$thumb2=$rowi['thumb2'];

		$image3=$rowi['image3'];
		$thumb3=$rowi['thumb3'];

		$image4=$rowi['image4'];
		$thumb4=$rowi['thumb4'];

		//header('Location: ../product-list.php?&m=15');
		//exit();
	}
	//echo "value is ".$id;
	global $productPath;	
	global $productPathThumb;	
	$ImagePath = "$productPath/";
	$ImageThumbPath = "$productPathThumb/";
	
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from  tbl_item where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
			if($image1!=""){
				unlink($ImagePath.$image1);
				unlink($ImageThumbPath.$thumb1);
			}
			if($image2!=""){
				unlink($ImagePath.$image2);
				unlink($ImageThumbPath.$thumb2);
			}
			if($image3!=""){
				unlink($ImagePath.$image3);
				unlink($ImageThumbPath.$thumb3);
			}
			if($image4!=""){
				unlink($ImagePath.$image4);
				unlink($ImageThumbPath.$thumb4);
			}
		mysql_query("COMMIT");	
		header('Location: ../item-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../item-list.php?m=7');
	}

}
/*---------------------------end  edit product------------------------------*/

/*--------product-----------------------------------------------*/
function addBrand($conn)
{  
	
	$brandname	 		= 	mysqli_real_escape_string($conn,$_POST['txtbrandname']); 	
	$companyname	 	= 	mysqli_real_escape_string($conn,$_POST['txtcompanyname']); 	
	/*-------------------------Image info-----------------------------*/
	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../brand.php?m=2&n=Brand Logo');exit(0);}
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


	global $brandPath;	
	global $brandPathThumb;	
	$ImagePath = "$brandPath/";
	$ImageThumbPath = "$brandPathThumb/";
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
			if (($extension != "jpg") && ($extension != "jpeg") ) {
					header('Location: ../brand.php?m=3');

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
			 $newfile1=$no.$imagefleimagename1;

			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$newfile1);
			
			
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$imageThumbName = $tno.$imagefleimagename1;
			$imagefleimagename = "$ImageThumbPath/". $imageThumbName;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);
			

//////---------------End Upload Brand Image------------////////////
}else{
$newfile1="";
 $imageThumbName="";
}	


$sql="insert into   tbl_brand(
brand_name,
company_name,
image1,
thumb1)
 values(
 '$brandname',
 '$companyname',
 '$newfile1',
 '$imageThumbName')";
 				
			if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
			{
				header('Location: ../brand-list.php?m=1');
				//echo "suucess";
				
			}
			else
			{
								//echo "fail";
				header('Location: ../brand-list.php?m=0');
				
			}


} 	
function editBrand($conn)
{ 
	$id 					= $_POST['txtid']; 
	
	$brandname	 		= 	mysqli_real_escape_string($conn,$_POST['txtbrandname']); 	
	$companyname	 	= 	mysqli_real_escape_string($conn,$_POST['txtcompanyname']); 
	
	/*-------------------------Image info-----------------------------*/
	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../brand-list.php?m=2&n=Brand Logo');exit(0);}
	//------------------------------------------------------------------
//------now clear all condtion is good-------------if two image not avale-----
function getExtension($str) {
	$i = strrpos($str,".");
	 if (!$i) { return ""; } 

	 $l = strlen($str) - $i;
	 $ext = substr($str,$i+1,$l);
	 return $ext;
}

// ------------- get all images  name  -------------------------
$sel = mysqli_query($conn,"select * from tbl_brand where id = '$id' ");
$row = mysqli_fetch_assoc($sel);
$Un_OrginalImage1 	= $row['image1'];	
$Un_Image1 			= $row['thumb1'];	
/*--------------insert record varible record------------*/
$InsertImage1 				= $row['image1'];	
$InsertImagethumb1 			= $row['thumb1'];	

/*---------------------------*/
$flagImage1		=0;
// ------------- get all images  name  -------------------------	
			$no = rand(1,999);
			$tno = rand(1,999);	
///////--------------Upload Logo Image-----------------////////////


	global $brandPath;	
	global $brandPathThumb;	
	$ImagePath = "$brandPath/";
	$ImageThumbPath = "$brandPathThumb/";
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
//================================ Image 1 End==============================


/*----------------------------------------------*/
$sqladd = mysqli_query($conn,"update tbl_brand set 
brand_name ='$brandname',
company_name ='$companyname',
image1='$InsertImage1' ,	
thumb1='$InsertImagethumb1'
 		

 where id = '$id'") or die(mysqli_error($conn));
 if(mysqli_affected_rows($conn) > 0)
	{
		if($flagImage1==1){
			if($Un_OrginalImage1!=""){
				unlink($ImagePath.$Un_OrginalImage1);
				unlink($ImageThumbPath.$Un_Image1);
			}
		}
		
		header('Location: ../brand-list.php?m=4');
		//echo "success";
	}
	else
	{
		header('Location: ../brand-list.php?m=5');
	}
} 
function deleteBrand($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	$checkSql=mysqli_query($conn,"select * from  tbl_item where id ='$id'")or die(mysqli_error($conn));
	if(mysqli_num_rows($checkSql)>0)
	{
		$rowi=mysqli_fetch_assoc($checkSql);
		$image1=$rowi['image1'];
		$thumb1=$rowi['thumb1'];

		//header('Location: ../product-list.php?&m=15');
		//exit();
	}
	//echo "value is ".$id;
	global $brandPath;	
	global $brandPathThumb;	
	$ImagePath = "$brandPath/";
	$ImageThumbPath = "$brandPathThumb/";
	
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from  tbl_brand where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
			if($image1!=""){
				unlink($ImagePath.$image1);
				unlink($ImageThumbPath.$thumb1);
			}
		mysql_query("COMMIT");	
		header('Location: ../brand-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../brand-list.php?m=7');
	}

}
/*---------------------------end  edit product------------------------------*/
/*--------product-----------------------------------------------*/
function addRegestration($conn)
{  	
	$businessname	= mysqli_real_escape_string($conn,$_POST['txtbusinessname']); 
	$gst		 	= mysqli_real_escape_string($conn,$_POST['txtgst']); 
	$phone		 	= mysqli_real_escape_string($conn,$_POST['txtphone']); 
	$email	 		= mysqli_real_escape_string($conn,$_POST['txtemail']); 
	$addressline1	= mysqli_real_escape_string($conn,$_POST['txtaddressline1']); 
	$addressline2	= mysqli_real_escape_string($conn,$_POST['txtaddressline2']); 
	$pincode	 	= mysqli_real_escape_string($conn,$_POST['txtpincode']); 
	$city	 		= mysqli_real_escape_string($conn,$_POST['txtcity']); 
	$state	 		= mysqli_real_escape_string($conn,$_POST['txtstate']); 
	$country	 	= 1; 
	$agreement	 	= mysqli_real_escape_string($conn,$_POST['txtagreement']); 
$sql="insert into  tbl_user_regestration(
business_name,
gst,
phone,
email,

address_line_1,
address_line_2,
pincode,
city,
state,

country,
verification_status,
status,
agreement
)
 values(
 '$businessname',
 '$gst',
 '$phone',
 '$email',
 
 '$addressline1',
 '$addressline2',
 '$pincode',
 '$city',
 '$state',
 '$country',
 '0',
 '0',
 '$agreement')";
		if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
		{
			header('Location: ../user-list.php?m=1');
			//echo "success";
		}
		else
		{
			header('Location: ../user-list.php?m=0');
			//echo "fail";
		}
} 	
function editRegestration($conn)
{

	$id				= $_POST['txtid']; 
	$businessname	= mysqli_real_escape_string($conn,$_POST['txtbusinessname']); 
	$gst		 	= mysqli_real_escape_string($conn,$_POST['txtgst']); 
	$phone		 	= mysqli_real_escape_string($conn,$_POST['txtphone']); 
	$email	 		= mysqli_real_escape_string($conn,$_POST['txtemail']); 
	$addressline1	= mysqli_real_escape_string($conn,$_POST['txtaddressline1']); 
	$addressline2	= mysqli_real_escape_string($conn,$_POST['txtaddressline2']); 
	$pincode	 	= mysqli_real_escape_string($conn,$_POST['txtpincode']); 
	$city	 		= mysqli_real_escape_string($conn,$_POST['txtcity']); 
	$state	 		= mysqli_real_escape_string($conn,$_POST['txtstate']); 
	$country	 	= 1; 
	$agreement	 	= mysqli_real_escape_string($conn,$_POST['txtagreement']); 

	$sqladd = mysqli_query($conn,"update tbl_user_regestration set 
	business_name='$businessname',
	gst='$gst',
	phone='$phone',
	email='$email',
	
	address_line_1='$addressline1',
	address_line_2='$addressline2',
	pincode='$pincode',
	city='$city',
	state='$state',
	agreement='$agreement'
	where id = '$id'") or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn) > 0)
	{
		//header('Location: ../regestration.php?m=4&id='.$id);
		header('Location: ../user-list.php?m=4');
	}
	else
	{
		//header('Location: ../regestration.php?m=5&id='.$id);
		header('Location: ../user-list.php?m=5');
	}

} 	

function deleteRegestration($conn)
{

	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from tbl_user_regestration where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
		mysql_query("COMMIT");	
		header('Location: ../user-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../user-list.php?m=7');
	}

}


function addItem1()
{  

	$rawname				= mysqli_real_escape_string($conn,$_POST['txtrawname']); 
	$Url					= mysqli_real_escape_string($conn,strtolower($_POST['txtpagenameurl']));
	$description 			= mysqli_real_escape_string($conn,$_POST['txtbranddescription']); 

	$metatitle 				= mysqli_real_escape_string($conn,$_POST['txtmetatitle']); 
	$metakeyword 			= mysqli_real_escape_string($conn,$_POST['txtmetakeyword']); 
	$metadescription 		= mysqli_real_escape_string($conn,$_POST['txtmetadescription']); 

//*----------------------------------------------------*//
//------------------brand logo--------------------------
	
	//------------------FB image--------------------------
	$fbfilename 		= $_FILES['fbfleimage']['name'];
	$fbfilename_tmp 	= $_FILES['fbfleimage']['tmp_name'];
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($fbfilename, '.');
	if($dots>1){header('Location: ../product.php?m=2n=FB Image 600px');exit(0);}
	//------------------------------------------------------------------
	//-----------------------check compalsory image size--------------------------------------
	list($width5,$height5)=getimagesize($fbfilename_tmp);
	if($width5>300){
		header('Location: ../product.php?m=13&n=300px FB Image');exit(0);
	}
	//----------------------------------------------------------------------------------------
	//------now clear all condtion is good-------------if two image not avale-----
	/*global $itempath;	
	global $itempaththumb;	
	$path = "$itempath/";
	$paththumb = "$itempaththumb/";*/
	function getExtension($str) {
		$i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
	}
///////--------------Upload Logo Image-----------------////////////
//////---------------End Upload Brand Image------------////////////
//////---------------Start Upload Brand Image------------////////////
	global $itemPath;	
	$fbPath = "$itemPath/";
			$no4 = rand(1,999);
			$uploadedfile4 = $fbfilename;
			$fbfilename = stripslashes($fbfilename);
			$extension4 = getExtension($fbfilename);
			$extension4 = strtolower($extension4);
			if (($extension4 != "jpg") && ($extension4 != "jpeg") && ($extension4 != "png") ) {
					header('Location: ../item.php?m=3');
					exit();
			}
			//----------------------------------------
			if($extension4=="jpg" || $extension4=="jpeg" ){
				$uploadedfile4 = $fbfilename_tmp;
				$src4 = imagecreatefromjpeg($uploadedfile4);
			}else if($extension4=="png"){
				$uploadedfile4 = $fbfilename_tmp;
				$src4 = imagecreatefrompng($uploadedfile4);
			}else {
				$src4 = imagecreatefromgif($uploadedfile4);
			}
			//----------------------------------------
			list($width4,$height4)=getimagesize($uploadedfile4);
			$setwidth4=400;
			 $ratio2=0.0;
			 if($width4>$setwidth4){
				$ratio2=$setwidth4/$width4;
				$newheight4 = $height4 * $ratio2;    // Reset height to match scaled image 
            	$newwidth4 = $width4 * $ratio2; 
			 }else{
				$newheight4 = $height4 ;
            	$newwidth4 = $width4 ;
			 }
			$tmp4=imagecreatetruecolor($newwidth4,$newheight4);
			imagecopyresampled($tmp4,$src4,0,0,0,0,$newwidth4,$newheight4, $width4,$height4);
			$fbName		   = $no4.$fbfilename;
			$fbfilename			= "$fbPath/". $fbName;
			imagejpeg($tmp4,$fbfilename,100);
			imagedestroy($src4);
			imagedestroy($tmp4);
//////---------------End brand Images------------////////////
	
//////---------------End brand Images------------////////////
$sql="insert into  tbl_item(
images,
item_name, 
item_url,
data ,


meta_title,
meta_keyword,
meta_description
)
 values(
 '$fbName',
 '$rawname',
 '$Url',
 '$description',


 '$metatitle',
 '$metakeyword',
 '$metadescription'
)";
			if(mysql_query($sql) or die(mysql_error()))
			{
				//copy file name end
				header('Location: ../product.php?m=1');
				//echo "success";
			}
			else
			{
				header('Location: ../product.php?m=0');
				//echo "fail";
			}
} 
/*-----------------edit condtion my custm-------------------------*/
function editItem1()
{ 
	$id 					= $_POST['txtid']; 
	$rawname				= mysqli_real_escape_string($conn,$_POST['txtrawname']); 
	$Url					= mysqli_real_escape_string($conn,strtolower($_POST['txtpagenameurl']));
	$description 			= mysqli_real_escape_string($conn,$_POST['txtbranddescription']); 
	
	$metatitle 				= mysqli_real_escape_string($conn,$_POST['txtmetatitle']); 
	$metakeyword 			= mysqli_real_escape_string($conn,$_POST['txtmetakeyword']); 
	$metadescription 		= mysqli_real_escape_string($conn,$_POST['txtmetadescription']); 
	
//----------------------------------------------------------------------
//------------------FB image--------------------------
	$fbfilename 		= $_FILES['fbfleimage']['name'];
	$fbfilename_tmp 	= $_FILES['fbfleimage']['tmp_name'];
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($fbfilename, '.');
	if($dots>1){header('Location: ../ product.php?m=2n=FB Image 400px');exit(0);}
	//-----------------------check compalsory image size--------------------------------------
	if($fbfilename!=""){
		list($width5,$height5)=getimagesize($fbfilename_tmp);
		if($width5<400){
			header('Location: ../product.php?m=13&n=400px FB Image');exit(0);
		}
	}
	//----------------------------------------------------------------------------------------
	function getExtension($str) {
		$i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
	}
// ------------- get all images  name  -------------------------
$sel = mysql_query("select * from tbl_item where id = '$id' ");
$row = mysql_fetch_assoc($sel);
$Un_fbImage 	= $row['images'];	
/*--------------------------*/
$fbName	= $row['images'];	
/*---------------------------*/
$flagFBImage	=0;
// ------------- get all images  name  -------------------------
	global $itemPath;	
	$fbPath = "$itemPath/";
	$no4 = rand(1,999);
				

if($fbfilename!=""){
$flagFBImage	=1;
//-----------------------------------------------
	$uploadedfile4 = $fbfilename;
	$fbfilename = stripslashes($fbfilename);
	$extension4 = getExtension($fbfilename);
	$extension4 = strtolower($extension4);
	
	if (($extension4 != "jpg") && ($extension4 != "jpeg") && ($extension4 != "png") ) {
			header('Location: ../product.php?m=3');
			exit();
	}
	//----------------------------------------
	if($extension4=="jpg" || $extension4=="jpeg" ){
		$uploadedfile4 = $fbfilename_tmp;
		$src4 = imagecreatefromjpeg($uploadedfile4);
	}else if($extension4=="png"){
		$uploadedfile4 = $fbfilename_tmp;
		$src4 = imagecreatefrompng($uploadedfile4);
	}else {
		$src4 = imagecreatefromgif($uploadedfile4);
	}
	//----------------------------------------
	list($width4,$height4)=getimagesize($uploadedfile4);
	$setwidth4=400;
	 
	 
	 if($width4>$setwidth4){
		$ratio2=$setwidth4/$width4;
		$newheight4 = $height4 * $ratio2;    // Reset height to match scaled image 
		$newwidth4 = $width4 * $ratio2; 
	 }else{
		$newheight4 = $height4 ;
		$newwidth4 = $width4 ;
	 }
	$tmp4=imagecreatetruecolor($newwidth4,$newheight4);
	imagecopyresampled($tmp4,$src4,0,0,0,0,$newwidth4,$newheight4, $width4,$height4);
	$fbName		   = $no4.$fbfilename;
	$fbfilename			= "$fbPath/". $fbName;
	imagejpeg($tmp4,$fbfilename,100);
	imagedestroy($src4);
	imagedestroy($tmp4);
	
}	 

//////---------------End brand Images------------////////////
$sqladd = mysql_query("update tbl_item set 
images = '$fbName',
item_name = '$rawname', 
item_url = '$Url', 
data = '$description',
meta_title = '$metatitle',
meta_keyword = '$metakeyword',
meta_description = '$metadescription'
 where id = '$id'") or die(mysql_error());
 if(mysql_affected_rows() > 0)
	{
		$img5 = $fbPath.$Un_fbImage;
		if($flagFBImage==1){unlink($img5);}
		header('Location: ../product.php?m=4&id='.$id);
		//echo "update3";
	}
	else
	{
		header('Location: ../product.php?m=5&id='.$id);
		//echo "fail";
	}
} 

function deleteItem1()
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$selnews = mysql_query("select * from tbl_item where id = '$id' ");
	$rownews = mysql_fetch_assoc($selnews);
	$imagename = $rownews['images'];
	global $itemPath;	
	$path = "$itemPath/";
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from tbl_item where id = '$id' ";
	if($imagename!="")
	{
		if(mysql_query($del) or die(mysql_error()))
		{
			$img = $path.$imagename;
			if(unlink($img))
			{
				mysql_query("COMMIT");
				header('Location: ../product-list.php?&m=6');
				//echo "success";
			}
			else
			{
				mysql_query("ROLLBACK");
				header('Location: ../product-list.php?&m=7');
				//echo "fail";
			}
		}
	}
	else
	{
				header('Location: ../product-list.php?m=7');
	}

}

//=====================    Department ========================================
function addDepartmentCategory()
{  

	$name	= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$personID	= $_POST['selperson']; 
	$Url	= mysqli_real_escape_string($conn,strtolower($_POST['txtpagenameurl']));
	$sql="insert into  tbl_department_category(name, url,person_id) values('$name', '$Url','$personID')";
			if(mysql_query($sql) or die(mysql_error()))
			{
				//copy file name end
				header('Location: ../department.php?m=1');
				//echo "success";
			}
			else
			{
				header('Location: ../department.php?m=0');
				//echo "fail";
			}
} 
function editDepartmentCategory()
{ 
	$id 					= $_POST['txtid']; 
	$name	= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$personID	= $_POST['selperson']; 
	$Url	= mysqli_real_escape_string($conn,strtolower($_POST['txtpagenameurl']));

	$sqladd = mysql_query("update tbl_department_category set 
	name = '$name', 
	person_id = '$personID', 
	url = '$Url' 
	where id = '$id'") or die(mysql_error());
 	if(mysql_affected_rows() > 0)
	{
		header('Location: ../department.php?m=4&id='.$id);
		//echo "update3";
	}
	else
	{
		header('Location: ../department.php?m=5&id='.$id);
		//echo "fail";
	}
} 

function deleteDepartmentCategory()
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from tbl_department_category where id = '$id' ";

	if(mysql_query($del) or die(mysql_error()))
	{
		mysql_query("COMMIT");	
		header('Location: ../department-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../department-list.php?m=7');
	}

}
//=====================    person category ========================================
function addPersonCategory()
{  
	$name	= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$Url	= mysqli_real_escape_string($conn,strtolower($_POST['txtpagenameurl']));
	$sql="insert into  tbl_person_category(name, url) values('$name', '$Url')";
			if(mysql_query($sql) or die(mysql_error()))
			{
				//copy file name end
				header('Location: ../person-category.php?m=1');
				//echo "success";
			}
			else
			{
				header('Location: ../person-category.php?m=0');
				//echo "fail";
			}
} 
function editPersonCategory()
{ 
	$id 					= $_POST['txtid']; 
	$name	= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$Url	= mysqli_real_escape_string($conn,strtolower($_POST['txtpagenameurl']));

	$sqladd = mysql_query("update tbl_person_category set 
	name = '$name', 
	url = '$Url' 
	where id = '$id'") or die(mysql_error());
 	if(mysql_affected_rows() > 0)
	{
		header('Location: ../person-category.php?m=4&id='.$id);
		//echo "update3";
	}
	else
	{
		header('Location: ../person-category.php?m=5&id='.$id);
		//echo "fail";
	}
} 

function deletePersonCategory()
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from tbl_person_category where id = '$id' ";

	if(mysql_query($del) or die(mysql_error()))
	{
		mysql_query("COMMIT");	
		header('Location: ../person_category-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../person_category-list.php?m=7');
	}

}
//=====================    Field category ========================================
function addFieldCategory()
{  
	$name	= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$Url	= mysqli_real_escape_string($conn,strtolower($_POST['txtpagenameurl']));
	$department =$_POST['seldepartment'];
	$person =$_POST['person'];
	
	$sql="insert into  tbl_field_category(name, url,department_id,person_id) values('$name', '$Url','$department','$person')";
			if(mysql_query($sql) or die(mysql_error()))
			{
				//copy file name end
				header('Location: ../field-category.php?m=1');
				//echo "success";
			}
			else
			{
				header('Location: ../field-category.php?m=0');
				//echo "fail";
			}
} 
function editFieldCategory()
{ 
	$id 					= $_POST['txtid']; 
	$name	= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$Url	= mysqli_real_escape_string($conn,strtolower($_POST['txtpagenameurl']));
	$department =$_POST['seldepartment'];
	$person =$_POST['person'];
	
	$sqladd = mysql_query("update tbl_field_category set 
	name = '$name', 
	url = '$Url', 
	person = '$person_id', 
	department_id = '$department' 
	where id = '$id'") or die(mysql_error());
 	if(mysql_affected_rows() > 0)
	{
		header('Location: ../field-category.php?m=4&id='.$id);
		//echo "update3";
	}
	else
	{
		header('Location: ../field-category.php?m=5&id='.$id);
		//echo "fail";
	}
} 

function deleteFieldCategory()
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from tbl_field_category where id = '$id' ";

	if(mysql_query($del) or die(mysql_error()))
	{
		mysql_query("COMMIT");	
		header('Location: ../field-category-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../field-category-list.php?m=7');
	}

}

/*------------------------------------------------------------------------------------------------------------*/
//=====================    Field category ========================================
function addBrand1()
{  
	$name	= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$Url	= mysqli_real_escape_string($conn,strtolower($_POST['txtpagenameurl']));
	$departmentID	= $_POST['txtdepartmentid'];
	
	$fieldID =$_POST['selbrand'];
	$sql="insert into  tbl_brand(name, url,field_id) values('$name', '$Url','$fieldID')";
			if(mysql_query($sql) or die(mysql_error()))
			{
				//copy file name end
				header('Location: ../brand.php?m=1&d='.$departmentID);
				//echo "success";
			}
			else
			{
				header('Location: ../brand.php?m=0&d='.$departmentID);
				//echo "fail";
			}
} 
function editBrand1()
{ 
	$id 					= $_POST['txtid']; 
	$name	= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$Url	= mysqli_real_escape_string($conn,strtolower($_POST['txtpagenameurl']));
	$fieldID =$_POST['selbrand'];
	$departmentID	= $_POST['txtdepartmentid'];
	
	$sqladd = mysql_query("update tbl_brand set 
	name = '$name', 
	url = '$Url', 
	field_id = '$fieldID' 
	where id = '$id'") or die(mysql_error());
 	if(mysql_affected_rows() > 0)
	{
		header('Location: ../brand.php?m=4&id='.$id."&d=".$departmentID);
		//echo "update3";
	}
	else
	{
		header('Location: ../brand.php?m=5&id='.$id."&d=".$departmentID);
		//echo "fail";
	}
} 

function deleteBrand1()
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from tbl_brand where id = '$id' ";

	if(mysql_query($del) or die(mysql_error()))
	{
		mysql_query("COMMIT");	
		header('Location: ../brand-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../brand-list.php?m=7');
	}

}
//======================= size =====================================
function addSize()
{  
	$size	= mysqli_real_escape_string($conn,$_POST['txtsize']); 
	$departmentID =$_POST['seldepartment'];

			//$sql="CALL insertData";
	$values=array();
	
	$sizeAry=	explode(",",$size);
	for($i=0;$i<count($sizeAry);$i++){
		$size=$sizeAry[$i];
		$values[] = "('$size', '$departmentID')";
	}
	   
	$sql="insert into  tbl_size(size, department_id) values";
	$sql .= implode(', ', $values);
			if(mysql_query($sql) or die(mysql_error()))
			{
				//copy file name end
				header('Location: ../size.php?m=1');
				//echo "success";
			}
			else
			{
				header('Location: ../size.php?m=0');
				//echo "fail";
			}
} 
function editSize()
{ 
	$id 					= $_POST['txtid']; 
	$size	= mysqli_real_escape_string($conn,$_POST['txtsize']); 
	$departmentID =$_POST['seldepartment'];
	
	$sqladd = mysql_query("update tbl_size set 
	size = '$size', 
	department_id = '$departmentID' 
	where id = '$id'") or die(mysql_error());
 	if(mysql_affected_rows() > 0)
	{
		header('Location: ../size.php?m=4&id='.$id);
		//echo "update3";
	}
	else
	{
		header('Location: ../size.php?m=5&id='.$id);
		//echo "fail";
	}
} 

function deleteSize()
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from tbl_size where id = '$id' ";

	if(mysql_query($del) or die(mysql_error()))
	{
		mysql_query("COMMIT");	
		header('Location: ../size-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../size-list.php?m=7');
	}

}
//==================================================================

/*------------------------------------------------------------------------------------------------------------*/
function addSlider()
{  
	$categoryid	= $_POST['selcategoryid']; 


//------------------brand logo--------------------------
	
	//------------------FB image--------------------------
	$fbfilename 		= $_FILES['fbfleimage']['name'];
	$fbfilename_tmp 	= $_FILES['fbfleimage']['tmp_name'];
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($fbfilename, '.');
	if($dots>1){header('Location: ../item.php?m=2n=FB Image 600px');exit(0);}
	//------------------------------------------------------------------
	//-----------------------check compalsory image size--------------------------------------
	list($width5,$height5)=getimagesize($fbfilename_tmp);
	if($width5<1399){
		header('Location: ../item.php?m=13&n=600px FB Image');exit(0);
	}
	//----------------------------------------------------------------------------------------
	//------now clear all condtion is good-------------if two image not avale-----
	/*global $itempath;	
	global $itempaththumb;	
	$path = "$itempath/";
	$paththumb = "$itempaththumb/";*/
	function getExtension($str) {
		$i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
	}
///////--------------Upload Logo Image-----------------////////////
//////---------------End Upload Brand Image------------////////////
//////---------------Start Upload Brand Image------------////////////
	global $sliderPath;	
	$fbPath = "$sliderPath/";
			$no4 = rand(1,999);
			$uploadedfile4 = $fbfilename;
			$fbfilename = stripslashes($fbfilename);
			$extension4 = getExtension($fbfilename);
			$extension4 = strtolower($extension4);
			if (($extension4 != "jpg") && ($extension4 != "jpeg") && ($extension4 != "png") ) {
					header('Location: ../slider.php?m=3');
					exit();
			}
			//----------------------------------------
			if($extension4=="jpg" || $extension4=="jpeg" ){
				$uploadedfile4 = $fbfilename_tmp;
				$src4 = imagecreatefromjpeg($uploadedfile4);
			}else if($extension4=="png"){
				$uploadedfile4 = $fbfilename_tmp;
				$src4 = imagecreatefrompng($uploadedfile4);
			}else {
				$src4 = imagecreatefromgif($uploadedfile4);
			}
			//----------------------------------------
			list($width4,$height4)=getimagesize($uploadedfile4);
			$setwidth4=1400;
			 $ratio2=0.0;
			 if($width4>$setwidth4){
				$ratio2=$setwidth4/$width4;
				$newheight4 = $height4 * $ratio2;    // Reset height to match scaled image 
            	$newwidth4 = $width4 * $ratio2; 
			 }else{
				$newheight4 = $height4 ;
            	$newwidth4 = $width4 ;
			 }
			$tmp4=imagecreatetruecolor($newwidth4,$newheight4);
			imagecopyresampled($tmp4,$src4,0,0,0,0,$newwidth4,$newheight4, $width4,$height4);
			$fbName		   = $no4.$fbfilename;
			$fbfilename			= "$fbPath/". $fbName;
			imagejpeg($tmp4,$fbfilename,100);
			imagedestroy($src4);
			imagedestroy($tmp4);
//////---------------End brand Images------------////////////
	
//////---------------End brand Images------------////////////
$sql="insert into  tbl_slider(
image,
category_id
)
 values(
 '$fbName',
 '$categoryid'
)";
			if(mysql_query($sql) or die(mysql_error()))
			{
				//copy file name end
				header('Location: ../slider.php?m=1');
				//echo "success";
			}
			else
			{
				header('Location: ../slider.php?m=0');
				//echo "fail";
			}
} 
/*-----------------edit condtion my custm-------------------------*/
function editSlider()
{ 
	$id 					= $_POST['txtid']; 
	$categoryid	= $_POST['selcategoryid']; 
	
//----------------------------------------------------------------------
//------------------FB image--------------------------
	$fbfilename 		= $_FILES['fbfleimage']['name'];
	$fbfilename_tmp 	= $_FILES['fbfleimage']['tmp_name'];
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($fbfilename, '.');
	if($dots>1){header('Location: ../ slider.php?m=2n=FB Image 400px');exit(0);}
	//-----------------------check compalsory image size--------------------------------------
	if($fbfilename!=""){
		list($width5,$height5)=getimagesize($fbfilename_tmp);
		if($width5<1399){
			header('Location: ../slider.php?m=13&n=400px FB Image');exit(0);
		}
	}
	//----------------------------------------------------------------------------------------
	function getExtension($str) {
		$i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
	}
// ------------- get all images  name  -------------------------
$sel = mysql_query("select * from tbl_slider where id = '$id' ");
$row = mysql_fetch_assoc($sel);
$Un_fbImage 	= $row['image'];	
/*--------------------------*/
$fbName	= $row['image'];	
/*---------------------------*/
$flagFBImage	=0;
// ------------- get all images  name  -------------------------
	global $sliderPath;	
	$fbPath = "$sliderPath/";
	$no4 = rand(1,999);
				

if($fbfilename!=""){
$flagFBImage	=1;
//-----------------------------------------------
	$uploadedfile4 = $fbfilename;
	$fbfilename = stripslashes($fbfilename);
	$extension4 = getExtension($fbfilename);
	$extension4 = strtolower($extension4);
	
	if (($extension4 != "jpg") && ($extension4 != "jpeg") && ($extension4 != "png") ) {
			header('Location: ../item.php?m=3');
			exit();
	}
	//----------------------------------------
	if($extension4=="jpg" || $extension4=="jpeg" ){
		$uploadedfile4 = $fbfilename_tmp;
		$src4 = imagecreatefromjpeg($uploadedfile4);
	}else if($extension4=="png"){
		$uploadedfile4 = $fbfilename_tmp;
		$src4 = imagecreatefrompng($uploadedfile4);
	}else {
		$src4 = imagecreatefromgif($uploadedfile4);
	}
	//----------------------------------------
	list($width4,$height4)=getimagesize($uploadedfile4);
	$setwidth4=1400;
	 
	 
	 if($width4>$setwidth4){
		$ratio2=$setwidth4/$width4;
		$newheight4 = $height4 * $ratio2;    // Reset height to match scaled image 
		$newwidth4 = $width4 * $ratio2; 
	 }else{
		$newheight4 = $height4 ;
		$newwidth4 = $width4 ;
	 }
	$tmp4=imagecreatetruecolor($newwidth4,$newheight4);
	imagecopyresampled($tmp4,$src4,0,0,0,0,$newwidth4,$newheight4, $width4,$height4);
	$fbName		   = $no4.$fbfilename;
	$fbfilename			= "$fbPath/". $fbName;
	imagejpeg($tmp4,$fbfilename,100);
	imagedestroy($src4);
	imagedestroy($tmp4);
	
}	 

//////---------------End brand Images------------////////////
$sqladd = mysql_query("update tbl_slider set 
image = '$fbName',
category_id = '$categoryID' 
 where id = '$id'") or die(mysql_error());
 if(mysql_affected_rows() > 0)
	{
		$img5 = $fbPath.$Un_fbImage;
		if($flagFBImage==1){unlink($img5);}
		header('Location: ../slider.php?m=4&id='.$id);
		//echo "update3";
	}
	else
	{
		header('Location: ../slider.php?m=5&id='.$id);
		//echo "fail";
	}
} 

function deleteSlider()
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$selnews = mysql_query("select * from tbl_slider where id = '$id' ");
	$rownews = mysql_fetch_assoc($selnews);
	$imagename = $rownews['image'];

	global $sliderPath;	
	$path = "$sliderPath/";
	$paththumb = "$itempaththumb/";
	
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from tbl_slider where id = '$id' ";
	if($imagename!="")
	{
		if(mysql_query($del) or die(mysql_error()))
		{
			

				$img = $path.$imagename;
				
			if(unlink($img))
			{
				mysql_query("COMMIT");
				header('Location: ../slider-list.php?&m=6');
			}
			else
			{
				mysql_query("ROLLBACK");
				header('Location: ../slider-list.php?&m=7');
				
			}
		}
	}
	else
	{
				header('Location: ../slider-list.php?m=7');
	}

}
/*--------------------------------csr----------------------------------------------------------------------------*/
function addCsr()
{  
	$categoryid	= $_POST['selcategoryid']; 


//------------------brand logo--------------------------
	
	//------------------FB image--------------------------
	$fbfilename 		= $_FILES['fbfleimage']['name'];
	$fbfilename_tmp 	= $_FILES['fbfleimage']['tmp_name'];
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($fbfilename, '.');
	if($dots>1){header('Location: ../csr.php?m=2n=FB Image 600px');exit(0);}
	//------------------------------------------------------------------
	//-----------------------check compalsory image size--------------------------------------
	list($width5,$height5)=getimagesize($fbfilename_tmp);
	if($width5<600){
		header('Location: ../csr.php?m=13&n=600px FB Image');exit(0);
	}
	//----------------------------------------------------------------------------------------
	//------now clear all condtion is good-------------if two image not avale-----
	/*global $itempath;	
	global $itempaththumb;	
	$path = "$itempath/";
	$paththumb = "$itempaththumb/";*/
	function getExtension($str) {
		$i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
	}
///////--------------Upload Logo Image-----------------////////////
//////---------------End Upload Brand Image------------////////////
//////---------------Start Upload Brand Image------------////////////
	global $sliderPath;	
	$fbPath = "$sliderPath/";
			$no4 = rand(1,999);
			$uploadedfile4 = $fbfilename;
			$fbfilename = stripslashes($fbfilename);
			$extension4 = getExtension($fbfilename);
			$extension4 = strtolower($extension4);
			if (($extension4 != "jpg") && ($extension4 != "jpeg") && ($extension4 != "png") ) {
					header('Location: ../csr.php?m=3');
					exit();
			}
			//----------------------------------------
			if($extension4=="jpg" || $extension4=="jpeg" ){
				$uploadedfile4 = $fbfilename_tmp;
				$src4 = imagecreatefromjpeg($uploadedfile4);
			}else if($extension4=="png"){
				$uploadedfile4 = $fbfilename_tmp;
				$src4 = imagecreatefrompng($uploadedfile4);
			}else {
				$src4 = imagecreatefromgif($uploadedfile4);
			}
			//----------------------------------------
			list($width4,$height4)=getimagesize($uploadedfile4);
			$setwidth4=600;
			 $ratio2=0.0;
			 if($width4>$setwidth4){
				$ratio2=$setwidth4/$width4;
				$newheight4 = $height4 * $ratio2;    // Reset height to match scaled image 
            	$newwidth4 = $width4 * $ratio2; 
			 }else{
				$newheight4 = $height4 ;
            	$newwidth4 = $width4 ;
			 }
			$tmp4=imagecreatetruecolor($newwidth4,$newheight4);
			imagecopyresampled($tmp4,$src4,0,0,0,0,$newwidth4,$newheight4, $width4,$height4);
			$fbName		   = $no4.$fbfilename;
			$fbfilename			= "$fbPath/". $fbName;
			imagejpeg($tmp4,$fbfilename,100);
			imagedestroy($src4);
			imagedestroy($tmp4);
//////---------------End brand Images------------////////////
	
//////---------------End brand Images------------////////////
$sql="insert into  tbl_gallery(
image,
category_id
)
 values(
 '$fbName',
 '$categoryid'
)";
			if(mysql_query($sql) or die(mysql_error()))
			{
				//copy file name end
				header('Location: ../csr.php?m=1');
				//echo "success";
			}
			else
			{
				header('Location: ../csr.php?m=0');
				//echo "fail";
			}
} 
/*-----------------edit condtion my custm-------------------------*/
function editCsr()
{ 
	$id 		= $_POST['txtid']; 
	$categoryid	= $_POST['selcategoryid']; 
	
//----------------------------------------------------------------------
//------------------FB image--------------------------
	$fbfilename 		= $_FILES['fbfleimage']['name'];
	$fbfilename_tmp 	= $_FILES['fbfleimage']['tmp_name'];
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($fbfilename, '.');
	if($dots>1){header('Location: ../ csr.php?m=2n=FB Image 400px');exit(0);}
	//-----------------------check compalsory image size--------------------------------------
	if($fbfilename!=""){
		list($width5,$height5)=getimagesize($fbfilename_tmp);
		if($width5<600){
			header('Location: ../csr.php?m=13&n=400px FB Image');exit(0);
		}
	}
	//----------------------------------------------------------------------------------------
	function getExtension($str) {
		$i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
	}
// ------------- get all images  name  -------------------------
$sel = mysql_query("select * from tbl_gallery where id = '$id' ");
$row = mysql_fetch_assoc($sel);
$Un_fbImage 	= $row['image'];	
/*--------------------------*/
$fbName	= $row['image'];	
/*---------------------------*/
$flagFBImage	=0;
// ------------- get all images  name  -------------------------
	global $sliderPath;	
	$fbPath = "$sliderPath/";
	$no4 = rand(1,999);
				

if($fbfilename!=""){
$flagFBImage	=1;
//-----------------------------------------------
	$uploadedfile4 = $fbfilename;
	$fbfilename = stripslashes($fbfilename);
	$extension4 = getExtension($fbfilename);
	$extension4 = strtolower($extension4);
	
	if (($extension4 != "jpg") && ($extension4 != "jpeg") && ($extension4 != "png") ) {
			header('Location: ../csr.php?m=3');
			exit();
	}
	//----------------------------------------
	if($extension4=="jpg" || $extension4=="jpeg" ){
		$uploadedfile4 = $fbfilename_tmp;
		$src4 = imagecreatefromjpeg($uploadedfile4);
	}else if($extension4=="png"){
		$uploadedfile4 = $fbfilename_tmp;
		$src4 = imagecreatefrompng($uploadedfile4);
	}else {
		$src4 = imagecreatefromgif($uploadedfile4);
	}
	//----------------------------------------
	list($width4,$height4)=getimagesize($uploadedfile4);
	$setwidth4=600;
	 
	 
	 if($width4>$setwidth4){
		$ratio2=$setwidth4/$width4;
		$newheight4 = $height4 * $ratio2;    // Reset height to match scaled image 
		$newwidth4 = $width4 * $ratio2; 
	 }else{
		$newheight4 = $height4 ;
		$newwidth4 = $width4 ;
	 }
	$tmp4=imagecreatetruecolor($newwidth4,$newheight4);
	imagecopyresampled($tmp4,$src4,0,0,0,0,$newwidth4,$newheight4, $width4,$height4);
	$fbName		   = $no4.$fbfilename;
	$fbfilename			= "$fbPath/". $fbName;
	imagejpeg($tmp4,$fbfilename,100);
	imagedestroy($src4);
	imagedestroy($tmp4);
	
}	 

//////---------------End brand Images------------////////////
$sqladd = mysql_query("update tbl_gallery set 
image = '$fbName',
category_id = '$categoryID' 
 where id = '$id'") or die(mysql_error());
 if(mysql_affected_rows() > 0)
	{
		$img5 = $fbPath.$Un_fbImage;
		if($flagFBImage==1){unlink($img5);}
		header('Location: ../csr.php?m=4&id='.$id);
		//echo "update3";
	}
	else
	{
		header('Location: ../csr.php?m=5&id='.$id);
		//echo "fail";
	}
} 

function deleteCsr()
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$selnews = mysql_query("select * from tbl_gallery where id = '$id' ");
	$rownews = mysql_fetch_assoc($selnews);
	$imagename = $rownews['image'];

	global $sliderPath;	
	$path = "$sliderPath/";
	$paththumb = "$itempaththumb/";
	
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from tbl_gallery where id = '$id' ";
	if($imagename!="")
	{
		if(mysql_query($del) or die(mysql_error()))
		{
			

				$img = $path.$imagename;
				
			if(unlink($img))
			{
				mysql_query("COMMIT");
				header('Location: ../csr-list.php?&m=6');
			}
			else
			{
				mysql_query("ROLLBACK");
				header('Location: ../csr-list.php?&m=7');
				
			}
		}
	}
	else
	{
				header('Location: ../csr-list.php?m=7');
	}

}

/*------------------------------------------------------------------------------------------------------------*/
function addActivities()
{  
	$categoryid	= $_POST['selcategoryid']; 


//------------------brand logo--------------------------
	
	//------------------FB image--------------------------
	$fbfilename 		= $_FILES['fbfleimage']['name'];
	$fbfilename_tmp 	= $_FILES['fbfleimage']['tmp_name'];
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($fbfilename, '.');
	if($dots>1){header('Location: ../activities.php?m=2n=FB Image 600px');exit(0);}
	//------------------------------------------------------------------
	//-----------------------check compalsory image size--------------------------------------
	list($width5,$height5)=getimagesize($fbfilename_tmp);
	if($width5<600){
		header('Location: ../activities.php?m=13&n=600px FB Image');exit(0);
	}
	//----------------------------------------------------------------------------------------
	//------now clear all condtion is good-------------if two image not avale-----
	/*global $itempath;	
	global $itempaththumb;	
	$path = "$itempath/";
	$paththumb = "$itempaththumb/";*/
	function getExtension($str) {
		$i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
	}
///////--------------Upload Logo Image-----------------////////////
//////---------------End Upload Brand Image------------////////////
//////---------------Start Upload Brand Image------------////////////
	global $sliderPath;	
	$fbPath = "$sliderPath/";
			$no4 = rand(1,999);
			$uploadedfile4 = $fbfilename;
			$fbfilename = stripslashes($fbfilename);
			$extension4 = getExtension($fbfilename);
			$extension4 = strtolower($extension4);
			if (($extension4 != "jpg") && ($extension4 != "jpeg") && ($extension4 != "png") ) {
					header('Location: ../csr.php?m=3');
					exit();
			}
			//----------------------------------------
			if($extension4=="jpg" || $extension4=="jpeg" ){
				$uploadedfile4 = $fbfilename_tmp;
				$src4 = imagecreatefromjpeg($uploadedfile4);
			}else if($extension4=="png"){
				$uploadedfile4 = $fbfilename_tmp;
				$src4 = imagecreatefrompng($uploadedfile4);
			}else {
				$src4 = imagecreatefromgif($uploadedfile4);
			}
			//----------------------------------------
			list($width4,$height4)=getimagesize($uploadedfile4);
			$setwidth4=600;
			 $ratio2=0.0;
			 if($width4>$setwidth4){
				$ratio2=$setwidth4/$width4;
				$newheight4 = $height4 * $ratio2;    // Reset height to match scaled image 
            	$newwidth4 = $width4 * $ratio2; 
			 }else{
				$newheight4 = $height4 ;
            	$newwidth4 = $width4 ;
			 }
			$tmp4=imagecreatetruecolor($newwidth4,$newheight4);
			imagecopyresampled($tmp4,$src4,0,0,0,0,$newwidth4,$newheight4, $width4,$height4);
			$fbName		   = $no4.$fbfilename;
			$fbfilename			= "$fbPath/". $fbName;
			imagejpeg($tmp4,$fbfilename,100);
			imagedestroy($src4);
			imagedestroy($tmp4);
//////---------------End brand Images------------////////////
	
//////---------------End brand Images------------////////////
$sql="insert into  tbl_gallery(
image,
category_id
)
 values(
 '$fbName',
 '$categoryid'
)";
			if(mysql_query($sql) or die(mysql_error()))
			{
				//copy file name end
				header('Location: ../activities.php?m=1');
				//echo "success";
			}
			else
			{
				header('Location: ../activities.php?m=0');
				//echo "fail";
			}
} 
/*-----------------edit condtion my custm-------------------------*/

function setImage()
{ 
	$productid 		= $_GET['productid']; 
	$imgeid		= $_GET['imgeid']; 
	

//////---------------End brand Images------------////////////
$sqladd = mysql_query("update tbl_product_image set primary_image  = 0 where product_id = '$productid'") or die(mysql_error());
$sqladd = mysql_query("update tbl_product_image SET primary_image = '1' WHERE id ='$imgeid'") or die(mysql_error());
 if(mysql_affected_rows() > 0)
	{
		header('Location: ../add-image.php?m=14&id='.$productid);
		//echo "update3";
	}
	else
	{
		header('Location: ../add-image.php?m=14&id='.$productid);
		//echo "fail";
	}
} 
function deleteProductImage()
{
	$id =isset($_GET['imgeid'])? $_GET['imgeid'] : "";
	$productid 		= $_GET['productid']; 
	//echo "value is ".$id;
	$selnews = mysql_query("select * from tbl_product_image where id = '$id' ");
	$rownews = mysql_fetch_assoc($selnews);
	$imagename = $rownews['image'];
	$imagenamethumb = $rownews['thumb'];
	global $productImageThumbPath;	
	global $productImagePath;	
	$path = "$productImagePath/";
	$paththumb = "$productImageThumbPath/";
	
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from tbl_product_image where id = '$id' ";
	if($imagename!="")
	{
		if(mysql_query($del) or die(mysql_error()))
		{
			$img = $path.$imagename;
			$imgthumb = $paththumb.$imagenamethumb;
			if(unlink($img))
			{
				unlink($imgthumb);
				mysql_query("COMMIT");
				header('Location: ../add-image.php?&m=6&id='.$productid);
				//echo "success";
			}
			else
			{
				mysql_query("ROLLBACK");
				header('Location: ../add-image.php?&m=7&id='.$productid);
				//echo "fail";
			}
		}
	}
	else
	{
				header('Location: ../add-image.php?m=7&id='.$productid);
	}

}
function editActivities()
{ 
	$id 		= $_POST['txtid']; 
	$categoryid	= $_POST['selcategoryid']; 
	
//----------------------------------------------------------------------
//------------------FB image--------------------------
	$fbfilename 		= $_FILES['fbfleimage']['name'];
	$fbfilename_tmp 	= $_FILES['fbfleimage']['tmp_name'];
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($fbfilename, '.');
	if($dots>1){header('Location: ../activities.php?m=2n=FB Image 400px');exit(0);}
	//-----------------------check compalsory image size--------------------------------------
	if($fbfilename!=""){
		list($width5,$height5)=getimagesize($fbfilename_tmp);
		if($width5<600){
			header('Location: ../activities.php?m=13&n=400px FB Image');exit(0);
		}
	}
	//----------------------------------------------------------------------------------------
	function getExtension($str) {
		$i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
	}
// ------------- get all images  name  -------------------------
$sel = mysql_query("select * from tbl_gallery where id = '$id' ");
$row = mysql_fetch_assoc($sel);
$Un_fbImage 	= $row['image'];	
/*--------------------------*/
$fbName	= $row['image'];	
/*---------------------------*/
$flagFBImage	=0;
// ------------- get all images  name  -------------------------
	global $sliderPath;	
	$fbPath = "$sliderPath/";
	$no4 = rand(1,999);
				

if($fbfilename!=""){
$flagFBImage	=1;
//-----------------------------------------------
	$uploadedfile4 = $fbfilename;
	$fbfilename = stripslashes($fbfilename);
	$extension4 = getExtension($fbfilename);
	$extension4 = strtolower($extension4);
	
	if (($extension4 != "jpg") && ($extension4 != "jpeg") && ($extension4 != "png") ) {
			header('Location: ../activities.php?m=3');
			exit();
	}
	//----------------------------------------
	if($extension4=="jpg" || $extension4=="jpeg" ){
		$uploadedfile4 = $fbfilename_tmp;
		$src4 = imagecreatefromjpeg($uploadedfile4);
	}else if($extension4=="png"){
		$uploadedfile4 = $fbfilename_tmp;
		$src4 = imagecreatefrompng($uploadedfile4);
	}else {
		$src4 = imagecreatefromgif($uploadedfile4);
	}
	//----------------------------------------
	list($width4,$height4)=getimagesize($uploadedfile4);
	$setwidth4=600;
	 
	 
	 if($width4>$setwidth4){
		$ratio2=$setwidth4/$width4;
		$newheight4 = $height4 * $ratio2;    // Reset height to match scaled image 
		$newwidth4 = $width4 * $ratio2; 
	 }else{
		$newheight4 = $height4 ;
		$newwidth4 = $width4 ;
	 }
	$tmp4=imagecreatetruecolor($newwidth4,$newheight4);
	imagecopyresampled($tmp4,$src4,0,0,0,0,$newwidth4,$newheight4, $width4,$height4);
	$fbName		   = $no4.$fbfilename;
	$fbfilename			= "$fbPath/". $fbName;
	imagejpeg($tmp4,$fbfilename,100);
	imagedestroy($src4);
	imagedestroy($tmp4);
	
}	 

//////---------------End brand Images------------////////////
$sqladd = mysql_query("update tbl_gallery set 
image = '$fbName',
category_id = '$categoryID' 
 where id = '$id'") or die(mysql_error());
 if(mysql_affected_rows() > 0)
	{
		$img5 = $fbPath.$Un_fbImage;
		if($flagFBImage==1){unlink($img5);}
		header('Location: ../activities.php&m=7&id='.$id);
		//echo "update3";
	}
	else
	{
		header('Location: ../activities.php?m=5&id='.$id);
		//echo "fail";
	}
} 

function deleteActivities()
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$selnews = mysql_query("select * from tbl_gallery where id = '$id' ");
	$rownews = mysql_fetch_assoc($selnews);
	$imagename = $rownews['image'];

	global $sliderPath;	
	$path = "$sliderPath/";
	$paththumb = "$itempaththumb/";
	
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from tbl_gallery where id = '$id' ";
	if($imagename!="")
	{
		if(mysql_query($del) or die(mysql_error()))
		{
			

				$img = $path.$imagename;
				
			if(unlink($img))
			{
				mysql_query("COMMIT");
				header('Location: ../activities-list.php?&m=6');
			}
			else
			{
				mysql_query("ROLLBACK");
				header('Location: ../activities-list.php?&m=7');
				
			}
		}
	}
	else
	{
				header('Location: ../activities-list.php?m=7');
	}

}
/*----------------setting---------------------*/
function updateSetting()
{

	
	$fblink		  	=$_POST['txtfblink'];
	$twitter		=$_POST['txttwitter'];
	$googlelink	 	=$_POST['txtgooglelink'];
	$linkdinglink 	=$_POST['txtlinkdinglink'];
	$address1	 	=$_POST['txtaddress1'];
	$address2	 	=$_POST['txtaddress2'];
	$phone1		 	=$_POST['txtphone1'];
	$phone2		 	=$_POST['txtphone2'];
	$email		 	=$_POST['txtemail'];
	$companyname	=$_POST['txtcompanyname'];
	$metatitle	 	=$_POST['txtmetatitle'];
	$metakeyword	=$_POST['txtmetakeyword'];
	$metadec		=$_POST['txtmetadec'];
	
/*---------------*/	
	global $sliderPath;	
	$path = "$sliderPath/";
function getExtension($str) {

         $i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
	}
	$filename = $_FILES['fleimage']['name'];
	$filename_tmp = $_FILES['fleimage']['tmp_name'];
	if($filename!="")
	{
		$extension = getExtension($filename);
		$extension = strtolower($extension);

		if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
	  	{
			//$errors=1;
			header('Location: edit-record.php?c=1&m=0&id='.$id);
			exit();
		}
		
		
		if ($filename) 
  		{
	
 			$catfile = $filename;
			$no = rand(1,999);
			$tno = rand(1,999);
			$image = $filename;
			
			$uploadedfile = $filename;
	
			$newfile = $no.$image;
			$filename = stripslashes($filename);
			$extension = getExtension($filename);
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
				{
					//$errors=1;
						header('Location: edit-record.php?c=1&m=0&id='.$id);
					exit();
				}
			
			$extension = strtolower($extension);
			if($extension=="jpg" || $extension=="jpeg" )
			{
				$uploadedfile = $filename_tmp;
				$src = imagecreatefromjpeg($uploadedfile);
			}
			else if($extension=="png")
			{
				$uploadedfile = $filename_tmp;
				$src = imagecreatefrompng($uploadedfile);
			}
			else 
			{
				$src = imagecreatefromgif($uploadedfile);
			}
			list($width,$height)=getimagesize($uploadedfile);
			 $setwidth=200;
			 $setheight=350;
			 
			 $ratio=0.0;
			 if($width>$setwidth)
			 {
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }
			 else
			 {
				 $newwidth =200;
			 }

			/* if($height>$setheight)
			 {
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }
			 else
			 {
				  $newheight =350;
			 }*/
				 
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$tcatfile = $tno.$filename;
			$filename = "$path/". $tcatfile;
				
			imagejpeg($tmp,$filename,100);
			imagedestroy($src);
			imagedestroy($tmp);
			
			
			$done = "yes";
				$sel = mysql_query("select * from tbl_setting where id = '1' ");
				$row = mysql_fetch_assoc($sel);
				$imagename = $row['logo_image'];

		}
		if($done == "yes")
		{
		$sqladd = mysql_query("update tbl_setting set 
			social_link_1='$fblink' ,
			social_link_2='$twitter' ,
			social_link_3='$googlelink' ,
			social_link_4='$linkdinglink' ,
			address_1='$address1' ,
			address_2='$address2' ,
			phone_1='$phone1' ,
			phone_2='$phone2' ,
			company_name='$companyname' ,
			email='$email' ,
			meta_title='$metatitle' ,
			meta_keyword='$metakeyword' ,
			meta_description='$metadec'
			,logo_image = '$tcatfile'   where id = '1'") or die(mysql_error());
			
		
			
			if(mysql_affected_rows() > 0)
			{
				
				$img = $path.$imagename;
				if(!empty($imagename) )
				{
					unlink($img);
				}
				header('Location: ../setting.php?c=1');
				//echo "update";
			}
			else
			{
				header('Location: ../setting.php?c=0');
				//echo "fail";
			}
		}
	}
	else
	{
	$sqladd = mysql_query("update tbl_setting set 
			social_link_1='$fblink' ,
			social_link_2='$twitter' ,
			social_link_3='$googlelink' ,
			social_link_4='$linkdinglink' ,
			address_1='$address1' ,
			address_2='$address2' ,
			phone_1='$phone1' ,
			phone_2='$phone2' ,
			company_name='$companyname' ,
			email='$email' ,
			meta_title='$metatitle' ,
			meta_keyword='$metakeyword' ,
			meta_description='$metadec'   where id = '1'") or die(mysql_error());
		if(mysql_affected_rows() > 0)
		{
			header('Location: ../setting.php?m=1');
			//echo "update";
		}
		else
		{
			header('Location: ../edit-record.php?m=0');
			//echo "fail";
		}
	}
}
function addZone()
{	$tot=count($_POST['stateid']);
	$state="";
	$i=1;
	foreach ($_POST['stateid'] as $value) {
	
		if($tot!=$i){
			$state .="$value,";
			$i++;
		}else{
			$state .="$value";
		}
	}
	
	$name 			= $_POST['txtname'];  
	
//---------------End brand Images------------////////////
	$sql="insert into  tbl_zone(state_id,name) values('$state','$name')";
	if(mysql_query($sql) or die(mysql_error()))
	{
		header('Location: ../zone.php?m=1');
		//echo "success";
	}
	else
	{
		header('Location: ../zone.php?m=0');
		//echo "fail";
	}
	
}
function editZone()
{	$tot=count($_POST['stateid']);
	$state="";
	$i=1;
	foreach ($_POST['stateid'] as $value) {
	
		if($tot!=$i){
			$state .="$value,";
			$i++;
		}else{
			$state .="$value";
		}
	}
	$name 		= $_POST['txtname'];  
	$id 		= $_POST['txtid'];  
	
	
//////---------------End brand Images------------////////////
	
	$sqladd = mysql_query("update tbl_zone set 
	state_id = '$state',
	name = '$name'
	where id = '$id'") or die(mysql_error());
 	if(mysql_affected_rows() > 0)
	{
		header('Location: ../zone.php?m=4&id='.$id);
		//echo "update3";
	}
	else
	{
		header('Location: ../zone.php?m=5&id='.$id);
		//echo "fail";
	}
}

/*--------------------Delete Shipping Template -------------------------*/ 
function deleteZone()
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from tbl_zone where id = '$id'";
	if(mysql_query($del) or die(mysql_error()))
	{
		mysql_query("COMMIT");
		header('Location: ../zone-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");
    	header('Location: ../zone-list.php?&m=7');
	}
}
/*--------product-----------------------------------------------*/
?>