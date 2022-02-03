<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <div class="alert alert-info"><strong><center>Add Faculty </center></strong></div>
                                        </div>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">
                                
                                <hr>
								
								 
                               
                                
                                
                                 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Faculty:</label>
                                           <input type="text" name="faculty" class = "form-control" required >
                                          
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

                                $faculty = $_POST['faculty'];
                                
                                
                                



                                mysqli_query($GLOBALS["___mysqli_ston"], "insert into faculty (faculty)
                            	values ('$faculty')
								
								
								

                                ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));

                                echo"saved";
                            }
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>