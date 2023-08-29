<?php
include("config.php");
session_start();

if (isset($_POST['updt']) && $_SESSION['loggeduserid']) {
    $updateFields = array();
    
    if (!empty($_POST['fname'])) {
        $updateFields[] = "firstname='" . $_POST['fname'] . "'";
    }
    if (!empty($_POST['lname'])) {
        $updateFields[] = "lastname='" . $_POST['lname'] . "'";
    }
    if (!empty($_POST['cemail'])) {
        $updateFields[] = "email='" . $_POST['cemail'] . "'";
    }
    if (!empty($_POST['cdob'])) {
        $updateFields[] = "dob='" . $_POST['cdob'] . "'";
    }
    if (!empty($_POST['cpass'])) {
        $updateFields[] = "password='" . $_POST['cpass'] . "'";
    }
    if (!empty($_POST['cnpass'])) {
        $updateFields[] = "confirm='" . $_POST['cnpass'] . "'";
    }
    if (!empty($_POST['cphn'])) {
        $updateFields[] = "phone='" . $_POST['cphn'] . "'"; 
    }

    $userid = $_SESSION['loggeduserid'];
    $updtf = implode(', ', $updateFields);
    $q1 = "UPDATE reg SET $updtf WHERE id=$userid"; 
    $rq = mysqli_query($db, $q1);
    
    if ($rq) {
        $res = [
            'status' => 108,
            'message' => 'Updated successfully'
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 109,
            'message' => 'Not updated'
        ];
        echo json_encode($res);
        return;
    }
} else {
    $res = [
        'status' => 110,
        'message' => 'something went wrong'
    ];
    echo json_encode($res);
    return;
}
?>
