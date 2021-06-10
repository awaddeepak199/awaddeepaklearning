<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link href="../files/img/logo.png" rel="icon">
	<link rel="stylesheet" type="text/css" href="../files/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<br>
		<div class="row" id="row2">
			<div class="col-sm-6">
			<img src="../files/img/adminlogin.png" class="img-fluid"> 
				
			</div>
				<div class="col-sm-6" id="ad">
					<form action="adminlogin.php" method="POST">
					<h2 id="login">Admin Login</h2>
					<hr>
                      <div class="row" id="form1">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Username" size="20" id="in" required="" name="username">
                          <br>
                        <input type="password" class="form-control" placeholder="Password" id="in" required="" name="password">
                        <hr>
                        <div class="row">
                        	<div class="col-lg-4"></div>
                        	<div class="col-lg-4">
                           <button class="btn btn-primary" value="Login" name="submit">Proceed To Login</button>
                       </div>
                       
                        </div>
                  </form>				
				</div>			
			</div>		
		</div>	
	</div>
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
		margin-top: 6%;
	}#btn
	{
		width: 50%;
	}#back
	{
		margin-left: 80%;
	}#ad
	{
		margin-top: 40px;
	}
::-webkit -scrollbar
{
	display: none;
}
a.btn
{
	
	width: 150px;
	padding:10px;
	border-radius: 20px;
}
a.btn-first
{
	background-color: darkgreen;
	color: #fff;
}
a.btn:hover
{
	background-color: darkorange;
	border: none;
	color: #fff;
	box-shadow: 5px 5px 10px $999;
	transition: 0.10s;
}
</style>
</style>
<?php
$user='root';
$pass='';
$db='project';
session_start();

$db = new mysqli('localhost',$user,$pass,$db) or die("die");
if (isset($_POST['submit'])) 
{
$username =$_POST["username"]; 
$password =$_POST["password"];
$query="SELECT * FROM adminlogin WHERE ADM_USERNAME='".$username."' && ADM_PASSWORD='".$password."'";
$result=mysqli_query($db,$query);
$count=mysqli_num_rows($result);
if ($count>0) 
{
   $_SESSION["username"]=$username;
   $_SESSION["password"]=$password;
	echo '<script>alert("Login Successfully !");
  document.location.href="adminmodule/admin.php";
  </script>';
}else
{
	echo '<script>alert("Invalid Username and Pasword !");
  document.location.href="adminlogin.php";
  </script>';
}
}
?>
