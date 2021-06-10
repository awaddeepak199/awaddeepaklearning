<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>

       <link href="../files/img/logo.png" rel="icon">
	<link rel="stylesheet" type="text/css" href="../files/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<br>
		<div class="row" id="row2">
			<div class="col-sm-6">
			<img src="../files/img/login.png" class="img-fluid"> 
				
			</div>
				<div class="col-sm-6">
					<form action="studentlogin.php" method="POST">
					<h2 id="login">Student Login</h2>
					<hr>
                      <div class="row" id="form1">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Username" size="20" id="in" required="" name="username">
                          <br>
                        <input type="password" class="form-control" placeholder="Password" id="in" required="" name="password">
                        <hr>
                        <div class="text-center">
                           <button class="btn btn-primary" value="Login" name="submit">Login</button>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div> 
                  </form>				
				</div>			
			</div>		
		</div>	
	</div>
	<br><br><br><br>
<script type="text/javascript" src="../files/bootstrap.min.js"></script>
</body>
</html>
<style type="text/css">
	#in
	{
		border-radius: 75px;
	}
	#login
	{
		text-align: center;
		margin-top: 50px;
	}
	#row2
	{
		margin-top: 10%;
	}
::-webkit -scrollbar
{
	display: none;
}
button
{
	height: 50px;
	width: 100px;

}
</style>
<?php
$user='root';
$pass='';
$db='project';

$db = new mysqli('localhost',$user,$pass,$db) or die("die");
session_start();
if (isset($_POST['submit'])) 
{
$username =$_POST["username"]; 
$password =$_POST["password"];
$username =$_REQUEST["username"];
$password =$_REQUEST["password"];
$_SESSION["username"]=$username;
$_SESSION["password"]=$password;


$query="SELECT * FROM studentreg WHERE STD1_USERNAME='".$username."' && STD1_PASSWORD='".$password."'";
$result=mysqli_query($db,$query);
$count=mysqli_num_rows($result);
if ($count>0) 
{
	$_SESSION["username"]=$username;
	$_SESSION["password"]=$password;
	
	echo '<script>alert("Login Successfully !");
  document.location.href="studentmodule/studentmodule.php";
  </script>'
  ;
}else
{
	echo '<script>alert("Invalid Username and Pasword !");
  document.location.href="studentlogin.php";
  </script>';

}

}
?>