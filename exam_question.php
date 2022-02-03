<?php include ('session.php');?>	
<?php include ('header.php');
$get_id=$_GET['id'];
?>	


<style>
.butto{
	border: none;
	border-radius:20px;
	background: #000;
	color:#00CCFF;
	width:10%;
	hieght:40px;
	float:right;
	font-weight:800px;
	outline:none;
	margin-right:10px;
	transition: 0.5s;
	
}

.button:hover{
	background:#00CCFF;
	color:#000;
	border:1px solid #000;
}

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
                <a class="navbar-brand" href="#	">Exams</a>
            </div>

            <ul class="nav navbar-top-links navbar-right" >
              
                <li class="" > 
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
                           
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              Add question
                            </button>
							
							<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#InstModal">
                              Add Paper Instructions
                            </button>
							
						
                        </h1>
						<?php 
						
								include ('add_exam_question.php');
								include ('add_paper_instructions.php');
							  
							  ?>
						
						<div class="hero-unit-table">   
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <div class="alert alert-info">
								<?php include ('connect.php');
                                           
                                            
                                    $query9 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question where exam_id='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    $row9 = mysqli_fetch_array($query9);
                                        $id = $row4['exam_id'];
										
																
										//$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM exam_question");
										

                                        ?>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Question Table for <?php echo $row4['exam_name']; ?></strong>
									
									<a href="pdf2.php<?php echo '?id='. $id; ?>" target="_blank"><input type="button" class="butto" value="Create Paper"></button></a>
									<a href="pdf3.php<?php echo '?id='. $id; ?>" target="_blank"><input type="button" class="butto" value="Mark Scheme"></button></a>
									<a href="pdf4.php<?php echo '?id='. $id; ?>" target="_blank"><input type="button" class="butto" value="Report"></button></a>
									<!--preview!-->
									<a href="#preview_page<?php echo '?id='. $id; ?>" data-target = "#preview_page<?php echo $id;?>"data-toggle="modal">
									<button type= "button" class="butto">preview
									</button></a>
										
										
										<?php 	//dont forget to remove these comments
												include ('preview_page.php');  ?>
												
												
									
                                </div>
                                <thead>
                                    <tr>
                                        <th>Question</th>
                                        <th>Section</th>
                                        <th>Marks</th>
										<th>Lines</th>
                                        <th>Action</th>
                                        
										
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include ('connect.php');
                                           
                                            
                                    $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from exam_question, question where exam_id='$id' 
																						AND exam_question.question_id = question.question_id") 
																						or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                                    while ($row = mysqli_fetch_array($query)) {
                                        $id2 = $row['question_id'];
										//$id2 = $row['exam_name'];
										
																
										//$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM exam_question");
										
											
                                        ?>
                                        <tr class="warning">
                                              <td><?php echo $row['question'];  ?></td> 
                                              <td><?php echo $row['section'];  ?></td> 
                                            <td><?php echo $row['marks']; ?></td>  
											<td><?php echo $row['answer_lines']; ?></td>
                                            <td width="15%">
											
                                                <a href="#delete_teacher<?php echo $id2; ?>" role="button"  data-target = "#delete_product<?php echo $id2;?>"data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                            </td>
                                            <!-- product delete modal -->
                                   <?php include ('delete_question.php');?>
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
