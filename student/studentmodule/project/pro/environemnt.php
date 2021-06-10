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
            header("location:../../../studentlogin.php");
          }
          ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../../../../files/img/logo.png" rel="icon">
  <title>Html Main</title>
<script src="../../../../files/a076d05399.js" crossorigin="anonymous"></script>
  <link href="../../../../files/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../../../../files/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
   
    
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->

        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
        
          <ul class="navbar-nav ml-auto">   
            <div class="topbar-divider d-none d-sm-block"></div>
            <a href="../projectmain.php"><img class="img-profile rounded-circle" src="../../../../files/img/logout.jpg" style="max-width: 40px"></a>
          </ul>
        </nav>
        <!-- Topbar -->
         <br>
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class=" align-items-center justify-content-between mb-4">
            
            <h4 class=" text-gray-800" style="text-align: center;"><b> Mobile Technology is Hazardous Impact On Environment</b></h4>
            <hr>

        <div class="row">
          <div class="col-md-12" style="padding-top: 20px">
            <h4><b>Brief Introduction:</b></h4><br>
            <p style="padding-left: 50px">
              *    Mobile phones are universally popular due to their convenience. Mobile phones solve problems such as interacting with the people, transfer of data through offering new channels of communication by using a device small enough to fit into one hand. On the other hand, mobile phones may be harmful to the environment and health, and waste disposal issues may be associated with its discharge of radiation. Concerns have been raised recently about the sustainability of mobile phones and its effects on people’s health and the environment. The present study discusses the adverse effects associated in using mobile phones, and addresses sustainable perspectives to overcome the same.
            </p>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12" style="padding-top: 20px">
            <h4><b>Aim Of the Project:</b></h4><br>
            <p style="padding-left: 50px">
              * Do not release dangerous toxins into our air and water when burned or deposited in landfills improperly. <br>
              * Use less component used in mobiles which are less effect on environment.<br>
              * Now a digital world, but use less work of mobile so to prevent form diseases.
            </p>
          </div>
        </div>
        <hr>

                <div class="row">
          <div class="col-md-12" style="padding-top: 20px">
            <h4><b>Course Outcomes:</b></h4><br>
            <p style="padding-left: 50px">
              * Develop public awareness about environment.<br>
              * Develop the concept of 4R.<br>
            </p>
          </div>
        </div>
        <hr>

      <div class="row">
          <div class="col-md-12">
            <p style="padding-left:30px;color: red;"><b> You can download Project abstract from here. Click Download Button:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="environment.docx" download><button  type="button" class="btn btn-primary mb-1">Download</button></a></p>
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
                  <a href="../../studentlogout.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      
    </div>
  </div>

  <script src="../../../../files/vendor/jquery/jquery.min.js"></script>
  <script src="../../../../files/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../../files/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../../../../files/js/ruang-admin.min.js"></script>
   
</body>

</html>