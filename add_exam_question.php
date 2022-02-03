<?php include ('connect.php');
                                    $query4 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam where exam_id='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    $row4 = mysqli_fetch_array($query4);
                                        $id = $row4['course'];																														
                                        ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <div class="alert alert-info"><strong><center>Add Exam </center></strong></div>
                                        </div>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">
                                
                                <hr>
								 <div class="control-group">
                                          
                                           <input type="hidden" name="exam_name" class = "form-control" value="<?php echo $row4['exam_name'];?>" >
                                           <input type="hidden" name="obj_id" class = "form-control" value="<?php echo $row4['exam_id'];?>" >
                                          
                                 </div>
                               
                                <div class="control-group">
                                    <div class="controls">
                                        <input type="hidden" class = "form-control"  name="course_name" value="<?php echo $row4['course'];?>"   >
                                    </div>
                                </div>
                               
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Objective:</label>
                                    <div class="controls">
                                        <select onchange="fetch_select(this.value);" class="form-control" name="objective">
                                                 <option>Choose Objective</option>
                                                     <?php
             
                                                $ide = $_GET['id'];
												$ide2 = $_GET['id2'];
                                                $select=mysqli_query($GLOBALS["___mysqli_ston"], "select * from objective, exam
																								where  exam_id='$ide' 
																								and objective.course_id = exam.course_id
																							");
                                                   while($row=mysqli_fetch_array($select)){
															
															
                                                             echo "<option>".$row['objective']."</option>";
															 
															 $question_id = $row['question_id'];
															 $exam_id = $row['exam_id'];
															 
															 $solo = mysqli_query($GLOBALS["___mysqli_ston"], "select * from question,multiple_choice
																							where question = '$question_id'
																								
																							");
															  
															   while($row=mysqli_fetch_array($solo)){
																   
																   
																   $question_id = $row['question_id'];
															   }
                                                  }
                                                     ?>
                                                    </select>
                                    </div>
                                </div>     
								
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Choose Question:</label>
                                    <div class="controls">
									
                                        <select onchange="fetch_Correct(this.value); fetch_Type(this.value); fetch_marks(this.value);
														  fetch_other(this.value); fetch_B(this.value); fetch_C(this.value);
														  fetch_D(this.value);  fetch_Image(this.value);" class="form-control" 
														  id="new_select" name="question">
														  
										<?php 
												
										?>
										<option>Choose question</option>
								        </select>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Question type</label>
                                    <div class="controls">
                                        <select class="form-control" id="new_Type" name="question_type">
										<option value="M">Multiple</option>
										<option value="S">Structured</option>
										<option value="SM">Structured Multiple</option>
										<option value="T">True/False</option>
										<option value="E">Essay</option>
								        </select>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Add To Section</label>
                                    <div class="controls">
                                        <select class="form-control" id="new_Section" name="question_sec">
										<option value="A">Section A</option>
										<option value="B">Section B</option>
										<option value="D">Section C</option>
								        </select>
                                    </div>
                                </div>

								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Option A</label>
                                    <div class="controls">
                                        <select class="form-control" id="new_A" name="A">
								        </select>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Option B</label>
                                    <div class="controls">
                                        <select class="form-control" id="new_B" name="B">
								        </select>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Option C</label>
                                    <div class="controls">
                                        <select class="form-control" id="new_C" name="C">
								        </select>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Option D</label>
                                    <div class="controls">
									
										<!--<input class="form-control"  id="new_D" name="D">-->
                                        <select class="form-control" id="new_D" name="D">
								        </select>
                                    </div>
                                </div>
							
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Marks</label>
                                    <div class="controls">
                                        <input class="form-control" id="new_marks" name="marks" required>
								        
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Answering Lines</label>
                                    <div class="controls">
                                        <input class="form-control" id="answer_lines" name="answer_lines">
								        
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Correct Answer</label>
                                    <div class="controls">
                                        <select class="form-control" id="new_Correct" name="correct">
								        </select>
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="inputPassword">image</label>
                                    <div class="controls">
                                        <select class="form-control" id="new_Image" name="image">
								        </select>
                                    </div>
                                </div>
                               
								<div class = "modal-footer">
											 <button name = "go" class="btn btn-primary">Save</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                           

								</div>
							
									   </div>
                                     
                                          
                                      
                                    </div>
									
									  </form>  
									  
									   <?php include ('connect.php');
                            if (isset($_POST['go'])) {

                              $exam_name = $_POST['exam_name'] ;
					          $course_name = $_POST['course_name'] ;					
					          $objective = $_POST['objective'] ;
							  $question = $_POST['question'];
							  $section = $_POST['question_sec'];
							  $A = $_POST['A'];
							  $B = $_POST['B'];
							  $C = $_POST['C'];
							  $D = $_POST['D'];
					         $total_marks = $_POST['marks'] ;
							 $answer_lines = $_POST['answer_lines'];
						     $time_limit = $_POST['question_type'];
							 $correct = $_POST['correct'];
							 $image = $_POST['image'];
							 $obj_id = $_POST['obj_id'];
							 
				$questionie=mysqli_query($GLOBALS["___mysqli_ston"], "select * from question where question = '$question' ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
				$que=mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question where exam_id = '$ide' and question_id = '$question_id' ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
				$row_query=mysqli_fetch_array($que);
                                if($row_query>0){
                                echo "<script>alert('Question already exist!');</script>";
                                }
                                else{
								$quest = mysqli_query($GLOBALS["___mysqli_ston"], "select * from question where question = '$question' ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
								while ($row = mysqli_fetch_array($quest)) {
                                        $question_id = $row['question_id'];
										
										mysqli_query($GLOBALS["___mysqli_ston"], "insert into exam_question (id_que_exam, exam_id, question_id, section, marks, answer_lines, correct, image)
										values ('', '$exam_id','$question_id','$section','$total_marks','$answer_lines','$correct','$image')
                                ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                }
								}
                               $select=mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_objective where objective='$objective'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
							   $row=mysqli_fetch_assoc($select);
							   if($row==0){
								   
                                mysqli_query($GLOBALS["___mysqli_ston"], "insert into exam_objective (objective,exam_name,obj_id) value('$objective','$exam_name','$obj_id')") or die(msql_error());
							   }
                               echo"Saved!";
                            }
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>