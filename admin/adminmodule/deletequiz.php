<?php
$user='root';
$pass='';
 $db='project';

 $db = new mysqli('localhost',$user,$pass,$db) or die("die");
 if($_GET['q']=='deleteqns')
{
    if(isset($_GET['eid']))
    {
        $eid=$_GET['eid'];
        $sql=mysqli_query($db,"select * from quizquestion where eid='$eid'");
        while($row=mysqli_fetch_array($sql))
        {
            $qid=$row['id'];
            $a=mysqli_query($db,"delete from options where id='$qid'");
            $b=mysqli_query($db,"delete from answer where id='$qid'");
        }
        $d=mysqli_query($db,"delete from quizquestion where eid='$eid'");
        $e=mysqli_query($db,"delete from quiz where eid='$eid'");
         echo '<script>alert("Test delete successfully !")
          document.location.href="viewtest.php";
          </script>';
    }
}
 
?>