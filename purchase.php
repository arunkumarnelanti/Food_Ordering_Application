<?php
session_start();
$con=mysqli_connect("localhost","root","","foodorderingapp");

if(mysqli_connect_error()){
    echo "<script>
        alert('Cannot connect to DataBase');
        window.location.href='Orders.php';
    </script>";
    exit();
}

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST['purchase']))
        {
            $query1="INSERT INTO `order_manager`(`Full_Name`, `Mobile_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[Full_Name]','$_POST[Mobile_No]','$_POST[Address]','$_POST[Pay_Mode]')";
            if(mysqli_query($con,$query1))
            {
                $Order_Id=mysqli_insert_id($con);
                $query2="INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
                $stmt=mysqli_prepare($con,$query2);
                if($stmt)
                {
                    mysqli_stmt_bind_param($stmt,"isii", $Order_Id, $Item_Name, $Price, $Quantity);
                    foreach($_SESSION['cart'] as $key => $values)
                    {
                        $Item_Name=$values['Item_Name'];
                        $Price=$values['Price'];
                        $Quantity=$values['Quantity'];
                        mysqli_stmt_execute($stmt);
                    }
                    unset($_SESSION['cart']);
                    echo "<p style='padding:50px; color: white; text-align:center; background-color: lightgreen; font-size:50px;border-radius:15px;'>
                        Ordered Placed Successfully
                        <br><br>
                        <a href='Home.php' style='font-size:20px; text-decoration: none; color: blue;'>Order Again</a>
                    </p>";
                }
                else
                {
                    echo "<script>
                        alert('SQL Query Prepare Error');
                        window.location.href='Orders.php';
                    </script>";
                }
            }
            else{
                echo "<script>
                    alert('SQL Error');
                    window.location.href='Orders.php';
                </script>";
            }
        }
    }
?>