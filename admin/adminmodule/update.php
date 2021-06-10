<?php

session_start();

if(isset($_REQUEST['addquiz']))
{
if($_GET['q']=='adding')
{
    $eid=$_SESSION['eid'];
    $n=$_SESSION['qns'];
    for($i=1;$i<=$n;$i++)
    {
    $id=uniqid();
    $qns=$_REQUEST['qns'.$i];
    $sql=mysqli_query($conn,"insert into quizquestion values ('$eid','$id','$qns')");
        for($j=97;$j<=100;$j++)
        {   
            $optionid=uniqid();
            $option=$_REQUEST[chr($j).$i];
            $sql=mysqli_query($conn,"insert into options values ('$optionid','$id','$option')");
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
     $sql=mysqli_query($conn,"insert into answer values ('$eid','$id','$ans')");

    }  
 }
}