<?php include ('session.php');?>	
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
                <a class="navbar-brand" href="index.html">Exams </a>
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
                                <div class="alert alert-info"><strong>Edit Exam</strong> </div>
                                <hr>
								    <?php
                            if (isset($_POST['update'])) {

                                $exam_name = $_POST['exam_name'];
                                $course = $_POST['course'];
                                $time_limit = $_POST['time_limit'];
                                $total_marks = $_POST['total_marks'];
                               

                                mysqli_query($GLOBALS["___mysqli_ston"], "update exam set exam_name='$exam_name',time_limit='$time_limit',
																			total_marks='$total_marks' where exam_id='$get_id'") 
																			or die(mysql_query());
																			
								
                             echo"<div class='alert alert-info'><strong>Edited Successfully</strong> </div>";
                            }
                            ?>
                                <div class="control-group">
								 <?php include ('connect.php');
                            $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam, course where exam_id='$get_id'
																					and course.courseid = exam.course_id") 
																					or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
                            ?>
                                    <label class="control-label" for="inputPassword">Exam name</label>
                                    <div class="controls">
                                        <input type="text" name="exam_name" class ="form-control" value="<?php echo $row['exam_name']; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Course</label>
                                    <div class="controls">
                                        <input type="text"  name="course"  class ="form-control" value="<?php echo $row['course_name']; ?>">
                                    </div>
                                </div>
                               
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Time limit</label>
                                    <div class="controls">
                                        <input type="text" name="time_limit" class = "form-control"  value="<?php echo $row['time_limit']; ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Total Marks</label>
                                    <div class="controls">
                                        <input type="text" name="total_marks"  class = "form-control" value="<?php echo $row['total_marks']; ?>">
                                    </div>
                                </div>

                               
								
									<hr/>

                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
										<span><a href = "forexams.php" class = "btn btn-danger"> Back</a></span>
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
