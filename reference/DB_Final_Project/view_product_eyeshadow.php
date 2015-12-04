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
                                <li><a href="product_main.php"><i class="icon-home"></i>Product Home</a></li>
                                <li class="title">View</li>
                                <li class="stick bg-red"><a href="view_product_face_wash.php"><i class="icon-droplet"></i>Face Wash</a></li>
                                <li class="stick bg-blue"><a href="view_product_moisturizer.php"><i class="icon-sun"></i>Moisturizer</a></li>
                                <li class="stick bg-green active"><a href="view_product_eyeshadow.php"><i class="icon-pencil"></i></i>Eye shadow</a></li>
                                <li class="stick bg-yellow"><a href="view_product_lipstick.php"><i class="icon-heart"></i></i>Lip Stick</a></li>
                                <li class="stick bg-brown"><a href="view_product_remover.php"><i class="icon-lab"></i></i>Remover</a></li>
                                <li class="stick bg-violet"><a href="view_product_fragrance.php"><i class="icon-gift"></i>Fragrance</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class='span9'>
                        <table class="table striped hovered dataTable" id="dataTables-1">
                            <legend>Product Info</legend>
                            <thead>
                                <tr>
                                    <th class="text-left">Name</th>
                                    <th class="text-left">Product Type</th>
                                    <th class="text-left">Basic Price</th>
                                    <th class="text-left">Inventory</th>
                                    <th class="text-left">Image</th>
                                    <th class="text-left">Edit</th>
                                    <th class="text-left">Delete</th>
                                </tr>
                            </thead>
                            <tbody>    
                                <?php
                                    require_once("Includes/db.php");
                                    $result = db::getInstance()->view_product_eyeshadow();
                                        while($row = mysqli_fetch_array($result)):
                                        echo "<tr><td>" . htmlentities($row["Name"]) . "</td>";
                                        echo "<td>" . htmlentities($row["ProductType"]) . "</td>";
                                        echo "<td>" . htmlentities($row["Base_Price"]) . "</td>";
                                        echo "<td>" . htmlentities($row["Inventory"]) . "</td>";
                                        $product_id = $row['ProductID'];
                                        echo "<td>" . "<img src= DB_pictures/" .$row["ImageFile"].">"."</td>\n";
                                ?>
                                <td>
                                    <form name="editProduct" action="edit_product.php" method="GET">
                                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>"/>
                                        <input type="submit" name="editProduct" value="Edit"/>
                                    </form>
                                </td>
                                <td>
                                    <form name="deleteProduct" action="delete_product.php" method="POST">
                                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>"/>
                                        <input type="submit" name="deleteProduct" value="Delete"/>
                                    </form>
                                </td>
                                <?php
                                echo "</tr>\n";
                                endwhile;
                                mysqli_free_result($result);
                                ?>
                            </tbody>
                        </table>
                        <script>
                            $(function(){
                                $('#dataTables-1').dataTable( {
                                    "bProcessing": true,
                                } );
                            });
                        </script>
                        <form name="addProduct" action="edit_product.php">
                            <fieldset>
                                <legend>Insert Product</legend>    
                                <input type="submit" value="Insert">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>