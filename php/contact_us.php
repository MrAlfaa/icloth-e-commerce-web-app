<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us Now</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer_l.css">
     <link rel="stylesheet" href="cssfile/contact_us.css">
  <!--  <link rel="stylesheet" type="text/css" href="cssfile/container.css">-->
   
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <style type="text/css">

     
       body{
       padding: 0;
       margin: 0;
       line-height: 1.5;
       box-sizing: border-box;
       color:rgba(248, 248, 248, 0.938);
       background-image: url(image/5.jpg);
       background-size: cover;
       background-repeat: no-repeat;
       background-attachment: fixed;
 
      }
      form input{

        padding:0.6rem;
        width: 27rem;
        border: none;
        /*background-color:rgba(136, 133, 133, 0.6);*/
        color:#fff;
        border: none;
        outline:none;
        background-color: rgba(0, 0, 0, 0.3);

      }
      form textarea{
  padding:0.6rem;
  width: 27rem;
  border: none;
  background-color: rgba(0, 0, 0, 0.3);

  color:white;
  border: none;
  outline:none;
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




              <!--this is the header callling(nav bar)-->

            <?php //include("nav.php");



             ?>


             <?php


  include("connection.php");
       


  if(isset($_POST['send'])){


     $name=$_POST['name'];
     $tel=$_POST['tel'];
     $email=$_POST['email'];
     $message=$_POST['message'];
     
  

       if($conn->connect_error)
          {
            die('Connection Failed :'.$conn->connect_error);
          }
          else
          {


              $stmt=$conn->prepare("INSERT INTO contact_us(name,email,message,telephone) VALUES(?,?,?,?)");
              //table3 is the table name//

              $stmt->bind_param("ssss",$name,$email,$message,$tel);

              $stmt->execute();
              
                         echo ("<script LANGUAGE='JavaScript'>
                window.alert('Succesfully added!!!');
                window.location.href='home.php';
                </script>");
              
              $stmt->close();
              $conn->close();
              }
                
          
      }     
  

   ?>




            <section id="fancy-form">
   <div class="container">
    <div class="form-sections">
      <!-- Form left -->
      <div class="Form-left">
        <h1>Get In Touch</h1>
        <div class="line"></div> <!--border-bottom line-->
        <p>Contact us for latest news and updates. subscribe our news letter :)</p><br>

        <!--first Heading -->
        <h4>ADDRESS</h4>
         <span>123, Main Street, New York 1001</span>
         <hr><br><br>

         <!--second Heading -->
        <h4>PHONE</h4>
         <span>(+1)123 456 7890</span>
         <hr><br><br>

       <!--third Heading -->
        <h4>EMAIL</h4>
         <span>Jhondoe@gmail.com</span>
         <hr> <br>

         <!-- social media icons 
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-google"></a>
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-youtube"></a>-->
      </div>

      <!-- form right -->
      <div class="Form-right">
        <h1>Contact Us</h1>
        <div class="line"></div>
        <!-- form -->
        <form  method="post">
          <h5>NAME</h5>
          <input type="text" name="name" placeholder="Name"><br><br>
          <h5>EMAIL</h5>
          <input type="email" name="email" placeholder="E-mail"><br><br>
          <h5>PHONE</h5>
          <input type="number" name="tel" placeholder="Tel"> <br><br>
          <h5>YOUR MESSAGE</h5>
          <textarea name="message" id="" cols="50" rows="7" placeholder="More"></textarea><br>
          <button name="send">Send</button>
        </form>
      </div>
    </div>
    </div>
  </section>
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
