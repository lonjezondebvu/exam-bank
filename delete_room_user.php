<?php
include('connect.php');

$get_id=$_GET['id'];
$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from objective where objective_id='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    $row = mysqli_fetch_array($query);
                                        $id2 = $row['course_id'];
										
mysqli_query($GLOBALS["___mysqli_ston"], "delete from objective where objective_id='$get_id'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
header("location:objective_user.php?id=$id2");
								
?>
<?php include ('header.php');
?>

