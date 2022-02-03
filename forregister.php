<?php include ('header.php');?>
<!DOCTYPE html>
 
<head>
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
	border-radius:20px;
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
<td>Exams Bank</td>
</tr>
</table>
<a href="index.php"><button class="reg">Login</button></a></div>
<br /><br />

<center>
<h1 style="color:#fff">REGISTRATION FORM</h1><br/><br/><br/>

   <img src="Images/avatar.png" width="150" class="img-circle" >
  </div>
  <br /><br />
  <br /><br />
<form action="#" method="POST">
<!--
<input type="text" name="Fname" placeholder="First Name" />
<br/><br />
<input type="text" name="Lname" placeholder="Last Name" />
<br/><br />
<input type="text" name="dptmnt" placeholder="Department" />
<br/><br />
<input type="text" name="course" placeholder="Course" />
<br/><br />-->
<input type="text" name="username" placeholder="username" />
<br/><br />
<input type="password" name="password" placeholder="Password" /><br /><br />

<button name="go">Register</button>

</center>

<?php
							include('connect.php');
							
							if(isset($_POST['go']))
							{
								$username=$_POST['username'];
							    $password=$_POST['password'];
								
							$query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from users where username='$username'") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
							$row=mysqli_fetch_assoc($query);
							
							if($row>0){
								echo " <br><center><font color= 'red' size='3'> Username already exist</center></font>";
							}else{
								
								$result = mysqli_query($GLOBALS["___mysqli_ston"], "insert into users (username,password) value ('$username','$password')") or die(mysqli_error($GLOBALS["___mysqli_ston"]));
								echo " <br><center><font color= 'green' size='3'> You have successfully been registered</center></font>";
							}}
							?>
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

