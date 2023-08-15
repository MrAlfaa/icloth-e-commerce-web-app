<?php
require 'config.php';
?>
<html>
<head>
 <style type="text/css">
      th,td,table{
            border:2px solid black;
            background-color:#ccffcc;
            border-collapse: collapse;
	    }

    </style>
<link rel="stylesheet" href="../styles/edit.css">
</head>
<body style="background-color : #c2d6d6;" >

<?php


function readData(){
global $conn;
$sql = "SELECT * FROM fabrics";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
echo ("<table border='1'>");
?>
<html>
<th >Fabric ID</th><th> Name </th><th> Description </th><th> Update</th></html>
<?php
while($row = $result->fetch_assoc())
{
$id=$row['ID'];
echo ("<tr>");
echo ("<td>". $row['ID']. "</td>");
echo ("<td>" . $row['Name'] . "</td>");
echo ("<td>" . $row['Description'] . "</td>");
echo ("<td><button type='submit'><a href='editData.php?ID=$id'>Edit</a></button></td>");
echo ("<td><button type='submit'>Delete</button></td>");
echo ("<tr>");
}
echo ("</table>");
}else {
echo "No results <br />"; 
}
}

readData();
?>



<br><br><button class="btn2"><a href = "home.php">BACK TO HOME</a></button>
<button class="btn2"><a href = "delete.php">GO TO DELETE</button></a><br>

</fieldset>
</body>
</html>