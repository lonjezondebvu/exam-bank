<?php include ('connect.php');?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <div class="alert alert-info"><strong><center>Add department </center></strong></div>
                                        </div>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">
                          
								
								 
                               
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
                                 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Department:</label>
                                           <input type="text" name="department" class = "form-control" required>
                                          
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

                                $fac = mysqli_query($GLOBALS["___mysqli_ston"], "select * from faculty") or die(mysql_query());
								$frow = mysqli_fetch_array($fac);
								$faculty = $frow['faculty'];
                                $department = $_POST['department'];
								
								
                                
                                



                                mysqli_query($GLOBALS["___mysqli_ston"], "insert into department (faculty,department)
                            	values ('$faculty','$department');
								
								
								

                                ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));

                               
                            }
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>