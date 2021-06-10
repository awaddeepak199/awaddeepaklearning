<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../../../files/img/logo.png" rel="icon">
  <title>Student Problem</title>
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
          <a href="../studentmodule.php"><img class="img-profile rounded-circle" src="../../../files/img/logout.jpg" style="max-width: 40px"></a>
          
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
                <a class="dropdown-item" href="#">
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
           <div class=" align-items-center justify-content-between mb-4">
            <h5 class=" text-gray-800" style="text-align: center;">Welcome To Our Query Section. You can send any Queries during or any content not found then send Queries. It will works in between 2 to 3 days. Plz take some Patients.</h5>
          </div>
          <br>

          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="flex-row">
                  <h6 class=" font-weight-bold text-primary" style="text-align: center;margin-top: 20px;">Queries</h6>
                </div>
                <div class="card-body">
                  <form action="studentproblem.php" method="POST">
                    <div class="row">
                      <div class="col-lg-12">
                    <div class="form-group">
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
                        echo '
                      <label>ID</label>
                      <input type="text" name="id" class="form-control" value='.$rows["STD1_ID"].' readonly>
                    </div>
                  </div>';
                  ?>
                      <div class="col-lg-12">
                    <div class="form-group">
                      <label>Select Category</label>
                      <select class="form-control mb-3" name="module" id="select">
                    <option value="select">Select ...</option>
                    <option value="Tutorial">Tutorial</option>
                    <option value="Vidoeo">Vidoeo</option>
                    <option value="Project">Project</option>
                    <option value="Editor">Editor</option>
                    <option value="Test">Test</option>
                    <option value="Other">Other</option>
                  </select>
                    </div>
                  </div>
                   <div class="col-lg-12">
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" class="form-control" name="title">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <h6>Description</h6>
                      <textarea id="html" class="form-control" name="description" cols="50" rows="5" style="width: 100%;">
                           </textarea>
                    </div>
                  </div>
                  </div>
                  <hr>
                  <button class="btn btn-success" value="submit" name="submit" >Send Query</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php
          $user='root';
          $pass='';
          $db='project';
          $db = new mysqli('localhost',$user,$pass,$db) or die("die");
          if (isset($_POST['submit'])) 
           {
           $id =$_POST["id"]; 
           $module =$_POST["module"];
           $title =$_POST["title"];
           $description =$_POST["description"];
            $username=$_SESSION['username'];
            $password=$_SESSION['password'];
            $query="SELECT * FROM studentreg WHERE STD1_USERNAME='".$username."' && STD1_PASSWORD='".$password."' ";
            $result=mysqli_query($db,$query);
            while($rows=mysqli_fetch_assoc($result))

           if(empty($_POST['module']))
           {
             echo '<script>alert("Category is required !");
             </script>';
           }
           elseif (empty($_POST['title'])) 
           {
             echo '<script>alert("Title is required !");
             </script>';
           
           }elseif (empty($_POST['description'])) 
           {
             echo '<script>alert("Enter about title || description is required !");
             </script>';
           }elseif (mysqli_query($db,"INSERT INTO web_problem VALUES('','$module','$title','$description','$id')")) 
            {
              echo '<script>alert("Thank you for send query it will working in  2 to 3 days!");
              document.location.href="studentproblem.php";
              </script>';
            
            }else
            {
              echo '<script>alert("check and Try Again !")
              document.location.href="studentproblem.php";
              </script>';

             }
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
                  <a href="../studentlogout.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      

  <script src="../../../files/vendor/jquery/jquery.min.js"></script>
  <script src="../../../files/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../files/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../../../files/js/ruang-admin.min.js"></script>
</body>

</html>