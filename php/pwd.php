<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
   <head>
	<title>iCLOTHES | PASSWORD RESET</title>
	    <link rel="stylesheet" href="../styles/style1.css">
		<link rel="stylesheet" href="../styles/resetStyle.css">
   </head>
<body>  

  <!--img class="logo" src="images/logo.jpg" alt="shopping cart logo" width="200px" height="200px"-->
  
 <img  class ="logo"  src = "../images/logo.png"> 
  <center>
   
    <h2  class="welcometext"> WELCOME   TO   ICLOTHES MANUFACTURES </h2>
  </center>
  
<!--icon bar-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="icon-bar">
  <input type="text" class="search" placeholder="Search.." >
  <a href="login.php"class="login" >LOGIN</a> 
  <a class="active" href="#" class="cart"><font-size:204px>CART</a> 
 
</div>


<hr class="hrl">
	
<form class="box" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<center><h1>Reset Pssword</h1>
	
	<p>Reset your password here</p></center>
	
	Email<br><input type="text" name="email"  required><br/>
	Password<br><input type="text" name="password"required><br/>
	Newpassword<br><input type="text" name="newpassword" required><br/><br/>
	<input type="submit" id="resetSub" name="resetBtn" class="pwrs" value="Reset">
	<input type="submit" id="canselSub" name="resetBtn" class="cnsl" value="Cansel">
	
	</form>
	
<?php

$email=$_POST['email'];
$passwordC=$_POST['password'];
$passwordA=$_POST['newpassword'];

$sql = "UPDATE register SET password='$passwordA' WHERE email='$email'";

if ($conn->query($sql))
 {
  echo "Reset successfully";
  
} 
else 
{
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>
	
	
	
	
	
	
	
	


	  


	
	
	
	
	
	
	
	
	
	
	
	

	<hr class="hrl">
	 
<!--nav bar-->
 
    
	</ul>
	<footer>
	<ul class="menu03">
		<li class = "menu03"> <a href="contactus.html">Contact US</a> </li>
		<li class = "menu03"> <a href="HOME.html">About us</a> </li>
		<p class = "Address"> NO:14,Galle Road,Colombo-13. </p>
		
<!-- icon-->
    <center>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 

 
 

<!--  icons -->
	 
	<a href="#" class="fa fa-facebook"></a>
	<a href="#" class="fa fa-twitter"></a>
	<a href="#" class="fa fa-google"></a>
	<a href="#" class="fa fa-instagram"></a>
	<a href="#" class="fa fa-pinterest"></a>
	 
 	 </center>
    <p class="copyright">© Copyright iCLOTHES | All Rights Reserved</p> 
	
	
    </footer>
	
	
	
	 


     
