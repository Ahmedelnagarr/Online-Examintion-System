<?php

echo 'Print values ';
echo $_POST['First_name'];
echo $_POST['last_name'];
echo 'end values ';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

					$First_name= (isset($_POST['firstname']) ? $_POST["firstname"]: null);
					$last_name = (isset($_POST['lastname']) ?$_POST["lastname"]: null);
					$Email = (isset($_POST['email']) ?$_POST["email"]: null);
					$Phone = (isset($_POST['phone']) ?$_POST["phone"]: null);
					$Address = (isset($_POST['address']) ?$_POST["address"]: null);
					$Gender = (isset($_POST['gender']) ?$_POST["gender"]: null);
					$code = (isset($_POST['code']) ?$_POST["code"]: null);
					$Password = (isset($_POST['password']) ?$_POST["password"]: null);
					$Re_write_password = (isset($_POST['re_write_password']) ?$_POST["re_write_password"]: null);
					$Specialization =(isset($_POST['Faculty']) ? $_POST["Faculty"]: null);}
											


											
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_examination_system";
$conn = mysqli_connect($servername, $username, $password, $dbname);
/*
$sqluser = "INSERT into Users (userType,userName,password) values ('Employee' ,'$username','$password' )"; 
$querySelectId =" SELECT max(userId) AS countId from Users  " ;
  $resultQuerySelectId = mysqli_query($conn,$querySelectId);
    $row = mysqli_fetch_array($resultQuerySelectId,MYSQLI_ASSOC);
    $id=$row['countId'] ;
    */
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$select1 = $_POST['select1'] ;
$select2 = $_POST['select2'] ;
$select3 = $_POST['select3'] ;
if ($_POST["select1"]=="admin" ) 
         {
         	 $sql1 = "INSERT INTO admin (admin.FirstName,admin.LastName,admin.Email,admin.Phone,admin.Address,admin.Gender,admin.Code,admin.Password,admin.ReWritePassword,admin.Specialization ) VALUES ('$First_name', '$last_name' , '$Email' , '$Phone' , '$Address' , '$Gender','$code' ,'$Password', 
'$Re_write_password' , '$Specialization') ";
         }
         elseif ($_POST["select2"]=="doctor")
         {
          	$sql2 = "INSERT INTO doctor (doctor.FirstName,doctor.LastName,doctor.Email,doctor.Phone,doctor.Address,doctor.Gender,doctor.Code,doctor.Password,doctor.ReWritePassword,doctor.Specialization ) VALUES ('$First_name', '$last_name' , '$Email' , '$Phone' , '$Address' , '$Gender','$code' ,'$Password', 
'$Re_write_password' , '$Specialization') ";
         }
         elseif ($_POST["select3"]=="student")
         {
         	$sql3 = "INSERT INTO student (student.FirstName,student.LastName,student.Email,student.Phone,student.Address,student.Gender,student.Code,student.Password,student.ReWritePassword,student.Specialization ) VALUES ('$First_name', '$last_name' , '$Email' , '$Phone' , '$Address' , '$Gender','$code' ,'$Password', 
'$Re_write_password' , '$Specialization') ";
         }
       	 else
       	 	{
       	 		echo "error";
       		}


if(mysqli_query($conn,$sql3,$sql1 ,$sql2)){
	    header("location:create.php?Empty=Records added successfully.");
	} else{
	    header("location:create.php?Empty=ERROR: Could not able to execute. ".mysqli_error($conn));
	}


mysqli_close($conn);
$conn->close();
?> 
 