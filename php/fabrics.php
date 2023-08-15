<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html>
   <head>
	<title>iCLOTHES | FABRICS  | ORDINARY</title>
	    <link rel="stylesheet" href="../styles/style1.css">
		<link rel="stylesheet" href="../styles/fabricStyles.css">
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
  <a href="login.html"class="login" >LOGIN</a> 
  <a class="active" href="#" class="cart"><font-size:204px>CART</a> 
</div>
<hr class="hrl">
<!--nav bar-->
 
    <ul class="menu">
		 <li class = "menu"> <a href="../html/home.html">HOME</a> </li>
		 <li class = "menu"> <a href="WOMEN">WOMEN</a> </li>
		 <li class = "menu"> <a href="MEN">MEN</a> </li>
		 <li class = "menu"> <a href="KID">KID</a> </li>
		 <li class = "menu"> <a href="ACCESSORIES">ACCESSORIES</a> </li>
		 <li class = "menu"> <a href="../html/fabric.html">FABRICS</a> </li>
		 <li class = "menu"> <a href="DESIGNER">DESIGNER</a> </li>	  
	</ul>
	
				
				<div class="fc" style="width:100%">
				<a href="ordinary.php"><button style="width:33.3%">Ordinary Fabrics</button></a>
				<a href="functional.php"><button style="width:33.3%">Functional Fabrics</button></a>
				<a href="hydrophobic.php"><button style="width:33.3%">Hydrophoic Fabrics</button></a>
				</div>
				<h1 style="text-align:center;" >  Fabric Gallery</h1>
				<h4 style="text-align:center;">Fabrics For Designed Clothes </h4>
				
				

<head></head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3>Add Fabric Details to iCLOTHES</h3><br><br>
ID: <input type="text" name="ofID"><BR/><br>
Name: <input type="text" name="ofName"><BR/><br>
Description: <input type="text" name="ofDesc"><BR/><br>
<input type="submit" value="submit" name="submitBtn">
<input type="reset" value="reset">
</form>
</body>
</html>

<?php
if(isset($_POST["submitBtn"])){
$ID=$_POST["ofID"];
$Name=$_POST["ofName"];
$Description=$_POST["ofDesc"];
$sql="INSERT INTO fabrics(ID,Name,Description) VALUES('$ID','$Name','$Description')";
if($conn->query($sql)){
	echo "updated";
}
else{
	echo "Error".$conn->error;
}
}
$conn->close();
?>
<br><a href="delete.php">What we have update</a>  
	

<hr>
<footer>
  <ul class="menu2">
		 <li class = "menu2"> <a href="exchange">RETURN & EXCHANGE</a> </li>
		 <li class = "menu2"> <a href="feedback">FEEDBACK</a> </li>
		 <li class = "menu2"> <a href="cus_service">CUSTOMER SERVICE</a> </li>
		 <li class = "menu2"> <a href="warehouse">WAREHOUSE</a> </li>
		
</ul><br>
	<hr class="hrl">
	 

 
    

	<footer>
	<ul class="menu03">
		<li class = "menu03"> <a href="contactus.html">Contact US</a> </li>
		<li class = "menu03"> <a href="HOME.html">About us</a> </li>
		<p class = "Address"> NO:14,Galle Road,Colombo-13. </p>
		

    <center>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 
	<a href="#" class="fa fa-facebook"></a>
	<a href="#" class="fa fa-twitter"></a>
	<a href="#" class="fa fa-google"></a>
	<a href="#" class="fa fa-instagram"></a>
	<a href="#" class="fa fa-pinterest"></a>
	 
 	 </center>
    <p class="copyright">© Copyright iCLOTHES | All Rights Reserved</p> 
	
	
    </footer>
	
	
	
	 


     
