<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Convertiz</title>
      <!-- Bootstrap CSS -->
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
      <style>
        /* Add custom styles here */
        .navbar{
          background-color:darkblack;

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
        
.waviy {
position: relative;
background-color:skyblue;
/*background-color:#D21F3c;*/
font-size: 60px;
width:100%;
height:90px;
padding-top:0px;
color:white;
}
.waviy span {
font-family: 'Alfa Slab One', cursive;
position: relative;
display: inline-block;
color: #050505;
text-transform: uppercase;
animation: waviy 1s infinite;
animation-delay: calc(.1s * var(--i));

}
@keyframes waviy {
0%,40%,100% {
  transform: translateY(0)
}
20% {
  transform: translateY(-20px)
}
}
body{
          background-repeat:no-repeat;
        background-size:100% 100%;
         background-image:url('new.jpg');
        }

        .footer{
          background-color:black;
          color:white;
        }
       h3{
        color:white;
        font-family:"erac bold itc";
       }
        
        
      </style>
    </head>
    <body>
    <img src="head.jpg" width="100%" height="150px">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

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
        <div class="waviy">
      <marquee><span style=///--13+"--i:1">C</span>
      <span style="--i:2">O</span>
      <span style="--i:3">N</span>
      <span style="--i:4">V</span>
      <span style="--i:5">E</span>
      <span style="--i:6">R</span>
      <span style="--i:7">T</span>
      <span style="--i:8">I</span>
      <span style="--i:9">Z</span>
      <span style="--i:10">.</span>
      <span style="--i:11">C</span>
      <span style="--i:12">O</span>
      <span style="--i:13">M</span></marquee>
  </div>   
        <center> <br>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 1200px; height: 400px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="tempc.png" alt="First slide">
      <h3>Temprature Converter</h3>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="lenc.png" alt="Second slide">
      <h3>Length Converter</h3>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="weic.png" alt="Third slide">
      <h3>Weight Converter</h3>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="timec.png" alt="Fourth slide">
      <h3>Time Converter</h3>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></center>
<br><br>
<div class="container"> <br><br>
<h1 style="color:white";>COMMON CONVERSIONS</h1><br>
<div class="row" style="color:white";>
  <div class="col"><h4><u>LENGTH</u></h4></div>
  <div class="col"><h4><u>TEMPERATURE</u></h4></div>
  <div class="col"><h4><u>WEIGHT</u></h4></div>
  <div class="col"><h4><u>TIME</u></h4></div>
  <br>


      </div>
      <div class="row" style="color:white";>
  <div class="col">Meter to Kilometer</div>
  <div class="col">Kelvin to Celsius</div>
  <div class="col">Kilogram to Pounds</div>
  <div class="col">Hours to Seconds</div></div>
  <div class="row" style="color:white";>
  <div class="col">Kilometer to Miles</div>
  <div class="col"> Celsius to Kelvin </div>
  <div class="col">Gram to Pounds</div>
  <div class="col">Seconds to Minutes</div></div>
  <div class="row" style="color:white";>
  <div class="col">Meter to Centimeter</div>
  <div class="col">Fahrenheit to Celsius</div>
  <div class="col">Kilogram to Gram</div>
  <div class="col">Hours to Minutes</div></div>
      


</div>
      </div>
      <br>
     
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