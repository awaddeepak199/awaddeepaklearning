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
            
            <h4 class=" text-gray-800" style="text-align: center;"><b> Html Elements</b></h4>
            <div class="row">
            <div class="col-md-10">
                <a href="editors.php">
            <button  type="button" class="btn btn-primary mb-1">Back</button>
          </a>
          </div>
            <div class="col-md-1">
              <a href="attributes.php">
            <button  type="button" class="btn btn-primary mb-1">Next</button>
          </a>
          </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12">
            <h5>An HTML element is defined by a start tag, some content, and an end tag.</h5>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12" style="padding-left: 30px">
            <h3><b>HTML Elements:</b></h3>
            <p>The HTML element is everything from the start tag to the end tag:</p>
            <h6><b>tagname</b>Content goes here...<b>/tagname</b><h6><br>
              <p>Tags are:</p>

            <table style="width:80% ;border: 1px solid black;padding-left: 50px">
              <tr style="border: 1px solid black">
                <th>Start tag</th>
                <th>Element content</th> 
                 <th>End tag</th>
               </tr>
               <tr style="border: 1px solid black">
                 <td>h1</td>
                <td>My First heading.</td>
                <td>/h1</td>
              </tr>
              <tr style="border: 1px solid black">
                <td>p</td>
                <td>My First Paragraph.</td>
                <td>/p</td>
              </tr>
            <tr style="border: 1px solid black">
              <td>br</td>
              <td>next page</td>
              <td>..</td>
            </tr>
          </table>
        </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12">
            <h2><b>Nested HTML Elements</b></h2>
            <p>HTML elements can be nested (this means that elements can contain other elements).<br>All HTML documents consist of nested HTML elements.<br>The following example contains four HTML elements <b>(html, body, h1 and p)</b>:</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="10" style="border: 4px solid black;width: 100%;">
                            <!DOCTYPE html>
                            <html>
                              <head>
                                <title></title>
                              </head>
                              <body>
                                <h1>My First Heading!</h2>
                                  <p>My First paragraph.</p>
                              </body>
                            </html>
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
            <h2><b>Example Explained</b></h2>
            <p>The <b>html</b> element is the root element and it defines the whole HTML document. <br>It has a start tag <b>html</b> and an end tag <b>/html</b>.<br>Then, inside the <b>html</b> element there is a <b>body</b>element:</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="5" style="border: 4px solid black;width: 100%;">
                              <body>
                                <h1>My First Heading!</h2>
                                  <p>My First paragraph.</p>
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
            <p>The <b>body</b> element defines the document's body.It has a start tag <b>body</b> and an end tag <b>/body</b>. <br>Then, inside the <b>body</b> element there are two other elements: <b>h1 and p </b>:</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="5" style="border: 4px solid black;width: 100%;">
                              <body>
                                <h1>My First Heading!</h2>
                                  <p>My First paragraph.</p>
                              </body>
                      
                           </textarea>
                       </div>
                     </div>
                </div>
              </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-12">
            <p>The <b>h1</b> element defines a heading.<br>It has a start tag <b>h1</b> and an end tag <b>/h1</b>:</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="2" style="border: 4px solid black;width: 100%;">
                                <h1>My First Heading!</h2>
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
            <p>The <b>p</b> element defines a paragraph.<br>It has a start tag <b>p</b> and an end tag <b>/p</b>:</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="2" style="border: 4px solid black;width: 100%;">
                                <p>My First Heading!</p>
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
          <div class="col-md-12" style="padding-top: 20px">
            <h4><b>HTML is Not Case Sensitive</b></h4><br>
            <p style="padding-left: 50px">
              * HTML tags are not case sensitive: <b>p</b> means the same as <b>p</b>.
              <br>* The HTML standard does not require lowercase tags, but W3C recommends lowercase in HTML, and demands lowercase for stricter document types like XHTML.
            </p>
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