<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>Admin Statistic</title>
<link rel="stylesheet" href="../css/common.css" type="text/css">
<link href="../css/admin.css" rel="stylesheet" type="text/css"/>
<script src="../chart/Chart.js" type="text/javascript"></script>
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
            <div id="navHead" class="navHead" style="display:block">Statistic</div> 
            <div>
                <center>
                <canvas id="gender" width="300" height="300" style="margin-top: 20px; width: 300px; height: 300px;"></canvas>
                <center>
                <span>Radio of gender in our customers</span>
                <center>
                <canvas id="region" width="300" height="300" style="margin-top: 20px; width: 300px; height: 300px;"></canvas>
                <center>
                <span>Region sale situation</span>
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
        $con = mysql_connect("localhost","root","root");
        if(!$con)
        {
            die('could not connect:' . mysqli_connect_error);
        }
        mysql_select_db("E-commerce", $con);
        
        $sqlSelectFromPersonal = "SELECT gender,count(*) As sum from personal group by gender";
        $resultSelectFromPersonal = mysql_query($sqlSelectFromPersonal);
        $flag = 0;
        while($row =  mysql_fetch_array($resultSelectFromPersonal)){
            $genderList[$flag] = $row[gender];
            $genderNumberList[$flag] = $row[sum];
            $flag = $flag+1;
        }
        
        $flag = 0;
        $result2 = mysql_query("SELECT R.name, sum(product_price) as total
                                FROM  transaction T, salesperson SA, store ST, region R
                                where T.salesperson_id = SA.salesperson_id and SA.store_id = ST.store_id and ST.region_id = R.region_id 
                                group by R.region_id;");
        while($row = mysql_fetch_array($result2)){
            $regionList[$flag] = $row[name];
            $totalList[$flag] = $row[total];
            $flag = $flag+1;
        }
        while($flag == 3){
            $regionList[$flag] = $row[name];
            $totalList[$flag] = $row[total];
        }
    ?>
    <script>
        var genderData = [{
                value: <?php echo $genderNumberList[0];?>,
                color:"#F7464A",
                highlight: "#FF5A5E",
                label: "<?php echo $genderList[0];?>"
            },{
                value: <?php echo $genderNumberList[1];?>,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "<?php echo $genderList[1];?>"
            }];
        
        var regionData = [{
                value: <?php echo $totalList[0];?>,
                color:"#F7464A",
                highlight: "#FF5A5E",
                label: "<?php echo $regionList[0];?>"
            },{
                value: <?php echo $totalList[1];?>,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "<?php echo $regionList[1];?>"
            }];

        window.onload = function(){
            var ctx1 = document.getElementById("gender").getContext("2d");
            window.myPie = new Chart(ctx1).Pie(genderData);
            var ctx2 = document.getElementById("region").getContext("2d");
            window.myPie = new Chart(ctx2).Pie(regionData);
        };

            
	</script>
</body>
</html>



