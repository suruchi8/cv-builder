<?php

require('connection.php');

if(isset($_POST['submit'])){

$email=mysqli_real_escape_string($con,$_POST['email']);
$pass=mysqli_real_escape_string($con,$_POST['password']);

$select = " SELECT * FROM user where email = '$email' && password = '$pass' ";

$result=mysqli_query($con,$select);
$row=mysqli_fetch_array($result);

if(mysqli_num_rows($result)>0){
    header('location:index.php');
}
else{
    header('location:login.php');
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career - Templates Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Italianno&family=Overlock:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel = 'stylesheet' href = "assets/css/utils.css">
    <link rel = "stylesheet" href = "assets/css/main.css">
</head>
<body>
    <div class = "page-wrapper login-pg">
        <header class = "header">
            <nav class = "navbar">
                <div class = "container navbar-content grid">
                    <a href = "index.html" class = "navbar-brand">
                        <img src = "assets/images/career-logo.png" alt = "site logo">
                    </a>

                    <div class = "nav-and-site-links flex flex-col">
                        <ul class = "social-links flex">
                            <li class = "social-links-item">
                                <a href = "#"><img src = "assets/images/fb-logo.png" alt = "facebook logo"></a>
                            </li>
                            <li class = "social-links-item">
                                <a href = "#"><img src = "assets/images/insta-logo.png" alt = "facebook logo"></a>
                            </li>
                            <li class = "social-links-item">
                                <a href = "#"><img src = "assets/images/twitter-logo.png" alt = "facebook logo"></a>
                            </li>
                            <li class = "social-links-item">
                                <a href = "#"><img src = "assets/images/linkedin-logo.png" alt = "facebook logo"></a>
                            </li>
                            <li class = "social-links-item">
                                <a href = "#"><img src = "assets/images/pinterest-logo.png" alt = "facebook logo"></a>
                            </li>
                        </ul>

                        <ul class = "nav-links flex">
                            <li class = "nav-item">
                                <a href = "about.php" class = "nav-link bg-blue text-upper">about us </a>
                            </li>
                            <li class = "nav-item">
                                <a href = "templates.html" class = "nav-link bg-blue text-upper">templates </a>
                            </li>
                            <li class = "nav-item">
                                <a href = "#" class = "nav-link bg-blue text-upper">support </a>
                            </li>
                            <li class = "nav-item">
                                <a href = "register.php" class = "nav-link bg-blue text-upper">register </a>
                            </li>
                            <li class = "nav-item">
                                <a href = "login.php" class = "nav-link bg-blue">Member login </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class = "page-navigate">
            <div class = "page-navigate-container flex">
                <a href = "#" class = "pg-nvg-home-icon">
                    <img src = "assets/images/home-icon.png" alt = "home icon">
                </a>
                <a href = "#" class = "pg-nvg-right-arrow-icon">
                    <img src = "assets/images/double-arrow-right.png" alt = "double right arrow icon">
                </a>
                <a href = "#" class = "pg-nvg-text text-upper">Member Login</a>
            </div>
        </div>

        <main>
            <section class = "templates-section">
                <div class = "container">
                    <form class = "login-form flex flex-c flex-col" action=""  method="post">
                        <img src = "assets/images/login-user-icon.png" alt = "" class = "top-user-icon">
                        <div class = "form-elem flex bg-grey">
                            <div class = "form-elem-icon">
                                <img src = "assets/images/user-icon.png" alt = "user icon">
                            </div>
                            <input type = "text" name="email" class = "form-control" placeholder="username">
                        </div>

                        <div class = "form-elem flex bg-grey">
                            <div class = "form-elem-icon">
                                <img src = "assets/images/lock-icon.png" alt = "user icon">
                            </div>
                            <input type = "text" name="password" class = "form-control" placeholder="password">
                        </div>

                        <button type = "submit" name="submit" class = "form-btn login-btn">Login now</button>
                        <span class = "form-text">Not a member?</span>
                        <a href = "register.php" class = "form-btn register-btn flex flex-c">Register Yourself</a>
                    </form>
                </div>
            </section>
        </main>

        <footer class = "footer bg-old-lace">
            <div class = "footer-content grid">
                <div class = "footer-content-l copyright">
                    <img src = "assets/images/aus-copyright-council.png" alt = "australian copyright council image">
                </div>
                <div class = "footer-content-r">
                    <div class = "footer-content-r-top flex flex-sb">
                        <ul class = "footer-links flex flex-c">
                            <li class = "footer-nav-item">
                                <a href = "#" class = "footer-nav-link font-italian">Home</a>
                            </li>
                            <li class = "footer-nav-item">
                                <a href = "#" class = "footer-nav-link font-italian">About copyright Australia</a>
                            </li>
                            <li class = "footer-nav-item">
                                <a href = "#" class = "footer-nav-link font-italian">The copyright role</a>
                            </li>
                            <li class = "footer-nav-item">
                                <a href = "#" class = "footer-nav-link font-italian">Contact us</a>
                            </li>
                        </ul>
    
                        <ul class = "social-links flex">
                            <li class = "social-links-item">
                                <a href = "#">
                                    <img src = "assets/images/fb-logo.png" alt = "facebook logo">
                                </a>
                            </li>
                            <li class = "social-links-item">
                                <a href = "#">
                                    <img src = "assets/images/insta-logo.png" alt = "facebook logo">
                                </a>
                            </li>
                            <li class = "social-links-item">
                                <a href = "#">
                                    <img src = "assets/images/twitter-logo.png" alt = "facebook logo">
                                </a>
                            </li>
                            <li class = "social-links-item">
                                <a href = "#">
                                    <img src = "assets/images/linkedin-logo.png" alt = "facebook logo">
                                </a>
                            </li>
                            <li class = "social-links-item">
                                <a href = "#">
                                    <img src = "assets/images/pinterest-logo.png" alt = "facebook logo">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class = "footer-content-r-bottom">
                        <p class = "font-italian text-center">&copy; 20001-2021 copyright australia.com. All rights reserved. Privacy Policy</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src = "assets/js/script.js"></script>
</body>
</html>