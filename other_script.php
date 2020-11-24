<?php
    $ans = mysql_result(mysql_query('select c_answer from yourtable where question = "'.url_decode($_GET['q']).'"'),0);
    if ($_POST['answer'] == $ans){
        echo "You got it right!";
    }else{
        echo "You got it wrong!";
    }
?>