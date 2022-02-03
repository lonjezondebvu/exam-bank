<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <div class="alert alert-info"><strong><center>Add Objective</center></strong></div>
                                        </div>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">
                                
                                <hr>
								
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Course:</label>
                                           <select name="course" class = "form-control" >
                                              <option>Choose Course</option>
											  <?php include ('connect.php');
                                    $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from course") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while ($row = mysqli_fetch_array($query)) {
                                        $id = $row['courseid'];
										
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM course");
										

                                        ?>
											  <option><?php echo $row['course'];?></option>
									<?php }?>
											  </select>
                                 </div>
                         
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Objective:</label>
                                    <div class="controls">
                                        <input type="text" class = "form-control"  name="objective" >
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

                                $course = $_POST['course'];
                                $objective = $_POST['objective'];
                                



                                mysqli_query($GLOBALS["___mysqli_ston"], "insert into objective(course_id,objective)
                            	values ('$course','$objective')
                                ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));

                                header('location:forobjective.php');
                            }
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>