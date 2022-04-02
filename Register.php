<?php 
    session_start();
    require('connection.php'); ?>
<html>

<head>
    <title>Registration Form || OrderFood...</title>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Akaya Telivigala' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   <link rel="stylesheet" href="css/RegisterStyle.css">
</head>

<body>
        <div class="container"><br><br>
            <div class="logo">
                <center>OrderFood...</center>
            </div>
            <div class="title">
                <center>Registration</center>
            </div>
            <hr>
            <form action="login_register.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name<span id="star">*</span></span>

                        <input type="text" placeholder="Enter your name" name="fullname" required>
                    </div>
                    <div class="input-box">
                        <span class="details">User-Name<span id="star">*</span></span>
                        <input type="text" placeholder="Enter User-name" name="username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email<span id="star">*</span></span>
                        <input type="email" placeholder="Email Address" name="email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Mobile Number<span id="star">*</span></span>
                        <input type="number" placeholder="Mobile Number" name="mobile" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password<span id="star">*</span></span>
                        <input type="password" placeholder="Enter your Password" name="password" required>
                    </div>
                </div>

                <div class="button">
                    <input type="submit" value="Sign up" name="register">
                </div>
                <p id="goback"><i class="far fa-hand-point-left"></i><a href="index.php">Back</a></p><br><br>
            </form>
    </div><br><br><br>
</body>
</html>
