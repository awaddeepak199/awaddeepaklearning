<?php
$user='root';
$pass='';
 $db='project';

 $db = new mysqli('localhost',$user,$pass,$db) or die("die");
 $id = $_GET['id'];
 $query="DELETE FROM web_problem where WEB_ID=".$id."";
 $result=mysqli_query($db,$query);
 if ($result) 
 {
 	echo '<script>alert("Delete Query Successfully !");
  document.location.href="queries.php";
  </script>';
 }
 else
 {
 	echo '<script>alert("Something Error check Try Again !");
  document.location.href="queries.php";
  </script>';
}
?>