<?php include ('connect.php');
                                        ?>
										
<div class="modal fade" id="myModal<?php echo $get_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" >
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <div class="alert alert-info"><strong><center>Add Subject </center></strong></div>
											
                                        </div>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">
                                
                                <hr>
								<!--<div class="control-group">
                                    <label class="control-label" for="inputPassword"> School:</label>
                                    <div class="controls">
                                        <select class = "form-control"  name="faculty" id="new_Faculty" onchange="fetch_Departments(this.value);" >
										<option>Choose School </option>
										<?php
								/*$select=mysqli_query($GLOBALS["___mysqli_ston"], "select * from faculty");
                                                   while($row=mysqli_fetch_array($select))
                                                {
                                                             echo "<option>".$row['faculty']."</option>";
                                                  }*/
                                                     ?>
										</select>
                                    </div>
                                </div>-->
								<!--<div class="control-group">
                                    <label class="control-label" for="inputPassword"> Department:</label>
                                    <div class="controls">
                                        <select class = "form-control"  name="department" id="new_Departments">
										<option>Choose Department </option>
										</select>
                                    </div>
                                </div>-->
								 <div class="control-group">
								 
                                           <label class="control-label" for="inputEmail">Subject Code:</label>
                                           <input type="text" name="code" class = "form-control" required >
										   
                                          
                                 </div>
								 
								 <div class="control-group">
								 
                                           <label class="control-label" for="inputEmail">Subject:</label>
                                           <input type="text" name="programme" class = "form-control" required >
										   
                                          
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

                                $course_name = $_POST['programme'];
								$course_code = $_POST['code'];
                                $get_id;
								
								$dp = mysqli_query($GLOBALS["___mysqli_ston"], "select * from department where department = '$get_id'") or die(mysql_query());
								$dpi = mysqli_fetch_array($dp);
								$department_id = $dpi['department_id'];
								
								$fac = mysqli_query($GLOBALS["___mysqli_ston"], "select * from faculty") or die(mysql_query());
								$frow = mysqli_fetch_array($fac);
								$faculty = $frow['faculty_id'];
                                
								
								

							
                                mysqli_query($GLOBALS["___mysqli_ston"], "insert into course (courseid, faculty_id, department_id, course_name, course_code)
                            	values ('','$faculty_id','$department_id','$course_name','$course_code');
								") or die(mysqli_error($GLOBALS["___mysqli_ston"]));

                               header('location:forprogramme.php?id=$get_id');

                                
                            }
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>