<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>Ice Cream</title>
<script type="text/javascript" src="../jquery-2.1.4.js"></script>
<script type="text/javascript" src="../main.js"></script>
<link rel="stylesheet" href="../css/common.css" type="text/css">
<link rel="stylesheet" href="../css/itemCommon.css" type="text/css">
<link rel="stylesheet" href="../css/pageIndex.css" type="text/css">
</head>
<body>
    <div class="mainPart">
        <div class="header">
            <img class="title" alt="title" src="../img/title.jpg">
            <div class="option">
                <div id="username" class="username">Login/Register</div>
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
        <div class="body">
            <center>
                <fieldset form="iceCreamList">
                    <legend>Ice Cream</legend>
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
                    <center>
                        <table class="itemShowTable">
<!--when use php to generate this table, please ask Emily to do control of word length-->
                            <tr>
                                <th>Item Name</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Buy Number</th>
                            </tr>
                            <tr>
                                <td>Häagen-Dazs Vanilla</td>
                                <td>100</td>
                                <td>$5.99</td>
                                <td>
                                    <input type="text">
                                    <button>Buy</button>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>Häagen-Dazs Pineapple and Coconut</td>
                                <td>100</td>
                                <td>$4.89</td>
                                <td>
                                    <input type="text">
                                    <button>Buy</button>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>Häagen-Dazs Cherry</td>
                                <td>100</td>
                                <td>$5.89</td>
                                <td>
                                    <input type="text">
                                    <button>Buy</button>
                                </td>
                            </tr>
                        </table>
                    </center>
                </fieldset>
            </center>
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

