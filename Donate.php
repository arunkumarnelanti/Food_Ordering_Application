<html>
    <head>
        <title>Donate Food || OrderFood...</title>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Akaya Telivigala' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" href="css/ForgotPasswordStyle.css">
    </head>
    <body>
        <p id="color">OrderFood...</p> 
        <hr>
        <p id="goback"><i class="far fa-hand-point-left"></i><a href="Home.php">Back</a></p>
        <!--query form starts here-->
        <div class="container">
            <div class="Donateform">
                <h2 class="Donatecolor">
                    <center>Donate Food</center>
                </h2>
                <form action="save_data.php" method="post"><br>
                    <div class="form-group">
                        <input type="name" class="form-control" id="name" placeholder="Enter Username" name="username" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="num" placeholder="Enter Mobile Number" name="mobile" required>
                    </div>
                    <div class="form-group">
                        <input type="name" class="form-control" id="name" placeholder="Enter your Address..." name="address" required>
                    </div>
                    <input type="submit" name="donate_submit" value="DONATE" id="yts" ><br><br>
                </form>
            </div>
        </div>
        <!--query form ends here-->
        <br><br><br>
        <div class="container">
            <h4 class="rem"><b>IMPORTANT</b></h4>
            <p>1. Don't Waste the Food. Remember that Food is very important to us.</p>
            <p>2. There are so many people who are sleeping without taking food. So, Please Help them.</p>
            <p>3. By following the quote "Don't Waste Food" OrderFood... has started to donated the remaining food to the poor.</p>
            <p>4. By this, Food is not going to waste and also you are satisfied by donating food to the needy.</p>
        </div>
    </body>
    <?php include('footer.php')?>
</html>
