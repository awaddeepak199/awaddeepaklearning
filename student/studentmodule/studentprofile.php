
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../../files/img/logo.png" rel="icon">
  <title>Student Profile</title>
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
            header("location:../studentlogin.php");
          }

      ?>
<body id="page-top">
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
           <a href="studentmodule.php"><img class="img-profile rounded-circle" src="../../files/img/logout.jpg" style="max-width: 40px;"></a>
          </a>
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
          
          $query="SELECT * FROM studentreg WHERE STD1_USERNAME='".$username."' && STD1_PASSWORD='".$password."' ";
          $result=mysqli_query($db,$query);
          while($rows=mysqli_fetch_assoc($result))
                    echo'
                <img class="img-profile rounded-circle" src="../../files/img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">
                '.$rows["STD1_NAME"].'


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
          <br><br>
          <div class="row" >
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
          <div class="row mb-3">
         <?php
         $user='root';
          $pass='';
          $db='project';
          $db = new mysqli('localhost',$user,$pass,$db) or die("die");
          $username=$_SESSION['username'];
          $password=$_SESSION['password'];
          $query="SELECT * FROM studentreg WHERE STD1_USERNAME='".$username."' && STD1_PASSWORD='".$password."' ";
          $result=mysqli_query($db,$query);
          while($rows=mysqli_fetch_assoc($result))
         echo'
              <div class="row" >
              <div class="col-lg-1"></div>
            
            <div class="col-lg-11">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="flex-row">
                  <h6 class=" font-weight-bold text-primary" style="text-align: center;margin-top: 20px;">MY Profile</h6>
                </div>
                <hr>
                <div class="card-body">
                  <form action="addstudent.php" method="POST">
                    <div class="row">
                      <div class="col-lg-6">
                    <div class="form-group">
                      <label>FullName</label>
                      <input type="text" class="form-control" value="'.$rows['STD1_NAME'].'" name="name" disabled >
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                      <label>Email Address</label>
                      <input type="text" class="form-control" value="'.$rows['STD1_EMAIL'].'" name="email" disabled>
                    </div>
                  </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                      <label>Mobile No</label>
                      <input type="number" class="form-control" value="'.$rows['STD1_MOBILENO'].'" name="number" disabled >
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" value="'.$rows['STD1_USERNAME'].'" name="username" disabled>
                    </div>
                  </div>
                    <div class="col-lg-12">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" class="form-control" value="'.$rows['STD1_PASSWORD'].'" name="password" disabled>
                    </div>
                  </div>
                  </div>
                    
                  </form>
                </div>
              </div>
            </div>            
          </div>'
          ;?>
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
                  <a href="studentlogout.php" class="btn btn-primary">Logout</a>
                </div>
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