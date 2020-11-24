<?php 
		 $con = mysqli_connect('localhost', 'root', '', 'online_examination_system');
		
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'online_examination_system';

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Please Check the Connections  " . $conn->connect_error);
	}			   
?>
