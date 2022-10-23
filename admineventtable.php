<?php
$conn = mysqli_connect('localhost:3908','root','','stepcone_db');

session_start();

if(!isset($_SESSION['admin_name'])){
	header('location:admin.php');
 }
$value=$_SESSION['event'];
$query="SELECT * from eventregisteration WHERE  event='$value' "; 
$result=mysqli_query($conn,$query);

?> 
<!DOCTYPE html> 
<html> 
	<head>
		<title> REGISTERATION DETAILS </title> 
        <style>
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

		</style>
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2><span><?php echo $value  ?></span><br>EVENT REGISTERATION DETAILS</h2></th> 
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
	<a href="admineventpdf.php" name="pdf"  class="button">Download</a>
      <a href="logout.php" class="button">Logout</a>
	  <center>
	</body> 
</html>

