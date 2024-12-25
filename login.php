<?php
$logged = 0;
$invalid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'server.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM signup WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
           $logged=1;
           session_start();
           $_SESSION['username']=$username;
           $_SESSION['email']=$email;
           header('location:signin.php'); // exit after header to prevent further execution
        }
        else{
            $invalid=1;
            
        }
            
            
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script> 
function formValidation() {
let x = document.forms["form2"]["username"].value;
if (x == "") {
alert("Fill in the details"); return false;
}
} function newFunction(){
document.getElementById("Form2").reset();
}
</script>

    <title>Document</title>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
       
        /* Add custom styles here */
        .navbar{
          background-color:#3d52a0;

        }
        
        .navbar-nav .nav-link {
          color: #ffffff !important;
          border-radius: 5px;
          /* Change text color */
        }
        .navbar-nav .nav-link:hover {
          background-color: #ede8f5 !important; /* Change background color on hover */
          color: #010101 !important; /* Change text color on hover */
        }
        .footer{
          background-color:black;
          color:white;
        }
        
        
      
/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.navbar{
          background-color:#3d52a0;

        }
        
        .navbar-nav .nav-link {
          color: #ffffff !important;
          border-radius: 5px;
          /* Change text color */
        }
        .navbar-nav .nav-link:hover {
          background-color: #ede8f5 !important; /* Change background color on hover */
          color: #010101 !important; /* Change text color on hover */
        }

.wrapper {
    max-width: 600px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color:#ecf0f3;
    border-radius: 15px;
    opacity:0.9;
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
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color:white;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}
body{
            background-image: url('new.jpg');
            background-repeat:no-repeat;
            background-size:100% 100%;
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
    }
}
    </style>
</head>
<body>
<?php
  if($logged){
    echo'<div class="alert alert-success" role="button">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Success!</strong><p>logged in </p>
  </div>';
  }
  if($invalid){
    echo'<div class="alert alert-danger" role="button">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Failed!</strong><p>Invalid Credentials</p>
  </div>';
  }
  ?>
<img src="head.jpg" width="100%" height="150px">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
          Length converter
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="metertokm.php">Meter to Kilometer</a><div class="dropdown-divider"></div>
          <a class="dropdown-item" href="kilometertomiles.php">KiloMeter to miles</a><div class="dropdown-divider"></div>
          <a class="dropdown-item" href="metertocentimeter.php">Meter to Centimeter</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Time Converter
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="hourstoseconds.php">Hours to seconds
          </a><div class="dropdown-divider"></div>
          <a class="dropdown-item" href="hourstominutes.php">Hours to Minutes</a><div class="dropdown-divider"></div>
          <a class="dropdown-item" href="secondstominutes.php">Seconds to Minutes</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Temperature converter
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="kelvintocelsius.php">Kelvin to celsius</a><div class="dropdown-divider"></div>
          <a class="dropdown-item" href="celsiustokelvin.php">Celcius to Kelvin</a><div class="dropdown-divider"></div>
          <a class="dropdown-item" href="fahrenheittocelsius.php">Fahrenheit to Celsius</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Weight converter
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="kilogramtogram.php">KiloGram to Gram</a><div class="dropdown-divider"></div>
          <a class="dropdown-item" href="gramtopounds.php">Gram to pounds</a><div class="dropdown-divider"></div>
          <a class="dropdown-item" href="kilogramtopounds.php">KiloGram to pounds</a>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="registration.php">Sign Up</a>
      </li>
      <li class="nav-item ">
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
        </div><BR>
        <form class="p-3 mt-3" method="POST" action="login.php" id="form1" name="form2" onsubmit="return formValidation()">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="username" name="username" id="username" placeholder="username">
            </div><BR>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="email" name="email" id="email" placeholder="email">
            </div><BR>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="password">
            </div>
            <button type="submit" class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6"><BR>
           <h3> <a href="registration.php">Sign up</a></h3>
        </div>
    </div>
    <hr>
      <footer class="footer p-5" > 
        
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
        </div> 
    </footer> 
</body>
</html>