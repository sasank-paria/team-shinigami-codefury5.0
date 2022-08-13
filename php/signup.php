<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
$email = $email_err = $email_err ="";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM user WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO user (username, password, email) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password,$param_email);

        // Set these parameters
        $param_username = $username;
        $param_email = $email;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <div class="container" style=" box-shadow: 10px 10px 30px rgb(0, 0, 0);">
        <form action=""  method = "POST">
            <div class="title">Sign In</div>
            <div class="input-box underline">
                <input type="text"  placeholder="Name" required name="username">
                <div class="underline"></div>
               
            </div>
            <div class="input-box underline">
                <input type="text"  placeholder="Enter Your Email" name="email" required >
                <div class="underline"></div>
                
            </div>
            <div class="input-box">
                <input type="password" placeholder="Enter Your Password" name="password">
                <div class="underline"></div>
            </div>
            <div class="input-box">
                <input type="confirmpassword" placeholder="Confirm  Your Password" required name="confirm_password">
                <div class="underline"></div>
            </div>
            <div class="input-box button">
                <input type="submit" name="register" value="Sign In">
            </div>

        </form>
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