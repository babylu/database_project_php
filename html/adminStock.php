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
                <div id="username" class="username"><a href="../html/logIn.html">Log Out</a></div>
                <input id="searchInput" type="text" placeholder=" search" style='font-size:13px;'>
                <img id="searchIcon" alt="searchIcon" src="../img/searchIcon20.jpeg">
            </div>            
        </div>
        <div class="body">
            <div class="left">
            <div class="menuAdmin">
            <ul>
                <li><a href="adminEmployee.php">Employee</a></li>
                <li><a href="adminStore.php">Store & Region</a></li>
                <li><a href="adminStock.php">Inventory</a></li>
                <li><a href="adminDetail.php">Sales Status</a></li>
                <li><a href="adminStatistic.php">Statistic</a></li>
                
                
            </ul>
            </div>
            </div>
            <div class="right">
                <div id="navHead" class="navHead" style="display:block">Inventory Information</div>
            
            <div class="search">
               
   
                <label style="margin-left: 15px;">Find product information</label>
                                <div class="searchPro" >
                                    <input type="text" name="product_name" value="" placeholder=" Type product name">
                                    <button class="buttonStyle">Search </button>
                                </div>
                    
             
            </div>
                <div class="showForm">
                    
                    
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
                        <table class="viewTable">
                            
                            <thead>
                                <tr>
                                    <th >ID</th>
                                    <th >Name</th>
                                    <th >Amount</th>
                                    <th >Price</th>
                                    <th >Kind</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tr>
                                <td>01</td>
                                <td>Cheesecake</td>
                                <td>10</td>
                                <td>$8</td>
                                <td>Cake</td>
                                
                                
                            </tr>
                          
                        </table>
                        
                    </center>
                
                    
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
</body>
</html>

