<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPS</title>
    <style>
        html{
            padding-top: 240px;
        }
        .container{
            border:1px solid  #FFB6C1;
            border-radius: 10px;
            box-shadow: 5px 10px 18px red;
            background-color: #FFB6C1;
            text-align:center;
            color: white;
            font-size: 30px;
            width: 50%;
        }
        .container a{
            color: DodgerBlue;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <center>
        <div class="container">
            <?php
                echo "<p>
                        OOPS !!! 
                    </p>";
                echo "<p>
                    Can't open this page
                </p>";
                echo "<p>
                To Open <a href='index.php'>Login Website</a>
            </p>";
            ?>
        </div>
    </center>
</body>
</html>