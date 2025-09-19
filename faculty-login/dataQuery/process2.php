<?php
	require_once '../loginQuery/session_start2.php'; 
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
		case 'addCourse':
			addCourse($conn);
			break;	
		case 'editCourse':
			editCourse($conn);
			break;	
		case 'addSubject':
			addSubject($conn);
			break;	
		case 'editSubject':
			editSubject($conn);
			break;
		case 'addQuestionPaper':
			addQuestionPaper($conn);
			break;	
		case 'addPaidQuestionPaper':
			addPaidQuestionPaper($conn);
			break;	
		case 'editQuestionPaper':
			editQuestionPaper($conn);
			break;
		case 'editPaidQuestionPaper':
			editPaidQuestionPaper($conn);
			break;	
		case 'addQuestion':
			addQuestion($conn);
			break;	
		case 'editQuestion':
			editQuestion($conn);
			break;	
		case 'addRawQuestion':
			addRawQuestion($conn);
			break;	
		case 'editRawQuestion':
			editRawQuestion($conn);
			break;
		case 'addNews':
			addNews($conn);
			break;	
		case 'editNews':
			editNews($conn);
			break;	
		case 'addStudent':
			addStudent($conn);
			break;	
		case 'editStudent':
			editStudent($conn);
			break;								
		case 'addBookMaster':
			addBookMaster($conn);
			break;									
		case 'editBookMaster':
			editBookMaster($conn);
			break;
		case 'addBookIssue':
			addBookIssue($conn);
			break;											

		case 'addHome':
			addHome($conn);
			break;
		case 'editHome':
			editHome($conn);
			break;			
		case 'addProduct':
		 	addProduct($conn);		
			break;	
		case 'editProduct':
		 	editProduct($conn);
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
		case 'addBookStock':
		 	addBookStock($conn);
			break;
		case 'editBookStock':
		 	editBookStock($conn);
			break;	
		case 'addBookOut':
		 	addBookOut($conn);
			break;
		case 'editBookOut':
		 	editBookOut($conn);
			break;
		default :
		//header('Location: ../home.php');
	}
	$action2 = isset($_GET['action2']) ? $_GET['action2'] : '';
	switch($action2)
	{
		case 'deleteBookMaster':
			deleteBookMaster($conn);
			break;
		case 'returnBook':
			returnBook($conn);
			break;	
		case 'deleteProduct':
			deleteProduct($conn);
			break;
		case 'deleteCourse':
			deleteCourse($conn);
			break;	
		case 'deleteSubject':
			deleteSubject($conn);
			break;
		case 'deleteQuestionPaper':
			deleteQuestionPaper($conn);
			break;	
		case 'deletePaidQuestionPaper':
			deletePaidQuestionPaper($conn);
			break;		
		case 'deleteQuestion':
			deleteQuestion($conn);
			break;	
		case 'deleteRawQuestion':
			deleteRawQuestion($conn);
			break;	
		case 'deleteStudent':
			deleteStudent($conn);
			break;			
		case 'deleteNews':
			deleteNews($conn);
			break;				
			
		case 'deleteBanner':
			deleteBanner($conn);
			break;
		
		case 'setImage':
			setImage();
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
	
	$sqladd = mysqli_query($conn,"update  tbl_setting2 set 
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
	$sel = mysqli_query($conn,"select * from  tbl_setting2 where id = '1' ");
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
 
	$sqladd = mysqli_query($conn,"update tbl_setting2 set 
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
	$sel = mysqli_query($conn,"select * from  tbl_setting2 where id = '1' ");
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
	
	$sqladd = mysqli_query($conn,"update  tbl_setting2 set 
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
$sel = mysqli_query($conn,"select * from  tbl_setting2 where id = '1' ");
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
 
$sqladd = mysqli_query($conn,"update tbl_setting2 set 

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


function addTestimonial($conn)
{
	$name	=	mysqli_real_escape_string($conn,$_POST['txtunit']); 
	$description	=	mysqli_real_escape_string($conn,$_POST['txtdescription']); 
	$sql="insert into  tbl_testimonial(name,description) values('$name','$description')";
	if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
	{
		header('Location: ../testimonial-list.php?m=1');
		//echo "success";
	}
	else
	{
		header('Location: ../testimonial-list.php?m=0');
		//echo "fail";
	}
} 

function editTestimonial($conn)
{
	$id	=	$_POST['txtid']; 
	$name	=	mysqli_real_escape_string($conn,$_POST['txtunit']); 
	$description	=	mysqli_real_escape_string($conn,$_POST['txtdescription']); 
	$sqladd = mysqli_query($conn,"update  tbl_testimonial set 
	name='$name',
	description='$description' where id = '$id'") or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn) > 0)
	{
		header('Location: ../testimonial-list.php?m=4');
	}
	else
	{
		header('Location: ../testimonial-list.php?m=5');
	}

} 
function deleteTestimonial($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql = mysqli_query($conn,"START TRANSACTION");
	$del =	"delete from tbl_testimonial where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
		mysqli_query($conn,"COMMIT");	
		header('Location: ../testimonial-list.php?&m=6');
	}
	else
	{
		mysqli_query($conn,"ROLLBACK");	
		header('Location: ../testimonial-list.php?m=7');
	}

}


/*--------product-----------------------------------------------*/
function addBanner($conn)
{  
	
	$heading	 		= 	mysqli_real_escape_string($conn,$_POST['txtheading']); 	
	$subheading		 	= 	mysqli_real_escape_string($conn,$_POST['txtsubheading']); 	
	$order		 	= 	mysqli_real_escape_string($conn,$_POST['txtorder']); 
	$link		 	= 	mysqli_real_escape_string($conn,$_POST['txtlink']); 
	
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
			if (($extension != "jpg") && ($extension != "jpeg") ) {
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
			 $setheight=667;
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
			

	//////---------------End Upload Brand Image------------////////////
	}else{
	$newfile1="";
	 $imageThumbName="";
	}	

	$sql="insert into   tbl_banner(ordering,
	heading,sub_heading,image,thumb,link) 
	values('$order','$heading','$subheading','$newfile1','$imageThumbName','$link')";
 				
			if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
			{
				header('Location: ../banner-list.php?m=1');
				//echo "suucess";
				
			}
			else
			{
								//echo "fail";
				header('Location: ../banner-list.php?m=0');
				
			}


} 	
function editBanner($conn)
{ 
	$id 					= $_POST['txtid']; 
	
	$heading	 		= 	mysqli_real_escape_string($conn,$_POST['txtheading']); 	
	$subheading		 	= 	mysqli_real_escape_string($conn,$_POST['txtsubheading']); 	
	$order		 	= 	mysqli_real_escape_string($conn,$_POST['txtorder']); 
	$link		 	= 	mysqli_real_escape_string($conn,$_POST['txtlink']); 
		
	
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
	$sel = mysqli_query($conn,"select * from tbl_banner where id = '$id' ");
	$row = mysqli_fetch_assoc($sel);
	$Un_OrginalImage1 	= $row['image'];	
	$Un_Image1 			= $row['thumb'];	
	/*--------------insert record varible record------------*/
	$InsertImage1 				= $row['image'];	
	$InsertImagethumb1 			= $row['thumb'];	

	/*---------------------------*/
	$flagImage1		=0;
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
			 $setheight=667;
			 $ratio=0.0;
			 /*
			 if($width>$setwidth){
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
	$sqladd = mysqli_query($conn,"update tbl_banner set 
	ordering ='$order',
	heading ='$heading',
	sub_heading ='$subheading',
	link ='$link',
	image='$InsertImage1' ,	
	thumb='$InsertImagethumb1'
	 		

	 where id = '$id'") or die(mysqli_error($conn));
	 if(mysqli_affected_rows($conn) > 0)
	{
		if($flagImage1==1){
			if($Un_OrginalImage1!=""){
				unlink($ImagePath.$Un_OrginalImage1);
				unlink($ImageThumbPath.$Un_Image1);
			}
		}
		
		header('Location: ../banner-list.php?m=4');
		//echo "success";
	}
	else
	{
		header('Location: ../banner-list.php?m=5');
	}
} 
function deleteBanner($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	
	//-------------------------------------------------------------------------------------------------
	$checkSql=mysqli_query($conn,"select * from  tbl_banner where id ='$id'")or die(mysqli_error($conn));
	if(mysqli_num_rows($checkSql)>0)
	{
		$rowi=mysqli_fetch_assoc($checkSql);
		$image1=$rowi['image'];
		$thumb1=$rowi['thumb'];

		//header('Location: ../product-list.php?&m=15');
		//exit();
	}
	//echo "value is ".$id;
	global $bannerPath;	
	global $bannerPathThumb;	
	$ImagePath = "$bannerPath/";
	$ImageThumbPath = "$bannerPathThumb/";
	
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from  tbl_banner where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
			if($image1!=""){
				unlink($ImagePath.$image1);
				unlink($ImageThumbPath.$thumb1);
			}
		mysql_query("COMMIT");	
		header('Location: ../banner-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../banner-list.php?m=7');
	}
	//---------------------------------------------------------------------------------------------------
}

/*---------------------Home page-----------------------------------------------------*/
/*--------product-----------------------------------------------*/
function addHome($conn)
{  
	
	$heading		= 	mysqli_real_escape_string($conn,$_POST['txtheading']); 	
	$description 	= 	mysqli_real_escape_string($conn,$_POST['txtdescription']); 	
	
	/*-------------------------Image info-----------------------------*/

	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../brand.php?m=2&n=Home Page');exit(0);}
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
			if (($extension != "jpg") && ($extension != "jpeg") ) {
					header('Location: ../home-testimonial.php?m=3');
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
			 $setheight=514;
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
			

	//////---------------End Upload Brand Image------------////////////
	}else{
	$newfile1="";
	 $imageThumbName="";
	}	

	$sql="insert into   tbl_home_testimonial(name,
	description,image1,thumb1) values('$heading','$description','$newfile1','$imageThumbName')";
 				
			if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
			{
				header('Location: ../home-testimonial.php?m=1');
				//echo "suucess";
				
			}
			else
			{
								//echo "fail";
				header('Location: ../home-testimonial.php?m=0');
				
			}


} 	
function editHome($conn)
{ 
	$id 					= $_POST['txtid']; 
	
	$heading		= 	mysqli_real_escape_string($conn,$_POST['txtheading']); 	
	$description 	= 	mysqli_real_escape_string($conn,$_POST['txtdescription']); 		
	
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
	$sel = mysqli_query($conn,"select * from tbl_home_testimonial where id = '$id' ");
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
			if (($extension != "jpg") && ($extension != "jpeg")) {
					header('Location: ../home-testimonial.php?m=3');
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
			 $setheight=514;
			 $ratio=0.0;
			 /*
			 if($width>$setwidth){
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
$sqladd = mysqli_query($conn,"update tbl_home_testimonial set 
name ='$heading',
description ='$description',

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
		
		header('Location: ../home-testimonial.php?m=4&id='.$id);
		//echo "success";
	}
	else
	{
		header('Location: ../home-testimonial.php?m=5&id='.$id);
	}
} 
//======================================================================================
/*--------product-----------------------------------------------*/
function addGallery($conn)
{  
	
	$year	 		= 	mysqli_real_escape_string($conn,$_POST['selyear']); 	
	$galleryid		 	= 	mysqli_real_escape_string($conn,$_POST['selgalleryid']); 	
	/*-------------------------Image info-----------------------------*/

	//------------------brand logo--------------------------
//	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
//	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
function getExtension($str) {
		$i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
		}	
$uploaded_images = array();
foreach($_FILES['image1fleimage']['name'] as $key=>$val)
{        
		$no=rand(10000,99999);
	        $imagefleimagename1 = $_FILES['image1fleimage']['name'][$key];
			$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'][$key];
		//---------------------condition--check dots------------------------ 
		$dots=substr_count($imagefleimagename1, '.');
		if($dots>1){header('Location: ../gallery.php?m=2&n=Gallery Image');exit(0);}
		//------------------------------------------------------------------
		//------now clear all condtion is good-------------if two image not avale-----
		
			$no = rand(1,999);
			$tno = rand(1,999);	
///////--------------Upload Logo Image-----------------////////////


	global $productPath;	
	global $productPathThumb;	
	$ImagePath = "$productPath/";
	$ImageThumbPath = "$productPathThumb/";
//================================ Image 1 ==============================	


	//check if image has 2 dot then exit program
			//$catfile = $imagefleimagename1;
			$image = $imagefleimagename1;
			$uploadedfile = $imagefleimagename1;
			$imagefleimagename1 = stripslashes($imagefleimagename1);
			$extension = getExtension($imagefleimagename1);
			$extension = strtolower($extension);
			/*-------------------------------*/
			/*---------------------------------*/
			/*if (($extension != "jpg") && ($extension != "jpeg") ) {
					header('Location: ../gallery.php?m=3');
					exit();
			}*/
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
			 $setwidth=250;
			 $ratio=0.0;
			 if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }
			//move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$newfile1);
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			$imageThumbName = $tno.$imagefleimagename1;
			$imagefleimagename = "$ImageThumbPath/". $imageThumbName;
				
			imagejpeg($tmp,$imagefleimagename,100);
			imagedestroy($src);
			imagedestroy($tmp);

			// orignal image
			$no=rand(10000,99999);
	        $upload_file = $ImagePath.$no.$_FILES['image1fleimage']['name'][$key];
			$filename = $no.$_FILES['image1fleimage']['name'][$key];
			if(move_uploaded_file($_FILES['image1fleimage']['tmp_name'][$key],$upload_file)){
	            
	            $uploaded_images[] ="('$galleryid','$year','$filename','$imageThumbName')";;

				
	        }
			

//////---------------End Upload Brand Image------------////////////
}//end loop	
 		
	$sql="insert into tbl_gallery_image(gallery_id,year,image,thumb) VALUES ";
	$sql .= implode(', ', $uploaded_images);  
			if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
			{
				header('Location: ../gallery.php?m=1&year='.$year.'&gallery_id='.$galleryid);
				//echo "suucess";
				
			}
			else
			{
								//echo "fail";
				header('Location: ../gallery.php?m=0');
				
			}
} 	
function editGallery($conn)
{ 
	$id 					= $_POST['txtid']; 
	
	$year	 		= 	mysqli_real_escape_string($conn,$_POST['selyear']); 	
	$galleryid		 	= 	mysqli_real_escape_string($conn,$_POST['selgalleryid']); 	
	
	/*-------------------------Image info-----------------------------*/
	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
	//---------------------condition--check 0dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../gallery-list.php?m=2&n=Gallery Image');exit(0);}
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
$sel = mysqli_query($conn,"select * from tbl_gallery_image where id = '$id' ");
$row = mysqli_fetch_assoc($sel);
$Un_OrginalImage1 	= $row['image'];	
$Un_Image1 			= $row['thumb'];	
/*--------------insert record varible record------------*/
$InsertImage1 				= $row['image'];	
$InsertImagethumb1 			= $row['thumb'];	

/*---------------------------*/
$flagImage1		=0;
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
					header('Location: ../gallery.php?m=3');
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
			 $setheight=440;
			 $ratio=0.0;
			 /*
			 if($width>$setwidth){
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
$sqladd = mysqli_query($conn,"update tbl_gallery_image set 
gallery_id ='$galleryid',
year ='$year',
image='$InsertImage1' ,	
thumb='$InsertImagethumb1'
where id = '$id'") or die(mysqli_error($conn));
 if(mysqli_affected_rows($conn) > 0)
	{
		if($flagImage1==1){
			if($Un_OrginalImage1!=""){
				unlink($ImagePath.$Un_OrginalImage1);
				unlink($ImageThumbPath.$Un_Image1);
			}
		}
		
		header('Location: ../gallery-list.php?m=4');
		//echo "success";
	}
	else
	{
		header('Location: ../gallery-list.php?m=5');
	}
} 
function deleteGallery($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	
	//-------------------------------------------------------------------------------------------------
	$checkSql=mysqli_query($conn,"select * from  tbl_gallery_image where id ='$id'")or die(mysqli_error($conn));
	if(mysqli_num_rows($checkSql)>0)
	{
		$rowi=mysqli_fetch_assoc($checkSql);
		$image1=$rowi['image'];
		$thumb1=$rowi['thumb'];

		//header('Location: ../product-list.php?&m=15');
		//exit();
	}
	//echo "value is ".$id;
	global $galleryPath;	
	global $galleryPathThumb;	
	$ImagePath = "$galleryPath/";
	$ImageThumbPath = "$galleryPathThumb/";
	
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from  tbl_gallery_image where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
			if($image1!=""){
				unlink($ImagePath.$image1);
				unlink($ImageThumbPath.$thumb1);
			}
		mysql_query("COMMIT");	
		header('Location: ../gallery-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../gallery-list.php?m=7');
	}
	//---------------------------------------------------------------------------------------------------
	
}
/*---------------------------end  edit product------------------------------*/
function deleteSubCategory($conn)
{
	$id =$_GET['id'];
	
	$sqlc=mysqli_query($conn,"select * from   tbl_item where sub_category_id='$id'") or die(mysqli_error($conn));
	if(mysqli_num_rows($sqlc)>0){
		header('Location: ../category-list.php?&m=15');
	
	}else{
	//-------------------------------------------------------------------------------------------------	
	//echo "value is ".$id;
	$sql = mysqli_query($conn,"START TRANSACTION");
	$del =	"delete from tbl_sub_category where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
		mysqli_query($conn,"COMMIT");	
		header('Location: ../category-list.php?&m=6');
	}
	else
	{
		mysqli_query($conn,"ROLLBACK");	
		header('Location: ../category-list.php?&m=7');

	}
		//-------------------------------------------------------------------------------------------------
		}
}

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
			if (($extension4 != "jpg") && ($extension4 != "jpeg") ) {
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
				$sel = mysql_query("select * from tbl_setting2 where id = '1' ");
				$row = mysql_fetch_assoc($sel);
				$imagename = $row['logo_image'];

		}
		if($done == "yes")
		{
		$sqladd = mysql_query("update tbl_setting2 set 
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
	$sqladd = mysql_query("update tbl_setting2 set 
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


//==================================== rooms ===================

/*--------product-----------------------------------------------*/
function addProduct($conn)
{  
	
	$name	 				= 	mysqli_real_escape_string($conn,$_POST['txtproductname']); 	
	$url					= 	strtolower(str_replace(" ","-",$name));
	$url					= 	strtolower(str_replace("&","and",$url));
	$price		 			= 	mysqli_real_escape_string($conn,$_POST['txtprice']); 	
	$youtube		 			= 	mysqli_real_escape_string($conn,$_POST['txtyoutube']); 	
	$description		 	= 	mysqli_real_escape_string($conn,$_POST['txtdescription']); 	
	$metatitle		 		= 	mysqli_real_escape_string($conn,$_POST['txtmetatitle']); 	
	$metakeyword		 	= 	mysqli_real_escape_string($conn,$_POST['txtmetakeyword']); 	
	$metadescription		= 	mysqli_real_escape_string($conn,$_POST['txtmetadescription']); 
	
	
	
	/*-------------------------Image info-----------------------------*/
	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
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
			if (($extension != "jpg") && ($extension != "jpeg") ) {
					header('Location: ../rooms.php?m=3');
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
			

	//////---------------End Upload Brand Image------------////////////
	}else{
	$newfile1="";
	 $imageThumbName="";
	}	

	$sql="insert into tbl_product(name,
	url,price,description,youtube,meta_title,meta_keyword,meta_description,image,thumb) 
	values('$name','$url','$price','$description','$youtube','$metatitle','$metakeyword','$metadescription','$newfile1','$imageThumbName')";
 				
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
function editProduct($conn)
{ 
	$id 					= $_POST['txtid']; 
	
	$name	 				= 	mysqli_real_escape_string($conn,$_POST['txtproductname']); 	
	$url					= 	strtolower(str_replace(" ","-",$name));
	$url					= 	strtolower(str_replace("&","and",$url));
	$price		 			= 	mysqli_real_escape_string($conn,$_POST['txtprice']); 	
	$description		 	= 	mysqli_real_escape_string($conn,$_POST['txtdescription']); 	
	$metatitle		 		= 	mysqli_real_escape_string($conn,$_POST['txtmetatitle']); 	
	$metakeyword		 	= 	mysqli_real_escape_string($conn,$_POST['txtmetakeyword']); 	
	$metadescription		= 	mysqli_real_escape_string($conn,$_POST['txtmetadescription']); 
	$youtube		 			= 	mysqli_real_escape_string($conn,$_POST['txtyoutube']); 			
	
	/*-------------------------Image info-----------------------------*/
	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../product-list.php?m=2&n=Brand Logo');exit(0);}
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
	$sel = mysqli_query($conn,"select * from tbl_product where id = '$id' ");
	$row = mysqli_fetch_assoc($sel);
	$Un_OrginalImage1 	= $row['image'];	
	$Un_Image1 			= $row['thumb'];	
	/*--------------insert record varible record------------*/
	$InsertImage1 				= $row['image'];	
	$InsertImagethumb1 			= $row['thumb'];	

	/*---------------------------*/
	$flagImage1		=0;
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
			 $setheight=667;
			 $ratio=0.0;
			 /*
			 if($width>$setwidth){
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
	$sqladd = mysqli_query($conn,"update tbl_product set 
	name ='$name',
	url ='$url',
	price ='$price',
	description ='$description',
	youtube ='$youtube',
	meta_title ='$metatitle',
	meta_keyword ='$metakeyword',
	meta_description ='$metadescription',
	image='$InsertImage1' ,	
	thumb='$InsertImagethumb1'
	 		

	 where id = '$id'") or die(mysqli_error($conn));
 	if(mysqli_affected_rows($conn) > 0)
	{
		if($flagImage1==1){
			if($Un_OrginalImage1!=""){
				unlink($ImagePath.$Un_OrginalImage1);
				unlink($ImageThumbPath.$Un_Image1);
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
function deleteProduct($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	
	//-------------------------------------------------------------------------------------------------
	$checkSql=mysqli_query($conn,"select * from  tbl_product where id ='$id'")or die(mysqli_error($conn));
	if(mysqli_num_rows($checkSql)>0)
	{
		$rowi=mysqli_fetch_assoc($checkSql);
		$image1=$rowi['image'];
		$thumb1=$rowi['thumb'];

		//header('Location: ../product-list.php?&m=15');
		//exit();
	}
	//echo "value is ".$id;
	global $productPath;	
	global $productPathThumb;	
	$ImagePath = "$productPath/";
	$ImageThumbPath = "$productPathThumb/";
	
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from  tbl_product where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
			if($image1!=""){
				unlink($ImagePath.$image1);
				unlink($ImageThumbPath.$thumb1);
			}
		mysql_query("COMMIT");	
		header('Location: ../product-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../product-list.php?m=7');
	}
	//---------------------------------------------------------------------------------------------------
}
// ==============================gallery category=================================
function addGalleryCategory($conn)
{
	
	$name		=	 mysqli_real_escape_string($conn,$_POST['txtname']); 
	$url	= strtolower(str_replace(" ","-",$name));
	$url	= strtolower(str_replace("&","and",$url));

	$sql="insert into  tbl_gallery_category(name,url) values('$name','$url')";
	if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
	{
		header('Location: ../gallery-category-list.php?m=1');
		//echo "success";
	}
	else
	{
		header('Location: ../gallery-category-list.php?m=0');
		//echo "fail";
	}

} 
function editGalleryCategory($conn)
{
	$id	=	$_POST['txtid']; 
	$name		=	 mysqli_real_escape_string($conn,$_POST['txtname']); 
	$url	= strtolower(str_replace(" ","-",$name));
	$url	= strtolower(str_replace("&","and",$url));
	
	$sqladd = mysqli_query($conn,"update  tbl_gallery_category set 
	name='$name',
	url='$url' where id = '$id'") or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn) > 0)
	{
		header('Location: ../gallery-category.php?m=4&id='.$id);
	}
	else
	{
		header('Location: ../gallery-category.php?m=5&id='.$id);
	}

} 
function deleteGalleryCategory($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql = mysqli_query($conn,"START TRANSACTION");
	$del =	"delete from tbl_gallery_category where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
		mysqli_query($conn,"COMMIT");	
		header('Location: ../gallery-category-list.php?&m=6');
	}
	else
	{
		mysqli_query($conn,"ROLLBACK");	
		header('Location: ../gallery-category-list.php?m=7');
	}

}

/*--------blog-----------------------------------------------*/
function addBlog($conn)
{  
	
	$name	 		= 	mysqli_real_escape_string($conn,$_POST['txtroomname']); 	
	$url	= strtolower(str_replace(" ","-",$name));
	$url	= strtolower(str_replace("&","and",$url));
	$description		 	= 	mysqli_real_escape_string($conn,$_POST['txtdescription']); 
	
	if(isset($_POST['status'])){$status=1;}else{$status=0;}
	if(isset($_POST['showonhome'])){$showonhome=1;}else{$showonhome=0;}
	
	/*-------------------------Image info-----------------------------*/
	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../rooms.php?m=2&n=Rooms Image');exit(0);}
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
			if (($extension != "jpg") && ($extension != "jpeg") ) {
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
			

	//////---------------End Upload Brand Image------------////////////
	}else{
	$newfile1="";
	 $imageThumbName="";
	}	

	$sql="insert into   tbl_blog(name,url,description,image,thumb) 
	values('$name','$url','$description','$newfile1','$imageThumbName')";
 				
			if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
			{
				header('Location: ../blog-list.php?m=1');
				// echo "suucess";
				
			}
			else
			{
								//echo "fail";
				header('Location: ../blog-list.php?m=0');
				
			}


} 	
function editBlog($conn)
{ 
	$id 					= $_POST['txtid']; 
	
	$name	 		= 	mysqli_real_escape_string($conn,$_POST['txtroomname']); 	
	$url	= strtolower(str_replace(" ","-",$name));
	$url	= strtolower(str_replace("&","and",$url));
	
	$description		 	= 	mysqli_real_escape_string($conn,$_POST['txtdescription']); 
	
	if(isset($_POST['status'])){$status=1;}else{$status=0;}
	if(isset($_POST['showonhome'])){$showonhome=1;}else{$showonhome=0;}
		
	
	/*-------------------------Image info-----------------------------*/
	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../blog.php?m=2&n=Brand Logo');exit(0);}
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
	$sel = mysqli_query($conn,"select * from tbl_blog where id = '$id' ");
	$row = mysqli_fetch_assoc($sel);
	$Un_OrginalImage1 	= $row['image'];	
	$Un_Image1 			= $row['thumb'];	
	/*--------------insert record varible record------------*/
	$InsertImage1 				= $row['image'];	
	$InsertImagethumb1 			= $row['thumb'];	

	/*---------------------------*/
	$flagImage1		=0;
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
			 $setheight=667;
			 $ratio=0.0;
			 /*
			 if($width>$setwidth){
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
			 

			 $InsertImage1=$no.$imagefleimagename1;

			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$InsertImage1);
			
			
			// $tmp=imagecreatetruecolor($newwidth,$newheight);
			// imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			// $InsertImagethumb1 = $tno.$imagefleimagename1;
			// $imagefleimagename = "$ImageThumbPath/". $InsertImagethumb1;
				
			// imagejpeg($tmp,$imagefleimagename,100);
			// imagedestroy($src);
			// imagedestroy($tmp);
			

	//////---------------End Upload Brand Image------------////////////
	}	
	//================================ Image 1 End==============================


	/*----------------------------------------------*/
	$sqladd = mysqli_query($conn,"update tbl_blog set 
	name ='$name',
	url ='$url',
	description ='$description',
	image='$InsertImage1' ,	
	thumb='$InsertImagethumb1'
	where id = '$id'") or die(mysqli_error($conn));
 	if(mysqli_affected_rows($conn) > 0)
	{
		if($flagImage1==1){
			if($Un_OrginalImage1!=""){
				unlink($ImagePath.$Un_OrginalImage1);
				unlink($ImageThumbPath.$Un_Image1);
			}
		}
		
		header('Location: ../blog-list.php?m=4');
		//echo "success";
	}
	else
	{
		header('Location: ../blog-list.php?m=5');
	}
} 
function deleteBlog($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	
	//------------------------------------------------------------------------------------
	$checkSql=mysqli_query($conn,"select * from  tbl_blog where id ='$id'")or die(mysqli_error($conn));
	if(mysqli_num_rows($checkSql)>0)
	{
		$rowi=mysqli_fetch_assoc($checkSql);
		$image1=$rowi['image'];
		$thumb1=$rowi['thumb'];

		//header('Location: ../product-list.php?&m=15');
		//exit();
	}
	//echo "value is ".$id;
	global $blogPath;	
	global $blogPathThumb;	
	$ImagePath = "$blogPath/";
	$ImageThumbPath = "$blogPathThumb/";
	
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from  tbl_blog where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
			if($image1!=""){
				unlink($ImagePath.$image1);
				unlink($ImageThumbPath.$thumb1);
			}
		mysql_query("COMMIT");	
		header('Location: ../blog-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../blog-list.php?m=7');
	}
	//---------------------------------------------------------------------------------------------------
}

//===================================  Speed test function start   Add Course ====================================
/*--------product-----------------------------------------------*/
function addCourse($conn)
{  	
	$coursename		= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$url	= strtolower(str_replace(" ","-",$coursename));
	$url	= strtolower(str_replace("&","and",$url));
	$sql="insert into  tbl_course(name,url) values('$coursename','$url')";
	if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
	{
		header('Location: ../course-list.php?m=1');
		//echo "success";
	}
	else
	{
		header('Location: ../course-list.php?m=0');
		//echo "fail";
	}
} 	
function editCourse($conn)
{

	$id				= $_POST['txtid']; 
	$coursename		= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$url	= strtolower(str_replace(" ","-",$coursename));
	$url	= strtolower(str_replace("&","and",$url));
	$sqladd = mysqli_query($conn,"update tbl_course set 
	name='$coursename',
	url='$url' where id = '$id'") or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn) > 0)
	{
		// echo "1";
		header('Location: ../course-list.php?m=4');
	}
	else
	{
		// echo "0";
		header('Location: ../course-list.php?m=5');
	}

} 	

function deleteCourse($conn)
{

	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from tbl_course where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
		mysql_query("COMMIT");	
		header('Location: ../course-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../course-list.php?m=7');
	}

}

function addSubject($conn)
{  	
	$course		= mysqli_real_escape_string($conn,$_POST['selcourse']); 
	$subjectname		= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$url	= strtolower(str_replace(" ","-",$subjectname));
	$url	= strtolower(str_replace("&","and",$url));
	$sql="insert into  tbl_subject(name,url,course_id) values('$subjectname','$url','$course')";
	if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
	{
		header('Location: ../subject-list.php?m=1');
		// echo "success";
	}
	else
	{
		header('Location: ../subject-list.php?m=0');
		// echo "fail";
	}
} 	
function editSubject($conn)
{

	$id				= $_POST['txtid']; 
	$course		= mysqli_real_escape_string($conn,$_POST['selcourse']); 
	$subjectname		= mysqli_real_escape_string($conn,$_POST['txtname']); 
	$url	= strtolower(str_replace(" ","-",$subjectname));
	$url	= strtolower(str_replace("&","and",$url));
	$sqladd = mysqli_query($conn,"update tbl_subject set 
	name='$subjectname',
	course_id='$course',
	url='$url' where id = '$id'") or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn) > 0)
	{
		// echo "1";
		header('Location: ../subject-list.php?m=4');
	}
	else
	{
		// echo "0";
		header('Location: ../subject-list.php?m=5');
	}

} 	

function deleteSubject($conn)
{

	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from tbl_subject where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
		mysql_query("COMMIT");	
		header('Location: ../subject-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../subject-list.php?m=7');
	}

}
function addQuestionPaper($conn)
{  
	
	$question	 			= 	mysqli_real_escape_string($conn,$_POST['txtquestion']); 	
	$url					= 	strtolower(str_replace(" ","-",$question));
	$url					= 	strtolower(str_replace("&","and",$url));

	$course		 			= 	mysqli_real_escape_string($conn,$_POST['selcourse']); 	
	$subject		 		= 	mysqli_real_escape_string($conn,$_POST['selsubject']); 	
	$totalquestion		 	= 	mysqli_real_escape_string($conn,$_POST['txttotalquestion']); 	
	$marks 			 		= 	mysqli_real_escape_string($conn,$_POST['txtmarks']); 	
	$time				 	= 	mysqli_real_escape_string($conn,$_POST['txttime']); 	
	$specialtext			= 	mysqli_real_escape_string($conn,$_POST['txtspecialtext']); 
	
	$date =date("Y-m-d");
	
	/*-------------------------Image info-----------------------------*/
	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../question.php?m=2&n=Rooms Image');exit(0);}
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


	global $questionPath;	
	global $productPathThumb;	
	$ImagePath = "$questionPath/";
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
			if (($extension != "jpg") && ($extension != "jpeg") ) {
					header('Location: ../question-paper.php?m=3');
					exit();
			}
			// if($extension=="jpg" || $extension=="jpeg" ){
			// 	$uploadedfile = $imagefleimagename1_tmp;
			// 	$src = imagecreatefromjpeg($uploadedfile);
			// }else if($extension=="png"){
			// 	$uploadedfile = $imagefleimagename1_tmp;
			// 	$src = imagecreatefrompng($uploadedfile);
			// }else {
			// 	$src = imagecreatefromgif($uploadedfile);
			// }
			// list($width,$height)=getimagesize($uploadedfile);
			//  $setheight=400;
			//  $ratio=0.0;
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
			
			/*
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			 $imageThumbName = $tno.$imagefleimagename1;
			 $imagefleimagename = "$ImageThumbPath/". $imageThumbName;
				
			 imagejpeg($tmp,$imagefleimagename,100);
			 imagedestroy($src);
			 imagedestroy($tmp);
			*/
			

	//////---------------End Upload Brand Image------------////////////
	}else{
	 $newfile1="";
	 // $imageThumbName="";
	}	

	$sql="insert into tbl_question_paper(course_id,
	subject_id,name,url,total_question,marks_per_question,image,special_text,time,date) 
	values('$course','$subject','$question','$url','$totalquestion','$marks','$newfile1','$specialtext','$time','$date')";
 				
			if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
			{
				header('Location: ../question-paper-list.php?m=1');
				// echo "suucess";
				
			}
			else
			{
								//echo "fail";
				header('Location: ../question-paper-list.php?m=0');
				
			}


} 	
function editQuestionPaper($conn)
{ 
	$id 					= $_POST['txtid']; 
	
	$question	 			= 	mysqli_real_escape_string($conn,$_POST['txtquestion']); 	
	$url					= 	strtolower(str_replace(" ","-",$question));
	$url					= 	strtolower(str_replace("&","and",$url));

	$course		 			= 	mysqli_real_escape_string($conn,$_POST['selcourse']); 	
	$subject		 		= 	mysqli_real_escape_string($conn,$_POST['selsubject']); 	
	$totalquestion		 	= 	mysqli_real_escape_string($conn,$_POST['txttotalquestion']); 	
	$marks 			 		= 	mysqli_real_escape_string($conn,$_POST['txtmarks']); 	
	$time				 	= 	mysqli_real_escape_string($conn,$_POST['txttime']); 	
	$specialtext			= 	mysqli_real_escape_string($conn,$_POST['txtspecialtext']);	
	
	/*-------------------------Image info-----------------------------*/
	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../question-paper-list.php?m=2&n=Brand Logo');exit(0);}
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
	$sel = mysqli_query($conn,"select * from tbl_question_paper where id = '$id' ");
	$row = mysqli_fetch_assoc($sel);
	$Un_OrginalImage1 	= $row['image'];	
	
	/*--------------insert record varible record------------*/
	$InsertImage1 				= $row['image'];	
	$InsertImagethumb1 			= "";	

	/*---------------------------*/
	$flagImage1		=0;
	// ------------- get all images  name  -------------------------	
			$no = rand(1,999);
			$tno = rand(1,999);	
	///////--------------Upload Logo Image-----------------////////////


	global $questionPath;	
	global $productPathThumb;	
	$ImagePath = "$questionPath/";
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
					header('Location: ../question-paper.php?m=3');
					exit();
			}
			
			 $InsertImage1=$no.$imagefleimagename1;

			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$InsertImage1);
			
			
			// $tmp=imagecreatetruecolor($newwidth,$newheight);
			// imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			// $InsertImagethumb1 = $tno.$imagefleimagename1;
			// $imagefleimagename = "$ImageThumbPath/". $InsertImagethumb1;
				
			// imagejpeg($tmp,$imagefleimagename,100);
			// imagedestroy($src);
			// imagedestroy($tmp);
	//////---------------End Upload Brand Image------------////////////
	}	
	//================================ Image 1 End==============================


	/*----------------------------------------------*/
	$sqladd = mysqli_query($conn,"update tbl_question_paper set 
	course_id ='$course',
	subject_id ='$subject',
	name ='$question',
	url ='$url',
	total_question ='$totalquestion',
	marks_per_question ='$marks',
	image ='$InsertImage1',
	special_text ='$specialtext',
	time='$time'  where id = '$id'") or die(mysqli_error($conn));
 	if(mysqli_affected_rows($conn) > 0)
	{
		if($flagImage1==1){
			if($Un_OrginalImage1!=""){
				unlink($ImagePath.$Un_OrginalImage1);
				// unlink($ImageThumbPath.$Un_Image1);
			}
		}
		header('Location: ../question-paper-list.php?m=4');
		// echo "success";
	}
	else
	{
		header('Location: ../question-paper-list.php?m=5');
		// echo "Fails";
	}
} 
function deleteQuestionPaper($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	
	//-------------------------------------------------------------------------------------------------
	$checkSql=mysqli_query($conn,"select * from  tbl_question_paper where id ='$id'")or die(mysqli_error($conn));
	if(mysqli_num_rows($checkSql)>0)
	{
		$rowi=mysqli_fetch_assoc($checkSql);
		$image1=$rowi['image'];
		// $thumb1=$rowi['thumb'];

		//header('Location: ../product-list.php?&m=15');
		//exit();
	}
	//echo "value is ".$id;
	global $questionPath;	
	global $productPathThumb;	
	$ImagePath = "$productPath/";
	// $ImageThumbPath = "$productPathThumb/";
	
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from  tbl_question_paper where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
			if($image1!=""){
				unlink($ImagePath.$image1);
				// unlink($ImageThumbPath.$thumb1);
			}
		mysql_query("COMMIT");	
		header('Location: ../question-paper-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../question-paper-list.php?m=7');
	}
	//-------------------------------------------------------------------------------------
}
// ======================
function addQuestion($conn) 
{  

	$qid			= 	mysqli_real_escape_string($conn,$_POST['txtqid']); 	
	$papertype		= 	mysqli_real_escape_string($conn,$_POST['txtpapertype']); 
	$question		= 	mysqli_real_escape_string($conn,$_POST['txtquestion']); 	
	$option1		= 	mysqli_real_escape_string($conn,$_POST['txtoption1']); 	
	$option2		= 	mysqli_real_escape_string($conn,$_POST['txtoption2']); 	
	$option3		= 	mysqli_real_escape_string($conn,$_POST['txtoption3']); 	
	$option4		= 	mysqli_real_escape_string($conn,$_POST['txtoption4']); 	
	$rightanswer	= 	mysqli_real_escape_string($conn,$_POST['selrightanswer']); 	
	


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


	global $questionPath;	
	global $productPathThumb;	
	$ImagePath = "$questionPath/";
	$ImageThumbPath = "$productPathThumb/";
	//================================ Image 1 ==============================	

	if(	$imagefleimagename1!=""){
		//check if image has 2 dot then exit program
		$image = $imagefleimagename1;
		$uploadedfile = $imagefleimagename1;
		$imagefleimagename1 = stripslashes($imagefleimagename1);
		$extension = getExtension($imagefleimagename1);
		$extension = strtolower($extension);
		/*-------------------------------*/
		/*---------------------------------*/
		if (($extension != "jpg") && ($extension != "jpeg") ) {
				header('Location: ../question.php?m=16&qid='.$qid);
				exit();
		}
		
		$newfile1=$no.$imagefleimagename1;
		move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$newfile1);
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
				if (($extension != "jpg") && ($extension != "jpeg") ) {
						header('Location: ../question.php?m=16&qid='.$qid);
						exit();
				}
				$newfile2=$no.$imagefleimagename2;
				move_uploaded_file($_FILES["image2fleimage"]['tmp_name'], "$ImagePath".$newfile2);
				//////---------------End Upload Brand Image------------////////////
	}else{
		$newfile2="";
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
		if (($extension != "jpg") && ($extension != "jpeg")  ) {
				header('Location: ../question.php?m=16&qid='.$qid);
				exit();
		}
		
		$newfile3=$no.$imagefleimagename3;
		move_uploaded_file($_FILES["image3fleimage"]['tmp_name'], "$ImagePath".$newfile3);
		//////---------------End Upload Brand Image------------////////////
	}else{
	 	$newfile3="";
	 	$imageThumbName3="";
	}	
	//================================ Image 1 End==============================
	//================================ Image 4 ==============================	
	if(	$imagefleimagename4!=""){
		$image = $imagefleimagename4;
		$uploadedfile = $imagefleimagename4;
		$imagefleimagename4 = stripslashes($imagefleimagename4);
		$extension = getExtension($imagefleimagename4);
		$extension = strtolower($extension);
		/*-------------------------------*/
		/*---------------------------------*/
		if (($extension != "jpg") && ($extension != "jpeg")  ) {
				header('Location: ../question.php?m=16&qid='.$qid);
				exit();
		}
		$newfile4=$no.$imagefleimagename4;
		move_uploaded_file($_FILES["image4fleimage"]['tmp_name'], "$ImagePath".$newfile4);		
		//////---------------End Upload Brand Image------------////////////
	}else{
		$newfile4="";
	 	$imageThumbName4="";
	}	
	//================================ Image 4 End==============================
	//================================ Image 5 ==============================	
	if(	$imagefleimagename5!=""){
		$image = $imagefleimagename5;
		$uploadedfile = $imagefleimagename5;
		$imagefleimagename5 = stripslashes($imagefleimagename5);
		$extension = getExtension($imagefleimagename5);
		$extension = strtolower($extension);
		/*-------------------------------*/
		/*---------------------------------*/
		if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") ) {
				header('Location: ../question.php?m=3&qid='.$qid);
				exit();
		}
		$newfile5=$no.$imagefleimagename5;
		move_uploaded_file($_FILES["image5fleimage"]['tmp_name'], "$ImagePath".$newfile5);
	}else{
	 $newfile5="";
	 $imageThumbName5="";
	}	
	//================================ Image 5 End==============================


	$sql="insert into tbl_question_list(
	question_paper_id,paper_type,
	question,option1,option2,option3,option4,right_answer,
	question_image,option1_image,option2_image,option3_image,option4_image)
	 values(
	 '$qid',
	 '$papertype',
	 '$question',
	 '$option1',
	 '$option2',
	 '$option3',
	 '$option4',
	 '$rightanswer',
	 '$newfile1',
	 '$newfile2',
	 '$newfile3',
	 '$newfile4',
	 '$newfile5')";
	 				
	if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
	{
		header('Location: ../question.php?m=1&qid='.$qid."&type=".$papertype);
		// echo "suucess";
	}
	else
	{
		// echo "fail";
		header('Location: ../question.php?m=0&qid='.$qid);
	}
} 	

/*---------------------------edit product-----------------------------------*/
function editQuestion($conn)
{ 
	$id 					= $_POST['txtid']; 
	$qid			= 	mysqli_real_escape_string($conn,$_POST['txtqid']); 	
	$papertype		= 	mysqli_real_escape_string($conn,$_POST['txtpapertype']); 	
	$question		= 	mysqli_real_escape_string($conn,$_POST['txtquestion']); 	
	$option1		= 	mysqli_real_escape_string($conn,$_POST['txtoption1']); 	
	$option2		= 	mysqli_real_escape_string($conn,$_POST['txtoption2']); 	
	$option3		= 	mysqli_real_escape_string($conn,$_POST['txtoption3']); 	
	$option4		= 	mysqli_real_escape_string($conn,$_POST['txtoption4']); 	
	$rightanswer	= 	mysqli_real_escape_string($conn,$_POST['selrightanswer']); 	
	
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
	$sel = mysqli_query($conn,"select * from tbl_question_list where id = '$id' ");
	$row = mysqli_fetch_assoc($sel);
	$Un_OrginalImage1 	= $row['question_image'];	
	$Un_OrginalImage2 	= $row['option1_image'];	
	$Un_OrginalImage3 	= $row['option2_image'];	
	$Un_OrginalImage4 	= $row['option3_image'];	
	$Un_OrginalImage5 	= $row['option4_image'];	
		



	/*--------------insert record varible record------------*/
	$InsertImage1 				= $row['question_image'];	
	$InsertImage2 				= $row['option1_image'];	
	$InsertImage3 				= $row['option2_image'];	
	$InsertImage4 				= $row['option3_image'];	
	$InsertImage5 				= $row['option4_image'];	



	/*---------------------------*/
	$flagImage1		=0;
	$flagImage2		=0;
	$flagImage3		=0;
	$flagImage4 	=0;
	$flagImage5		=0;

	// ------------- get all images  name  -------------------------	
	$no = rand(1,999);
	$tno = rand(1,999);	
	///////--------------Upload Logo Image-----------------////////////


		global $questionPath;	
		$ImagePath = "$questionPath/";
		
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
		if (($extension != "jpg") && ($extension != "jpeg")) {
				header('Location: ../question.php?m=16&id='.$id.'qid='.$qid.'&id='.$id);
				exit();
		}
		$InsertImage1=$no.$imagefleimagename1;
		move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$InsertImage1);
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
		if (($extension != "jpg") && ($extension != "jpeg")) {
				header('Location: ../question.php?m=16&id='.$id.'&qid='.$qid.'&id='.$id);
				exit();
		}
		$InsertImage2=$no.$imagefleimagename2;
		move_uploaded_file($_FILES["image2fleimage"]['tmp_name'], "$ImagePath".$InsertImage2);
		//////---------------End Upload Brand Image------------////////////
	}	
	//================================ Image 1 End==============================
	//================================ Image 3 ==============================	
	if(	$imagefleimagename3!="")
	{
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
		if (($extension != "jpg") && ($extension != "jpeg") ) {
				header('Location: ../question.php?m=16&id='.$id.'&qid='.$qid.'&id='.$id);
				exit();
		}
		$InsertImage3=$no.$imagefleimagename3;
		move_uploaded_file($_FILES["image3fleimage"]['tmp_name'], "$ImagePath".$InsertImage3);
		//////---------------End Upload Brand Image------------////////////
	}	
	//================================ Image 1 End==============================
	//================================ Image 4 ==============================	
	if(	$imagefleimagename4!="")
	{
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
		if (($extension != "jpg") && ($extension != "jpeg")  ) {
				header('Location: ../question.php?m=16&id='.$id.'&qid='.$qid.'&id='.$id);
				exit();
		}
		$InsertImage4=$no.$imagefleimagename4;
		move_uploaded_file($_FILES["image4fleimage"]['tmp_name'], "$ImagePath".$InsertImage4);	
		//////---------------End Upload Brand Image------------////////////
	}	
	//================================ Image 4 End==============================
	//================================ Image 5 ==============================	
	if(	$imagefleimagename5!=""){
		$flagImage5		=1;
		//check if image has 2 dot then exit program
		//$catfile = $imagefleimagename5;
		$image = $imagefleimagename5;
		$uploadedfile = $imagefleimagename5;
		$imagefleimagename5 = stripslashes($imagefleimagename5);
		$extension = getExtension($imagefleimagename5);
		$extension = strtolower($extension);
		/*-------------------------------*/
		/*---------------------------------*/
		if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") ) {
				header('Location: ../question.php?m=16&id='.$id.'&qid='.$qid.'&id='.$id);
				exit();
		}
		$InsertImage5=$no.$imagefleimagename5;
		move_uploaded_file($_FILES["image5fleimage"]['tmp_name'], "$ImagePath".$InsertImage5);
		//////---------------End Upload Brand Image------------////////////
	}	


		
	//================================ Image 5 End===========================

	/*----------------------------------------------*/

	$sqladd = mysqli_query($conn,"update tbl_question_list set 
	question_paper_id='$qid',
	paper_type='$papertype',
	question='$question',
	option1='$option1',
	option2='$option2',
	option3='$option3',
	option4='$option4',
	right_answer='$rightanswer',
	question_image = '$InsertImage1' ,	
	option1_image = '$InsertImage2' ,	
	option2_image = '$InsertImage3' ,	
	option3_image = '$InsertImage4' ,	
	option4_image = '$InsertImage5'	
	where id = '$id'") or die(mysqli_error($conn));
	 if(mysqli_affected_rows($conn) > 0)
		{
			if($flagImage1==1){
				if($Un_OrginalImage1!=""){
					unlink($ImagePath.$Un_OrginalImage1);
				}
			}
			
			if($flagImage2==1){
				if($Un_OrginalImage2!=""){
					unlink($ImagePath.$Un_OrginalImage2);
				}
			}
			
			if($flagImage3==1){
				if($Un_OrginalImage3!=""){
					unlink($ImagePath.$Un_OrginalImage3);
				}
			}
			
			if($flagImage4==1){
				if($Un_OrginalImage4!=""){
					unlink($ImagePath.$Un_OrginalImage4);
				}
			}
			if($flagImage5==1){
				if($Un_OrginalImage5!=""){
					unlink($ImagePath.$Un_OrginalImage5);
				}
			}
			header('Location: ../question.php?m=4&qid='.$qid.'&id='.$id);
			//echo "success";
		}
		else
		{
			header('Location: ../question.php?m=5&qid='.$qid.'&id='.$id);
		}
} 
function deleteQuestion($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	$qid =isset($_GET['qid'])? $_GET['qid'] : "";
	
	$checkSql=mysqli_query($conn,"select * from  tbl_question_list where id ='$id'")or die(mysqli_error($conn));
	if(mysqli_num_rows($checkSql)>0)
	{
		$rowi=mysqli_fetch_assoc($checkSql);
		$image1=$rowi['question_image'];
		$image2=$rowi['option1_image'];
		$image3=$rowi['option2_image'];
		$image4=$rowi['option3_image'];
		$image5=$rowi['option4_image'];
		

		//header('Location: ../product-list.php?&m=15');
		//exit();
	}
	//echo "value is ".$id;
	global $questionPath;	
		
	$ImagePath = "$questionPath/";
	
	
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from  tbl_question_list where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
			if($image1!=""){
				unlink($ImagePath.$image1);
				
			}
			if($image2!=""){
				unlink($ImagePath.$image2);
				
			}
			if($image3!=""){
				unlink($ImagePath.$image3);
				
			}
			if($image4!=""){
				unlink($ImagePath.$image4);
				
			}
			if($image5!=""){
				unlink($ImagePath.$image4);
				
			}
		mysql_query("COMMIT");	
		header('Location: ../question-list.php?&m=6&qid='.$qid);
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../question-list.php?m=7&qid='.$qid);
	}

}
// =================== add raw question ====================
// ======================
function addRawQuestion($conn) 
{  

	$cid			= 	mysqli_real_escape_string($conn,$_POST['txtcid']); 	
	$sid			= 	mysqli_real_escape_string($conn,$_POST['txtsid']); 	
	$question		= 	mysqli_real_escape_string($conn,$_POST['txtquestion']); 	
	$option1		= 	mysqli_real_escape_string($conn,$_POST['txtoption1']); 	
	$option2		= 	mysqli_real_escape_string($conn,$_POST['txtoption2']); 	
	$option3		= 	mysqli_real_escape_string($conn,$_POST['txtoption3']); 	
	$option4		= 	mysqli_real_escape_string($conn,$_POST['txtoption4']); 	
	$rightanswer	= 	mysqli_real_escape_string($conn,$_POST['selrightanswer']); 	
	


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


	global $questionPath;	
	global $productPathThumb;	
	$ImagePath = "$questionPath/";
	$ImageThumbPath = "$productPathThumb/";
	//================================ Image 1 ==============================	

	if(	$imagefleimagename1!=""){
		//check if image has 2 dot then exit program
		$image = $imagefleimagename1;
		$uploadedfile = $imagefleimagename1;
		$imagefleimagename1 = stripslashes($imagefleimagename1);
		$extension = getExtension($imagefleimagename1);
		$extension = strtolower($extension);
		/*-------------------------------*/
		/*---------------------------------*/
		if (($extension != "jpg") && ($extension != "jpeg") ) {
				header('Location: ../raw-question.php?m=3&cid='.$cid.'&sid='.$sid);
				exit();
		}
		
		$newfile1=$no.$imagefleimagename1;
		move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$newfile1);
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
				if (($extension != "jpg") && ($extension != "jpeg") ) {
						header('Location: ../raw-question.php?m=3&cid='.$cid.'&sid='.$sid);
						exit();
				}
				$newfile2=$no.$imagefleimagename2;
				move_uploaded_file($_FILES["image2fleimage"]['tmp_name'], "$ImagePath".$newfile2);
				//////---------------End Upload Brand Image------------////////////
	}else{
		$newfile2="";
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
		if (($extension != "jpg") && ($extension != "jpeg")  ) {
				header('Location: ../raw-question.php?m=3&cid='.$cid.'&sid='.$sid);
				exit();
		}
		
		$newfile3=$no.$imagefleimagename3;
		move_uploaded_file($_FILES["image3fleimage"]['tmp_name'], "$ImagePath".$newfile3);
		//////---------------End Upload Brand Image------------////////////
	}else{
	 	$newfile3="";
	 	$imageThumbName3="";
	}	
	//================================ Image 1 End==============================
	//================================ Image 4 ==============================	
	if(	$imagefleimagename4!=""){
		$image = $imagefleimagename4;
		$uploadedfile = $imagefleimagename4;
		$imagefleimagename4 = stripslashes($imagefleimagename4);
		$extension = getExtension($imagefleimagename4);
		$extension = strtolower($extension);
		/*-------------------------------*/
		/*---------------------------------*/
		if (($extension != "jpg") && ($extension != "jpeg")  ) {
				header('Location: ../raw-question.php?m=3&cid='.$cid.'&sid='.$sid);
				exit();
		}
		$newfile4=$no.$imagefleimagename4;
		move_uploaded_file($_FILES["image4fleimage"]['tmp_name'], "$ImagePath".$newfile4);		
		//////---------------End Upload Brand Image------------////////////
	}else{
		$newfile4="";
	 	$imageThumbName4="";
	}	
	//================================ Image 4 End==============================
	//================================ Image 5 ==============================	
	if(	$imagefleimagename5!=""){
		$image = $imagefleimagename5;
		$uploadedfile = $imagefleimagename5;
		$imagefleimagename5 = stripslashes($imagefleimagename5);
		$extension = getExtension($imagefleimagename5);
		$extension = strtolower($extension);
		/*-------------------------------*/
		/*---------------------------------*/
		if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") ) {
				header('Location: ../raw-question.php?m=3&cid='.$cid.'&sid='.$sid);
				exit();
		}
		$newfile5=$no.$imagefleimagename5;
		move_uploaded_file($_FILES["image5fleimage"]['tmp_name'], "$ImagePath".$newfile5);
	}else{
	 $newfile5="";
	 $imageThumbName5="";
	}	
	//================================ Image 5 End==============================


	$sql="insert into tbl_raw_question(
	course_id,subject_id,
	question,option1,option2,option3,option4,right_answer,
	question_image,option1_image,option2_image,option3_image,option4_image)
	 values(
	 '$cid',
	 '$sid',
	 '$question',
	 '$option1',
	 '$option2',
	 '$option3',
	 '$option4',
	 '$rightanswer',
	 '$newfile1',
	 '$newfile2',
	 '$newfile3',
	 '$newfile4',
	 '$newfile5')";
	 				
	if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
	{
		header('Location: ../raw-question.php?m=1&cid='.$cid.'&sid='.$sid);
		// echo "suucess";
	}
	else
	{
		// echo "fail";
		header('Location: ../raw-question.php?m=0&cid='.$cid.'&sid='.$sid);
	}
} 	

