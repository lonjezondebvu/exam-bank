<?php
include('connect.php');

$get_id=$_GET['id'];


mysqli_query($GLOBALS["___mysqli_ston"], "delete from exam where exam_id='$get_id'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
mysqli_query($GLOBALS["___mysqli_ston"], "delete from exam_objective where obj_id='$get_id'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
mysqli_query($GLOBALS["___mysqli_ston"], "delete from exam_question where obj_id='$get_id'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
header('location:forexams.php');
?>
