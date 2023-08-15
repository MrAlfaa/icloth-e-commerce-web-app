<?php

include 'connection.php';

$ID = $_GET['id'];
$sql = " DELETE FROM `contact_us` WHERE ID = $ID " ;
$query = mysqli_query($conn,$sql);

//header("location:adminDash.php");

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Contact Deleted!!!');
    window.location.href='ManageContact.php';
    </script>");

?>
