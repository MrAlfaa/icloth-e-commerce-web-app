<?php 
session_start();

  include("connection.php");
 

?>





<!DOCTYPE html>
<html>
<head>
  <title>Contact Manage</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssfile/sidebar.css">
  <style type="text/css">

      body{

      background-image: url("image/5.jpg");
      background-position: center;
      background-size: cover;
      height: 700px;
      background-repeat: no-repeat;
      background-attachment: fixed;

    }
    .adminTopic{
      text-align: center;
      color: #fff;
      

    }

table
{
    width:99%;
    border-collapse: separate !important;
    margin:auto;
    /*/table-layout:fixed;/*/
    text-align:center;
    margin-top:50px;
    background-color: rgb(255, 255, 255);
    border-radius: 10px 10px 0px 0px;

}
table th
{
    border-bottom:2px solid rgb(187, 187, 187);
    padding:10px 0px 10px 0px;
    font-family: "balsamiq_sansitalic" !important;
}
table tr td
{
    border-right: 2px solid rgb(187, 187, 187);
    height: 58px;
    padding: 22px 0px 0px 0px;
    font-family: "monospace;" !important;
    border-bottom: 2px solid rgb(187, 187, 187);
    font-size: 20px;
}
table tr td a
{
    /*background-color: rgb(255, 196, 0);*/
    color: white;
    border-radius: 5px;
    padding: 6px;
    text-decoration: none;
    margin: 10px;
    font-weight: 700;
}

table tr td button:hover
{

  /*
    background: rgb(255, 255, 255);
    text-decoration:underline;
    color:tomato;
    padding: 4px;
    border:2px solid tomato;
    transition:background-color 0.2s;*/

    padding: 5px 5px 5px 5px;
  border: 2px solid yellow;
    border-radius: 7px;
    background-color: red;
    color: white;
    cursor: pointer;
}
button 
{
    padding: 5px 5px 5px 5x;
}
.btnPolicy{

  padding: 5px 5px 5px 5px;
  border: 2px solid yellow;
    border-radius: 7px;
    background-color: red;
    color: white;
    margin-left: 20px;
}

.btnPolicy:hover{

  background:red;
    padding: 7px 7px 7px 7px;
    cursor: pointer;

}


  </style>
  <link rel="stylesheet" href="../styles/style1.css">
</head>
<body>



<img  class ="logo"  src = "../images/logo.png"> 



<center>
   
    <h2  class="welcometext"> WELCOME   TO   ICLOTHES MANUFACTURES </h2>
  </center>
  
<!--icon bar-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="icon-bar">
  <input type="text" class="search" placeholder="Search.." >
  <a href="../php/logout.php"class="login" >LOGOUT</a> 
  <a class="active" href="view_payment.php" class="cart"><font-size:204px>CART</a> 
 
</div>


<hr class="hrl">
<!--nav bar-->
 
    <ul class="menu">
     <li class = "menu"> <a href="home.php">HOME</a> </li>
     <li class = "menu"> <a href="WOMEN">WOMEN</a> </li>
     <li class = "menu"> <a href="MEN">MEN</a> </li>
     <li class = "menu"> <a href="addProduct.php">KID</a> </li>
     <li class = "menu"> <a href="../html/fabric.html">FABRICS</a> </li>
     <li class = "menu"> <a href="DESIGNER">DESIGNER</a> </li>
      
  </ul>








<div class="sidebar2">


    <h1 class="adminTopic">Contacts Details...</h1>



<?php

    
    $sqlget="SELECT * FROM contact_us";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>ID</th>
    <th>Name</th>
    <th>E-mail</th>
    <th>Message</th>
    <th>Telephone</th>
    <th>Update</th>
    <th>Delete</th>

    
   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {

        echo "<tr><td>";
        echo $row['id'];
        echo "</td><td>";
        echo $row['name'];
        echo "</td><td>";
        echo $row['email'];
        echo "</td><td>";
        echo $row['message'];
        echo "</td><td>";
        echo $row['telephone'];
        echo "</td>";
       
          
        ?>

        <td>

        <button style="border:2px solid yellow; border-radius:7px; background-color:red;color:white;">
          <a href="updateContact.php?id=<?php echo $row['id'];?>">
         
          
          

          Update

          </a>

        </button>

        </td>
         <td>

        <button style="border:2px solid yellow; border-radius:7px; background-color:red;color:white;">
          <a href="deleteContact.php?id=<?php echo $row['id'];?>">
         
          
          

          Delete

          </a>

        </button>

        </td></tr>

<?php
       }

       echo "</table>";


?>







</div>
<hr class="hrl">
<footer>
  <ul class="menu03">
    <li class = "menu03"> <a href="contact_us.php">Contact US</a> </li>
    <li class = "menu03"> <a href="HOME.html">About us</a> </li>
    <p class = "Address"> NO:14,Galle Road,Colombo-13. </p>
    
<!-- icon-->
    <center>
   <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 

 
 

<!--  icons -->
   
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-google"></a>
  <a href="#" class="fa fa-instagram"></a>
  <a href="#" class="fa fa-pinterest"></a>
   
   </center>
    <p class="copyright">© Copyright iCLOTHES | All Rights Reserved</p> 
  
  
    </footer>


</body>
</html>