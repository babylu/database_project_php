<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>Admin Employee</title>
<script src="../jquery-2.1.4.js" type="text/javascript"></script>
<link rel="stylesheet" href="../css/common.css" type="text/css">
<link href="../css/admin.css" rel="stylesheet" type="text/css"/>
<script src="../js/admin.js" type="text/javascript"></script>

</head>
<body>  
    <div class="mainPart">
        <div class="header">
            <img class="title" alt="title" src="../img/title.jpg">
            <div class="option">
                <div id="logout" class="username"><a href="./logIn.php">Log Out</a></div>
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
                <div id="navHead" class="navHead" style="display:block">
                    <input type="radio" name="EmpOption" id="view" value="view" checked="">View
                    <input type="radio" name="EmpOption" id="add" value="add">Add
                </div>
                
                <!--show view employee part-->
                <div id="viewOption" >
                    <div class="showForm"> 
                        <center>
                            <table class="viewTable">
                                <thead>
                                    <tr>
                                        <th >Email</th>
                                        <th >Name</th>
                                        <th >Street</th>
                                        <th >City</th>
                                        <th >State</th>
                                        <th >Zip Code</th>
                                        <th >Salary</th>
                                        <th >Job Title</th>
                                        <th >Store</th>
                                    </tr>
                                </thead>
                                <tbody>    
                                    <?php
                                        $con1 = mysql_connect("localhost","root","root");
                                        if (!$con1){
                                            die('Could not connect: ' . mysql_error());
                                        }
                                        mysql_select_db("e-commerce", $con1);
                                        $resultSelectFromSalesperson = mysql_query("select * from salesperson");
                                        while($row = mysql_fetch_array($resultSelectFromSalesperson)){
                                            echo"<tr><td>" . htmlentities($row["salesperson_id"]) . "</td>";
                                            echo"<td>" . htmlentities($row["name"]) . "</td>";
                                            echo"<td>" . htmlentities($row["address_street"]) . "</td>";
                                            echo"<td>" . htmlentities($row["address_city"]) . "</td>";
                                            echo"<td>" . htmlentities($row["address_state"]) . "</td>";
                                            echo"<td>" . htmlentities($row["address_zipcode"]) . "</td>";
                                            echo"<td>" . htmlentities($row["salary"]) . "</td>";
                                            echo"<td>" . htmlentities($row["job_title"]) . "</td>";
                                            echo"<td>" . htmlentities($row["store_id"]) . "</td>";
                                            echo "</tr>";
                                        }
                                        mysql_close($con);
                                    ?>
                                </tbody>
                            </table>
                        </center>
                    </div>
                </div>
                <!-- show add employee part-->
                <div id="addOption" >
                    <div class="showTable">            
                        <center>
                            <form name="getemployee" action="../php/addemployee.php" method="POST">
                                <table class="viewTable">
                                   <tr>
                                       <td>
                                           <label>Email:</label>           
                                           <input type="email" name="salesman_email" value=""></br>
                                       </td>
                                       <td>
                                           <label>Name:</label>
                                           <input type="text" name="salesman_name" value=""></br>
                                       </td>
                                       <td>
                                           <label>Street:</label>
                                           <input type="text" name="street" value=""></br>
                                       </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>City:</label>
                                            <input type="text" name="city" value=""></br>
                                        </td>
                                        <td>
                                            <label>State:</label>
                                            <input type="text" name="state" value=""></br> 
                                        </td>
                                        <td>
                                            <label>Zip Code:</label>
                                            <input type="text" name="zipcode" value=""></br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Job Title:</label>
                                            <select name="job_title" style="width:100px;">
                                                <option value='salesperson'>salesperson</option>
                                                <option value='salesperson'>manager</option>
                                            </select>
                                        </td>
                                        <td>
                                            <label>Salary:</label>
                                            <input type="text" name="salary" value=""></br> 
                                        </td>
                                        <td>
                                            <label>Store Id:</label>
                                            <select name="store_id" style="width:80px;">
                                                <option value=""></option>
                                                <?PHP
                                                //add select option
                                                    $con2 = mysql_connect("localhost","root","root");
                                                    if (!$con2){
                                                        die('Could not connect: ' . mysql_error());
                                                    }
                                                    mysql_select_db("E-commerce", $con2);

                                                    $sql="select store_id from store";
                                                    $resultSelectFromStore =  mysql_query($sql);
                                                    while($row =  mysql_fetch_array($resultSelectFromStore)){
                                                        echo "<option value='" . $row["store_id"] . "'>" . $row["store_id"] . "</option>";
                                                    }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                </table>    
                                </br>
                                <button type="submit" class="buttonStyle">Add New Employee</button>
                            </form>
                         </center>           
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div>Copyright &copy; Delicious Dessert Inc. All Right Reserved.</div>
            <div>ADDRESS: 4200 Fifth Ave, Pittsburgh, PA 15213</div>
            <div>EMAIL: DeliciousDessertInc@gmail.com</div>
            <div>PHONE: 412-***-****</div>
        </div>
    </div>
</body>
</html>
