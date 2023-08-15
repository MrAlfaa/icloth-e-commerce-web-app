<?php  


		session_start()



?>
<?php 
	
	include("connection.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="cssfile/contact_us.css">
	<title>update contact</title>
	<style type="text/css">

		body{

			background-image: url(image/6.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
		}
		.form_content{

			margin-top: 50px;
			margin-left: 36%;
		}
		form textarea{

			  padding:0.6rem;
			  width: 27rem;
			  border: none;
			  background-color:#fff;
			  color:black;
			  border: none;
			  outline:none;
       }
	</style>
</head>
<body>





 <?php 


      

       if(isset($_POST['update'])){

         $id=$_POST['id'];   
	     $name=$_POST['name'];
	     $tel=$_POST['tel'];
	     $email=$_POST['email'];
	     $message=$_POST['message'];
	     

       $query="UPDATE `contact_us` SET name='$name',email='$email',message='$message',telephone='$tel' where id=$id";


       $query_run=mysqli_query($conn,$query);

      
  

         if($query_run){

            /*
      
                    //redirect to your profile page//

                    header("Location: adminDash.php");
       
                    die;

                 
*/
			           echo ("<script LANGUAGE='JavaScript'>
			    window.alert('Succesfully Contact Updated!!!');
			    window.location.href='ManageContact.php';
			    </script>");



          }

          else{


               echo '<script type="text/javascript">alert("Not Updated!!!")</script>';

           }

           

     }

?>



<div class="form_content">



  <!-- form right -->
      <div class="Form-right">
        <h1>Contact Us</h1>
        <div class="line"></div>
        <!-- form -->
        <form  method="post">
          <h5>ID</h5>
          <input type="text" name="id" placeholder="Name" value="<?php echo $_GET['id'];?>" readonly><br><br>
          <h5>NAME</h5>
          <input type="text" name="name" placeholder="Name"><br><br>
          <h5>EMAIL</h5>
          <input type="email" name="email" placeholder="E-mail"><br><br>
          <h5>PHONE</h5>
          <input type="number" name="tel" placeholder="Tel"> <br><br>
          <h5>YOUR MESSAGE</h5>
          <textarea name="message" id="" cols="50" rows="7" placeholder="More"></textarea><br>
          <button name="update">Update Now</button>
        </form>
      </div>
    </div>

</div>


</body>
</html>