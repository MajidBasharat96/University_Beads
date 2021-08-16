<?php 
include_once('connection.php');
session_start();
$_SESSION['loggedIn'] = FALSE;

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $q = "SELECT * FROM student_data WHERE email = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $q);
    $data = mysqli_fetch_assoc($result);
    $count = count ($data);
    if($count > 0) {
        $_SESSION['loggedIn'] = TRUE;
        $_SESSION ["studentMerit"] = $data["interMarks"];
        header('Location: index.php');
        
    } else {
       echo "<script>alert('Log In Failed Invalid Username or Password');</script>";
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>University Beads</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <a href="mailto:contact@southtemplate.com">contact@university-beads.com</a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:+92 315 380 5900">+92 315 380 5900</a>
 
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img style="margin-top: 25px;" src="img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="listings.php">Universities</a></li>
                                <?php
                                if ($_SESSION['loggedIn'])
                                {
                                    echo '<li><a href="blog.php">Recommendations</a></li>';
                                }
                                ?>
                                <li><a href="scholor.php">Scholorships</a></li>

                                <li><a href="contact.php">Contact</a></li>
                            </ul>

                            <!-- Search Form -->
                            <div class="south-search-form">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search Anything ...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Search Button -->
                            <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <br><br><br><br><br><br><br><br>
<!-- Default form login -->
<form action="" method="POST" class="text-center border border-light p-5 col-md-4" style="margin-left: 450px;">

    <p class="h4 mb-4">Sign in</p>

    <!-- Email -->
    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="username">

    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password">

    

    <!-- Sign in button -->
   <!--  <button class="btn btn-info btn-block my-4" type="submit">Sign in</button> -->
   <input type="submit" name="login">

    <!-- Register -->
    <p>Not a member?
        <a href="signup.php">Register</a>
    </p>

   

</form>
<!-- Default form login -->



<?php include 'includes/footer.php';?>

