<?php
include('connect.php');

$get_id=$_GET['id'];
$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from programme where programme_id='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
							$id=$row['department'];
mysqli_query($GLOBALS["___mysqli_ston"], "delete from programme where programme_id='$get_id'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
header("location:forprogramme.php?id=$id");
?>
