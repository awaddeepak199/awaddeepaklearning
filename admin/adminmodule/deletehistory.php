<?php
$user='root';
$pass='';
 $db='project';

 $db = new mysqli('localhost',$user,$pass,$db) or die("die");
 $id = $_GET['id'];
 $query="DELETE FROM history where historyid=".$id."";
 $result=mysqli_query($db,$query);
 if ($result) 
 {
 	echo '<script>alert("Delete History Successfully !");
  document.location.href="history.php";
  </script>';
 }
 else
 {
 	echo '<script>alert("Something Error check Try Again !");
  document.location.href="history.php";
  </script>';
}
?>