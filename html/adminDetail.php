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
<link rel="stylesheet" href="../css/common.css" type="text/css">
<link href="../css/admin.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="mainPart">
        <div class="header">
            <img class="title" alt="title" src="../img/title.jpg">
            <div class="option">
                <div id="username" class="username"><a href="./logIn.php">Log Out</a></div>
                <input id="searchInput" type="text" placeholder=" search" style='font-size:13px;'>
                <img id="searchIcon" alt="searchIcon" src="../img/searchIcon20.jpeg">
            </div>            
        </div>
        <div class="body">
            <div class="left">
            <div class="menuAdmin">
            <ul>
                <li><a href="adminEmployee.php">Employee</a></li>
                <li><a href="adminStore.php">Store</a></li>
                <li><a href="adminStock.php">Inventory</a></li>
                <li><a href="adminDetail.php">Sales Status</a></li>
                <li><a href="adminStatistic.php">Statistic</a></li>
                
                
            </ul>
            </div>
            </div>
            <div class="right">
               <div id="navHead" class="navHead" style="display:block">Sales Status</div> 
               
               <div class="aggregation">
                   <fieldset>
                       <legend>Aggregation</legend> 
                       <form>
<!--         Example for how to show data from database to a label in php
                                <label for="name"><?php echo $name; ?></label>-->
                   <ul>
                   <li>
                       <strong>Top</strong> profit of the products: 
                       <label class="showLabel">$8888</label>
                   </li>
                   <li>
                       <strong>Top</strong> product categories:
                       <label class="showLabel">Cake</label>
                   </li>
                   <li>
                       <strong>Top</strong> region:
                       <label class="showLabel">Pittsburgh Area</label>
                   </li>
                   <li>
                       <strong>Top</strong> business:
                       <label class="showLabel">UPMC</label>
                   </li>
               </ul>
               </form>
                       </fieldset>
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

    ?>
    </div>
</body>
</html>

