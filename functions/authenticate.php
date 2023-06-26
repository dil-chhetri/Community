<?php
include_once "../config/dbcon.php";
session_start();
function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = check_input($_POST['username']);

    if (!preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
        $_SESSION['msg'] = "Username should not contain space and special characters!";
        header('Location: index.php');
    } else {

        $fusername = $username;

        $password = check_input($_POST["password"]);
        $fpassword = md5($password);

        $query = mysqli_query($con, "select * from `community_user` where username='$fusername' and password='$fpassword'");

        if (mysqli_num_rows($query) == 0) {
            $_SESSION['msg'] = "Login Failed, Invalid Input!";
            header('Location: index.php');
        } else {

            $row = mysqli_fetch_array($query);
            if ($row['access'] == 2) {
                $_SESSION['id'] = $row['userid'];

                header('location:../index.php');
        
            }
        }
    }
}
