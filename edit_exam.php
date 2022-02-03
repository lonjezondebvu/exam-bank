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
                <a class="navbar-brand" href="index.html">Exam Schedule</a>
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
                            $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from examsched where examid='$get_id'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
                            $row = mysqli_fetch_array($query);
							$day=$row['day'] ;
					$time_start= $row['time_start'] ;					
					$time_end=$row['time_end'] ;
					$fname=$row['fname'] ;
					$subject_code= $row['subject_code'] ;					
					$room_name=$row['room_name'] ;
					$course_year_section=$row['course_year_section'] ;
					$semester= $row['semester'] ;					
					$sy=$row['sy'] ;
                            ?>
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="alert alert-info"><strong>Edit schedule</strong> </div>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Day</label>
                                    <div class="controls">
										<Select name="day" class ="form-control">
		<option><?php echo $day ?></option>
		<option></option>
		<option value="Monday">Monday</option>
		<option value="Tuesday">Tuesday</option>
		<option value="Wednesday">Wednesday</option>
		<option value="Thursday">Thursday</option>
		<option value="Friday">Friday</option>
		<option value="Saturday">Saturday</option></select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Time Start</label>
                                    <div class="controls">
                               
										<Select name="time_start"  class ="form-control">
		<option><?php echo $time_start ?></option>
		<option></option>
		<option value="7:30am">7:30am</option>
		<option value="8:00am">8:00am</option>
		<option value="8:30am">8:30am</option>
		<option value="9:00am">9:00am</option>
		<option value="9:30am">9:30am</option>
		<option value="10:am">10:00am</option>
		<option value="10:30am">10:30am</option>
		<option value="11:00am">11:00am</option>
		<option value="11:30am">11:30am</option>
		<option value="12:00pm">12:00pm</option>
		<option value="12:30pm">12:30pm</option>
		<option value="1:00pm">1:00pm</option>
		<option value="1:30pm">1:30pm</option>
		<option value="2:00pm">2:00pm</option>
		<option value="2:30pm">2:30pm</option>
		<option value="3:00pm">3:00pm</option>
		<option value="3:30pm">3:30pm</option>
		<option value="4:00pm">4:00pm</option>
		<option value="4:30pm">4:30pm</option>
		<option value="5:00pm">5:00pm</option>
		<option value="5:30pm">5:30pm</option>
		<option value="6:00pm">6:00pm</option>
		<option value="6:30pm">6:30pm</option>
		<option value="7:00pm">7:00pm</option>
		<option value="7:30pm">7:30pm</option>
		<option value="8:00pm">8:00pm</option>
		<option value="8:30pm">8:30pm</option></select>
                                    </div>
                                </div>
								 <div class="control-group">
                                    <label class="control-label" for="inputPassword">Time End</label>
                                    <div class="controls">
                                     
										<Select name="time_end" class ="form-control">
		<option><?php echo $time_end ?></option>
		<option></option>
		<option value="7:30am">7:30am</option>
		<option value="8:00am">8:00am</option>
		<option value="8:30am">8:30am</option>
		<option value="9:00am">9:00am</option>
		<option value="9:30am">9:30am</option>
		<option value="10:am">10:00am</option>
		<option value="10:30am">10:30am</option>
		<option value="11:00am">11:00am</option>
		<option value="11:30am">11:30am</option>
		<option value="12:00pm">12:00pm</option>
		<option value="12:30pm">12:30pm</option>
		<option value="1:00pm">1:00pm</option>
		<option value="1:30pm">1:30pm</option>
		<option value="2:00pm">2:00pm</option>
		<option value="2:30pm">2:30pm</option>
		<option value="3:00pm">3:00pm</option>
		<option value="3:30pm">3:30pm</option>
		<option value="4:00pm">4:00pm</option>
		<option value="4:30pm">4:30pm</option>
		<option value="5:00pm">5:00pm</option>
		<option value="5:30pm">5:30pm</option>
		<option value="6:00pm">6:00pm</option>
		<option value="6:30pm">6:30pm</option>
		<option value="7:00pm">7:00pm</option>
		<option value="7:30pm">7:30pm</option>
		<option value="8:00pm">8:00pm</option>
		<option value="8:30pm">8:30pm</option></select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Teacher</label>
                                    <div class="controls">
                                      
										<select name="fname" class ="form-control">
	<option><?php echo $fname ?></option>
		<option></option>
	<?php $teacher_query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from teachers")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
