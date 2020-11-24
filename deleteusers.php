<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_examination_system";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
 
    if(empty($_GET['code'])){
    	header('location:delete.php?Empty= Please write  the code  :( ');
    }
    else
    {
    $type = $_GET['Delete'];
    $code = $_GET['code'];

    $q = "DELETE FROM ".$type ." WHERE Code =".$code;

      echo $q;
     
    if(mysqli_query($conn, $q))
    {
     header('location:delete.php?Empty= User Deleted Succcessfuly :)');
      
    } else{
     header('location:delete.php?Empty= User not Found :(');
    }
    
  }
			$conn->close();

?>