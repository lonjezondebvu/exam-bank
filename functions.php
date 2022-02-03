<?php

	

				function question_type()
					{
							if (isset($_POST['go']) and ($_POST['question_type']=='M')){
                                $question_type = $_POST['question_type'];
                                $question = $_POST['question'];
                                $course= $_POST['course'];
                                $faculty= $_POST['faculty'];
                                $department= $_POST['department'];
                                $programme= $_POST['programme'];
								$objective = $_POST['objective'];
								$marks= $_POST['marks'];
                                $A = $_POST['A'];
                                $B = $_POST['B'];
								 $C = $_POST['C'];
                                $D = $_POST['D'];
								$correct=$_POST['correct'];
								$target="images/".basename($_FILES['image']['name']);
								$image= $_FILES['image']['name'];



                                mysqli_query($GLOBALS["___mysqli_ston"], "insert into question 
								(question_id,faculty,department,course,objective,question_type,question,correct,image)
                            	values 
								('','$faculty','$department','$course','$objective','$question_type','$question','$correct','$image')
                                ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
									if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
									{
									echo"image uploaded";
									}
									
								$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from question where question = '$question'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while ($row = mysqli_fetch_array($query)) {
                                        $question_id = $row['question_id'];
										
																				
									
									
								mysqli_query($GLOBALS["___mysqli_ston"], "insert into multiple_choice 
								(question_id,A,B,C,D)
                            	values 
								('$question_id','$A','$B','$C','$D')
                                ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
								
									}
								
								echo"<br/><br/><div class='alert alert-info'>
                                <strong><i class='icon-user icon-large'></i>&nbsp;<h1> Saved</h1> You can add another Question</strong>
                                </div>";
								
							}
							elseif(isset($_POST['go'])){
								
								$question_type = $_POST['question_type'];
                                $question = $_POST['question'];
                                $course= $_POST['course'];
                                $faculty= $_POST['faculty'];
                                $department= $_POST['department'];
                                $programme= $_POST['programme'];
								$objective = $_POST['objective'];
								$marks= $_POST['marks'];
                                $A = $_POST['A'];
                                $B = $_POST['B'];
								 $C = $_POST['C'];
                                $D = $_POST['D'];
								$correct = $_POST['correct'];
								$target="images/".basename($_FILES['image']['name']);
								$image= $_FILES['image']['name'];



                                mysqli_query($GLOBALS["___mysqli_ston"], "insert into question 
								(question_id, faculty, department, course, objective, question_type, question, correct, image)
                            	values 
								('','$faculty','$department','$course','$objective','$question_type','$question','$correct','$image')
                                ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
									if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
									{
									echo"image uploaded";
									}
								
								echo"<br/><br/><div class='alert alert-info'>
                                <strong><i class='icon-user icon-large'></i>&nbsp;<h1> Saved</h1> You can add another Question</strong>
                                </div>";
							}
							
					}
								
								
								
								
								
					
							
								
				function section($sect){
					this.$sect = $sect;
					
					                   $i=1;
									   $a=A;
                                $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and section='$sect'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
											
										

											
								if(mysqli_fetch_array($query)>0){
								
										while ($row3 = mysqli_fetch_array($query)){
												
												$value2=$row3['marks'];
												$sum2 +=$value2;
																
																		
										}
									
									echo "<strong>SECTION $sect</strong><br/>
										";
								}
								
								$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and section='$sect'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while($row = mysqli_fetch_array($query)){
                                      $id = $row['exam_id'];
										

                                       
                                          
										
										echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question']; 
										echo "<blockquote>";
										$image = (!empty($row['image'])) ? "<img src='images/".$row['image']."'>" : '';
										
												echo $image;
												echo "</blockquote>";
											 
											 
											 if($row['question_type']=='M'){
													echo "&nbsp;&nbsp;&nbsp; A.&nbsp;"; echo $row['A'] ."<br/>";
													echo "&nbsp;&nbsp;&nbsp; B.&nbsp;"; echo $row['B'] ."<br/>";
													echo "&nbsp;&nbsp;&nbsp; C.&nbsp;"; echo $row['C'] ."<br/>";
													echo "&nbsp;&nbsp;&nbsp; D.&nbsp;"; echo $row['D']; 
													
											 }elseif($row['question_type']=='T/F'){
													
													echo "&nbsp;&nbsp;&nbsp; TRUE.&nbsp;" ."<br/>";
													echo "&nbsp;&nbsp;&nbsp; FALSE.&nbsp;" ."<br/>";
											 }elseif($row['question_type']=='S'){
													
													echo str_repeat("________________________________________________________________<br><br>", $row['answer_lines']);
											 }
													echo "<br/><br/><br/>";
										
									 $i++;}
					
					
				}				
								
								
                           
                function statementA()
				{
										
										echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question']; 
										//echo "<blockquote>";
										$image = (!empty($row['image'])) ? "<img class='img-responsive' src='images/".$row['image']."'>" : '';
										
												echo $image;
												//echo "</blockquote>";
											 
											 
											 if($row['question_type']=='M'){
												 
												 $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question, multiple_choice 
																						where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and multiple_choice.question_id = exam_question.question_id
																						and section='A'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
																						
													while($row = mysqli_fetch_array($query)){
													
												 
												 
												 
														echo "<br><br>";
														echo "&nbsp;&nbsp;&nbsp; A.&nbsp;"; echo $row['A'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; B.&nbsp;"; echo $row['B'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; C.&nbsp;"; echo $row['C'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; D.&nbsp;"; echo $row['D']; 
													
													}
													
											 }elseif($row['question_type']=='T/F'){
													
													echo "<br><br>";
													echo "&nbsp;&nbsp;&nbsp; TRUE.&nbsp;" ."<br/>";
													echo "&nbsp;&nbsp;&nbsp; FALSE.&nbsp;" ."<br/>";
													
											 }elseif($row['question_type']=='S' or $row['question_type']=='E'){
													
													 echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													 ( ". "<b>  ".$row['marks']." Marks)  <br><br></b>";
													
													echo str_repeat("________________________________________________________________<br><br>", $row['answer_lines']);
											 }
													echo "<br/><br/><br/>";
										
									 $i++;
									 } 
									 
									 
				function statementB()
				{
										
										echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question']; 
										//echo "<blockquote>";
										$image = (!empty($row['image'])) ? "<img class='img-responsive' src='images/".$row['image']."'>" : '';
										
												echo $image;
												//echo "</blockquote>";
											 
											 
											 if($row['question_type']=='M'){
												 
												 $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question, multiple_choice 
																						where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and multiple_choice.question_id = exam_question.question_id
																						and section='B'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
																						
													while($row = mysqli_fetch_array($query)){
													
												 
												 
												 
														echo "<br><br>";
														echo "&nbsp;&nbsp;&nbsp; A.&nbsp;"; echo $row['A'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; B.&nbsp;"; echo $row['B'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; C.&nbsp;"; echo $row['C'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; D.&nbsp;"; echo $row['D']; 
													
													}
													
											 }elseif($row['question_type']=='T/F'){
													
													echo "<br><br>";
													echo "&nbsp;&nbsp;&nbsp; TRUE.&nbsp;" ."<br/>";
													echo "&nbsp;&nbsp;&nbsp; FALSE.&nbsp;" ."<br/>";
													
											 }elseif($row['question_type']=='S' or $row['question_type']=='E'){
													
													 echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													 ( ". "<b>  ".$row['marks']." Marks)  <br><br></b>";
													
													echo str_repeat("________________________________________________________________<br><br>", $row['answer_lines']);
											 }
													echo "<br/><br/><br/>";
										
									 $i++;
									 } 
									 
				function statementC()
				{
										
										echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question']; 
										//echo "<blockquote>";
										$image = (!empty($row['image'])) ? "<img class='img-responsive' src='images/".$row['image']."'>" : '';
										
												echo $image;
												//echo "</blockquote>";
											 
											 
											 if($row['question_type']=='M'){
												 
												 $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question, multiple_choice 
																						where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and multiple_choice.question_id = exam_question.question_id
																						and section='C'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
																						
													while($row = mysqli_fetch_array($query)){
													
												 
												 
												 
														echo "<br><br>";
														echo "&nbsp;&nbsp;&nbsp; A.&nbsp;"; echo $row['A'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; B.&nbsp;"; echo $row['B'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; C.&nbsp;"; echo $row['C'] ."<br/>";
														echo "&nbsp;&nbsp;&nbsp; D.&nbsp;"; echo $row['D']; 
													
													}
													
											 }elseif($row['question_type']=='T/F'){
													
													echo "<br><br>";
													echo "&nbsp;&nbsp;&nbsp; TRUE.&nbsp;" ."<br/>";
													echo "&nbsp;&nbsp;&nbsp; FALSE.&nbsp;" ."<br/>";
													
											 }elseif($row['question_type']=='S' or $row['question_type']=='E'){
													
													 echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													 ( ". "<b>  ".$row['marks']." Marks)  <br><br></b>";
													
													echo str_repeat("________________________________________________________________<br><br>", $row['answer_lines']);
											 }
													echo "<br/><br/><br/>";
										
									 $i++;
									 } 
                            ?>