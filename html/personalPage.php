<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>personal page</title>
<script type="text/javascript" src="../jquery-2.1.4.js"></script>
<script type="text/javascript" src="../js/personalPage.js"></script>
<script type="text/javascript" src="../main.js"></script>
<link rel="stylesheet" href="../css/common.css" type="text/css">
<link rel="stylesheet" href="../css/pageIndex.css" type="text/css">
<link rel="stylesheet" href="../css/personalPage.css" type="text/css">

</head>
<body>
    <div class="mainPart">
        <div class="header">
            <img class="title" alt="title" src="../img/title.jpg">
            <div class="option">
                <div id="link">
                    <div id="username" class="username"><?php
                            session_start();
                            if(array_key_exists('customer_id', $_SESSION)){
                                echo $_SESSION['customer_id'];
                            }
                            else{
                                echo "Login/Register"; 
                            }
                    ?></div>
                </div>
                <input id="searchInput" type="text" placeholder=" search" style='font-size:13px;'>
                <img id="searchIcon" alt="searchIcon" src="../img/searchIcon20.jpeg"  onclick="window.location.href='searchResult.php'">
            </div>
            <ul id="menu" class="menu">
                <li><a href="../index.html">Home</a></li>
                <li><a href="iceCream.php">Ice Creams</a></li>
                <li><a href="cake.php">Cakes</a></li>
                <li><a href="chocolate.php">Chocolates</a></li>
                <li><a href="cookie.php">Cookies</a></li>
            </ul>
        </div>
        <div style="min-height: 900px;">
        <div class="left">
            <div class="menuPersonal">
                <ul>
                    <li id="personalInfoNavi">Personal Info</li>
                    <li id="purchaseHistoryNavi">Purchase History</li>
                </ul>
            </div>
        </div>
        <div class="right">
            <div id="personalInfoPage">
                <center>
                <fieldset>
                    <legend>Personal Info</legend>
                    <form id="personalInfo" class="PersonalInfo">
                        <div>
                            <label>Name: </label>
                            <input type="text" name="name" value="value">
                        </div>
                        <div>
                            <label>Street: </label>
                            <input type="text" name="address_street" value="value">
                        </div>
                        <div>
                            <label>City: </label>
                            <input type="text" name="address_city" value="value">
                        </div>
                        <div>
                            <label>State: </label>
                            <input type="text" name="address_state" value="value">
                        </div>
                        <div>
                            <label>Zipcode: </label>
                            <input type="text" name="address_Zipcode" value="value">
                        </div>
                        <div>
                            <label>User Type: </label>
                            <div class="radio" style="margin-top: 0;margin-bottom: 0;">
                                <input id="homeRadio" type="radio" name="type" value="home" checked="checked">Home
                                <input id="businessRadio" type="radio" name="type" value="business">Business
                            </div>
                        </div>
                        <div id="business">
                            <div>
                                <label>Category: </label>
                                <input type="text" name="category" value="value">
                            </div>
                            <div>
                                <label>Annual Income: </label>
                                <input type="text" name="annualIncome" value="value">
                            </div>
                        </div>
                        <div id="home">
                            <div>
                                <label>Marriage Statue: </label>
                                <div class="radio" style="margin-top: 0;margin-bottom: 0;">
                                    <input type="radio" name="marriageStatue" value="married" checked="checked">Married
                                    <input type="radio" name="marriageStatue" value="single">Single
                                </div>
                            </div>
                            <div>
                                <label>Gender: </label>
                                <div class="radio" style="margin-top: 0;margin-bottom: 0;">
                                    <input type="radio" name="gender" value="Female" checked="checked">Female
                                    <input type="radio" name="gender" value="Male">Male
                                </div>
                            </div>
                            <div>
                                <label>Age: </label>
                                <input type="text" name="age" value="value">
                            </div>
                            <div>
                                <label>Income: </label>
                                <input type="text" name="income" value="value">
                            </div>
                        </div>
                        <button id="updatePersonalInfo">Update</button>
                    </form>
                </fieldset>
                </center>
            </div>
            <div id="purchaseHistoryPage" hidden="hidden">
                <center>
                <fieldset form="purchaseHistory">
                    <legend>Your History</legend>
                    <div class="quantity">
                        <label>Show</label> 
                        <select id="showQuantity">
                            <option value ="10">10</option>
                            <option value ="20">20</option>
                            <option value="30">30</option>
                            <option value="all">all</option>
                        </select>
                        <label>Entities</label> 
                    </div>
                    <table class="itemShowTable">
                        <tr>
                            <th>Order Number</th>
                            <th>Date</th>
                            <th>Salesperson</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td>1278923749</td>
                            <td>2015-1-1</td>
                            <td>Jones</td>
                            <td>Cheese Cake</td>
                            <td>1</td>
                            <td>10.48</td>
                        </tr>
                        <tr>
                            <td>1278923749</td>
                            <td>2015-1-1</td>
                            <td>Jones</td>
                            <td>Cheese Cake</td>
                            <td>1</td>
                            <td>10.48</td>
                        </tr>
                        <tr>
                            <td>1278923749</td>
                            <td>2015-1-1</td>
                            <td>Jones</td>
                            <td>Cheese Cake</td>
                            <td>1</td>
                            <td>10.48</td>
                        </tr>
                        <tr>
                            <td>1278923749</td>
                            <td>2015-1-1</td>
                            <td>Jones</td>
                            <td>Cheese Cake</td>
                            <td>1</td>
                            <td>10.48</td>
                        </tr>
                    </table>
                </fieldset>
                </center>
            </div>
        </div>
        </div>
        <div class="footer">
            <div>Copyright &copy; Delicious Dessert Inc. All Right Reserved.</div>
            <div>ADDRESS: 4200 Fifth Ave, Pittsburgh, PA 15213</div>
            <div>EMAIL: DeliciousDessertInc@gmail.com</div>
            <div>PHONE: 412-***-****</div>
        </div>
    </div>
    <?php

    ?>
</body>
</html>