/*---------------------------edit product-----------------------------------*/
function editRawQuestion($conn)
{ 
	$id 					= $_POST['txtid']; 
	$cid			= 	mysqli_real_escape_string($conn,$_POST['txtcid']); 	
	$sid			= 	mysqli_real_escape_string($conn,$_POST['txtsid']); 	
	$question		= 	mysqli_real_escape_string($conn,$_POST['txtquestion']); 	
	$option1		= 	mysqli_real_escape_string($conn,$_POST['txtoption1']); 	
	$option2		= 	mysqli_real_escape_string($conn,$_POST['txtoption2']); 	
	$option3		= 	mysqli_real_escape_string($conn,$_POST['txtoption3']); 	
	$option4		= 	mysqli_real_escape_string($conn,$_POST['txtoption4']); 	
	$rightanswer	= 	mysqli_real_escape_string($conn,$_POST['selrightanswer']); 	
	// header('Location: ../raw-question.php?m=3&cid='.$cid.'&sid='.$sid);
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
	$sel = mysqli_query($conn,"select * from tbl_raw_question where id = '$id' ");
	$row = mysqli_fetch_assoc($sel);
	$Un_OrginalImage1 	= $row['question_image'];	
	$Un_OrginalImage2 	= $row['option1_image'];	
	$Un_OrginalImage3 	= $row['option2_image'];	
	$Un_OrginalImage4 	= $row['option3_image'];	
	$Un_OrginalImage5 	= $row['option4_image'];	
		



	/*--------------insert record varible record------------*/
	$InsertImage1 				= $row['question_image'];	
	$InsertImage2 				= $row['option1_image'];	
	$InsertImage3 				= $row['option2_image'];	
	$InsertImage4 				= $row['option3_image'];	
	$InsertImage5 				= $row['option4_image'];	



	/*---------------------------*/
	$flagImage1		=0;
	$flagImage2		=0;
	$flagImage3		=0;
	$flagImage4 	=0;
	$flagImage5		=0;

	// ------------- get all images  name  -------------------------	
	$no = rand(1,999);
	$tno = rand(1,999);	
	///////--------------Upload Logo Image-----------------////////////


		global $questionPath;	
		$ImagePath = "$questionPath/";
		
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
		if (($extension != "jpg") && ($extension != "jpeg")) {
				header('Location: ../raw-question.php?m=16&id='.$id.'&cid='.$cid.'&sid='.$sid);
				exit();
		}
		$InsertImage1=$no.$imagefleimagename1;
		move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$InsertImage1);
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
		if (($extension != "jpg") && ($extension != "jpeg")) {
				header('Location: ../raw-question.php?m=16&id='.$id.'&cid='.$cid.'&sid='.$sid);
				exit();
		}
		$InsertImage2=$no.$imagefleimagename2;
		move_uploaded_file($_FILES["image2fleimage"]['tmp_name'], "$ImagePath".$InsertImage2);
		//////---------------End Upload Brand Image------------////////////
	}	
	//================================ Image 1 End==============================
	//================================ Image 3 ==============================	
	if(	$imagefleimagename3!="")
	{
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
		if (($extension != "jpg") && ($extension != "jpeg") ) {
				header('Location: ../raw-question.php?m=16&id='.$id.'&cid='.$cid.'&sid='.$sid);
				exit();
		}
		$InsertImage3=$no.$imagefleimagename3;
		move_uploaded_file($_FILES["image3fleimage"]['tmp_name'], "$ImagePath".$InsertImage3);
		//////---------------End Upload Brand Image------------////////////
	}	
	//================================ Image 1 End==============================
	//================================ Image 4 ==============================	
	if(	$imagefleimagename4!="")
	{
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
		if (($extension != "jpg") && ($extension != "jpeg")  ) {
				header('Location: ../raw-question.php?m=16&id='.$id.'&cid='.$cid.'&sid='.$sid);
				exit();
		}
		$InsertImage4=$no.$imagefleimagename4;
		move_uploaded_file($_FILES["image4fleimage"]['tmp_name'], "$ImagePath".$InsertImage4);	
		//////---------------End Upload Brand Image------------////////////
	}	
	//================================ Image 4 End==============================
	//================================ Image 5 ==============================	
	if(	$imagefleimagename5!=""){
		$flagImage5		=1;
		//check if image has 2 dot then exit program
		//$catfile = $imagefleimagename5;
		$image = $imagefleimagename5;
		$uploadedfile = $imagefleimagename5;
		$imagefleimagename5 = stripslashes($imagefleimagename5);
		$extension = getExtension($imagefleimagename5);
		$extension = strtolower($extension);
		/*-------------------------------*/
		/*---------------------------------*/
		if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") ) {
				header('Location: ../raw-question.php?m=16&id='.$id.'&cid='.$cid.'&sid='.$sid);
				exit();
		}
		$InsertImage5=$no.$imagefleimagename5;
		move_uploaded_file($_FILES["image5fleimage"]['tmp_name'], "$ImagePath".$InsertImage5);
		//////---------------End Upload Brand Image------------////////////
	}	


		
	//================================ Image 5 End===========================

	/*----------------------------------------------*/

	$sqladd = mysqli_query($conn,"update tbl_raw_question set 
	course_id='$cid',
	subject_id='$sid',
	question='$question',
	option1='$option1',
	option2='$option2',
	option3='$option3',
	option4='$option4',
	right_answer='$rightanswer',
	question_image = '$InsertImage1' ,	
	option1_image = '$InsertImage2' ,	
	option2_image = '$InsertImage3' ,	
	option3_image = '$InsertImage4' ,	
	option4_image = '$InsertImage5'	
	where id = '$id'") or die(mysqli_error($conn));
	 if(mysqli_affected_rows($conn) > 0)
		{
			if($flagImage1==1){
				if($Un_OrginalImage1!=""){
					unlink($ImagePath.$Un_OrginalImage1);
				}
			}
			
			if($flagImage2==1){
				if($Un_OrginalImage2!=""){
					unlink($ImagePath.$Un_OrginalImage2);
				}
			}
			
			if($flagImage3==1){
				if($Un_OrginalImage3!=""){
					unlink($ImagePath.$Un_OrginalImage3);
				}
			}
			
			if($flagImage4==1){
				if($Un_OrginalImage4!=""){
					unlink($ImagePath.$Un_OrginalImage4);
				}
			}
			if($flagImage5==1){
				if($Un_OrginalImage5!=""){
					unlink($ImagePath.$Un_OrginalImage5);
				}
			}
			header('Location: ../raw-question.php?m=4&cid='.$cid.'&id='.$id.'&sid='.$sid);
			//echo "success";
		}
		else
		{
			header('Location: ../raw-question.php?m=5&cid='.$cid.'&id='.$id.'&sid='.$sid);
		}
} 
function deleteRawQuestion($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	$qid =isset($_GET['qid'])? $_GET['qid'] : "";
	
	$checkSql=mysqli_query($conn,"select * from  tbl_question_list where id ='$id'")or die(mysqli_error($conn));
	if(mysqli_num_rows($checkSql)>0)
	{
		$rowi=mysqli_fetch_assoc($checkSql);
		$image1=$rowi['question_image'];
		$image2=$rowi['option1_image'];
		$image3=$rowi['option2_image'];
		$image4=$rowi['option3_image'];
		$image5=$rowi['option4_image'];
		

		//header('Location: ../product-list.php?&m=15');
		//exit();
	}
	//echo "value is ".$id;
	global $questionPath;	
		
	$ImagePath = "$questionPath/";
	
	
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from  tbl_question_list where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
			if($image1!=""){
				unlink($ImagePath.$image1);
				
			}
			if($image2!=""){
				unlink($ImagePath.$image2);
				
			}
			if($image3!=""){
				unlink($ImagePath.$image3);
				
			}
			if($image4!=""){
				unlink($ImagePath.$image4);
				
			}
			if($image5!=""){
				unlink($ImagePath.$image4);
				
			}
		mysql_query("COMMIT");	
		header('Location: ../question-list.php?&m=6&qid='.$qid);
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../question-list.php?m=7&qid='.$qid);
	}
}

