<!DOCTYPE html>
<html>
<head>
    <title>Unit Converter</title>
    <script>
       
       function convertHoursToMinutes() {
            var inputHours = parseFloat(document.getElementById("hoursInput2").value);
            var minutes = inputHours * 60;
            document.getElementById("minutesOutput1").innerHTML = minutes + " minutes";
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
         .navbar{
          background-color:#3d52a0;

        }
        .footer{
          background-color:black;
          color:white;
        }
        body{
          background-repeat:no-repeat;
          background-size:100% 100%;
         background-image:url('new.jpg');
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
        body{
            background-color: aliceblue;
        }
        .whole{
            margin-top: 100px;
            background-color: bisque;
            background-color: ;
            width:30%;
            height:300px;
            border-radius: 25px;
            margin-left: 550px;
            border-color: black;
            box-shadow: 20px;
            border-width: 2px;
            border-style: solid;
        }
        .head{
           
            margin: 10px;
            background-color: rgb(255, 151, 25);
            border-radius: 15px;
            font-weight: 200;
            height:50px;
            font-size: 30px;
            text-align: center;
        }
        .ans{
            background-color: rgb(255, 255, 255);
            margin-top: 0px;
            width:30%;
            height:30px;
            text-align: center;
            margin-left: 165px;
            border-radius: 25px;
            border-color: black;
            border-style: solid;
            border-width: 2px;
        }
        .input{
            width:60%;
            margin-left: 20%;
        }
    </style>
</head>

<body>
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
   <div class="whole">
    <p class="head">Hours to Minutes:</p>
    <br>
    <p class="input"><input type="number" id="hoursInput2" class="form-control" placeholder="Enter hours"  width="40px"></p><br>
   <center><button onclick="convertHoursToMinutes()" class="btn btn-dark">Convert</button></center> 
   <br>
    <div class="ans"><p id="minutesOutput1"></p></div>
    </div><br><br><br>
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