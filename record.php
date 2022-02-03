<html>
<head>
</head>
<body>
<?php $get_id=$_GET['id']; ?>

<?php include ('connect.php');
                                 $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question where exam_id='$get_id' ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
									$totalRows_Recordset1 = mysqli_num_rows($query);

                                    $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' and question_type='M'
																						and exam_question.question_id = question.question_id") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
									while($row2= mysqli_fetch_array($query)){
									$value=$row2['marks'];
									$course=$row2['course_name'];
									$name=$row2['exam_name'];
									$objective=$row2['objective'];
									$sum +=$value;
									}
									?>
									
                                         <center>
										 <h1 align="center"><?php echo $course; ?></h1>
										<p><h2 align="center"><?php echo $name; ?> Questions report</h2></p>
										<hr style="background:#000;"/>
										</center>
										<br/>
	<table border="1" style="border-spacing:none;">
	<tr>
	<td align="center"><B>Objectives</B></td>
	<td><b>NO. of Questions</b></td>
	</tr>									
<?php include ('connect.php');
                                       $i=1;
									   
									
                                    $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, objective, question
																						where exam_id='$get_id'
																						and objective.objective = question.objective
																						and exam_question.question_id = question.question_id") 
																						or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while($row = mysqli_fetch_array($query)){
                                      $id = $row['objective'];
									//$query2 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question where objective='$id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                       
                                       $totalRows_Recordset1 = mysqli_num_rows($query);
                                        ?>
                                          <tr><td>
										
										<?php echo $id;?></td>
										<td align="center">
									<?php echo"$totalRows_Recordset1";?></td></tr>
									<?php $i++; } ?>

									
										</table>
					
										</body>
										</html>