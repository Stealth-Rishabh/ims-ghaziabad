<?php
ob_start();
include "../dbc.php";
include "common-function.php";
$action = isset($_POST["action"]) ? $_POST["action"] : "";
switch ($action) {
    // fac
    case "addResearchPaper":
        addResearchPaper($conn);
        break;
    case "editResearchPaper":
        editResearchPaper($conn);
        break;
    // fac
    case "addHomelogo":
        addHomelogo($conn);
        break;
    case "editHomelogo":
        editHomelogo($conn);
        break;
    case "addHomebanner":
        addHomebanner($conn);
        break;
    case "editHomebanner":
        editHomebanner($conn);
        break;
	case "addHomecounter":
		addHomecounter($conn);
		break;
	case "editHomecounter":
		editHomecounter($conn);
		break;
	case "addEvent":
		addEvent($conn);
		break;
	case "editEvent":
		editEvent($conn);
		break;	
    case "addNews":
        addNews($conn);
        break;
    case "editNews":
        editNews($conn);
        break;
    case "addPlacement":
        addPlacement($conn);
        break;
    case "editPlacement":
        editPlacement($conn);
        break;	
    case "addBlog":
        addBlog($conn);
        break;
    case "editBlog":
        editBlog($conn);
        break;	    
    case "addFacultyTitle":
        addFacultyTitle($conn);
        break;
    case "editFacultyTitle":
        editFacultyTitle($conn);
        break;
    case "addFaculty":
        addFaculty($conn);
        break;
    case "editFaculty":
        editFaculty($conn);
        break; 
        case "addFacultyTitle":
        addFacultyTitle($conn);
        break;
    case "editFacultyTitle":
        editFacultyTitle($conn);
        break;
    case "addFaculty":
        addFaculty($conn);
        break;
    case "editFaculty":
        editFaculty($conn);
        break; 
    case "addStaffTitle":
        addStaffTitle($conn);
        break;
    case "editStaffTitle":
        editStaffTitle($conn);
        break;
    case "addStaff":
        addStaff($conn);
        break;
    case "editStaff":
        editStaff($conn);
        break;        
    // new
    case "addTopbanner":
        addTopbanner($conn);
        break;
    case "editTopbanner":
        editTopbanner($conn);
        break;
    case "addBottombanner":
        addBottombanner($conn);
        break;
    case "editBottombanner":
        editBottombanner($conn);
        break;
    case "addbannerOffer":
        addbannerOffer($conn);
        break;
    case "editbannerOffer":
        editbannerOffer($conn);
        break;
    case "addCategory":
        addCategory($conn);
        break;
    case "editCategory":
        editCategory($conn);
        break;
    case "addSubSubCategory":
        addSubSubCategory($conn);
        break;
    case "editSubSubCategory":
        editSubSubCategory($conn);
        break;
    case "addBrand":
        addBrand($conn);
        break;
    case "editBrand":
        editBrand($conn);
        break;
    case "addSubCategory":
        addSubCategory($conn);
        break;
    case "editSubCategory":
        editSubCategory($conn);
        break;
    case "addSize":
        addSize($conn);
        break;
    case "editSize":
        editSize($conn);
        break;
    case "addProduct":
        addProduct($conn);
        break;
    case "editProduct":
        editProduct($conn);
        break;
    case "addProductVarient":
        addProductVarient($conn);
        break;
    case "editProductVarient":
        editProductVarient($conn);
        break;
    case "addGallery":
        addGallery($conn);
        break;
    case "editGallery":
        editGallery($conn);
        break;
    case "addOffer":
        addOffer($conn);
        break;
    case "editOffer":
        editOffer($conn);
        break;
    case "addPromocode":
        addPromocode($conn);
        break;
    case "editPromocode":
        editPromocode($conn);
        break;
    case "addInvoice":
        addInvoice($conn);
        break;
    case "editInvoice":
        editInvoice($conn);
        break;
    case "sendOtp":
        sendOtp($conn);
        break;
    case "addFranchise":
        addFranchise($conn);
        break;
    case "editFranchise":
        editFranchise($conn);
        break;
    case "addshoesOccasion":
        addshoesOccasion($conn);
        break;
    case "editshoesOccasion":
        editshoesOccasion($conn);
        break;
    case "addsoleType":
        addsoleType($conn);
        break;
    case "editsoleType":
        editsoleType($conn);
        break;
    case "addupperMaterial":
        addupperMaterial($conn);
        break;
    case "editupperMaterial":
        editupperMaterial($conn);
        break;
    case "addheelHeight":
        addheelHeight($conn);
        break;
    case "editheelHeight":
        editheelHeight($conn);
        break;
    case "addidealFor":
        addidealFor($conn);
        break;
    case "editidealFor":
        editidealFor($conn);
        break;
    case "addProducttype":
        addProducttype($conn);
        break;
    case "editProducttype":
        editProducttype($conn);
        break;
    case "addCity":
        addCity($conn);
        break;
    case "editCity":
        editCity($conn);
        break;
    case "addOccasion":
        addOccasion($conn);
        break;
    case "editOccasion":
        editOccasion($conn);
        break;
    case "addFaq":
        addFaq($conn);
        break;
    case "editFaq":
        editFaq($conn);
        break;
    case "addDegree":
        addDegree($conn);
        break;
    case "editDegree":
        editDegree($conn);
        break;
    case "addLocation":
        addLocation($conn);
        break;
    case "editLocation":
        editLocation($conn);
        break;
    case "addReview":
        addReview($conn);
        break;
    case "editReview":
        editReview($conn);
        break;
    case "addPatientService":
        addPatientService($conn);
        break;
    case "editPatientService":
        editPatientService($conn);
        break;
    case "editCitypatientcare":
        editCitypatientcare($conn);
        break;
    default:
}
$action2 = isset($_GET["action2"]) ? $_GET["action2"] : "";
switch ($action2) {

    case "deleteResearchPaper":
        deleteResearchPaper($conn);
        break;
    //new
    case "deleteHomelogo":
        deleteHomelogo($conn);
        break;
    case "deleteHomebanner":
        deleteHomebanner($conn);
        break;
	case "deleteHomecounter":
		deleteHomecounter($conn);
		break;	
	case "deleteEvent":
		deleteEvent($conn);
		break;	
    case "deleteNews":
        deleteNews($conn);
        break;   
     case "deleteNews":
        deleteNews($conn);
        break;  
    case "deletePlacement":
        deletePlacement($conn);
        break;  
    case "deleteBlog":
        deleteBlog($conn);
        break;   
    case "deleteFacultyTitle":
        deleteFacultyTitle($conn);
        break;
    case "deleteFaculty":
        deleteFaculty($conn);
        break; 
    case "deleteStaffTitle":
        deleteStaffTitle($conn);
        break;
    case "deleteStaff":
        deleteStaff($conn);
        break;                          	
    // new close
    case "deleteTopbanner":
        deleteTopbanner($conn);
        break;
    case "deleteBottombanner":
        deleteBottombanner($conn);
        break;
    case "deleteBannerOffer":
        deleteBannerOffer($conn);
        break;
    case "deleteCategory":
        deleteCategory($conn);
        break;
    case "deleteBrand":
        deleteBrand($conn);
        break;
    case "deleteSubCategory":
        deleteSubCategory($conn);
        break;
    case "deleteSubSubCategory":
        deleteSubSubCategory($conn);
        break;
    case "deleteSize":
        deleteSize($conn);
        break;
    case "deleteCity":
        deleteCity($conn);
        break;
    case "deleteProduct":
        deleteProduct($conn);
        break;
    case "deleteProductVarient":
        deleteProductVarient($conn);
        break;
    case "deleteGallery":
        deleteGallery($conn);
        break;
    case "deleteContactEnquiry":
        deleteContactEnquiry($conn);
        break;
    case "deleteSuggestion":
        deleteSuggestion($conn);
        break;
    case "deleteOrder":
        deleteOrder($conn);
        break;
    case "deletePromocode":
        deletePromocode($conn);
        break;
    case "deletePromoCodeUser":
        deletePromoCodeUser($conn);
        break;
    case "ActiveReview":
        ActiveReview($conn);
        break;
    case "DeactiveReview":
        DeactiveReview($conn);
        break;
    case "deleteInvoice":
        deleteInvoice($conn);
        break;
    case "deleteFranchise":
        deleteFranchise($conn);
        break;
    case "deleteDoctor":
        deleteDoctor($conn);
        break;
    case "deleteshoesOccasion":
        deleteshoesOccasion($conn);
        break;
    case "deletesoleType":
        deletesoleType($conn);
        break;
    case "deleteupperMaterial":
        deleteupperMaterial($conn);
        break;
    case "deleteheelHeight":
        deleteheelHeight($conn);
        break;
    case "deleteidealFor":
        deleteidealFor($conn);
        break;
    case "deleteProducttype":
        deleteProducttype($conn);
        break;
    case "deleteOccasion":
        deleteOccasion($conn);
        break;
    case "deleteLisitngenquiry":
        deleteLisitngenquiry($conn);
        break;
    case "deleteFaq":
        deleteFaq($conn);
        break;
    case "deleteDegree":
        deleteDegree($conn);
        break;
    case "deleteDoctorregistration":
        deleteDoctorregistration($conn);
        break;
    case "deleteLocation":
        deleteLocation($conn);
        break;
    case "deleteHospitalregistration":
        deleteHospitalregistration($conn);
        break;
    case "deleteHospitalclinic":
        deleteHospitalclinic($conn);
        break;
    case "deleteClinic":
        deleteClinic($conn);
        break;
    case "deleteclinicDoctor":
        deleteclinicDoctor($conn);
        break;
    case "deleteHospital":
        deleteHospital($conn);
        break;
    case "deletehospitalDoctor":
        deletehospitalDoctor($conn);
        break;
    case "deletePatientregistration":
        deletePatientregistration($conn);
        break;
    case "deleteReview":
        deleteReview($conn);
        break;
    case "deletePathologyregistration":
        deletePathologyregistration($conn);
        break;
    case "deleteDocReview":
        deleteDocReview($conn);
        break;
    case "deletePatientService":
        deletePatientService($conn);
        break;
    case "deletePatientCareregistration":
        deletePatientCareregistration($conn);
        break;
    case "deletePatientcareprofile":
        deletePatientcareprofile($conn);
        break;
    default:
}
$action3 = isset($_GET["action3"]) ? $_GET["action3"] : "";
switch ($action3) {
    case "activeCategory":
        activeCategory($conn);
        break;
    case "deactiveCategory":
        deactiveCategory($conn);
        break;
    case "activeFranchise":
        activefranchise($conn);
        break;
    case "deactiveFranchise":
        deactiveFranchise($conn);
        break;
    case "activeDoctor":
        activeDoctor($conn);
        break;
    case "deactiveDoctor":
        deactiveDoctor($conn);
        break;
    case "activeSubcategory":
        activeSubcategory($conn);
        break;
    case "deactiveSubcategory":
        deactiveSubcategory($conn);
        break;
    case "activeSubsubcategory":
        activeSubsubcategory($conn);
        break;
    case "deactiveSubsubcategory":
        deactiveSubsubcategory($conn);
        break;
    case "activeProduct":
        activeProduct($conn);
        break;
    case "deactiveProduct":
        deactiveProduct($conn);
        break;
    case "showClinic":
        showClinic($conn);
        break;
    case "hideClinic":
        hideClinic($conn);
        break;
    case "showBookdoctor":
        showBookdoctor($conn);
        break;
    case "hideBookdoctor":
        hideBookdoctor($conn);
        break;
    case "activeAccount":
        activeAccount($conn);
        break;
    case "deactiveAccount":
        deactiveAccount($conn);
        break;
    case "activeClinic":
        activeClinic($conn);
        break;
    case "deactiveClinic":
        deactiveClinic($conn);
        break;
    case "showinClinic":
        showinClinic($conn);
        break;
    case "hideinClinic":
        hideinClinic($conn);
        break;
    case "showinbookClinic":
        showinbookClinic($conn);
        break;
    case "hideinbookClinic":
        hideinbookClinic($conn);
        break;
    case "activeDoctorclinic":
        activeDoctorclinic($conn);
        break;
    case "deactiveDoctorclinic":
        deactiveDoctorclinic($conn);
        break;
    case "activeHospital":
        activeHospital($conn);
        break;
    case "deactiveHospital":
        deactiveHospital($conn);
        break;
    case "showinClinicH":
        showinClinicH($conn);
        break;
    case "hideinClinicH":
        hideinClinicH($conn);
        break;
    case "showinbookClinicH":
        showinbookClinicH($conn);
        break;
    case "hideinbookClinicH":
        hideinbookClinicH($conn);
        break;
    case "activeDoctorhospital":
        activeDoctorhospital($conn);
        break;
    case "deactiveDoctorhospital":
        deactiveDoctorhospital($conn);
        break;
    case "activePatientaccount":
        activePatientaccount($conn);
        break;
    case "deactivePatientaccount":
        deactivePatientaccount($conn);
        break;
    case "activeDocReview":
        activeDocReview($conn);
        break;
    case "deactiveDocReview":
        deactiveDocReview($conn);
        break;
    case "activePatientService":
        activePatientService($conn);
        break;
    case "deactivePatientService":
        deactivePatientService($conn);
        break;
    case "activePatientCareAccount":
        activePatientCareAccount($conn);
        break;
    case "deactivePatientCareAccount":
        deactivePatientCareAccount($conn);
        break;
    case "activePatientCare":
        activePatientCare($conn);
        break;
    case "deactivePatientCare":
        deactivePatientCare($conn);
        break;
    default:
}

// facultty code
/*--------AddResearchPaper-----------------------------------------------*/

function addResearchPaper($conn)
{
    $year = mysqli_real_escape_string($conn, $_POST["txtselyear"]);
    $papername = mysqli_real_escape_string($conn, $_POST["txtpapername"]);
    $journalname = mysqli_real_escape_string($conn, $_POST["txtjournalname"]);
    $indexing = mysqli_real_escape_string($conn, $_POST["txtindexing"]);
    $link = mysqli_real_escape_string($conn, $_POST["txtlink"]);
    $facultyid = mysqli_real_escape_string($conn, $_POST["txtfacultyid"]);
    $date = date("d/m/Y H:i", time());

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $sql = "insert into tbl_research_paper(faculty_id,date,year,name_paper,name_journal,indexing,link,status) values('$facultyid','$date','$year','$papername','$journalname','$indexing','$link','$status')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../research-paper-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../research-paper-list.php?m=0");
        //echo "fail";
    }
}
/*-------Add ResearchPaper close-----------------------------------------------*/

/*--------DeleteResearchPaper -----------------------------------------------*/
function deleteResearchPaper($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_research_paper where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../research-paper-list.php?&m=6");
    } else {
        header("Location: ../research-paper-list.php?m=7");
    }
}
/*--------Delete ResearchPaper close-----------------------------------------------*/
/*--------Edit ResearchPaper -----------------------------------------------*/

function editResearchPaper($conn)
{
    $id = $_POST["txtid"];

    $year = mysqli_real_escape_string($conn, $_POST["txtselyear"]);
    $papername = mysqli_real_escape_string($conn, $_POST["txtpapername"]);
    $journalname = mysqli_real_escape_string($conn, $_POST["txtjournalname"]);
    $indexing = mysqli_real_escape_string($conn, $_POST["txtindexing"]);
    $link = mysqli_real_escape_string($conn, $_POST["txtlink"]);
    $facultyid = mysqli_real_escape_string($conn, $_POST["txtfacultyid"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }


    ($sqladd = mysqli_query(
        $conn,
        "update tbl_research_paper set 
            year='$year',
            name_paper='$papername',
            name_journal='$journalname',
            indexing='$indexing',
            link='$link',
            status='$status'
             where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../research-paper-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../research-paper-list.php?m=5");
    }
}
/*--------Edit ResearchPaper close-----------------------------------------------*/
//faculty code

// new start


/* Add Staff Title */
function addStaffTitle($conn)
{
    $title = mysqli_real_escape_string($conn, $_POST["txttitle"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);

    $sql = "insert into tbl_staff_title(title,url,status) values('$title','$url','1')";

    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("location:../staff-title-list.php");
        exit();
    } else {
        header("location:../staff-title-list.php");
        exit();
    }
}
function deleteStaffTitle($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_staff_title where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("location:../staff-title-list.php");
        exit();
    } else {
        header("location:../staff-title-list.php");
        exit();
    }
}
function editStaffTitle($conn)
{
    $id = $_POST["txtid"];
    $title = mysqli_real_escape_string($conn, $_POST["txttitle"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_staff_title set 
	title='$title',
    url='$url'
	where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        header("location:../staff-title-list.php");
        exit();
    } else {
        header("location:../staff-title-list.php");
        exit();
    }
}
/* Staff title close */
/*--------Add Staff-----------------------------------------------*/

function addStaff($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $staffid = mysqli_real_escape_string($conn, $_POST["txtseldepartment"]);
    $designation = mysqli_real_escape_string($conn, $_POST["txtdesignation"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    /*-------------------------Image info-----------------------------*/
    //------------------brand logo--------------------------
    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];
    $imagefleimagename2 = $_FILES["image2fleimage"]["name"];
    $imagefleimagename2_tmp = $_FILES["image2fleimage"]["tmp_name"];
    //------------------brand img 1--------------------------
    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../staff-member.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $staffPath;
    global $staffPathThumb;
    $ImagePath = "$staffPath/";
    $ImageThumbPath = "$staffPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../staff.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    $sql = "insert into  tbl_staff_member(name,staff_id,designation,image,thumb,status) values('$name','$staffid','$designation','$newfile1','$imageThumbName','$status')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../staff-member-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../staff-member-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Staff close-----------------------------------------------*/

/*--------Delete Staff -----------------------------------------------*/
function deleteStaff($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_staff_member where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../staff-member-list.php?&m=6");
    } else {
        header("Location: ../staff-member-list.php?m=7");
    }
}
/*--------Delete Staff close-----------------------------------------------*/
/*--------Edit Staff -----------------------------------------------*/

function editStaff($conn)
{
    $id = $_POST["txtid"];

    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $staffid = mysqli_real_escape_string($conn, $_POST["txtseldepartment"]);
    $designation = mysqli_real_escape_string($conn, $_POST["txtdesignation"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    /*-------------------------Image info-----------------------------*/
    //------------------brand logo--------------------------
    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];
    //------------------brand img 1--------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query($conn, "select * from tbl_staff_member where id = '$id' ");
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];
    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];


    /*---------------------------*/
    $flagImage1 = 0;


    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $staffPath;
    global $staffPathThumb;
    $ImagePath = "$staffPath/";
    $ImageThumbPath = "$staffPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../staff-member-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_staff_member set 
			name='$name',
			staff_id='$staffid',
			image='$InsertImage1',
			thumb='$InsertImagethumb1',
            designation='$designation',
            status='$status'
			 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../staff-member-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../staff-member-list.php?m=5");
    }
}
/*--------Edit staff close-----------------------------------------------*/
/*--------Add Faculty-----------------------------------------------*/

function addFaculty($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $facultytid = mysqli_real_escape_string($conn, $_POST["txtseldepartment"]);
    $designation = mysqli_real_escape_string($conn, $_POST["txtdesignation"]);
    $email = mysqli_real_escape_string($conn, $_POST["txtemail"]);
    $password = md5($_REQUEST["txtpassword"]);
    $showpassword = mysqli_real_escape_string($conn, $_POST["txtpassword"]);

   $sqlcheck="select * from tbl_faculty_member where email='$email'";
   $runcheck=mysqli_query($conn,$sqlcheck) or die(mysqli_error($conn));
   $rowcheck=mysqli_num_rows($runcheck);
    if($rowcheck==1)
   {
    header("Location: ../faculty-member.php?m66");
    exit();
   }

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    /*-------------------------Image info-----------------------------*/
    //------------------brand logo--------------------------
    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];
    $imagefleimagename2 = $_FILES["image2fleimage"]["name"];
    $imagefleimagename2_tmp = $_FILES["image2fleimage"]["tmp_name"];
    //------------------brand img 1--------------------------
    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../faculty-member.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $facultyPath;
    global $facultyPathThumb;
    $ImagePath = "$facultyPath/";
    $ImageThumbPath = "$facultyPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../faculty-member.php?m=3");
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    $sql = "insert into  tbl_faculty_member(name,faculty_id,designation,image,thumb,status,email,password,show_password) values('$name','$facultytid','$designation','$newfile1','$imageThumbName','$status','$email','$password','$showpassword')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../faculty-member-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../faculty-member-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Faculty close-----------------------------------------------*/