while($teacher_row=mysqli_fetch_array($teacher_query)){
	?>
	<option><?php echo $teacher_row['fname'];?></option>
	<?php } ?>
	</select>
                                    </div>
                                </div> <div class="control-group">
                                    <label class="control-label" for="inputPassword">Subject</label>
                                    <div class="controls">
                                  
										<select name="subject_code"class ="form-control">
	<option><?php echo $subject_code ?></option>
		<option></option>
<?php $subject_query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from subject")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
while($subject_row=mysqli_fetch_array($subject_query)){
 ?>
 <option><?php echo $subject_row['subject_code']; ?></option>
 <?php } ?>
	</select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Room</label>
                                    <div class="controls">
                                     
										<select name="room_name" class ="form-control">
	<option><?php echo $room_name ?></option>
		<option></option>
	<?php $room_query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from room")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
while($room_row=mysqli_fetch_array($room_query)){
	?>
	<option><?php echo $room_row['room_name']; ?></option>
	<?php } ?>
	</select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Course,Year and Section</label>
                                    <div class="controls">
                                      
										<select name="course_year_section" class ="form-control" >
	<option><?php echo $course_year_section ?></option>
		<option></option>
	<?php $CYS_query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from course")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
while($CYS_row=mysqli_fetch_array($CYS_query)){
	?>
	<option><?php echo $CYS_row['course']; ?>&nbsp;<?php echo $CYS_row['year_section']; ?></option>
	<?php } ?>
	</select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Semester</label>
                                    <div class="controls">
                                 
										<select name="semester" class ="form-control">
										
	<option><?php echo $semester ?></option>
		
	</select>
                                    </div>
                                </div>
								 <div class="control-group">
                                    <label class="control-label" for="inputPassword">School Year</label>
                                    <div class="controls">
                                 
										<select name="sy" class ="form-control">
										
	<option><?php echo $sy ?></option>
		
	</select>
                                    </div>
                                </div>
                               
								
									<hr/>

                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
										<span><a href = "class.php" class = "btn btn-danger"> Back</a></span>
                                    </div>
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['update'])) {

                                $day = $_POST['day'];
                                $time_start = $_POST['time_start'];
								$time_end = $_POST['time_end'];
                                $fname = $_POST['fname'];
								$subject_code = $_POST['subject_code'];
                                $room_name = $_POST['room_name'];
								$course_year_section = $_POST['course_year_section'];
                           
								$semester = $_POST['semester'];
                                $sy = $_POST['sy'];
							
            $query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM examsched WHERE day='$day' and time_start='$time_start' and time_end='$time_end' and fname='$fname'") or die (mysqli_error($GLOBALS["___mysqli_ston"]));
			$query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM examsched WHERE day='$day' and time_start='$time_start' and time_end='$time_end' and room_name='$room_name'") or die (mysqli_error($GLOBALS["___mysqli_ston"]));
			$query2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM examsched WHERE day='$day' and time_start='$time_start' and time_end='$time_end' and course_year_section='$course_year_section'") or die (mysqli_error($GLOBALS["___mysqli_ston"]));
			$count=mysqli_num_rows($query);
			$count1=mysqli_num_rows($query1);
			$count2=mysqli_num_rows($query2);
			if($count > 0){
			echo "<script>alert('Teacher already exist');</script>";
			 }
			elseif($count1 > 0){
			echo "<script>alert('Room already exist');</script>";
			 }
			 elseif($count2 > 0){
			echo "<script>alert('Course already exist');</script>";
			 }
			else{
                               

                                mysqli_query($GLOBALS["___mysqli_ston"], "update examsched set day ='$day', time_start ='$time_start',
		 time_end ='$time_end', fname ='$fname', subject_code ='$subject_code', room_name='$room_name', course_year_section ='$course_year_section', semester ='$semester', sy ='$sy' where classid = '$get_id'") or die(mysql_query());
                             echo"Saved";
                            }
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
