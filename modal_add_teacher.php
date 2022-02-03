<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <div class="alert alert-info"><strong><center>Add Exams </center></strong></div>
                                        </div>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">
                                
                                <hr>
								
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Exam Name:</label>
                                           <input type="text" name="fname" class = "form-control" placeholder="Name">
                                          
                                 </div>
                               
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Course Name:</label>
                                    <div class="controls">
                                        <input type="text" class = "form-control"  name="lname"  placeholder="Description" >
                                    </div>
                                </div>
                               
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Objective:</label>
                                    <div class="controls">
                                        <input type="text" name="arank" class = "form-control" placeholder="Origin">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Total Marks:</label>
                                    <div class="controls">
                                        <input type="text" name="designation"  class = "form-control" placeholder="Price" >
                                    </div>
                                </div>
								 <div class="control-group">
                                    <label class="control-label" for="inputPassword">Time Limit:</label>
                                    <div class="controls">
                                        <input type="text" name="department" class = "form-control">
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

                              $fname=$_POST['fname'] ;
					$lname= $_POST['lname'] ;					
					$arank=$_POST['arank'] ;
					$designation=$_POST['designation'] ;
						$department=$_POST['department'];

                                mysqli_query($GLOBALS["___mysqli_ston"], "insert into teachers (teachid,fname,lname,arank,designation,department)
                            	values ('','$fname','$lname','$arank','$designation','$department')
                                ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));

                                header('location:teacher.php');
                            }
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>