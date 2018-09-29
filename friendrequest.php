<?php
session_start();
if(isset($_SESSION['username']) )
{
  echo "why";
 }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
  <title>Messages</title>
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
  <center>
  <img src="profile.jpg" height="100" width="100" style="border-radius: 50px;margin-left: 10px;">
  <a href="home.php">Home</a>
  <a id="hover" href="messages.php">Messages</a>
  <a href="friendrequest.php">Friend Requests</a>
  <a href="friends.php">friends</a>
  <a href="profile.php">Profile</a>
  </center>
</div>
<div id="sidenav">
  <center>
  
  </center>
</div>

<div class="main">
  
 </div>
 </body>
 </html>