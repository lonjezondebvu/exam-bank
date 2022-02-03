<?php 
 include ('session.php');
 include ('header.php');
 include('connect.php');
 include('functions.php');
$get_id=$_GET['id'];
?>
<html>
<head>

<head>

<body>
<?php include('connect.php');

                                    $query2 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from objective where objective='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    $row2 = mysqli_fetch_array($query2);
                                        $id = $row2['objective_id'];
										
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM objective");
										
										question_type();

                                        ?>
<form  method="post" enctype="multipart/form-data">
<input type="hidden" name="question_type" value="E"/>
<div class="control-group">
                                    <label class="control-label" for="inputPassword">Question:</label>
                                    <div class="controls">
                                        <textarea type="text" class = "form-control"  name="question"  placeholder="Question here!!" required ></textarea><br/>
										<input type="file" name="image"/>
                                    </div>
                                </div>
                               
                                <div class="control-group">
                                    
                                    <div class="controls">
                                        <input type="hidden" name="course" class = "form-control" placeholder="" value="<?php echo $row2['course_id'];?>">
                                        <input type="hidden" name="faculty" class = "form-control" placeholder="" value="<?php echo $row2['faculty'];?>">
                                        <input type="hidden" name="department" class = "form-control" placeholder="" value="<?php echo $row2['department'];?>">
                                        <input type="hidden" name="programme" class = "form-control" placeholder="" value="<?php echo $row2['programme'];?>">
                                    </div>
                                </div>
								  <div class="control-group">
                         
                                    <div class="controls">
                                        <input type="hidden" name="objective" class = "form-control" placeholder="" value="<?php echo $row2['objective'];?>">
                                    </div>
                                </div>
								 <div class="control-group">
                                    <label class="control-label" for="inputPassword">Marks:</label>
                                    <div class="controls">
                                        <input type="text" name="marks" class = "form-control" placeholder="Marks" required>
                                    </div>
                                </div>
								
						
                                
<br/>
<input type="submit" value="save" class="btn btn-primary" name="go"/>
</form>

</body>

</html>