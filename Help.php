<html>
    <head>
        <title>Help || OrderFood...</title>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Akaya Telivigala' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" href="css/HelpStyle.css">
        <style>
             html{
                scroll-behavior:smooth;
            }
        </style>
    </head>
    <?php
    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $email=$_POST['email'];
        $mobile=$_POST['mob'];
        $question=$_POST['ques'];
        $description=$_POST['desc'];
        
 
        echo $fname;
        echo $email;
        if(strlen($mobile)!=10){
            $alert="<script>alert('Mobile Number is should be 10 digits.')</script>";
            echo $alert;
        }else{
            echo $mobile;
        }
        echo $question;
        echo $description;
       
    }
    if(isset($_POST['submit1'])){
        $alert1="<script>
            alert('Go to Report Fraud in footer of page.');
        </script>";
        echo $alert1;
    }
    if(isset($_POST['submit4'])){
        $alert4="<script>
            alert('To Order Food, Go to Home Page and order.');
        </script>";
        echo $alert4;
    }
    if(isset($_POST['submit2'])){
        $alert4="<script>
            alert('Go to Guide in the footer of page.');
        </script>";
        echo $alert4;
    }
?>
    <body>
        <p id="color">OrderFood...</p> 
        <hr>
        <p id="goback"><i class="far fa-hand-point-left"></i><a href="Home.php">Back</a></p>
        <p id="goback1"><i class="far fa-hand-point-down"></i><a href="#otherhelp">Other Queries</a></p><br><br><br>
        <!--simple chat system starts here-->
        <div class="container">
            <div id="fquery" class="queryform">
                <h2 class="querycolor">
                    <center>Frequent Questions</center>
                </h2><br>
                <form method="post">
                    <div class="queryform">
                        <h5><b>How to order food ?</h5>
                        <input type="submit" name="submit4" value="HELP" id="yts" ><br><br>
                    </div><br>
                </form>
                <form method="post">
                    <div class="queryform">
                        <h5><b>How to Report Fraud ?</b></h5>
                        <input type="submit" name="submit1" value="HELP" id="yts" ><br><br>
                    </div><br>
                </form>
                <form method="post">
                    <div class="queryform">
                        <h5><b>How to get an idea about using this Application ?</b></h5>
                        <input type="submit" name="submit2" value="HELP" id="yts" ><br><br>
                    </div><br>
                </form>
                
            </div>
        </div>
        <!--simple chat system ends here-->
        <br><br>
        <!--query form starts here-->
        <div class="container">
            <div id="otherhelp" class="queryform">
                <h2 class="querycolor">
                    <center>GET HELP</center>
                </h2>
                <form action="save_data.php" method="post"><br>
                    <div class="form-group">
                        <input type="name" class="form-control" id="name" name="username" placeholder="Enter Username" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="num" name="mobile" placeholder="Enter Mobile Number" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="ques" placeholder="Enter Query..." required>
                    </div>
                    <div class="form-group">
                        <textarea rows="7" cols="55" placeholder="Description about your Query..." class="form-control" name="description" required></textarea>
                    </div>
                    <input type="submit" name="help_submit" value="GET HELP" id="yts" ><br><br>
                </form>
            </div>
        </div>
        <!--query form ends here-->
        <br>
        <p id="goback1"><i class="far fa-hand-point-up"></i><a href="#fquery">Frequent Queries</a></p>
    </body>
    <?php include('footer.php')?>
</html>
