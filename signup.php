<?php
include("config.php");

if(isset($_POST['save_reg'])) {
    $fname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lname = mysqli_real_escape_string($db, $_POST['lastname']);
    $emails = mysqli_real_escape_string($db, $_POST['email']);
    $date = mysqli_real_escape_string($db, $_POST['dob']);
    $phn = mysqli_real_escape_string($db, $_POST['phone']);
    $pass = mysqli_real_escape_string($db, $_POST['password']);
    $cpass = mysqli_real_escape_string($db, $_POST['confirm']);
    $gen = mysqli_real_escape_string($db, $_POST['gender']);
    
    // Check if passwords match
    if ($pass !== $cpass) {
        $res = [
            'status' => 423,
            'message' => 'Please enter matching passwords'
        ];
        echo json_encode($res);
        return;
    }
    
    // Check if user already exists
    $check_query = "SELECT * FROM reg WHERE email = '$emails'";
    $check_result = mysqli_query($db, $check_query);
    
    if(mysqli_num_rows($check_result) > 0) {
        $res = [
            'status' => 201,
            'message' => 'User already exists'
        ];
        echo json_encode($res);
        return;
    }
    
    // Insert new user
    $query1 = "INSERT INTO reg (firstname, lastname, email, dob, phone, password, confirm, gender) 
    VALUES ('$fname', '$lname', '$emails', '$date', '$phn', '$pass', '$cpass', '$gen')";
    
    $query_run = mysqli_query($db, $query1);
    
    if($query_run) {
        $res = [
            'status' => 200,
            'message' => 'Details Updated Successfully'
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Details Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}
?>
