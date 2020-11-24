<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> information student </title>
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
		<button ><a id=a href="information student.php"> Information Stu </a> </button> <br>
		<button ><a id=a href="Exam Tabal.php"> Exam Tabal  </a> </button> <br>
		<button ><a id=a href="Exam.php"> Exam  </a> </button> <br>
		<button ><a id=a href="Model Answer.php"> Model Answer  </a> </button> <br>
		<button ><a id=a href="score.php"> Score </a> </button>
	</aside>



<article>
	<div>
		<button type="button" style="width: 10% ; height: 25px;  font-size: 20px;
		 padding-top: 0px; float: right; margin-right: 10px;"><a id=a href="Index.php">Log out</a></button>
	</div>

	<div class="art">


		<h1>Information Student</h1><br> 
			 

		<label> frist name : </label><br>
		<input type="text" name="firstname"  placeholder="frist name" disabled><br>
		<label> last name : </label><br>
		<input type="text" name="lastname" placeholder=" last name" disabled><br>
		<label> email : </label><br>
		<input type="text" name="email" placeholder="ex@domain.com" disabled><br>
		<label> phone : </label><br>
		<input type="text" name=phone placeholder="01*********" disabled><br>
		<label> address : </label><br>
		<input type="text" name="address" placeholder="address" disabled><br>
		
		<form id="gen">
		<label> Gender </label><br>
		<input  type="radio" name="gender" value="male" disabled> Male  
		<input  type="radio" name="gender" value="female" disabled> Female 
		</form> <br>

		<label> Code  </label><br> 
		<input type="text" placeholder="20162032" name="code" disabled ><br> 
		<label> password  </label><br> 
		<input type="text" placeholder="password" name="password" disabled ><br>
		<label>specialization : </label><br>
		<select id="faculty" name="Faculty"  name="facultydEmployee" disabled>
	 		<option value= "Please select the specialization" selected>Please select the specialization</option>
			<option value="Computer Science"> Computer Science </option>
			<option value="Computer Engineering"> Computer Engineering</option>
			<option value="IT "> IT </option>
		</select><br> <br>

		

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