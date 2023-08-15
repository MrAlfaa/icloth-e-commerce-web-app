<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html>
   <head>
	<title>iCLOTHES |Checkout</title>
	   
		<link rel="stylesheet" type="text/css" href="../styles/Registerpage.css">
		<link rel="stylesheet" type="text/css" href="../styles/checkoutStyle.css">
		<script src="../js/checkoutScript.js"></script>
   </head>
   <body>
   <h1 align =" left">CHECK OUT</h1>
   <div class="RegisterContainer">
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  
   <legend><h2>CONTACTS</h2></legend>
   <input type="text" name="name" placeholder="Name" required>
   <input type="text" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required><br/><br/>
   <input type="text" name="mobile" placeholder="Mobile Number" pattern="[0-9]{10}" required><br/><br/>
   <textarea name="address" rows="8" cols="50" placeholder="Address" required></textarea> <br/><br/>

<legend><h2>PAYMENTS</h2></legend><br>
   
  Card Type         <select name="cardtype" class="pay" required>
					<option>Visa</option>
					<option>Master Card</option>
					<option>American Express</option>
				    </select><br/><br>
  Card Number       <input type="text" class="pay" name="crdno" pattern="[0-9]{16}" title="Please Input 16 Digits"required>
				<br><br>
  Name on Card      <input type="text" class="pay" name="noc" required pattern="[A-Za-z]+">
				<br><br>
  CVV    	         <input type="text" class="pay" name="cvv" required>
				<br><br>
				
			   <h2 class="instrct" >Special Instructions</h2>
			   <textarea name="instructions" rows="7" cols="50" placeholder="Type..." ></textarea><br><br>
			  <br><input type="submit" id="subpay" class="btn" value="Pay" name="submit" onclick="click()" >
			
			  
			   
			   </form>
			   </div>
			   </body>
			   
<?php
if(isset($_POST["submit"])){
$Name=$_POST["name"];
$Email=$_POST["email"];
$Mobile=$_POST["mobile"];
$Address=$_POST["address"];
$CardType=$_POST["cardtype"];
$CardNumber=$_POST["crdno"];
$NameOfCard=$_POST["noc"];
$CVV=$_POST["cvv"];
$ins=$_POST["instructions"];

$sql="INSERT INTO payment(Name,Email,Mobile,Address,CardType,CardNumber,NameOfCard,CVV,ins)VALUES('$Name','$Email','$Mobile','$Address','$CardType','$CardNumber','$NameOfCard','$CVV','$ins')";

if($conn->query($sql)){
	echo "<script>alert('Payment Successed!! Please check your mail box to download the e-receipt.')
						window.location.replace('../html/home.html')</script>";
	
}
else{
	echo "Error".$conn->error;
}

}
?>

   
   
   
   
   
