<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
   <head>
	<title>iCLOTHES |Checkout</title>
	   
		<link rel="stylesheet" type="text/css" href="../styles/Registerpage.css">
		<script src="../js/checkoutScript.js"></script>
   </head>
   <body>
   <h1 align =" left">CHECK OUT</h1>
   <div class="RegisterContainer">
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  
   <legend><h2>CONTACTS</h2></legend>
   <input type="text" name="cid" placeholder="CUSTOMER ID" required>
   <input type="text" name="cname" placeholder="CUSTOMER NAME"  required><br/><br/>
   <input type="text" name="cnumber" placeholder="Mobile Number" pattern="[0-9]{10}" required><br/><br/>
   <textarea name="caddress" rows="8" cols="50" placeholder="Address" required></textarea> <br/><br/>
   <input type="text" name="did" placeholder="DESIGNER ID"  required><br/><br/>
   <input type="text" name="dname" placeholder="DESIGNER NAME"  required><br/><br/>
   <input type="text" name="desc" placeholder="DESCRIPTION"  required><br/><br/>
   <input type="date" name="day" placeholder="WAITING DATE"  required><br/><br/>



			  <input type="submit" id="subpay" class="btn" value="Pay" name="submit" onclick="click()" >
			  
			  
			   
			   </form>
			   </div>
			   </body>
			   
<?php
if(isset($_POST["submit"]))
{
$CUSTOMER_ID=$_POST["cid"];
$CUSTOMER_NAME=$_POST["cname"];
$CUSTOMER_CONTACT_NUMBER=$_POST["cnumber"];
$ADDRESS=$_POST["caddress"];
$DESIGNER_ID=$_POST["did"];
$DESIGNER_NAME=$_POST["dname"];
$DESCRIPTION=$_POST["desc"];
$WAITING_DATE=$_POST["day"];


$sql="INSERT INTO dorder(CUSTOMER_ID,CUSTOMER_NAME,CUSTOMER_CONTACT_NUMBER,ADDRESS,DESIGNER_ID,DESIGNER_NAME,DESCRIPTION,WAITING_DATE)VALUES('$CUSTOMER_ID','$CUSTOMER_NAME','$CUSTOMER_CONTACT_NUMBER','$ADDRESS','$DESIGNER_ID','$DESIGNER_NAME','$DESCRIPTION','$WAITING_DATE')";

if($conn->query($sql)){
	echo "<script>alert('Payment Successed!! Please check your mail box to download the e-receipt.')
						window.location.replace('../html/home.html')</script>";
	
}
else{
	echo "Error".$conn->error;
}

}
?>




   
   
   
   
   
