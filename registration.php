<?php
$registered = 0;
$userexists = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'server.php';

    $username = $_POST['username'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phoneno = $_POST['phoneno'];

    $sql = "SELECT * FROM signup WHERE username='$username'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $userexists = 1;
        } else {
            $sql = "INSERT INTO signup (username, lastname, age, email, password, phoneno) VALUES ('$username', '$lastname', '$age', '$email', '$password', '$phoneno')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $registered = 1;
            } else {
                die(mysqli_error($con));
            }
        }
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function formValidation() {
            let x = document.forms["form2"]["username"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
        }
        function newFunction() {
            document.getElementById("form2").reset();
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            background-image: url('new.jpg');
            background-repeat:no-repeat;
        background-size:1700px 1500px;
        }
        
        .wrapper {
            max-width: 600px;
            min-height: 300px;
            margin: 80px auto;
            padding: 40px 30px 30px 30px;
            background-color: #ecf0f3;
            border-radius: 15px;
            
            opacity: 0.9;

        }
        .logo {
            width: 80px;
            margin: auto;
        }
        .logo img {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff;
        }
        .navbar {
            background-color: #3d52a0;
        }
        .navbar-nav .nav-link {
            color: #ffffff !important;
            border-radius: 5px;
        }
        .navbar-nav .nav-link:hover {
            background-color: #ede8f5 !important;
            color: #010101 !important;
        }
        .wrapper .name {
            font-weight: 600;
            font-size: 1.4rem;
            letter-spacing: 1.3px;
            padding-left: 10px;
            color: blue;
        }
        .wrapper .form-field input {
            width: 100%;
            display: block;
            border: none;
            outline: none;
            background: none;
            font-size: 1.2rem;
            color: #666;
            padding: 10px 20px 15px 30px;
        }
        .wrapper .form-field {
            padding-left: 10px;
            margin-bottom: 30px;
            border-radius: 20px;
            box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
        }
        .wrapper .form-field .fas {
            color: #555;
        }
        .wrapper .btn {
            box-shadow: none;
            width: 50%;
            height: 40px;
            background-color: #03A9F4;
            color: white;
            border-radius: 25px;
            box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
            letter-spacing: 1.4px;
        }
        .wrapper .btn:hover {
            background-color: #039BE5;
        }
        .wrapper a {
            text-decoration: none;
            font-size: 0.8rem;
            color: #03A9F4;
        }
        .wrapper a:hover {
            color: #039BE5;
        }
        @media(max-width: 380px) {
            .wrapper {
                margin: 30px 20px;
                padding: 40px 15px 15px 15px;
                background-color: blue;
            }
        }
        .footer {
            background-color: black;
            color:white;
        }
    </style>
</head>
<body>
<img src="head.jpg" width="100%" height="150px">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Length converter
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="metertokm.php">Meter to Kilometer</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="kilometertomiles.php">KiloMeter to miles</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="metertocentimeter.php">Meter to Centimeter</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Time Converter
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="hourstoseconds.php">Hours to seconds</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="hourstominutes.php">Hours to Minutes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="secondstominutes.php">Seconds to Minutes</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Temperature converter
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="kelvintocelsius.php">Kelvin to celsius</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="celsiustokelvin.php">Celcius to Kelvin</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="fahrenheittocelsius.php">Fahrenheit to Celsius</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Weight converter
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="kilogramtogram.php">KiloGram to Gram</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gramtopounds.php">Gram to pounds</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="kilogramtopounds.php">KiloGram to pounds</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registration.php">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Log In</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="wrapper">
        <div class="logo">
            <img src="login-icon-14.jpg" alt="">
        </div>
        <br>
        <div class="text-center mt-4 name">
            CONVERTIZ
        </div><br>
        <?php if ($registered == 1): ?>
            <div class="alert alert-success" role="alert">
                Registered Successfully!
            </div>
        <?php elseif ($userexists == 1): ?>
            <div class="alert alert-danger" role="alert">
                User Already Exists!
            </div>
        <?php endif; ?>
        <form class="p-3 mt-3" method="POST" action="registration.php">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="text" name="lastname" id="lastname" placeholder="lastname">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="number" name="age" id="age" placeholder="age">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="email" name="email" id="email" placeholder="email">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="password" name="password" id="password" placeholder="password">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="number" name="phoneno" id="phoneno" placeholder="phoneno">
            </div>
            <div>
                <div style="float:left;width:50%;">
                    <button type="submit" class="btn mt-3">SIGN UP</button>
                </div>
                <div style="float:right;width:50%;">
                    <button type="button" class="btn mt-3" onclick="newFunction()">CLEAR</button>
                </div>
            </div>
        </form>
        <br>
    </div>
    <footer class="footer p-5">
        <div class="row">
            <div class="col">
                <h2>CONVERTIZ</h2>
            </div>
            <div class="col">
                <h5>About Us</h5>
                <p>
                    Convertiz is a platform that helps you for different unit conversions.
                </p>
            </div>
            <div class="col">
                <h5>Contact Us</h5>
                <ul class="list-unstyled">
                    <li>Email: convertiz@gmail.com</li>
                    <li>Phone: +1233567890</li>
                    <li>Address: KEC Street, Erode, TamilNadu</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <p>© 2024 Your CONVERTIZ. All rights reserved.</p>
            </div>
            <div class="col">
                <ul class="list-inline footer-links">
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            Privacy Policy
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            Terms of Service
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            Sitemap
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>