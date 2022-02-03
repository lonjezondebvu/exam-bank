<?php include ('session.php');?>
<?php                       $get_id = $_GET['id'];
                            $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from programme where programme='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
							$id=$row['department'];
                            if (isset($_POST['update'])) {

                                $programme = $_POST['programme'];
                                
                                
                               

                                mysqli_query($GLOBALS["___mysqli_ston"], "update programme set programme='$programme' where programme='$get_id'") or die(mysql_query());
								mysqli_query($GLOBALS["___mysqli_ston"], "update course set programme='$programme' where programme='$get_id'") or die(mysql_query());
								mysqli_query($GLOBALS["___mysqli_ston"], "update objective set programme='$programme' where programme='$get_id'") or die(mysql_query());
								mysqli_query($GLOBALS["___mysqli_ston"], "update question set programme='$programme' where programme='$get_id'") or die(mysql_query());
                             header("location:forprogramme_user.php?id=$id");
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
                <a class="navbar-brand" href="index.html">Course </a>
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
       <?php include ('nav_sidebar_user.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-5 well">
                        <div class="hero-unit-table">   
                          <div class="hero-unit-table">   
                            <?php include ('connect.php');
                            $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from programme where programme='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
                            ?>
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Edit programme</strong> </div>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Programme:</label>
                                    <div class="controls">
                                        <input type="text" name="programme" class ="form-control" value="<?php echo $row['programme']; ?>">
                                    </div>
                                </div>
                                
                               
                               
								
									<hr/>

                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
										<a href="forprogramme_user.php" class="btn btn-danger"><i class="icon-pencil icon-large"></i>&nbsp;back</a>
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
