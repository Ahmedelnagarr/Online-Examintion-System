<?Php
    $con = mysqli_connect('localhost', 'root', '', 'online_examination_system');
		
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'online_examination_system';

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Please Check the Connections  " . $conn->connect_error);
	   }
    session_start();
 
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT username ,userId FROM  register WHERE username = '$myusername' and password = '$mypassword' ";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		echo $_POST['username'];
      if($count == 1) 
      {
      	 $_SESSION['user_id'] = $row['userId'];
         $_SESSION['login_user'] = $myusername;
         if ($_POST['username'] == "student") 
         {
         	 header("location:projectphp/information student.php");
         }
         elseif ($_POST['username'] == "admin")
         {
          	header("location:projectphp/create.php");
         }
         elseif ($_POST['username'] == "doctor")
         {
         	header("location:projectphp/enter a questions.php");
         }
       	 else
       	 	{
       	 		header("location:projectphp/Index.php");
       		}

      }
      else 
      {
          header("location:Index.php?Empty= Enter the valid user-name or password !");
      }
  }
   $conn->close();
?>

<html>
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" href="newCss.css">
</head>
<body>
<!-- Start Navigation Bar  -->
<header>
	
	<div class="container" >
		<ul class="links" > 
			<li id=remon> <h6>Main</h6> 	                                 </li>
			<li id=remon> <h6>About the Academy</h6> 	                 </li>
			<li id=remon> <h6>Speech of the President of the Academy</h6> </li>
			<li id=remon> <h6>Distance Learning</h6> 	                 </li>
			<li id=remon> <h6>Academy Library</h6> 	                     </li>
			<li id=remon> <h6>The studio</h6> 	                         </li>
			<li id=remon> <h6>call us</h6> 	                             </li>
			<li id=remon> <h6>Academic Advising</h6> 	                 </li>
			<li id=remon> <h6>Online Exam</h6>	                         </li>
		</ul>
	</div>
</header>

	
	   <script type="text/javascript">
     
function checkForEmpty(){
      if(document.getElementById('uName').value == ""){
  alert( "You must Fill the user-name"  );
  return false;
}
if(document.getElementById('pName').value == ""){
  alert( "You must Fill the Password "  );
  return false;

}}

   </script>
	
<article>
	<div class="pic">
		<img id=pic1 src="reunion1.JPEG" alt="Login" width="100%" height="400px" >
	</div>
	<div class="log">
		<form method = "POST" action="" onsubmit=" return checkForEmpty()">
			<h2 id=login>Sign In</h2>
			<input id=login type="text" placeholder="code" name="code" required ><br>
			<input id=login type="password" placeholder="password" name="code" required >
			<h6><a id=login href="............"> Forget Password ?</a></h6>
			</div>
	        <?php if(@$_GET['Empty']==true)
  {
?>
  <div class="alert" style="color:white;"><?php echo $_GET['Empty']; ?> </div>
  <?php
  }
  ?> 
			<input class="button" type="submit" name="login" value="Log-in" >
		</form>
			
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
				<th><img src="twitter.png" alt="A family of cats" width="26px" height="25px" /></th></tr>
			</table>
				<h4 align="right">&copy 2019 Thebes. A created by  </h4>
		</section>
	</footer>
</body>
</html>