// ========================================
function addNews($conn)
{  
	
	$name	 				= 	mysqli_real_escape_string($conn,$_POST['txtname']); 	
	// $url					= 	strtolower(str_replace(" ","-",$question));
	// $url					= 	strtolower(str_replace("&","and",$url));
	$date		 			= 	mysqli_real_escape_string($conn,$_POST['txtdate']); 	
	$description		 		= 	mysqli_real_escape_string($conn,$_POST['txtdescription']); 	
	
	/*-------------------------Image info-----------------------------*/
	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../question.php?m=2&n=Rooms Image');exit(0);}
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


	global $questionPath;	
	global $productPathThumb;	
	$ImagePath = "$questionPath/";
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
			if (($extension != "jpg") && ($extension != "jpeg") ) {
					header('Location: ../news.php?m=3');
					exit();
			}
			
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
			
			
			

	//////---------------End Upload Brand Image------------////////////
	}else{
	 $newfile1="";
	 // $imageThumbName="";
	}	

	$sql="insert into tbl_news(name,
	date,description,image) values('$name','$date','$description','$newfile1')";
 				
			if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
			{
				header('Location: ../news-list.php?m=1');
				// echo "suucess";
				
			}
			else
			{
								//echo "fail";
				header('Location: ../news-list.php?m=0');
				
			}
} 	
function editNews($conn)
{ 
	$id 					= $_POST['txtid']; 
	
	$name	 				= 	mysqli_real_escape_string($conn,$_POST['txtname']); 	
	// $url					= 	strtolower(str_replace(" ","-",$question));
	// $url					= 	strtolower(str_replace("&","and",$url));
	$date		 			= 	mysqli_real_escape_string($conn,$_POST['txtdate']); 	
	$description		 		= 	mysqli_real_escape_string($conn,$_POST['txtdescription']);
	
	/*-------------------------Image info-----------------------------*/
	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../news-list.php?m=2&n=Brand Logo');exit(0);}
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
	$sel = mysqli_query($conn,"select * from tbl_news where id = '$id' ");
	$row = mysqli_fetch_assoc($sel);
	$Un_OrginalImage1 	= $row['image'];	
	
	/*--------------insert record varible record------------*/
	$InsertImage1 				= $row['image'];	
	$InsertImagethumb1 			= "";	

	/*---------------------------*/
	$flagImage1		=0;
	// ------------- get all images  name  -------------------------	
			$no = rand(1,999);
			$tno = rand(1,999);	
	///////--------------Upload Logo Image-----------------////////////


	global $questionPath;	
	global $productPathThumb;	
	$ImagePath = "$questionPath/";
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
					header('Location: ../question-paper.php?m=3');
					exit();
			}
			
			$InsertImage1=$no.$imagefleimagename1;
			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$InsertImage1);
			
			
	//////---------------End Upload Brand Image------------////////////
	}	
	//================================ Image 1 End==============================


	/*----------------------------------------------*/
	$sqladd = mysqli_query($conn,"update tbl_news set 
	name ='$name',
	date ='$date',
	description ='$description',
	image ='$InsertImage1'
	  where id = '$id'") or die(mysqli_error($conn));
 	if(mysqli_affected_rows($conn) > 0)
	{
		if($flagImage1==1){
			if($Un_OrginalImage1!=""){
				unlink($ImagePath.$Un_OrginalImage1);
				// unlink($ImageThumbPath.$Un_Image1);
			}
		}
		header('Location: ../news-list.php?m=4');
		// echo "success";
	}
	else
	{
		header('Location: ../news-list.php?m=5');
		// echo "Fails";
	}
} 
function deleteNews($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	
	//-------------------------------------------------------------------------------------------------
	$checkSql=mysqli_query($conn,"select * from  tbl_news where id ='$id'")or die(mysqli_error($conn));
	if(mysqli_num_rows($checkSql)>0)
	{
		$rowi=mysqli_fetch_assoc($checkSql);
		$image1=$rowi['image'];
		// $thumb1=$rowi['thumb'];

		//header('Location: ../product-list.php?&m=15');
		//exit();
	}
	//echo "value is ".$id;
	global $productPath;	
	global $productPathThumb;	
	$ImagePath = "$productPath/";
	// $ImageThumbPath = "$productPathThumb/";
	
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from  tbl_news where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
			if($image1!=""){
				unlink($ImagePath.$image1);
				// unlink($ImageThumbPath.$thumb1);
			}
		mysql_query("COMMIT");	
		header('Location: ../news-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../news-list.php?m=7');
	}
	//-------------------------------------------------------------------------------------
}
// ================ Test ========================
function addStudent($conn)
{  
	
	//$name	 		= 	mysqli_real_escape_string($conn,$_POST['txtname']); 	
	$course		 	= 	mysqli_real_escape_string($conn,$_POST['selcourse']); 	
	$firstname		= 	mysqli_real_escape_string($conn,$_POST['txtfirstname']); 	
	$lastname		= 	mysqli_real_escape_string($conn,$_POST['txtlastname']); 	
	$dateofjoining	= 	mysqli_real_escape_string($conn,$_POST['txtdateofjoining']); 	
	$dob		 	= 	mysqli_real_escape_string($conn,$_POST['txtdob']); 	
	$fathername		= 	mysqli_real_escape_string($conn,$_POST['txtfathername']); 	
	$phone		 	= 	mysqli_real_escape_string($conn,$_POST['txtphone']); 	
	$email		 	= 	mysqli_real_escape_string($conn,$_POST['txtemail']); 	
	$password		= 	mysqli_real_escape_string($conn,$_POST['txtpassword']); 	
	$password2		= 	mysqli_real_escape_string($conn,md5($_POST['txtpassword'])); 	
	/*-------------------------Image info-----------------------------*/
	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../student.php?m=2&n=Rooms Image');exit(0);}
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


	global $questionPath;	
	global $productPathThumb;	
	$ImagePath = "$questionPath/";
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
			if (($extension != "jpg") && ($extension != "jpeg") ) {
					header('Location: ../news.php?m=3');
					exit();
			}
			
			
			 $newfile1=$no.$imagefleimagename1;

			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$newfile1);
			
			
			

	//////---------------End Upload Brand Image------------////////////
	}else{
	 $newfile1="";
	 // $imageThumbName="";
	}	

	$sql="insert into tbl_student(first_name,last_name,father_name,dob,date_of_joining,course_id,phone,email,password,show_password,image) values('$firstname','$lastname','$fathername','$dob','$dateofjoining','$course','$phone','$email','$password2','$password','$newfile1')";
 				
			if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
			{
				header('Location: ../student-list.php?m=1');
			}
			else
			{
				header('Location: ../student-list.php?m=0');
			}
} 	
function editStudent($conn)
{ 
	$id 					= $_POST['txtid']; 
	
	$name	 		= 	mysqli_real_escape_string($conn,$_POST['txtname']); 	
	$course		 	= 	mysqli_real_escape_string($conn,$_POST['selcourse']); 	
	$firstname		= 	mysqli_real_escape_string($conn,$_POST['txtfirstname']); 	
	$lastname		= 	mysqli_real_escape_string($conn,$_POST['txtlastname']); 	
	$dateofjoining	= 	mysqli_real_escape_string($conn,$_POST['txtdateofjoining']); 	
	$dob		 	= 	mysqli_real_escape_string($conn,$_POST['txtdob']); 	
	$fathername		= 	mysqli_real_escape_string($conn,$_POST['txtfathername']); 	
	$phone		 	= 	mysqli_real_escape_string($conn,$_POST['txtphone']); 	
	$email		 	= 	mysqli_real_escape_string($conn,$_POST['txtemail']); 	
	$password		= 	mysqli_real_escape_string($conn,$_POST['txtpassword']); 	
	$password2		= 	mysqli_real_escape_string($conn,md5($_POST['txtpassword'])); 	
	
	/*-------------------------Image info-----------------------------*/
	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../student-list.php?m=2&n=Brand Logo');exit(0);}
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
	$sel = mysqli_query($conn,"select * from tbl_student where id = '$id' ");
	$row = mysqli_fetch_assoc($sel);
	$Un_OrginalImage1 	= $row['image'];	
	
	/*--------------insert record varible record------------*/
	$InsertImage1 				= $row['image'];	
	$InsertImagethumb1 			= "";	

	/*---------------------------*/
	$flagImage1		=0;
	// ------------- get all images  name  -------------------------	
			$no = rand(1,999);
			$tno = rand(1,999);	
	///////--------------Upload Logo Image-----------------////////////


	global $questionPath;	
	global $productPathThumb;	
	$ImagePath = "$questionPath/";
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
					header('Location: ../question-paper.php?m=3');
					exit();
			}
			
			$InsertImage1=$no.$imagefleimagename1;
			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$InsertImage1);
			
			
	//////---------------End Upload Brand Image------------////////////
	}	
	//================================ Image 1 End==============================


	/*----------------------------------------------*/
	$sqladd = mysqli_query($conn,"update tbl_student set 
	first_name ='$firstname',
	last_name ='$lastname',
	father_name ='$fathername',
	dob ='$dob',
	date_of_joining ='$dateofjoining',
	course_id ='$course',
	phone ='$phone',
	email ='$email',
	password ='$password2',
	show_password ='$password',
	image ='$InsertImage1'
	  where id = '$id'") or die(mysqli_error($conn));
 	if(mysqli_affected_rows($conn) > 0)
	{
		if($flagImage1==1){
			if($Un_OrginalImage1!=""){
				unlink($ImagePath.$Un_OrginalImage1);
				// unlink($ImageThumbPath.$Un_Image1);
			}
		}
		header('Location: ../student-list.php?m=4');
		// echo "success";
	}
	else
	{
		header('Location: ../student-list.php?m=5');
		// echo "Fails";
	}
} 
function deleteStudent($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	
	//-------------------------------------------------------------------------------------------------
	$checkSql=mysqli_query($conn,"select * from  tbl_student where id ='$id'")or die(mysqli_error($conn));
	if(mysqli_num_rows($checkSql)>0)
	{
		$rowi=mysqli_fetch_assoc($checkSql);
		$image1=$rowi['image'];
		// $thumb1=$rowi['thumb'];

		//header('Location: ../product-list.php?&m=15');
		//exit();
	}
	//echo "value is ".$id;
	global $questionPath;	
	global $productPathThumb;	
	$ImagePath = "$productPath/";
	// $ImageThumbPath = "$productPathThumb/";
	
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from  tbl_student where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
			if($image1!=""){
				unlink($ImagePath.$image1);
				// unlink($ImageThumbPath.$thumb1);
			}
		mysql_query("COMMIT");	
		header('Location: ../student-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../student-list.php?m=7');
	}
	//-------------------------------------------------------------------------------------
}

