<?php
require 'config.php';
?>
<html>
<head>
<link rel="stylesheet" href="../styles/edit.css">
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3>Add Designers To iCLOTHES</h3><br><br>
<fieldset>
<lable>ID</lable><br> <input type="text" name="dID"><BR/><br>
</lable>Name</lable><br> <input type="text" name="dName"><BR/><br>
</lable>Description</lable><br> <input type="text" name="dDes" ><BR/><br>
</lable>Email</lable><br> <input type="text" name="dMail"><BR/>

<br><br><input type="submit" value="submit" name="submitBtn" class="btn">
<input type="reset" value="reset" class="btn"><br><br>
</form>


<?php
if(isset($_POST["submitBtn"])){
$ID=$_POST["dID"];
$Name=$_POST["dName"];
$Description=$_POST["dDes"];
$Email=$_POST["dMail"];
$sql="INSERT INTO designer(D_ID,NAME,DESCRIPTION,EMAIL) VALUES('$ID','$Name','$Description','$Email')";
if($conn->query($sql)){
	echo "updated";
}
else{
	echo "Error".$conn->error;
}
}

function readData(){
global $conn;
$sql = "SELECT * FROM designer";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
echo ("<table border='1'>");
?>
<html>
<th > Designer ID</th><th> Name </th><th> Description </th><th> Email </th></html>
<?php
while($row = $result->fetch_assoc()) {
echo ("<tr>");
echo ("<td>". $row['D_ID']. "</td>");
echo ("<td>" . $row['NAME'] . "</td>");
echo ("<td>" . $row['DESCRIPTION'] . "</td>");
echo ("<td>" . $row['EMAIL'] . "</td>");
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
<button class="btn2"><a href = "ddelete.php">GO TO DELETE</button></a><br>

</fieldset>
</body>
</html>