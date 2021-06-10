<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../../../files/img/logo.png" rel="icon">
  <title>Test Main</title>
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
                <a class="dropdown-item" href="../studentprofile.php">
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
          

          <div class="row" >
                <div class="col-lg-1"></div>
             
            
            <div class="col-lg-10">
              <!-- Form Basic -->
              <div class="card mb-10">
                <div class="flex-row">
                  <h6 class=" font-weight-bold text-primary" style="text-align: center;margin-top: 20px;">Lets Crack the exam.</h6>
                </div>
                <hr>
                <div class="card-body">
                    <div class="row" style="color:blue">
                      <div class="col-lg-12">
                         <?php
                        $user='root';
                       $pass='';
                       $db='project';
                       $db = new mysqli('localhost',$user,$pass,$db) or die("die");
             
             
                                     if(isset($_REQUEST['result']))
                        {   $eid=$_REQUEST['eid'];
                 $sq=mysqli_query($db,"select * from quiz where eid='$eid'");
                 $row1=mysqli_fetch_array($sq);
                 $correct=$row1['QU_CORRECT'];
                 $mistake=$row1['QU_WRONG'];
                 $n=$_SESSION['total'];
                 $sql=mysqli_query($db,"select * from answer where eid='$eid'");
                 $c=2;
                 $result=0;
                 @$uid=$_POST['uid'];
                 if(!empty($uid[$c]))
                 {
                @$attempt=count($_POST['uid']);
                while($row=mysqli_fetch_array($sql))
                {  
                    $uid=$_POST['uid'];
                    $ansid=$row['ans'];
                    @$match=$ansid==$uid[$c];
                    if($match)
                    {
                        $result++;
                     }
                     $c++;
                 }
                
               }
                @$wrong=$attempt-$result;
                $tscore=$result*$correct-$wrong*$mistake;
                 //insertion in history
                   $username=$_SESSION['username'];
               $chck="select * from history where username='$username' AND eid='$eid' ";
               $rslt=$db->query($chck);
               if($rslt->num_rows==0)
               {
                $sql="insert into history values ('','$username','$eid','0','0','0','0',now())";
                mysqli_query($db,$sql);      
             }
              $ins="update history set totals='$n',correct='$result',wrong='$wrong',score='$tscore',date=now() where username='$username' AND eid='$eid' ";
               mysqli_query($db,$ins);
                 //insertion in history end
            echo '<div class="col-sm-12 col-md-12" >
            <div class="card text-center">
                
                      <div class="card-title">
                          <p class=" mt-2 text-secondary"><b>total question:'.$n.'</b></p>
              <p class=" mt-2 text-secondary"><b>you attempt:'.@$attempt.'</b></p>
              <p class="text-primary">correct attempt question:'.$result.'</p>
              <p class="text-danger">wrong attemp answer:'.$wrong.'</p>
              <p class="text-success">total score:'.$tscore.'</p>
          <a href="testmain.php"><div class="text-xs font-weight-bold  mb-1" style="text-align: center;font-size: 15px"><button class="btn-danger">Proceed</button></div></a>
              </div>
                </div>
                </div>
                 ';
               }
               
               ?>
                           </div>
                           <br>

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
   
</body>

</html>