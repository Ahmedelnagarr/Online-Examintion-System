<?php

?>
<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Delete </title>
<link rel="stylesheet" href="newCss.css">
</head>
<body>
<!-- Start Navigation Bar  -->
<script>
    function Delete_Warning() {    
            var x;   
                if (confirm(" Warning.......! Are You Sure You Want To Delete ") == true) { 
                    x = "Yes Delete "; 
                } 
                else 
                {   
                    x = "No!"; 
                }   
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
		<h1>Delete</h1><br> 
      <form method="GET" action="deleteusers.php">
		<select name="Delete" id ="Delete">
			<option value="admin">admin</option>
			<option value="doctor">doctor</option>
			<option value="student">student</option>
			<option value="Exam">Exam</option>
		</select><br><br> 

		
		
		<label> Code  </label><br> 
		<input onblur="validInput(this ,'codeSearch','Code')" type="search" name="code" placeholder="code" 
		required><br>
		<?php if(@$_GET['Empty']==true)
	{
	?>
	<div class="alert" style="color:red;"><?php echo $_GET['Empty']; ?> </div>
	<?php
    }
	?>
		<br> <br>


		<input class="button"  type="submit" id="btn" name="submit" onclick="Delete_Warning()" value="Delete" ><br>
		

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