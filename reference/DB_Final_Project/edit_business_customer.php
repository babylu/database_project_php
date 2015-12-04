<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php

    require_once("Includes/db.php");
    $IsEmpty = false;
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

     if ($_POST['business_name'] == ""||$_POST['business_category'] == ""||$_POST['company_gross_annual_income'] == ""||$_POST['street_name'] == "" ||$_POST['city'] == "" ||$_POST['zip_code'] == "") {
        $IsEmpty = true;
    }

    else if ($_POST['customer_id'] == "") {
        db::getInstance()->insert_business_customer($_POST['business_name'], $_POST['business_category'], $_POST['company_gross_annual_income'], $_POST['street_name'], $_POST['city'], $_POST['zip_code'],$_POST['state']);
        header('Location: view_business_customer.php');
        exit;
    } 
    else if ($_POST['customer_id'] != "") {
        db::getInstance()->update_business_customer($_POST['customer_id'], $_POST['business_name'], $_POST['business_category'], $_POST['company_gross_annual_income'], $_POST['street_name'], $_POST['city'], $_POST['zip_code'],$_POST['state']);
        header('Location: view_business_customer.php');
        exit;
    }
}
?>
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
                                <li class="title">Search</li>
                                <li><a href="customer_main.php"><i class="icon-search"></i>Find Customer</a></li>
                                <li class="title">View</li>
                                <li class="stick bg-red "><a href="view_home_customer.php"><i class="icon-user-3"></i>Home Type</a></li>
                                <li class="stick bg-green active"><a href="view_business_customer.php"><i class="icon-user-2"></i>Business Type</a></li>
                                
                            </ul>
                        </nav>
                    </div>
                    <div class='span8'>
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == "POST")
                            $business_customer = array("customer_id" => $_POST['customer_id'],
                                "business_name" => $_POST['business_name'],
                                "business_category" => $_POST['business_category'],
                                "company_gross_annual_income" => $_POST['company_gross_annual_income'],
                                "street_name" => $_POST['street_name'],
                                "city" => $_POST['city'], 
                                "zip_code" => $_POST['zip_code']
                                );
                        else if (array_key_exists("customer_id", $_GET)){
                            $business_customer = mysqli_fetch_array(db::getInstance()->get_business_customer_by_id($_GET['customer_id']));
                        } else{
                            $business_customer = array("CustomerID" => "",
                                        "Name" => "",
                                        "Business_Category" => "",
                                        "GrossAnnualIncome" => "",
                                        "Street" => "",
                                        "City" => "",
                                        "State" => "",
                                        "ZipCode" => "");
                        }

                        ?>
                        <form name="getbusinesscustomer" action="edit_business_customer.php" method="POST">
                            <fieldset>
                                <legend>Edit Business Customer</legend>
                                <input type="hidden" name="customer_id" value="<?php echo $business_customer['CustomerID']; ?>" />
                                Name:</br>
                                <div class="input-control text" data-role="input-control" >
                                    <input type="text" name="business_name" value="<?php echo $business_customer['Name']; ?>">
                                    <button class="btn-clear" tabindex="-1"></button>
                                </div>
                                Category:</br>
                                <div class="input-control text" data-role="input-control">
                                    <input type="text" name="business_category" value="<?php echo $business_customer['Business_Category']; ?>">
                                    <button class="btn-clear" tabindex="-1"></button>
                                </div>
                                Income:</br>
                                <div class="input-control text" data-role="input-control">
                                    <input type="text" name="company_gross_annual_income" value="<?php echo $business_customer['GrossAnnualIncome']; ?>">
                                    <button class="btn-clear" tabindex="-1"></button>
                                </div>
                                Street:</br>
                                <div class="input-control text" data-role="input-control">
                                    <input type="text" name="street_name" value="<?php echo $business_customer['Street']; ?>">
                                    <button class="btn-clear" tabindex="-1"></button>
                                </div>
                                City:</br>
                                    <div class="input-control select" data-role="input-control">
                                        <select name="city">
                                            <option><?php echo $business_customer['City']; ?></option>
                                            <?php
                                            require_once("Includes/db.php");
                                            $result = db::getInstance()->get_all_city();
                                            while ($row = mysqli_fetch_array($result)) {
                                                if ((htmlentities($row["City"])) != $home_customer['City']) {
                                                    echo "<option>" . htmlentities($row["City"]) . "</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                State:</br>
                                    <div class="input-control select" data-role="input-control">
                                        <select name="state">
                                            <option><?php echo $business_customer['State']; ?></option>
                                            <?php
                                            require_once("Includes/db.php");
                                            $result = db::getInstance()->get_all_state();
                                            while ($row = mysqli_fetch_array($result)) {
                                                if ((htmlentities($row["State"])) != $home_customer['State']) {
                                                    echo "<option>" . htmlentities($row["State"]) . "</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                Zip Code:</br>
                                    <div class="input-control text" data-role="input-control">
                                        <input type="text" name="zip_code" value="<?php echo $business_customer['ZipCode']; ?>">
                                        <button class="btn-clear" tabindex="-1"></button>
                                    </div>
                                <input type="submit" value="Save changes">
                                <?php
                                    if($IsEmpty)
                                    echo "Please fill the blank<br/>";
                                ?>
                            </fieldset>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>




