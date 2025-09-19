<?php
ob_start();
include "../dbc.php";
include "common-function.php";
$action = isset($_POST["action"]) ? $_POST["action"] : "";
switch ($action) {
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
    case "addResearchPaper":
        addResearchPaper($conn);
        break;
    case "editResearchPaper":
        editResearchPaper($conn);
        break;     
    // new

    default:
}
$action2 = isset($_GET["action2"]) ? $_GET["action2"] : "";
switch ($action2) {
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
    case "deleteResearchPaper":
        deleteResearchPaper($conn);
        break;    
    // new close
   
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
    default:
}

// new start
/*--------AddResearchPaper-----------------------------------------------*/

function addResearchPaper($conn)
{
    $year = mysqli_real_escape_string($conn, $_POST["txtselyear"]);
    $papername = mysqli_real_escape_string($conn, $_POST["txtpapername"]);
    $journalname = mysqli_real_escape_string($conn, $_POST["txtjournalname"]);
    $indexing = mysqli_real_escape_string($conn, $_POST["txtindexing"]);
    $link = mysqli_real_escape_string($conn, $_POST["txtlink"]);
    $otherfaculty = mysqli_real_escape_string($conn, $_POST["txtotherfaculty"]);
    $date = date("d/m/Y H:i", time());
    $faculty      = "";
    foreach($_POST['selfaculty'] as $item) {
        $faculty.= $item.",";
    }
    $faculty = substr($faculty,0,strlen($faculty)-1);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }

    $sql = "insert into tbl_research_paper(faculty_id,date,year,name_paper,name_journal,indexing,link,status,admin,other_faculty) values('$faculty','$date','$year','$papername','$journalname','$indexing','$link','$status','1','$otherfaculty')";
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
     $otherfaculty = mysqli_real_escape_string($conn, $_POST["txtotherfaculty"]);
    $faculty      = "";
    foreach($_POST['selfaculty'] as $item) {
        $faculty.= $item.",";
    }
    $faculty = substr($faculty,0,strlen($faculty)-1);

    if (isset($_POST["txtstatus"])) {
        $status = 1;
    } else {
        $status = 0;
    }


    ($sqladd = mysqli_query(
        $conn,
        "update tbl_research_paper set 
            year='$year',
            faculty_id='$faculty',
            name_paper='$papername',
            name_journal='$journalname',
            indexing='$indexing',
            link='$link',
            status='$status',
            admin='1',
            other_faculty='$otherfaculty'
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
    $description = mysqli_real_escape_string($conn, $_POST["txtdescription"]);
    $email = mysqli_real_escape_string($conn, $_POST["txtemail"]);
    $password = md5($_REQUEST["txtpassword"]);
    $showpassword = mysqli_real_escape_string($conn, $_POST["txtpassword"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);


   // $sqlcheck="select * from tbl_faculty_member where email='$email'";
   // $runcheck=mysqli_query($conn,$sqlcheck) or die(mysqli_error($conn));
   // $rowcheck=mysqli_num_rows($runcheck);
   //  if($rowcheck==1)
   // {
   //  header("Location: ../faculty-member.php?m66");
   //  exit();
   // }

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

    $sql = "insert into  tbl_faculty_member(name,faculty_id,designation,image,thumb,status,email,password,show_password,description,url) values('$name','$facultytid','$designation','$newfile1','$imageThumbName','$status','$email','$password','$showpassword','$description','$url')";
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
    $password = md5($_REQUEST["txtpassword"]);
    $showpassword = mysqli_real_escape_string($conn, $_POST["txtpassword"]);
    $description = mysqli_real_escape_string($conn, $_POST["txtdescription"]);
    $url = mysqli_real_escape_string($conn, $_POST["txturl"]);

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
            password='$password',
            show_password='$showpassword',
            description='$description',
            url='$url'
			 where id = '$id'"
    )) or die(mysqli_error($conn));
    if (mysqli_affected_rows($conn) > 0) {
        // echo "1";
        header("Location: ../faculty-member-list.php?m=4");
    } else {
        // echo "0";
        header("Location: ../faculty-member-list.php?m=5");
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
        echo "<script>window.location.href='../home-counter-list.php?m=1';</script>";
         exit();
    } else {
        echo "<script>window.location.href='../home-counter-list.php?m=0';</script>";
         exit();
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

?>		