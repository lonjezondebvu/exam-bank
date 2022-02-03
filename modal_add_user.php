<?php include ('connect.php');
                                    
										

                                        ?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <div class="alert alert-info"><strong><center>Add User </center></strong></div>
                                        </div>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">
                                
                                <hr>
                               
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">First Name:</label>
                                    <div class="controls">
                                        <input type="text" class = "form-control"  name="fname" required >
                                    </div>
                                </div>
                                 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Last Name:</label>
                                           <input type="text" name="lname" class = "form-control" required>
                                          
                                 </div>
                              <div class="control-group">
                                           <label class="control-label" for="inputEmail">Username:</label>
                                           <input type="text" name="username" class = "form-control" required>
                                          
                                 </div>
                                 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Password:</label>
                                           <input type="text" name="password" class = "form-control" required>
                                          
                                 </div>
                                  <div class="control-group">
                                           <label class="control-label" for="inputEmail">Course:</label>
                                           <select name="course" class = "form-control" required>
                                         
                                           <?php 
                                           $user_query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from course") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                           while($user_course= mysqli_fetch_array($user_query)){
                                           
                                           ?>
                                           <option>
                                           <?php
                                           echo $user_course['course'];
                                           }
                                           ?>
                                           </option>
                                           </select>
                                          
                                 </div>
                                 <div class="control-group">
                                    <label class="control-label" for="inputPassword"> User Level:</label>
                                    <div class="controls">
                                        <select class = "form-control"  name="department" id="new_Faculty" onchange="fetch_Departments(this.value);" >
                                            <option>Select User level</option>
                                        <option>Admin</option>
                                        <option>user</option>
                                        
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

                                $fname = $_POST['fname'];
                                $lname = $_POST['lname'];
								$department= $_POST['department'];
								$username = $_POST['username'];
                                $md5 = md5($_POST['password']);
                                
                                $course = $_POST['course'];
                                



                                mysqli_query($GLOBALS["___mysqli_ston"], "insert into users (fname,lname,department,username,password,course)
                            	values ('$fname','$lname','$department','$username','$md5','$course')
								
								
								

                                ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));

                                echo"saved";
                            }
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>