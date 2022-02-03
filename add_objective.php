<?php include ('connect.php');
			$get_id = $_GET['id'];
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          <?php include ('connect.php');
										  
                                    $query3 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from course,department where courseid='$get_id'
																									AND course.department_id = department.department_id") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    $row3 = mysqli_fetch_array($query3);
                                    $obj_course=$row3['course_name'];
									$row2 = mysqli_fetch_array($query2);
									//$get=$row2['programme'];
									$get3=$row2['faculty_id'];
									$get2=$row2['department_id'];
                                    ?>
                                            <div class="alert alert-info"><strong><center>Add topic for <?php echo $obj_course; ?> </center></strong></div>
                                        </div>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">
                          
								
								 
                               
                                <div class="control-group">
                                    <?php include ('connect.php');
                                    //$query2 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from course,department where courseid='$get_id'
									//																AND course.department_id = department.department_id") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    
									
									?>
										

                                       
                                    <div class="controls">
                                        <input type="hidden" class = "form-control"  name="course_id" value="<?php echo $row2['course_name']; ?>" >
										<input type="hidden" class = "form-control"  name="faculty" value="<?php echo $row2['faculty']; ?>" >
										<input type="hidden" class = "form-control"  name="department" value="<?php echo $row2['department']; ?>" >
										<input type="hidden" class = "form-control"  name="programme" value="<?php //echo //$row2['programme']; ?>" >
                                    </div>
                                </div>
                                 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Topic:</label>
                                           <input type="text" name="objective" class = "form-control" >
                                          
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

                                $course = $_GET['id'];
                                $objective = $_POST['objective'];
								//$faculty= $_POST['faculty'];
								$department = $_POST['department'];
                                //$programme = $_POST['programme'];
								
                                
                                



                                mysqli_query($GLOBALS["___mysqli_ston"], "insert into objective (objective_id , course_id , objective)
                            	values ('',$course,'$objective');
                                ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
									
									//header('location:objective.php');
                               
                            }
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>