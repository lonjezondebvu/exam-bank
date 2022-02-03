<?php
include('connect.php');

$get_id=$_GET['id'];
$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from question where question_id='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
							$id=$row['objective'];
mysqli_query($GLOBALS["___mysqli_ston"], "delete from question where question_id='$get_id'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
 header("location:forquestion_user.php?id=$id");
								
?>
<?php include ('header.php');
?>

