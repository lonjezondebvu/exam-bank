											
											<div class="hero-unit-table">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Answer Lines
									
									
									
                                </div>
								
								
                                <thead>
                                    <tr>
                                        
                                       
                                       
                                        
                                    </tr>
                                </thead  >
                                <tbody id="new_course">
                                    <?php include ('connect.php');
                                    $query = mysqli_query($GLOBALS["___mysqli_ston"], "select answer_lines from exam_question") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while ($row = mysqli_fetch_array($query)) {
                                        $id = $row['userid'];
										
										
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM course");
										

                                        ?>
                                        <tr class="warning">
                                            <td><?php echo $row['answer_lines']; ?></td> 
					
                                            
                                         
                                             
                                            <td width="25%">
											
                                                <a href="#delete_course<?php echo $id; ?>" role="button"  data-target = "#delete_product<?php echo $id;?>"data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                                <a href="edit_user.php<?php echo '?id=' . $id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a>
                                            </td>
                                            <!-- product delete modal -->
                                  
                                    <!-- end delete modal -->

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
						fewnfkiofnew 