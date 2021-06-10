<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../../files/img/logo.png" rel="icon">
  <title>Test</title>
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
          <span  >Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fas fa-fw fa-user-graduate"></i>
          <span >Student</span>
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
          <span >Admin</span>
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
          <span >Video</span>
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
        <a class="nav-link" href="ui-colors.html">
          <i class="fas fa-fw fa-archive"></i>
         
          <span >Project</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="test.php">
          <i class="fas fa-fw fa-diagnoses"></i>
          <span >Test</span>
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
          <span >Web Enquiry </span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Web Enquiry</h6>
            <a class="collapse-item" href="webenquiries.php">Web Enquiry</a>
            
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="ui-colors.html">
          <i class="fas fa-fw fa-comment-alt"></i>
          <span > Live Chats</span>
        </a>
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
            <h5 class=" text-gray-800" style="text-align: center;">Welcome to Add Test Module.</h5>
          </div>

              <div class="row" >
                <div class="col-lg-1"></div>
             
            
            <div class="col-lg-10">
              <!-- Form Basic -->
              <div class="card mb-10">
                <div class="flex-row">
                  <h6 class=" font-weight-bold text-primary" style="text-align: center;margin-top: 20px;">Enter Number of questions</h6>
                </div>
                <hr>
                <div class="card-body">
                  <form action="addquestion.php" method="POST">
                    <div class="row" style="color:blue">
                      <div class="col-lg-12">
                    <?php
                     echo'
                      <div>
                   <form action="addquestion.php" method="POST">';

                      $n=$_SESSION['qns'];
                      for($i=1; $i<=$n; $i++)
                      {
                     echo '<b>Question no:'.$i.'</b>';
              
                  echo ' <textarea name="qns'.$i.'" id="qns" class="form-control" placeholder="Enter your question"></textarea><br>';
                      for($j=97;$j<=100;$j++)
                      {
                    echo'   <div class="form-group">
                          <input type="text" class="form-control" name="'.chr($j).$i.'" placeholder="enter option '.chr($j).'"> 
                          </div> ';
                          }
                    echo' <h4>correct answer:</h4>  
                      <select name="ans'.$i.'" id="'.$i.'" class="form-control">
                      <option value="a">select answer for question</option>
                      <option value="a">option a</option>
                      <option value="b">option b</option>
                      <option value="c">option c</option>
                      <option value="d">option d</option>
                      </select></br>';
                      }
                      ?>
                    
                  </div>
                   <div class="form-group">
                    <hr>
                    <div class="row">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-6">
                    <button class="btn btn-danger" value="addquiz" name="addquiz" >Add quiz</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>            
          </div>
          <?php
          if(isset($_REQUEST['addquiz']))
          {     
          $user='root';
          $pass='';
          $db='project';
  
           $db = new mysqli('localhost',$user,$pass,$db) or die("die");
           $eid=$_SESSION['eid'];
           $n=$_SESSION['qns'];
           for($i=1;$i<=$n;$i++)
           {
           $id=uniqid();
           $qns=$_REQUEST['qns'.$i];
           $sql=mysqli_query($db,"insert into quizquestion values ('$eid','$id','$qns')");
          for($j=97;$j<=100;$j++)
           {   
            $optionid=uniqid();
            $option=$_REQUEST[chr($j).$i];
            $sql=mysqli_query($db,"insert into options values ('$optionid','$id','$option')");
            $s=$_REQUEST['ans'.$i];

            $a=$_REQUEST['ans'.$i];
            switch($a)
            {
            case 'a':
                if ($j==97)
                { $ans=$optionid;  }
                break;
            case 'b':
                if ($j==98)
                { $ans=$optionid;  }
                break;
            case 'c':
                if ($j==99)
                { $ans=$optionid;  }
                break;
            case 'd':
                if($j==100)
                { $ans=$optionid;  }
                break;
            }   
             }
              $sql=mysqli_query($db,"insert into answer values ('$eid','$id','$ans')");
          }  
          echo "<script>document.location.href='viewtest.php';</script>";
     }

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
                  <a href="logoutadmin.php" class="btn btn-primary">Logout</a>
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
