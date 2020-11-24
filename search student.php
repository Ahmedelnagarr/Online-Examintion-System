php<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Search </title>
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
		<button ><a id=a href="enter_a_questions.php"> Enter A Questions </a> </button> <br>
		<button ><a id=a href="view questions.php"> View Questions  </a> </button> <br>
		<button ><a id=a href="Report Marks.php"> Report Marks  </a> </button> <br>
		<button ><a id=a href="delete question.php"> Delete  </a> </button> <br>
		<button ><a id=a href="search student.php"> Search  </a> </button> <br>
	</aside>



<article>
	<div>
		<button type="button" style="width: 10% ; height: 25px;  font-size: 20px;
		 padding-top: 0px; float: right; margin-right: 10px;"><a id=a href="Index.php">Log out</a></button>
	</div>

	<div class="art">


		<h1>Search students</h1><br>

		<input type="text" name="seaech code students"  placeholder="seaech code students"><br><br>
		<input class="button"  type="submit"  name="submit" value="veiw" ><br>
		<b>___________________________________________________________________________</b><br><br>
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