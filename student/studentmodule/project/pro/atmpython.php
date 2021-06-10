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
            
            <h4 class=" text-gray-800" style="text-align: center;"><b> ATM Machine System</b></h4>
            <hr>

        <div class="row">
          <div class="col-md-12" style="padding-top: 20px">
            <h4><b>Brief Introduction:</b></h4><br>
            <p style="padding-left: 50px">
              *   An automated teller machine (ATM) is an electronic banking outlet that allows customers to complete basic transactions without the aid of a branch representative or teller. Anyone with a credit card or debit card can access cash at most ATMs. ATMs are convenient, allowing consumers to perform quick self-service transactions such as deposits, cash withdrawals, bill payments, and transfers between accounts. Fees are commonly charged for cash withdrawals by the bank where the account is located, by the operator of the ATM, or by both. Some or all of these fees can be avoided by using an ATM operated directly by the bank that holds the account.
            </p>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12" style="padding-top: 20px">
            <h4><b>Aim Of the Project:</b></h4><br>
            <p style="padding-left: 50px">
              * It convenient to manage a bank account holder's funds.<br>
              * It allows a person to check account balances, withdraw or deposit money.<br>
              * Access hard cash to Anywhere at any time.
            </p>
          </div>
        </div>
        <hr>

                <div class="row">
          <div class="col-md-12" style="padding-top: 20px">
            <h4><b>Course Outcomes:</b></h4><br>
            <p style="padding-left: 50px">
              * Display message on screen using python script or IDE.<br>
              * Develop a python program to demonstrate the use of operators.<br>
              * Handle Exceptions. 
            </p>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12">
            <h3><b>Actual Procedure Followed:</b></h3>
            <p style="padding-left:50px">Code:</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                           <textarea disabled id="html" cols="50" rows="20" style="border: 4px solid black;width: 100%;">
                                import time
                                print("Enter your Atm Card")
                                time.sleep(10)
                                print(“Card Inserted successfully”)
                                password=12345
                                balance = 5000
                                Name="Pankaj Jadhav"
                                Address="Shree Nagar, Latur"
                                Gender="Male"
                                Father_Name="Dhiraj Jadhav"

                                pin = int(input("Enter your Atm pin:"))

                                if pin==password:
                                while True:
                                  print(""" 
                                          1 == Profile
                                          2 == balance
                                         3 == withdrdwal balance
                                          4 == deposit balance 
                                          5 == exit
                                  """)
                                    try:    
                                     option=int(input("Please enter your choice:"))
                                    except:
                                    print("Enter valid option")
                                                                     
                                         if option==1:
                                          print("========================================")
                                          print("My Profile is:")
                                          print(f"Name:{Name}")
                                          print(f"Father_Name:{Father_Name}")
                                          print(f"Gender:{Gender}")
                                        print(f"Address:{Address}")    
                                              print("========================================")
                                    Page no:4
                                         if option==2:
                                   
                                          print("========================================")
                                          print(f"Your current balance is {balance}")
                                          print("========================================")
                                    
                                         if option==3:

                                        print("========================================")
                                        withdrdwal_amount=int(input("please enter your withdrawl amount"))
                                        print("========================================")
                                        balance=balance-withdrdwal_amount
                                        print(f"{withdrdwal_amount} is debited from your account")
                                        print("========================================")
                                        print(f"your current balance is {balance}")
                                        print("========================================")
                                 
                                       if option==4:
                                 
                                        print("========================================")
                                        deposit_amount=int(input("please enter your deposit amount:"))
                                        print("========================================")
                                        balance=balance+deposit_amount
                                        print(f"{deposit_amount} is depositd to your account.")
                                       print("========================================")
                                       print(f"your current balance is {balance}") 
                                       print("========================================")
                                       
                                      if option==5:
                                
                                             break
                                     else:
                                      print("Something Error Check your Atm pin")
                           </textarea>
                       </div>
                     </div>
                </div>
              </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p style="padding-left:30px"> Output:</p>
            <img src="../../../../files/img/img6.png" class="img-responsive" style="max-width:70%;padding-left: 200px;">
        </div>
      </div>
      <hr>

      <div class="row">
          <div class="col-md-12">
            <p style="padding-left:30px;color: red;"><b> You can download Project abstract from here. Click Download Button:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="python.docx" download><button  type="button" class="btn btn-primary mb-1">Download</button></a></p>
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