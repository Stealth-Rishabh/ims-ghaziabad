<?php 
require_once '../dbc.php';
// require_once 'common-function.php'; 

$action3 = isset($_GET['action3']) ? $_GET['action3'] : '';

switch($action3) {
    case 'activePatientCare':
        activePatientCare($conn);
        break;
    case 'deactivePatientCare':
        deactivePatientCare($conn);
        break;        
    default:
        echo "Invalid action.";
        exit;
}

/* Active Patient Care active --*/
function activePatientCare($conn) {
    $id = isset($_GET['id']) ? $_GET['id'] : "";

    if (empty($id)) {
        echo "Invalid ID.";
        exit;
    }

    $query = "UPDATE tbl_patient_care_detail SET status='1' WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        clearCache();
        $uniqueParam = random_int(100000, 999999);
        echo "<script>window.location.href='../patient-care-list.php?&m=64&cache_bust={$uniqueParam}';</script>";
        exit;
    } else {
        error_log("Error activating patient care: " . mysqli_error($conn));
        echo "<script>window.location.href='../patient-care-list.php?m=64';</script>";
        exit;
    }
}

/* Patient care De-active --*/
function deactivePatientCare($conn) {
    $id = isset($_GET['id']) ? $_GET['id'] : "";

    if (empty($id)) {
        echo "Invalid ID.";
        exit;
    }

    $query = "UPDATE tbl_patient_care_detail SET status='0' WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        clearCache();
        $uniqueParam = random_int(100000, 999999);
        echo "<script>window.location.href='../patient-care-list.php?&m=65&cache_bust={$uniqueParam}';</script>";
        exit;
    } else {
        error_log("Error deactivating patient care: " . mysqli_error($conn));
        echo "<script>window.location.href='../patient-care-list.php?m=65';</script>";
        exit;
    }
}

function clearCache() {
    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
    header("Pragma: no-cache"); // HTTP 1.0.
    header("Expires: 0"); // Proxies.
}
?>
