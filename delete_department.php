<?php
include('connect.php');

$get_id=$_GET['id'];
$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from department where department_id='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    $row = mysqli_fetch_array($query);
                                        $id2 = $row['faculty'];
										
mysqli_query($GLOBALS["___mysqli_ston"], "delete from department where department_id='$get_id'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
header("location:department.php?id=$id2");
								
?>
<?php include ('header.php');
?>

