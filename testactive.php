
<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Active Directory </title>
<link rel="stylesheet" href="newCss.css">
</head>
<body>
<!-- Start Navigation Bar  -->
<header>
	<div class="brand">
    	 <figure>
    	 	<img id=photo src="reunion.jpg" alt="logo" width="50%" height="100px" >
    		<figcaption><h5> Online Exam</h5></figcaption>
    	 <figure>
 	</div>
	<div class="container">
		<ul class="links"> 
			<li> <h6>Main</h6> 	                                 </li>
			<li> <h6>About the Academy</h6> 	                 </li>
			<li> <h6>Speech of the President of the Academy</h6> </li>
			<li> <h6>Distance Learning</h6> 	                 </li>
			<li> <h6>Academy Library</h6> 	                     </li>
			<li> <h6>The studio</h6> 	                         </li>
			<li> <h6>call us</h6> 	                             </li>
			<li> <h6>Academic Advising</h6> 	                 </li>
			<li> <h6>Online Exam</h6>	                         </li>
		</ul>
	</div>
</header>

	
	
		
	<aside> 
		<button ><a id=a href="create.php"> Create </a> </button> <br>
		<button ><a id=a href="update.php"> Update  </a> </button> <br>
		<button ><a id=a href="delete.php"> Delete  </a> </button> <br>
		<button ><a id=a href="dash board.php"> Dashboard  </a> </button> <br>
		<button ><a id=a href="activedirectory.php"> Active Directory </a> </button>
	</aside>
<script>
		var header = document.getElementById("link");
		var btns = header.getElementsByClassName("btn");
		for (var i = 0; i < btns.length; i++) {
		  btns[i].addEventListener("click", function() {
		  var current = document.getElementsByClassName("active");
		  current[0].className = current[0].className.replace(" active", "");
		  this.className += " active";
		  });
		}
	</script>


<article>
	<div>
		<button type="button" style="width: 10% ; height: 25px;  font-size: 20px;
		 padding-top: 0px; float: right; margin-right: 10px;"><a id=a href="Index.php">Log out</a></button>
	</div>
	<div class="art">
		<h1>Active Directory</h1><br> 
		
			</div>	
		<input type="text" name="search code"  placeholder="search code"><br><br>
		<input class="button"  type="submit"  name="submit" value="veiw" ><br>
		<b>___________________________________________________________________________</b><br><br>
	     
		<div class="container-aside-and-content">
			<article>
				<section>
			<div class="container-add">
			
	
				
		<?php 
		$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_examination_system";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
			
			$sql = "SELECT  * FROM admin";

			$result  =  mysqli_query($conn,$sql);
			 $count =  mysqli_num_rows($result);
			if ( $count > 0) { 
				echo "<table id=".'active'." cellpadding="."10px"." border-style ><tr><th>firstname</th><th>lastname</th><th>email</th> <th>phone</th> <th>code</th>";

			while($col = $result->fetch_assoc()) {
			echo "<tr><td>".$col["FirstName"]."</td><td>".$col["LastName"]."</td><td>".$col["Email"]."</td><td>".$col["Phone"]."</td><td>".$col["Code"]."</td></tr>"; }
			echo "</table>";
			echo"<br>";
			 }
			else { echo "0 results"; }
			$conn->close();
			 ?>
			</div>	
					</section>
		
		

	</div>

</article>














	<footer id="footer">
	
		<section>
			<table border="0" cellpadding="15">
				<caption align="left">About me</caption>
				<tr> 
				<th><img src="facebook-logo.png" alt="A family of cats" width="26px" height="25px" /></th>
				<th><img src="youtube-logo.png" alt="A family of cats" width="26px" height="25px" /></th>
				<th><img src="rss.png" alt="A family of cats" width="26px" height="25px" /></th> 
				<th><img src="twitter.png" alt="A family of cats" width="26px" height="25px" /></th>
			</table>
				<h4 align="right">&copy 2019 Thebes. A created by  </h4>
		</section>
	</footer>
  

</body>
</html>