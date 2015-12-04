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
                                <li class="title">Home</li>
                                <li class="active"><a href="product_main.php"><i class="icon-home"></i>Product Home</a></li>
                                <li class="title">View</li>
                                <li class="stick bg-red"><a href="view_product_face_wash.php"><i class="icon-droplet"></i>Face Wash</a></li>
                                <li class="stick bg-blue"><a href="view_product_moisturizer.php"><i class="icon-sun"></i>Moisturizer</a></li>
                                <li class="stick bg-green"><a href="view_product_eyeshadow.php"><i class="icon-pencil"></i></i>Eye shadow</a></li>
                                <li class="stick bg-yellow"><a href="view_product_lipstick.php"><i class="icon-heart"></i></i>Lip Stick</a></li>
                                <li class="stick bg-brown"><a href="view_product_remover.php"><i class="icon-lab"></i></i>Remover</a></li>
                                <li class="stick bg-violet"><a href="view_product_fragrance.php"><i class="icon-gift"></i>Fragrance</a></li>
                            </ul>
                            </ul>
                        </nav>
                    </div>
                    <div class='span8'>
                        <form name="getproduct" action="getproduct.php">
                            <fieldset>
                                <legend>Product Info</legend>
                                <label>Find product information</label>
                                <div class="input-control text" data-role="input-control">
                                    <input type="text" name="name" value="" placeholder="type product name">
                                    <button class="btn-clear" tabindex="-1"></button>
                                </div>
                                <input type="submit" value="Go">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
