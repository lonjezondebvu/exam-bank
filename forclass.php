<?php include ('session.php');?>	
<?php include ('header.php');?>	
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
                <a class="navbar-brand" href="#	">Class Schedule</a>
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
                    <div class="col-md-12">
                      
							
					 <h1 class="page-header">
                           
							

							Reports:
							<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#reports" >
                             Class
                            </button>
							
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#teacher">
                             Teacher
                            </button>
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#room">
                             Room
                            </button>
							
                        </h1>
			

					<?php include ('modal_class.php');?>
							<?php include ('modal_teacher.php');?>
							<?php include ('modal_room.php');?>
						<div class="hero-unit-table">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>Class Schedule</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Day</th>
                                        <th>Time Start</th>
                                        <th>Time End</th>
                                        <th>Teacher</th>
                                        <th>Subject</th>
										<th>Room</th>
										<th>Course/Year/Section</th>
										<th>Semester</th>
										<th>School Year</th>
										
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include ('connect.php');
                                    $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from classsched where department like '%CIT%' and status like '%unsaved%' order by classid DESC") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while ($row = mysqli_fetch_array($query)) {
                                        $id = $row['classid'];
										
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM classsched where department like '%CIT%' and status like '%unsaved%' order by classid DESC");
										

                                        ?>
                                        <tr class="warning">
                                            <td><?php echo $row['day']; ?></td> 
                                            <td><?php echo $row['time_start']; ?></td> 
                                            <td><?php echo $row['time_end']; ?></td> 
                                            <td><?php echo $row['fname']; ?></td> 
											<td><?php echo $row['subject_code']; ?></td> 
                                            <td><?php echo $row['room_name']; ?></td> 
                                            <td><?php echo $row['course_year_section']; ?></td> 
                                            <td><?php echo $row['semester']; ?></td> 
											<td><?php echo $row['sy']; ?></td> 
                                            
                                             
                                <?php } ?>
								

                                </tbody>
                            </table>
							
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

