<?php include ('session.php');?>	
<?php include ('header.php');
?>	

<style type="text/css">
<!--
.style1 {color: #00CCFF}
.button{
	border: none;
	border-radius:20px;
	background: #000;
	color:#fff;
	width:5%;
	hieght:50px;
	float:right;
	font-weight:800px;
	outline:none;
	margin-right:10px;
	transition: 0.5s;
	
}

.button:hover{
	background:#fff;
	color:#000;
	border:1px solid #000;
}

.select{
	width:20%;
	height:35px;
	border-radius:5px;
	outline:none;
	cursor:pointer;
	

}
-->
</style>
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
                <a class="navbar-brand" href="#	">Subject</a>
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
       <?php 
	   include ('nav_sidebar_user.php');
	   include ('connect.php');
				
				?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           
							
						
                        </h1>
						<?php include ('modal_add_coursea.php');?>
						
						<div class="hero-unit-table">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Course
									
									
									
                                </div>
								
								
                                <thead>
                                    <tr>
                                    <th>Subject Code</th>
                                        <th>Subject Name</th>
										<th>Department</th>
										
										<th>Action</th>
                                       
                                        
                                    </tr>
                                </thead  >
                                <tbody id="new_course">
                                    <?php include ('connect.php');
                                    $user_query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from users where userid='$session_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    $user_row2= mysqli_fetch_array($user_query);
                                
                                    $user_course = $user_row2['course'];
                                    
                                    $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from course, department where course_name='$user_course'
																							and course.department_id = department.department_id") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while ($row = mysqli_fetch_array($query)) {
                                        $id = $row['courseid'];
										//$id2 = $row['course'];
										
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM course");
										

                                        ?>
                                        <tr class="warning">
                                        <td><?php echo $row['course_code']; ?></td>
                                            <td><?php echo $row['course_name']; ?></td> 
                                            
											<td><?php echo $row['department']; ?></td>
											
											
                                            
                                         
                                             
                                            <td width="25%">
											<a href="objective_user.php<?php echo '?id=' . $id; ?>" class="btn btn-primary btn-lg" style="height:35px; padding-top:6px; font-size:14px;">Topics</a>
                                                <a href="#delete_course<?php echo $id; ?>" role="button"  data-target = "#delete_product<?php echo $id;?>"data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                                <a href="edit_course_user.php<?php echo '?id=' . $id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a>
                                            </td>
                                            <!-- product delete modal -->
                                   <?php include ('delete_course_modal_user.php');?>
                                    <!-- end delete modal -->

                                    </tr>
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
