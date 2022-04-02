<?php
    session_start();
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Akaya Telivigala' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
    <style>
        /* header style starts here*/
        #myNavbar {
        float: right;
        }
        .container-fluid .navbar-brand{
            font-family: 'Akronim';
            font-size: 50px;
            padding-top:20px;
        }
        /* header style ends here*/
        /*index style starts here*/
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
        body{
            padding-top: 120px;
            /*background-color: lightgreen;*/
        }
        
        .wrapper {
            
            background: whitesmoke;
            width: 380px;
            padding: 40px 30px 50px 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 5px 10px 18px lightyellow;
        }

        .wrapper header {
            color: crimson;
            font-size: 35px;
            font-weight: 600;
        }

        .wrapper form {
            margin: 40px 0;
        }

        form .field {
            width: 100%;
            margin-bottom: 20px;
        }

        form .field.shake {
            animation: shake 0.3s ease-in-out;
        }

        @keyframes shake {
            0%,
            100% {
                margin-left: 0;
            }
            20%,
            80% {
                margin-left: -12px;
            }
            40%,
            60% {
                margin-left: 12px;
            }
        }

        form .field .input-area {
            position: relative;
        }

        form input {
            height: 30px;
            width: 310px;
            outline: none;
            padding: 0 45px;
            font-size: 18px;
            border: 1px solid #bfbfbf;
            border-radius: 5px;
            border-bottom-width: 2px;
        }

        form .field.error input {
            border-color: #dc3545;
        }

        form input::placeholder {
            color: #bfbfbf;
            font-size: 17px;
        }

        form .field i {
            position: absolute;
            top: 50%;
            font-size: 18px;
            pointer-events: none;
            transform: translateY(-50%);
        }

        form .field .icon {
            left: 15px;
            color: #bfbfbf;
        }

        form .field .error-icon {
            right: 15px;
            color: dc3545;
        }

        form .field .error-txt {
            margin-top: 5px;
            color: #dc3545;
            text-align: left;
        }

        form .field .error {
            display: none;
        }

        form .field.error .error {
            display: block;
        }

        form .pass-link {
            text-align: left;
            margin-top: -10px;
        }


        input[type="submit"]:hover {
            background-color: red;
        }

        /*index style ends here*/
        
        /*style for scroll bar starts here */
        ::-webkit-scrollbar {
            width: 4px;
            background-color: black;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 800px;
            background-color: crimson;
        }
        /*style for scroll bar ends here*/
        .headcolor{
                font-family: 'Akaya Telivigala';
                font-size: 40px;
                padding: 4px;
                color: crimson;
            }

        
        
            .shop-items {
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            text-decoration-line: none;
        }

        .product-detail {
            margin: 50px;
            float: right;
            color: black;
            padding: 30px 0px;
            font-weight: lighter;
            font-size: 1.60rem;
        }

        .shop-item {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            flex-wrap: wrap;
            background-color: #F3F3F3;
            border-radius: .3rem;
            padding: .3rem;
            list-style-type: none;
            flex: 0 1 34rem;
            margin: 1rem;
            height: 50rem;
            align-items: center;
        }

        .align {
            align-items: center;
            text-align: center;
        }

        .shop-item-image {
            max-width: 40rem;
            max-height: 40rem;
            padding: 0px 70px;
            margin-top: 15px;
            border-radius: 40%;
        }

        .shop-item-image:hover {
            transform: scale(1.1);
        }

        .product-name {
            text-decoration: none;
            text-decoration-color: none;
            color: white;
            align-items: center;
        }

        .shop-item-price {
            font-size: 2.1rem;
            font-weight: bolder;
            color: black;
            align-items: center;
            text-align: center;
            font-family: Comic Sans MS;
        }

        .deal {
            font-size: 2.1rem;
            color: black;
            align-items: center;
            text-align: center;
            background: #0F1821;
            color: white;
        }

        .shop-item-title {
            display: block;
            width: 100%;
            text-align: center;
            font-weight: bold;
            font-size: 1.5em;
            color: black;
            margin-bottom: 5px;
            text-decoration-line: none;
            text-decoration: none;
            font-weight: bolder;
            font-size: 3rem;
        }

        .detail {
            color: #231F20;
            font-weight: bolder;
        }
        ul li{
            list-style-type:none;
        }
        .btn{
            width:120px;
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
                <a class="navbar-brand" href="#">
                   OrderFood...
                </a>
            </div><br><br>
            
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="Home.php">HOME</a></li>
                    <?php
                    error_reporting(0);
                        if(isset($_SESSION['cart']))
                        {
                            $count=count($_SESSION['cart']);
                        }
                    ?>
                    <li><a href="Orders.php">MY ORDERS (<?php echo $count ?>)</a></li>
                    <li><a href="Donate.php">DONATE FOOD</a></li>
                    <li><a href="Feedback.php">FEEDBACK</a></li>
                    <li><a href="Help.php">NEED HELP?</a></li>
                    <li><a href="logout.php">LOG OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--header ends here -->
    </body>
</html>

