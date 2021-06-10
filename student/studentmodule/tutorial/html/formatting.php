<!DOCTYPE html>
<html lang="en">
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
    <!---sidebar-->
     <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar" class="sidebar" >
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <img src="../../../../files/img/html.png">
        </div>
        <div class="sidebar-brand-text mx-3">Html</div>
      </a>
      <br>
      <li class="nav-item">
        <div class="sidebar-heading" style="color:black;font-size: 13px">
        Html Tutorial  
      </div>
      <hr>
        <a class="nav-link" href="htmlmain.php">
          <span style="margin-left: 50px;color: blue">Html Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="introduction.php">
          <span style="margin-left: 50px;color: blue">Html Introduction</span>
        </a>
      </li><li class="nav-item">
        <a class="nav-link" href="editors.php">
          <span style="margin-left: 50px;color: blue">Html Editors</span>
        </a>
      </li><li class="nav-item">
        <a class="nav-link" href="elements.php">
          <span style="margin-left: 50px;color: blue">Html Elements</span>
        </a>
      </li><li class="nav-item">
        <a class="nav-link" href="attributes.php">
          <span style="margin-left: 50px;color: blue">Html Attributes</span>
        </a>
      </li><li class="nav-item">
        <a class="nav-link" href="heading.php">
          <span style="margin-left: 50px;color: blue">Html Headings</span>
        </a>
      </li><li class="nav-item">
        <a class="nav-link" href="paragraphs.php">
          <span style="margin-left: 50px;color: blue">Html Paragraphs</span>
        </a>
      </li><li class="nav-item">
        <a class="nav-link" href="styles.php">
          <span style="margin-left: 50px;color: blue">Html Styles</span>
        </a>
      </li><li class="nav-item">
        <a class="nav-link" href="formatting.php">
          <span style="margin-left: 50px;color: blue">Html Formatting</span>
        </a>
      </li><li class="nav-item">
        <a class="nav-link" href="comments.php">
          <span style="margin-left: 50px;color: blue">Html Comments</span>
        </a>
      </li><li class="nav-item">
        <a class="nav-link" href="forms.php">
          <span style="margin-left: 50px;color: blue">Html Forms</span>
        </a>
      </li><li class="nav-item">
        <a class="nav-link" href="file.php">
          <span style="margin-left: 50px;color: blue">Html File Path</span>
        </a>
      </li><br>
      <li class="nav-item">
        <div class="sidebar-heading" style="color:black;font-size: 13px">
        Html Media
      </div>
      <hr>
        <a class="nav-link" href="audio.php">
          <span style="margin-left: 50px;color: blue">Html Audio</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="video.php">
          <span style="margin-left: 50px;color: blue">Html Video</span>
        </a>
      </li>
      <br>
      <li class="nav-item">
        <div class="sidebar-heading" style="color:black;font-size: 13px">
        Html Examples
      </div>
      <hr>
        <a class="nav-link" href=../../video/studentvideo.php>
          <span style="margin-left: 50px;color: blue">Html Vidoes</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span style="margin-left: 50px;color: blue">Html Project</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../editor/editor.php">
          <span style="margin-left: 50px;color: blue">Html Editor</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../../test/testmain.php">
          <span style="margin-left: 50px;color: blue">Html Test</span>
        </a>
      </li>
    </ul>
    <!-----sidebar end-->
    
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->

        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">   
            <div class="topbar-divider d-none d-sm-block"></div>
            <a href="../tutorialmain.php"><img class="img-profile rounded-circle" src="../../../../files/img/logout.jpg" style="max-width: 40px"></a>
          </ul>
        </nav>
        <!-- Topbar -->
         <br>
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class=" align-items-center justify-content-between mb-4">
            
            <h4 class=" text-gray-800" style="text-align: center;"><b> Html Text Formatting</b></h4>
            <div class="row">
            <div class="col-md-10">
                <a href="styles.php">
            <button  type="button" class="btn btn-primary mb-1">Back</button>
          </a>
          </div>
            <div class="col-md-1">
              <a href="comments.php">
            <button  type="button" class="btn btn-primary mb-1">Next</button>
          </a>
          </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12">
            <h5>HTML contains several elements for defining text with a special meaning.</h5>
          </div>
        </div>
        <hr>


        <div class="row">
          <div class="col-md-12" style="padding-top: 20px">
            <h4><b>HTML Formatting Elements</b></h4><br>
            <p> Formatting elements were designed to display special types of text:</p>
            <p style="padding-left: 50px">
              * <b>b</b> - Bold text<br>
              * <b>strong</b> - Important text<br>
              * <b>i</b> - Italic text<br>
              * <b>em</b> - Emphasized text<br>
              * <b>mark</b> - Marked text<br>
              * <b>small</b> - Smaller text<br>
              * <b>del</b> - Deleted text<br>
              * <b>ins</b> - Inserted text<br>
              * <b>sub</b> - Subscript text<br>
              * <b>sup</b> - Superscript text
            </p>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12">
            <h3><b>HTML <b>b</b> and <b>strong</b> Elements</b></h3>
            <p style="padding-left: 50px;">The HTML <b>b</b> element defines bold text, without any extra importance.</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="2" style="border: 4px solid black;width: 100%;">
                                <b>This text is bold</b>
                           </textarea>
                           <a href="../../editor/editor.php">
                         <button  type="button" class="btn btn-primary mb-1">Try it to editor..</button>
                       </a>
                       </div>
                     </div>
                </div>
              </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p style="padding-left: 50px;">The HTML <b>strong</b> element defines text with strong importance. The content inside is typically displayed in bold.</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="2" style="border: 4px solid black;width: 100%;">
                                <strong>This text is important!</strong>
                           </textarea>
                           <a href="../../editor/editor.php">
                         <button  type="button" class="btn btn-primary mb-1">Try it to editor..</button>
                       </a>
                       </div>
                     </div>
                </div>
              </div>
          </div>
        </div>
        <hr>
         <div class="row">
          <div class="col-md-12">
            <h3><b>HTML <b>i</b> and <b>em</b>Elements</b></h3>
            <p style="padding-left: 50px;">The HTML <b>i</b> element defines a part of text in an alternate voice or mood. The content inside is typically displayed in italic.</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="7" style="border: 4px solid black;width: 100%;">
                                <body style="background-color:powderblue;">
                                 <i>This text is italic</i>

                                  </body>
                           </textarea>
                           <a href="../../editor/editor.php">
                         <button  type="button" class="btn btn-primary mb-1">Try it to editor..</button>
                       </a>
                       </div>
                     </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p style="padding-left: 50px;">The HTML <b>em</b> element defines emphasized text. The content inside is typically displayed in italic.</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="2" style="border: 4px solid black;width: 100%;">
                                <em>This text is emphasized</em>
                           </textarea>
                           <a href="../../editor/editor.php">
                         <button  type="button" class="btn btn-primary mb-1">Try it to editor..</button>
                       </a>
                       </div>
                     </div>
                </div>
              </div>
          </div>
        </div>
        <hr>

         <div class="row">
          <div class="col-md-12">
            <h3><b>HTML <b>small</b> Element</b></h3>
            <p style="padding-left: 50px;">The HTML <b>small</b> element defines smaller text:</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="5" style="border: 4px solid black;width: 100%;">
                                <small>This is some smaller text.</small>
                           </textarea>
                           <a href="../../editor/editor.php">
                         <button  type="button" class="btn btn-primary mb-1">Try it to editor..</button>
                       </a>
                       </div>
                     </div>
                </div>
              </div>
          </div>
        </div>
        <hr>

         <div class="row">
          <div class="col-md-12">
            <h3><b>HTML <b>mark</b> Element</b></h3>
            <p style="padding-left: 50px;">The HTML <mark> element defines text that should be marked or highlighted:</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="5" style="border: 4px solid black;width: 100%;">
                               <p>Do not forget to buy <mark>milk</mark> today.</p>
                           </textarea>
                           <a href="../../editor/editor.php">
                         <button  type="button" class="btn btn-primary mb-1">Try it to editor..</button>
                       </a>
                       </div>
                     </div>
                </div>
              </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12">
            <h3><b>HTML <b>del</b> Element</b></h3>
            <p style="padding-left: 50px;">The HTML <b>del</b> element defines text that has been deleted from a document. Browsers will usually strike a line through deleted text:</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="5" style="border: 4px solid black;width: 100%;">
                               <p>My favorite color is <del>blue</del> red.</p>
                           </textarea>
                           <a href="../../editor/editor.php">
                         <button  type="button" class="btn btn-primary mb-1">Try it to editor..</button>
                       </a>
                       </div>
                     </div>
                </div>
              </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12">
            <h3><b>HTML ins Element</b></h3>
            <p style="padding-left: 50px;">The HTML <b>ins</b> element defines a text that has been inserted into a document. Browsers will usually underline inserted text:</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="5" style="border: 4px solid black;width: 100%;">
                               <p>My favorite color is <del>blue</del> <ins>red</ins>.</p>
                           </textarea>
                           <a href="../../editor/editor.php">
                         <button  type="button" class="btn btn-primary mb-1">Try it to editor..</button>
                       </a>
                       </div>
                     </div>
                </div>
              </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12">
            <h3><b>HTML sub Element</b></h3>
            <p style="padding-left: 50px;">The HTML <b>sub</b> element defines subscript text. Subscript text appears half a character below the normal line, and is sometimes rendered in a smaller font. Subscript text can be used for chemical formulas, like H2O:</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="5" style="border: 4px solid black;width: 100%;">
                               <p>This is <sub>subscripted</sub> text.</p>
                           </textarea>
                           <a href="../../editor/editor.php">
                         <button  type="button" class="btn btn-primary mb-1">Try it to editor..</button>
                       </a>
                       </div>
                     </div>
                </div>
              </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12">
            <h3><b>HTML sup Element</b></h3>
            <p style="padding-left: 50px;">The HTML <b>sup</b> element defines superscript text. Superscript text appears half a character above the normal line, and is sometimes rendered in a smaller font. Superscript text can be used for footnotes, like WWW[1]:</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="5" style="border: 4px solid black;width: 100%;">
                              <p>This is <sup>superscripted</sup> text.</p>
                           </textarea>
                           <a href="../../editor/editor.php">
                         <button  type="button" class="btn btn-primary mb-1">Try it to editor..</button>
                       </a>
                       </div>
                     </div>
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