<?php session_start();
include'../dbc.php';
 $emailid = $_REQUEST['txtuseremail'];
$pass =md5( $_REQUEST['txtpassword']);

//now validating the username and password

$sql=mysqli_query($conn,"select * from tbl_faculty_member where email='$emailid' and password='$pass' and status='1'") or die(mysqli_error($conn));

if(mysqli_num_rows($sql)>0)
{

	$row=mysqli_fetch_array($sql);
	extract($row);
	if($email==$emailid && $password==$pass){
	echo "1";
	$_SESSION['username']=$email; 
	$_SESSION['userid']=$id; 
   }
   else{
   	echo	"Username or Password is invalid";
   }
}   
else
	echo	"Username or Password is invalid";
?>