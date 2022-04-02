<?php
    require('connection.php');
    session_start();

    #php code for Fraud reporting
    if(isset($_POST['fraud_submit']))
    {
        $query_1="INSERT INTO `store_data`(`user_name`, `mobile`, `fraud`, `fraud_city`, `f_message`) VALUES ('$_POST[username]','$_POST[mobile]','$_POST[fraud]','$_POST[fraudcity]','$_POST[fmessage]')";
        $result=mysqli_query($con, $query_1);
        if($result){
            echo "<script>
                alert('Reported Fraud Successfully');
                window.location.href='Home.php';  
            </script>";
        }
        else
        {
            echo "<script>
                alert('Problem Exists to Report Fraud');
                window.location.href='Home.php';  
            </script>";
        }
    }

    #php code for Help
    if(isset($_POST['help_submit']))
    {
        $query_2="INSERT INTO `store_help`(`user_name`, `mobile`, `ques`, `description`) VALUES ('$_POST[username]','$_POST[mobile]','$_POST[ques]','$_POST[description]')";
        $result=mysqli_query($con, $query_2);
        if($result){
            echo "<script>
                alert('Query Submitted Successfully');
                alert('Experts will contact soon');
                window.location.href='Home.php';  
            </script>";
        }
        else
        {
            echo "<script>
                alert('Problem Exists to Contacting expert');
                window.location.href='Home.php';  
            </script>";
        }
    }

    #php code for Donate Food
    if(isset($_POST['donate_submit']))
    {
        $query_3="INSERT INTO `store_donate`(`user_name`, `mobile`, `address`) VALUES ('$_POST[username]','$_POST[mobile]','$_POST[address]')";
        $result=mysqli_query($con, $query_3);
        if($result){
            echo "<script>
                alert('Thank you for donating to poor');
                alert('Delivery Boy comes to take food');
                window.location.href='Home.php';  
            </script>";
        }
        else
        {
            echo "<script>
                alert('Problem Exists to Donating');
                window.location.href='Home.php';  
            </script>";
        }
    }
?>