/*--------Delete Faculty -----------------------------------------------*/
function deleteFaculty($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_faculty_member where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../faculty-member-list.php?&m=6");
    } else {
        header("Location: ../faculty-member-list.php?m=7");
    }
}
/*--------Delete Faculty close-----------------------------------------------*/
/*--------Edit Faculty -----------------------------------------------*/

function editFaculty($conn)
{
    $id = $_POST["txtid"];

    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $facultytid = mysqli_real_escape_string($conn, $_POST["txtseldepartment"]);
    $designation = mysqli_real_escape_string($conn, $_POST["txtdesignation"]);
    $email = mysqli_real_escape_string($conn, $_POST["txtemail"]);
    $description = mysqli_real_escape_string($conn, $_POST["txtdescription"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    /*-------------------------Image info-----------------------------*/
    //------------------brand logo--------------------------
    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];
    //------------------brand img 1--------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query($conn, "select * from tbl_faculty_member where id = '$id' ");
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];
    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];


    /*---------------------------*/
    $flagImage1 = 0;


    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $facultyPath;
    global $facultyPathThumb;
    $ImagePath = "$facultyPath/";
    $ImageThumbPath = "$facultyPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../faculty-member-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_faculty_member set 
			name='$name',
			faculty_id='$facultytid',
			image='$InsertImage1',
			thumb='$InsertImagethumb1',
            designation='$designation',
            status='$status',
            email='$email',
            description='$description'
			 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../home.php?m=4");
    } else {
        // echo "0";
        header("Location: ../home.php?m=5");
    }
}
/*--------Edit Faculty close-----------------------------------------------*/

/* Add Faculty Title */
function addFacultyTitle($conn)
{
    $title = mysqli_real_escape_string($conn, $_POST["txttitle"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);

    $sql = "insert into tbl_faculty_title(title,url,status) values('$title','$url','1')";

    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("location:../faculty-title-list.php");
        exit();
    } else {
        header("location:../faculty-title-list.php");
        exit();
    }
}
function deleteFacultyTitle($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_faculty_title where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("location:../faculty-title-list.php");
        exit();
    } else {
        header("location:../faculty-title-list.php");
        exit();
    }
}
function editFacultyTitle($conn)
{
    $id = $_POST["txtid"];
    $title = mysqli_real_escape_string($conn, $_POST["txttitle"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_faculty_title set 
	title='$title',
    url='$url'
	where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        header("location:../faculty-title-list.php");
        exit();
    } else {
        header("location:../faculty-title-list.php");
        exit();
    }
}
/* faculty title close */
/*--------Add BLog-----------------------------------------------*/

function addBlog($conn)
{
    $title = mysqli_real_escape_string($conn, $_POST["txttitle"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);
    $date = mysqli_real_escape_string($conn, $_POST["txtdate"]);
    $metatitle = mysqli_real_escape_string($conn, $_POST["txtmetatitle"]);
    $metakeyword = mysqli_real_escape_string($conn, $_POST["txtmetakeywords"]);
    $metadescription = mysqli_real_escape_string($conn, $_POST["txtmetadescription"]);
    $description = mysqli_real_escape_string($conn, $_POST["txtdescription"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../blog.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $blogPath;
    global $blogPathThumb;
    $ImagePath = "$blogPath/";
    $ImageThumbPath = "$blogPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../blog.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        // $src = $uploadedfile;
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;

        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    $sql = "insert into tbl_blog(title,url,description,date,meta_title,meta_keyword,meta_description,image,thumb,status) values('$title','$url','$description','$date','$metatitle','$metakeyword','$metadescription','$newfile1','$imageThumbName','$status')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../blog-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../blog-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Blog close-----------------------------------------------*/

/*--------Delete Blog -----------------------------------------------*/
function deleteBlog($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_blog where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../blog-list.php?&m=6");
    } else {
        header("Location: ../blog-list.php?m=7");
    }
}
/*--------Delete Blog close-----------------------------------------------*/
/*--------Edit Blog close-----------------------------------------------*/

function editBlog($conn)
{
    $id = $_POST["txtid"];
    $title = mysqli_real_escape_string($conn, $_POST["txttitle"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);
    $date = mysqli_real_escape_string($conn, $_POST["txtdate"]);
    $metatitle = mysqli_real_escape_string($conn, $_POST["txtmetatitle"]);
    $metakeyword = mysqli_real_escape_string($conn, $_POST["txtmetakeywords"]);
    $metadescription = mysqli_real_escape_string($conn, $_POST["txtmetadescription"]);
    $description = mysqli_real_escape_string($conn, $_POST["txtdescription"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query($conn, "select * from tbl_blog where id = '$id' ");
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $blogPath;
    global $blogPathThumb;
    $ImagePath = "$blogPath/";
    $ImageThumbPath = "$blogPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../blog-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
						$ratio=$setheight/$height;
						$newheight = $height * $ratio;    // Reset height to match scaled image
						$newwidth = $width * $ratio; 
					 }else{
						  $newheight =350;
					 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_blog set 
			title='$title',
			url='$url',
			description='$description',
			date='$date',
            meta_title='$metatitle',
            meta_keyword='$metakeyword',
            meta_description='$metadescription',
            image='$InsertImage1',
			thumb='$InsertImagethumb1',
            status='$status'
			 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../blog-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../blog-list.php?m=5");
    }
}
/*--------Edit Blog close-----------------------------------------------*/
/*--------Add Placement-----------------------------------------------*/

function addPlacement($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $yearid = mysqli_real_escape_string($conn, $_POST["txtselyear"]);
    $passingyear = mysqli_real_escape_string($conn, $_POST["txtpassingyear"]);
    $companyname = mysqli_real_escape_string($conn, $_POST["txtcompanyname"]);
    $shortdescription = mysqli_real_escape_string($conn, $_POST["txtshortdescription"]);
    $longdescription = mysqli_real_escape_string($conn, $_POST["txtlongdescription"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    /*-------------------------Image info-----------------------------*/
    //------------------brand logo--------------------------
    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];
    $imagefleimagename2 = $_FILES["image2fleimage"]["name"];
    $imagefleimagename2_tmp = $_FILES["image2fleimage"]["tmp_name"];
    //------------------brand img 1--------------------------
    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../placement.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $placementPath;
    global $placementPathThumb;
    $ImagePath = "$placementPath/";
    $ImageThumbPath = "$placementPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../placement.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    //================================ Image 2 ==============================

    if ($imagefleimagename2 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename2;
        $uploadedfile = $imagefleimagename2;
        $imagefleimagename2 = stripslashes($imagefleimagename2);
        $extension = getExtension($imagefleimagename2);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../placement.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename2_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename2_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile2 = $no . $imagefleimagename2;

        move_uploaded_file(
            $_FILES["image2fleimage"]["tmp_name"],
            "$ImagePath" . $newfile2
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $image2ThumbName = $tno . $imagefleimagename2;
        $imagefleimagename = "$ImageThumbPath/" . $image2ThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 2 end------------////////////
    } else {
        $newfile2 = "";
        $image2ThumbName = "";
    }

    $sql = "insert into tbl_placement_success(name,year_id,logo,logo_thumb,company_name,graduation_year,long_description,short_description,student_image,student_thumb,status) values('$name','$yearid','$newfile1','$imageThumbName','$companyname','$passingyear','$longdescription','$shortdescription','$newfile2','$image2ThumbName','$status')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../placement-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../placement-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Placement close-----------------------------------------------*/

/*--------Delete Placement -----------------------------------------------*/
function deletePlacement($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_placement_success where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../placement-list.php?&m=6");
    } else {
        header("Location: ../placement-list.php?m=7");
    }
}
/*--------Delete Placement close-----------------------------------------------*/
/*--------Edit Placement close-----------------------------------------------*/

function editPlacement($conn)
{
    $id = $_POST["txtid"];

    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $yearid = mysqli_real_escape_string($conn, $_POST["txtselyear"]);
    $passingyear = mysqli_real_escape_string($conn, $_POST["txtpassingyear"]);
    $companyname = mysqli_real_escape_string($conn, $_POST["txtcompanyname"]);
    $shortdescription = mysqli_real_escape_string($conn, $_POST["txtshortdescription"]);
    $longdescription = mysqli_real_escape_string($conn, $_POST["txtlongdescription"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    /*-------------------------Image info-----------------------------*/
    //------------------brand logo--------------------------
    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];
    $imagefleimagename2 = $_FILES["image2fleimage"]["name"];
    $imagefleimagename2_tmp = $_FILES["image2fleimage"]["tmp_name"];
    //------------------brand img 1--------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query($conn, "select * from tbl_placement_success where id = '$id' ");
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["logo"];
    $Un_Image1 = $row["logo_thumb"];
    $Un_OrginalImage2 = $row["student_image"];
    $Un_Image2 = $row["student_thumb"];
    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["logo"];
    $InsertImagethumb1 = $row["logo_thumb"];
    $InsertImage2 = $row["student_image"];
    $InsertImagethumb2 = $row["student_thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;

    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $placementPath;
    global $placementPathThumb;
    $ImagePath = "$placementPath/";
    $ImageThumbPath = "$placementPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../placement-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }
    // ======================= image 2 =========================
    if ($imagefleimagename2 != "") {
        $flagImage2 = 2;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename2;
        $uploadedfile = $imagefleimagename2;
        $imagefleimagename2 = stripslashes($imagefleimagename2);
        $extension = getExtension($imagefleimagename2);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../placement-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename2_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename2_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage2 = $no . $imagefleimagename2;

        move_uploaded_file(
            $_FILES["image2fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage2
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb2 = $tno . $imagefleimagename2;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb2;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }
    //================================ Image 2 End==============================
    /*----------------------------------------------*/

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_placement_success set 
			name='$name',
			year_id='$yearid',
			logo='$InsertImage1',
			logo_thumb='$InsertImagethumb1',
            company_name='$companyname',
            graduation_year='$passingyear',
            long_description='$longdescription',
            short_description='$shortdescription',
			student_image='$InsertImage2',
            student_thumb='$InsertImagethumb2',
            status='$status'
			 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../placement-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../placement-list.php?m=5");
    }
}
/*--------Edit Placement close-----------------------------------------------*/
/*--------Add News-----------------------------------------------*/

function addNews($conn)
{
    $title = mysqli_real_escape_string($conn, $_POST["txttitle"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);
    $date = mysqli_real_escape_string($conn, $_POST["txtdate"]);
    $metatitle = mysqli_real_escape_string($conn, $_POST["txtmetatitle"]);
    $metakeyword = mysqli_real_escape_string($conn, $_POST["txtmetakeywords"]);
    $metadescription = mysqli_real_escape_string($conn, $_POST["txtmetadescription"]);
    $description = mysqli_real_escape_string($conn, $_POST["txtdescription"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../news.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $newsPath;
    global $newsPathThumb;
    $ImagePath = "$newsPath/";
    $ImageThumbPath = "$newsPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../news.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        // $src = $uploadedfile;
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;

        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    $sql = "insert into tbl_news(title,url,description,date,meta_title,meta_keyword,meta_description,image,thumb,status) values('$title','$url','$description','$date','$metatitle','$metakeyword','$metadescription','$newfile1','$imageThumbName','$status')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../news-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../news-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add News close-----------------------------------------------*/

/*--------Delete News -----------------------------------------------*/
function deleteNews($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_news where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../news-list.php?&m=6");
    } else {
        header("Location: ../news-list.php?m=7");
    }
}
/*--------Delete News close-----------------------------------------------*/
/*--------Edit News close-----------------------------------------------*/

function editNews($conn)
{
    $id = $_POST["txtid"];

    $title = mysqli_real_escape_string($conn, $_POST["txttitle"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);
    $date = mysqli_real_escape_string($conn, $_POST["txtdate"]);
    $metatitle = mysqli_real_escape_string($conn, $_POST["txtmetatitle"]);
    $metakeyword = mysqli_real_escape_string($conn, $_POST["txtmetakeywords"]);
    $metadescription = mysqli_real_escape_string($conn, $_POST["txtmetadescription"]);
    $description = mysqli_real_escape_string($conn, $_POST["txtdescription"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query($conn, "select * from tbl_news where id = '$id' ");
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $newsPath;
    global $newsPathThumb;
    $ImagePath = "$newsPath/";
    $ImageThumbPath = "$newsPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../news-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
						$ratio=$setheight/$height;
						$newheight = $height * $ratio;    // Reset height to match scaled image
						$newwidth = $width * $ratio; 
					 }else{
						  $newheight =350;
					 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_news set 
			title='$title',
			url='$url',
			description='$description',
			date='$date',
            meta_title='$metatitle',
            meta_keyword='$metakeyword',
            meta_description='$metadescription',
            image='$InsertImage1',
			thumb='$InsertImagethumb1',
            status='$status'
			 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../news-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../news-list.php?m=5");
    }
}
/*--------Edit News close-----------------------------------------------*/
/*--------Add Event-----------------------------------------------*/

function addEvent($conn)
{
    $title = mysqli_real_escape_string($conn, $_POST["txttitle"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);
    $startdate = mysqli_real_escape_string($conn, $_POST["txtstartdate"]);
    $enddate = mysqli_real_escape_string($conn, $_POST["txtenddate"]);
    $metatitle = mysqli_real_escape_string($conn, $_POST["txtmetatitle"]);
    $metakeyword = mysqli_real_escape_string($conn, $_POST["txtmetakeywords"]);
    $metadescription = mysqli_real_escape_string($conn, $_POST["txtmetadescription"]);
    $description = mysqli_real_escape_string($conn, $_POST["txtdescription"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../event.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $eventPath;
    global $eventPathThumb;
    $ImagePath = "$eventPath/";
    $ImageThumbPath = "$eventPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../event.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        // $src = $uploadedfile;
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;

        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    $sql = "insert into tbl_event(title,url,description,start_date,end_date,meta_title,meta_keyword,meta_description,image,thumb,status) values('$title','$url','$description','$startdate','$enddate','$metatitle','$metakeyword','$metadescription','$newfile1','$imageThumbName','$status')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../event-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../event-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Event close-----------------------------------------------*/

/*--------Delete Event -----------------------------------------------*/
function deleteEvent($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_event where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../event-list.php?&m=6");
    } else {
        header("Location: ../event-list.php?m=7");
    }
}
/*--------Delete event close-----------------------------------------------*/
/*--------Edit event close-----------------------------------------------*/

function editEvent($conn)
{
    $id = $_POST["txtid"];

    $title = mysqli_real_escape_string($conn, $_POST["txttitle"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);
    $startdate = mysqli_real_escape_string($conn, $_POST["txtstartdate"]);
    $enddate = mysqli_real_escape_string($conn, $_POST["txtenddate"]);
    $metatitle = mysqli_real_escape_string($conn, $_POST["txtmetatitle"]);
    $metakeyword = mysqli_real_escape_string($conn, $_POST["txtmetakeywords"]);
    $metadescription = mysqli_real_escape_string($conn, $_POST["txtmetadescription"]);
    $description = mysqli_real_escape_string($conn, $_POST["txtdescription"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query($conn, "select * from tbl_event where id = '$id' ");
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $eventPath;
    global $eventPathThumb;
    $ImagePath = "$eventPath/";
    $ImageThumbPath = "$eventPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../event-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
						$ratio=$setheight/$height;
						$newheight = $height * $ratio;    // Reset height to match scaled image
						$newwidth = $width * $ratio; 
					 }else{
						  $newheight =350;
					 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_event set 
			title='$title',
			url='$url',
			description='$description',
			start_date='$startdate',
			end_date='$enddate',
            meta_title='$metatitle',
            meta_keyword='$metakeyword',
            meta_description='$metadescription',
            image='$InsertImage1',
			thumb='$InsertImagethumb1',
            status='$status'
			 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../event-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../event-list.php?m=5");
    }
}
/*--------Edit event close-----------------------------------------------*/
/*--------Add Counter-----------------------------------------------*/

function addhomecounter($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);
	$counter = mysqli_real_escape_string($conn, $_POST["txtcounter"]);
    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $sql = "insert into tbl_home_counter(name,order_number,counter,status) values('$name','$order','$counter','$status')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../home-counter-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../home-counter-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Counter close-----------------------------------------------*/

/*--------Delete Counter -----------------------------------------------*/
function deleteHomecounter($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_home_counter where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../home-counter-list.php?&m=6");
    } else {
        header("Location: ../home-counter-list.php?m=7");
    }
}
/*--------Delete counter close-----------------------------------------------*/
/*--------Edit  Counter-----------------------------------------------*/

function editHomecounter($conn)
{
    $id = $_POST["txtid"];

    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);
	$counter = mysqli_real_escape_string($conn, $_POST["txtcounter"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_home_counter set 
			name='$name',
			order_number='$order',
			counter='$counter',
			status='$status'
			 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../home-counter-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../home-counter-list.php?m=5");
    }
}
/*--------Edit COunter close-----------------------------------------------*/
/*--------Add Banner-----------------------------------------------*/

function addhomebanner($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../home-banner.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $bannerPath;
    global $bannerPathThumb;
    $ImagePath = "$bannerPath/";
    $ImageThumbPath = "$bannerPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../banner-logo.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        // $src = $uploadedfile;
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;

        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    $sql = "insert into tbl_home_banner(name,order_number,image,thumb,status) values('$name','$order','$newfile1','$imageThumbName','$status')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../home-banner-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../home-banner-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add banner close-----------------------------------------------*/

/*--------Delete banner -----------------------------------------------*/
function deleteHomebanner($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_home_banner where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../home-banner-list.php?&m=6");
    } else {
        header("Location: ../home-banner-list.php?m=7");
    }
}
/*--------Delete banner close-----------------------------------------------*/
/*--------Edit banner close-----------------------------------------------*/

function editHomebanner($conn)
{
    $id = $_POST["txtid"];

    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query($conn, "select * from tbl_home_banner where id = '$id' ");
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $bannerPath;
    global $bannerPathThumb;
    $ImagePath = "$bannerPath/";
    $ImageThumbPath = "$bannerPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../home-banner-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
						$ratio=$setheight/$height;
						$newheight = $height * $ratio;    // Reset height to match scaled image
						$newwidth = $width * $ratio; 
					 }else{
						  $newheight =350;
					 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_home_banner set 
			name='$name',
			order_number='$order',
			image='$InsertImage1',
			thumb='$InsertImagethumb1',
			status='$status'
			 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../home-banner-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../home-banner-list.php?m=5");
    }
}
/*--------Edit banner close-----------------------------------------------*/
/*--------Add Logo-----------------------------------------------*/

function addhomeLogo($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../home-logo.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $logoPath;
    global $logoPathThumb;
    $ImagePath = "$logoPath/";
    $ImageThumbPath = "$logoPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../home-logo.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        // $src = $uploadedfile;
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;

        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    $sql = "insert into tbl_home_logo(name,order_number,image,thumb,status) values('$name','$order','$newfile1','$imageThumbName','$status')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../home-logo-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../home-logo-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add logo close-----------------------------------------------*/

/*--------Delete logo -----------------------------------------------*/
function deleteHomelogo($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_home_logo where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../home-logo-list.php?&m=6");
    } else {
        header("Location: ../home-logo-list.php?m=7");
    }
}
/*--------Delete logo close-----------------------------------------------*/
/*--------Edit lohoclose-----------------------------------------------*/

function editHomeLogo($conn)
{
    $id = $_POST["txtid"];

    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query($conn, "select * from tbl_home_logo where id = '$id' ");
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $logoPath;
    global $logoPathThumb;
    $ImagePath = "$logoPath/";
    $ImageThumbPath = "$logoPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../home-logo-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
						$ratio=$setheight/$height;
						$newheight = $height * $ratio;    // Reset height to match scaled image
						$newwidth = $width * $ratio; 
					 }else{
						  $newheight =350;
					 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_home_logo set 
			name='$name',
			order_number='$order',
			image='$InsertImage1',
			thumb='$InsertImagethumb1',
			status='$status'
			 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../home-logo-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../home-logo-list.php?m=5");
    }
}
/*--------Edit logo close-----------------------------------------------*/
// new close
/*--------Delete Patientcareprofile -----------------------------------------------*/
function deletePatientcareprofile($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $rid = isset($_GET["rid"]) ? $_GET["rid"] : "";
    //echo "value is ".$otpid;

    $del = "delete from tbl_patient_care_detail where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        $delotp = "delete from tbl_patient_care_registration where id='$rid'";

        if (mysqli_query($conn, $delotp) or die(mysqli_error($conn))) {
            echo "<script>window.location.href='../patient-care-list.php?&m=6';</script>";
            exit();
        } else {
            echo "<script>window.location.href='../patient-care-list.php?m=7';</script>";
            exit();
        }
        // header('Location: ../vendor-list.php?&m=6');
    } else {
        echo "<script>window.location.href='../patient-care-list.php?m=7';</script>";
        exit();
    }
}
/*--------Delete deletePatientcareprofile close-----------------------------------------------*/

/* Active Patient Care active --*/

function activePatientCare($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_patient_care_detail set status='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../patient-care-list.php?&m=64';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../patient-care-list.php?m=64';</script>";
        exit();
    }
}
/* patient care active close --*/

/* patient care De-active --*/

function deactivePatientCare($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_patient_care_detail set status='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../patient-care-list.php?&m=65';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../patient-care-list.php?&m=65';</script>";
        exit();
    }
}
/* PatientCare De- active close --*/

function editCitypatientcare($conn)
{
    $id = $_POST["txtid"];
    $city_id = mysqli_real_escape_string($conn, $_POST["selcity"]);

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_patient_care_registration set 
	city_id='$city_id'
	where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        header("location:../patient-care-otp-list.php");
        exit();
    } else {
        header("location:../patient-care-otp-list.php");
        exit();
    }
}
/* City close */
/*--------Delete Patient Care Account -----------------------------------------------*/
function deletePatientCareregistration($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;
    $del = "delete from tbl_patient_care_registration where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        $delpd = mysqli_query(
            $conn,
            "delete from tbl_patient_care_detail where patient_care_id='$id'"
        );
        $delpdd = mysqli_query(
            $conn,
            "delete from tbl_patient_care_time_schedule where patientcareidd='$id'"
        );

        echo "<script>window.location.href='../patient-care-otp-list.php?m=6';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../patient-care-otp-list.php?m=7';</script>";
        exit();
    }
}
/*--------Delete Patient Care close-----------------------------------------------*/
/* active Patient careaccount--*/

function activePatientCareAccount($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_patient_care_registration set status='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../patient-care-otp-list.php?&m=42';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../patient-care-otp-list.php?m=42';</script>";
        exit();
    }
}
/* Patient Care active account --*/

/* patient care De-active account --*/

function deactivePatientCareAccount($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_patient_care_registration set status='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../patient-care-otp-list.php?&m=43';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../patient-care-otp-list.php?&m=43';</script>";
        exit();
    }
}
/* Patient Care De-active account --*/
/* active patient service active --*/

function activePatientService($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_patient_service set status='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        // 		header('Location: ../category-list.php?&m=19');
        echo "<script>window.location.href='../patient-service-list.php?&m=19';</script>";
        exit();
    } else {
        // 		header('Location: ../category-list.php?m=19');
        echo "<script>window.location.href='../patient-service-list.php?&m=19';</script>";
        exit();
    }
}
/*  active patient service close --*/

/* patient service De- active --*/

function deactivePatientService($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_patient_service set status='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        // 		header('Location: ../category-list.php?&m=20');
        echo "<script>window.location.href='../patient-service-list.php?&m=20';</script>";
        exit();
    } else {
        // 		header('Location: ../category-list.php?m=20');
        echo "<script>window.location.href='../patient-service-list.php?&m=20';</script>";
        exit();
    }
}
/* patient service De- active close --*/
/*--------Add Patient Serivce-----------------------------------------------*/

function addPatientService($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../patient-service.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $patientservicePath;
    global $patientservicePathThumb;
    $ImagePath = "$patientservicePath/";
    $ImageThumbPath = "$patientservicePathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../patient-service.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    $sql = "insert into  tbl_patient_service(name,image,thumb,url,order_number,status) values('$name','$newfile1','$imageThumbName','$url','$order','1')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        // 		header('Location: ../category-list.php?m=1');
        echo "<script>window.location.href='../patient-service-list.php?m=1';</script>";
        exit();
        //echo "success";
    } else {
        header("Location: ../patient-service-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Patient Service close-----------------------------------------------*/

/*--------Delete Patient Service -----------------------------------------------*/
function deletePatientService($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;
    $del = "delete from tbl_patient_service where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../patient-service-list.php?m=6';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../patient-service-list.php?m=7';</script>";
        exit();
    }
}
/*--------Delete Patient Service close-----------------------------------------------*/

/*--------Edit Patient Service close-----------------------------------------------*/

function editPatientService($conn)
{
    $id = $_POST["txtid"];
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query(
        $conn,
        "select * from tbl_patient_service where id = '$id' "
    );
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $patientservicePath;
    global $patientservicePathThumb;
    $ImagePath = "$patientservicePath/";
    $ImageThumbPath = "$patientservicePathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../patient-service-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_patient_service set 
	name='$name',
	image='$InsertImage1',
	thumb='$InsertImagethumb1',
	url='$url',
	order_number='$order',
	status='1'
	 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";

        echo "<script>window.location.href='../patient-service-list.php?m=4';</script>";
        exit();
    } else {
        // echo "0";
        echo "<script>window.location.href='../patient-service-list.php?m=5';</script>";
        exit();
    }
}
/*--------Edit Patient Service close-----------------------------------------------*/
/*--------Delete Dcotor Review -----------------------------------------------*/
function deleteDocReview($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_doctor_review where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../review-verify-list.php?&m=6");
    } else {
        header("Location: ../review-verify-list.php?m=7");
    }
}
/*--------Delete Doctor  Review close-----------------------------------------------*/
/* doctor Review Active --*/

function activeDocReview($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_doctor_review set status='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../review-verify-list.php?&m=62");
        exit();
    } else {
        header("Location: ../review-verify-list.php?&m=62");
        exit();
    }
}
/* doctor Review active close --*/

/* doctor Review Deactive --*/

function deactiveDocReview($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_doctor_review set status='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../review-verify-list.php?&m=63");
        exit();
    } else {
        header("Location: ../review-verify-list.php?&m=63");
        exit();
    }
}
/* doctor De- active dcotor review close --*/
/*--------Delete Pathology Registration -----------------------------------------------*/
function deletePathologyregistration($conn)
{
    $pathologyid = isset($_GET["pathologyid"]) ? $_GET["pathologyid"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_pathology_registration where pathology_id = '$pathologyid' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../pathology-registration-list.php?m=6';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../pathology-registration-list.php?m=7';</script>";
        exit();
    }
}
/*--------Delete Pathology Registration close-----------------------------------------------*/
/*--------Add Review----------------------------------------------*/

function addReview($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order_number = mysqli_real_escape_string($conn, $_POST["txtorder"]);
    $shortdescription = mysqli_real_escape_string(
        $conn,
        $_POST["txtshortdescription"]
    );

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../review.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $reviewPath;
    global $reviewPathThumb;
    $ImagePath = "$reviewPath/";
    $ImageThumbPath = "$reviewPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../review.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    $sql = "insert into tbl_webreview(name,description,image,thumb,order_number,status) values('$name','$shortdescription','$newfile1','$imageThumbName','$order_number','1')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../review-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../review-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Review close-----------------------------------------------*/

/*--------Delete Review -----------------------------------------------*/
function deleteReview($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_webreview where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../review-list.php?&m=6");
    } else {
        header("Location: ../review-list.php?m=7");
    }
}
/*--------Delete Review close-----------------------------------------------*/
/*--------Edit Review close-----------------------------------------------*/

function editReview($conn)
{
    $id = $_POST["txtid"];
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order_number = mysqli_real_escape_string($conn, $_POST["txtorder"]);
    $shortdescription = mysqli_real_escape_string(
        $conn,
        $_POST["txtshortdescription"]
    );

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query($conn, "select * from tbl_webreview where id = '$id' ");
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $reviewPath;
    global $reviewPathThumb;
    $ImagePath = "$reviewPath/";
    $ImageThumbPath = "$reviewPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../review-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_webreview set 
	name='$name',
	description='$shortdescription',
	order_number='$order_number',
	image='$InsertImage1',
	thumb='$InsertImagethumb1',
	status='1'
	 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../review-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../review-list.php?m=5");
    }
}
/*--------Edit Review close-----------------------------------------------*/
/* active Patient account--*/

function activePatientaccount($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_patient_registration set status='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../patient-list.php?&m=42';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../patient-list.php?m=42';</script>";
        exit();
    }
}
/* active  Patientaccount --*/

/* De-active Patient account --*/

function deactivePatientaccount($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_patient_registration set status='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../patient-list.php?&m=43';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../patient-list.php?&m=43';</script>";
        exit();
    }
}
/*  De- active Patient Account close --*/
/*--------Delete Patient Registration -----------------------------------------------*/
function deletePatientregistration($conn)
{
    $pid = isset($_GET["pid"]) ? $_GET["pid"] : "";

    $del = "delete from tbl_patient_registration where id = '$pid' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../patient-list.php?m=6';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../patient-list.php?m=7';</script>";
        exit();
    }
}
/*--------Delete Patient Registration close-----------------------------------------------*/
/*--------Delete hosptial  Doctor -----------------------------------------------*/
function deletehospitalDoctor($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $hospitalid = isset($_GET["hospitalid"]) ? $_GET["hospitalid"] : "";

    $deldoc = "delete from tbl_hospital_doctor where id='$id'";
    if (mysqli_query($conn, $deldoc) or die(mysqli_error($conn))) {
        $deldoctime = mysqli_query(
            $conn,
            "delete from tbl_hospital_doctor_timing where doctorid='$id'"
        );
        $deldoctimesch = mysqli_query(
            $conn,
            "delete from tbl_hospital_doctor_time_schedule where doctoridd='$id'"
        );

        header(
            "Location: ../hospital-doctor-list.php?&m=50&hospitalid=" .
                $hospitalid
        );
        exit();
    } else {
        header(
            "Location: ../hospital-doctor-list.php?&m=50&hospitalid=" .
                $hospitalid
        );
        exit();
    }
}

/*--------Delete hospital Doctor close-----------------------------------------------*/
/* doctor active Hospital --*/

function activeDoctorhospital($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $hospitalid = isset($_GET["hospitalid"]) ? $_GET["hospitalid"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_doctor set status='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header(
            "Location: ../hospital-doctor-list.php?&m=48&hospitalid=" .
                $hospitalid
        );
        exit();
    } else {
        header(
            "Location: ../hospital-doctor-list.php?&m=48&hospitalid=" .
                $hospitalid
        );
        exit();
    }
}
/* doctor active hospital close --*/

