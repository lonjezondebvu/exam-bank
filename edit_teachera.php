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
                <a class="navbar-brand" href="index.html">Teachers </a>
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
                            $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from teachers where teachid='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
                            ?>
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Edit Teacher</strong> </div>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">FirstName</label>
                                    <div class="controls">
                                        <input type="text" name="fname" class ="form-control" value="<?php echo $row['fname']; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">LastName</label>
                                    <div class="controls">
                                        <input type="text"  name="lname"  class ="form-control" value="<?php echo $row['lname']; ?>">
                                    </div>
                                </div>
                               
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Status</label>
                                    <div class="controls">
                                        <input type="text" name="arank" class = "form-control"  value="<?php echo $row['arank']; ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Designation</label>
                                    <div class="controls">
                                        <input type="text" name="designation"  class = "form-control" value="<?php echo $row['designation']; ?>">
                                    </div>
                                </div>

                               
								
									<hr/>

                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
										<span><a href = "forteacher.php" class = "btn btn-danger"> Back</a></span>
                                    </div>
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['update'])) {

                                $fname = $_POST['fname'];
                                $lname = $_POST['lname'];
                                $arank = $_POST['arank'];
                                $designation = $_POST['designation'];
                               

                                mysqli_query($GLOBALS["___mysqli_ston"], "update teachers set fname='$fname',lname='$lname',arank='$arank',designation='$designation' where teachid='$get_id'") or die(mysql_query());
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
