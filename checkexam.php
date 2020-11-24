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
    ?>
    <p id="timer"></p>
    <script>
var count = 3600;
var counter = setInterval(timer, 1000); //1000 will  run it every 1 second

function timer() {
    count = count - 1;
    if (count == -1) {
        clearInterval(counter);
        // write code 
        return;
    }

    var seconds = count % 60;
    var minutes = Math.floor(count / 60);
    minutes %= 60;
    document.getElementById("timer").innerHTML =  minutes + " : " + seconds + " &ensp;&ensp;left "; // watch for spelling
}
</script>
    <form action="ans_check.php" method="POST">

<?php
    $v = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $res = $conn->query('SELECT * FROM quiz');
    while($row = $res->fetch_assoc()) 
    {
        $questions = array("choice1","chioce2","choice3","answer");
        shuffle($questions);
        echo "<label>" . 
        $row["question"]."</label><br/><br/>".
        "&ensp;&ensp;&ensp;&ensp;<input type='radio' name='".$v[$row["quizID"]].
        "' value='".
        $questions[0]
        ."'".">".
        "&ensp;<label>".
        $row[$questions[0]].
        "</label>"."<br/><br/>".


        "&ensp;&ensp;&ensp;&ensp;<input type='radio' name='".$v[$row["quizID"]].
        "' value='".
        $questions[1]
        ."'".">".
        "&ensp;<label>"
        .$row[$questions[1]].
        "</label>"."<br/><br/>".


        "&ensp;&ensp;&ensp;&ensp;<input type='radio' name='".$v[$row["quizID"]].
        "' value='".
        $questions[2]
        ."'".">".
        "&ensp;<label>".
        $row[$questions[2]].
        "</label>"."<br/><br/>".


        "&ensp;&ensp;&ensp;&ensp;<input type='radio' name='".$v[$row["quizID"]].
        "' value='".
        $questions[3]
        ."'".">".
        "&ensp;<label>".
        $row[$questions[3]].
        "</label>"."<br/><br/><br/><br/>";
    }
    ?>
    <input type='Submit' value='Submit'>
    </form>
    <?php
    $conn->close();
}
?> 