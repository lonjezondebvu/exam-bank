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

<head>

<body>
<?php 

                                    $query2 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from objective where objective='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    $row2 = mysqli_fetch_array($query2);
                                        $id = $row2['objective'];
										
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM objective");
										
										question_type(); 

                                        ?>

<form  method="post" enctype="multipart/form-data">
<input type="hidden" name="question_type" value="S"/>
<div class="control-group">
                                    <label class="control-label" for="inputPassword">Question:</label>
                                    <div class="controls">
                                       <textarea name="question" class = "form-control" placeholder="Question here!!" id="articleContent"style="hieght:300px;" required  ></textarea><br/><label class="control-label" for="inputPassword">Question:</label>
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
                                    <label class="control-label" for="inputPassword">Answering lines:</label>
                                    <div class="controls">
                                        <input type="text" name="answer_lines" class = "form-control" placeholder="Answering lines" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Answer(s):</label>
                                    <div class="controls">
                                        <textarea name="correct" class = "form-control" placeholder="Answer(s)" id="articleContent"style="hieght:300px;" required  ></textarea>
										                 </div>
                                <br/>
<input type="submit" value="save" class="btn btn-primary" name="go"/>
</form>
<script>
                                                                function goBack() {
                                                                window.history.back();
                                                                                   }
                                                      </script>
<?php                       ?>
							
</body>

</html>