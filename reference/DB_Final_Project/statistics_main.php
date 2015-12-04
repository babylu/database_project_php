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
    <script src="js/jquery/jquery.dataTables.js"></script>
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
                    } else {
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
                                <li class="title">Statistics</li>
                                <li><a href="statistics_main.php"><i class="icon-home"></i>Statistics</a></li>
                                <li class="stick bg-red"><a href="top_chart.php"><i class="icon-rocket"></i>Top Chart</a></li>
                                <li class="stick bg-cyan">
                                    <a class="dropdown-toggle" href="#"><i class="icon-android"></i>Comparison</a>
                                    <ul class="dropdown-menu" data-role="dropdown">
                                        <li><a href="product_compare.php">Product Selling</a></li>
                                        <li class="divider"></li>
                                        <li><a href="salesman_compare.php">Salesman Performance</a></li>
                                        <li class="divider"></li>
                                        <li><a href="store_compare.php">Store Comparison</a></li>
                                        <li class="divider"></li>
                                        <li><a href="region_compare.php">Region Comparison</a></li>
                                        <li class="divider"></li>
                                        <li><a href="customer_compare.php">Customer Comparison</a></li>
                                        <li class="divider"></li>
                                        <li><a href="business_product.php">Business Analysis</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class='span8'>
                        <legend>Show Some Statistics</legend>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


