<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/prettify/prettify.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>
    <script src="js/prettify/prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>  
    
    <script src="js/docs.js"></script>
    <script src="js/github.info.js"></script>

    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body class="metro">
        <nav class="navigation-bar light">
            <nav class="navigation-bar-content">
            <div class="element"><span class="icon-dashboard"></span></div>
            <span class="element-divider"></span>
            <a class="element brand" href="index.php"><span class="icon-eject"></span></a>
            <span class="element-divider"></span>  
            </div>
            <span class="element-divider"></span>
            <a class="element brand" href="store_main.php">Store</a>
            <a class="element brand" href="employee_main.php">Employee</a>
            <a class="element brand" href="customer_main.php">Customer</a>
            <a class="element brand" href="product_main.php">Product</a>
            <a class="element brand" href="transaction_main.php">Transaction</a>
            <a class="element brand" href="statistics_main.php">Statistics</a>
            <span class="element-divider"></span>
            <span class="element-divider place-right"></span>
            <a class="element place-right" href="welcome.php"><span class="icon-home"></span></a>
            <span class="element-divider place-right"></span>
            <button class="element image-button image-left place-right">
                <?php
                    if (array_key_exists("user", $_SESSION)) {
                    echo $_SESSION['user'];
                    }
                    else {
                        header('Location: index.php');
                        exit;
                    }
                ?>
                <img src="images/default.png"/>
            </button>
            </nav>
        </nav>
        <div class='container'>
            <h1>
                <a href="javascript:history.go(-1)"><i class="icon-arrow-left-2 fg-active-amber smaller"></i></a>
                <small class="on-phone">Cosmetic Store Employee</small>
            </h1>

            <div class="grid fluid">
                <div class='row'>
                    <div class="span3">
                        <nav class="sidebar light">
                            <ul>
                                <li class="title">Search</li>
                                <li class="active"><a href="employee_main.php"><i class="icon-search"></i>Find employee</a></li>
                                <li class="title">View</li>
                                <li class="stick bg-red"><a href="view_region_manager.php"><i class=" icon-user-3"></i>Region Manager</a></li>
                                <li class="stick bg-green"><a href="view_store_manager.php"><i class="icon-user-2"></i>Store Manager</a></li>
                                <li class="stick bg-blue"><a href="view_salesman.php"><i class="icon-user"></i>Salesman</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class='span8'>
                        <table class="table striped hovered dataTable" id="dataTables-1">
                            <?php
                            require_once("Includes/db.php");
                            $result = db::getInstance()->get_salesman_information_by_name($_GET["employee_name"]);
                            if (mysqli_num_rows($result) < 1) {
                                $result = db::getInstance()->get_region_manager_information_by_name($_GET["employee_name"]);
                                if(mysqli_num_rows($result) < 1){
                                    $result = db::getInstance()->get_store_manager_information_by_name($_GET["employee_name"]);
                                    if(mysqli_num_rows($result) < 1){
                                        exit("The person " . htmlentities($_GET["employee_name"]) . " is not found. Please check the spelling and try again");
                                    }
                                    echo "<legend>Store Manager</legend><thead><tr><th class=\"text-left\">name</th><th class=\"text-left\">email</th><th class=\"text-left\">salary</th><th class=\"text-left\">Level</th><th class=\"text-left\">Store ID</th></thead><tbody>";
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr><td>" . htmlentities($row["Name"]) . "</td>";
                                        echo "<td>" . htmlentities($row["Email"]) . "</td>";
                                        echo "<td>" . htmlentities($row["Salary"]) . "</td>";
                                        echo "<td>" . htmlentities($row["Job_Title"]) . "</td>";
                                        echo "<td>" . htmlentities($row["Assigned_Store"]) . "</td></tr>\n";
                                    }
                                    echo "</tbody>";
                                    mysqli_free_result($result);
                                    exit();
                                }
                                echo "<legend>Region Manager</legend><thead><tr><th class=\"text-left\">name</th><th class=\"text-left\">email</th><th class=\"text-left\">salary</th><th class=\"text-left\">Level</th><th class=\"text-left\">Region</th></thead><tbody>";
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr><td>" . htmlentities($row["Name"]) . "</td>";
                                    echo "<td>" . htmlentities($row["Email"]) . "</td>";
                                    echo "<td>" . htmlentities($row["Salary"]) . "</td>";
                                    echo "<td>" . htmlentities($row["Job_Title"]) . "</td>";
                                    echo "<td>" . htmlentities($row["Region_Name"]) . "</td></tr>\n";
                                }
                                echo "</tbody>";
                                mysqli_free_result($result);
                                exit();
                            }
                            echo "<legend>Salesman</legend><thead><tr><th class=\"text-left\">name</th><th class=\"text-left\">email</th><th class=\"text-left\">salary</th><th class=\"text-left\">Level</th><th class=\"text-left\">Store ID</th></thead><tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>" . htmlentities($row["Name"]) . "</td>";
                                echo "<td>" . htmlentities($row["Email"]) . "</td>";
                                echo "<td>" . htmlentities($row["Salary"]) . "</td>";
                                echo "<td>" . htmlentities($row["Job_Title"]) . "</td>";
                                echo "<td>" . htmlentities($row["Assigned_Store"]) . "</td></tr>\n";
                            }
                            echo "</tbody>";
                            mysqli_free_result($result);
                            ?>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
