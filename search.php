<?php
session_start();


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
	<center>
  
  <a id="hover" href="home.php" >Home</a>
  <a href="search.php">Search friends</a>
  <a href="messages.php">Messages</a>
  <a href="friendrequest.php">Friend Requests</a>
  <a href="friends.php">friends</a>
  <a href="profile.php">Profile</a>
  <a href="login.php"><?php  session_destroy(); ?></a>

  </center>
</div>

<div id="sidenav">
	<center>
  
  <a id="hover" href="home.php" >Home</a>
  <a href="search.php">Search friends</a>
  <a href="messages.php">Messages</a>
  <a href="friendrequest.php">Friend Requests</a>
  <a href="friends.php">friends</a>
  <a href="profile.php">Profile</a>
  </center>
</div>

<div style="border: 1px solid black" class="main">

	<center>
          
           <div style="display: inline-block;">
           <b><?php echo $_SESSION['firstname']; ?></b>
           <input type="submit" name="add_friend" value="Add Friend">
           <input type="submit" name="report" value="Report">
		       </div>
	</center>


</div>
 </body>
 </html>