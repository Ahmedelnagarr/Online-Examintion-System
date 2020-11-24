<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Update </title>
<link rel="stylesheet" href="newCss.css">
</head>
<body>
<!-- Start Navigation Bar  -->
<script>
    function Update() {    
            var x;   
                if (confirm("  Are You Sure You Want To Update this info ? ") == true)
                { x = "Yes update "; } 
                else 
                { x = "No!"; }   
                document.getElementById("demo").innerHTML = x;
            	}
</script>
<script>
    function Update_subject() {    
            var x;   
                if (confirm("  Are You Sure You Want To Update this subject  ? ") == true)
                	{ x = "Yes update "; } 
                else 
                { x = "No!"; }   
                document.getElementById("demo").innerHTML = x;
            }
    
    </script>
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



<article>
	<div>
		<button type="button" style="width: 10% ; height: 25px;  font-size: 20px;
		 padding-top: 0px; float: right; margin-right: 10px;"><a id=a href="Index.php">Log out</a></button>
	</div>
	<div class="art">
		<h1>Update</h1><br> 

		<select name="create">
			<option value="admin">admin</option>
			<option value="doctor">doctor</option>
			<option value="student">student</option>
		</select><br><br> 

		<label> frist name : </label><br>
		<input type="text" name="firstname"  placeholder="frist name"><br>
		<label> last name : </label><br>
		<input type="text" name="lastname" placeholder=" last name"><br>
		<label> email : </label><br>
		<input type="text" name="email" placeholder="ex@domain.com"><br>
		<label> phone : </label><br>
		<input type="text" name=phone placeholder="01*********"><br>
		<label> address : </label><br>
		<input type="text" name="address" placeholder="address"><br>
		
		<form id="gen">
		<label> Gender </label><br>
		<input  type="radio" name="gender" value="male"> Male  
		<input  type="radio" name="gender" value="female"> Female 
		</form> <br>

		<label> Code  </label><br> 
		<input type="text" placeholder="20162032" name="code" required ><br> 
		<label> password  </label><br> 
		<input type="text" placeholder="password" name="password" required ><br>
		<label> Re-write Password  </label><br> 
		<input type="text" placeholder="Re-write Password" name="Re-write Password" required ><br> 
		<label>specialization : </label><br>
		<select id="faculty" name="Faculty"  name="facultydEmployee" >
	 		<option value= "Please select the specialization" selected>Please select the specialization</option>
			<option value="Computer Science"> Computer Science </option>
			<option value="Computer Engineering"> Computer Engineering</option>
			<option value="IT "> IT </option>
		</select><br> <br>

		<input class="button"  type="submit" id="btn" name="submit" onclick="Update()" value="Update" ><br>
		<br>_______________________________________________________________________________<br><br>

		<select name="create 2">
			<option value="supject">supject</option>
			<option value="Exam">Exam</option>
		</select><br><br> 
		<label> frist name : </label><br>
		<input type="text" name="firstname"  placeholder="frist name"><br>
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
		<input type="text" placeholder="20162032" name="code" required ><br>
		<label> specialization : </label><br>
		<select id="faculty" name="Faculty"  name="facultydEmployee" >
	 		<option value= "Please select the specialization" selected>Please select the specialization</option>
			<option value="Computer Science"> Computer Science </option>
			<option value="Computer Engineering"> Computer Engineering</option>
			<option value="IT "> IT </option>
		</select><br> <br>
		<label> data : </label><br>
		<input type="date" name="birthday"><br>
		<label> time from : </label><br>
		<input type="time" name="usr_time"><br>
		<label> time to : </label><br>
		<input type="time" name="usr_time"><br>
		<input class="button"  type="submit" id="btn" name="submit" onclick="Update_subject()" value="Update" ><br>

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