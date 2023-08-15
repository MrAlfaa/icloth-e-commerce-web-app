<!DOCTYPE html>
<html>
   <head>
	<title>iCLOTHES | PASSWORD RESET</title>
	    <link rel="stylesheet" href="../styles/style1.css">
		<link rel="stylesheet" href="../styles/resetStyle.css">
   </head>
<body>  
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
include('config.php');

$email=$_POST['email'];
$passwordC=$_POST['password'];
$passwordA=$_POST['newpassword'];

$sql = "UPDATE register SET password='$passwordA' WHERE email='$email'";

if ($conn->query($sql))
 {
  
  echo "<script>alert('Reset successfully.')</script>";
  
} 
else 
{
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>