function addPaidQuestionPaper($conn)
{  
	
	$question	 			= 	mysqli_real_escape_string($conn,$_POST['txtquestion']); 	
	$url					= 	strtolower(str_replace(" ","-",$question));
	$url					= 	strtolower(str_replace("&","and",$url));

	$course		 			= 	mysqli_real_escape_string($conn,$_POST['selcourse']); 	
	$subject		 		= 	mysqli_real_escape_string($conn,$_POST['selsubject']); 	
	$totalquestion		 	= 	mysqli_real_escape_string($conn,$_POST['txttotalquestion']); 	
	$marks 			 		= 	mysqli_real_escape_string($conn,$_POST['txtmarks']); 	
	$time				 	= 	mysqli_real_escape_string($conn,$_POST['txttime']); 	
	$specialtext			= 	mysqli_real_escape_string($conn,$_POST['txtspecialtext']); 
	$examstarttime			= 	mysqli_real_escape_string($conn,$_POST['txtexmstarttime']); 
	$examstartdate			= 	mysqli_real_escape_string($conn,$_POST['txtexamstartdate']); 
	
	$date =date("Y-m-d");
	
	/*-------------------------Image info-----------------------------*/
	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../question.php?m=2&n=Rooms Image');exit(0);}
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


	global $questionPath;	
	global $productPathThumb;	
	$ImagePath = "$questionPath/";
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
			if (($extension != "jpg") && ($extension != "jpeg") ) {
					header('Location: ../paid-question-paper.php?m=3');
					exit();
			}
			// if($extension=="jpg" || $extension=="jpeg" ){
			// 	$uploadedfile = $imagefleimagename1_tmp;
			// 	$src = imagecreatefromjpeg($uploadedfile);
			// }else if($extension=="png"){
			// 	$uploadedfile = $imagefleimagename1_tmp;
			// 	$src = imagecreatefrompng($uploadedfile);
			// }else {
			// 	$src = imagecreatefromgif($uploadedfile);
			// }
			// list($width,$height)=getimagesize($uploadedfile);
			//  $setheight=400;
			//  $ratio=0.0;
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
			
			/*
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			 $imageThumbName = $tno.$imagefleimagename1;
			 $imagefleimagename = "$ImageThumbPath/". $imageThumbName;
				
			 imagejpeg($tmp,$imagefleimagename,100);
			 imagedestroy($src);
			 imagedestroy($tmp);
			*/
			

	//////---------------End Upload Brand Image------------////////////
	}else{
	 $newfile1="";
	 // $imageThumbName="";
	}	

	$sql="insert into tbl_paid_question_paper(course_id,
	subject_id,name,url,total_question,marks_per_question,image,special_text,exam_time,exam_date,time,date) 
	values('$course','$subject','$question','$url','$totalquestion','$marks','$newfile1','$specialtext','$examstarttime','$examstartdate','$time','$date')";
 				
			if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
			{
				header('Location: ../paid-question-paper-list.php?m=1');
				// echo "suucess";
				
			}
			else
			{
								//echo "fail";
				header('Location: ../paid-question-paper-list.php?m=0');
				
			}


}

