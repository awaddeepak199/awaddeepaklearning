<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
  <link href="../files/img/logo.png" rel="icon">
	<link rel="stylesheet" type="text/css" href="../files/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row" id="row2">
			<div class="col-sm-6" id="img">
			<img src="../files/img/registration.png" class="img-fluid"> 
				
			</div>
				<div class="col-sm-6">
					<h2 id="login">Student Registration</h2>
					<hr>

					<form action="studentregistration.php" method="POST">
                      <div class="row" id="form1">
                      	<div class="col-sm-6">
                        	<label>Full Name </label>
                          <input type="text" class="form-control" id="in" name="name">
                          <br>
                          <label>MobileNo</label>
                        <input type="number" class="form-control" id="in" name="number" placeholder="Enter 10 digit mobile number">
                    </div>
                    <div class="col-sm-6">
                    	<label>EmailId </label>
                          <input type="text" class="form-control" id="in" name="email">
                          <br>
                         <label>Username</label>
                        <input type="text" class="form-control" id="in" name="username">
                    </div>
                    <div class="col-sm-6">
                      <br>
                    	<label>Password</label>
                          <input type="password" class="form-control" id="in" name="password">
                    </div>
                     <div class="col-sm-6">
                    </div>
            
                        <div class="col">
                        <hr>
                        <div class="text-center">
                          <a href="../main.php" class="btn btn-first">Home</a>
                          &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                           <button class="btn btn-primary" value="Register" name="submit">Register</button>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                           <a href="studentlogin.php" class="btn btn-first">Login Page</a>
                        </div>
                    </div>
              </form>				
				  </div>			
			</div>		
		</div>	
	</div>
  <br> <br> <br> <br> <br> 
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
	
	}
	#row2
	{
		margin-top: 12%;
	}
	#img
	{
		margin-top: 40px;
	}
::-webkit -scrollbar
{
	display: none;
}.error {color: #FF0000;}
a.btn
{
  width: 100px;
  padding:10px;
  border-radius: 20px;
}
a.btn-first
{
  background-color: blue;
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

<?php
$user='root';
$pass='';
$db='project';

$db = new mysqli('localhost',$user,$pass,$db) or die("die");
if (isset($_POST['submit'])) 
{
$name =$_POST["name"]; 
$email =$_POST["email"];
$number =$_POST["number"];
$username =$_POST["username"];
$password =$_POST["password"];


if(empty($_POST['name']))
{
  echo '<script>alert("Name is required !");
  </script>';
}elseif (filter_var($email,FILTER_VALIDATE_EMAIL) == false)
{
  echo '<script> 
  alert("Enter valid email");
  </script>';
}elseif (empty($_POST['email'])) 
{
  echo '<script> 
  alert("Email is required !");
  </script>';
}
elseif (empty($_POST['number'])) 
{
  echo '<script>alert("MobileNo is required !");
  </script>';

}elseif (empty($_POST['username'])) 
{
  echo '<script>alert("username is required !");
  </script>';
}elseif (empty($_POST['password'])) 
{
  echo '<script>alert("password is required !");
  </script>';
}elseif (mysqli_query($db,"SELECT * FROM studentreg WHERE STD1_EMAIL='".$email."' && STD1_MOBILENO='".$number."' && STD1_USERNAME='".$username."' && STD1_PASSWORD='".$password."'")) 
{
  echo '<script>alert("You are alredy Registered || Goto Login !");
  document.location.href="studentregistration.php";
  </script>';

}elseif (mysqli_query($db,"INSERT INTO studentreg VALUES('','$name','$email','$number','$username','$password')")) 
{
  
  echo '<script>alert("Thank you for Registration !");
  document.location.href="studentlogin.php";
  </script>';

}else
{
  echo '<script>alert("check and Try Again !")
  document.location.href="studentregistration.php";
  </script>';

}
}
?>