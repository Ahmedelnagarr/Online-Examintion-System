<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

					$First_name= $_POST["First_name"];
					$last_name = $_POST["last_name"];
					$Email = $_POST["Email"];
					$Phone = $_POST["Phone"];
					$Address = $_POST["Address"];
					$Gender = $_POST["Gender"];
					$code = $_POST["code"];
					$Password = $_POST["password"];
					$Re_write_password = $_POST["Re_write_password"];
					$Specialization = $_POST["Specialization"];
											
											}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_examination_system";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql1 = "INSERT INTO doctor (doctor.FirstName,doctor.LastName,doctor.Email,doctor.Phone,doctor.Address,doctor.Gender,doctor.Code,doctor.Password,doctor.ReWritePassword,doctor.Specialization ) VALUES ('omar', 'sallem' , 'omarasllem@gmail.com' , '1145678932' , 'egypt/maddi' , 'Male','20162020' ,'01145678932', '01145678932' , 'computer scienc') "
;


if (mysqli_query($conn, $sql1 )) {
echo "succssefly ";
} else {
echo "Error: " . $sql1 .  "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 
 