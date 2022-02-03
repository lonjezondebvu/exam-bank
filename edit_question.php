<?php include ('session.php');	
		include ('connect.php');?>
          
                            
<?php
include('header.php');
$get_id = $_GET['id'];
?>
<!DOCTYPE html>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Question</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
              
                <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      						
					    Welcome : Administrator
                    </a>
                  
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
       <?php include ('nav_sidebar3.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-5 well">
                        <div class="hero-unit-table">   
                          <div class="hero-unit-table">   
                          
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Edit Question</strong> </div>
                                <hr>
								<?php
                              
							
							if(isset($_POST['update'])){
								
                            $query1 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from question where question_id='$get_id'")
													or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            
							
							while($row = mysqli_fetch_array($query1)){
								
							
                             

								$id = $row['objective'];
								$type = $row['question_type'];
                                $question = $_POST['question'];                           
								$marks= $_POST['marks'];
                                $A = $_POST['A'];
                                $B = $_POST['B'];
								$C = $_POST['C'];
								$D = $_POST['D'];  
								$correct = $_POST['correct']; 
									if($type =='M'){
											mysqli_query($GLOBALS["___mysqli_ston"], "update question 
											set question='$question',
											correct='$correct' where question_id='$get_id'") or die(mysql_query());
											
											
											mysqli_query($GLOBALS["___mysqli_ston"], "update multiple_choice 
											set A='$A',B='$B',C='$C',D='$D'
											where question_id='$get_id'") or die(mysql_query());
											
											echo "<div class='alert alert-info'><strong>Question Edited successfully </strong> </div>";
											
									}elseif($type =='SM'){
										
											mysqli_query($GLOBALS["___mysqli_ston"], "update question 
											set question='$question',
											correct='$correct' where question_id='$get_id'") or die(mysql_query());
											
											mysqli_query($GLOBALS["___mysqli_ston"], "update structuredmultiple 
											set A='$A',B='$B',C='$C',D='$D'
											where question_id='$get_id'") or die(mysql_query());
											
											echo "<div class='alert alert-info'><strong>Question Edited successfully </strong> </div>";
									}else{
											mysqli_query($GLOBALS["___mysqli_ston"], "update question 
											set question='$question',
											correct='$correct' where question_id='$get_id'") or die(mysql_query());
											
											echo "<div class='alert alert-info'><strong>Question Edited successfully </strong> </div>";
									}
                            }
							
							 }
                            ?>
                                <div class="control-group">
								  <?php 
								  $get_id = $_GET['id'];
								  
                            $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from question where question.question_id='$get_id' 
																				") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
							
							if($row['question_type']=='M'){
							
							$mlt = mysqli_query($GLOBALS["___mysqli_ston"], "select * from multiple_choice where question_id='$get_id' 
																				") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
							$mlti = mysqli_fetch_array($mlt);
							}
							
							$id=$row['objective'];
                            ?>
                                    <label class="control-label" for="inputPassword">Question:</label>
                                    <div class="controls">
                                        <input type="text" class = "form-control"  name="question"  placeholder="Description" value="<?php echo $row['question']; ?>" >
                                    </div>
                                </div>
                               
                                
								 
								<?php 
								
									if($row['question_type']=='M'){
										
										echo '
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Option A:</label>
                                    <div class="controls">
                                        <input type="text" name="A" class = "form-control" placeholder="Answer" value="'.  $mlti['A'] .'">
                                    </div>
                                </div><div class="control-group">
                                    <label class="control-label" for="inputPassword">Option B:</label>
                                    <div class="controls">
                                        <input type="text" name="B" class = "form-control" placeholder="Answer" value="'.  $mlti['B'] .'">
                                    </div>
                                </div><div class="control-group">
                                    <label class="control-label" for="inputPassword">Option C:</label>
                                    <div class="controls">
                                        <input type="text" name="C" class = "form-control" placeholder="Answer" value="'. $mlti['C'] .'">
                                    </div>
                                </div><div class="control-group">
                                    <label class="control-label" for="inputPassword">Option D:</label>
                                    <div class="controls">
                                        <input type="text" name="D" class = "form-control" placeholder="Answer" value="'.  $mlti['D'] .'">
                                    </div>
                                </div>
									
								'; 
									}
								?>
                                </div><div class="control-group">
                                    <label class="control-label" for="inputPassword">Correct answer:</label>
                                    <div class="controls">
                                        <input type="text" name="correct" class = "form-control" value="<?php echo $row['correct']; ?>">
                                    </div>
                                </div>
								
								
								
									<hr/>

                                <div class="control-group">
                                    <div class="controls">

                                        <button  name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
										<a href="forquestion.php<?php echo '?id=' . $id; ?>" class="btn btn-danger"><i class="icon-pencil icon-large"></i>&nbsp;back</a>
										<script>
                                                                function goBack() {
                                                                window.history.back();
                                                                                   }
                                                      </script>
                                    </div>
                                </div>
                            </form>

                            
                            


                        </div>
                        </div>
                        </div>
                    </div>
                </div> 
                
				
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
   <?php include ('script.php');?>
</body>
</html>
