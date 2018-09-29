 <?php  
session_start(); 
 $db=mysqli_connect("localhost","root","","ChatApp");
 if($db){
    //echo"connection successful";

 }
 else "no connection";
if(isset($_SESSION['username']))
{
    header('location:home.php');
}

 if(isset($_POST['login_btn']))
    {
        $user= $_POST['username'];
        $pass= $_POST['password'];
       

        $query="select * from Users where username='$user' && password='$pass' ";
        $result = mysqli_query($db, $query);
       
        $num = mysqli_num_rows($result);
        if($num==1)
        {
            $fname=mysqli_query($db,"select firstname from Users where username='$user' && password='$pass' " );
            $d1=mysqli_fetch_assoc($fname);
            $lname=mysqli_query($db,"select lastname from Users where username='$user' && password='$pass' " );
            $d2=mysqli_fetch_assoc($lname);
            $email=mysqli_query($db,"select email from Users where username='$user' && password='$pass' " );
            $d3=mysqli_fetch_assoc($email);
            $username=mysqli_query($db,"select username from Users where username='$user' && password='$pass' " );
            $d4=mysqli_fetch_assoc($username);
            $profile=mysqli_query($db,"select profile from Users where username='$user' && password='$pass' " );
            $d5=mysqli_fetch_assoc($profile);
            $_SESSION['username']=$user;
            $_SESSION['securitycode']=$pass;
            $_SESSION['fname']=implode("",$d1);
            $_SESSION['lname']=implode("",$d2);
            $_SESSION['email']=implode("",$d3);
            $_SESSION['username']=implode("",$d4);
            $_SESSION['profile']=implode("",$d5);
            header('location:home.php');
        }
        else{
        echo "<script>alert('wrong credintials !');</script>";
        header("location:login.php");
            
        }
           
    }

?>



<!DOCTYPE HTML>
<!DOCTYPE html>
<html>

<head>

<title>Authenticate</title>
<link rel="stylesheet" href="login.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">   

</head>



<script language="javascript">
function validate()
{
 var x=document.forms["myform"]["username"].value;
 if(x=="")
  alert("Please enter a username ! ");  
  return false;  
  }

 var y=document.forms["myform"]["password"].value;
 if(y==""||y.length<8){
alert("Please enter valid password!");
return false;
 }

 
}
</script>
<script type="text/javascript">
    
    function register()
    {
        Window.location.assign('register.php');
    }
</script>

<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=Password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
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



<body >

<div class="header">
    
    
    <img src="logo.png" height="35px" width="30px" style="padding-top: 20px">
    
    
   <b id="sitename">ChatWith</b>
    
   
   </div>	
<br><br>
<center>
<div class="container">
  <form name="myform"  method="post" action="login.php">
  	<b>Login with Email ID</b><br><br>
    <label >Username</label>
    <input type="text"  name="username" >

    <label >Password</label>
    <input type="Password"  name="password">
    Remember me <input type="checkbox"  name="remember" <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?> />    
    
    <input type="submit" onclick="return validate()" name="login_btn" value="Login">
   
        <a href="fergotpassword.html"><p>Fergot password ? Click Here !</p></a>

  </form>
  <a href="Register.php"><button name="new_user" class="headerButton">New User ? Register Here</button>  </a>
</div>
 </center>
 
</body>
</html>