/* doctor De-active hospital --*/

function deactiveDoctorhospital($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $hospitalid = isset($_GET["hospitalid"]) ? $_GET["hospitalid"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_doctor set status='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header(
            "Location: ../hospital-doctor-list.php?&m=49&hospitalid=" .
                $hospitalid
        );
        exit();
    } else {
        header(
            "Location: ../hospital-doctor-list.php?&m=49&hospitalid=" .
                $hospitalid
        );
        exit();
    }
}
/* doctor De- active hospital close --*/
/* showinbookClinicH --*/

function showinbookClinicH($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $hospitalid = isset($_GET["hospitalid"]) ? $_GET["hospitalid"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_doctor set book_doctor='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header(
            "Location: ../hospital-doctor-list.php?&m=39&hospitalid=" .
                $hospitalid
        );
        exit();
    } else {
        header(
            "Location: ../hospital-doctor-list.php?&m=39&hospitalid=" .
                $hospitalid
        );
        exit();
    }
}
/* showinbookClinicH close --*/

/* hideinbookClinicH --*/

function hideinbookClinicH($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $hospitalid = isset($_GET["hospitalid"]) ? $_GET["hospitalid"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_doctor set book_doctor='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header(
            "Location: ../hospital-doctor-list.php?&m=40&hospitalid=" .
                $hospitalid
        );
        exit();
    } else {
        header(
            "Location: ../hospital-doctor-list.php?&m=40&hospitalid=" .
                $hospitalid
        );
        exit();
    }
}
/* hideinbookClinicH close --*/
/* showinClinicH  --*/

function showinClinicH($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $hospitalid = isset($_GET["hospitalid"]) ? $_GET["hospitalid"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_doctor set show_clinic='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header(
            "Location: ../hospital-doctor-list.php?&m=37&hospitalid=" .
                $hospitalid
        );
        exit();
    } else {
        header(
            "Location: ../hospital-doctor-list.php?&m=37&hospitalid=" .
                $hospitalid
        );
        exit();
    }
}
/* showinClinicH close --*/

/* hideinClinicH --*/

function hideinClinicH($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $hospitalid = isset($_GET["hospitalid"]) ? $_GET["hospitalid"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_doctor set show_clinic='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header(
            "Location: ../hospital-doctor-list.php?&m=38&hospitalid=" .
                $hospitalid
        );
        exit();
    } else {
        header(
            "Location: ../hospital-doctor-list.php?&m=38&hospitalid=" .
                $hospitalid
        );
        exit();
    }
}
/* hideinClinicH close --*/
/*--------Delete  Hospital -----------------------------------------------*/
function deleteHospital($conn)
{
    $hospitalid = isset($_GET["hospitalid"]) ? $_GET["hospitalid"] : "";

    ($sqldoctor = mysqli_query(
        $conn,
        "select * from tbl_hospital_doctor where hospital_id='$hospitalid'"
    )) or die(mysqli_error($conn));
    $rowdoctor = mysqli_num_rows($sqldoctor);
    if ($rowdoctor >= 1) {
        // greater then 1
        echo "<script>window.location.href='../hospital-list.php?&m=54';</script>";
        exit();
    } else {
        $delhospitaldetail = "delete from tbl_hospital_detail where hospitalid='$hospitalid'";
        if (
            mysqli_query($conn, $delhospitaldetail) or die(mysqli_error($conn))
        ) {
            echo "<script>window.location.href='../hospital-list.php?&m=55';</script>";
            exit();
        }
    }
}

/*--------Delete  Hospital close-----------------------------------------------*/
/* active Hospital--*/

function activeHospital($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_detail set status='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../hospital-list.php?&m=52';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../hospital-list.php?m=52';</script>";
        exit();
    }
}
/*  active Hospital --*/

/*  De-active Hospital --*/

function deactiveHospital($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_detail set status='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../hospital-list.php?&m=53';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../hospital-list.php?&m=53';</script>";
        exit();
    }
}
/* De- active Hospital close --*/
/*--------Delete Clinic  Doctor -----------------------------------------------*/
function deleteclinicDoctor($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $clinicid = isset($_GET["clinicid"]) ? $_GET["clinicid"] : "";

    $deldoc = "delete from tbl_hospital_doctor where id='$id'";
    if (mysqli_query($conn, $deldoc) or die(mysqli_error($conn))) {
        $deldoctime = mysqli_query(
            $conn,
            "delete from tbl_hospital_doctor_timing where doctorid='$id'"
        );
        $deldoctimesch = mysqli_query(
            $conn,
            "delete from tbl_hospital_doctor_time_schedule where doctoridd='$id'"
        );

        header(
            "Location: ../clinic-doctor-list.php?&m=50&clinicid=" . $clinicid
        );
        exit();
    } else {
        header(
            "Location: ../clinic-doctor-list.php?&m=51&clinicid=" . $clinicid
        );
        exit();
    }
}

/*--------Delete Clinic Doctor close-----------------------------------------------*/
/* doctor active clinic --*/

function activeDoctorclinic($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $clinicid = isset($_GET["clinicid"]) ? $_GET["clinicid"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_doctor set status='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header(
            "Location: ../clinic-doctor-list.php?&m=48&clinicid=" . $clinicid
        );
        exit();
    } else {
        header(
            "Location: ../clinic-doctor-list.php?&m=48&clinicid=" . $clinicid
        );
        exit();
    }
}
/* doctor active clinic close --*/

/* doctor De-active clinc --*/

function deactiveDoctorclinic($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $clinicid = isset($_GET["clinicid"]) ? $_GET["clinicid"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_doctor set status='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header(
            "Location: ../clinic-doctor-list.php?&m=49&clinicid=" . $clinicid
        );
        exit();
    } else {
        header(
            "Location: ../clinic-doctor-list.php?&m=49&clinicid=" . $clinicid
        );
        exit();
    }
}
/* doctor De- active close --*/
/* showinbookClinic --*/

function showinbookClinic($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $clinicid = isset($_GET["clinicid"]) ? $_GET["clinicid"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_doctor set book_doctor='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header(
            "Location: ../clinic-doctor-list.php?&m=39&clinicid=" . $clinicid
        );
        exit();
    } else {
        header(
            "Location: ../clinic-doctor-list.php?&m=39&clinicid=" . $clinicid
        );
        exit();
    }
}
/* showinbookClinic close --*/

/* hideinbookClinic --*/

function hideinbookClinic($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $clinicid = isset($_GET["clinicid"]) ? $_GET["clinicid"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_doctor set book_doctor='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header(
            "Location: ../clinic-doctor-list.php?&m=40&clinicid=" . $clinicid
        );
        exit();
    } else {
        header(
            "Location: ../clinic-doctor-list.php?&m=40&clinicid=" . $clinicid
        );
        exit();
    }
}
/* hideinbookClinic close --*/
/* showinClinic --*/

function showinClinic($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $clinicid = isset($_GET["clinicid"]) ? $_GET["clinicid"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_doctor set show_clinic='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header(
            "Location: ../clinic-doctor-list.php?&m=37&clinicid=" . $clinicid
        );
        exit();
    } else {
        header(
            "Location: ../clinic-doctor-list.php?&m=37&clinicid=" . $clinicid
        );
        exit();
    }
}
/* showinClinic close --*/

/* hideinClinic --*/

function hideinClinic($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $clinicid = isset($_GET["clinicid"]) ? $_GET["clinicid"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_doctor set show_clinic='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header(
            "Location: ../clinic-doctor-list.php?&m=38&clinicid=" . $clinicid
        );
        exit();
    } else {
        header(
            "Location: ../clinic-doctor-list.php?&m=38&clinicid=" . $clinicid
        );
        exit();
    }
}
/* hideinClinic close --*/

/*--------Delete  Clinic -----------------------------------------------*/
function deleteClinic($conn)
{
    $clinicid = isset($_GET["clinicid"]) ? $_GET["clinicid"] : "";

    ($sqldoctor = mysqli_query(
        $conn,
        "select * from tbl_hospital_doctor where hospital_id='$clinicid'"
    )) or die(mysqli_error($conn));
    $rowdoctor = mysqli_num_rows($sqldoctor);
    if ($rowdoctor >= 1) {
        // greater then 1
        echo "<script>window.location.href='../clinic-list.php?&m=46';</script>";
        exit();
    } else {
        $delhospitaldetail = "delete from tbl_hospital_detail where hospitalid='$clinicid'";
        if (
            mysqli_query($conn, $delhospitaldetail) or die(mysqli_error($conn))
        ) {
            echo "<script>window.location.href='../clinic-list.php?&m=47';</script>";
            exit();
        }
    }
}

/*--------Delete  clinic close-----------------------------------------------*/

/* active Clinic--*/

function activeClinic($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_detail set status='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../clinic-list.php?&m=44';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../clinic-list.php?m=44';</script>";
        exit();
    }
}
/*  active Clinic --*/

/*  De-active Clinic --*/

function deactiveClinic($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_detail set status='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../clinic-list.php?&m=45';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../clinic-list.php?&m=45';</script>";
        exit();
    }
}
/* De- active Clinic close --*/

