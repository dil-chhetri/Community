<?php

include_once "../includes/session_start.php";
require_once "../includes/function.php";
if (isset($_POST['create-btn'])) {
    $cid = "";
    $chat_name = $_POST['groupname'];
    // $chat_password=$_POST['code'];  (test version)
    $chat_code = randomString(8);

    mysqli_query($con, "insert into community_chatgroup (chat_name, chat_password, date_created, userid) values ('" . mysqli_real_escape_string($con, $chat_name) . "', '$chat_code', NOW(), '" . $_SESSION['id'] . "')");
    $cid = mysqli_insert_id($con);

    mysqli_query($con, "insert into community_member (chatroomid, userid) values ('$cid', '" . $_SESSION['id'] . "')");
    echo "Community created succesfully";
    header('location: ../index.php');
}else if(isset($_POST['join-btn'])){
    $pass = $_POST['joincode'];

$query = mysqli_query($con, "select * from community_chatgroup where chat_password='$pass'");
$row = mysqli_fetch_array($query);
$cid = $row['chatroomid'];

if ($row['userid'] == $_SESSION['id']) {
    header('location: groupspace.php?id=' . $cid);
}
$select = mysqli_query($con, "SELECT * FROM community_member WHERE chatroomid ='$cid' AND userid='" . $_SESSION['id'] . "'");
if (mysqli_num_rows($select) > 0) {

    // header('location: groupspace.php?id=' . $cid);
    header('location:../index.php');
} else {
    if ($row['chat_password'] == $pass) {
        mysqli_query($con, "insert into community_member (chatroomid, userid) values ('$cid', '" . $_SESSION['id'] . "')");
        header('location: groupspace.php?id=' . $cid);
    } else {
?>
        <script>
            window.alert('Incorrect Password!');
            window.history.back();
        </script>
<?php
    }
}
}


?>