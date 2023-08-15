<?php require 'config.php';?>
<html>
<body>
<head><link rel="stylesheet" href="../styles/edit.css"></head><fieldset>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3>Delete designer From designer team of iCLOTHES </h3>
<label>Enter designer ID</label><br><br><input type="text" name="dID"><BR /><br>
<input type="submit" value="Delete" name="btnSubmit" class="btn">
<input type="reset" value="Reset" class="btn">
</form>
</body>
</html>
<?php

function readData()
{
global $conn;
$sql="SELECT * FROM designer";
$result=$conn->query($sql);
if ($result->num_rows>0)
   {
echo("<table border='3'>");
?>
<html>
<th >ID</th><th>Name</th><th>Description</th><th>Email</th></html>
<?php
	while($row=$result->fetch_assoc())
	{
		echo ("<tr>");
		echo ("<td>".$row['D_ID'] ."</td>" );
		echo ("<td>".$row['NAME']."</td>");
		echo ("<td>".$row['DESCRIPTION']."</td>");
		echo ("<td>".$row['EMAIL']."</td>");

		echo ("</tr>");
	}
echo("</table>");
}
else 
{
echo "No results <BR />";
}
} 
 readData();
function deleteData($ID){
global $conn;
$sql = "delete from designer where D_ID='$ID'";
if($conn->query($sql)){
echo "Deleted successfully<BR />";
}else{
echo "Error: ".$conn->error;
}
}

if(isset($_POST["btnSubmit"]))
{ 
$ID=$_POST["dID"];
if($ID!="")
   {
deleteData($ID);
   }

}

?>

<br><br>
<button class="btn2"><a href = "home.php">GO BACK TO HOME</a></button>
<button class="btn2"><a href = "designer.php">GO TO ADD & CHECK PRODUCTS</a><button>
</fieldset>