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
                <a class="navbar-brand" href="index.html">Faculty</a>
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
                           
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Edit School</strong> </div>
                                <hr>
                                <?php $get_id = $_GET['id'];
                            if (isset($_POST['update'])) {
								
								$qury = mysqli_query($GLOBALS["___mysqli_ston"], "select * from faculty") or die(mysql_query());
								$result = mysqli_fetch_array($qury);
								$fname = $result['faculty'];
								
								
                                $faculty = $_POST['faculty'];
								mysqli_query($GLOBALS["___mysqli_ston"], "update faculty set faculty='$faculty' where faculty_id='$get_id'") or die(mysqli_query());
								
								
								mysqli_query($GLOBALS["___mysqli_ston"], "update department set faculty='$faculty'") or die(mysqli_query());
								mysqli_query($GLOBALS["___mysqli_ston"], "update programme set faculty='$faculty'") or die(mysqli_query());
								mysqli_query($GLOBALS["___mysqli_ston"], "update question set faculty='$faculty'") or die(mysqli_query());
								
							 echo "<div class='alert alert-info'><strong>School name changed to ".$faculty."</strong> </div>";
                            }
                            ?>	
                                </div>
								
								 <?php include ('connect.php');
                            $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from faculty where faculty_id='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
                            ?>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">School Name</label>
                                    <div class="controls">
                                        <input type="text"  name="faculty"  class ="form-control" value="<?php echo $row['faculty']; ?>">
                                    </div>
                                </div>
                               
                               
								
									<hr/>

                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
										<a href="school.php" class="btn btn-danger"><i class="icon-pencil icon-large"></i>&nbsp;back</a>
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
