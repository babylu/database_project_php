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
                <div id="navHead" class="navHead" style="display:block">Store & Region</div>
            
            <div class="search">
               
   
                <label style="margin-left: 15px;">Find store information</label>
                                <div class="searchStore" >
                                    <input type="text" name="store_id" value="" placeholder=" Type store ID" >
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
                                    <th >Store ID</th>
                                    
                                    <th >Street</th>
                                    <th >City</th>
                                    <th >State</th>
                                    <th >Zip Code</th>
                                   
                                    <th >Manager ID</th>
                                    <th >Total Employee</th>
                                    <th >Region ID</th>
                                    
                                </tr>
                            </thead>
                            <tr>
                                <td>01</td>
                                
                                <td>3162 bohem street</td>
                                <td>Pittsburgh</td>
                                <td>PA</td>
                                <td>15213</td>
                             
                                <td>21</td>
                                <td>50</td>
                                <td>02</td>
                                
                            </tr>
                            <tbody>    
                                
                                
                                
                            </tbody>
                        </table>
                        
                    </center>
                
                    
                </div>
                <div class="search">
               
   
                <label style="margin-left: 15px;">Find store information</label>
                                <div class="searchRegion" >
                                    <input type="text" name="region_name" value="" placeholder=" type region name" >
                                    <button>Search </button>
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
                                    <th >Region ID</th>
                                    <th >Region Name</th>
                                    <th >Manager ID</th>
                                    
                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tr>
                                <td>02</td>
                                <td>Pittsburgh Area</td>
                                <td>21</td>
                                
                                
                                
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

