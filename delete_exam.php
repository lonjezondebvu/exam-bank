<?php
include('connect.php');

$get_id=$_GET['id'];

mysqli_query($GLOBALS["___mysqli_ston"], "delete from examsched where examid='$get_id'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
header('location:exam.php');
?>
