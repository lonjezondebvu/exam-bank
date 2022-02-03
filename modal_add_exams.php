<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <div class="alert alert-info"><strong><center>Add Exam Paper </center></strong></div>
                                        </div>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">
                                
                                <hr>
								
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Exam Paper Name:</label>
                                           <input type="text" name="exam_name" class = "form-control" required >
                                          
                                 </div>
                               
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Subject Name:</label>
                                    <div class="controls">
                                        <select class = "form-control"  name="course_name"   >
										<?php include ('connect.php');
                                    $query2 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from course") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while ($row2 = mysqli_fetch_array($query2)) {
 
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM course");
										

                                        ?>
										<option><?php echo $row2['course_name']; ?></option>
									<?php } ?>
										</select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">School:</label>
                                    <div class="controls">
                                        <select class = "form-control"  name="faculty"   >
										<?php include ('connect.php');
                                    $query3 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from faculty") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while ($row3 = mysqli_fetch_array($query3)) {
 
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM course");
										

                                        ?>
										<option><?php echo $row3['faculty']; ?></option>
									<?php } ?>
										</select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Department:</label>
                                    <div class="controls">
                                        <select class = "form-control"  name="department"   >
										<?php include ('connect.php');
                                    $query4 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from department") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while ($row4 = mysqli_fetch_array($query4)) {
 
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM course");
										

                                        ?>
										<option><?php echo $row4['department']; ?></option>
									<?php } ?>
										</select>
                                    </div>
                                </div>
                                
                                
                               
                                        
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Total Marks:</label>
                                    <div class="controls">
                                        <input type="text" name="total_marks"  class = "form-control" required >
                                    </div>
                                </div>
                               
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Time Limit:</label>
                                    <div class="controls">
                                        <input type="text" name="time_limit" class = "form-control" required>
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

                              $exam_name=$_POST['exam_name'] ;
                              $faculty= $_POST['faculty'];
                                $department= $_POST['department'];
                                
								
					$course_name= $_POST['course_name'] ;
					$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM course where course_name = '$course_name'");
					$row2= mysqli_fetch_array($query1);
					$course_id= $row2['courseid'];	
					
					$total_marks=$_POST['total_marks'] ;
						$time_limit=$_POST['time_limit'];
						
                                $select=mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam where exam_name='$exam_name'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                $fetch=mysqli_fetch_array($select);
                                if($fetch>0){
                                echo "<script>alert('The exam paper name already exist!!'); window.location='forexams.php'</script>";
                               
                                }
                                else
                                {
                                mysqli_query($GLOBALS["___mysqli_ston"], "insert into exam (exam_id,exam_name,course_id,total_marks,time_limit,faculty,department)
                            	values ('','$exam_name','$course_id','$total_marks','$time_limit','$faculty','$department')
                                ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));

                                header('location:forexams.php');
                                }
                            }
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>