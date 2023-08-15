<?php require 'config.php';?>
<html>
<body>
 <style type="text/css">
      th,td,table{
            border:2px solid black;
            background-color:#ccffcc;
            border-collapse: collapse;
	    }

    </style>
<head><link rel="stylesheet" href="../styles/edit.css"></head><fieldset>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3>Delete Fabric Products  From iCLOTHES </h3>
<label>Enter Fabric ID</label><br><br><input type="text" name="ofID"><BR /><br>
<input type="submit" value="Delete" name="btnSubmit" class="btn">
<input type="reset" value="Reset" class="btn">
</form>
</body>
</html>
<?php

function readData()
{
global $conn;
$sql="SELECT * FROM fabrics";
$result=$conn->query($sql);
if ($result->num_rows>0)
   {
echo("<table border='3'>");
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
$sql = "delete from fabrics where ID='$ID'";
if($conn->query($sql)){
echo "Deleted successfully<BR />";
}else{
echo "Error: ".$conn->error;
}
}

if(isset($_POST["btnSubmit"]))
{ 
$ID=$_POST["ofID"];
if($ID!="")
   {
deleteData($ID);
   }

}

?>

<br><br>
<button class="btn2"><a href = "home.php">GO BACK TO HOME</a></button>
<button class="btn2"><a href = "edit.php">GO TO ADD & CHECK PRODUCTS</a><button>
</fieldset>