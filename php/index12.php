<?php

session_start();

if (isset($_SESSION["user_id"])) {
    header("location:home.php");
}
$connect = new PDO("mysql:host=localhost; dbname=testing", "root", "mysql");
$message = '';
$error_user_name = '';
$error_user_email = '';
$error_user_password = '';
$user_name = '';
$user_email = '';
$user_password = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <title>startup guider homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="css/gradientfornavbar.css">
    <link rel="stylesheet" href="css/waveeffect.css">

</head>

<body>


    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: dodgerblue;">
        <a class="navbar-brand  mb-0 h1" href="#" style="color: white; margin-left: 1%;">
            <img src="assets/websummit-lisbon.gif" width="30" height="30" class="d-inline-block align-top" alt=""> Startup Guider
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 55%;">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class=" nav-link " href="index.html " style="color: white;">Home <span class="sr-only ">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href=" " style="color: white;">Feed</a>
                    <!--this page will have videos of startup with like and comments-->
                </li>

                <li class="nav-item ">
                    <a class="nav-link " href=" " style="color: white;">Services</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link " href=" " style="color: white;">news</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link " href=" " style="color: white;">contact us</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link " href=" " style="color: white;">about</a>
                </li>

            </ul>

        </div>
    </nav>
    <!--end of navbar-->

    <!--wave effect-->
    <div class="waveeffect">
        <p style="color: white;">hello</p>
        <div class="waveWrapper waveAnimation">
            <div class="waveWrapperInner bgTop">
                <div class="wave wavetop" style="background-image: url('assets/waveeffect/wavetop.png')"></div>
            </div>
            <div class="waveWrapperInner bgMiddle">
                <div class="wave wavemid" style="background-image: url('assets/waveeffect/wavemid.png')"></div>
            </div>
            <div class="waveWrapperInner bgBottom">
                <div class="wave wavebottom" style="background-image: url('assets/waveeffect/wavebottom.png')"></div>
            </div>
        </div>
    </div>
    <!--wave effect end -->


</body>

</html>

</html>