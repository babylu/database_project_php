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
<script src="../js/jquery-1.9.0.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="../css/common.css" type="text/css">
<link href="../css/admin.css" rel="stylesheet" type="text/css"/>
<script src="../js/admin.js" type="text/javascript"></script>
</head>
<body>
    <div class="mainPart">
        <div class="header">
            <img class="title" alt="title" src="../img/title.jpg">
            <div class="option">
                <div id="username" class="username"><a href="./logIn.php">Log Out</a></div>
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
                <div id="navHead" class="navHead" style="display:block">
                    <div id="navHead" class="navHead" style="display:block">
                    <input type="radio" name="StoreOption" id="view" value="view" checked="">View
                    <input type="radio" name="StoreOption" id="add" value="add">Add
                    <input type="radio" name="StoreOption" id="modify" value="modify">Modify
                </div>
                </div>
<!--        show view inventory part     -->
<div id="viewOption">
            <div class="search">
               
   
                <label style="margin-left: 15px;">Find product information</label>
                                <div class="searchPro" >
                                    <input type="text" name="product_name" value="" placeholder=" Type product name">
                                    <button class="buttonStyle">Search </button>
                                </div>
                    
             
            </div>
                <div class="showForm">
                    <center>
                        <table class="viewTable">
                            
                            <thead>
                                <tr>
                                    <th >ID</th>
                                    <th >Name</th>
                                    <th >Amount</th>
                                    <th >Price</th>
                                    <th >Category</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tr>
                                <?php
                                $con = mysql_connect("localhost","root","root");
                                if (!$con){
                                    die('Could not connect: ' . mysql_error());
                                }
                                mysql_select_db("e-commerce", $con);
                                $result = mysql_query("select * from product");
                                while($row = mysql_fetch_array($result)){
                                    echo"<tr><td>" . htmlentities($row["product_id"]) . "</td>";
                                    echo"<td>" . htmlentities($row["name"]) . "</td>";
                                    echo"<td>" . htmlentities($row["amount"]) . "</td>";
                                    echo"<td>" . htmlentities($row["price"]) . "</td>";
                                    echo"<td>" . htmlentities($row["kind"]) . "</td>";                                 
                                    echo "</tr>";
                                }
                                mysql_close($con);
                             ?>
                                
                                
                            </tr>
                          
                        </table>
                        
                    </center>
                
                    
                </div>
    </div>
<!--            show add inventory part-->
<div id="addOption">
    <div class="showTable">                     
                         <center>
                <form name="addInventory" action="" method="POST">
                    <div class="addform">
                    <label>Category:</label>
                    <select name="product_kind" style="width:80px;">
                                        <option></option>
                                    </select></br>
                    </div>
                    
                    <input type="hidden" name="product_id" value="" />
                    <div class="addform">
                                <label>Product Name:</label>
                                    <input type="text" name="InventoryName" value=""></br>
                    </div>
                    <div class="addform">
                                <label>Product Price:</label>
                                <input type="text" name="price" value=""></br>
                    </div>
                    <div class="addform>"
                                <label>Add Amount:</label>
                        <input type="text" name="amount" value="" style="width: 30px;height: 20px;"></br>
                    </div>       
                                
                    </br>               
                                
                     <div class="addform">               
                    <input type="submit" value="Add Inventory" class="buttonStyle">
                     </div>           
      
                            
                            
                        </form>
                             </center>
                </div>
</div>

<!--                show modify inventory part-->
<div id="modifyOption">
    <div class="search">
               
   
                <label style="margin-left: 15px;">Find product information</label>
                                <div class="searchPro" >
                                    <input type="text" name="product_name" value="" placeholder=" Type product name">
                                    <button class="buttonStyle">Search </button>
                                </div>
                    
             
            </div>
    <div class="showForm">
                    
                    
                    
                    <center>
                        <table class="viewTable">
                            
                            <thead>
                                <tr>
                                    <th >ID</th>
                                    <th >Name</th>
                                    <th >Amount</th>
                                    <th >Price</th>
                                    <th >Category</th>
                                    <th >Modify</th>
                                    
                                    
                                </tr>
                            </thead>
                            <form name="addInventory" action="" method="POST">
                            <tr>
                                <td>
                                    <label>01</label>
                                </td>
                                <td>
                                    <input type="text" name="name" value="Cheesecake" style="width: 80px;">
                                </td>
                                <td>
                                    <input type="text" name="amount" value="10" style="width: 30px;">
                                </td>
                                <td>
                                    <input type="text" name="price" value="$8" style="width: 30px;">
                                </td>
                                <td>
                                    <select name="Category" style="width:80px;">
                                        <option value="cake">Cake</option>
                                    </select>
                                </td>
                                <td>
                                        <button type="submit" value="change" style="width:50px; height:20px;">change</button>
                                    </td>
                                
                            </tr>
                            </form>
                          
                        </table>
                        
                    </center>
                
    </div>    
                </div>
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

