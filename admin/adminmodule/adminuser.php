<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../../files/img/logo.png" rel="icon">
  <title>Add Admin</title>
 <script src="../../files/a076d05399.js" crossorigin="anonymous"></script>
  <link href="../../files/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../../files/css/ruang-admin.min.css" rel="stylesheet">
</head>
<?php
      session_start();
      $username=$_SESSION['username'];
      $password=$_SESSION['password'];
      if (!($_SESSION["username"] && $_SESSION["password"]))
           {
            header("location:../adminlogin.php");
          }

      ?>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <img src="../../files/img/logo.png">
        </div>
        <div class="sidebar-brand-text mx-3">E-Leraner</div>
      </a>

      <li class="nav-item">
        <a class="nav-link" href="admin.php">
       <i class="fas fa-fw fa-window-maximize"></i>
          <span >Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fas fa-fw fa-user-graduate"></i>
          <span>Student</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Student</h6>
            <a class="collapse-item" href="addstudent.php">Add Student</a>
             <a class="collapse-item" href="viewstudent.php">View Student</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fas fa-fw fa-child"></i>
          <span>Admin</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Admin</h6>
            <a class="collapse-item" href="adminuser.php">Add Admin</a>
            <a class="collapse-item" href="adminview.php">View Admin</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-file-video"></i>
          <span>Video</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Video</h6>
            <a class="collapse-item" href="addvideo.php">Add Video</a>
            <a class="collapse-item" href="viewvideo.php">View Video</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="test.php">
          <i class="fas fa-fw fa-diagnoses"></i>
         
          <span>Test</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="queries.php">
          <i class="fas fa-fw fa-question-circle"></i>
          <span >Queries</span>
        </a>
      </li>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Chats
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Web Enquiry </span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Web Enquiry</h6>
            <a class="collapse-item" href="webenquiries.php">Web Enquiry</a>
            
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-5">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">   
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                  <?php
          $user='root';
          $pass='';
          $db='project';
          $db = new mysqli('localhost',$user,$pass,$db) or die("die");
          $username=$_SESSION['username'];
          $password=$_SESSION['password'];
          
          $query="SELECT * FROM adminlogin WHERE ADM_USERNAME='".$username."' && ADM_PASSWORD='".$password."' ";
          $result=mysqli_query($db,$query);
          while($rows=mysqli_fetch_assoc($result))
                    echo'
                <img class="img-profile rounded-circle" src="../../files/img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">
                '.$rows["ADM_NAME"].'


                 </span>'?>
                </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="adminprofile.php">
                  Profile
                </a>
              
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
         <div class=" align-items-center justify-content-between mb-4">
            <h5 class=" text-gray-800" style="text-align: center;">Welcome to Add Admin Module.</h5>
          </div>

          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="flex-row">
                  <h6 class=" font-weight-bold text-primary" style="text-align: center;margin-top: 20px;">Admin Add</h6>
                </div>
                <div class="card-body">
                  <form action="adminuser.php" method="POST">
                    <div class="row">
                      <div class="col-lg-6">
                    <div class="form-group">
                      <label>FullName</label>
                      <input type="text" class="form-control" name="name" >
                    </div>
                    <div class="form-group">
                      <label>Email Address</label>
                      <input type="text" class="form-control" name="email">
                    </div>
                  </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                      <label>Mobile No</label>
                      <input type="number" class="form-control" name="number" >
                    </div>
                    <div class="form-group">
                      <label>Date Of Birth</label>
                      <input type="date" class="form-control" name="dob">
                    </div>
                  </div>
                   <div class="col-lg-6">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username">
                    </div>
                  </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" >
                    </div>
                  </div>
                  </div>
                    
                    <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                        <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                      </div>
                    </div>
                    <button class="btn btn-success" value="Register" name="submit" >Add Admin</button>
                  </form>
                </div>
              </div>
            </div>

            
          </div>


          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="logoutadmin.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        
        <!---Container Fluid-->
      </div>
    </div>
  </div>

  <script src="../../files/vendor/jquery/jquery.min.js"></script>
  <script src="../../files/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../files/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../../files/js/ruang-admin.min.js"></script>
   
</body>
</html>
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
$dob =$_POST["dob"];
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

}elseif (empty($_POST['dob'])) 
{
  echo '<script>alert("Date of Birth is required !");
  </script>';

}elseif (empty($_POST['username'])) 
{
  echo '<script>alert("username is required !");
  </script>';
}elseif (empty($_POST['password'])) 
{
  echo '<script>alert("password is required !");
  </script>';
}elseif (mysqli_query($db,"INSERT INTO adminlogin VALUES('','$name','$email','$number','$username','$password','$dob')")) 
{
  echo '<script>alert("Add Successfully !");
  document.location.href="adminuser.php";
  </script>';

}else
{
  echo '<script>alert("Something Wrong !")
  document.location.href="adminuser.php";
  </script>';

}
}
?>