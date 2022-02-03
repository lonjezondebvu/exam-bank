<html>
<head>
<style>
</head>
<body>
<?php $get_id=$_GET['id']; ?>
<?php include ('connect.php');
                                 $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question where exam_id='$get_id' ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
									$totalRows_Recordset1 = mysqli_num_rows($query);

                                    $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' and question_type='M'
																	and exam_question.question_id = question.question_id") 
									or die(mysqli_error($GLOBALS["___mysqli_ston"]));
									while($row2= mysqli_fetch_array($query)){
									$value=$row2['marks'];
									$course=$row2['course_name'];
									$name=$row2['exam_name'];
									$sum +=$value;
									}
									?>
									
                                         <center>
										 <h1 align="center"><?php echo $course; ?></h1>
										<p><h2 align="center"><?php echo $name; ?> Mark Scheme</h2></p>
										<hr style="background:#000;"/>
										</center>
										<br/>
										
<?php 
                                       $i=1;
                                    $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, multiple_choice, question
																						where exam_id = '$get_id' and question_type='M'
																						and multiple_choice.question_id = question.question_id
																						and exam_question.question_id = question.question_id
																						")
																						or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while($row = mysqli_fetch_array($query)){
                                      $id = $row['exam_id'];
										

                                        ?>
                                          
										
										<?php  echo $i; echo"="; echo $row['correct']; ?> <br/><br/>
									<?php $i++;} ?>

									
										<?php 
										$query3 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' and question_type='T/F'
																							and exam_question.question_id = question.question_id ") 
																							or die(mysqli_error($GLOBALS["___mysqli_ston"]));
										$row_true=mysqli_fetch_array($query3);
										
										$query3 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' and question_type='T/F'
																					and exam_question.question_id = question.question_id ") 
																					or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                        while ($row3 = mysqli_fetch_array($query3)){
                                        $id = $row3['exam_id'];
										$value2=$row3['marks'];
										$sum2 +=$value2;
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM question");									
										}
                                        ?>
										
										<?php if($row_true>0){?>
								
										 <?php
										 $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' and question_type='T/F'
																and exam_question.question_id = question.question_id ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                         while ($row = mysqli_fetch_array($query)) {
                                         $id = $row['exam_id'];
										
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM question");
										

                                        ?>
										<?php  echo $i; echo"="; echo $row['correct']; ?> <br/><br/>
									<?php $i++;} } ?>
									
									<?php 
										$query4 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' and question_type='S'
																								and exam_question.question_id = question.question_id ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
										$row_true4=mysqli_fetch_array($query4);
										
										$query5 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' and question_type='S'
																					and exam_question.question_id = question.question_id ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                        while ($row5 = mysqli_fetch_array($query5)){
                                        $id = $row5['exam_id'];
										$value5=$row5['marks'];
										$sum5 +=$value5;
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM question");									
										}
                                        ?>
										
										<?php if($row_true4>0){?>
										 <?php
										 $query9 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id = '$get_id' and question_type='S'
																		and exam_question.question_id = question.question_id ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
										 
                                         while ($row9 = mysqli_fetch_array($query9)) {
                                         $id = $row9['exam_id'];
										
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM question");
										

                                        ?>
										<?php  echo $i; echo"="; echo $row9['correct']; ?> <br/><br/>
									<?php $i++;} } ?>
									
									
					
										</body>
										</html>