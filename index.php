<?php
							include('connect.php');
							

							
							
							
							if(isset($_POST['go']))
							{
							        
							$username=$_POST['username'];
							$password=$_POST['password'];
							$admin="Admin";
							$user="user";
								$myusername =mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['username']);
								
								$mypassword =mysqli_real_escape_string($GLOBALS["___mysqli_ston"], md5($password));
								$result = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM users WHERE username ='$username' AND password ='$password'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
								$row = mysqli_fetch_array($result);
								$department= $row['department'];
								$numberOfRows = mysqli_num_rows($result);	
						
																	
															if ($row > 0 and $department==$admin){
																	session_start();
																	$_SESSION['id'] = $row['userid'];
																	header("location:home3.php");
																} 
																
																else if ($row > 0 and $department==$user)
																	{
																	session_start();
																	$_SESSION['id'] = $row['userid'];
																header("location:home_user.php");
																
															}
															else	{
																		echo " <br><center><font color= 'red' size='3'>Please fill up the fields correctly</center></font>";
																	} 
							}
							?>
<!DOCTYPE html>
 
<head>
<title>Exam Bank - Hilltop Academy </title>
<link href="img/chmsc1.png" rel="icon" type="image">
<style>
body{
background:#091929;
margin:0px;
}

input{
	width:20%;
	height:40px;
	border:none;
	border-radius:10px;
	outline:none;
	text-align:center;
}

button{
	width:20%;
	height:40px;
	border:none;
	border-radius:10px;
	outline:none;
	text-align:center;
	background:#2f5a78;
	color:#FFF;
}
button:hover{
	
	background:#356586;
	cursor:pointer;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

.header{
	width:100%;
	height:45px;
	background:#0e2741;
}
.reg{
	width:15%;
	height:45px;
	background:#215e89;
	float:right;
	cursor:pointer;
	color:#fff;
	text-align:center;
	border-radius:0px;
}
</style>
</head>

<body>
<div class="header">
<table style="float:left; color:#FFF;" >
<tr>
<td><img src="img/but5.png" width="35px" height="35px"></td>
<td>Exam Bank</td>
</tr>
</table>
<a href="forregister.php"><button class="reg">Register</button></a></div>
<br /><br />

<center>
<br />
<br />
<div class="imgcontainer">
   <img src="images/logo.png" width="82" height="73" class="img-circle" >
  </div>
<h1 style="color:#fff">Hilltop Academy</h1>
<h3 style="color:#fff">Exam Bank </h3>

  <br /><br />
  <br />
<form action="#" method="POST">

<input type="text" name="username" placeholder="username" />
<br/><br />
<input type="password" name="password" placeholder="Password" /><br /><br />

<button name="go">Login</button>

</center>


</form>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}


</script>


</center>

</html>

