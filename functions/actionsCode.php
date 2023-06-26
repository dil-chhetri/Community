<?php

include_once "../includes/session_start.php";
require_once "../includes/function.php";
if (isset($_POST['groupname'])) {
    $cid = "";
    $chat_name = $_POST['groupname'];
    // $chat_password=$_POST['code'];  (test version)
    $chat_code = randomString(8);

    mysqli_query($con, "insert into community_chatgroup (chat_name, chat_password, date_created, userid) values ('" . mysqli_real_escape_string($con, $chat_name) . "', '$chat_code', NOW(), '" . $_SESSION['id'] . "')");
    $cid = mysqli_insert_id($con);

    mysqli_query($con, "insert into community_member (chatroomid, userid) values ('$cid', '" . $_SESSION['id'] . "')");
    echo "Community created succesfully";
    header('location: ../index.php');
}


?>