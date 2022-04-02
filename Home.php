<?php 
include('Header.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page || OrderFood...</title>
        <style>
             .detail{
                font-size:25px;
            }
            .detail_info{
                font-size: 18px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <center><h3 class="headcolor">Breakfast @ OrderFood...</h3></center><br><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/bf1.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">IDLY.</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹60</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="IDLY">
                                    <input type="hidden" name="Price" value="60">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Quantity/Plate: 4 Idly / Plate.</li>
                            <li class="detail_info">Restaurent: Udipi Hotel.</li>
                            <li class="detail_info">Location: Secundrabad.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/bf2.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">DOSA.</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹80</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="DOSA">
                                    <input type="hidden" name="Price" value="80">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Quantity/Plate: 1 Dosa / Plate.</li>
                            <li class="detail_info">Restaurent: Raghavendra Hotel.</li>
                            <li class="detail_info">Location: L.B.Nagar.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/bf3.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">PURI.</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹100</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="PURI">
                                    <input type="hidden" name="Price" value="100">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Quantity/Plate: 4 Puri / Plate.</li>
                            <li class="detail_info">Restaurent: SKY Hotel.</li>
                            <li class="detail_info">Location: High-Tech City.</li>
                        </ul>
                    </div> 
                </center>   
            </div><br><hr><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/bf4.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">VADA.</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹60</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="VADA">
                                    <input type="hidden" name="Price" value="60">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Quantity/Plate: 4 Vada / Plate.</li>
                            <li class="detail_info">Restaurent: Vivera Hotel.</li>
                            <li class="detail_info">Location: Secundrabad.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
            <center><h3 class="headcolor">Biryani @ OrderFood...</h3></center><br><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/b1.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">Hyderabadi Biryani.</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹250</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="Hyderabadi Biryani">
                                    <input type="hidden" name="Price" value="250">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Restaurent: Paradise.</li>
                            <li class="detail_info">Location: Secundrabad.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/b2.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">Malabar Biryani.</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹200</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="Malabar Biryani">
                                    <input type="hidden" name="Price" value="200">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Restaurent: Swagath Grand.</li>
                            <li class="detail_info">Location: L.B.Nagar.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/b3.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">Ambur Biryani.</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹170</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="Ambur Biryani">
                                    <input type="hidden" name="Price" value="170">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Restaurent: Dakshin Gardens.</li>
                            <li class="detail_info">Location: Gachibowli.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
            <center><h3 class="headcolor">Breads @ OrderFood...</h3></center><br><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/br2.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">Butter Naan</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹150</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="Butter Naan">
                                    <input type="hidden" name="Price" value="150">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Quantity/Plate: 5 Naans / Plate</li>
                            <li class="detail_info">Restaurent: Paradise.</li>
                            <li class="detail_info">Location: Secundrabad.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/br3.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">Panner Butter Masala</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹290</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="Panner Butter Masala">
                                    <input type="hidden" name="Price" value="290">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Restaurent: Bhalle Bhalle.</li>
                            <li class="detail_info">Location: Secundrabad.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/br4.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">Butter Chicken</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹380</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="Butter Chicken">
                                    <input type="hidden" name="Price" value="380">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Restaurent: Paradise.</li>
                            <li class="detail_info">Location: Secundrabad.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
            <center><h3 class="headcolor">Burgers @ OrderFood...</h3></center><br><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/bu1.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">Veg Ginger Burger</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹150</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="Veg Ginger Burger">
                                    <input type="hidden" name="Price" value="150">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Restaurent: KFC.</li>
                            <li class="detail_info">Location: Secundrabad.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/bu2.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">Aloo Tikki Burger</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹120</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="Aloo Tikki Burger">
                                    <input type="hidden" name="Price" value="120">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Restaurent: Burger King.</li>
                            <li class="detail_info">Location: Chanda Nagar.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/bu3.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">Chicken Burger</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹200</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="Chicken Burger">
                                    <input type="hidden" name="Price" value="200">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Restaurent: KFC.</li>
                            <li class="detail_info">Location: L.B.Nagar.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
            <center><h3 class="headcolor">Pizzza @ OrderFood...</h3></center><br><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/p1.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">Veg Cheese Pizza</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹280</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="Veg Cheese Pizza">
                                    <input type="hidden" name="Price" value="280">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Restaurent: Pizza Hut.</li>
                            <li class="detail_info">Location: Secundrabad.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/p2.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">Chicken Pizza</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹300</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="Chicken Pizza">
                                    <input type="hidden" name="Price" value="300">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Restaurent: Dominos.</li>
                            <li class="detail_info">Location: Chanda Nagar.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
            <center><h3 class="headcolor">Deserts @ OrderFood...</h3></center><br><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/d1.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">Butterscotch Icecream</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹150</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="Butterscotch Icecream">
                                    <input type="hidden" name="Price" value="150">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Restaurent: Scoobs.</li>
                            <li class="detail_info">Location: Banjara Hills.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/d2.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">Strawberry Icecream</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹130</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="Strawberry Icecream">
                                    <input type="hidden" name="Price" value="130">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Restaurent: Dakshin Gardens.</li>
                            <li class="detail_info">Location: Chanda Nagar.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/d3.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">Double Ka Meeta</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹170</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="Double Ka Meeta">
                                    <input type="hidden" name="Price" value="170">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Restaurent: Paradise.</li>
                            <li class="detail_info">Location: Secundrabad.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
            <div class="row">
                <center>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <form action="ManageOrders.php" method="POST">
                            <div>
                                <img class="shop-item-image" src="images/d4.jpg">
                                <div class="product-name" style="text-decoration: none">
                                    <span class="shop-item-title">Kubhanika Meeta</span>
                                </div>
                                <div class="align">
                                    <span class="deal">Prize:</span>&nbsp;
                                    <span class="shop-item-price">₹180</span><br><br>
                                    <button type="submit" name="Add_To_Cart" class="btn btn-success">ADD +</button><br>
                                    <input type="hidden" name="Item_Name" value="Kubhanika Meeta">
                                    <input type="hidden" name="Price" value="180">
                                        </div>
                                    </div>
                                </div><br>
                        </form>
                    <div class="col-lg-6 col-md-6 col-sm-12">  
                        <div class="detail">
                            <b>Details: </b>
                        </div><br>
                        <ul>
                            <li class="detail_info">Restaurent: Paradise.</li>
                            <li class="detail_info">Location: Chanda Nagar.</li>
                        </ul>
                    </div>
                </center>   
            </div><br><hr><br>
        </div>
    </body>
</html>
