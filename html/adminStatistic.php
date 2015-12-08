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
    ?>
    <script>

		var pieData = [
				{
					value: <?php echo $genderNumberList[0];?>,
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "<?php echo $genderList[0];?>"
				},
				{
					value: <?php echo $genderNumberList[1];?>,
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "<?php echo $genderList[1];?>"
				}

			];

			window.onload = function(){
				var ctx = document.getElementById("gender").getContext("2d");
				window.myPie = new Chart(ctx).Pie(pieData);
			};



	</script>
</body>
</html>



