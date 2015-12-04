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
                                <li><a href="store_main.php"><i class="icon-home"></i>Store Home</a></li>
                                <li class="stick bg-red"><a href="view_region.php"><i class="icon-cart"></i>Region Info</a></li>
                                <li class="stick bg-blue active"><a href="view_store.php"><i class="icon-cart-2"></i>Store Info</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class='span9'>
                        <table class="table striped hovered dataTable" id="dataTables-1">
                            <legend>Store Info</legend>
                            <thead>
                                <tr>
                                    <th class="text-left">Store ID</th>
                                    <th class="text-left">Store Manager</th>
                                    <th class="text-left">Store Name</th>
                                    <th class="text-left">Region</th>
                                    <th class="text-left">Street</th>
                                    <th class="text-left">City</th>
                                    <th class="text-left">State</th>
                                    <th class="text-left">Zip Code</th>
                                    <th class="text-left">Number of Salesman</th>
                                    <th class="text-left">Edit</th>
                                    <th class="text-left">Delete</th>
                                </tr>
                            </thead>
                            <tbody>    
                                <?php
                                    require_once("Includes/db.php");
                                    $result = db::getInstance()->get_all_store();
                                    while($row = mysqli_fetch_array($result)):
                                        echo "<tr><td>" . htmlentities($row["StoreID"]) . "</td>";
                                        echo "<td>" . htmlentities($row["Name"]) . "</td>";
                                        echo "<td>" . htmlentities($row["Store_Name"]) . "</td>";
                                        echo "<td>" . htmlentities($row["Region_Name"]) . "</td>";
                                        echo "<td>" . htmlentities($row["Street"]) . "</td>";
                                        echo "<td>" . htmlentities($row["City"]) . "</td>";
                                        echo "<td>" . htmlentities($row["State"]) . "</td>";
                                        echo "<td>" . htmlentities($row["ZipCode"]) . "</td>";                           
                                        $store_id = $row["StoreID"];
                                        $inresult = db::getInstance()->get_number_of_salesman($store_id);
                                        $inrow = mysqli_fetch_array($inresult);
                                        echo "<td>" . htmlentities($inrow["Employee_Number"]) . "</td>";
                                        mysqli_free_result($inresult);
                                ?>
                                <td>
                                    <form name="editStore" action="edit_store.php" method="GET">
                                        <input type="hidden" name="store_id" value="<?php echo $store_id; ?>"/>
                                        <input type="submit" name="editRegion" value="Edit"/>
                                    </form>
                                </td>
                                <td>
                                    <form name="deleteStore" action="delete_store.php" method="POST">
                                        <input type="hidden" name="store_id" value="<?php echo $store_id; ?>"/>
                                        <input type="submit" name="deleteRegion" value="Delete"/>
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
                        <form name="addStore" action="edit_store.php">
                            <fieldset>
                                <legend>Insert Store</legend>    
                                <input type="submit" value="Insert">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>