/* active account--*/

function activeAccount($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_registration set status='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../doctor-clinic-registration-list.php?&m=42';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../doctor-clinic-registration-list.php?m=42';</script>";
        exit();
    }
}
/* doctor active account --*/

/* doctor De-active account --*/

function deactiveAccount($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_registration set status='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../doctor-clinic-registration-list.php?&m=43';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../doctor-clinic-registration-list.php?&m=43';</script>";
        exit();
    }
}
/* account De- active close --*/
/*--------Delete Hospital Clinic -----------------------------------------------*/
function deleteHospitalclinic($conn)
{
    $hospid = isset($_GET["hospid"]) ? $_GET["hospid"] : "";
    //echo "value is ".$otpid;

    $delhospitaldetail = "delete from tbl_hospital_detail where hospitalid='$hospid'";

    if (mysqli_query($conn, $delhospitaldetail) or die(mysqli_error($conn))) {
        $deldocaddress = "delete from tbl_hospital_doctor where hospital_id='$hospid'";

        if (mysqli_query($conn, $deldocaddress) or die(mysqli_error($conn))) {
            ($sqladd = mysqli_query(
                $conn,
                "update tbl_hospital_registration set profilecreate='0' where hospital_id='$hospid'"
            )) or die(mysqli_error($conn));

            echo "<script>window.location.href='../doctor-list.php?&m=6';</script>";
            exit();
        } else {
            echo '<script>alert("Something went wrong tbl_doctor_address Query.")</script>';
            exit();
        }
    } else {
        // echo "<script>window.location.href='../franchise-list.php?m=7';</script>";
        echo '<script>alert("Something went wrong tbl_doctor_detail Query.")</script>';
        exit();
    }
    // header('Location: ../vendor-list.php?&m=6');
}

/*--------Delete hospital clinic close-----------------------------------------------*/
/*--------Delete Hospital Registration -----------------------------------------------*/
function deleteHospitalregistration($conn)
{
    $hosid = isset($_GET["hosid"]) ? $_GET["hosid"] : "";
    //echo "value is ".$id;
    $sql = "SELECT * FROM tbl_hospital_detail where hospitalid='$hosid'";
    ($run = mysqli_query($conn, $sql)) or die(mysqli_error($conn));
    $row = mysqli_num_rows($run);
    if ($row < 1) {
        $del = "delete from tbl_hospital_registration where hospital_id = '$hosid' ";

        if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
            echo "<script>window.location.href='../doctor-clinic-registration-list.php?m=6';</script>";
            exit();
        } else {
            echo "<script>window.location.href='../doctor-clinic-registration-list.php?m=7';</script>";
            exit();
        }
    } else {
        echo "<script>window.location.href='../doctor-clinic-registration-list.php?m=41';</script>";
        exit();
    }
}
/*--------Delete Hospital Registration close-----------------------------------------------*/
/* location */
function addLocation($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtlocationname"]);
    $cityid = mysqli_real_escape_string($conn, $_POST["txtcityid"]);
    $franchise = "admin";
    date_default_timezone_set("Asia/Kolkata");
    $locationdate = date("d-m-Y / h:i:s a");

    $sql = "insert into tbl_location(location,cityid,franchiseid,date,status) values('$name','$cityid','$franchise','$locationdate','1')";

    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../location.php?cityid=" . $cityid);
        exit();
    } else {
        header("Location: ../location.php?cityid=" . $cityid);
        exit();
    }
}
function deleteLocation($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $cityid = isset($_GET["cityid"]) ? $_GET["cityid"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_location where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../location.php?cityid=" . $cityid);
        exit();
    } else {
        header("Location: ../location.php?cityid=" . $cityid);
        exit();
    }
}
function editLocation($conn)
{
    $id = $_POST["txtid"];
    $name = mysqli_real_escape_string($conn, $_POST["txtlocationname"]);
    $cityid = mysqli_real_escape_string($conn, $_POST["txtcityid"]);
    $franchise = "admin";

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_location set 
	location='$name',
	cityid='$cityid',
	franchiseid='$franchise'
	where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        header("Location: ../location.php?cityid=" . $cityid);
        exit();
    } else {
        header("Location: ../location.php?cityid=" . $cityid);
        exit();
    }
}
/* Location close */
/* showBookdoctor --*/

function showBookdoctor($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_detail set book_doctor='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../doctor-list.php?&m=39';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../doctor-list.php?m=39';</script>";
        exit();
    }
}
/* showBookdoctor close --*/

/* hideBookdoctor --*/

function hideBookdoctor($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_detail set book_doctor='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../doctor-list.php?&m=40';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../doctor-list.php?&m=40';</script>";
        exit();
    }
}
/* hideBookdoctor close --*/

/* showClinic --*/

function showClinic($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_detail set show_clinic='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../doctor-list.php?&m=37';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../doctor-list.php?m=37';</script>";
        exit();
    }
}
/* showClinic close --*/

/* hideClinic --*/

function hideClinic($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_detail set show_clinic='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../doctor-list.php?&m=38';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../doctor-list.php?&m=38';</script>";
        exit();
    }
}
/* hideClinic close --*/

/*--------Delete Doctor Registration -----------------------------------------------*/
function deleteDoctorregistration($conn)
{
    $docid = isset($_GET["docid"]) ? $_GET["docid"] : "";
    //echo "value is ".$id;
    $sql = "SELECT * FROM tbl_doctor_detail where doctorid='$docid'";
    ($run = mysqli_query($conn, $sql)) or die(mysqli_error($conn));
    $row = mysqli_num_rows($run);
    if ($row < 1) {
        $del = "delete from tbl_doctor_registration where doctor_id = '$docid' ";

        if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
            echo "<script>window.location.href='../doctor-registration-list.php?m=6';</script>";
            exit();
        } else {
            echo "<script>window.location.href='../doctor-registration-list.php?m=7';</script>";
            exit();
        }
    } else {
        echo "<script>window.location.href='../doctor-registration-list.php?m=36';</script>";
        exit();
    }
}
/*--------Delete Doctor Registration close-----------------------------------------------*/
/*--------Delete Doctor -----------------------------------------------*/
function deleteDoctor($conn)
{
    $docid = isset($_GET["docid"]) ? $_GET["docid"] : "";
    //echo "value is ".$otpid;

    $deldocdetail = "delete from tbl_doctor_detail where doctorid='$docid'";

    if (mysqli_query($conn, $deldocdetail) or die(mysqli_error($conn))) {
        $deldocaddress = "delete from tbl_doctor_address where doctor_id='$docid'";

        if (mysqli_query($conn, $deldocaddress) or die(mysqli_error($conn))) {
            ($sqladd = mysqli_query(
                $conn,
                "update tbl_doctor_registration set profilecreate='0' where doctor_id='$docid'"
            )) or die(mysqli_error($conn));

            echo "<script>window.location.href='../doctor-list.php?&m=6';</script>";
            exit();
        } else {
            echo '<script>alert("Something went wrong tbl_doctor_address Query.")</script>';
            exit();
        }
    } else {
        // echo "<script>window.location.href='../franchise-list.php?m=7';</script>";
        echo '<script>alert("Something went wrong tbl_doctor_detail Query.")</script>';
        exit();
    }
    // header('Location: ../vendor-list.php?&m=6');
}

/*--------Delete Doctor close-----------------------------------------------*/
/* doctor active --*/

function activeDoctor($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_detail set status='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../doctor-list.php?&m=34';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../doctor-list.php?m=34';</script>";
        exit();
    }
}
/* doctor active close --*/

/* doctor De-active --*/

function deactiveDoctor($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_hospital_detail set status='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../doctor-list.php?&m=35';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../doctor-list.php?&m=35';</script>";
        exit();
    }
}
/* doctor De- active close --*/

/*--------Add Degree-----------------------------------------------*/

function addDegree($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);
    $metakeyword = mysqli_real_escape_string($conn, $_POST["txtmetakeyword"]);
    $metadescription = mysqli_real_escape_string(
        $conn,
        $_POST["txtmetadescription"]
    );

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../degree.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $degreePath;
    global $degreePathThumb;
    $ImagePath = "$degreePath/";
    $ImageThumbPath = "$degreePathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../degree.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    $sql = "insert into  tbl_degree(name,image,thumb,url,order_number,metakeyword,metadescription,status) values('$name','$newfile1','$imageThumbName','$url','$order','$metakeyword','$metadescription','1')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        // 		header('Location: ../category-list.php?m=1');
        echo "<script>window.location.href='../degree-list.php?m=1';</script>";
        exit();
        //echo "success";
    } else {
        header("Location: ../degree-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Degree close-----------------------------------------------*/

/*--------Delete Degree-----------------------------------------------*/
function deleteDegree($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;
    $del = "delete from tbl_degree where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../degree-list.php?m=6';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../degree-list.php?m=7';</script>";
        exit();
    }
}
/*--------Delete degree close-----------------------------------------------*/

/*--------Edit degree close-----------------------------------------------*/

function editDegree($conn)
{
    $id = $_POST["txtid"];
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);
    $metakeyword = mysqli_real_escape_string($conn, $_POST["txtmetakeyword"]);
    $metadescription = mysqli_real_escape_string(
        $conn,
        $_POST["txtmetadescription"]
    );

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query($conn, "select * from tbl_degree where id = '$id' ");
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $degreePath;
    global $degreePathThumb;
    $ImagePath = "$degreePath/";
    $ImageThumbPath = "$degreePathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../degree-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_degree set 
	name='$name',
	image='$InsertImage1',
	thumb='$InsertImagethumb1',
	url='$url',
	order_number='$order',
	metakeyword='$metakeyword',
	metadescription='$metadescription',
	status='1'
	 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";

        echo "<script>window.location.href='../degree-list.php?m=4';</script>";
        exit();
    } else {
        // echo "0";
        echo "<script>window.location.href='../degree-list.php?m=5';</script>";
        exit();
    }
}
/*--------Edit Degree close-----------------------------------------------*/
/* faq */
function addFaq($conn)
{
    $question = mysqli_real_escape_string($conn, $_POST["txtquestion"]);
    $answer = mysqli_real_escape_string($conn, $_POST["txtanswer"]);
    $order_number = mysqli_real_escape_string($conn, $_POST["txtorder"]);

    $sql = "insert into tbl_faq(question,answer,order_number,status) values('$question','$answer','$order_number','1')";

    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("location:../faq-list.php");
        exit();
    } else {
        header("location:../faq-list.php");
        exit();
    }
}
function deleteFaq($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_faq where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("location:../faq-list.php");
        exit();
    } else {
        header("location:../faq-list.php");
        exit();
    }
}
function editFaq($conn)
{
    $id = $_POST["txtid"];
    $question = mysqli_real_escape_string($conn, $_POST["txtquestion"]);
    $answer = mysqli_real_escape_string($conn, $_POST["txtanswer"]);
    $order_number = mysqli_real_escape_string($conn, $_POST["txtorder"]);

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_faq set 
	question='$question',
	answer='$answer',
	order_number='$order_number'
	where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        header("location:../faq-list.php");
        exit();
    } else {
        header("location:../faq-list.php");
        exit();
    }
}
/*  faq */
/* Delete Lisitng Enquiry */
function deleteLisitngenquiry($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_listing_enquiry where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("location:../listing-enquiry-list.php");
        exit();
    } else {
        header("location:../listing-enquiry-list.php");
        exit();
    }
}
/* Occasion */
function addOccasion($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);

    $sql = "insert into tbl_occasion(name,status) values('$name','1')";

    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("location:../occasion.php");
        exit();
    } else {
        header("location:../occasion.php");
        exit();
    }
}
function deleteOccasion($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_occasion where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("location:../occasion.php");
        exit();
    } else {
        header("location:../occasion.php");
        exit();
    }
}
function editOccasion($conn)
{
    $id = $_POST["txtid"];
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_occasion set 
	name='$name'
	where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        header("location:../occasion.php");
        exit();
    } else {
        header("location:../occasion.php");
        exit();
    }
}
/*  occasion */
/*--------Add Bottom Banner-----------------------------------------------*/

function addBottombanner($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $link = mysqli_real_escape_string($conn, $_POST["txtlink"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../bottom-banner.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $bannerbottomPath;
    global $bannerbottomPathThumb;
    $ImagePath = "$bannerbottomPath/";
    $ImageThumbPath = "$bannerbottomPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../bottom-banner.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    $sql = "insert into  tbl_bannerbottom(name,order_number,image,thumb,status,link) values('$name','$order','$newfile1','$imageThumbName','$status','$link')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../bottom-banner-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../bottom-banner-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Bottom Banner close-----------------------------------------------*/

/*--------Delete bottom Banner -----------------------------------------------*/
function deleteBottombanner($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_bannerbottom where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../bottom-banner-list.php?&m=6");
    } else {
        header("Location: ../bottom-banner-list.php?m=7");
    }
}
/*--------Delete Bottom Banner close-----------------------------------------------*/
/*--------Edit Bottom Banner close-----------------------------------------------*/

function editBottombanner($conn)
{
    $id = $_POST["txtid"];

    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);
    $link = mysqli_real_escape_string($conn, $_POST["txtlink"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query(
        $conn,
        "select * from tbl_bannerbottom where id = '$id' "
    );
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $bannerbottomPath;
    global $bannerPathbottomThumb;
    $ImagePath = "$bannerbottomPath/";
    $ImageThumbPath = "$bannerbottomPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../bottom-banner-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_bannerbottom set 
	name='$name',
	order_number='$order',
	image='$InsertImage1',
	thumb='$InsertImagethumb1',
	status='$status',
	link='$link'
	 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../bottom-banner-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../bottom-banner-list.php?m=5");
    }
}
/*--------Edit bottom banner close-----------------------------------------------*/
/* product active --*/

function activeProduct($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $vendorid = isset($_GET["vendorid"]) ? $_GET["vendorid"] : "";
    //echo "value is ".$id;

    $del = "update tbl_product set adminstatus='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../pending-product-list.php?vendorid=" . $vendorid);
        // 		echo "<script>window.location.href='../pending-product-list.php?vendorid='.$vendorid;</script>";
        exit();
    } else {
        // 		header('Location: ../category-list.php?m=19');
        header("Location: ../pending-product-list.php?vendorid=" . $vendorid);
        exit();
    }
}
/* product active close --*/
/* product deactive --*/

function deactiveProduct($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $vendorid = isset($_GET["vendorid"]) ? $_GET["vendorid"] : "";
    //echo "value is ".$id;

    $del = "update tbl_product set adminstatus='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../active-product-list.php?vendorid=" . $vendorid);
        // 		echo "<script>window.location.href='../pending-product-list.php?vendorid='.$vendorid;</script>";
        exit();
    } else {
        // 		header('Location: ../category-list.php?m=19');
        header("Location: ../active-product-list.php?vendorid=" . $vendorid);
        exit();
    }
}
/* product deactive close --*/
/* City */
function addCity($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtcityname"]);

    $sql = "insert into tbl_city(name,status) values('$name','1')";

    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("location:../city.php");
        exit();
    } else {
        header("location:../city.php");
        exit();
    }
}
function deleteCity($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_city where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("location:../city.php");
        exit();
    } else {
        header("location:../city.php");
        exit();
    }
}
function editCity($conn)
{
    $id = $_POST["txtid"];
    $name = mysqli_real_escape_string($conn, $_POST["txtcityname"]);

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_city set 
	name='$name'
	where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        header("location:../city.php");
        exit();
    } else {
        header("location:../city.php");
        exit();
    }
}
/* City close */
/*--------Add Product Type-----------------------------------------------*/

function addProducttype($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);

    global $producttypePath;
    $ImagePath = "$producttypePath/";

    $image1 = trim($_FILES["image1fleimage"]["name"]);
    $randd = rand(1000, 9999);
    $image11 = str_replace(" ", "-", strtolower($image1));
    $newimage1 = "PT" . $randd . $image11;
    move_uploaded_file(
        $_FILES["image1fleimage"]["tmp_name"],
        "$ImagePath" . $newimage1
    );

    $sql = "insert into  tbl_producttype(name,image,status,order_number) values('$name','$newimage1','1','$order')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        // 		header('Location: ../category-list.php?m=1');
        echo "<script>window.location.href='../product-type-list.php?m=1';</script>";
        exit();
        //echo "success";
    } else {
        header("Location: ../product-type-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Product type close-----------------------------------------------*/

/*--------Delete Product Type -----------------------------------------------*/
function deleteProducttype($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_producttype where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../product-type-list.php?m=6';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../product-type-list.php?m=7';</script>";
        exit();
    }
}

/*--------Delete Product  close-----------------------------------------------*/

/*--------Edit Product Type close-----------------------------------------------*/

function editProducttype($conn)
{
    $id = $_POST["txtid"];
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query(
        $conn,
        "select * from tbl_producttype where id = '$id' "
    );
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $producttypePath;
    global $producttypePathThumb;
    $ImagePath = "$producttypePath/";
    $ImageThumbPath = "$producttypePathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product-type-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_producttype set 
	name='$name',
	image='$InsertImage1',
	thumb='$InsertImagethumb1',
	order_number='$order',
	status='1'
	 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";

        echo "<script>window.location.href='../product-type-list.php?m=4';</script>";
        exit();
    } else {
        // echo "0";
        echo "<script>window.location.href='../product-type-list.php?m=5';</script>";
        exit();
    }
}
/*--------Edit product type close-----------------------------------------------*/
/* heel ideal for */
function addidealFor($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $shoe_id = mysqli_real_escape_string($conn, $_POST["txtshoescategory"]);

    $sql = "insert into tbl_ideal_for(name,shoe_id,status) values('$name','$shoe_id','1')";

    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("location:../shoes-ideal-for.php");
        exit();
    } else {
        header("location:../shoes-ideal-for.php");
        exit();
    }
}
function deleteidealFor($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_ideal_for where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("location:../shoes-ideal-for.php");
        exit();
    } else {
        header("location:../shoes-ideal-for.php");
        exit();
    }
}
function editidealFor($conn)
{
    $id = $_POST["txtid"];
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_ideal_for set 
	name='$name'
	where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        header("location:../shoes-ideal-for.php");
        exit();
    } else {
        header("location:../shoes-ideal-for.php");
        exit();
    }
}
/* Ideal For close */
/* heel height */
function addheelHeight($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $shoe_id = mysqli_real_escape_string($conn, $_POST["txtshoescategory"]);

    $sql = "insert into tbl_heel_height(name,shoe_id,status) values('$name','$shoe_id','1')";

    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("location:../shoes-heel-height.php");
        exit();
    } else {
        header("location:../shoes-heel-height.php");
        exit();
    }
}
function deleteheelHeight($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_heel_height where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("location:../shoes-heel-height.php");
        exit();
    } else {
        header("location:../shoes-heel-height.php");
        exit();
    }
}
function editheelHeight($conn)
{
    $id = $_POST["txtid"];
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_heel_height set 
	name='$name'
	where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        header("location:../shoes-heel-height.php");
        exit();
    } else {
        header("location:../shoes-heel-height.php");
        exit();
    }
}
/* heel height close */
function addupperMaterial($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $shoe_id = mysqli_real_escape_string($conn, $_POST["txtshoescategory"]);

    $sql = "insert into tbl_upper_material(name,shoe_id,status) values('$name','$shoe_id','1')";

    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("location:../shoes-upper-material.php");
        exit();
    } else {
        header("location:../shoes-upper-material.php");
        exit();
    }
}
function deleteupperMaterial($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_upper_material where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("location:../shoes-upper-material.php");
        exit();
    } else {
        header("location:../shoes-upper-material.php");
        exit();
    }
}
function editupperMaterial($conn)
{
    $id = $_POST["txtid"];
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_upper_material set 
	name='$name'
	where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        header("location:../shoes-upper-material.php");
        exit();
    } else {
        header("location:../shoes-upper-material.php");
        exit();
    }
}

