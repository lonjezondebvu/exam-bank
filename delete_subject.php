<?php
include('connect.php');

$get_id=$_GET['id'];
$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from question where question_id='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
							$id=$row['objective'];
							
							if($row['question_type']=='M'){
								
								mysqli_query($GLOBALS["___mysqli_ston"], "delete from multiple_choice where question_id='$get_id'
																			")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
																			
								mysqli_query($GLOBALS["___mysqli_ston"], "delete from question where question_id='$get_id'
																			")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
							}else{
								mysqli_query($GLOBALS["___mysqli_ston"], "delete from question where question_id='$get_id'")
								or die(mysqli_error($GLOBALS["___mysqli_ston"]));
								
							}
								header("location:forquestion.php?id=$id");
?>
<?php include ('header.php');
?>

