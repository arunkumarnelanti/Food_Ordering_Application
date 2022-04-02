<?php 
    $con=mysqli_connect("localhost","root","","foodorderingapp");
    if(mysqli_connect_error()){
        echo "<script>
            alert('Could not connect to DataBase');
        </script>";
        exit();
    }
?>