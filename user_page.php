<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:register_form.php');
}
$kiran = $_SESSION['emai'];
$query="SELECT * from eventregisteration WHERE  email='$kiran' "; 
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <style>
      h2.uppercase {
         text-transform: uppercase;
      }
      .button{
			display: inline-block; 
			text-decoration:none;
         padding:10px 30px;
         font-size: 20px;
         background: #333;
         color:#fff;
         margin:0 5px;
         text-transform: capitalize;
         }
         .button:hover {
            background: crimson;
         }
         .container{
         min-height: 100vh;
         display: flex;
         align-items: center;
         justify-content: center;
         padding:20px;
         padding-bottom: 60px;
         }
         .container .content{
            text-align: center;
         }
         .container .content h3{
            font-size: 30px;
            color:#333;
         }
         .container .content h1{
            font-size: 50px;
            color:#333;
         }
         .container .content p{
            font-size: 25px;
            margin-bottom: 20px;
         }
         .container .content h3 span{
          background: crimson;
          color:#fff;
          border-radius: 5px;
          padding:0 15px;
         }
         .container .content h1 span{
            color:crimson;
         }
   </style>
   

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi <span>user</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>This is an user page</p>
      <!-- <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a> -->
      <table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2 class="uppercase"><span><?php  echo $_SESSION['user_name'] ?></span> EVENT REGISTERATION DETAILS</h2></th> 
		</tr> 
			
			  <th> email </th> 
			  <th> type </th>  
           <th> event </th> 
			  
		</tr> 
		
		<?php 
        while($rows=mysqli_fetch_assoc($result)) 
		{ 
        ?>
		<tr>
		<td><?php echo $rows['email']; ?></td> 
		<td><?php echo $rows['type']; ?></td> 
		<td><?php echo $rows['event']; ?></td> 
		</tr>
        <?php
         } 
        ?> 

	</table><br><br>
<center>
	<a href="usereventpdf.php" name="pdf"  class="button">Download</a>
   <a href="event_register.php" name="newevent"  class="button">Register New Event</a>
   <a href="logout.php" class="button">Logout</a>
<center>
</div>
</div>
</body>
</html>