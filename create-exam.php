<?php
echo 'Print values ';
echo $_POST['First_name'];
echo $_POST['last_name'];
echo 'end values ';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

					
					$First_name= (isset($_POST["firstname"]) ? $_POST["firstname"]: null);
					$last_name = (isset($_POST["lastname"]) ?$_POST["lastname"]: null);
					$Level = (isset($_POST["level"]) ?$_POST["level"]: null);
					$Code = (isset($_POST["code"]) ?$_POST["code"]: null);
					$Specialization = (isset($_POST["specialization"]) ?$_POST["specialization"]: null);
					$Date = (isset($_POST["date"]) ?$_POST["date"]: null);
					$timefrom = (isset($_POST["starttime"]) ?$_POST["starttime"]: null);
					$timeto = (isset($_POST["endtime"]) ?$_POST["endtime"]: null);
											}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_examination_system";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql4 = "INSERT INTO examtable (examtable.FirstName,examtable.LastName,examtable.Level,examtable.Code,examtable.Specialization,examtable.Date,examtable.timefrom,examtable.timeto ) VALUES ('$First_name', '$last_name' , '$Level' , '$Code' , '$Specialization' , '$Date','$timefrom' ,
'$timeto') ";


if(mysqli_query($conn, $sql4)){
	    header("location:create.php?Empty=Records added successfully.");
	} else{
	    header("location:create.php?Empty=ERROR: Could not able to execute. ".mysqli_error($conn));
	}


mysqli_close($conn);
$conn->close();
?> 
 