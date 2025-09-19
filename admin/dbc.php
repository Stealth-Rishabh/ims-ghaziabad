<?php $conn = mysqli_connect("localhost","imsg_imsnew","Nishant@#12345","imsg_imsnew") or die(mysqli_error($conn)); 
$db="imsg_imsnew";
mysqli_select_db($conn,$db) or die(mysqli_error($conn)); 

ini_set('date.timezone', 'Asia/Calcutta');

/*---------------------------*/
$host = $_SERVER['DOCUMENT_ROOT'];
$currentUrl = $host;

$logoPath 		= $currentUrl."/media/logo/";
$logoPathThumb 	= $currentUrl."/media/logo/thumb/";

$bannerPath 		= $currentUrl."/media/banner/";
$bannerPathThumb 	= $currentUrl."/media/banner/thumb/";

$eventPath 		= $currentUrl."/media/event/";
$eventPathThumb 	= $currentUrl."/media/event/thumb/";

$newsPath 		= $currentUrl."/media/news/";
$newsPathThumb 	= $currentUrl."/media/news/thumb/";

$placementPath 		= $currentUrl."/media/placement/";
$placementPathThumb 	= $currentUrl."/media/placement/thumb/";

$blogPath 		= $currentUrl."/media/blog/";
$blogPathThumb 	= $currentUrl."/media/blog/thumb/";

$facultyPath 		= $currentUrl."/media/faculty/";
$facultyPathThumb 	= $currentUrl."/media/faculty/thumb/";

$staffPath 		= $currentUrl."/media/staff/";
$staffPathThumb 	= $currentUrl."/media/staff/thumb/";
// new

// ================== Global variable =====================
$companyName="IMS Ghaziabad ";
$developerName="IMS Ghaziabad ";


?>


