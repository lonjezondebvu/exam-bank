<?php
include ('connect.php');
if(isset($_POST['get_option']))
{

 $state = $_POST['get_option'];
 $find=mysqli_query($GLOBALS["___mysqli_ston"], "select * from question where question='$state'");
 while($row=mysqli_fetch_array($find))
 {
	 if($row==0)
	 {
		 echo"no Questions";
	 }
	 else{
  echo "<option>".$row['image']."</option>";
 }
 }
 exit;
}
?>