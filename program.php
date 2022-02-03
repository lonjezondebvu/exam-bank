<?php
include ('connect.php');
if(isset($_POST['get_option']))
{

 $state = $_POST['get_option'];
 $find=mysqli_query($GLOBALS["___mysqli_ston"], "select * from programme where department='$state'");
 while($row=mysqli_fetch_array($find))
 {
	 if($row==0)
	 {
		 echo"no Programme";
	 }
	 else{
  echo "<option>".$row['programme']."</option>";
 }
 }
 exit;
}
?>