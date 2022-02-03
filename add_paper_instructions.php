<html>
	<head>
	<?php include ('session.php');	
		  include ('header.php');
		  include ('connect.php');
		  ?>
	<script language="JavaScript" type="text/javascript" src="wysiwyg.js"></script>
	</head>
	<body>
	<div class="modal fade" id="InstModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <div class="alert alert-info"><strong><center>Add Instructions </center></strong></div>
                                        </div>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">
                                
                                <hr>
								 <div class="control-group">
                                          
                                           <textarea id="textarea1" name="instructions" placeholder="Click Here To Write Instructions" style="height: 170px; width: 500px;"></textarea>
                                          
										  	
                                 </div>
								 
								 <div class = "modal-footer">
											 <button name ="in" class="btn btn-primary">Save Instructions</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                           

								</div>
                               
								</div>
								</div>
								</div>
	
								
								</div>
	
											<script language="javascript">
												generate_wysiwyg('textarea1');
											</script>
											
											 <?php
             
                                                $ide = $_GET['id'];
												//$ide2 = $_GET['id2'];
                                                $select = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam 
																								where exam_id='$ide' 
																								");
                                                   while($row=mysqli_fetch_array($select)){
                                           
															 $exam_id = $row['exam_id'];
                                                  
												  
												  if (isset($_POST['in'])) {

												$instructions = $_POST['instructions'];
												
												
												mysqli_query($GLOBALS["___mysqli_ston"], "insert into instructions
																			(instr_id, exam_id, instructions)
																			values('', '$exam_id','$instructions')")
																			or die(mysqli_error($GLOBALS["___mysqli_ston"]));
												
												  }
												   }
                                                     ?>
		
	
	</body>
	</html>