function addsoleType($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $shoe_id = mysqli_real_escape_string($conn, $_POST["txtshoescategory"]);

    $sql = "insert into tbl_sole_type(name,shoe_id,status) values('$name','$shoe_id','1')";

    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("location:../shoes-sole-type.php");
        exit();
    } else {
        header("location:../shoes-sole-type.php");
        exit();
    }
}
/*--------Add addsoleTypen-----------------------------------------------*/
/*--------Delete deletesoleType -----------------------------------------------*/
function deletesoleType($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_sole_type where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("location:../shoes-sole-type.php");
        exit();
    } else {
        header("location:../shoes-sole-type.php");
        exit();
    }
}
/*--------Delete deletesoleType close-----------------------------------------------*/
/*--------Edit editsoleType -----------------------------------------------*/

function editsoleType($conn)
{
    $id = $_POST["txtid"];
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_sole_type set 
	name='$name'
	where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        header("location:../shoes-sole-type.php");
        exit();
    } else {
        header("location:../shoes-sole-type.php");
        exit();
    }
}
/*--------Edit editsoleType close-----------------------------------------------*/
/*--------Add  addshoesOccasion-----------------------------------------------*/

function addshoesOccasion($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $shoe_id = mysqli_real_escape_string($conn, $_POST["txtshoescategory"]);

    $sql = "insert into  tbl_shoes_occasion(name,shoe_id,status) values('$name','$shoe_id','1')";

    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("location:../shoes-occasion.php");
        exit();
    } else {
        header("location:../shoes-occasion.php");
        exit();
    }
}
/*--------Add addshoesOccasion-----------------------------------------------*/
/*--------Delete addshoesOccasion -----------------------------------------------*/
function deleteshoesOccasion($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_shoes_occasion where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("location:../shoes-occasion.php");
        exit();
    } else {
        header("location:../shoes-occasion.php");
        exit();
    }
}
/*--------Delete addshoesOccasion close-----------------------------------------------*/
/*--------Edit addshoesOccasion -----------------------------------------------*/

function editshoesOccasion($conn)
{
    $id = $_POST["txtid"];
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_shoes_occasion set 
	name='$name'
	where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        header("location:../shoes-occasion.php");
        exit();
    } else {
        header("location:../shoes-occasion.php");
        exit();
    }
}
/*--------Edit addshoesOccasionr close-----------------------------------------------*/
/*--------Edit Franchise-----------------------------------------------*/

function editFranchise($conn)
{
    $id = $_POST["txtid"];
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $number = mysqli_real_escape_string($conn, $_POST["txtnumber"]);
    $email = mysqli_real_escape_string($conn, $_POST["txtemail"]);
    $password = md5($_REQUEST["txtpassword"]);
    $showpassword = mysqli_real_escape_string($conn, $_POST["txtpassword"]);
    $address = mysqli_real_escape_string($conn, $_POST["txtaddress"]);
    $pincode = mysqli_real_escape_string($conn, $_POST["txtpincode"]);

    $city = "";
    //echo	explode(",",$facility);
    foreach ($_POST["selcity"] as $item) {
        $city .= $item . ",";
    }
    $city = substr($city, 0, strlen($city) - 1);

    // image 1
    $file1 = $_FILES["txtadharcardfront"]["name"];
    $rand1 = rand(99, 999);
    $img1 = $rand1 . $file1;
    $pimg1 = $_POST["pimg1"];
    if ($file1 == "") {
        $file1 = $pimg1;
    } else {
        $file1 = $img1;
    }
    $tmp_file = $_FILES["txtadharcardfront"]["tmp_name"];
    move_uploaded_file($tmp_file, "../../media/franchisedocument/$file1");
    // image 2
    $file2 = $_FILES["txtadharcardback"]["name"];
    $rand2 = rand(99, 999);
    $img2 = $rand2 . $file2;
    $pimg2 = $_POST["pimg2"];
    if ($file2 == "") {
        $file2 = $pimg2;
    } else {
        $file2 = $img2;
    }
    $tmp_file = $_FILES["txtadharcardback"]["tmp_name"];
    move_uploaded_file($tmp_file, "../../media/franchisedocument/$file2");

    // image 3
    $file3 = $_FILES["txtprofile"]["name"];
    $rand3 = rand(99, 999);
    $img3 = $rand3 . $file3;
    $pimg3 = $_POST["pimg3"];
    if ($file3 == "") {
        $file3 = $pimg3;
    } else {
        $file3 = $img3;
    }
    $tmp_file = $_FILES["txtprofile"]["tmp_name"];
    move_uploaded_file($tmp_file, "../../media/franchisedocument/$file3");

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_franchise set 
	name='$name',
	number='$number',
	email='$email',
	password='$password',
	show_password='$showpassword',
	address='$address',
	pincode='$pincode',
	city_id='$city',
	aadharcardfront='$file1',
	aadharcardback='$file2',
	profile='$file3'
	where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        // header('Location: ../vendor-list.php?m=4');
        echo "<script>window.location.href='../franchise-list.php?&m=4';</script>";
        exit();
    } else {
        // echo "0";
        // header('Location: ../vendor-list.php?m=5');
        echo "<script>window.location.href='../franchise-list.php?&m=5';</script>";
        exit();
    }
}
/*--------Edit Franchise close-----------------------------------------------*/
/*--------Add Franchise Close-----------------------------------------------*/

function addFranchise($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $otpid = mysqli_real_escape_string($conn, $_POST["txtotpid"]);
    $otp = mysqli_real_escape_string($conn, $_POST["txtotp"]);
    $number = mysqli_real_escape_string($conn, $_POST["txtvendornumber"]);
    $email = mysqli_real_escape_string($conn, $_POST["txtemail"]);
    $password = md5($_REQUEST["txtpassword"]);
    $showpassword = mysqli_real_escape_string($conn, $_POST["txtpassword"]);
    $address = mysqli_real_escape_string($conn, $_POST["txtaddress"]);
    $pincode = mysqli_real_escape_string($conn, $_POST["txtpincode"]);

    $city = "";
    //echo	explode(",",$facility);
    foreach ($_POST["selcity"] as $item) {
        $city .= $item . ",";
    }
    $city = substr($city, 0, strlen($city) - 1);

    $rand = rand(100000, 999999);
    $franchiseid = "HCF" . $rand;
    date_default_timezone_set("Asia/Kolkata");
    $registrationdate = date("d-m-Y / h:i:s a");

    $uploadFolder = "../../media/franchisedocument/";
    #aadharcard
    $imageTmpName = $_FILES["txtadharcardfront"]["tmp_name"];
    $imageName2 = $_FILES["txtadharcardfront"]["name"];
    $imageName = $franchiseid . $imageName2;
    move_uploaded_file($imageTmpName, $uploadFolder . $imageName);

    #gst
    $imageTmpName2 = $_FILES["txtadharcardback"]["tmp_name"];
    $imageName22 = $_FILES["txtadharcardback"]["name"];
    $imageName2 = $franchiseid . $imageName22;
    move_uploaded_file($imageTmpName2, $uploadFolder . $imageName2);

    #profile
    $imageTmpName3 = $_FILES["txtprofile"]["tmp_name"];
    $imageName33 = $_FILES["txtprofile"]["name"];
    $imageName3 = $franchiseid . $imageName33;
    move_uploaded_file($imageTmpName3, $uploadFolder . $imageName3);

    $sql = "select * from tbl_franchiseotp where otp='$otp' and otpid='$otpid'";
    ($run = mysqli_query($conn, $sql)) or die(mysqli_error($conn));
    $row = mysqli_num_rows($run);
    if ($row == 1) {
        $sql = "insert into tbl_franchise(otp_id,name,email,number,password,address,pincode,city_id,franchiseid,registration_datee,status,aadharcardfront,aadharcardback,show_password,profile) values('$otpid','$name','$email','$number','$password','$address','$pincode','$city','$franchiseid','$registrationdate','1','$imageName','$imageName2','$showpassword','$imageName3')";

        if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
            $update = "update tbl_franchiseotp set status='1',otp='0' where otpid ='$otpid'";

            if (mysqli_query($conn, $update) or die(mysqli_error($conn))) {
                // echo "OTP WORONG";
                echo "<script>window.location.href='../franchise-list.php?&m=33';</script>";
                exit();
            } else {
                // echo "OTP WORONG";
                echo "<script>window.location.href='../franchise.php?m21&m=31&otpid=$otpid';</script>";
                exit();
            }
            //header('Location: vendor-number-otp.php?id='.$otpid);
            //echo "success";
        } else {
            // echo "OTP WORONG";
            echo "<script>window.location.href='../franchise.php?m21&m=31&otpid=$otpid';</script>";
            exit();
        }
    } else {
        // echo "OTP WORONG";
        echo "<script>window.location.href='../franchise.php?m21&m=31&otpid=$otpid';</script>";
        exit();
    }
}
/* subsubcategory active --*/

function activeSubsubcategory($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_sub_subcategory set status='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../sub-sub-category-list.php?&m=27';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../sub-sub-category-list.php?m=27';</script>";
        exit();
    }
}
/* subsubcategory active close --*/

/* subsubcategory De-active --*/

function deactiveSubsubcategory($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_sub_subcategory set status='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../sub-sub-category-list.php?&m=28';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../sub-sub-category-list.php?&m=28';</script>";
        exit();
    }
}
/* subsubcategory De- active close --*/

/* subcategory active --*/

function activeSubcategory($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_subcategory set status='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../sub-category-list.php?&m=25';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../sub-category-list.php?m=25';</script>";
        exit();
    }
}
/* subcategory active close --*/

/* vsubcategory De-active --*/

function deactiveSubcategory($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_subcategory set status='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../sub-category-list.php?&m=26';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../sub-category-list.php?&m=26';</script>";
        exit();
    }
}
/* subcategory De- active close --*/

/*--------Delete Franchise -----------------------------------------------*/
function deleteFranchise($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $otpid = isset($_GET["otpid"]) ? $_GET["otpid"] : "";
    //echo "value is ".$otpid;

    $del = "delete from tbl_franchise where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        $delotp = "delete from tbl_franchiseotp where otpid='$otpid'";

        if (mysqli_query($conn, $delotp) or die(mysqli_error($conn))) {
            echo "<script>window.location.href='../franchise-list.php?&m=6';</script>";
            exit();
        } else {
            echo "<script>window.location.href='../franchise-list.php?m=7';</script>";
            exit();
        }
        // header('Location: ../vendor-list.php?&m=6');
    } else {
        echo "<script>window.location.href='../franchise-list.php?m=7';</script>";
        exit();
    }
}
/*--------Delete franchise close-----------------------------------------------*/

/* franchise active --*/

function activeFranchise($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_franchise set status='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../franchise-list.php?&m=23';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../franchise-list.php?m=23';</script>";
        exit();
    }
}
/* franchise active close --*/

/* franchise De-active --*/

function deactiveFranchise($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_franchise set status='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../franchise-list.php?&m=24';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../franchise-list.php?&m=24';</script>";
        exit();
    }
}
/* franchise De- active close --*/
/* send otp  */

function sendOtp($conn)
{
    $otp = rand(1000, 9999);
    $otpid = rand(100000, 999999);
    $number = mysqli_real_escape_string($conn, $_POST["txtnumber"]);
    $sql = "select * from tbl_franchiseotp where mobile_number='$number' and status='1'";
    ($run = mysqli_query($conn, $sql)) or die(mysqli_error($conn));
    $row = mysqli_num_rows($run);
    if ($row == 1) {
        // header('Location: ../vendor.php?m23');
        echo "<script>window.location.href='../franchise.php?m23';</script>";
        exit();
    } else {
        $sql = "insert into  tbl_franchiseotp(mobile_number,otp,status,otpid) values('$number','$otp','0','$otpid')";
        if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
            // header('Location: ../vendor.php?m21&otpid='.$otpid);
            // message api
            // $message = rawurlencode($otp .' is your OTP from Hind Search. Please do not share OTP with anyone.');
            // $data="http://www.alots.in/sms-panel/api/http/index.php?username=AgraSearch&apikey=0023F-E616D&apirequest=Text&sender=HINDSR&mobile=$number&message=$message&route=TRANS&TemplateID=1507162643872930661&format=JSON";
            //     // Send the GET request with cURL
            //    $ch = curl_init($data);
            //    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //    $response = curl_exec($ch);
            //    curl_close($ch);
            echo "<script>window.location.href='../franchise.php?m21&otpid=$otpid';</script>";
            exit();
            //echo "success";
        } else {
            header("Location: ../franchise.php?m22");
            echo "<script>window.location.href='../franchise.php?m22';</script>";
            exit();

            //echo "fail";
        }
    }
}
// send otp close
/* category active --*/

function activeCategory($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_category set status='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        // 		header('Location: ../category-list.php?&m=19');
        echo "<script>window.location.href='../category-list.php?&m=19';</script>";
        exit();
    } else {
        // 		header('Location: ../category-list.php?m=19');
        echo "<script>window.location.href='../category-list.php?&m=19';</script>";
        exit();
    }
}
/* category active close --*/

/* category De- active --*/

function deactiveCategory($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_category set status='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        // 		header('Location: ../category-list.php?&m=20');
        echo "<script>window.location.href='../category-list.php?&m=20';</script>";
        exit();
    } else {
        // 		header('Location: ../category-list.php?m=20');
        echo "<script>window.location.href='../category-list.php?&m=20';</script>";
        exit();
    }
}
/* category De- active close --*/

/*--------Add  Sub Sub Category-----------------------------------------------*/

function addSubSubCategory($conn)
{
    $category = mysqli_real_escape_string($conn, $_POST["selcategory"]);
    $subcategory = mysqli_real_escape_string($conn, $_POST["selsubcategory"]);
    $subsubcategoryname = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);
    $metakeyword = mysqli_real_escape_string($conn, $_POST["txtmetakeyword"]);
    $metadescription = mysqli_real_escape_string(
        $conn,
        $_POST["txtmetadescription"]
    );
    $product_type_id = mysqli_real_escape_string(
        $conn,
        $_POST["selproducttype"]
    );
    if (isset($_POST["txtwholesale"])) {
        $wholesale = 1;
    } else {
        $wholesale = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../sub-sub-category.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $subsubcategoryPath;
    global $subsubcategoryPathThumb;
    $ImagePath = "$subsubcategoryPath/";
    $ImageThumbPath = "$subsubcategoryPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../sub-sub-category.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }
    $sql = "insert into  tbl_sub_subcategory(category_id,sub_category_id,name,image,thumb,url,order_number,status,	metakeyword,metadescription,product_type_id,wholesale) values('$category','$subcategory','$subsubcategoryname','$newfile1','$imageThumbName','$url','$order','1','$metakeyword','$metadescription','$product_type_id','$wholesale')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../sub-sub-category-list.php?&m=1';</script>";
        exit();
        //echo "success";
    } else {
        echo "<script>window.location.href='../sub-sub-category-list.php?&m=0';</script>";
        exit();
        //echo "fail";
    }
}
/*--------Add Sub Sub Category close-----------------------------------------------*/
/*--------Delete Sub Sub Category -----------------------------------------------*/
function deleteSubSubCategory($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;
    $sql = "SELECT * FROM tbl_product where 	sub_sub_category_id='$id'";
    ($run = mysqli_query($conn, $sql)) or die(mysqli_error($conn));
    $row = mysqli_num_rows($run);
    if ($row < 1) {
        $del = "delete from tbl_sub_subcategory where id = '$id' ";

        if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
            echo "<script>window.location.href='../sub-sub-category-list.php?&m=6';</script>";
            exit();
        } else {
            echo "<script>window.location.href='../sub-sub-category-list.php?&m=7';</script>";
            exit();
        }
    } else {
        echo "<script>window.location.href='../sub-sub-category-list.php?&m=18';</script>";
        exit();
    }
}
/*--------Delete Sub Sub Category close-----------------------------------------------*/

/*--------Edit Sub Category close-----------------------------------------------*/

function editSubSubCategory($conn)
{
    $id = $_POST["txtid"];
    $category = mysqli_real_escape_string($conn, $_POST["selcategory"]);
    $subcategory = mysqli_real_escape_string($conn, $_POST["selsubcategory"]);
    $subsubcategoryname = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);
    $metakeyword = mysqli_real_escape_string($conn, $_POST["txtmetakeyword"]);
    $metadescription = mysqli_real_escape_string(
        $conn,
        $_POST["txtmetadescription"]
    );
    $product_type_id = mysqli_real_escape_string(
        $conn,
        $_POST["selproducttype"]
    );
    if (isset($_POST["txtwholesale"])) {
        $wholesale = 1;
    } else {
        $wholesale = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query(
        $conn,
        "select * from tbl_sub_subcategory where id = '$id' "
    );
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $subsubcategoryPath;
    global $subsubcategoryPathThumb;
    $ImagePath = "$subsubcategoryPath/";
    $ImageThumbPath = "$subsubcategoryPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../sub-sub-category-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_sub_subcategory set 
	category_id='$category',	
	sub_category_id='$subcategory',
	name='$subsubcategoryname',
	image='$InsertImage1',
	thumb='$InsertImagethumb1',
	url='$url',
	order_number='$order',
	metakeyword='$metakeyword',
	metadescription='$metadescription',
	product_type_id	='$product_type_id',
	wholesale='$wholesale'
	where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        echo "<script>window.location.href='../sub-sub-category-list.php?&m=4';</script>";
        exit();
    } else {
        // echo "0";
        echo "<script>window.location.href='../sub-sub-category-list.php?&m=5';</script>";
        exit();
    }
}
/*--------Edit Sub Sub Category close-----------------------------------------------*/
/*--------Add Brand-----------------------------------------------*/

