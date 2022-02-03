<?php include ('session.php');?>
<?php
                            $get_id = $_GET['id'];
							$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from department where department='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
							$id = $row['faculty'];
                            if (isset($_POST['update'])) {

                                
                                $department = $_POST['department'];
                                
                               

                                mysqli_query($GLOBALS["___mysqli_ston"], "update department set department='$department' where department='$get_id'") or die(mysql_query());
								mysqli_query($GLOBALS["___mysqli_ston"], "update programme set department='$department' where department='$get_id'") or die(mysql_query());
								mysqli_query($GLOBALS["___mysqli_ston"], "update course set department='$department' where department='$get_id'") or die(mysql_query());
								mysqli_query($GLOBALS["___mysqli_ston"], "update objective set department='$department' where department='$get_id'") or die(mysql_query());
								mysqli_query($GLOBALS["___mysqli_ston"], "update question set department='$department' where department='$get_id'") or die(mysql_query());
								
							 header("location:department_user.php?id=$id");
                            }
                            ?>	
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
                <a class="navbar-brand" href="index.html">room </a>
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
       <?php include ('nav_sidebar_user.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-5 well">
                        <div class="hero-unit-table">   
                          <div class="hero-unit-table">   
                            <?php include ('connect.php');
                            $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from department where department='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
							$id = $row['department'];
                            ?>
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Edit department</strong> </div>
                                <hr>
                                
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Department</label>
                                    <div class="controls">
                                        <input type="text"  name="department"  class ="form-control" value="<?php echo $row['department']; ?>">
                                    </div>
                                </div>
                               
								
									<hr/>

                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
										<a href="department_user.php<?php echo '?id=' . $id; ?>" class="btn btn-danger"><i class="icon-pencil icon-large"></i>&nbsp;back</a>
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
