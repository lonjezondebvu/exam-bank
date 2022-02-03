<?php

include('connect.php');

$get_id=$_GET['id'];


$query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question where question_id='$get_id'
													") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
$row=mysqli_fetch_array($query);
$id = $row['exam_id'];

$quer=mysqli_query($GLOBALS["___mysqli_ston"], "select * from question where question_id='$get_id'
													") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
$ow=mysqli_fetch_array($quer);
$id2 = $ow['course'];
mysqli_query($GLOBALS["___mysqli_ston"], "delete from exam_question where question_id='$get_id'")
										or die(mysqli_error($GLOBALS["___mysqli_ston"]));
header("location:exam_question.php?id=$id?id2=$id2");
								
?>


<?php include ('header.php');
?>

<script>
                            function goBack() {
                                         window.history.back();
                                                     }
                                                      </script>