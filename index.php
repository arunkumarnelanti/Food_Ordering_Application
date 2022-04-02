<?php 
    require('connection.php'); 
    session_start();
?>
<html>
<head>
    <title>Login page || OrderFood...</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Akaya Telivigala' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/indexStyle.css">
    <style>
        html{
            scroll-behavior:smooth;
        }
        .container .reservecolor {
            font-family: 'Akaya Telivigala';
            font-size: 40px;
            padding: 4px;
            color: crimson;
        }

    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!--header starts here -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="index.php">
                   OrderFood...
                </a>
            </div><br><br>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="Register.php">REGISTER</a></li>
                    <li><a href="index.php">SIGN IN</a></li>
                    <li><a href="#about">ABOUT US</a></li>
                    <li><a href="#partners">PARTNERS</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--header ends here -->
    <!--index starts here -->
<center>
        <div class="wrapper">
            <h2 class="cname">OrderFood...</h2>
            <hr>
            <header>Sign in</header>
            <form method="POST" action="login_register.php">
                <div class="field email">
                    <div class="input-area">
                        <input type="text" placeholder="Email Address or Username" name="email_username" required>
                        <i class="icon fas fa-envelope"></i>
                        <i class="error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-txt">Email can't be empty</div>
                </div>
                <div class="field password">
                    <div class="input-area">
                        <input type="password" placeholder="password" name="password" required>
                        <i class="icon fas fa-lock"></i>
                        <i class="error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-txt">Password can't be empty</div>
                </div>
                <!--<div class="pass-link"><a href="Changepsd.php">Forgot password?</a></div>-->
                <input type="submit" name="login" value="Login">

            </form>
            <div class="signup-link">Not having Account? <a href="Register.php">Sign up</a></div>
        </div>
    </center>
    <br><br><br><br>
    <div class="container" id="about">
        <br><br><hr>
        <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p class="about">~~~~~ABOUT US</p>
                        <p class="des">We Love to Serve Best...</p>
                        <p class="content">OrderFood... is one of the Best Food Delivering Application around. Through this website we can Order the food which we love to eat.</p>
                        <p class="content"> In this Application we can find that there is an option that you can donate food to the Poor who are in need - <a href="Donate.php">Donate Food</a>.</p>
                        <p class="content"> The website is completely secure. You can also check the - <a href="Privacy.php">Privacy Policies</a></p>
                        <ul class="btn">
                            <li><a href="Aboutus.php">Know more...</a></li>
                        </ul>
                </div>
                <center>
                <div class="col-lg-6 col-md-6 col-sm-12" id="image">
                    <a href="index.php">
                        <input type="image" src="images/restaurent.jpg" name="submit1" alt="OrderFood..." class="rounded-circle"/>
                    </a>
                </div>
            </center>
        </div>
    </div>
    <br><br>
    <div class="container" id="partners">
        <br><br>
        <hr>
        <h2 class="reservecolor">
            <center>Partners</center>
        </h2>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12" id="table">
                <a href="https://arunkumarnelanti.github.io/E-Commerce-Shopping-Website/">
                    <img src="images/SMart.png" style="width:280px; height:280px; border-radius:50px;" alt="SMart">
                </a>
            </div>
            <center>
                <div class="col-lg-6 col-md-6 col-sm-12" id="image">
                    <a href="https://arunkumarnelanti.github.io/Hotel-Room-Booking-Application/">
                        <img src="images/NRstays.png" style="width:280px; height:280px; border-radius:50px;" alt="NR stays">
                    </a>
                </div>
            </center>
        </div>
    </div>
    <!--index ends here -->
   <br><br>
     <!--footer starts here -->
     <div class="foot">
            <div class="container-fluid">

                <div class="row">
                    <center><h1 class="fontsty"><a href="index.php">OrderFood...</a></h1> </center><br><br>
                    <center>
                        <div class="col-xl-3 col-lg-4 col-md-6 ">  
                            <h6><b><u>COMPANY</u></b></h6>
                            <p><a href="Aboutus.php">About us</a></p>
                            <p><a href="Partner.php">Partnership with</a></p>
                            <p><a href="login_first.php">Report Fraud</a></p>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 ">  
                            <h6><b><u>FOR YOU </u></b></h6>
                            <p><a href="login_first.php">Donate Food</a></p>
                            <p><a href="login_first.php">Feedback</a></p>
                            <p><a href="login_first.php">Stuck?</a></p>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 " >  
                            <h6><b><u>POLICIES</u></b></h6>
                            <p><a href="Privacy.php">Privacy Policies</a></p>
                            <p><a href="Terms.php">Terms & Conditions</a></p>
                            <p><a href="Refund.php">Refund & Cancellation</a></p>
                            <p><a href="#">Guide</a></p>
                        </div>
                    </center>
                </div><br><br>
                
                <center>
                <h6 style="color:white"><b><u>CONNECT US</u></b></h6>
                        <!--connect me starts-->
                        <div class="column2">
                            <a href="https://twitter.com/ArunNelanti" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60" height="60" viewBox="0 0 172 172" style=" fill:#000000;"><defs><linearGradient x1="37.05525" y1="29.78467" x2="146.19283" y2="138.92225" gradientUnits="userSpaceOnUse" id="color-1_5MQ0gPAYYx7a_gr1"><stop offset="0" stop-color="#2aa4f4"></stop><stop offset="1" stop-color="#007ad9"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="url(#color-1_5MQ0gPAYYx7a_gr1)"><path d="M165.20958,39.48833c-5.55775,2.46175 -11.53475,4.10292 -17.84142,4.8805c6.41058,-3.8055 11.34483,-9.87567 13.65967,-17.0495c-5.9985,3.51525 -12.64558,6.09883 -19.7155,7.4605c-5.64733,-5.98417 -13.70267,-9.6965 -22.62517,-9.6965c-17.13908,0 -31.03525,13.77075 -31.03525,30.75217c0,2.40442 0.28308,4.74433 0.80983,7.01617c-25.78567,-1.29358 -48.65808,-13.55217 -63.95892,-32.15683c-2.6875,4.54725 -4.19967,9.8685 -4.19967,15.48717c0,10.67475 5.46458,20.07383 13.79942,25.61008c-5.08833,-0.15408 -9.87567,-1.5695 -14.06817,-3.84133c0,0.09317 0,0.22933 0,0.36192c0,14.91742 10.69983,27.34083 24.88267,30.16808c-2.59075,0.7095 -5.332,1.10367 -8.15567,1.10367c-2.00308,0 -3.956,-0.22575 -5.848,-0.56617c3.94883,12.1905 15.40475,21.10225 28.97842,21.36742c-10.621,8.2345 -23.99758,13.16517 -38.54233,13.16517c-2.51192,0 -4.97008,-0.14333 -7.39958,-0.43717c13.74925,8.70392 30.06417,13.803 47.5795,13.803c57.07175,0 88.29692,-46.86642 88.29692,-87.5265c0,-1.333 -0.043,-2.65883 -0.10392,-3.97033c6.09167,-4.30358 11.34125,-9.72875 15.48717,-15.9315"></path></g></g></svg>
                            </a>
                        </div>
                        <div class="column2">
                            <a href="https://www.instagram.com/__arun_kumar_nelanti__/?hl=en" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60" height="60" viewBox="0 0 172 172" style=" fill:#000000;"><defs><radialGradient cx="69.445" cy="150.62542" r="160.88808" gradientUnits="userSpaceOnUse" id="color-1_Xy10Jcu1L2Su_gr1"><stop offset="0" stop-color="#ffdd55"></stop><stop offset="0.328" stop-color="#ff543f"></stop><stop offset="0.348" stop-color="#fc5245"></stop><stop offset="0.504" stop-color="#e64771"></stop><stop offset="0.643" stop-color="#d53e91"></stop><stop offset="0.761" stop-color="#cc39a4"></stop><stop offset="0.841" stop-color="#c837ab"></stop></radialGradient><radialGradient cx="42.23317" cy="19.85275" r="106.82992" gradientUnits="userSpaceOnUse" id="color-2_Xy10Jcu1L2Su_gr2"><stop offset="0" stop-color="#4168c9"></stop><stop offset="0.999" stop-color="#4168c9" stop-opacity="0"></stop></radialGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M121.89425,150.46417l-71.66667,0.06808c-15.76667,0.01433 -28.67742,-12.87133 -28.69533,-28.638l-0.06808,-71.66667c-0.01433,-15.76667 12.87133,-28.67742 28.638,-28.69533l71.66667,-0.06808c15.76667,-0.01433 28.67742,12.87133 28.69533,28.638l0.06808,71.66667c0.01792,15.77025 -12.87133,28.681 -28.638,28.69533z" fill="url(#color-1_Xy10Jcu1L2Su_gr1)"></path><path d="M121.89425,150.46417l-71.66667,0.06808c-15.76667,0.01433 -28.67742,-12.87133 -28.69533,-28.638l-0.06808,-71.66667c-0.01433,-15.76667 12.87133,-28.67742 28.638,-28.69533l71.66667,-0.06808c15.76667,-0.01433 28.67742,12.87133 28.69533,28.638l0.06808,71.66667c0.01792,15.77025 -12.87133,28.681 -28.638,28.69533z" fill="url(#color-2_Xy10Jcu1L2Su_gr2)"></path><path d="M86,111.08333c-13.82808,0 -25.08333,-11.25167 -25.08333,-25.08333c0,-13.83167 11.25525,-25.08333 25.08333,-25.08333c13.82808,0 25.08333,11.25167 25.08333,25.08333c0,13.83167 -11.25525,25.08333 -25.08333,25.08333zM86,68.08333c-9.87925,0 -17.91667,8.03742 -17.91667,17.91667c0,9.87925 8.03742,17.91667 17.91667,17.91667c9.87925,0 17.91667,-8.03742 17.91667,-17.91667c0,-9.87925 -8.03742,-17.91667 -17.91667,-17.91667z" fill="#ffffff"></path><circle cx="31.5" cy="16.5" transform="scale(3.58333,3.58333)" r="1.5" fill="#ffffff"></circle><path d="M107.5,132.58333h-43c-13.82808,0 -25.08333,-11.25167 -25.08333,-25.08333v-43c0,-13.83167 11.25525,-25.08333 25.08333,-25.08333h43c13.82808,0 25.08333,11.25167 25.08333,25.08333v43c0,13.83167 -11.25525,25.08333 -25.08333,25.08333zM64.5,46.58333c-9.87925,0 -17.91667,8.03742 -17.91667,17.91667v43c0,9.87925 8.03742,17.91667 17.91667,17.91667h43c9.87925,0 17.91667,-8.03742 17.91667,-17.91667v-43c0,-9.87925 -8.03742,-17.91667 -17.91667,-17.91667z" fill="#ffffff"></path></g></g></svg>
                            </a>
                        </div>
                        <div class="column2">
                            <a href="https://www.facebook.com/arunkumar.nelanti.1/" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60" height="60" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M86,17.91667c-37.60139,0 -68.08333,30.48195 -68.08333,68.08333c0,37.60139 30.48195,68.08333 68.08333,68.08333c37.60139,0 68.08333,-30.48195 68.08333,-68.08333c0,-37.60139 -30.48195,-68.08333 -68.08333,-68.08333z" fill="#039be5"></path><path d="M95.21633,104.04567h17.61925l2.76633,-17.89875h-20.38917v-9.7825c0,-7.43542 2.4295,-14.02875 9.38475,-14.02875h11.17642v-15.61975c-1.96367,-0.26517 -6.11675,-0.84567 -13.96425,-0.84567c-16.38658,0 -25.9935,8.65375 -25.9935,28.36925v11.90742h-16.84525v17.89875h16.84525v49.19558c3.33608,0.50167 6.71517,0.84208 10.18383,0.84208c3.13542,0 6.19558,-0.28667 9.21633,-0.69517z" fill="#ffffff"></path></g></g></svg>
                            </a>
                        </div>
                        <!--connect me ends-->
                </center>
                <hr>
                <div class="text">
                    Copyright - © <a href="index.php" target="_blank">OrderFood...</a> Rights Reserved
                </div>
            </div>
        </div>
        <!--footer ends here -->

       

    </body>
</html>
