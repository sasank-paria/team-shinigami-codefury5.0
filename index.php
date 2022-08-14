<?php



  
// Initialize the session
session_start();
    
// Store the submitted data sent
// via POST method, stored 
  
// Temporarily in $_POST structure.


// check if the user is already logged in
require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    session_start();
    // Set session variables
    
    
    $myusername = mysqli_real_escape_string($conn,$_POST['email']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
    
    $phpVariable = $myusername;
    $_SESSION["name"] = $myusername;
    $sql = "SELECT register_user_id  FROM register_user WHERE user_email = '$myusername' and user_password = '" . md5($mypassword) . "'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
       
       $_SESSION['login_user'] = $myusername;
       
       header("location: homepage.php");
    }else {
       $error = "Your Login Name or Password is invalid";
    }
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/Login.css">
</head>

<body>
    <div class="container" style=" box-shadow: 10px 10px 30px rgb(0, 0, 0);">
        <form action="" method = "POST">
            <div class="title">Sign Up</div>

            <div class="input-box underline">
                <input type="email" name ="email" placeholder="Enter Your Email" required>
                <div class="underline"></div>
            </div>
            <div class="input-box">
                <input type="password" name=" password" placeholder="Enter Your Password" required>
                <div class="underline"></div>
            </div>
            <div class="input-box button">
                <input type="submit" name="" value="Continue">
            </div>
            <div class="forget-password">
                <span class="psw"><a href="#">Forgetpassword?</a></span>
            </div>
        </form>
        <br>
        <div class="option">or Connect With Social Media</div>
        <div class="twitter">
            <a href="#"><i class="fab fa-twitter"></i>Sign in With Twitter</a>
        </div>
        <div class="Google">
            <a href="#"><i class="fab fa-Google"></i>Sign in With Google</a>
        </div>
    </div>
</body>

</html>