function addBrand($conn)
{
    $categoryname = mysqli_real_escape_string($conn, $_POST["txtname"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../brand.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----a
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $brandPath;
    global $brandPathThumb;
    $ImagePath = "$brandPath/";
    $ImageThumbPath = "$brandPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../brand.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    $sql = "insert into  tbl_brand(name,image,thumb,status) values('$categoryname','$newfile1','$imageThumbName','$status')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../brand-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../brand-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Brand close-----------------------------------------------*/

/*--------Delete Brand -----------------------------------------------*/
function deleteBrand($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_brand where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../brand-list.php?&m=6");
    } else {
        header("Location: ../brand-list.php?m=7");
    }
}
/*--------Delete Brand close-----------------------------------------------*/

/*--------Edit BRAND close-----------------------------------------------*/

function editBrand($conn)
{
    $id = $_POST["txtid"];
    $categoryname = mysqli_real_escape_string($conn, $_POST["txtname"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query($conn, "select * from tbl_brand where id = '$id' ");
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $brandPath;
    global $brandPathThumb;
    $ImagePath = "$brandPath/";
    $ImageThumbPath = "$brandPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../brand-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_brand set 
	name='$categoryname',
	image='$InsertImage1',
	thumb='$InsertImagethumb1',
	status='$status'
	 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../brand-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../brand-list.php?m=5");
    }
}
/*--------Edit Brand close-----------------------------------------------*/
/*--------Add  Size-----------------------------------------------*/

function addSize($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $sql = "insert into  tbl_size(name,status) values('$name','$status')";

    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../size-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../size-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Size close-----------------------------------------------*/
/*--------Delete Size -----------------------------------------------*/
function deleteSize($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_size where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../size-list.php?&m=6");
    } else {
        header("Location: ../size-list.php?m=7");
    }
}
/*--------Delete Size close-----------------------------------------------*/

/*--------Edit Size close-----------------------------------------------*/

function editSize($conn)
{
    $id = $_POST["txtid"];
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_size set 
	name='$name',
	status='$status'
	where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../size-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../size-list.php?m=5");
    }
}
/*--------Edit Size close-----------------------------------------------*/

/*--------Add Banner Offer-----------------------------------------------*/

function addbannerOffer($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);
    $link = mysqli_real_escape_string($conn, $_POST["txtlink"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../offer-banner.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $bannerofferPath;
    global $bannerofferPathThumb;
    $ImagePath = "$bannerofferPath/";
    $ImageThumbPath = "$bannerofferPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../offer-banner.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    $sql = "insert into tbl_banneroffer(name,order_number,image,thumb,status,link) values('$name','$order','$newfile1','$imageThumbName','$status','$link')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../offer-banner-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../offer-banner-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Banner offer close-----------------------------------------------*/

/*--------Delete Banner offer -----------------------------------------------*/
function deleteBannerOffer($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_banneroffer where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../offer-banner-list.php?&m=6");
    } else {
        header("Location: ../offer-banner-list.php?m=7");
    }
}
/*--------Delete Banner Offer close-----------------------------------------------*/
/*--------Edit Banner  Offerclose-----------------------------------------------*/

function editbannerOffer($conn)
{
    $id = $_POST["txtid"];

    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);
    $link = mysqli_real_escape_string($conn, $_POST["txtlink"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query(
        $conn,
        "select * from tbl_banneroffer where id = '$id' "
    );
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $bannerofferPath;
    global $bannerofferPathThumb;
    $ImagePath = "$bannerofferPath/";
    $ImageThumbPath = "$bannerofferPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../offer-banner-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_banneroffer set 
	name='$name',
	order_number='$order',
	image='$InsertImage1',
	thumb='$InsertImagethumb1',
	status='$status',
	link='$link'
	 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../offer-banner-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../offer-banner-list.php?m=5");
    }
}
/*--------Edit banner Offer close-----------------------------------------------*/
/*--------Add Banner-----------------------------------------------*/

function addTopbanner($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $link = mysqli_real_escape_string($conn, $_POST["txtlink"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../top-banner.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $bannerPath;
    global $bannerPathThumb;
    $ImagePath = "$bannerPath/";
    $ImageThumbPath = "$bannerPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../top-banner.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    $sql = "insert into  tbl_banner(name,order_number,image,thumb,status,link) values('$name','$order','$newfile1','$imageThumbName','$status','$link')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../top-banner-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../top-banner-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Top Banner close-----------------------------------------------*/

/*--------Delete Banner -----------------------------------------------*/
function deleteTopbanner($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_banner where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../top-banner-list.php?&m=6");
    } else {
        header("Location: ../top-banner-list.php?m=7");
    }
}
/*--------Delete Top Banner close-----------------------------------------------*/
/*--------Edit Top Banner close-----------------------------------------------*/

function editTopbanner($conn)
{
    $id = $_POST["txtid"];

    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);
    $link = mysqli_real_escape_string($conn, $_POST["txtlink"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query($conn, "select * from tbl_banner where id = '$id' ");
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $bannerPath;
    global $bannerPathThumb;
    $ImagePath = "$bannerPath/";
    $ImageThumbPath = "$bannerPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../top-banner-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_banner set 
	name='$name',
	order_number='$order',
	image='$InsertImage1',
	thumb='$InsertImagethumb1',
	status='$status',
	link='$link'
	 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../top-banner-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../top-banner-list.php?m=5");
    }
}
/*--------Edit Top banner close-----------------------------------------------*/
/*--------Add Category-----------------------------------------------*/

function addCategory($conn)
{
    $categoryname = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);
    $metakeyword = mysqli_real_escape_string($conn, $_POST["txtmetakeyword"]);
    $metadescription = mysqli_real_escape_string(
        $conn,
        $_POST["txtmetadescription"]
    );

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../category.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $categoryPath;
    global $categoryPathThumb;
    $ImagePath = "$categoryPath/";
    $ImageThumbPath = "$categoryPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../category.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    $sql = "insert into  tbl_category(name,image,thumb,url,order_number,metakeyword,metadescription,status) values('$categoryname','$newfile1','$imageThumbName','$url','$order','$metakeyword','$metadescription','1')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        // 		header('Location: ../category-list.php?m=1');
        echo "<script>window.location.href='../category-list.php?m=1';</script>";
        exit();
        //echo "success";
    } else {
        header("Location: ../category-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Category close-----------------------------------------------*/

/*--------Delete Category -----------------------------------------------*/
function deleteCategory($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;
    $sql = "SELECT * FROM tbl_subcategory where category_id='$id'";
    ($run = mysqli_query($conn, $sql)) or die(mysqli_error($conn));
    $row = mysqli_num_rows($run);
    if ($row < 1) {
        $del = "delete from tbl_category where id = '$id' ";

        if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
            echo "<script>window.location.href='../category-list.php?m=6';</script>";
            exit();
        } else {
            echo "<script>window.location.href='../category-list.php?m=7';</script>";
            exit();
        }
    } else {
        echo "<script>window.location.href='../category-list.php?m=17';</script>";
        exit();
    }
}
/*--------Delete Category close-----------------------------------------------*/

/*--------Edit Category close-----------------------------------------------*/

function editCategory($conn)
{
    $id = $_POST["txtid"];
    $categoryname = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);
    $metakeyword = mysqli_real_escape_string($conn, $_POST["txtmetakeyword"]);
    $metadescription = mysqli_real_escape_string(
        $conn,
        $_POST["txtmetadescription"]
    );

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query($conn, "select * from tbl_category where id = '$id' ");
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $categoryPath;
    global $categoryPathThumb;
    $ImagePath = "$categoryPath/";
    $ImageThumbPath = "$categoryPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../category-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_category set 
	name='$categoryname',
	image='$InsertImage1',
	thumb='$InsertImagethumb1',
	url='$url',
	order_number='$order',
	metakeyword='$metakeyword',
	metadescription='$metadescription',
	status='1'
	 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";

        echo "<script>window.location.href='../category-list.php?m=4';</script>";
        exit();
    } else {
        // echo "0";
        echo "<script>window.location.href='../category-list.php?m=5';</script>";
        exit();
    }
}
/*--------Edit Category close-----------------------------------------------*/
/*--------Add Sub Category-----------------------------------------------*/

function addSubCategory($conn)
{
    $category = mysqli_real_escape_string($conn, $_POST["selcategory"]);
    $subcategoryname = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);
    $metakeyword = mysqli_real_escape_string($conn, $_POST["txtmetakeyword"]);
    $metadescription = mysqli_real_escape_string(
        $conn,
        $_POST["txtmetadescription"]
    );

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }
    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../sub-category.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $subcategoryPath;
    global $subcategoryPathThumb;
    $ImagePath = "$subcategoryPath/";
    $ImageThumbPath = "$subcategoryPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../sub-category.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }
    $sql = "insert into  tbl_subcategory(category_id,name,image,thumb,url,order_number,status,metakeyword,metadescription) values('$category','$subcategoryname','$newfile1','$imageThumbName','$url','$order','1','$metakeyword','$metadescription')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../sub-category-list.php?&m=1';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../sub-category-list.php?&m=0';</script>";
        exit();
    }
}
/*--------Add Sub Category close-----------------------------------------------*/
/*--------Delete Sub Category -----------------------------------------------*/
function deleteSubCategory($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_subcategory where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        echo "<script>window.location.href='../sub-category-list.php?&m=6';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../sub-category-list.php?&m=7';</script>";
        exit();
    }
}
/*--------Delete Sub Category close-----------------------------------------------*/

/*--------Edit Sub Category close-----------------------------------------------*/

function editSubCategory($conn)
{
    $id = $_POST["txtid"];
    $category = mysqli_real_escape_string($conn, $_POST["selcategory"]);
    $subcategoryname = mysqli_real_escape_string($conn, $_POST["txtname"]);
    $order = mysqli_real_escape_string($conn, $_POST["txtorder"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);
    $metakeyword = mysqli_real_escape_string($conn, $_POST["txtmetakeyword"]);
    $metadescription = mysqli_real_escape_string(
        $conn,
        $_POST["txtmetadescription"]
    );

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }
    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query(
        $conn,
        "select * from tbl_subcategory where id = '$id' "
    );
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $subcategoryPath;
    global $subcategoryPathThumb;
    $ImagePath = "$subcategoryPath/";
    $ImageThumbPath = "$subcategoryPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../sub-category-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_subcategory set 
	category_id='$category',	
	name='$subcategoryname',
	image='$InsertImage1',
	thumb='$InsertImagethumb1',
	order_number='$order',
	metakeyword='$metakeyword',
	metadescription='$metadescription'
	where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>window.location.href='../sub-category-list.php?&m=4';</script>";
        exit();
    } else {
        echo "<script>window.location.href='../sub-category-list.php?&m=5';</script>";
        exit();
    }
}
/*--------Edit Sub Category close-----------------------------------------------*/

