

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
</head>
<body>
    <div class="mainPart">
        <div class="header">
            <img class="title" alt="title" src="../img/title.jpg">
            <div class="option">
                <div id="username" class="username"><a href="../html/logIn.html">Log Out</a></div>
                <input id="searchInput" type="text" placeholder=" search" style='font-size:13px;'>
                <img id="searchIcon" alt="searchIcon" src="../img/searchIcon20.jpeg">
            </div>            
        </div>
        <div class="body">
            <div class="left">
            <div class="menuAdmin">
            <ul>
                <li><a href="adminEmployee.php">Employee</a></li>
                <li><a href="adminStore.php">Store & Region</a></li>
                <li><a href="adminStock.php">Inventory</a></li>
                <li><a href="adminDetail.php">Sales Status</a></li>
                <li><a href="adminStatistic.php">Statistic</a></li>
                <li><a href="editEmployee.php">Edit Employee</a></li>
                
            </ul>
            </div>
            </div>
            <div class="right">
                <div id="navHead" class="navHead" style="display:block">Add / Delete / Modify Employee Info</div>
                <div class="showTable">
                <form name="getemployee" action="edit_salesman.php" method="POST">
                            
                    <label>Email:</label>           
                    <input type="email" name="salesman_email" value=""></br>

                                <label>Name:</label>
                                <input type="text" name="salesman_name" value=""></br>
                                
                                    
                                
                                <label>Street:</label>
                                <input type="text" name="street" value=""></br>
                                    
                             
                                <label>City:</label>
                                
                                <input type="text" name="city" value=""></br>
                                    
                                
                                <label>State:</label>
                                <input type="text" name="state" value=""></br>
                                  
                                <label>Zip Code:</label>
                                <input type="text" name="zipcode" value=""></br>

                                <label>Email:</label>
                                <input type="text" name="email" value=""></br>

                                <label>Salary:</label>
                                <input type="text" name="salary" value=""></br>
                                    
                                </div>
                                <label>Store ID:</label>
                                    <select name="store_id">
                                        <option><?php echo $salesman['Assigned_Store']; ?></option>
                                        <?php
                                            require_once("Includes/db.php");
                                            $result = db::getInstance()->get_all_store_id();
                                            while($row = mysqli_fetch_array($result)){
                                                if((htmlentities($row["StoreID"]))!= $salesman['Assigned_Store']){
                                                    echo "<option>". htmlentities($row["StoreID"]) ."</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
      
                                <input type="submit" value="Save changes">
                                <?php
                                    if($IsEmpty)
                                    echo "Please fill the blank<br/>";
                                ?>
                            
                        </form>
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

    ?>
        
    </div>
</body>
</html>

