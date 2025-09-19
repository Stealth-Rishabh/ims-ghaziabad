 
<?php   
 	require_once 'loginQuery/session_start2.php';  
	require_once 'dbc.php'; 
	require_once 'dataQuery/common-function.php';
	$action = isset($_POST['action']) ? $_POST['action'] : ''; 
	switch($action) 
	{
		case 'departmentName': 
		 	departmentName();
			break;
		case 'personCategoryName': 
		 	personCategoryName();
			break;	
		case 'fieldCategoryName': 
		 	fieldCategoryName();
			break;
		case 'brandCategoryName': 
		 	brandCategoryName();
			break;
		case 'productName': 
		 	productName();
			break;					
			
			
		default :
		//header('Location: ../product_category.php');
	}
	
	// 0- Record has not been saved successfully
	// 1- Record has been saved successfully
	// 2- this image content two dot (.) 
	// 3- Pleas Select Image
	// 4- Record has been updated 
	// 5- Record has not been updated
	// 6- Rrecord has been delteted
	// 7- Record has not been delteted
	
function departmentName()
{  
	$url=$_POST['url'];
	$selnews = mysql_query("select * from tbl_department_category where url = '$url' ") or die(mysql_error());
	if(mysql_num_rows($selnews)>0){
		echo "0";
	}else{
		echo "1";
	}
}
function personCategoryName()
{  
	$url=$_POST['url'];
	$selnews = mysql_query("select * from tbl_person_category where url = '$url' ") or die(mysql_error());
	if(mysql_num_rows($selnews)>0){
		echo "0";
	}else{
		echo "1";
	}
}
function fieldCategoryName()
{  
	$url=$_POST['url'];
	$selnews = mysql_query("select * from tbl_field_category where url = '$url' ") or die(mysql_error());
	if(mysql_num_rows($selnews)>0){
		echo "0";
	}else{
		echo "1";
	}
}
function brandCategoryName()
{  
	$url=$_POST['url'];
	$selnews = mysql_query("select * from tbl_field_category where url = '$url' ") or die(mysql_error());
	if(mysql_num_rows($selnews)>0){
		echo "0";
	}else{
		echo "1";
	}
}
function productName()
{  
	$url=$_POST['url'];
	$selnews = mysql_query("select * from tbl_product where url = '$url' ") or die(mysql_error());
	if(mysql_num_rows($selnews)>0){
		echo "0";
	}else{
		echo "1";
	}
}
	 
	




