<html>
<head>
   <title>Display the Fabrics Details</title>
   <style type="text/css">
      th,td,table{
            border:2px solid black;
            background-color:#ccffcc;
            border-collapse: collapse;
	    }

    </style>
</head>
<body> <style type="text/css"> {background-color:#ccffcc;}</style>


<?php
require 'config.php';
$sql="SELECT * FROM fabrics";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
	echo("<center><table border='3'>");
?>
<html>
<th >ID</th><th>Name</th><th>Description</th></html>
<?php
	while($row=$result->fetch_assoc())
	{
		echo ("<tr>");
		echo ("<td>".$row['ID'] ."</td>" );
		echo ("<td>".$row['Name']."</td>");
		echo ("<td>".$row['Description']."</td>");
		echo ("</tr>");
	}
	echo("</table></center>");
}
else{
	echo "no result";
}
$conn->close();
?>
