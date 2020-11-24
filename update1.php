<?php
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

$sql2 = "UPDATE admin SET (admin.FirstName,admin.LastName,admin.Email,admin.Phone,admin.Address,admin.Gender,admin.Code,admin.Password,admin.ReWritePassword,admin.Specialization ) where ('$First_name', '$last_name' , '$Email' , '$Phone' , '$Address' , '$Gender','$code' ,'$Password', 
'$Re_write_password' , '$Specialization') ";
if(mysqli_query($conn, $sql2)){
	    header("location:create.php?Empty=Records added successfully.");
	} else{
	    header("location:create.php?Empty=ERROR: Could not able to execute. ".mysqli_error($conn));
	}


mysqli_close($conn);
$conn->close();
?> 
 