function deletePaidQuestionPaper($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	
	//-------------------------------------------------------------------------------------------------
	$checkSql=mysqli_query($conn,"select * from  tbl_paid_question_paper where id ='$id'")or die(mysqli_error($conn));
	if(mysqli_num_rows($checkSql)>0)
	{
		$rowi=mysqli_fetch_assoc($checkSql);
		$image1=$rowi['image'];
		// $thumb1=$rowi['thumb'];

		//header('Location: ../product-list.php?&m=15');
		//exit();
	}
	//echo "value is ".$id;
	global $questionPath;	
	global $productPathThumb;	
	$ImagePath = "$productPath/";
	// $ImageThumbPath = "$productPathThumb/";
	
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from  tbl_paid_question_paper where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
			if($image1!=""){
				unlink($ImagePath.$image1);
				// unlink($ImageThumbPath.$thumb1);
			}
		mysql_query("COMMIT");	
		header('Location: ../paid-question-paper-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../paid-question-paper-list.php?m=7');
	}
	//-------------------------------------------------------------------------------------
}
function editPaidQuestionPaper($conn)
{ 
	$id 					= $_POST['txtid']; 
	
	$question	 			= 	mysqli_real_escape_string($conn,$_POST['txtquestion']); 	
	$url					= 	strtolower(str_replace(" ","-",$question));
	$url					= 	strtolower(str_replace("&","and",$url));

	$course		 			= 	mysqli_real_escape_string($conn,$_POST['selcourse']); 	
	$subject		 		= 	mysqli_real_escape_string($conn,$_POST['selsubject']); 	
	$totalquestion		 	= 	mysqli_real_escape_string($conn,$_POST['txttotalquestion']); 	
	$marks 			 		= 	mysqli_real_escape_string($conn,$_POST['txtmarks']); 	
	$time				 	= 	mysqli_real_escape_string($conn,$_POST['txttime']); 	
	$specialtext			= 	mysqli_real_escape_string($conn,$_POST['txtspecialtext']);	
	$examstarttime			= 	mysqli_real_escape_string($conn,$_POST['txtexmstarttime']); 
	$examendtime			= 	mysqli_real_escape_string($conn,$_POST['txtexmendtime']);
	$examstartdate			= 	mysqli_real_escape_string($conn,$_POST['txtexamstartdate']);
	
	/*-------------------------Image info-----------------------------*/
	//------------------brand logo--------------------------
	$imagefleimagename1 			= $_FILES['image1fleimage']['name']; 
	$imagefleimagename1_tmp 		= $_FILES['image1fleimage']['tmp_name'];
	//------------------brand img 1--------------------------
	//---------------------condition--check dots------------------------ 
	$dots=substr_count($imagefleimagename1, '.');
	if($dots>1){header('Location: ../paid-question-paper-list.php?m=2&n=Brand Logo');exit(0);}
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
	$sel = mysqli_query($conn,"select * from tbl_paid_question_paper where id = '$id' ");
	$row = mysqli_fetch_assoc($sel);
	$Un_OrginalImage1 	= $row['image'];	
	
	/*--------------insert record varible record------------*/
	$InsertImage1 				= $row['image'];	
	$InsertImagethumb1 			= "";	

	/*---------------------------*/
	$flagImage1		=0;
	// ------------- get all images  name  -------------------------	
			$no = rand(1,999);
			$tno = rand(1,999);	
	///////--------------Upload Logo Image-----------------////////////


	global $questionPath;	
	global $productPathThumb;	
	$ImagePath = "$questionPath/";
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
					header('Location: ../paid-question-paper.php?m=3');
					exit();
			}
			
			 $InsertImage1=$no.$imagefleimagename1;

			move_uploaded_file($_FILES["image1fleimage"]['tmp_name'], "$ImagePath".$InsertImage1);
			
			
			// $tmp=imagecreatetruecolor($newwidth,$newheight);
			// imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, $width,$height);
			// $InsertImagethumb1 = $tno.$imagefleimagename1;
			// $imagefleimagename = "$ImageThumbPath/". $InsertImagethumb1;
				
			// imagejpeg($tmp,$imagefleimagename,100);
			// imagedestroy($src);
			// imagedestroy($tmp);
	//////---------------End Upload Brand Image------------////////////
	}	
	//================================ Image 1 End==============================


	/*----------------------------------------------*/
	$sqladd = mysqli_query($conn,"update tbl_paid_question_paper set 
	course_id ='$course',
	subject_id ='$subject',
	name ='$question',
	url ='$url',
	total_question ='$totalquestion',
	marks_per_question ='$marks',
	image ='$InsertImage1',
	special_text ='$specialtext',
	exam_time ='$examstarttime',
	exam_endtime ='$examendtime',
	exam_date ='$examstartdate',
	time='$time'  where id = '$id'") or die(mysqli_error($conn));
 	if(mysqli_affected_rows($conn) > 0)
	{
		if($flagImage1==1){
			if($Un_OrginalImage1!=""){
				unlink($ImagePath.$Un_OrginalImage1);
				// unlink($ImageThumbPath.$Un_Image1);
			}
		}
		header('Location: ../paid-question-paper-list.php?m=4');
		// echo "success";
	}
	else
	{
		header('Location: ../paid-question-paper-list.php?m=5');
		// echo "Fails";
	}
} 
// =============== Books =================
function addBookMaster($conn)
{  	

	$subject				= mysqli_real_escape_string($conn,$_POST['selsubject']); 
	$libraryaccessnumber	= mysqli_real_escape_string($conn,$_POST['txtlibraryaccessnumber']); 
	$booktitle				= mysqli_real_escape_string($conn,$_POST['txtbooktitle']); 
	$author					= mysqli_real_escape_string($conn,$_POST['txtauthor']); 
	$publisher				= mysqli_real_escape_string($conn,$_POST['txtpublisher']); 
	$edition				= mysqli_real_escape_string($conn,$_POST['txtedition']); 
	$mrp					= mysqli_real_escape_string($conn,$_POST['txtmrp']); 
	$pages					= mysqli_real_escape_string($conn,$_POST['txtpages']); 
	$rageno					= mysqli_real_escape_string($conn,$_POST['txtrageno']); 

	$checkSql=mysqli_query($conn,"select * from  tbl_book_master where library_access_number ='$libraryaccessnumber'")or die(mysqli_error($conn));
	if(mysqli_num_rows($checkSql)>0)
	{
		header('Location: ../book-master.php?m=15');

	}else{
	// =================================
		$sql ="insert into  tbl_book_master(subject_id,book_title,library_access_number,author,publisher,edition,mrp,pages,rage_number) values('$subject','$booktitle','$libraryaccessnumber','$author','$publisher','$edition','$mrp','$pages','$rageno')";
		if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
		{
			header('Location: ../book-master-list.php?m=1');
			// echo "success";
		}
		else
		{
			header('Location: ../book-master-list.php?m=0');
			// echo "fail";
		}
	// =================================
	}
} 	
function editBookMaster($conn)
{

	$id						= $_POST['txtid']; 
	$subject				= mysqli_real_escape_string($conn,$_POST['selsubject']); 
	$libraryaccessnumber	= mysqli_real_escape_string($conn,$_POST['txtlibraryaccessnumber']); 
	$booktitle				= mysqli_real_escape_string($conn,$_POST['txtbooktitle']); 
	$author					= mysqli_real_escape_string($conn,$_POST['txtauthor']); 
	$publisher				= mysqli_real_escape_string($conn,$_POST['txtpublisher']); 
	$edition				= mysqli_real_escape_string($conn,$_POST['txtedition']); 
	$mrp					= mysqli_real_escape_string($conn,$_POST['txtmrp']); 
	$pages					= mysqli_real_escape_string($conn,$_POST['txtpages']); 
	$rageno					= mysqli_real_escape_string($conn,$_POST['txtrageno']);
	$checkSql=mysqli_query($conn,"select * from  tbl_book_master where library_access_number ='$libraryaccessnumber' and id!='$id'")or die(mysqli_error($conn));
	if(mysqli_num_rows($checkSql)>0)
	{
		header('Location: ../book-master.php?m=15&id='.$id);

	}else{
		//=======================================
		$sqladd = mysqli_query($conn,"update tbl_book_master set 
		subject_id='$subject',
		book_title='$booktitle',
		library_access_number='$libraryaccessnumber',
		author='$author',
		publisher='$publisher',
		edition='$edition',
		mrp='$mrp',
		pages='$pages',
		rage_number='$rageno' where id = '$id'") or die(mysqli_error($conn));
		if(mysqli_affected_rows($conn) > 0)
		{
			// echo "1";
			header('Location: ../book-master-list.php?m=4');
		}
		else
		{
			// echo "0";
			header('Location: ../book-master-list.php?m=5');
		}
		//=======================================
	}

} 	

function deleteBookMaster($conn)
{

	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from tbl_book_master where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
		mysql_query("COMMIT");	
		header('Location: ../book-master-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../book-master-list.php?m=7');
	}

}

