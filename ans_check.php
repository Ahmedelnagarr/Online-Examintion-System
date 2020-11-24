<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_examination_system";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
else 
{   
    $v = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $res = $conn->query('SELECT * FROM quiz');
    $score = 0 ;
    $count = 0 ;
    while($row = $res->fetch_assoc()) 
    {
        $count++;
        $q_id = $row["quizID"];

        echo "<label>" . 
        $row["question"]."</label><br/>";
        if ($_POST[$v[$q_id]] =="answer" )
        {
            echo "&ensp;&ensp;&ensp;&ensp;<label style='color:forestgreen'>"
        .$row["answer"]."</label><br/><br/><br/>";
        $score++;
        }
        else if($_POST[$v[$q_id]] =="choice1")
        {
            echo "&ensp;&ensp;&ensp;&ensp;<label style='color:red'>".
        $row['choice1'].
        "</label>"."<br/>".
        "&ensp;&ensp;&ensp;&ensp;<label style='color:forestgreen'>"
        .$row["answer"]."</label><br/><br/>";
        }
        else if($_POST[$v[$q_id]] =="chioce2")
        {
            echo "&ensp;&ensp;&ensp;&ensp;<label style='color:red'>".
        $row['chioce2'].
        "</label>"."<br/>".
        "&ensp;&ensp;&ensp;&ensp;<label style='color:forestgreen'>"
        .$row["answer"]."</label><br/><br/>";
        }
        else if($_POST[$v[$q_id]] =="choice3")
        {
            echo "&ensp;&ensp;&ensp;&ensp;<label style='color:red'>".
        $row['choice3'].
        "</label>"."<br/>".
        "&ensp;&ensp;&ensp;&ensp;<label style='color:forestgreen'>"
        .$row["answer"]."</label><br/><br/>";
        }
        
    }
    if ($score>=($count/2))
    {
        echo "&ensp;<h1 style='color:forestgreen'>"
        ."Your score is : ".$score."/".$count."</h1><br/><br/><br/>";
    }
    else 
    {
        echo "&ensp;<h1 style='color:red'>"
        ."Your score is : ".$score."/".$count."</h1><br/><br/><br/>";
    }
}
$conn->close()
?>