/*--------Add product-----------------------------------------------*/
function addProduct($conn)
{
    $category = mysqli_real_escape_string($conn, $_POST["selcategory"]);
    $subcategory = mysqli_real_escape_string($conn, $_POST["selsubcategory"]);
    $subsubcategory = mysqli_real_escape_string(
        $conn,
        $_POST["selsubsubcategory"]
    );
    $color = mysqli_real_escape_string($conn, $_POST["selcolor"]);
    $name = mysqli_real_escape_string($conn, $_POST["txtproductname"]);
    $url = strtolower(str_replace(" ", "-", $name));
    $url = strtolower(str_replace("&", "and", $url));
    $tax = mysqli_real_escape_string($conn, $_POST["txttax"]);

    $shortdescription = mysqli_real_escape_string(
        $conn,
        $_POST["txtshortdescription"]
    );
    $skucode = mysqli_real_escape_string($conn, $_POST["txtskucode"]);
    $rand = rand(100000, 999999);
    $productId = "SH" . $rand;
    $date = date("d/m/Y H:i", time());
    $rand2 = rand(100000, 999999);
    $varientId = "SHV" . $rand2;

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }
    if (isset($_POST["txtfeatured"])) {
        $featured = 1;
    } else {
        $featured = 0;
    }
    if (isset($_POST["txtlatests"])) {
        $latest = 1;
    } else {
        $latest = 0;
    }
    if (isset($_POST["txtproductpage"])) {
        $productpage = 1;
    } else {
        $productpage = 0;
    }

    /*-------------------------Image info-----------------------------*/
    //------------------brand logo--------------------------
    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];
    $imagefleimagename2 = $_FILES["image2fleimage"]["name"];
    $imagefleimagename2_tmp = $_FILES["image2fleimage"]["tmp_name"];
    $imagefleimagename3 = $_FILES["image3fleimage"]["name"];
    $imagefleimagename3_tmp = $_FILES["image3fleimage"]["tmp_name"];
    $imagefleimagename4 = $_FILES["image4fleimage"]["name"];
    $imagefleimagename4_tmp = $_FILES["image4fleimage"]["tmp_name"];
    $imagefleimagename5 = $_FILES["image5fleimage"]["name"];
    $imagefleimagename5_tmp = $_FILES["image5fleimage"]["tmp_name"];
    $imagefleimagename6 = $_FILES["image6fleimage"]["name"];
    $imagefleimagename6_tmp = $_FILES["image6fleimage"]["tmp_name"];
    //------------------brand img 1--------------------------
    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../product.php?m=2&n=Rooms Image");
        exit(0);
    }
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
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $productPath;
    global $productPathThumb;
    $ImagePath = "$productPath/";
    $ImageThumbPath = "$productPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    //================================ Image 2 ==============================

    if ($imagefleimagename2 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename2;
        $uploadedfile = $imagefleimagename2;
        $imagefleimagename2 = stripslashes($imagefleimagename2);
        $extension = getExtension($imagefleimagename2);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename2_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename2_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile2 = $no . $imagefleimagename2;

        move_uploaded_file(
            $_FILES["image2fleimage"]["tmp_name"],
            "$ImagePath" . $newfile2
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $image2ThumbName = $tno . $imagefleimagename2;
        $imagefleimagename = "$ImageThumbPath/" . $image2ThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 2 end------------////////////
    } else {
        $newfile2 = "";
        $image2ThumbName = "";
    }

    //================================ Image 3 ==============================

    if ($imagefleimagename3 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename3;
        $uploadedfile = $imagefleimagename3;
        $imagefleimagename3 = stripslashes($imagefleimagename3);
        $extension = getExtension($imagefleimagename3);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename3_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename3_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile3 = $no . $imagefleimagename3;

        move_uploaded_file(
            $_FILES["image3fleimage"]["tmp_name"],
            "$ImagePath" . $newfile3
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $image3ThumbName = $tno . $imagefleimagename3;
        $imagefleimagename = "$ImageThumbPath/" . $image3ThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 3 end------------////////////
    } else {
        $newfile3 = "";
        $image3ThumbName = "";
    }
    //================================ Image 4 ==============================

    if ($imagefleimagename4 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename4;
        $uploadedfile = $imagefleimagename4;
        $imagefleimagename4 = stripslashes($imagefleimagename4);
        $extension = getExtension($imagefleimagename4);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename4_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename4_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile4 = $no . $imagefleimagename4;

        move_uploaded_file(
            $_FILES["image4fleimage"]["tmp_name"],
            "$ImagePath" . $newfile4
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $image4ThumbName = $tno . $imagefleimagename4;
        $imagefleimagename = "$ImageThumbPath/" . $image4ThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 4 end------------////////////
    } else {
        $newfile4 = "";
        $image4ThumbName = "";
    }

    //================================ Image 5 ==============================

    if ($imagefleimagename5 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename5;
        $uploadedfile = $imagefleimagename5;
        $imagefleimagename5 = stripslashes($imagefleimagename5);
        $extension = getExtension($imagefleimagename5);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename5_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename5_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile5 = $no . $imagefleimagename5;

        move_uploaded_file(
            $_FILES["image5fleimage"]["tmp_name"],
            "$ImagePath" . $newfile5
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $image5ThumbName = $tno . $imagefleimagename5;
        $imagefleimagename = "$ImageThumbPath/" . $image5ThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 5 end------------////////////
    } else {
        $newfile5 = "";
        $image5ThumbName = "";
    }

    //================================ Image 6 ==============================

    if ($imagefleimagename6 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename6;
        $uploadedfile = $imagefleimagename6;
        $imagefleimagename6 = stripslashes($imagefleimagename6);
        $extension = getExtension($imagefleimagename6);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename6_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename6_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile6 = $no . $imagefleimagename6;

        move_uploaded_file(
            $_FILES["image6fleimage"]["tmp_name"],
            "$ImagePath" . $newfile6
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $image6ThumbName = $tno . $imagefleimagename6;
        $imagefleimagename = "$ImageThumbPath/" . $image6ThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 6 end------------////////////
    } else {
        $newfile6 = "";
        $image6ThumbName = "";
    }

    // insert in product

    $sql = "insert into tbl_product(category_id,sub_category_id,sub_sub_category_id,productname,productid,varient_id,url,skucode,short_description,image1,thumb1,image2,thumb2,image3,thumb3,image4,thumb4,image5,thumb5,image6,thumb6,status,featured,latest,productpage,productDate,color,tax) 
	values('$category','$subcategory','$subsubcategory','$name','$productId','$varientId','$url','$skucode','$shortdescription','$newfile1','$imageThumbName','$newfile2','$image2ThumbName','$newfile3','$image3ThumbName','$newfile4','$image4ThumbName','$newfile5','$image5ThumbName','$newfile6','$image6ThumbName','$status','$featured','$latest','$productpage','$date','$color','$tax')";

    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        // $del=mysqli_query($conn,"delete from tbl_product_price where weight='0'");
        // 	$del=mysqli_query($conn,"delete from tbl_product_stock where weight='0'");
        // header('Location: ../product-list.php?m=1');
        // echo "suucess";
        // insert in price
        for ($i = 0; $i <= 8; $i++) {
            $size[$i] = mysqli_real_escape_string($conn, $_POST["size"][$i]);
            $unit[$i] = mysqli_real_escape_string($conn, $_POST["unit"][$i]);
            $price[$i] = mysqli_real_escape_string($conn, $_POST["price"][$i]);
            $mrp[$i] = mysqli_real_escape_string(
                $conn,
                $_POST["listprice"][$i]
            );
            $stock[$i] = mysqli_real_escape_string($conn, $_POST["stock"][$i]);

            if ($price[$i] != "") {
                $query = mysqli_query(
                    $conn,
                    "insert into tbl_product_price (productId,varient_id,psize,punit,pprice,pmrp,pdate,status,pqty) values ('$productId','$varientId','$size[$i]','$unit[$i]','$price[$i]','$mrp[$i]','$date','$status','$stock[$i]')"
                );

                $del = mysqli_query(
                    $conn,
                    "delete from tbl_product_price where pprice='0' or pprice=''"
                );
                // $del=mysqli_query($conn,"delete from tbl_product_stock where weight='0' or weight=''");

                header("Location: ../product-list.php?m=1");
            }
        }
    } else {
        //echo "fail";
        header("Location: ../product-list.php?m=0");
    }
}

/*--------Add product close-----------------------------------------------*/
/*--------Delete Product -----------------------------------------------*/
function deleteProduct($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;
    ($sql = mysqli_query($conn, "select * from tbl_product where id='$id'")) or
        die(mysqli_error($conn));
    $row1 = mysqli_fetch_assoc($sql);
    $productid = $row1["productid"];

    if ($sql > 0) {
        $del = mysqli_query(
            $conn,
            "delete from tbl_product_price where productId = '$productid'"
        );

        $del2 = "delete from tbl_product where productid = '$productid' ";

        if (mysqli_query($conn, $del2) or die(mysqli_error($conn))) {
            header("Location: ../product-list.php?&m=6");
        } else {
            header("Location: ../product-list.php?m=7");
        }
    } else {
        header("Location: ../product-list.php?m=7");
    }
}
/*--------Delete Product close-----------------------------------------------*/

/*--------Edit Product -----------------------------------------------*/

function editProduct($conn)
{
    $id = $_POST["txtid"];
    $txtproductid = $_POST["txtproductid"];
    $txtvarientid = $_POST["txtvarientid"];
    $category = mysqli_real_escape_string($conn, $_POST["selcategory"]);
    $subcategory = mysqli_real_escape_string($conn, $_POST["selsubcategory"]);
    $subsubcategory = mysqli_real_escape_string(
        $conn,
        $_POST["selsubsubcategory"]
    );
    $color = mysqli_real_escape_string($conn, $_POST["selcolor"]);
    $name = mysqli_real_escape_string($conn, $_POST["txtproductname"]);
    $url = strtolower(str_replace(" ", "-", $name));
    $url = strtolower(str_replace("&", "and", $url));
    $tax = mysqli_real_escape_string($conn, $_POST["txttax"]);
    $shortdescription = mysqli_real_escape_string(
        $conn,
        $_POST["txtshortdescription"]
    );
    $skucode = mysqli_real_escape_string($conn, $_POST["txtskucode"]);
    $date = date("d/m/Y H:i", time());

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }
    if (isset($_POST["txtfeatured"])) {
        $featured = 1;
    } else {
        $featured = 0;
    }
    if (isset($_POST["txtlatests"])) {
        $latest = 1;
    } else {
        $latest = 0;
    }
    if (isset($_POST["txtproductpage"])) {
        $productpage = 1;
    } else {
        $productpage = 0;
    }
    /*-------------------------Image info-----------------------------*/
    //------------------brand logo--------------------------
    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];
    $imagefleimagename2 = $_FILES["image2fleimage"]["name"];
    $imagefleimagename2_tmp = $_FILES["image2fleimage"]["tmp_name"];
    $imagefleimagename3 = $_FILES["image3fleimage"]["name"];
    $imagefleimagename3_tmp = $_FILES["image3fleimage"]["tmp_name"];
    $imagefleimagename4 = $_FILES["image4fleimage"]["name"];
    $imagefleimagename4_tmp = $_FILES["image4fleimage"]["tmp_name"];
    $imagefleimagename5 = $_FILES["image5fleimage"]["name"];
    $imagefleimagename5_tmp = $_FILES["image5fleimage"]["tmp_name"];
    $imagefleimagename6 = $_FILES["image6fleimage"]["name"];
    $imagefleimagename6_tmp = $_FILES["image6fleimage"]["tmp_name"];
    //------------------brand img 1--------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query($conn, "select * from tbl_product where id = '$id' ");
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image1"];
    $Un_Image1 = $row["thumb1"];
    $Un_OrginalImage2 = $row["image2"];
    $Un_Image2 = $row["thumb2"];
    $Un_OrginalImage3 = $row["image3"];
    $Un_Image3 = $row["thumb3"];
    $Un_OrginalImage4 = $row["image4"];
    $Un_Image4 = $row["thumb4"];
    $Un_OrginalImage5 = $row["image5"];
    $Un_Image5 = $row["thumb5"];
    $Un_OrginalImage6 = $row["image6"];
    $Un_Image6 = $row["thumb6"];
    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image1"];
    $InsertImagethumb1 = $row["thumb1"];
    $InsertImage2 = $row["image2"];
    $InsertImagethumb2 = $row["thumb2"];
    $InsertImage3 = $row["image3"];
    $InsertImagethumb3 = $row["thumb3"];
    $InsertImage4 = $row["image4"];
    $InsertImagethumb4 = $row["thumb4"];
    $InsertImage5 = $row["image5"];
    $InsertImagethumb5 = $row["thumb5"];
    $InsertImage6 = $row["image6"];
    $InsertImagethumb6 = $row["thumb6"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    $flagImage3 = 0;
    $flagImage4 = 0;
    $flagImage5 = 0;
    $flagImage6 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $productPath;
    global $productPathThumb;
    $ImagePath = "$productPath/";
    $ImageThumbPath = "$productPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }
    // ======================= image 2 =========================
    if ($imagefleimagename2 != "") {
        $flagImage2 = 2;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename2;
        $uploadedfile = $imagefleimagename2;
        $imagefleimagename2 = stripslashes($imagefleimagename2);
        $extension = getExtension($imagefleimagename2);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename2_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename2_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage2 = $no . $imagefleimagename2;

        move_uploaded_file(
            $_FILES["image2fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage2
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb2 = $tno . $imagefleimagename2;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb2;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }
    //================================ Image 2 End==============================
    /*----------------------------------------------*/

    // ======================= image 3 =========================
    if ($imagefleimagename3 != "") {
        $flagImage3 = 3;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename3;
        $uploadedfile = $imagefleimagename3;
        $imagefleimagename3 = stripslashes($imagefleimagename3);
        $extension = getExtension($imagefleimagename3);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename3_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename3_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage3 = $no . $imagefleimagename3;

        move_uploaded_file(
            $_FILES["image3fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage3
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb3 = $tno . $imagefleimagename3;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb3;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }
    //================================ Image 3 End==============================

    // ======================= image 4 =========================
    if ($imagefleimagename4 != "") {
        $flagImage4 = 4;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename4;
        $uploadedfile = $imagefleimagename4;
        $imagefleimagename4 = stripslashes($imagefleimagename4);
        $extension = getExtension($imagefleimagename4);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename4_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename4_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage4 = $no . $imagefleimagename4;

        move_uploaded_file(
            $_FILES["image4fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage4
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb4 = $tno . $imagefleimagename4;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb4;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }
    //================================ Image 4 End==============================

    // ======================= image 5 =========================
    if ($imagefleimagename5 != "") {
        $flagImage5 = 5;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename5;
        $uploadedfile = $imagefleimagename5;
        $imagefleimagename5 = stripslashes($imagefleimagename5);
        $extension = getExtension($imagefleimagename5);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename5_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename5_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage5 = $no . $imagefleimagename5;

        move_uploaded_file(
            $_FILES["image5fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage5
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb5 = $tno . $imagefleimagename5;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb5;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }
    //================================ Image 5 End==============================
    // ======================= image 6 =========================
    if ($imagefleimagename6 != "") {
        $flagImage6 = 6;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename6;
        $uploadedfile = $imagefleimagename6;
        $imagefleimagename6 = stripslashes($imagefleimagename6);
        $extension = getExtension($imagefleimagename6);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename6_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename6_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage6 = $no . $imagefleimagename6;

        move_uploaded_file(
            $_FILES["image6fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage6
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb6 = $tno . $imagefleimagename6;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb6;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }
    //================================ Image 6 End==============================

    /*----------------------------------------------*/

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_product set 
category_id='$category',
sub_category_id='$subcategory',
sub_sub_category_id='$subsubcategory',
productname='$name',
url='$url',
skucode='$skucode',
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
latest='$latest',
productpage='$productpage',
color='$color',
tax='$tax'
where id = '$id'"
    )) or die(mysqli_error($conn));

    // Delete product price and stock
    //$del= mysqli_query($conn,"delete from tbl_product_stock where productId = '$txtproductid'");
    $del = mysqli_query(
        $conn,
        "delete from tbl_product_price where productId = '$txtproductid'"
    );

    // Delete product price and stock close

    if (mysqli_affected_rows($conn) > 0) {
        if ($flagImage1 == 1) {
            if ($Un_OrginalImage1 != "") {
                unlink($ImagePath . $Un_OrginalImage1);
                unlink($ImageThumbPath . $Un_Image1);
            }
        }
        if ($flagImage2 == 2) {
            if ($Un_OrginalImage2 != "") {
                unlink($ImagePath . $Un_OrginalImage2);
                unlink($ImageThumbPath . $Un_Image2);
            }
        }
        if ($flagImage3 == 3) {
            if ($Un_OrginalImage3 != "") {
                unlink($ImagePath . $Un_OrginalImage3);
                unlink($ImageThumbPath . $Un_Image3);
            }
        }
        if ($flagImage4 == 4) {
            if ($Un_OrginalImage4 != "") {
                unlink($ImagePath . $Un_OrginalImage4);
                unlink($ImageThumbPath . $Un_Image4);
            }
        }
        if ($flagImage5 == 5) {
            if ($Un_OrginalImage5 != "") {
                unlink($ImagePath . $Un_OrginalImage5);
                unlink($ImageThumbPath . $Un_Image5);
            }
        }
        if ($flagImage6 == 6) {
            if ($Un_OrginalImage6 != "") {
                unlink($ImagePath . $Un_OrginalImage6);
                unlink($ImageThumbPath . $Un_Image6);
            }
        }

        // insert in price
        for ($i = 0; $i <= 8; $i++) {
            $size[$i] = mysqli_real_escape_string($conn, $_POST["size"][$i]);
            $unit[$i] = mysqli_real_escape_string($conn, $_POST["unit"][$i]);
            $price[$i] = mysqli_real_escape_string($conn, $_POST["price"][$i]);
            $mrp[$i] = mysqli_real_escape_string(
                $conn,
                $_POST["listprice"][$i]
            );
            $stock[$i] = mysqli_real_escape_string($conn, $_POST["stock"][$i]);

            $query99 = mysqli_query(
                $conn,
                "insert into tbl_product_price (productId,varient_id,psize,punit,pprice,pmrp,pdate,status,pqty) values ('$txtproductid','$txtvarientid','$size[$i]','$unit[$i]','$price[$i]','$mrp[$i]','$date','$status','$stock[$i]')"
            );

            $del = mysqli_query(
                $conn,
                "delete from tbl_product_price where pprice='0' or pprice=''"
            );

            // header('Location: ../cartupdate.php?id='.$id);
            // echo "success";
            header("Location: ../product-list.php?m=4");
        }

        // header('Location: ../product-list.php?m=4');
    } else {
        header("Location: ../product-list.php?m=5");
    }
}

/*--------Add Gallery-----------------------------------------------*/

function addGallery($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../gallery.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $galleryPath;
    global $galleryPathThumb;
    $ImagePath = "$galleryPath/";
    $ImageThumbPath = "$galleryPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../category.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    $sql = "insert into  tbl_gallery(name,image,thumb,status) values('$name','$newfile1','$imageThumbName','$status')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../gallery-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../gallery-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Gallery close-----------------------------------------------*/

/*--------Delete Gallery -----------------------------------------------*/
function deleteGallery($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_gallery where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../gallery-list.php?&m=6");
    } else {
        header("Location: ../gallery-list.php?m=7");
    }
}
/*--------Delete Gallery close-----------------------------------------------*/
/*--------Edit Gallery close-----------------------------------------------*/

function editGallery($conn)
{
    $id = $_POST["txtid"];
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query($conn, "select * from tbl_gallery where id = '$id' ");
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $galleryPath;
    global $galleryPathThumb;
    $ImagePath = "$galleryPath/";
    $ImageThumbPath = "$galleryPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../category-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_gallery set 
	name='$name',
	image='$InsertImage1',
	thumb='$InsertImagethumb1',
	status='$status'
	 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../gallery-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../gallery-list.php?m=5");
    }
}
/*--------Edit Gallery close-----------------------------------------------*/
/*--------Delete ContactEnquiry -----------------------------------------------*/
function deleteContactEnquiry($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_contact where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../contact-enquiry-list.php?&m=6");
    } else {
        header("Location: ../contact-enquiry-list.php?m=7");
    }
}
/*--------Delete ContactEnquiry close-----------------------------------------------*/
/*--------Delete Suggestions -----------------------------------------------*/
function deleteSuggestion($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_suggestion where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../suggestion-list.php?&m=6");
    } else {
        header("Location: ../suggestion-list.php?m=7");
    }
}
/*--------Delete suggestion list close-----------------------------------------------*/
/*--------Add Offer-----------------------------------------------*/

function addOffer($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../offer.php?m=2&n=Rooms Image");
        exit(0);
    }
    //------------------------------------------------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $offerPath;
    global $offerPathThumb;
    $ImagePath = "$offerPath/";
    $ImageThumbPath = "$offerPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../offer.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    $sql = "insert into  tbl_offer(name,image,thumb,status) values('$name','$newfile1','$imageThumbName','$status')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../offer-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../offer-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Offer close-----------------------------------------------*/

/*--------Delete Offer -----------------------------------------------*/
function deleteOffer($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_offer where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../offer-list.php?&m=6");
    } else {
        header("Location: ../offer-list.php?m=7");
    }
}
/*--------Delete Offer close-----------------------------------------------*/
/*--------Edit Banner close-----------------------------------------------*/

function editOffer($conn)
{
    $id = $_POST["txtid"];

    $name = mysqli_real_escape_string($conn, $_POST["txtname"]);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];

    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query($conn, "select * from tbl_offer where id = '$id' ");
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image"];
    $Un_Image1 = $row["thumb"];

    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image"];
    $InsertImagethumb1 = $row["thumb"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $offerPath;
    global $offerPathThumb;
    $ImagePath = "$offerPath/";
    $ImageThumbPath = "$offerPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../banner-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_offer set 
	name='$name',
	image='$InsertImage1',
	thumb='$InsertImagethumb1',
	status='$status'
	 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../offer-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../offer-list.php?m=5");
    }
}
/*--------Edit offer close-----------------------------------------------*/
/*--------Delete Order offer -----------------------------------------------*/
function deleteOrder($conn)
{
    $orderid = isset($_GET["orderid"]) ? $_GET["orderid"] : "";
    //echo "value is ".$id;

    $del = "delete from order_master where orderId = '$orderid'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../order-list.php?&m=6");
    } else {
        header("Location: ../order-list.php?m=7");
    }
}
/*--------Delete order close-----------------------------------------------*/

/*--------Add Promo code-----------------------------------------------*/

function addPromocode($conn)
{
    $couponcode = mysqli_real_escape_string($conn, $_POST["txtcouponcode"]);
    $couponvalue = mysqli_real_escape_string($conn, $_POST["txtcouponvalue"]);
    $mincartvalue = mysqli_real_escape_string($conn, $_POST["txtmincartvalue"]);
    $short_description = mysqli_real_escape_string(
        $conn,
        $_POST["txtshortdescription"]
    );

    $date = date("d/m/Y H:i", time());

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $sql = "insert into  tbl_coupon_master(coupon_code,coupon_value,short_description,date,cart_min_value,status) values('$couponcode','$couponvalue','$short_description','$date','$mincartvalue','$status')";

    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../promocode-list.php?m=1");
        //echo "success";
    } else {
        header("Location: ../promocode-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add promocode close-----------------------------------------------*/

/*--------Delete deletePromocode -----------------------------------------------*/
function deletePromocode($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;
    $del = "delete from tbl_coupon_master where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../promocode-list.php?&m=6");
    } else {
        header("Location: ../promocode-list.php?m=7");
    }
}
/*--------promocode.php close-----------------------------------------------*/

/*--------Edit editPromocode-----------------------------------------------*/

function editPromocode($conn)
{
    $id = $_POST["txtid"];
    $couponcode = mysqli_real_escape_string($conn, $_POST["txtcouponcode"]);
    $couponvalue = mysqli_real_escape_string($conn, $_POST["txtcouponvalue"]);
    $mincartvalue = mysqli_real_escape_string($conn, $_POST["txtmincartvalue"]);
    $short_description = mysqli_real_escape_string(
        $conn,
        $_POST["txtshortdescription"]
    );

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_coupon_master set 
	coupon_code='$couponcode',
	coupon_value='$couponvalue',
	short_description='$short_description',
	cart_min_value='$mincartvalue',
	status='$status'
	 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../promocode-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../promocode-list.php?m=5");
    }
}
/*--------Edit promocode close-----------------------------------------------*/
/*--------Delete promocode user -----------------------------------------------*/
function deletePromoCodeUser($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_coupon_user where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../promocode-user-list.php?&m=6");
    } else {
        header("Location: ../promocode-user-list.php?m=7");
    }
}
/*--------Delete promocode user close-----------------------------------------------*/

/*--------Active Review -----------------------------------------------*/
function ActiveReview($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_review set active_status='1' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../review-list.php?&m=6");
    } else {
        header("Location: ../review-list.php?m=7");
    }
}
/*--------Active Review close-----------------------------------------------*/
/*--------Deactive Review -----------------------------------------------*/
function DeactiveReview($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "update tbl_review set active_status='0' where id = '$id'";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../review-list.php?&m=6");
    } else {
        header("Location: ../review-list.php?m=7");
    }
}
/*--------Deactive Review close-----------------------------------------------*/
/*--------Add Invoice-----------------------------------------------*/

function addInvoice($conn)
{
    $name = mysqli_real_escape_string($conn, $_POST["selvendor"]);
    $plan = mysqli_real_escape_string($conn, $_POST["selplan"]);
    $beforeamount = mysqli_real_escape_string($conn, $_POST["txtbeforeamount"]);
    $afteramount = mysqli_real_escape_string($conn, $_POST["txtafteramount"]);
    $discount = mysqli_real_escape_string($conn, $_POST["txtdiscount"]);
    $startdate = mysqli_real_escape_string($conn, $_POST["txtstartdate"]);
    $enddate = mysqli_real_escape_string($conn, $_POST["txtenddate"]);
    $paymentmode = mysqli_real_escape_string($conn, $_POST["paymentmode"]);

    $rand = rand(100000, 999999);
    $tempinvoiceid = "TEMP" . $rand;
    $date = date("d/m/Y H:i", time());
    $rand2 = rand(100000, 999999);
    $invoice_number = "HYMRT" . $rand2;

    $sql = "insert into tbl_invoice(temp_invoiceid,vendor_id,invoice_number,status,paymentmode,startdate,enddate,plan,beforeamount,invoice_date,afteramount,discount) values('$tempinvoiceid','$name','$invoice_number','1','$paymentmode','$startdate','$enddate','$plan','$beforeamount','$date','$afteramount','$discount')";

    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        header("Location: ../invoice-list.php?m=1");

        //echo "success";
    } else {
        header("Location: ../invoice-list.php?m=0");
        //echo "fail";
    }
}
/*--------Add Invoice close-----------------------------------------------*/
/*--------Delete Invoice -----------------------------------------------*/
function deleteInvoice($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    //echo "value is ".$id;

    $del = "delete from tbl_invoice where id = '$id' ";

    if (mysqli_query($conn, $del) or die(mysqli_error($conn))) {
        header("Location: ../invoice-list.php?&m=6");
    } else {
        header("Location: ../invoice-list.php?m=7");
    }
}
/*--------Delete Invoice close-----------------------------------------------*/

/*--------Edit Invoice close-----------------------------------------------*/

function editInvoice($conn)
{
    $id = $_POST["txtid"];
    $name = mysqli_real_escape_string($conn, $_POST["selvendor"]);
    $plan = mysqli_real_escape_string($conn, $_POST["selplan"]);
    $beforeamount = mysqli_real_escape_string($conn, $_POST["txtbeforeamount"]);
    $afteramount = mysqli_real_escape_string($conn, $_POST["txtafteramount"]);
    $discount = mysqli_real_escape_string($conn, $_POST["txtdiscount"]);
    $startdate = mysqli_real_escape_string($conn, $_POST["txtstartdate"]);
    $enddate = mysqli_real_escape_string($conn, $_POST["txtenddate"]);
    $paymentmode = mysqli_real_escape_string($conn, $_POST["paymentmode"]);

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_invoice set 
	vendor_id='$name',	
	plan='$plan',
	beforeamount='$beforeamount',
	afteramount='$afteramount',
	discount='$discount',
	startdate='$startdate',
	enddate='$enddate',
	paymentmode='$paymentmode'
	where id = '$id'"
    )) or die(mysqli_error($conn));

    if (mysqli_affected_rows($conn) > 0) {
        header("Location: ../invoice-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../invoice-list.php?m=5");
    }
}
/*--------Edit Invoice close-----------------------------------------------*/

