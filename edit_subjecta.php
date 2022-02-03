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
                <a class="navbar-brand" href="index.html">subject </a>
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
       <?php include ('nav_sidebar.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-5 well">
                        <div class="hero-unit-table">   
                          <div class="hero-unit-table">   
                            <?php include ('connect.php');
                            $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from subject where subjectid='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
                            ?>
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Edit Subject</strong> </div>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Subject</label>
                                    <div class="controls">
                                        <input type="text" name="subject_code" class ="form-control" value="<?php echo $row['subject_code']; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Title</label>
                                    <div class="controls">
                                        <input type="text"  name="subject_title"  class ="form-control" value="<?php echo $row['subject_title']; ?>">
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Category</label>
                                    <div class="controls">
                                        <input type="text"  name="subject_category"  class ="form-control" value="<?php echo $row['subject_category']; ?>">
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Semester</label>
                                    <div class="controls">
                                        <input type="text"  name="semester"  class ="form-control" value="<?php echo $row['semester']; ?>">
                                    </div>
                                </div>
                               
								
									<hr/>

                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
										<span><a href = "forsubject.php" class = "btn btn-danger"> Back</a></span>
                                    </div>
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['update'])) {

                                $subject_code = $_POST['subject_code'];
                                $subject_title = $_POST['subject_title'];
								  $subject_title = $_POST['subject_category'];
								    $subject_title = $_POST['semester'];
									
                                
                               

                                mysqli_query($GLOBALS["___mysqli_ston"], "update subject set subject_code='$subject_code',subject_title='$subject_title',subject_category='$subject_category',semester='$semester' where subjectid='$get_id'") or die(mysql_query());
                             echo"Saved";
                            }
                            ?>


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
