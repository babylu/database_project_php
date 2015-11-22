<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>Hello World!</title>
<script src="jquery-2.1.4.js"></script>
<link rel="stylesheet" href="./css/common.css" type="text/css">
<link rel="stylesheet" href="./css/pageIndex.css" type="text/css">
</head>
<body>
	<div class="mainPart">
		<div class="header">
			<img class="title" src="./img/title.jpg">
			<div class="option">
				<div id="username" class="username">Login/register</div>
				<input id="searchInput" type="text" value="search">
				<img id="searchIcon" src="./img/searchIcon20.jpeg">
			</div>
			<ul id="menu" class="menu">
				<li><a >Home</a></li>
				<li><a >Ice Creams</a></li>
				<li><a >Cakes</a></li>
				<li><a >Chocolates</a></li>
				<li><a >Cookies</a></li>
			</ul>
		</div>
		<div class="body">
			<img src="./img/cake.jpeg" style="width:960px;">
			<div class="category">
				<img src="./img/cakesmall.jpeg">
				<img src="./img/candysmall.jpeg">
				<img src="./img/chocolatesmall.jpeg">
				<img src="./img/cookiesmall.jpeg">
			</div>
		</div>
		
		<div class="footer">
			<div>Copyright &copy; Delicious Dessert Inc. All Right Reserved.</div>
			<div>ADDRESS: </div>
			<div>EMAIL: DeliciousDessertInc@gmail.com</div>
			<div>PHONE: 412-***-****</div>
		</div>
	</div>
        <?php
         echo "<script>alert('success')</script>"
        ?>
    </body>
    <script src="index.js"></script>
</html>
