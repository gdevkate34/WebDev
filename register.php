<!DOCTYPE HTML>
<html>
<head>
   <link rel="stylesheet" href="register.css">
<title>Registration</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">   <title>Payment</title>
    
</head>
<?php 
session_start();
$db=mysqli_connect("localhost","root","","ChatApp");

if(isset($_POST['register_btn']))
{

  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $password=$_POST['pwd'];
 
  
  $sql="INSERT INTO Users(firstname, lastname, email,username, password)VALUES('$firstname','$lastname','$email','$username','$password')";
  $success=mysqli_query($db,$sql);
$_SESSION['message']="You are successfully registered!";
$_SESSION['firstname']=$firstname;
$_SESSION['lastname']=$lastname;
$_SESSION['username']=$username;
header("location:login.php");

}

?>

<script  type="text/javascript" language="javascript">
 function validate()  
{  
   var x = document.forms["myform"]["firstname"].value;
    if (x == "") {
        alert("First Name must be filled out");
        return false;
    }
    var y = document.forms["myform"]["lastname"].value;
    if (y == "") {
        alert(" Last Name must be filled out");
        return false;
    }
     var m = document.forms["myform"]["username"].value;
    if (m == "") {
        alert(" Username must be filled out");
        return false;
    }
    var z=document.forms["myform"]["email"].value;  
 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

if (!z.match(reg)){  
  alert("Please enter a valid e-mail address ");  
  return false;  
  }

  var w=document.forms["myform"]["pwd"].value;   
 if (w==""||w.length<8) {
    alert("Please enter valid password with minimum 8 characters");
    return false;
 }
 
   
}  
</script>

<script type="text/javascript">
    
    function login()
    {
        Window.location.assign('login.php');
    }
</script>
<style>

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #5A8CEE;
}
button:hover{
cursor: pointer;  
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

<body style="background-color: dimgray">
<div class="header">
    <img src="logo.png" height="35px" width="30px" style="padding-top: 20px">
   <b id="sitename">ChatWith</b>
   
</div><br>
   <center>
<div class="container">
  <form name="myform" method="post" action="Register.php">
    <label >First name</label>
    <input class="input" type="text"  name="firstname" >

    <label >Last name</label>
    <input class="input" type="text"  name="lastname" >

    <label >Email</label>
    <input class="input" type="email"  name="email" >

    <label >Choose Username</label>
    <input class="input" type="text"  name="username" >

    <label >Password</label>
    <input class="input" type="password" name="pwd">
    
 

    
    <input class="button" type="submit" onclick=" return validate()" name="register_btn" value="Register">
    <input type="submit" class="button" value="Login" onclick=" return login();" />
        

  </form>
</div>
 </center>
        
</body>


</html>
