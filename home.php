<?php
@include 'config.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminstyle.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <?php
            if(isset($_SESSION['admin_name'])){
                echo'<h3>hi, <span>admin</span></h3>
              <p>this is an admin page</p>';
            echo '<a href="adminpage.php" class="btn">Admin Page</a>
            <a href="logout.php" class="btn">Logout</a>';
            }
            else{
                echo'<h3>hi, <span>user</span></h3>
                <p>this is an user page</p>';
              echo '<a href="user_page.php" class="btn">Your Profile</a>
              <a href="event_register.php" class="btn">Event Registeration</a>
              <a href="logout.php" class="btn">Logout</a>';
              
            }
            ?>
        </div>
     
     </div>
</body>
</html>