<?php    
	require_once '../loginQuery/session_start.php';  
	require_once '../dbc.php'; 
	require_once '../dataQuery/common-function.php'; 
	
	$action = isset($_POST['action']) ? $_POST['action'] : ''; 
	switch($action) 
	{
		case 'gereralRegistration': 
		 	gereralRegistration($conn);
			break;
		case 'memberRegistration': 
		 	memberRegistration($conn);
			break;
		case 'userLogin': 
		 	userLogin($conn);
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

function gereralRegistration($conn)
{
	$name 		= html2text(mysqli_real_escape_string($conn,$_POST['txtname'])); 
	$email 		= html2text(mysqli_real_escape_string($conn,$_POST['txtemail'])); 
	$phone 		= html2text(mysqli_real_escape_string($conn,$_POST['txtphone'])); 
	$mode 		= $_POST['txtmode']; 
	$password 	= md5($_POST['txtpassword']); 
	$date		= date("Y-m-d"); 

	$sqlc=mysqli_query($conn, "select * from tbl_user where email='$email'") or die(mysqli_query($conn));
	if(mysqli_num_rows($sqlc)>0){
		echo "This email id already register.";
	}else{
		$sql="insert into   tbl_user(name,email,phone,mode,password,date) values('$name','$email','$phone','$mode','$password','$date')";
		if(mysqli_query($conn,$sql) or die(mysql_error($conn)))
		{
			echo "1";
		}
		else
		{
			echo "Try Again";
		}	

	}
}
function memberRegistration($conn)
{
	$name 		= html2text(mysqli_real_escape_string($conn,$_POST['txtname'])); 
	$email 		= html2text(mysqli_real_escape_string($conn,$_POST['txtemail'])); 
	$phone 		= html2text(mysqli_real_escape_string($conn,$_POST['txtphone'])); 
	$mode 		= $_POST['txtmode']; 
	$password 	= md5($_POST['txtpassword']); 
	$date		= date("Y-m-d"); 
	$memberpin	= $_POST['txtmemberpin'];
	
	$flag=0;
	$sqlc=mysqli_query($conn, "select * from tbl_user where email='$email'") or die(mysqli_query($conn));
	if(mysqli_num_rows($sqlc)>0){
		
		$flag=1;
	}
	if($flag==0){
		$sqlc=mysqli_query($conn, "select * from tbl_token where name='$memberpin'") or die(mysqli_query($conn));
		if(mysqli_num_rows($sqlc)>0){
			
		}else{
			$flag=2;
		}	
	}
	if($flag==0){
		$sqlc=mysqli_query($conn, "select * from tbl_user where member_token='$memberpin'") or die(mysqli_query($conn));
		if(mysqli_num_rows($sqlc)>0){
			
			$flag=3;
		}	
	}
	

	if($flag==1){
		echo "This email id already register.";
	}else if($flag==2){
		echo "Please enter the vaild pin.";
	}else if($flag==3){
		echo "This Pin Number already used.";
	}else{
		$sql="insert into   tbl_user(name,email,phone,mode,password,date,member_token) values('$name','$email','$phone','$mode','$password','$date','$memberpin')";
		if(mysqli_query($conn,$sql) or die(mysql_error($conn)))
		{
			echo "1";
		}
		else
		{
			echo "Try Again";
		}	

	}
}  
function userLogin($conn){
	$email 		= html2text(mysqli_real_escape_string($conn,$_POST['txtemail'])); 
	$password 	= md5($_POST['txtpassword']); 
	$sqlc=mysqli_query($conn,"select * from tbl_user where email='$email' and password='$password'") or die(mysqli_error($conn));
		if(mysqli_num_rows($sqlc)>0){
			$rows = mysqli_fetch_assoc($sqlc);
			$_SESSION['user']=$email; 
			$_SESSION['mode']=$rows['mode']; 
			$_SESSION['mode']=$rows['name']; 
			echo "1";
		}else{
			echo "Email ID and Password does not matched.";
		}
}

?>	 
	
