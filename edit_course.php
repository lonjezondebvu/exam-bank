<?php include ('session.php');?>

<?php
include('header.php');

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
                <a class="navbar-brand" href="index.html">Subject </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
              
                <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      						
					    WELCOME
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
                            <?php include ('connect.php');
                            $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from course where courseid='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
                            ?>
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Edit Subject</strong> </div>
                                <hr>
								<?php                        $get_id = $_GET['id'];
                             $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from course where courseid='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
							 
                            $row = mysqli_fetch_array($query);
							$get_pro=$row['programme'];
                            if (isset($_POST['update'])) {

                                $course = $_POST['course'];
                                $course_code= $_POST['course_code'];
                                
                               

                                mysqli_query($GLOBALS["___mysqli_ston"], "update course set course_name='$course',course_code='$course_code' where courseid='$get_id'") or die(mysql_query());
								//mysqli_query($GLOBALS["___mysqli_ston"], "update objective set course_id='$course' where course_id='$get_id'") or die(mysql_query());
								//mysqli_query($GLOBALS["___mysqli_ston"], "update question set course='$course' where courseid='$get_id'") or die(mysql_query());
                              
							  echo "<div class='alert alert-info'><strong>Subject Edited successfully </strong> </div>";
                            }
                            ?>	
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Subject</label>
                                    <div class="controls">
                                        <input type="text" name="course" class ="form-control" value="<?php echo $row['course_name']; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Subject Code</label>
                                    <div class="controls">
                                        <input type="text"  name="course_code"  class ="form-control" value="<?php echo $row['course_code']; ?>">
                                    </div>
                                </div>
                               
                               
								
									<hr/>

                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
										<a onclick="goBack();" class="btn btn-danger"><i class="icon-pencil icon-large"></i>&nbsp;back</a>
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
