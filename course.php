<?php
include ('connect.php');
if(isset($_POST['get_option']))
{

 $state = $_POST['get_option'];
 $find=mysqli_query($GLOBALS["___mysqli_ston"], "select * from course where programme='$state'");
 while($row=mysqli_fetch_array($find))
 {
	 $id=$row['courseid'];
	 $id2=$row['course'];
	 if($row==0)
	 {
		 echo"no course";
	 }
	 else{
  echo "<tr><td>".$row['course']."</td><td>".$row['programme']."</td>
  <td>".$row['department']."</td><td>".$row['faculty']."</td>
  <td width='25%'>
											<a href='objective.ph?id=$id2' class='btn btn-primary btn-lg' style='height:35px; padding-top:6px; font-size:14px;'>Objectives</a>
                                                <a href='delete_course2.php?id=$id ' class='btn btn-danger'><i class='icon-trash icon-large'></i>&nbsp;Delete</a>
                                                <a href='edit_course.php?id=$id2 ' class='btn btn-success'><i class='icon-pencil icon-large'></i>&nbsp;Edit</a>
                                            </td></tr>";
 }
 }
 exit;
}
?>