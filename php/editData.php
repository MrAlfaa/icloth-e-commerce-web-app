<?php

require 'config.php';

?>
<!DOCTYPE html>
<html>
   <head>
	<title>iCLOTHES | HOME</title>
	    <link rel="stylesheet" href="../styles/style1.css">
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
  <a href="../php/logout.php"class="login" >LOGOUT</a> 
  <a class="active" href="../php/payment.php" class="cart"><font-size:204px>CART</a> 
 
</div>


<hr class="hrl">
<!--nav bar-->
 
    <ul class="menu">
		 <li class = "menu"> <a href="home.html">HOME</a> </li>
		 <li class = "menu"> <a href="WOMEN">WOMEN</a> </li>
		 <li class = "menu"> <a href="MEN">MEN</a> </li>
		 <li class = "menu"> <a href="KID">KID</a> </li>
		 <li class = "menu"> <a href="fabric.html">FABRICS</a> </li>
		 <li class = "menu"> <a href="DESIGNER">DESIGNER</a> </li>
		  
	</ul>
	<br><br>
  <?php
  
  $id=$_GET['ID'];
  $sql="select * from fabrics where ID=$id";
$result=$conn->query($sql);
if ($result->num_rows>0)
  {
	  while($row=$result->fetch_assoc())
	  {
		  $code=$row["ID"];
		  $name=$row["Name"];
		  $desc=$row["Description"] ;
	  }
  }
  ?>
	
<form method="post" action="submitItem.php?id=">
<h3>Edit Fabric Products Of iCLOTHES</h3><br><br>
<lable>ID</lable><br> <input type="text" name="ofID" value="<?php echo $code;?>"/><BR/><br>
</lable>Name</lable><br> <input type="text" name="ofName" value="<?php echo $name ;?>"/><BR/><br>
</lable>Description</lable><br> <input type="text" name="ofDesc" value="<?php echo $desc;?>" /><BR/>
<br><br><input type="submit" value="submit" name="submitBtn" class="btn">
<input type="reset" value="reset" class="btn"><br><br>
</form>
 
	<hr>
	<footer>
  <ul class="menu2">
		
		 <li class = "menu2"> <a href="exchange">RETURN & EXCHANGE</a> </li>
		 <li class = "menu2"> <a href="feedback">FEEDBACK</a> </li>
		 <li class = "menu2"> <a href="cus_service">CUSTOMER SERVICE</a> </li>
		 <li class = "menu2"> <a href="warehouse">WAREHOUSE</a> </li>
		 
</ul><br>
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
	
	
	
	 


     
