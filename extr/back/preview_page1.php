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
								<div class="modal fade" style="overflow:scroll;" id="preview_page<?php echo $id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								
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
										
										<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
										<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
										<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
										<strong>SECTION A:MULTIPLE CHOICE</strong><br/>
										THIS SECTION CARRIES <?php echo $sum; ?> MARKS<br/>
										ALL QUESTIONS CARRY A MARK EACH<br/>
										ANSWER ALL QUESTIONS IN THIS SECTION<br/><br/>
										
<?php include ('connect.php');
                                       $i=1;
									   $a=A;
                                    $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						ORDER BY section ASC") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
											
											$row5 = mysqli_fetch_array($query);
											$section = $row5['section'];
									while($section =='A'){
									
											echo 'This is Section : '.$section.'<br><br>';
											
									while($row = $row5){
										$id = $row['exam_id'];
										
										
										
											echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question'];
										
										
									}else{
										echo 'This is Section : '.$section.'<br><br>';
										while($row = mysqli_fetch_array($query)){
										$id = $row['exam_id'];
										
										
										
											echo"<strong>"; echo $i; echo"</strong>.&nbsp;"; echo $row['question'];
										
											
											
										}
									}
									}
									}
                                        ?>
                                          
										
										<?php  ?>
										<blockquote><?php
										$image = (!empty($row['image'])) ? "<img src='images/".$row['image']."'>" : '';
										
												echo $image;
											 ?></blockquote>
											 
										&nbsp;&nbsp;&nbsp;<?php echo"A.&nbsp;"; echo $row['A']; ?><br/>
										&nbsp;&nbsp;&nbsp;<?php echo"B.&nbsp;"; echo $row['B']; ?><br/>
										&nbsp;&nbsp;&nbsp;<?php echo"C.&nbsp;"; echo $row['C']; ?><br/>
										&nbsp;&nbsp;&nbsp;<?php echo"D.&nbsp;"; echo $row['D']; ?><br/>
										<br/><br/>
									<?php $i++;} ?>

									
										<?php 
										$query3 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and question_type='T/F'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
										$row_true=mysqli_fetch_array($query3);
										
										$query3 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and question_type='T/F'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                        while ($row3 = mysqli_fetch_array($query3)){
                                        $id = $row3['exam_id'];
										$value2=$row3['marks'];
										$sum2 +=$value2;
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM question");									
										}
                                        ?>
										
										<?php if($row_true>0){?>
										<?php echo"<b>TRUE OR FALSE QUESTIONS: ($sum2 MARKS)</b> 
										Answer all questions in this section on the answer card provided. Each question carries a half mark."; ?><br/><br/>
										 <?php
										 $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and question_type='T/F'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                         while ($row = mysqli_fetch_array($query)) {
                                         $id = $row['exam_id'];
										
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM question");
										

                                        ?>
										<?php echo"<strong>";echo $i; echo"</strong>.&nbsp;"; echo $row['question']; ?>
										<blockquote>
										<?php
										$image = (!empty($row['image'])) ? "<img src='images/".$row['image']."'>" : '';
										
												echo $image;
											 ?>
									   </blockquote>
										&nbsp;&nbsp;&nbsp;<?php echo"A.&nbsp;"; echo $row['A']; ?><br/>
										&nbsp;&nbsp;&nbsp;<?php echo"B.&nbsp;"; echo $row['B']; ?><br/>
										<br/><br/>
									<?php  $i++; $a++;}}?>
																		
																		<?php 
										$query6 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and question_type='S'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
										$row_true5=mysqli_fetch_array($query6);
										
										$query7 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and question_type='S'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                        while ($row7 = mysqli_fetch_array($query7)){
                                        $id = $row7['exam_id'];
										$value7=$row7['marks'];
										$sum7 +=$value7;
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM question");									
										}
                                        ?>
										
										<?php if($row_true5>0){?>
										<?php echo"<b><u>STRUCTURE:($sum7 MARKS). </u></b> 
										Answer all questions in this section on the answer card provided."; ?><br/><br/>
										 <?php
										 $query8 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and question_type='S'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                         while ($row8 = mysqli_fetch_array($query8)) {
                                         $id = $row8['exam_id'];
										
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM question");
										

                                        ?>
										<?php echo"<strong><b>"; echo $i; echo"</b></strong>.&nbsp;"; 
										echo $row8['question']; 
										echo "<b> (";
										echo $row8['marks'];
										echo " marks) </b>"
										?>
										
										<blockquote><br /><?php
										$image = (!empty($row8['image'])) ? "<img class='img-responsive' src='images/".$row8['image']."'>" : '';
										
												echo $image;
											 ?></blockquote>
										<?php echo str_repeat("________________________________________________________________<br><br>", $row8['answer_lines']) ?>
									<?php $i++;} }?>
									
									<?php 
										$query4 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and question_type='E'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
										$row_true4=mysqli_fetch_array($query4);
										
										$query5 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and question_type='E'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                        while ($row5 = mysqli_fetch_array($query5)){
                                        $id = $row5['exam_id'];
										$value5=$row5['marks'];
										$sum5 +=$value5;
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM question");									
										}
                                        ?>
										
										<?php if($row_true4>0){?>
										<?php echo"<b><u>Essay: ($sum5 MARKS)</u></b> 
										Answer all questions in this section on the answer card provided. Each question carries a half mark."; ?><br/><br/>
										 <?php
										 $query9 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$get_id' 
																						AND exam_question.question_id = question.question_id
																						and question_type='Essay'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
										 
                                         while ($row9 = mysqli_fetch_array($query9)) {
                                         $id = $row9['exam_id'];
										
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM question");
										

                                        ?>
										<?php echo"<strong>";echo $i; echo"</strong>.&nbsp;"; echo $row9['question']; ?>
										<blockquote><?php
										$image = (!empty($row9['image'])) ? "<img class='img-responsive' src='images/".$row9['image']."'>" : '';
										
												echo $image;
											 ?></blockquote>
										<?php echo str_repeat("________________________________________________________________<br><br>", $row9['answer_lines']) ?>
										<br/><br/>
											 <?php $i++;} }?>
											 
									</div>
									
									<div class="modal-footer">
                                            
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>

                                    </div>
								</div>
								
								
										</body>
										</html>