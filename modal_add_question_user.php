<html>
<?php 
 include ('session.php');
 include ('header.php');
 include('connect.php');
 include('functions.php');
$get_id=$_GET['id'];
?>
<head>
<script src="https://cloud.tinymce.com/5-testing/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
 </head>
 <body>

<?php include ('connect.php');
                                    $query2 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from objective where objective='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    $row2 = mysqli_fetch_array($query2);
                                        $id = $row2['objective'];
										
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM objective");
										

                                        
										question_type();
										
										
										
										?>
										
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="hieght:100%; width:80%;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <div class="alert alert-info"><strong><center>Add Question </center></strong></div>
											
                                        </div>
                                        <div class="modal-body">
                              
                                
                                <hr>
								
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Choose Question Type Below:</label><br/>
										   
                                           <a href="mult.php<?php echo '?id=' . $id; ?>" target="main" style="text-decoration:none;">
										   
                              <button class="btn btn-success" style="outline:none; height:25px; padding-top:5px; font-size:12px;">
							  Multi-choice</button>
                           </a>
							
							<a href="true.php<?php echo '?id=' . $id; ?>" target="main" style="text-decoration:none;">
							
                             <button class="btn btn-success" style="outline:none; height:25px; padding-top:5px; font-size:12px;"> True or False</button>
                            </a>
					
							
							
							<a href="structure.php<?php echo '?id=' . $id; ?>" target="main" style="text-decoration:none;">
							
                              <button class="btn btn-success" style="outline:none; height:25px; padding-top:5px; font-size:12px;">Structure</button>
                           </a>
						   
						   <a href="structuredMultiple.php<?php echo '?id=' . $id; ?>" target="main" style="text-decoration:none;">
							
                              <button class="btn btn-success" style="outline:none; height:25px; padding-top:5px; font-size:12px;">Structured Multiple</button>
                           </a>
                           
                           <a href="yes.php<?php echo '?id=' . $id; ?>" target="main" style="text-decoration:none;">
							
                              <button class="btn btn-success" style="outline:none; height:25px; padding-top:5px; font-size:12px;">Essay</button>
                           </a><br>
						   
                                          
                                 </div>
                               
                                <iframe name="main" style="width:100%; height:500px; border:none;"></iframe>

                              
								<div class = "modal-footer">
											 
									<a href="forquestion_user.php<?php echo '?id=' . $id; ?>" style="text-decoration:none;">		<button class="btn btn-danger">Close</button></a>
                                           

								</div>
							
									   </div>
                                     
                                          
                                      
                                    </div>
									
									  </form>  
										
                                </div>
                            </div>
</body>
</html>