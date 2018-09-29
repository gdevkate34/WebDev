<?php
session_start();
if(!isset($_SESSION['username']) )
{
 header("location:login.php");
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
  <title>Home</title>
  <link rel="stylesheet" href="login.css">
</head>
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <body>
  
<div class="header">
    
   <center>
    <img src="logo.png" height="35px" width="30px" style="padding-top: 20px">
    <b id="sitename">ChatWith</b>
    </center> 
    
</div>  



<div class="sidenav">
  <img src="profile.jpg" height="100" width="100" style="border-radius: 50px;margin-left: 10px;">
  <a href="home.php">Home</a>
  <a href="messages.php">Messages</a>
  <a href="friendrequest.php">Friend Requests</a>
  <a href="friends.php">friends</a>
  <a href="profile.php">Profile</a>
  <a href="logout.php">Logout <?php echo $_SESSION['username']; ?></a>
</div>

<div class="main">
  
 </div>
 </body>
 </html>