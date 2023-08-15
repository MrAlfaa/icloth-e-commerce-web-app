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
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3>Add Women Clothe To iCLOTHES</h3><br><br>
<fieldset>
<lable>ID</lable><br> <input type="text" name="wID"><BR/><br>
</lable>Name</lable><br> <input type="text" name="wName"><BR/><br>
</lable>Material</lable><br> <input type="text" name="wMat" ><BR/><br>
</lable>Price</lable><br> <input type="text" name="wPrice"><BR/>

<br><br><input type="submit" value="submit" name="submitBtn" class="btn">
<input type="reset" value="reset" class="btn"><br><br>
</form>


<?php
if(isset($_POST["submitBtn"])){
$ID=$_POST["wID"];
$Name=$_POST["wName"];
$Material=$_POST["wMat"];
$Price=$_POST["wPrice"];
$sql="INSERT INTO women(ID,NAME,MATERIAL,PRICE) VALUES('$ID','$Name','$Material','$Price')";
if($conn->query($sql)){
	echo "updated";
}
else{
	echo "Error".$conn->error;
}
}

function readData(){
global $conn;
$sql = "SELECT * FROM women";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
echo ("<table border='1'>");
?>
<html>
<th >Product ID</th><th> Name </th><th> Material </th><th> Price </th></html>
<?php
while($row = $result->fetch_assoc()) {
echo ("<tr>");
echo ("<td>". $row['ID']. "</td>");
echo ("<td>" . $row['NAME'] . "</td>");
echo ("<td>" . $row['MATERIAL'] . "</td>");
echo ("<td>" . $row['PRICE'] . "</td>");
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
<button class="btn2"><a href = "wdelete.php">GO TO DELETE</button></a><br>

</fieldset>
</body>
</html>