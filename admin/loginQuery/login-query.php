<?php session_start();
include'../dbc.php';
 $emailid = $_REQUEST['txtuseremail'];
$pass =md5( $_REQUEST['txtpassword']);

//now validating the username and password

$sql=mysqli_query($conn,"select * from tbl_admin where email='$emailid' and password='$pass'") or die(mysqli_error($conn));

if(mysqli_num_rows($sql)>0)
{

	$row=mysqli_fetch_array($sql);
	extract($row);
	if($email==$emailid && $password==$pass){
	echo "1";
	$_SESSION['username']=$email; 
   }
   else{
   	echo	"Username or Password is invalid";
   }
}   
else
	echo	"Username or Password is invalid";
?>