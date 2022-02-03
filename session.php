<?php include ('connect.php');
 session_start(); 
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
<script>
window.location = "index.php";
</script>
<?php 
}
$session_id=$_SESSION['id'];

$user_query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from users where userid = '$session_id'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
$user_row = mysqli_fetch_array($user_query);
$user_username = $user_row['username'];

?>