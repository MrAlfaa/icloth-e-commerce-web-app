<html>
<head>
   <title>Display the Payment and Order Details</title>
   <style type="text/css">
      th,td,table{
            border:2px solid black;
            background-color:#ccffcc;
            border-collapse: collapse;
	    }

    </style>
</head>
<body> <style type="text/css"> {background-color:#ccffcc;}</style>
<link rel="stylesheet" href="../styles/edit.css"></head>

<?php
require 'config.php';
$sql="SELECT * FROM payment";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
	echo("<center><table border='3'>");
?>
<html>
<h3>Display the Payment and Order Details</h3>
<th >ID</th><th>Name</th><th>Email</th><th>Mobile number</th><th>Address</th><th>Card type</th><th>Card Number</th><th>Name of card</th><th>CVV</th><th>Special Instructions</th></html>
<?php
	while($row=$result->fetch_assoc())
	{
		echo ("<tr>");
		echo ("<td>".$row['ID'] ."</td>" );
		echo ("<td>".$row['Name']."</td>");
		echo ("<td>".$row['Email']."</td>");
		echo ("<td>".$row['Mobile']."</td>");
		echo ("<td>".$row['Address']."</td>");
		echo ("<td>".$row['CardType']."</td>");
		echo ("<td>".$row['CardNumber']."</td>");
		echo ("<td>".$row['NameOfCard']."</td>");
		echo ("<td>".$row['CVV']."</td>");
		echo ("<td>".$row['ins']."</td>");
		echo ("</tr>");
	}
	echo("</table></center>");
}
else{
	echo "no result";
}
$conn->close();
?>

<br><br><center><button><a href="home.php">Back To Home</a></button></center>