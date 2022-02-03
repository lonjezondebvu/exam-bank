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
                <a class="navbar-brand" href="index.html">Topic</a>
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
                                <div class="alert alert-info"><strong>Edit Topic</strong> </div>
                                <hr>
                                <?php
                            $get_id = $_GET['id'];
							$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from objective where objective_id='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
							$id = $row['course_id'];
							$name = $row['objective'];
                            if (isset($_POST['update'])) {

                                
                                $objective = $_POST['objective'];
                                
                               

							mysqli_query($GLOBALS["___mysqli_ston"], "update objective set objective='$objective' where objective_id='$get_id'") or die(mysql_query());
                  
							mysqli_query($GLOBALS["___mysqli_ston"], "update question set objective='$objective' where objective='$name'") or die(mysql_query());
							
							$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from objective where objective_id='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
							$id = $row['course_id'];
							
							echo "<div class='alert alert-info'><strong>Topic changed </strong> </div>";
                            }
                            ?>	
                                <div class="control-group">
								<?php include ('connect.php');
                            $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from objective where objective_id='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
							$id = $row['course_id'];
                            ?>
                                    <label class="control-label" for="inputPassword">Topic</label>
                                    <div class="controls">
                                        <textarea  name="objective"  class ="form-control" value=""><?php echo $row['objective']; ?></textarea>
                                    </div>
                                </div>
                               
								
									<hr/>

                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
										<a href="objective.php<?php echo '?id=' . $id; ?>" class="btn btn-danger"><i class="icon-pencil icon-large"></i>&nbsp;back</a>
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
