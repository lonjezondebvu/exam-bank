<?php
include ('connect.php');
if(isset($_POST['get_option']))
{

 $state = $_POST['get_option'];
 $find=mysqli_query($GLOBALS["___mysqli_ston"], "select * from question, multiple_choice where question='$state'
													and question.question_id = multiple_choice.question_id");
$row=mysqli_fetch_array($find);

	 if($row==0)
	 {
		 echo"no Questions";
	 }
	 else{
  echo "<option>".$row['D']."</option>";
 }
 
 $fin=mysqli_query($GLOBALS["___mysqli_ston"], "select * from question, structuredmultiple where question='$state'
													and question.question_id = structuredmultiple.question_id
													");
 while($ow=mysqli_fetch_array($fin))
 {
	 if($ow==0)
	 {

		 echo"no Questions";
	 }
	 else{
  echo "<option>".$ow['D']."</option>";
 }
 }
 exit;
}
?>