/*--------Add product Varient-----------------------------------------------*/
function addProductVarient($conn)
{
    $varientId = mysqli_real_escape_string($conn, $_POST["txtvarientid"]);
    $category = mysqli_real_escape_string($conn, $_POST["selcategory"]);
    $subcategory = mysqli_real_escape_string($conn, $_POST["selsubcategory"]);
    $subsubcategory = mysqli_real_escape_string(
        $conn,
        $_POST["selsubsubcategory"]
    );
    $color = mysqli_real_escape_string($conn, $_POST["selcolor"]);
    $name = mysqli_real_escape_string($conn, $_POST["txtproductname"]);
    $url = strtolower(str_replace(" ", "-", $name));
    $url = strtolower(str_replace("&", "and", $url));

    $shortdescription = mysqli_real_escape_string(
        $conn,
        $_POST["txtshortdescription"]
    );
    $skucode = mysqli_real_escape_string($conn, $_POST["txtskucode"]);
    $rand = rand(100000, 999999);
    $productId = "SH" . $rand;
    $date = date("d/m/Y H:i", time());
    //    $rand2=rand(100000,999999);
    // $varientId="SHV".$rand2;

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }
    if (isset($_POST["txtfeatured"])) {
        $featured = 1;
    } else {
        $featured = 0;
    }
    if (isset($_POST["txtlatests"])) {
        $latest = 1;
    } else {
        $latest = 0;
    }
    if (isset($_POST["txtproductpage"])) {
        $productpage = 1;
    } else {
        $productpage = 0;
    }

    /*-------------------------Image info-----------------------------*/
    //------------------brand logo--------------------------
    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];
    $imagefleimagename2 = $_FILES["image2fleimage"]["name"];
    $imagefleimagename2_tmp = $_FILES["image2fleimage"]["tmp_name"];
    $imagefleimagename3 = $_FILES["image3fleimage"]["name"];
    $imagefleimagename3_tmp = $_FILES["image3fleimage"]["tmp_name"];
    $imagefleimagename4 = $_FILES["image4fleimage"]["name"];
    $imagefleimagename4_tmp = $_FILES["image4fleimage"]["tmp_name"];
    $imagefleimagename5 = $_FILES["image5fleimage"]["name"];
    $imagefleimagename5_tmp = $_FILES["image5fleimage"]["tmp_name"];
    $imagefleimagename6 = $_FILES["image6fleimage"]["name"];
    $imagefleimagename6_tmp = $_FILES["image6fleimage"]["tmp_name"];
    //------------------brand img 1--------------------------
    //---------------------condition--check dots------------------------
    $dots = substr_count($imagefleimagename1, ".");
    if ($dots > 1) {
        header("Location: ../product.php?m=2&n=Rooms Image");
        exit(0);
    }
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
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////

    global $productPath;
    global $productPathThumb;
    $ImagePath = "$productPath/";
    $ImageThumbPath = "$productPathThumb/";
    //================================ Image 1 ==============================

    if ($imagefleimagename1 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $newfile1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $imageThumbName = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $imageThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 1 end------------////////////
    } else {
        $newfile1 = "";
        $imageThumbName = "";
    }

    //================================ Image 2 ==============================

    if ($imagefleimagename2 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename2;
        $uploadedfile = $imagefleimagename2;
        $imagefleimagename2 = stripslashes($imagefleimagename2);
        $extension = getExtension($imagefleimagename2);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename2_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename2_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile2 = $no . $imagefleimagename2;

        move_uploaded_file(
            $_FILES["image2fleimage"]["tmp_name"],
            "$ImagePath" . $newfile2
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $image2ThumbName = $tno . $imagefleimagename2;
        $imagefleimagename = "$ImageThumbPath/" . $image2ThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 2 end------------////////////
    } else {
        $newfile2 = "";
        $image2ThumbName = "";
    }

    //================================ Image 3 ==============================

    if ($imagefleimagename3 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename3;
        $uploadedfile = $imagefleimagename3;
        $imagefleimagename3 = stripslashes($imagefleimagename3);
        $extension = getExtension($imagefleimagename3);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename3_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename3_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile3 = $no . $imagefleimagename3;

        move_uploaded_file(
            $_FILES["image3fleimage"]["tmp_name"],
            "$ImagePath" . $newfile3
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $image3ThumbName = $tno . $imagefleimagename3;
        $imagefleimagename = "$ImageThumbPath/" . $image3ThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 3 end------------////////////
    } else {
        $newfile3 = "";
        $image3ThumbName = "";
    }
    //================================ Image 4 ==============================

    if ($imagefleimagename4 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename4;
        $uploadedfile = $imagefleimagename4;
        $imagefleimagename4 = stripslashes($imagefleimagename4);
        $extension = getExtension($imagefleimagename4);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename4_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename4_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile4 = $no . $imagefleimagename4;

        move_uploaded_file(
            $_FILES["image4fleimage"]["tmp_name"],
            "$ImagePath" . $newfile4
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $image4ThumbName = $tno . $imagefleimagename4;
        $imagefleimagename = "$ImageThumbPath/" . $image4ThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 4 end------------////////////
    } else {
        $newfile4 = "";
        $image4ThumbName = "";
    }

    //================================ Image 5 ==============================

    if ($imagefleimagename5 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename5;
        $uploadedfile = $imagefleimagename5;
        $imagefleimagename5 = stripslashes($imagefleimagename5);
        $extension = getExtension($imagefleimagename5);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename5_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename5_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile5 = $no . $imagefleimagename5;

        move_uploaded_file(
            $_FILES["image5fleimage"]["tmp_name"],
            "$ImagePath" . $newfile5
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $image5ThumbName = $tno . $imagefleimagename5;
        $imagefleimagename = "$ImageThumbPath/" . $image5ThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 5 end------------////////////
    } else {
        $newfile5 = "";
        $image5ThumbName = "";
    }

    //================================ Image 6 ==============================

    if ($imagefleimagename6 != "") {
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename6;
        $uploadedfile = $imagefleimagename6;
        $imagefleimagename6 = stripslashes($imagefleimagename6);
        $extension = getExtension($imagefleimagename6);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product.php?m=3");
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename6_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename6_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setheight = 400;
        $ratio = 0.0;
        /*if($width>$setwidth){
				$ratio=$setwidth/$width;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				$newheight = $height ;
            	$newwidth = $width ;
			 }*/
        if ($height > $setheight) {
            $ratio = $setheight / $height;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        $newfile6 = $no . $imagefleimagename6;

        move_uploaded_file(
            $_FILES["image6fleimage"]["tmp_name"],
            "$ImagePath" . $newfile6
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $image6ThumbName = $tno . $imagefleimagename6;
        $imagefleimagename = "$ImageThumbPath/" . $image6ThumbName;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);

        //////---------------End Image 6 end------------////////////
    } else {
        $newfile6 = "";
        $image6ThumbName = "";
    }

    // insert in product

    $sql = "insert into tbl_product(category_id,sub_category_id,sub_sub_category_id,productname,productid,varient_id,url,skucode,short_description,image1,thumb1,image2,thumb2,image3,thumb3,image4,thumb4,image5,thumb5,image6,thumb6,status,featured,latest,productpage,productDate,color) 
	values('$category','$subcategory','$subsubcategory','$name','$productId','$varientId','$url','$skucode','$shortdescription','$newfile1','$imageThumbName','$newfile2','$image2ThumbName','$newfile3','$image3ThumbName','$newfile4','$image4ThumbName','$newfile5','$image5ThumbName','$newfile6','$image6ThumbName','$status','$featured','$latest','$productpage','$date','$color')";

    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        // $del=mysqli_query($conn,"delete from tbl_product_price where weight='0'");
        // 	$del=mysqli_query($conn,"delete from tbl_product_stock where weight='0'");
        // header('Location: ../product-list.php?m=1');
        // echo "suucess";
        // insert in price
        for ($i = 0; $i <= 8; $i++) {
            $size[$i] = mysqli_real_escape_string($conn, $_POST["size"][$i]);
            $unit[$i] = mysqli_real_escape_string($conn, $_POST["unit"][$i]);
            $price[$i] = mysqli_real_escape_string($conn, $_POST["price"][$i]);
            $mrp[$i] = mysqli_real_escape_string(
                $conn,
                $_POST["listprice"][$i]
            );
            $stock[$i] = mysqli_real_escape_string($conn, $_POST["stock"][$i]);

            if ($price[$i] != "") {
                $query = mysqli_query(
                    $conn,
                    "insert into tbl_product_price (productId,varient_id,psize,punit,pprice,pmrp,pdate,status,pqty) values ('$productId','$varientId','$size[$i]','$unit[$i]','$price[$i]','$mrp[$i]','$date','$status','$stock[$i]')"
                );

                $del = mysqli_query(
                    $conn,
                    "delete from tbl_product_price where pprice='0' or pprice=''"
                );
                // $del=mysqli_query($conn,"delete from tbl_product_stock where weight='0' or weight=''");

                header(
                    "Location: ../product-varient-list.php?m=1&varientid=" .
                        $varientId
                );
            }
        }
    } else {
        //echo "fail";
        header(
            "Location: ../product-varient-list.php?m=0&varientid=" . $varientId
        );
    }
}

/*--------Add product Varient close-----------------------------------------------*/
/*--------Delete Product Varient -----------------------------------------------*/
function deleteProductVarient($conn)
{
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $varientId = isset($_GET["varientid"]) ? $_GET["varientid"] : "";
    //echo "value is ".$id;
    ($sql = mysqli_query($conn, "select * from tbl_product where id='$id'")) or
        die(mysqli_error($conn));
    $row1 = mysqli_fetch_assoc($sql);
    $productid = $row1["productid"];

    if ($sql > 0) {
        $del = mysqli_query(
            $conn,
            "delete from tbl_product_price where productId = '$productid'"
        );

        $del2 = "delete from tbl_product where productid = '$productid' ";

        if (mysqli_query($conn, $del2) or die(mysqli_error($conn))) {
            header(
                "Location: ../product-varient-list.php?&m=6&varientid=" .
                    $varientId
            );
        } else {
            header(
                "Location: ../product-varient-list.php?m=7&varientid=" .
                    $varientId
            );
        }
    } else {
        header(
            "Location: ../product-varient-list.php?m=7&varientid=" . $varientId
        );
    }
}
/*--------Delete Product Varient close-----------------------------------------------*/

/*--------Edit Product Varient -----------------------------------------------*/

function editProductVarient($conn)
{
    $id = $_POST["txtid"];
    $txtproductid = $_POST["txtproductid"];
    $varientId = mysqli_real_escape_string($conn, $_POST["txtvarientid"]);
    $varientid = mysqli_real_escape_string($conn, $_POST["txtvarientid"]);
    $category = mysqli_real_escape_string($conn, $_POST["selcategory"]);
    $subcategory = mysqli_real_escape_string($conn, $_POST["selsubcategory"]);
    $subsubcategory = mysqli_real_escape_string(
        $conn,
        $_POST["selsubsubcategory"]
    );
    $color = mysqli_real_escape_string($conn, $_POST["selcolor"]);
    $name = mysqli_real_escape_string($conn, $_POST["txtproductname"]);
    $url = strtolower(str_replace(" ", "-", $name));
    $url = strtolower(str_replace("&", "and", $url));
    $shortdescription = mysqli_real_escape_string(
        $conn,
        $_POST["txtshortdescription"]
    );
    $skucode = mysqli_real_escape_string($conn, $_POST["txtskucode"]);
    $date = date("d/m/Y H:i", time());

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }
    if (isset($_POST["txtfeatured"])) {
        $featured = 1;
    } else {
        $featured = 0;
    }
    if (isset($_POST["txtlatests"])) {
        $latest = 1;
    } else {
        $latest = 0;
    }
    if (isset($_POST["txtproductpage"])) {
        $productpage = 1;
    } else {
        $productpage = 0;
    }
    /*-------------------------Image info-----------------------------*/
    //------------------brand logo--------------------------
    $imagefleimagename1 = $_FILES["image1fleimage"]["name"];
    $imagefleimagename1_tmp = $_FILES["image1fleimage"]["tmp_name"];
    $imagefleimagename2 = $_FILES["image2fleimage"]["name"];
    $imagefleimagename2_tmp = $_FILES["image2fleimage"]["tmp_name"];
    $imagefleimagename3 = $_FILES["image3fleimage"]["name"];
    $imagefleimagename3_tmp = $_FILES["image3fleimage"]["tmp_name"];
    $imagefleimagename4 = $_FILES["image4fleimage"]["name"];
    $imagefleimagename4_tmp = $_FILES["image4fleimage"]["tmp_name"];
    $imagefleimagename5 = $_FILES["image5fleimage"]["name"];
    $imagefleimagename5_tmp = $_FILES["image5fleimage"]["tmp_name"];
    $imagefleimagename6 = $_FILES["image6fleimage"]["name"];
    $imagefleimagename6_tmp = $_FILES["image6fleimage"]["tmp_name"];
    //------------------brand img 1--------------------------
    //------now clear all condtion is good-------------if two image not avale-----
    function getExtension($str)
    {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    // ------------- get all images  name  -------------------------
    $sel = mysqli_query($conn, "select * from tbl_product where id = '$id' ");
    $row = mysqli_fetch_assoc($sel);
    $Un_OrginalImage1 = $row["image1"];
    $Un_Image1 = $row["thumb1"];
    $Un_OrginalImage2 = $row["image2"];
    $Un_Image2 = $row["thumb2"];
    $Un_OrginalImage3 = $row["image3"];
    $Un_Image3 = $row["thumb3"];
    $Un_OrginalImage4 = $row["image4"];
    $Un_Image4 = $row["thumb4"];
    $Un_OrginalImage5 = $row["image5"];
    $Un_Image5 = $row["thumb5"];
    $Un_OrginalImage6 = $row["image6"];
    $Un_Image6 = $row["thumb6"];
    /*--------------insert record varible record------------*/
    $InsertImage1 = $row["image1"];
    $InsertImagethumb1 = $row["thumb1"];
    $InsertImage2 = $row["image2"];
    $InsertImagethumb2 = $row["thumb2"];
    $InsertImage3 = $row["image3"];
    $InsertImagethumb3 = $row["thumb3"];
    $InsertImage4 = $row["image4"];
    $InsertImagethumb4 = $row["thumb4"];
    $InsertImage5 = $row["image5"];
    $InsertImagethumb5 = $row["thumb5"];
    $InsertImage6 = $row["image6"];
    $InsertImagethumb6 = $row["thumb6"];

    /*---------------------------*/
    $flagImage1 = 0;
    $flagImage2 = 0;
    $flagImage3 = 0;
    $flagImage4 = 0;
    $flagImage5 = 0;
    $flagImage6 = 0;
    // ------------- get all images  name  -------------------------
    $no = rand(1, 999);
    $tno = rand(1, 999);
    ///////--------------Upload Logo Image-----------------////////////
    global $productPath;
    global $productPathThumb;
    $ImagePath = "$productPath/";
    $ImageThumbPath = "$productPathThumb/";
    //================================ Image 1 ==============================
    if ($imagefleimagename1 != "") {
        $flagImage1 = 1;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename1;
        $uploadedfile = $imagefleimagename1;
        $imagefleimagename1 = stripslashes($imagefleimagename1);
        $extension = getExtension($imagefleimagename1);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename1_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage1 = $no . $imagefleimagename1;

        move_uploaded_file(
            $_FILES["image1fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage1
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb1 = $tno . $imagefleimagename1;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb1;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }
    // ======================= image 2 =========================
    if ($imagefleimagename2 != "") {
        $flagImage2 = 2;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename2;
        $uploadedfile = $imagefleimagename2;
        $imagefleimagename2 = stripslashes($imagefleimagename2);
        $extension = getExtension($imagefleimagename2);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename2_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename2_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage2 = $no . $imagefleimagename2;

        move_uploaded_file(
            $_FILES["image2fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage2
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb2 = $tno . $imagefleimagename2;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb2;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }
    //================================ Image 2 End==============================
    /*----------------------------------------------*/

    // ======================= image 3 =========================
    if ($imagefleimagename3 != "") {
        $flagImage3 = 3;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename3;
        $uploadedfile = $imagefleimagename3;
        $imagefleimagename3 = stripslashes($imagefleimagename3);
        $extension = getExtension($imagefleimagename3);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename3_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename3_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage3 = $no . $imagefleimagename3;

        move_uploaded_file(
            $_FILES["image3fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage3
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb3 = $tno . $imagefleimagename3;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb3;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }
    //================================ Image 3 End==============================

    // ======================= image 4 =========================
    if ($imagefleimagename4 != "") {
        $flagImage4 = 4;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename4;
        $uploadedfile = $imagefleimagename4;
        $imagefleimagename4 = stripslashes($imagefleimagename4);
        $extension = getExtension($imagefleimagename4);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename4_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename4_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage4 = $no . $imagefleimagename4;

        move_uploaded_file(
            $_FILES["image4fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage4
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb4 = $tno . $imagefleimagename4;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb4;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }
    //================================ Image 4 End==============================

    // ======================= image 5 =========================
    if ($imagefleimagename5 != "") {
        $flagImage5 = 5;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename5;
        $uploadedfile = $imagefleimagename5;
        $imagefleimagename5 = stripslashes($imagefleimagename5);
        $extension = getExtension($imagefleimagename5);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename5_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename5_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage5 = $no . $imagefleimagename5;

        move_uploaded_file(
            $_FILES["image5fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage5
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb5 = $tno . $imagefleimagename5;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb5;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }
    //================================ Image 5 End==============================
    // ======================= image 6 =========================
    if ($imagefleimagename6 != "") {
        $flagImage6 = 6;
        //check if image has 2 dot then exit program
        //$catfile = $imagefleimagename1;
        $image = $imagefleimagename6;
        $uploadedfile = $imagefleimagename6;
        $imagefleimagename6 = stripslashes($imagefleimagename6);
        $extension = getExtension($imagefleimagename6);
        $extension = strtolower($extension);
        /*-------------------------------*/
        /*---------------------------------*/
        if (
            $extension != "jpg" &&
            $extension != "jpeg" &&
            $extension != "png"
        ) {
            header("Location: ../product-list.php?m=16&id=" . $id);
            exit();
        }
        if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $imagefleimagename6_tmp;
            $src = imagecreatefromjpeg($uploadedfile);
        } elseif ($extension == "png") {
            $uploadedfile = $imagefleimagename6_tmp;
            $src = imagecreatefrompng($uploadedfile);
        } else {
            $src = imagecreatefromgif($uploadedfile);
        }
        list($width, $height) = getimagesize($uploadedfile);
        $setwidth = 400;
        $ratio = 0.0;
        if ($width > $setwidth) {
            $ratio = $setwidth / $width;
            $newheight = $height * $ratio; // Reset height to match scaled image
            $newwidth = $width * $ratio;
        } else {
            $newheight = $height;
            $newwidth = $width;
        }
        /*if($height>$setheight){
				$ratio=$setheight/$height;
				$newheight = $height * $ratio;    // Reset height to match scaled image
            	$newwidth = $width * $ratio; 
			 }else{
				  $newheight =350;
			 }*/

        $InsertImage6 = $no . $imagefleimagename6;

        move_uploaded_file(
            $_FILES["image6fleimage"]["tmp_name"],
            "$ImagePath" . $InsertImage6
        );

        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled(
            $tmp,
            $src,
            0,
            0,
            0,
            0,
            $newwidth,
            $newheight,
            $width,
            $height
        );
        $InsertImagethumb6 = $tno . $imagefleimagename6;
        $imagefleimagename = "$ImageThumbPath/" . $InsertImagethumb6;

        imagejpeg($tmp, $imagefleimagename, 100);
        imagedestroy($src);
        imagedestroy($tmp);
        //////---------------End Upload Brand Image------------////////////
    }
    //================================ Image 6 End==============================

    /*----------------------------------------------*/

    ($sqladd = mysqli_query(
        $conn,
        "update tbl_product set 
category_id='$category',
sub_category_id='$subcategory',
sub_sub_category_id='$subsubcategory',
productname='$name',
url='$url',
skucode='$skucode',
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
latest='$latest',
productpage='$productpage',
color='$color'
where id = '$id'"
    )) or die(mysqli_error($conn));

    // Delete product price and stock
    //$del= mysqli_query($conn,"delete from tbl_product_stock where productId = '$txtproductid'");
    $del = mysqli_query(
        $conn,
        "delete from tbl_product_price where productId = '$txtproductid'"
    );

    // Delete product price and stock close

    if (mysqli_affected_rows($conn) > 0) {
        if ($flagImage1 == 1) {
            if ($Un_OrginalImage1 != "") {
                unlink($ImagePath . $Un_OrginalImage1);
                unlink($ImageThumbPath . $Un_Image1);
            }
        }
        if ($flagImage2 == 2) {
            if ($Un_OrginalImage2 != "") {
                unlink($ImagePath . $Un_OrginalImage2);
                unlink($ImageThumbPath . $Un_Image2);
            }
        }
        if ($flagImage3 == 3) {
            if ($Un_OrginalImage3 != "") {
                unlink($ImagePath . $Un_OrginalImage3);
                unlink($ImageThumbPath . $Un_Image3);
            }
        }
        if ($flagImage4 == 4) {
            if ($Un_OrginalImage4 != "") {
                unlink($ImagePath . $Un_OrginalImage4);
                unlink($ImageThumbPath . $Un_Image4);
            }
        }
        if ($flagImage5 == 5) {
            if ($Un_OrginalImage5 != "") {
                unlink($ImagePath . $Un_OrginalImage5);
                unlink($ImageThumbPath . $Un_Image5);
            }
        }
        if ($flagImage6 == 6) {
            if ($Un_OrginalImage6 != "") {
                unlink($ImagePath . $Un_OrginalImage6);
                unlink($ImageThumbPath . $Un_Image6);
            }
        }

        // insert in price
        for ($i = 0; $i <= 8; $i++) {
            $size[$i] = mysqli_real_escape_string($conn, $_POST["size"][$i]);
            $unit[$i] = mysqli_real_escape_string($conn, $_POST["unit"][$i]);
            $price[$i] = mysqli_real_escape_string($conn, $_POST["price"][$i]);
            $mrp[$i] = mysqli_real_escape_string(
                $conn,
                $_POST["listprice"][$i]
            );
            $stock[$i] = mysqli_real_escape_string($conn, $_POST["stock"][$i]);

            $query99 = mysqli_query(
                $conn,
                "insert into tbl_product_price (productId,varient_id,psize,punit,pprice,pmrp,pdate,status,pqty) values ('$txtproductid','$varientId','$size[$i]','$unit[$i]','$price[$i]','$mrp[$i]','$date','$status','$stock[$i]')"
            );

            $del = mysqli_query(
                $conn,
                "delete from tbl_product_price where pprice='0' or pprice=''"
            );

            // header('Location: ../cartupdate.php?id='.$id);
            // echo "success";
            header(
                "Location: ../product-varient-list.php?m=4&varientid=" .
                    $varientId
            );
        }

        // header('Location: ../product-list.php?m=4');
    } else {
        header(
            "Location: ../product-varient-list.php?m=5&varientid=" . $varientId
        );
    }
}

/*--------Edit Product Varient-----------------------------------------------*/
?>		