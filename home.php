<?php
session_start();
$customer=$_SESSION['username'];


$db=mysqli_connect("localhost","root","","ChatApp");

if(isset($_POST['search_btn']))
{

  $name=$_POST['search_friend'];
  
  $sql="SELECT * FROM users WHERE firstname='$name'";
  $result=mysqli_query($db,$sql);
  
  $num = mysqli_num_rows($result);
        if($num==1)
        {
           $fname=mysqli_query($db,"select firstname from users where firstname='$name' " );
            $d1=mysqli_fetch_assoc($fname);
            $lname=mysqli_query($db,"select lastname from users where firstname='$name' " );
            $d2=mysqli_fetch_assoc($lname);
            $email=mysqli_query($db,"select email from users where firstname='$name' " );
            $d3=mysqli_fetch_assoc($email);
            $username=mysqli_query($db,"select username from users where firstname='$name' " );
            $d5=mysqli_fetch_assoc($username);
            $profile=mysqli_query($db,"select firstname from users where firstname='$name' " );
            $d5=mysqli_fetch_assoc($profile);
            
            $_SESSION['customer']=$customer;
            $_SESSION['firstname']=implode("",$d1);
            $_SESSION['lastname']=implode("",$d2);
            $_SESSION['email']=implode("",$d3);
            $_SESSION['username']=implode("",$d4);
            $_SESSION['profile']=implode("",$d5);
            header("location: search.php");
          }
           else{
        echo "<script>alert('wrong credintials !');</script>";
        header("location:home.php");
      }
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
	<center>
  
  <a id="hover" href="home.php" >Home</a>
  <a href="search.php">Search friends</a>
  <a href="messages.php">Messages</a>
  <a href="friendrequest.php">Friend Requests</a>
  <a href="friends.php">friends</a>
  <a href="profile.php">Profile</a>
  <b><?php echo "logout"; session_destroy(); ?></b>

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
    <img src="<?php echo $_SESSION['profile']; ?>" height="100" width="100" style="border-radius: 50px;margin-left: 10px;"><br><br>
    <b><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></b><br><br>
     <i><?php echo $_SESSION['email']; ?></i><br><br>
     <i><?php echo $_SESSION['username']; ?></i><br><br>
    
		

  

<form>
      <label>Search friends </label><br>
      <input type="text" name="search_friend">
      <input type="submit" name="search_btn">
</form>
    </center>


</div>


 </body>
 </html>