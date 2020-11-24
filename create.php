<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_examination_system";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> create </title>
<link rel="stylesheet" href="newCss.css">
<script src="valid.js" type="text/javascript"></script>
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
	</div>
</header>

	
	
		
	<aside> 
		<button ><a id=a href="create.php"> Create </a> </button> <br>
		<button ><a id=a href="update.php"> Update  </a> </button> <br>
		<button ><a id=a href="delete.php"> Delete  </a> </button> <br>
		<button ><a id=a href="dash board.php"> Dashboard  </a> </button> <br>
		<button ><a id=a href="activedirectory.php"> Active Directory </a> </button>
	</aside>



<article>
	<div>
		<button type="button" style="width: 10% ; height: 25px;  font-size: 20px;
		 padding-top: 0px; float: right; margin-right: 10px;"><a id=a href="Index.php">Log out</a></button>
	</div>
	<form action="add-admin.php" method="POST"> 
	<div class="art">
		<h1>create</h1><br> 

		<select name="create" id="create" required>
			<option value="admin">admin</option>
			<option value="doctor">doctor</option>
			<option value="student">student</option>
		</select><br><br> 
        
				<label> first name : </label><br>
				<input type="text" name="firstname"  placeholder="first name" required> <br>
				<label> last name : </label><br>
				<input type="text" name="lastname" placeholder=" last name" required ><br>
				<label> email : </label><br>
				<input type="text" name="email" placeholder="ex@domain.com"required><br>
				<label> phone : </label><br>
				<input type="text" name=phone placeholder="01*********"required><br>
				<label> address : </label><br>
				<input type="text" name="address" placeholder="address"required><br>
				
				
					<label> Gender </label><br>
					<input  type="radio" name="gender" value="male"> Male  
					<input  type="radio" name="gender" value="female"> Female 
				 <br>

				<label> Code  </label><br> 
				<input type="text" placeholder="20162032" name="code" required ><br> 
				<label> password  </label><br> 
				<input type="text" placeholder="password" onkeyup="matchPassword();" name ="password"  required><br>
				<label> Re-write Password  </label><br> 
				<input type="text" placeholder="Re-write Password" onkeyup="matchPassword();" name="re_write_password" required ><br> 
				<label>specialization : </label><br>
				<select id="faculty" name="Faculty"  >
			 		<option value= "Please select the specialization" selected>Please select the specialization</option>
					<option value="Computer Science"> Computer Science </option>
					<option value="Computer Engineering"> Computer Engineering</option>
					<option value="IT"> IT </option>
				</select><br> <br>

				<input onclick="clickButton('btn')" class="button"  type="submit" id="btn" name="submit" value="create" ><br>
	</form>
		<br>_______________________________________________________________________________<br><br>
		<form action="create-exam.php" method="post">
		<h1>Create Exam</h1><br> 
		<label> first name : </label><br>
		<input type="text" name="firstname"  placeholder="first name"><br>
		<label> last name : </label><br>
		<input type="text" name="lastname" placeholder=" last name"><br>
		<label> level : </label><br>
		<select name="level">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select><br>
		<label> Code  </label><br> 
		<input type="text" placeholder="code" name="code" required ><br>
		<label> specialization : </label><br>
		<select id="faculty" name="Faculty"   >
	 		<option value= "Please select the specialization" selected>Please select the specialization</option>
			<option value="Computer Science"> Computer Science </option>
			<option value="Computer Engineering"> Computer Engineering</option>
			<option value="IT "> IT </option>
		</select><br> <br>
		<label> data : </label><br>
		<input type="date" name="date"><br>
		<label> time from : </label><br>
		<input type="time" name="starttime"><br>
		<label> time to : </label><br>
		<input type="time" name="endtime"><br>
		<?php if(@$_GET['Empty']==true)
	{
	?>
	<div class="alert" style="color:red;"><?php echo $_GET['Empty']; ?> </div>
	<?php
    }
	?>
		<input  onclick="clickButton('btn')" class="button"  type="submit" id="btn" name="submit" value="create" ><br>

	</div>
</form>

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