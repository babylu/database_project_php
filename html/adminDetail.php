<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>Admin Detail</title>
<link rel="stylesheet" href="../css/common.css" type="text/css">
<link href="../css/admin.css" rel="stylesheet" type="text/css"/>
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
               <div id="navHead" class="navHead" style="display:block">Sales Status</div> 
               
               <div class="aggregation">
                   <fieldset>
                       <legend>Aggregation</legend>
                       <?php
                            $con = mysql_connect("localhost","root","root");
                            if (!$con){
                                die('Could not connect: ' . mysql_error());
                            }
                            mysql_select_db("E-commerce", $con);
                            $result = mysql_query("select SUM(product_price) from transaction;");
                            while($row = mysql_fetch_array($result)){
                                $sum = htmlentities($row["SUM(product_price)"]);
                            }
                            $result1 = mysql_query("select P.kind
                                                    from transaction T natural join product P 
                                                    group by P.kind 
                                                    having sum(product_price) >= any(
                                                        select sum(product_price) 
                                                        from transaction T natural join product P 
                                                        group by P.kind);");
                            while($row = mysql_fetch_array($result1)){
                                $topKind = htmlentities($row["kind"]);
                            }
                            $result2 = mysql_query("SELECT R.name,sum(product_price) as total
                                                    FROM  transaction T, salesperson SA, store ST, region R
                                                    where T.salesperson_id = SA.salesperson_id and SA.store_id = ST.store_id and ST.region_id = R.region_id 
                                                    group by R.region_id
                                                    HAVING total >= ALL(
                                                            select sum(product_price) 
                                                            FROM transaction T, salesperson SA, store ST, region R
                                                            where T.salesperson_id = SA.salesperson_id and SA.store_id = ST.store_id and ST.region_id = R.region_id 
                                                    );");
                            while($row = mysql_fetch_array($result2)){
                                $topRegion = htmlentities($row["name"]);
                            }
                            $result3 = mysql_query("SELECT name, sum(product_price)
                                                    FROM customer natural join transaction T
                                                    WHERE customer_id in (
                                                            SELECT customer_id FROM business)
                                                    GROUP BY customer_id
                                                    HAVING sum(product_price) >= ALL(
                                                            select sum(product_price) from transaction 
                                                            WHERE customer_id in (
                                                                    SELECT customer_id FROM business) 
                                                            GROUP BY customer_id);");
                            while($row = mysql_fetch_array($result3)){
                                $topBusiness = htmlentities($row["name"]);
                            }
                            $con=null;
                       ?>
                       <form>
<!--         Example for how to show data from database to a label in php
                                <label for="name"><?php echo $name; ?></label>-->
                   <ul>
                   <li>
                       <strong>Total</strong> profit of the products: 
                       <label class="showLabel">$<?php echo $sum ?></label>
                   </li>
                   <li>
                       <strong>Top</strong> product categories:
                       <label class="showLabel"><?php echo $topKind ?></label>
                   </li>
                   <li>
                       <strong>Top</strong> region:
                       <label class="showLabel"><?php echo $topRegion ?></label>
                   </li>
                   <li>
                       <strong>Top</strong> business:
                       <label class="showLabel"><?php echo $topBusiness ?></label>
                   </li>
               </ul>
               </form>
                       </fieldset>
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
    </div>
</body>
</html>

