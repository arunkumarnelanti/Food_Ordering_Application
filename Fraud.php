<html>
    <head>
        <title>Fraud || OrderFood...</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> 
        <link rel="stylesheet" href="css/FraudStyle.css">
    </head>
    
    <body>
        <center><p class="fstyle">OrderFood...</p></center>
        <div class="container">
            <p id="back"><i class="far fa-hand-point-left"></i><a href="Home.php">Back to Home</a></p>
            <p id="fraud">Report a potential Fraud.</p>
        </div>
        <!--Disclaimer Jumbotron starts here-->
        <div class="container"><br>
            <div class="jumbotron">
                <p id="alert">Disclaimer!</p>
                <p id="alertmsg">Please use this form only for reporting potential frauds. For order or other general queries <a href="Contactus.php">contact us here</a>.</p>
            </div>
        </div>
    <!--Disclaimer Jumbotron ends here-->
    <!--fraud form starts here-->
    <div class="container">
        <div class="contactform">
            <h3 class="contactcolor">
                <center>REPORT FRAUD</center>
            </h3>
            <form action="save_data.php" method="post"><br>
                <div class="form-group">
                    <input type="name" class="form-control" id="name" placeholder="Enter username" name="username">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="num" placeholder="Enter Mobile Number" name="mobile">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Name of organization against whom concern is being" name="fraud">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="City" name="fraudcity">
                </div>
                <div class="form-group">
                    <textarea rows="7" cols="55" placeholder="Message" class="form-control" name="fmessage" required></textarea>
                </div>
                <p>1. This reporting channel is used to provide an opportunity to report your concerns related to suspected fraud or suspected violation of the Code of Conduct (COC) of OrderFood....</p>
                <p>2. Please note that you should not use this channel to report events / instances other than misconduct related to suspected fraud and suspected violation of COC. For any concern / complaint relating to your order, please reach out to our customer care team using the chat option.</p>
                <p>3. OrderFood... expects that reports made through this channel are made in good faith and are legitimate concerns that you believe should be investigated. All reports submitted will be given careful attention.</p><br>
                <input type="submit" name="fraud_submit" value="REPORT FRAUD" id="yts" ><br><br>
            </form>
        </div>
    </div><br><br>
    <!--body ends here -->
    <!-- fraud form ends here -->
    </body>
     <?php include('footer.php')?>
</html>
