<?php include ('session.php');?>
<?php                        $get_id = $_GET['id'];
                          
                            if (isset($_POST['update'])) {

                                $fname = $_POST['fname'];
                                $lname = $_POST['lname'];
                                $department= $_POST['department'];
                                $username = $_POST['username'];
                                $password = md5($_POST['password']);
                                $course = $_POST['course'];
                               

                                mysqli_query($GLOBALS["___mysqli_ston"], "update users set fname='$fname',lname='$lname',department='$department',username='$username', password='$password', course='$course' where userid='$get_id'") or die(mysql_query());
								
                              
							  header("location:admin_user.php");
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
       <?php include ('nav_sidebar3.php');?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-5 well">
                        <div class="hero-unit-table">   
                          <div class="hero-unit-table">   
                            <?php include ('connect.php');
                            $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from users where userid='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
                            ?>
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Edit Course</strong> </div>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">First Name:</label>
                                    <div class="controls">
                                        <input type="text" class = "form-control"  name="fname" value="<?php echo $row['fname']; ?>" >
                                    </div>
                                </div>
                                 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Last Name:</label>
                                           <input type="text" name="lname" class = "form-control" value="<?php echo $row['lname']; ?>">
                                          
                                 </div>
                              <div class="control-group">
                                           <label class="control-label" for="inputEmail">Username:</label>
                                           <input type="text" name="username" class = "form-control" value="<?php echo $row['username']; ?>">
                                          
                                 </div>
                                 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Password:</label>
                                           <input type="text" name="password" class = "form-control" value="<?php echo $row['password']; ?>">
                                          
                                 </div>
                                 <div class="control-group">
                                    <label class="control-label" for="inputPassword"> User Level:</label>
                                    <div class="controls">
                                        <select class = "form-control"  name="department">
                                            
                                        <option>Admin</option>
                                        <option>user</option>
                                        
                                        </select>
                                    </div>
                                    <div class="control-group">
                                    <label class="control-label" for="inputPassword"> Course:</label>
                                    <div class="controls">
                                        <select class = "form-control"  name="course">
                                            
                                      <?php 
                                           $user_query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from course") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                           while($user_course= mysqli_fetch_array($user_query)){
                                           
                                           ?>
                                           <option>
                                           <?php
                                           echo $user_course['course_name'];
                                           }
                                           ?>
                                        
                                        
                                        </select>
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
