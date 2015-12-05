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
<link rel="stylesheet" href="../css/common.css" type="text/css">
<link rel="stylesheet" href="../css/pageIndex.css" type="text/css">
</head>
<body>
    <div class="mainPart">
        <div class="header">
            <img class="title" alt="title" src="../img/title.jpg">
            <div class="option">
                <div id="username" class="username"><a href="html/logIn.html">Login/register</a></div>
                <input id="searchInput" type="text" placeholder=" search"style='font-size:13px;'>
                <img id="searchIcon" alt="searchIcon" src="../img/searchIcon20.jpeg">
            </div>
            <ul id="menu" class="menu">
                <li><a href="../index.html">Home</a></li>
                <li><a href="iceCream.php">Ice Creams</a></li>
                <li><a >Cakes</a></li>
                <li><a >Chocolates</a></li>
                <li><a >Cookies</a></li>
            </ul>
        </div>
        <div class="body">
            <center>
                <table class="itemShowTable" border="1">
                    <tr>
                        <th>Item Name</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <th>Operation</th>
                    </tr>
                    <tr>
                        <td>Item Name</td>
                        <td>Stock</td>
                        <td>Price</td>
                        <td>Operation</td>
                    </tr>
                </table>
            </center>
        </div>

        <div class="footer">
            <div>Copyright &copy; Delicious Dessert Inc. All Right Reserved.</div>
            <div>ADDRESS: </div>
            <div>EMAIL: DeliciousDessertInc@gmail.com</div>
            <div>PHONE: 412-***-****</div>
        </div>
    </div>
    <?php

    ?>
</body>
</html>

