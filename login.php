<?php
require "config.php";
session_start();
if(isset($_POST['log']))
{
$email = mysqli_real_escape_string($db,$_POST['emails']);
	$pwd = mysqli_real_escape_string($db, $_POST['pass']);

    if($email == NULL || $pwd == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
    else{
        
    $emquery = "SELECT email FROM reg WHERE email='$email'";
    $check = mysqli_num_rows(mysqli_query($db, $emquery));
    if ($check == 0)
    {
        $res = [
            'status' => 404,
            'message' => 'User not found, Create account!'
        ];
        echo json_encode($res);
        return;
    }
    else{

        $query = "SELECT * FROM reg WHERE email = '$email' and password = '$pwd'";
        $query_run = mysqli_query($db, $query);
     $count = mysqli_num_rows($query_run);
        if($count==1)
        {
            //$_SESSION['loggedin']==TRUE;
            $idfetchquery="SELECT id FROM reg WHERE email='$email';";
            $id=mysqli_query($db,$idfetchquery);
            $user = mysqli_fetch_assoc($id);
            $_SESSION['loggeduserid'] = $user['id'];
            $res = [
                'status' => 200,
                'message' => 'Login Successfully'
            ];
            echo json_encode($res);
            return;
        }
        else
        {
            $res = [
                'status' => 500,
                'message' => 'Username/Password wrong'
            ];
            echo json_encode($res);
            return;
        }
      }
   }
}
?>