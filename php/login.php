<?php
session_start();


require 'config.php';
if(isset($_POST["submit"])){
	$username=$_POST["username"];
	$password=$_POST["password"];
	$message="";
	$type="";
	
	$sql="SELECT * FROM register WHERE email='$username' AND password='$password'";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$_SESSION['LoginUser']=$row["username"];
			$type=$row["usertype"];
			if($row["usertype"]=="customer")
			{
				
				header("location:../html/home.html");
			}
			else if($row["usertype"]== "admin")
			{
				
				header("location:home.php");
			}
		}
	}
	else{
		echo "<script type='text/javascript'>alert('Password or email incorrect')</script>";
		
		
	}
}
?>

<!DOCTYPE html>
<html>
   <head>
	<title>iCLOTHES | LOGIN</title>
	    <link rel="stylesheet" href="../styles/style1.css">
   </head>
   <body class="body1">
   <form action="#" method="post">
  <div class="imgcontainer">
    <img src="../images/logo.png" alt="Logo" class="logo2">
  </div>
<center>
  <div class="container">
 
    <label for="uname" align="left"  ><b>Username</b></label>
    <input type="text"  placeholder="Enter user name" name="username" required>

    <label for="psw"  ><b >Password</b></label>
    <input type="password"  placeholder="Enter Password" name="password" required><br><br>
	<input type="submit"   name="submit" value="LOG IN"><br><br>
	
	

    
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</center
  <div class="container" style="background-color:white">
    <center>
    <span class="psw">Reset <a href="pwd.php">password?</a></span><br/><br/>
	<span class="signin"><a href="register.php">New Account</a></span>
	</center>
  </div>
</form>
   </body>
   </html>
   
   <?php $conn->close(); ?>
   