// =============== Books Issue =================
function addBookIssue($conn)
{  	
	$bookid					= mysqli_real_escape_string($conn,$_POST['selbook']); 
	$student				= mysqli_real_escape_string($conn,$_POST['selstudent']); 
	$issuedate				= mysqli_real_escape_string($conn,$_POST['txtissuedate']); 
	$receivedate  			= mysqli_real_escape_string($conn,$_POST['txtreceivedate']); 


	$checkSql=mysqli_query($conn,"select * from  tbl_book_master where id ='$bookid'")or die(mysqli_error($conn));
	if(mysqli_num_rows($checkSql)>0)
	{
		$rows=mysqli_fetch_assoc($checkSql);
		$lbno=$rows['library_access_number'];
	}
		$sqladd = mysqli_query($conn,"update tbl_book_master set 
		status='1' where id = '$bookid'") or die(mysqli_error($conn));
		if(mysqli_affected_rows($conn) > 0)
		{}
		// =================================
	$sql ="insert into  tbl_book_issue(book_master_id,library_access_number,student_id,issue_date,receive_date,status) values('$bookid','$lbno','$student','$issuedate','$receivedate','1')";
	if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
	{
		header('Location: ../book-issue-list.php?m=1');
		// echo "success";
	}
	else
	{
		header('Location: ../book-issue-list.php?m=0');
		// echo "fail";
	}
	// =================================
	
} 	
function returnBook($conn)
{  	
	$id					= mysqli_real_escape_string($conn,$_GET['id']); 
	$bookid				= mysqli_real_escape_string($conn,$_GET['bookid']); 
	$date 				= date("Y-m-d");
	$sqladd = mysqli_query($conn,"update tbl_book_master set 
		status='0' where id = '$bookid'") or die(mysqli_error($conn));
		if(mysqli_affected_rows($conn) > 0)
	{

	}
	$sqladd = mysqli_query($conn,"update tbl_book_issue set 
		status='2',receive_date='$date' where id = '$id'") or die(mysqli_error($conn));
		if(mysqli_affected_rows($conn) > 0)
	{
		header('Location: ../return-issue-list.php?m=4');
	}else{
		//header('Location: ../return-issue-list.php?m=4');
	}

	
} 	


function editBookIssue($conn)
{

	$id						= $_POST['txtid']; 
	$subject				= mysqli_real_escape_string($conn,$_POST['selsubject']); 
	$libraryaccessnumber	= mysqli_real_escape_string($conn,$_POST['txtlibraryaccessnumber']); 
	$booktitle				= mysqli_real_escape_string($conn,$_POST['txtbooktitle']); 
	$author					= mysqli_real_escape_string($conn,$_POST['txtauthor']); 
	$publisher				= mysqli_real_escape_string($conn,$_POST['txtpublisher']); 
	$edition				= mysqli_real_escape_string($conn,$_POST['txtedition']); 
	$mrp					= mysqli_real_escape_string($conn,$_POST['txtmrp']); 
	$pages					= mysqli_real_escape_string($conn,$_POST['txtpages']); 
	$rageno					= mysqli_real_escape_string($conn,$_POST['txtrageno']);
	$checkSql=mysqli_query($conn,"select * from  tbl_book_master where library_access_number ='$libraryaccessnumber' and id!='$id'")or die(mysqli_error($conn));
	if(mysqli_num_rows($checkSql)>0)
	{
		header('Location: ../book-master.php?m=15&id='.$id);

	}else{
		//=======================================
		$sqladd = mysqli_query($conn,"update tbl_book_master set 
		subject_id='$subject',
		book_title='$booktitle',
		library_access_number='$libraryaccessnumber',
		author='$author',
		publisher='$publisher',
		edition='$edition',
		mrp='$mrp',
		pages='$pages',
		rage_number='$rageno' where id = '$id'") or die(mysqli_error($conn));
		if(mysqli_affected_rows($conn) > 0)
		{
			// echo "1";
			header('Location: ../book-master-list.php?m=4');
		}
		else
		{
			// echo "0";
			header('Location: ../book-master-list.php?m=5');
		}
		//=======================================
	}

} 	

function deleteBookIssue($conn)
{

	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql = mysql_query("START TRANSACTION");
	$del =	"delete from tbl_book_master where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
		mysql_query("COMMIT");	
		header('Location: ../book-master-list.php?&m=6');
	}
	else
	{
		mysql_query("ROLLBACK");	
		header('Location: ../book-master-list.php?m=7');
	}

}
function addBookStock($conn)
{
	
	$course		=	 mysqli_real_escape_string($conn,$_POST['selcourse']); 
	$subject		=	 mysqli_real_escape_string($conn,$_POST['selsubject']); 
	$name		=	 mysqli_real_escape_string($conn,$_POST['txtname']); 
	$stock		=	 mysqli_real_escape_string($conn,$_POST['txtstock']);

	$sql="insert into  tbl_book_store(course_id,subject_id,book_name,stock) values('$course','$subject','$name','$stock')";
	if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
	{
		header('Location: ../book-stock-list.php?m=1');
		//echo "success";
	}
	else
	{
		header('Location: ../book-stock-list.php?m=0');
		//echo "fail";
	}

} 
function editBookStock($conn)
{
	$id	=	$_POST['txtid']; 
	$course		=	 mysqli_real_escape_string($conn,$_POST['selcourse']); 
	$subject		=	 mysqli_real_escape_string($conn,$_POST['selsubject']); 
	$name		=	 mysqli_real_escape_string($conn,$_POST['txtname']); 
	$stock		=	 mysqli_real_escape_string($conn,$_POST['txtstock']); 
	
	
	$sqladd = mysqli_query($conn,"update  tbl_book_store set 
	course_id='$course',
	subject_id='$subject',
	book_name='$name',
	stock='$stock'  where id = '$id'") or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn) > 0)
	{
		header('Location: ../book-stock.php?m=4&id='.$id);
	}
	else
	{
		header('Location: ../book-stock.php?m=5&id='.$id);
	}

} 

function deleteBookStock($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql = mysqli_query($conn,"START TRANSACTION");
	$del =	"delete from tbl_book_store where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
		mysqli_query($conn,"COMMIT");	
		header('Location: ../book-stock-list.php?&m=6');
	}
	else
	{
		mysqli_query($conn,"ROLLBACK");	
		header('Location: ../book-stock-list.php?m=7');
	}
}
function addBookOut($conn)
{
	
	$quantity		=	 mysqli_real_escape_string($conn,$_POST['txtquantity']); 
	$studentid		=	 mysqli_real_escape_string($conn,$_POST['selstudentid']); 
	$bookid			=	 mysqli_real_escape_string($conn,$_POST['selbookid']); 
	$date 			=	 date("Y-m-d");

	$sel = mysqli_query($conn,"select * from  tbl_book_store where id = '$bookid' ");
	$row = mysqli_fetch_assoc($sel);
	if($row['stock']>0){
	if($row['stock']>=$quantity){	
		$stock=$row['stock']-$quantity;
		// ====================================
		$sqladd = mysqli_query($conn,"update  tbl_book_store set
			stock='$stock'  where id = '$bookid'") or die(mysqli_error($conn));
		if(mysqli_affected_rows($conn) > 0){
			
		}

		$sql="insert into  tbl_book_out(quantity,student_id,book_id,date) values('$quantity','$studentid','$bookid','$date')";
		if(mysqli_query($conn,$sql) or die(mysqli_error($conn)))
		{

			header('Location: ../book-transfer-list.php?m=1');
			// echo "success";
		}
		else
		{
			header('Location: ../book-transfer-list.php?m=0');
			// echo "fail";
		}
		// ======================================	
	}}
	

} 
function editBookOut($conn)
{
	$id	=	$_POST['txtid']; 
	$quantity		=	 mysqli_real_escape_string($conn,$_POST['txtquantity']); 
	$studentid		=	 mysqli_real_escape_string($conn,$_POST['selstudentid']); 
	$bookid			=	 mysqli_real_escape_string($conn,$_POST['selbookid']); 
	$date 			=	 date("Y-m-d");
	$sel = mysqli_query($conn,"select * from  tbl_book_store where id = '$bookid' ");
	$row = mysqli_fetch_assoc($sel);
	if($row['stock']>0){
	if($row['stock']>=$quantity){	
		$stock=$row['stock']-$quantity;
		// ====================================
		$sqladd = mysqli_query($conn,"update  tbl_book_store set
			stock='$stock'  where id = '$bookid'") or die(mysqli_error($conn));
		if(mysqli_affected_rows($conn) > 0){}

			$sqladd = mysqli_query($conn,"update  tbl_book_out set 
			quantity='$quantity',
			student_id='$studentid',
			book_id='$bookid'  where id = '$id'") or die(mysqli_error($conn));
			if(mysqli_affected_rows($conn) > 0)
			{
				header('Location: ../book-transfer.php?m=4&id='.$id);
			}
			else
			{
				header('Location: ../book-transfer.php?m=5&id='.$id);
			}
		}}

} 

function deleteBookOut($conn)
{
	$id =isset($_GET['id'])? $_GET['id'] : "";
	//echo "value is ".$id;
	$sql = mysqli_query($conn,"START TRANSACTION");
	$del =	"delete from tbl_book_store where id = '$id' ";

	if(mysqli_query($conn,$del) or die(mysqli_error($conn)))
	{
		mysqli_query($conn,"COMMIT");	
		header('Location: ../book-stock-list.php?&m=6');
	}
	else
	{
		mysqli_query($conn,"ROLLBACK");	
		header('Location: ../book-stock-list.php?m=7');
	}
}
?>
