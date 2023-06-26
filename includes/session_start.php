<?php
session_start();
include_once '../config/dbcon.php';

if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
header('location:../login.php');
exit();
}

// $sq=mysqli_query($con,"select * from `community_user` where userid='".$_SESSION['id']."'");
// $srow=mysqli_fetch_array($sq);

// if ($srow['access']!=2){
// header('location:../');
// exit();
// }

// $user=$srow['username'];
// $useridshow=$srow['userid'];
