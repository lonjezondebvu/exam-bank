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
												<h4 class="modal-title" id="myModalLabel"><center>	Exam Paper Preview </center></h4>
											</div>
											
											<div class="modal-body" >
								
                                         <center><p align="center">
										 <!--<img src="images/exam_paper_header.png" align="right" width="1100px" height="150px" /></p>-->
										 </center>
										 <br/><br/>
										 <p align="center"><img src="images/logo2.png" /></p>
										 <br/>
										 <h2 align="center"><?php echo $faculty1; ?></h2>
										 <br/><br/>
										 <h2 align="center">Department of <?php echo $department1; ?></h2>
										 <br/>
										 <h2 align="center"><?php echo $course1; ?></h2>
										 <br/><br/>
										<p><h2 align="center"><?php echo $name1; ?></h2></p></center>
										
									
										<br/><br/><br/><br/><br/><br/><br/><br/>
										
<?php 


								$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from instructions where exam_id='$get_id' 
																						") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
								while ($inst = mysqli_fetch_array($query1)){
									
									$instructions = $inst['instructions'];
									
									echo $instructions;
								}
								
								echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
										<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
										<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
								
								
								
								
                                       $i=1;
									   $a=A;
                                $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and section='A'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
											
										

											
								if(mysqli_fetch_array($query)>0){
								
										while ($row3 = mysqli_fetch_array($query)){
												
												$value2=$row3['marks'];
												$sum2 +=$value2;
																
																		
										}
									
									echo "<strong>SECTION A</strong><br/>
										THIS SECTION CARRIES ".$sum2." MARKS<br/>
										ALL QUESTIONS CARRY A MARK EACH<br/>
										ANSWER ALL QUESTIONS IN THIS SECTION<br/><br/>";
								}
								
								$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and section='A'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while($row = mysqli_fetch_array($query)){
                                      $id = $row['exam_id'];
										

                                        ?>
                                          
										
										<?php echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question']; ?>
										<blockquote><?php
										$image = (!empty($row['image'])) ? "<img src='images/".$row['image']."'>" : '';
										
												echo $image;
											 ?></blockquote>
											 <?php
											 
											 if($row['quesion_type']=='M'){
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
									 
									 //SECTION A END
									 
									 ?>

									
<?php
                                       $i=1;
									   $a=A;
                                $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and section='A'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
											
										

											
								if(mysqli_fetch_array($query)>0){
								
										while ($row3 = mysqli_fetch_array($query)){
												
												$value2=$row3['marks'];
												$sum2 +=$value2;
																
																		
										}
									
									echo "<strong>SECTION B</strong><br/>
										THIS SECTION CARRIES ".$sum2." MARKS<br/>
										ALL QUESTIONS CARRY A MARK EACH<br/>
										ANSWER ALL QUESTIONS IN THIS SECTION<br/><br/>";
								}
								
								$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and section='B'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while($row = mysqli_fetch_array($query)){
                                      $id = $row['exam_id'];
										

                                        ?>
                                          
										
										<?php echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question']; ?>
										<blockquote><?php
										$image = (!empty($row['image'])) ? "<img src='images/".$row['image']."'>" : '';
										
												echo $image;
											 ?></blockquote>
											 <?php
											 
											 if($row['quesion_type']=='M'){
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
									 
									 //SECTION B END
									 
									 ?>
									 
									 
<?php 
                                       $i=1;
									   $a=A;
                                $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and section='C'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
											
										

											
								if(mysqli_fetch_array($query)>0){
								
										while ($row3 = mysqli_fetch_array($query)){
												
												$value2=$row3['marks'];
												$sum2 +=$value2;
																
																		
										}
									
									echo "<strong>SECTION A</strong><br/>
										";
								}
								
								$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and section='C'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while($row = mysqli_fetch_array($query)){
                                      $id = $row['exam_id'];
										

                                        ?>
                                          
										
										<?php echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question']; ?>
										<blockquote><?php
										$image = (!empty($row['image'])) ? "<img src='images/".$row['image']."'>" : '';
										
												echo $image;
											 ?></blockquote>
											 <?php
											 
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
									 
									 //SECTION C END
									 

										/*
                                        while ($row3 = mysqli_fetch_array($query3)){
												$id = $row3['exam_id'];
												$value2=$row3['marks'];
												$sum2 +=$value2;
										*/
										?>
										</div>
										</div>
										</div>
										</div>
										</body>
										</html>