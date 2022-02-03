<?php
include('connect.php');

$get_id=$_GET['id'];
//$cid = $_GET['id2'];

mysqli_query($GLOBALS["___mysqli_ston"], "delete from course where course_name='$get_id'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
//mysqli_query($GLOBALS["___mysqli_ston"], "delete from question where course = '$cid'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
//mysqli_query($GLOBALS["___mysqli_ston"], "delete from objective where course_id = '$cid'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
header('location:forcourse.php');
?>
