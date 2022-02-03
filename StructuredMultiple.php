<?php 
 include ('session.php');
 include ('header.php');
 include('connect.php');
 include('functions.php');
 
$get_id=$_GET['id'];
?>
<html>
<head>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script language="JavaScript" type="text/javascript" src="wysiwyg.js"></script>
<head>

<body>
<?php include('connect.php');

                                    $query2 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from objective where objective='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    $row2 = mysqli_fetch_array($query2);
                                        $id = $row2['objective_id'];
										
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM objective");
										
							
							
                                        ?>
<form  method="post" enctype="multipart/form-data">
<input type="hidden" name="question_type" value="SM"/>
<div class="control-group">
                                    <label class="control-label" for="inputPassword">Question:</label>
                                    <div class="controls">
                                        <textarea class = "form-control"  name="question"  placeholder=" Enter your question here" required></textarea><br/>
                                        <label class="control-label" for="inputPassword">Image:</label>
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
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Question a:</label>
                                    <div class="controls">
                                        <input type="text" name="qa" class = "form-control" placeholder="Question A" required>
                                    </div>
                                </div><div class="control-group">
                                    <label class="control-label" for="inputPassword">Question b:</label>
                                    <div class="controls">
                                        <input type="text" name="qb" class = "form-control" placeholder="Question B" required>
                                    </div>
                                </div><div class="control-group">
                                    <label class="control-label" for="inputPassword">Question c:</label>
                                    <div class="controls">
                                        <input type="text" name="qc" class = "form-control" placeholder="Question C" required>
                                    </div>
                                </div><div class="control-group">
                                    <label class="control-label" for="inputPassword">question d:</label>
                                    <div class="controls">
                                        <input type="text" name="qd" class = "form-control" placeholder="Question D" required>
                                    </div>
                                </div>
								<br/>
									<div class="control-group">
                                    <label class="control-label" for="inputPassword">CORRECT ANSWERS:</label>
                                    <div class="controls">
											 <textarea id="textarea1" name="correct" placeholder="" style="height: 170px; width: 500px;"></textarea>
                                    </div>
<br/>
<input type="submit" value="save" class="btn btn-primary" name="go"/>
											<script language="javascript">
												generate_wysiwyg('textarea1');
											</script>
<?php
			if(isset($_POST['go'])){
								
                                $question_type = $_POST['question_type'];
                                $question = $_POST['question'];
                                $course= $_POST['course'];
                                $faculty= $_POST['faculty'];
                                $department= $_POST['department'];
                                $programme= $_POST['programme'];
								$objective = $_POST['objective'];
								$marks= $_POST['marks'];
                                $A = $_POST['qa'];
                                $B = $_POST['qb'];
								 $C = $_POST['qc'];
                                $D = $_POST['qd'];
								$correct=$_POST['correct'];
								$target="images/".basename($_FILES['image']['name']);
								$image= $_FILES['image']['name'];



                                mysqli_query($GLOBALS["___mysqli_ston"], "insert into question 
								(question_id,faculty,department,course,objective,question_type,question,correct,image)
                            	values 
								('','$faculty','$department','$course','$objective','$question_type','$question','$correct','$image')
                                ") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
									if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
									{
									echo"image uploaded";
									}
									
									
									
										
								$que = mysqli_query($GLOBALS["___mysqli_ston"], "select * from question where question.question = '$question'
																					and question_type='SM'") 
																					or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while ($row = mysqli_fetch_array($que)) 
									{
                                        $question_id = $row['question_id'];

										mysqli_query($GLOBALS["___mysqli_ston"], "insert into structuredmultiple 
										(question_id, A, B, C, D)
										values 
										('$question_id','$A','$B','$C','$D')
										") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
								
								
											echo"<br/><br/><div class='alert alert-info'>
											<strong><i class='icon-user icon-large'></i>&nbsp;<h1> Saved</h1> You can add another Question</strong>
											</div>";
									}
									
							
									
								
								
							}
?>
</form>

</body>

</html>