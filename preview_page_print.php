<html>
<head>
<style>
 <style>
        body{
            width: 450px;
            margin: 50px;
            font-family: "Helvetica Neue", helvetica, sans-serif;
            font-size: 13pt;
        }
        .list-counter{
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
        .list-counter li{
            counter-increment: step-counter;
            margin-bottom: 30px;
        }
        .list-counter li::before{
            content: counter(step-counter);
            position: absolute;
            margin-right: 5px;
            border-right: 2px solid green;
            color: green;
            padding: 3px 8px 3px 8px;
            font-size: 24pt;
        }
        .list-counter li a{
            display: inline-block;
            line-height: 21px;
            text-decoration: none;
            color: black;
            margin-left: 40px;
        }
</style>
</head>


<body>


<?php $get_id=$_GET['id']; ?>
<?php include ('connect.php');
									//select main exam details and store in an array
									$query3 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam where exam_id='$get_id' ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
									$row3= mysqli_fetch_array($query3);
									$course1=$row3['course'];
									$faculty1=$row3['faculty'];
									$department1=$row3['department'];
									$name1=$row3['exam_name'];
									
									//select picked question for the given Exam
									$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id ")
																						or die(mysqli_error($GLOBALS["___mysqli_ston"]));
									$totalRows_Recordset1 = mysqli_num_rows($query);
									
                                    $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and question_type='M'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
									while($row2= mysqli_fetch_array($query)){
										
										$value=$row2['marks'];
										$course=$row2['course'];
										$faculty=$row2['faculty'];
										$department=$row2['department'];
										$name=$row2['exam_name'];
										$sum +=$value;
									}
									?>
									<!--<br/><br/>-->
								<div class="modal fade" style="overflow:scroll; color:black;" id="preview_page<?php echo $id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myModalLabel"><center> </center></h4>
											</div>
											
											<div class="modal-body" >
								
                                         <center><p align="center">
										 <!--<img src="images/exam_paper_header.png" align="right" width="1100px" height="150px" /></p>-->
										 </center>
										 <br/><br/>
										 <!--<p align="center"><img src="images/logo2.png" /></p>
										 <br/>-->
										 <h2 align="center"><?php echo $faculty1; ?></h2>
										 <br/><br/>
										 <h2 align="center">Department of <?php echo $department1; ?></h2>
										 <br/>
										 <h2 align="center"><?php echo $course1; ?></h2>
										 <br/><br/>
										<p><h2 align="center"><?php echo $name1; ?></h2></p></center>
										
									
										<br/><br/><br/><br/><br/><br/>
										
<?php 
								$i=1;
								$a=A;
								
								$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from instructions where exam_id='$get_id' 
																						") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
								
								while ($inst = mysqli_fetch_array($query1)){
									
									$instructions = $inst['instructions'];
									
									echo $instructions."<br>";
								
								
								}
								
								echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
										<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
										<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
								
												
								
                                       
                                $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and section='A'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
											
										

											
								if(mysqli_fetch_array($query)>0){
								
										while ($row3 = mysqli_fetch_array($query)){
												
												$value2=$row3['marks'];
												$sum2 +=$value2;
																
																		
										}
									
									echo "<strong>SECTION A</strong><br><br>
										";
								}
								
								$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and section='A'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while($row = mysqli_fetch_array($query)){
										
                                      $id = $row['exam_id'];

                                        ?>
										
										<?php 
													
													
											 
											 if($row['question_type']=='M'){
												 
												 
												 
												 $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question, multiple_choice 
																						where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and multiple_choice.question_id = exam_question.question_id
																						and section='A'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
																						
													while($row = mysqli_fetch_array($query)){
													
												 echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question']; 
										//echo "<blockquote>";
														$image = (!empty($row['image'])) ? "<img class='img-responsive' src='images/".$row['image']."'>" : '';
										
														echo $image;
														
												 
														echo "<br><br>";
														echo "&nbsp;&nbsp;&nbsp; A.&nbsp;"; echo $row['A'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; B.&nbsp;"; echo $row['B'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; C.&nbsp;"; echo $row['C'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; D.&nbsp;"; echo $row['D']; 
														
														
														 echo "<br>";
													}
													
											 }
											 elseif($row['question_type']=='T/F'){
													
													echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question']; 
										//echo "<blockquote>";
													$image = (!empty($row['image'])) ? "<img class='img-responsive' src='images/".$row['image']."'>" : '';
										
													echo $image;
												
													echo "<br><br>";
													echo "&nbsp;&nbsp;&nbsp; TRUE.&nbsp;" ."<br/>";
													echo "&nbsp;&nbsp;&nbsp; FALSE.&nbsp;" ."<br/>";
													 echo "<br>";
													
													 
											 }elseif($row['question_type']=='S' or $row['question_type']=='E'){
													
													echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question']; 
										//echo "<blockquote>";
													$image = (!empty($row['image'])) ? "<img class='img-responsive' src='images/".$row['image']."'>" : '';
										
													echo $image;
													
													
													 echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													 ( ". "<b>  ".$row['marks']." Marks)  <br><br></b>";
													
													echo str_repeat("_____________________________________________________________________________________________<br><br>", $row['answer_lines']);
													 echo "<br>";
													 
											 }elseif($row['question_type']=='SM'){
												 
												 
												 
												 
												 $quer = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question, structuredmultiple 
																						where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and structuredmultiple.question_id = exam_question.question_id
																						and section='A'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
																						
													while($ro = mysqli_fetch_array($quer)){
													
												 echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $ro['question']; 
										//echo "<blockquote>";
														$image = (!empty($row['image'])) ? "<img class='img-responsive' src='images/".$row['image']."'>" : '';
										
														echo $image;
														
												 
														echo "<br><br>";
														echo "&nbsp;&nbsp;&nbsp;&nbsp; a.&nbsp;"; echo $ro['A'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp;&nbsp; b.&nbsp;"; echo $ro['B'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp;&nbsp; c.&nbsp;"; echo $ro['C'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp;&nbsp; d.&nbsp;"; echo $ro['D'] ."<br/>"; 
														
														echo "<br>";
											 }
														
											 }
													echo "<br/><br/><br/>";
										
									
													$i++;
									}
									
										
									
									 //SECTION A END
									



									$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and section='B'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
											
										

											
								if(mysqli_fetch_array($query)>0){
								
										while ($row3 = mysqli_fetch_array($query)){
												
												$value2=$row3['marks'];
												$sum2 +=$value2;
																
																		
										}
									
									echo "<strong>SECTION B</strong><br><br>
										";
								}
								
								$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and section='B'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while($row = mysqli_fetch_array($query)){
										
                                      $id = $row['exam_id'];
									 
									 
									 
									
											 
											 if($row['question_type']=='M'){
												 
												 
												 
												 $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question, multiple_choice 
																						where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and multiple_choice.question_id = exam_question.question_id
																						and section='B'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
																						
													while($row = mysqli_fetch_array($query)){
													
												 echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question']; 
										//echo "<blockquote>";
														$image = (!empty($row['image'])) ? "<img class='img-responsive' src='images/".$row['image']."'>" : '';
										
														echo $image;
														
												 
														echo "<br><br>";
														echo "&nbsp;&nbsp;&nbsp; A.&nbsp;"; echo $row['A'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; B.&nbsp;"; echo $row['B'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; C.&nbsp;"; echo $row['C'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; D.&nbsp;"; echo $row['D']; 
														
														 $i++;
														 echo "<br>";
													}
													
											 }
											 elseif($row['question_type']=='T/F'){
													
													echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question']; 
										//echo "<blockquote>";
													$image = (!empty($row['image'])) ? "<img class='img-responsive' src='images/".$row['image']."'>" : '';
										
													echo $image;
												
													echo "<br><br>";
													echo "&nbsp;&nbsp;&nbsp; TRUE.&nbsp;" ."<br/>";
													echo "&nbsp;&nbsp;&nbsp; FALSE.&nbsp;" ."<br/>";
													 echo "<br>";
													 $i++;
													 
											 }elseif($row['question_type']=='S' or $row['question_type']=='E'){
													
													echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question']; 
										//echo "<blockquote>";
													$image = (!empty($row['image'])) ? "<img class='img-responsive' src='images/".$row['image']."'>" : '';
										
													echo $image;
													
													
													 echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													 ( ". "<b>  ".$row['marks']." Marks)  <br><br></b>";
													
													echo str_repeat("_______________________________________________________________________________________<br><br>", $row['answer_lines']);
													 echo "<br>";
													 $i++;
											 }elseif($row['question_type']=='SM'){
												 
												 
												 
												 
												 $quer = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question, structuredmultiple 
																						where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and structuredmultiple.question_id = exam_question.question_id
																						and section='A'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
																						
													while($ro = mysqli_fetch_array($quer)){
													
												 echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $ro['question']; 
										//echo "<blockquote>";
														$image = (!empty($row['image'])) ? "<img class='img-responsive' src='images/".$row['image']."'>" : '';
										
														echo $image;
														
												 
														echo "<br><br>";
														echo "&nbsp;&nbsp;&nbsp;&nbsp; a.&nbsp;"; echo $ro['A'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp;&nbsp; b.&nbsp;"; echo $ro['B'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp;&nbsp; c.&nbsp;"; echo $ro['C'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp;&nbsp; d.&nbsp;"; echo $ro['D'] ."<br/>"; 
														
														echo "<br>";
											 }
														
											 }
													echo "<br/><br/><br/>";
											$i++;
									

									}
									 //SECTION B
									 
									 $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and section='C'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
											
										

											
								if(mysqli_fetch_array($query)>0){
								
										while ($row3 = mysqli_fetch_array($query)){
												
												$value2=$row3['marks'];
												$sum2 +=$value2;
																
																		
										}
									
									echo "<strong>SECTION C</strong><br><br>
										";
								}
								
								$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and section='C'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while($row = mysqli_fetch_array($query)){
										
                                      $id = $row['exam_id'];
									  
									  if($row['question_type']=='M'){
												 
												 
												 
												 $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question, multiple_choice 
																						where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and multiple_choice.question_id = exam_question.question_id
																						and section='C'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
																						
													while($row = mysqli_fetch_array($query)){
													
												 echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question']; 
										//echo "<blockquote>";
														$image = (!empty($row['image'])) ? "<img class='img-responsive' src='images/".$row['image']."'>" : '';
										
														echo $image;
														
												 
														echo "<br><br>";
														echo "&nbsp;&nbsp;&nbsp; A.&nbsp;"; echo $row['A'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; B.&nbsp;"; echo $row['B'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; C.&nbsp;"; echo $row['C'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; D.&nbsp;"; echo $row['D']; 
														
														 $i++;
														 echo "<br>";
													}
													
											 }
											 elseif($row['question_type']=='T/F'){
													
													echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question']; 
										//echo "<blockquote>";
													$image = (!empty($row['image'])) ? "<img class='img-responsive' src='images/".$row['image']."'>" : '';
										
													echo $image;
												
													echo "<br><br>";
													echo "&nbsp;&nbsp;&nbsp; TRUE.&nbsp;" ."<br/>";
													echo "&nbsp;&nbsp;&nbsp; FALSE.&nbsp;" ."<br/>";
													 echo "<br>";
													 $i++;
													 
											 }elseif($row['question_type']=='S' or $row['question_type']=='E'){
													
													echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question']; 
										//echo "<blockquote>";
													$image = (!empty($row['image'])) ? "<img class='img-responsive' src='images/".$row['image']."'>" : '';
										
													echo $image;
													
													
													 echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													 ( ". "<b>  ".$row['marks']." Marks)  <br><br></b>";
													echo "<center>";
													echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
															
													echo str_repeat("_______________________________________________________________________________________<br><br>", $row['answer_lines']);
													 echo "</center><br>";
													 $i++;
											 }elseif($row['question_type']=='SM'){
												 
												 
												 
												 
												 $quer = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question, structuredmultiple 
																						where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and structuredmultiple.question_id = exam_question.question_id
																						and section='A'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
																						
													while($ro = mysqli_fetch_array($quer)){
													
												 echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $ro['question']; 
										//echo "<blockquote>";
														$image = (!empty($row['image'])) ? "<img class='img-responsive' src='images/".$row['image']."'>" : '';
										
														echo $image;
														
												 
														echo "<br><br>";
														echo "&nbsp;&nbsp;&nbsp;&nbsp; a.&nbsp;"; echo $ro['A'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp;&nbsp; b.&nbsp;"; echo $ro['B'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp;&nbsp; c.&nbsp;"; echo $ro['C'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp;&nbsp; d.&nbsp;"; echo $ro['D'] ."<br/>"; 
														
														echo "<br>";
											 }
														
											 }
													echo "<br/><br/><br/>";
										
												$i++;

									} 
									  
									  
									  
									  echo "&nbsp;&nbsp;&nbsp;&nbsp; <center>END OF QUESTION PAPER</center>";
									 ?>
									
										
									
										
										
										
										</div>
										</div>
										</div>
										</div>
										</body>
										</html>