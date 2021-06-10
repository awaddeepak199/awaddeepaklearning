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
            
            <h4 class=" text-gray-800" style="text-align: center;"><b> Restaurant Management System</b></h4>
            <hr>

        <div class="row">
          <div class="col-md-12" style="padding-top: 20px">
            <h4><b>Brief Introduction:</b></h4><br>
            <p style="padding-left: 50px">
              *  The Restaurant Management System helps the restaurant manager to manage the restaurant more effectively and efficiently by computerizing meal ordering, billing and inventory control. This management system is designed for a Chinese Restaurant and the interface will be in Chinese. The system processes transaction and stores the resulting data. Reports will be generated from these data which help the manager to make appropriate business decisions for the restaurant. For example, knowing the number of customers for a particular time interval, the manager can decide whether more waiters and chefs are required.
            </p>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12" style="padding-top: 20px">
            <h4><b>Aim Of the Project:</b></h4><br>
            <p style="padding-left: 50px">
              * The main point of developing this system is to help restaurant administrator manage the restaurant business. <br>
              * Main objective build the system this is to provide ordering and reservation service by online to the customer. <br>
              * Customer for online ordering and reserve table.
            </p>
          </div>
        </div>
        <hr>

                <div class="row">
          <div class="col-md-12" style="padding-top: 20px">
            <h4><b>Course Outcomes:</b></h4><br>
            <p style="padding-left: 50px">
              * Develop comprehensive business plans.<br>
              * Use the support system to zero down to your business idea.<br>
              * Prepare plans to manage the enterprise effective. 
            </p>
          </div>
        </div>
        <hr>

      <div class="row">
          <div class="col-md-12">
            <p style="padding-left:30px;color: red;"><b> You can download Project abstract from here. Click Download Button:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="ed.docx" download><button  type="button" class="btn btn-primary mb-1">Download</button></a></p>
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