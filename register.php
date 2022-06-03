<?php

require('connection.php');


if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $pass=mysqli_real_escape_string($con,$_POST['password']);
    $cpass=mysqli_real_escape_string($con,$_POST['cpassword']);
    $date=date('Y-m-d');
    $status='1';
    $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

$result=mysqli_query($con,$select);
if(mysqli_num_rows($result) > 0){
    $error[]='user already exists';
}
else{
    if($pass!=$cpass){
        $error[]='password not matched';
    }
    else{
        $insert = "INSERT INTO user(name, email,phone, password,cpassword,status,date) VALUES('$name','$email','$phone','$pass','$cpass','$status','$date')";
        mysqli_query($con, $insert);
       
    }
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
    <div class = "page-wrapper register-pg">
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
                <a href = "#" class = "pg-nvg-text text-upper">Register</a>
            </div>
        </div>

        <main>
            <section class = "register-section">
                <div class = "container text-center">
                    <div class = "register-section-title font-italian text-center">Create your profile</div>

                    <div class = "register-section-content grid">
                        <div class = "register-content-l flex flex-c">
                            <img src = "assets/images/user-img-lg.png" />
                        </div>

                        <div class = "register-content-m bg-old-lace">
                            <form class = "register-form flex flex-col" method="post">
                            <?php
                  if(isset($error)){
                     foreach($error as $error){
                          echo '<span class="error-msg">'.$error.'</span>';
                                  };
                             };
                             ?>
                                <div class = "form-elem flex">
                                    <label for = "">Name:</label>
                                    <input type = "text" name="name" class = "form-control bg-grey" placeholder="">
                                </div>
                                
                                <div class = "form-elem flex">
                                    <label for = "">Email</label>
                                    <input type = "email" name="email" class = "form-control bg-grey">
                                </div>
                                <div class = "form-elem flex">
                                    <label for = "">Phone:</label>
                                    <div class = "country-code flex">
                                        <img src = "assets/images/flag-icon.png">
                                        <select>
                                            <option></option>
                                        </select>
                                        <span class = "country-code-value">+61</span>
                                    </div>
                                    <input type = "text" name="phone" class = "form-control bg-grey">
                                </div>
                                <div class = "form-elem flex">
                                    <label for = "">Create Password:</label>
                                    <input type = "text" name="password" class = "form-control bg-grey">
                                </div>
                                <div class = "form-elem flex">
                                    <label for = "">Confirm Password:</label>
                                    <input type = "text" name="cpassword"  class = "form-control bg-grey">
                                </div>
                            </form>

                            <div class = "font-italian register-opt-separator">OR</div>

                            <h3 class = "font-italian text-left social-links-title">Connect Via</h3>
                            <ul class = "social-links flex">
                                <li class = "social-links-item">
                                    <a href = "#"><img src = "assets//images/google-logo.png" alt = "google loog"></a>
                                </li>
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

                            <a href = "#" name="submit" class = "sign-up-btn bg-light-blue">Sign up</a>
                        </div>

                        <div class = "register-content-r">
                            <img src = "assets/images/persons-img.png" alt = "">
                        </div>
                    </div>
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