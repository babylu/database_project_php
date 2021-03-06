<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>Delicious INC Home Page</title>
<script type="text/javascript" src="jquery-2.1.4.js"></script>
<script type="text/javascript" src="./jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="main.js"></script>
<script type="text/javascript" src="./js/searchItem.js"></script>
<link rel="stylesheet" href="./css/nivo-slider.css" type="text/css">
<link rel="stylesheet" href="./css/common.css" type="text/css">
<link rel="stylesheet" href="./css/pageIndex.css" type="text/css">
<link href="themes/default/default.css" rel="stylesheet" />
</head>
<body>
    <div class="mainPart">
        <div class="header">
            <img class="title" alt="title" src="./img/title.jpg">
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
                <input id="searchInput" type="text" placeholder="search" style='font-size:13px;'>
                <img id="searchIcon" alt="searchIcon" src="./img/searchIcon20.jpeg">
            </div>
            <ul id="menu" class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="html/iceCream.php">Ice Creams</a></li>
                <li><a href="html/cake.php">Cakes</a></li>
                <li><a href="html/chocolate.php">Chocolates</a></li>
                <li><a href="html/cookie.php">Cookies</a></li>
            </ul>
        </div>
        <div class="body">
            <div class="theme-default">
            <div id="slider" class="nivoSlider">
                <img src="img/cake.jpeg" alt="Img"/>
                <img src="img/cake1.jpg" alt="Img"/>
                <img src="img/cake3.jpg" alt="Img"/>                                
            </div>
        </div>
        <script src="js/jquery-1.9.0.min.js"></script>
        <script src="js/jquery.nivo.slider.js"></script>

        <script type="text/javascript">
            $(window).load(function () {
                $('#slider').nivoSlider();
            });
        </script>
            <div class="category">
                <img src="./img/iceCreamsmall.jpeg" alt="cakesmall" onclick="window.location.href='html/iceCream.php'">
                <img src="./img/cakesmall.jpeg" alt="candysmall" onclick="window.location.href='html/cake.php'">
                <img src="./img/chocolatesmall.jpeg" alt="chocolatesmall" onclick="window.location.href='html/chocolate.php'">
                <img src="./img/cookiesmall.jpeg" alt="cookiesmall" onclick="window.location.href='html/coolie.php'">
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

if($_POST['require']){

    session_destory();
}
?>
</body>
</html>
