<?php include ('connect.php');
                                    
										

                                        ?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <div class="alert alert-info"><strong><center>Add Subject </center></strong></div>
                                        </div>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">
                                
                                <hr>
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword"> Department:</label>
                                    <div class="controls">
                                        <select class = "form-control"  name="department" id="new_Departments">
										<option selected>Choose Department </option>	
										<?php
								$select=mysqli_query($GLOBALS["___mysqli_ston"], "select * from department 
																				  ");
                                                   while($row=mysqli_fetch_array($select))
                                                {
															
                                                             echo "<option>".$row['department']."</option>";
												}
                                                  
                                                     ?>
										</select>
                                    </div>
                                </div>							 
                               
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Subject Code:</label>
                                    <div class="controls">
                                        <input type="text" class = "form-control"  name="course_code" required >
                                    </div>
                                </div>
                                 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Subject:</label>
                                           <input type="text" name="course" class = "form-control" required>
                                          
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

                                $select=mysqli_query($GLOBALS["___mysqli_ston"], "select * from faculty 
																				  ");
                                $row=mysqli_fetch_array($select);
                                               
								$faculty= $row['faculty'];
								
                                /*$programme = $_POST['programme'];*/
                                
                                $dpmt = $_POST['department'];
								$course_name = $_POST['course'];
								$course_code = $_POST['course_code'];
								$faculty_id= $row['faculty_id'];
                                $select = mysqli_query($GLOBALS["___mysqli_ston"], "select * from department 
																				  where department = '$dpmt'
																				  ");
									while($row=mysqli_fetch_array($select))
                                                {
                                                           
   
										
										$department_id = $row['department_id'];
										


                                mysqli_query($GLOBALS["___mysqli_ston"], "insert into course (courseid, faculty_id, department_id, course_name, course_code)
                            	values ('','$faculty_id','$department_id','$course_name','$course_code');
								
								
								

                                ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));

                                echo"saved";
								
												}
                            }
												
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>