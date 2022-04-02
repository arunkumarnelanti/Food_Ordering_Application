<?php 
 include('Header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders || OrderFood...</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-success ">
                <h1 style="font-family:Berkshire Swash;">MY ORDERS</h1>    
            </div>
            <br><hr><br>
            <div class="col-lg-9">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            //$total=0;
                            if(isset($_SESSION['cart'])){
                                if(isset($_SESSION['cart'])){
                                    foreach($_SESSION['cart'] as $key => $value)
                                    {
                                        $sr=$key+1;
                                        //$total=$total+$value['Price'];
                                        echo"
                                            <tr>
                                                <td>$sr</td>
                                                <td>$value[Item_Name]</td>
                                                <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                                <td>
                                                    <form action='ManageOrders.php' method='POST'>
                                                        <input class='iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                    </form>
                                                </td>
                                                <td class='itotal'></td>
                                                <td>
                                                    <form action='ManageOrders.php' method='POST'>
                                                        <button name='Remove_Item' class='btn btn-sm btn-danger'>REMOVE</button>
                                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                    </form>
                                                </td>
                                            </tr>
                                        ";
                                    }
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-info" style="padding:15px">
                    <h2>Grand Total:</h2>
                    <h3 class="text-right" id="gtotal"></h3><br>
                    <?php
                        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                        {

                    ?>
                    <form action="purchase.php" method="POST">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="Full_Name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="number" name="Mobile_No" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="Address" class="form-control" required>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexRadioDefault2">Cash On Delivery</label>
                            <input class="form-check-input" type="radio" name="Pay_Mode" value="COD" id="flexRadioDefault2" style="height:13px; width:13px;" checked>
                        </div><br>
                        <button class="btn btn-primary btn-block" name="purchase">Make Payment</button>
                    </form>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
<script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');

    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;
    }
    subTotal();
</script>
</body>
</html>