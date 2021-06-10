<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../../../files/img/logo.png" rel="icon">
  <title>Student Video</title>
 <script src="../../../files/a076d05399.js" crossorigin="anonymous"></script>
  <link href="../../../files/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../../../files/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    
    
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <a href="../studentmodule.php"><img class="img-profile rounded-circle" src="../../../files/img/logout.jpg" style="max-width: 40px;"></a>
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
          session_start();
          $username=$_SESSION['username'];
          $password=$_SESSION['password'];
          if (!($_SESSION["username"] && $_SESSION["password"]))
           {
            header("location:../../studentlogin.php");
          }
          $query="SELECT * FROM studentreg WHERE STD1_USERNAME='".$username."' && STD1_PASSWORD='".$password."' ";
          $result=mysqli_query($db,$query);
          while($rows=mysqli_fetch_assoc($result))
                    echo'
                <img class="img-profile rounded-circle" src="../../../files/img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">
                '.$rows["STD1_NAME"].'


                 </span>'?>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="studentprofile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
         <br>
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <h4 style="text-align: center;"><b>Welcome To Video. Our Team Provides Every Topic Video For Better Understand.</b></h4>
          <div class=" align-items-center justify-content-between mb-4">
            <div class="row">
             <div class="col-lg-4">
               
             </div>
            <div class="col-lg-4">
               <input class="form-control" id="myInput" type="text" placeholder="Search..">
            </div> 
        </div>
        <br>

          <div class="row mb-3" id="myTable">
            <?php
            $user='root';
            $pass='';
            $db='project';

            $db = new mysqli('localhost',$user,$pass,$db) or die("die");
            $query="SELECT * FROM video";
            $result=mysqli_query($db,$query);
            while ($rows=mysqli_fetch_assoc($result))
          echo '
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-150">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold  mb-10" style="text-align:center;font-size:14px">
                    
                      <video controls style="height:auto;width:100%">
                      <source src="../../../admin/adminmodule/video/'.$rows['VID_VIDEO'].'" type="video/mp4">
                      <source src="../../../admin/adminmodule/video/.ogg" type="video/ogg">
                      </video>
                      <br><br>
                      '.$rows['VID_TITLE'].'
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
            ?>

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
                  <a href="../studentlogout.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>
          <br><br><br><br>

        </div>
        <!---Container Fluid-->
      </div>
    </div>
  </div>

  <script src="../../../files/vendor/jquery/jquery.min.js"></script>
  <script src="../../../files/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../files/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../../../files/js/ruang-admin.min.js"></script>
   <script type="text/javascript">
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>
