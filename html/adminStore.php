<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>Admin Store</title>
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
                </div>
                </div>
<!--show view store part-->
                <div id="viewOption">
                    <div class="showForm">                                      
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
                                <tbody>  
                                    <?php
                                    $con = mysql_connect("localhost","root","root");
                                    if (!$con){
                                        die('Could not connect: ' . mysql_error());
                                    }
                                    mysql_select_db("e-commerce", $con);
                                    $result = mysql_query("select * from store");
                                    while($row = mysql_fetch_array($result)){
                                        echo"<tr><td>" . htmlentities($row["store_id"]) . "</td>";
                                        echo"<td>" . htmlentities($row["address_street"]) . "</td>";
                                        echo"<td>" . htmlentities($row["address_city"]) . "</td>";
                                        echo"<td>" . htmlentities($row["address_state"]) . "</td>";
                                        echo"<td>" . htmlentities($row["address_zipcode"]) . "</td>";
                                        echo"<td>" . htmlentities($row["manager_id"]) . "</td>";
                                        echo"<td>" . htmlentities($row["number_salesperson"]) . "</td>";
                                        echo"<td>" . htmlentities($row["region_id"]) . "</td>";
                                        echo "</tr>";
                                    }
                                    mysql_close($con);
                                 ?>
                                </tbody>
                            </table>
                        </center>
                    </div>
                </div>

<!--show add store part-->
            <div id="addOption">
                <div class="showTable"> 
                    <center>
                        <form name="getStore" action="../php/addstore.php" method="POST">
                            <table class="viewTable">
                                <tr>
                                    <td>
                                        <label>Region ID:</label>
                                        <select name="region_id" style="width:80px;">
                                           <?PHP
                                                $con = mysql_connect("localhost","root","root");
                                                if (!$con){
                                                    die('Could not connect: ' . mysql_error());
                                                }
                                                mysql_select_db("E-commerce", $con);
                                                $sql="select region_id from region";
                                                $result=  mysql_query($sql);
                                                while($row=  mysql_fetch_array($result)){
                                                    echo "<option value='". $row[region_id] ."'>".$row[region_id]."</option>";
                                                }
                                            ?>
                                        </select>
                                    </td>
                                    <td>
                                        <label>Street:</label>
                                        <input type="text" name="street" value=""></br>
                                    </td>
                                    <td>
                                        <label>City:</label>
                                        <input type="text" name="city" value=""></br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>State:</label>
                                        <input type="text" name="state" value=""></br> 
                                    </td>
                                    <td>
                                        <label>Zip Code:</label>
                                        <input type="text" name="zipcode" value=""></br>
                                    </td>
                                    <td>
                                        <label>Manager ID:</label>
                                        <select name="manager_id" style="width:80px;">
                                           <?PHP
                                                $con = mysql_connect("localhost","root","root");
                                                if (!$con){
                                                    die('Could not connect: ' . mysql_error());
                                                }
                                                mysql_select_db("E-commerce", $con);
                                                $sqlSelectStore = "select salesperson_id from salesperson";
                                                $resultSelectStore =  mysql_query($sqlSelectStore);
                                                while($row=  mysql_fetch_array($resultSelectStore)){
                                                    echo "<option value='". $row[salesperson_id] ."'>".$row[salesperson_id]."</option>";
                                                }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                            </table>    
                            <br>
                            <button type="submit" class="buttonStyle">Add New Store</button>
                        </form>
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
</body>
</html>

