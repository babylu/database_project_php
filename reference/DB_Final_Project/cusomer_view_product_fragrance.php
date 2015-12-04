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
            <div class="element"><span class="icon-safari"></span></div>
 
            <span class="element-divider"></span>
            <a class="element brand" href="index.php"><span class="icon-eject"></span></a>
            <span class="element-divider"></span>
 
            <div class="element place-right">
                <a class="dropdown-toggle" href="#">
                    <span class="icon-cog"></span>
                </a>
            </div>
            <span class="element-divider place-right"></span>
            <a class="element place-right" href="welcome.php"><span class="icon-home"></span></a>
            <span class="element-divider place-right"></span>
            </nav>
        </nav>
        <div class='container'>
            <h1>
                <a href="javascript:history.go(-1)"><i class="icon-arrow-left-3 fg-active-emerald smaller"></i></a>
                <small class="on-right">Product View</small>
            </h1>

            <div class="grid fluid">
                <div class='row'>
                    <div class="span3">
                        <nav class="sidebar light">
                            <ul>
                                <li class="title">Home</li>
                                <li><a href="customer_view_product.php"><i class="icon-home"></i>Product Home</a></li>
                                <li class="title">View</li>
                                <li class="stick bg-red"><a href="customer_view_product_face_wash.php"><i class="icon-droplet"></i>Face Wash</a></li>
                                <li class="stick bg-blue"><a href="cusomer_view_product_moisturizer.php"><i class="icon-sun"></i>Moisturizer</a></li>
                                <li class="stick bg-green"><a href="cusomer_view_product_eyeshadow.php"><i class="icon-pencil"></i>Eye shadow</a></li>
                                <li class="stick bg-yellow"><a href="cusomer_view_product_lipstick.php"><i class="icon-heart"></i>Lip Stick</a></li>
                                <li class="stick bg-brown"><a href="cusomer_view_product_remover.php"><i class="icon-lab"></i>Remover</a></li>
                                <li class="stick bg-violet active"><a href="cusomer_view_product_fragrance.php"><i class="icon-gift"></i>Fragrance</a></li>  
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
                                    <th class="text-left">Price</th>
                                    <th class="text-left">Picture</th>
                                </tr>
                            </thead>
                            <tbody>    
                                <?php
                                    require_once("Includes/db.php");
                                    $result = db::getInstance()->view_product_Fragrance ();
                                    while($row = mysqli_fetch_array($result)):
                                        echo "<tr><td>" . htmlentities($row["Name"]) . "</td>";
                                        echo "<td>" . htmlentities($row["ProductType"]) . "</td>";
                                        echo "<td>" . htmlentities($row["Base_Price"]) . "</td>";
                                        echo "<td>" . "<img src= DB_pictures/" .$row["ImageFile"].">". "</td></tr>\n";
                                        echo "</td>";

                                ?>
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
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>






