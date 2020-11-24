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
$sql = "INSERT INTO student (student.FirstName,student.LastName,student.Email,student.Phone,student.Address,student.Gender,student.Code,student.Password,student.ReWritePassword,student.Specialization ) VALUES ('ahmed', 'ali' , 'ahmedali@gmail.com' , '1123456789' , 'egypt /marg' , 'Male','20162030' ,'01123456789', '01123456789' , 'information tec') "
;


if (mysqli_query($conn, $sql )) {
echo "succssefly ";
} else {
echo "Error: " . $sql .  "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?> 
 