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
            
            <h4 class=" text-gray-800" style="text-align: center;"><b> Html Attributes</b></h4>
            <div class="row">
            <div class="col-md-10">
                <a href="elements.php">
            <button  type="button" class="btn btn-primary mb-1">Back</button>
          </a>
          </div>
            <div class="col-md-1">
              <a href="heading.php">
            <button  type="button" class="btn btn-primary mb-1">Next</button>
          </a>
          </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12">
            <h5>HTML attributes provide additional information about HTML elements.</h5>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12" style="padding-top: 20px">
            <h4><b>HTML Attributes</b></h4><br>
            <p style="padding-left: 50px">
              * All HTML elements can have attributes.
              <br>* Attributes provide additional information about elements.
              <br>* Attributes are always specified in the start tag.
              <br>* Attributes usually come in name/value pairs like: name="value".
            </p>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12">
            <h3><b>The href Attribute</b></h3>
            <p>The <b>a</b> tag defines a hyperlink. The href attribute specifies the URL of the page the link goes to:</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="2" style="border: 4px solid black;width: 100%;">
                                <a href="https://www.w3schools.com">Visit W3Schools</a>
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
            <h3><b>The src Attribute</b></h3>
            <p>The <b>img</b> tag is used to embed an image in an HTML page. The src attribute specifies the path to the image to be displayed:</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="2" style="border: 4px solid black;width: 100%;">
                                <img src="img_girl.jpg">
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
          <div class="col-md-12" style="padding-top: 20px">
            <h4><b>There are two ways to specify the URL in the src attribute:</b></h4><br>
            <p style="padding-left: 50px">
             <b> 1. Absolute URL -</b> Links to an external image that is hosted on another website. Example: src="https://www.w3schools.com/images/img_girl.jpg".
              <br><b>2. Relative URL -</b> Links to an image that is hosted within the website. Here, the URL does not include the domain name. If the URL begins without a slash, it will be relative to the current page. Example: src="img_girl.jpg". If the URL begins with a slash, it will be relative to the domain. Example: src="/images/img_girl.jpg".
            </p>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12">
            <h3><b>The width and height Attributes:</b></h3>
            <p>The <b>img </b> tag should also contain the width and height attributes, which specifies the width and height of the image (in pixels):</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="2" style="border: 4px solid black;width: 100%;">
                                <img src="img_girl.jpg" width="500" height="600">
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
            <h3><b>The alt Attribute</b></h3>
            <p>The required alt attribute for the <b>img</b> tag specifies an alternate text for an image, if the image for some reason cannot be displayed. This can be due to slow connection, or an error in the src attribute, or if the user uses a screen reader.</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="2" style="border: 4px solid black;width: 100%;">
                               <img src="img_girl.jpg" alt="Girl with a jacket">
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
            <h3><b>The style Attribute</b></h3>
            <p>The style attribute is used to add styles to an element, such as color, font, size, and more..</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="2" style="border: 4px solid black;width: 100%;">
                               <p style="color:red;">This is a red paragraph.</p>
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
            <h3><b>The title Attribute</b></h3>
            <p>The <b>title</b> attribute defines some extra information about an element.<br>
The value of the title attribute will be displayed as a tooltip when you mouse over the element:</p>
             <div class="row justify-content-center">
               <div class="col-xl-9 col-lg-10 col-md-9" >
                 <div class="card shadow-sm my-5">
                   <div class="card-body p-0">
                     <div class="row">
                         <div class="card-body">
                          <h4 style="text-shadow: black"><b>Example:</b></h4>
                           <textarea id="html" cols="50" rows="2" style="border: 4px solid black;width: 100%;">
                               <p title="I'm a tooltip">This is a paragraph.</p>

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
            <h4><b>Chapter Summary</b></h4><br>
            <p style="padding-left: 50px">
              * All HTML elements can have attributes
              <br>* The href attribute of <b>a</b> specifies the URL of the page the link goes to
              <br>* The src attribute of <b>img</b> specifies the path to the image to be displayed
              <br>* The width and height attributes of <b>img</b> provide size information for images
              <br>* The alt attribute of <b>img</b> provides an alternate text for an image
              <br>* The style attribute is used to add styles to an element, such as color, font, size, and more
              <br>* The lang attribute of the <b>img</b> tag declares the language of the Web page
              <br>* The title attribute defines some extra information about an element
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