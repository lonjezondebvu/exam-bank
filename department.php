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
                <a class="navbar-brand" href="#	">Departments</a>
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
                    <div class="col-md-12">
                        <h1 class="page-header">
                           
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              Add department
                            </button>
							
						
                        </h1>
						<?php include ('add_department.php');?>
						
						<div class="hero-unit-table">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Departments
                                </div>
                                <thead>
                                    <tr>
										<th>Department</th>
										
										<th>Action</th>
                                       
                                       
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include ('connect.php');
                                    $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from department") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while ($row = mysqli_fetch_array($query)) {
                                        $id2 = $row['department'];
										$id = $row['department_id'];
										
										
																
										$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT *FROM department");
										

                                        ?>
                                        <tr class="warning">
                                            <td><?php echo $row['department']; ?></td> 											                                           
                                            <td width="25%">
											<a href="forprogramme.php<?php echo '?id=' . $id2; ?>" class="btn btn-primary btn-lg" style="height:35px; padding-top:6px; font-size:14px;">Subjects</a>
											
                                                <a href="#delete_room<?php echo $id; ?>" role="button"  data-target = "#delete_product<?php echo $id;?>" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                                <a href="edit_department.php<?php echo '?id=' . $id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a>
                                            </td>
                                            <!-- product delete modal -->
                                   <?php include ('delete_department_modal.php');?>
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
