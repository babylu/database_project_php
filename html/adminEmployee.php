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
                    <input type="radio" name="EmpOption" id="modify" value="modify">Modify
                </div>
                
<!--                show view employee part-->
                <div id="viewOption" >
            <div class="search">
                    <label style="margin-left: 15px;">Find Employee information</label>
                                <div class="searchEmp" >
                                    <input type="text" name="employee_name" value="" placeholder=" Type employee name">
                                    <button class="buttonStyle">Search </button>
                                </div>
            </div>
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
                            <tr>
                                
                                <?php
                                $con = mysql_connect("localhost","root","root");
                                if (!$con){
                                    die('Could not connect: ' . mysql_error());
                                }
                                mysql_select_db("e-commerce", $con);
                                $result = mysql_query("select * from salesperson");
                                while($row = mysql_fetch_array($result)){
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
                                
                            </tr>
                            <tbody>    
                                
                                
                                
                            </tbody>
                        </table>
                        
                    </center>
                
                    
                </div>
                    </div>
<!--                show add employee part-->
<div id="addOption" >
    <div class="showTable">
                     
                         <center>
                <form name="getemployee" action="" method="POST">
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
                                <input type="text" name="jobTitle" value=""></br>
                                    </td>
                                    <td>
                                <label>Salary:</label>
                                <input type="text" name="salary" value=""></br> 
                                    </td>
                                    <td>
                                <label>Store Region:</label>
                                    <select name="store_region" style="width:80px;">
                                        <option></option>
                                    </select>
                                    </td>
                                </tr>
                    </table>    
                    </br>
                                <input type="submit" value="Add New Employee" class="buttonStyle">
                                
      
                            
                            
                        </form>
                             </center>
                   
                </div>
</div>
<!--                show modify employee part-->
<div id="modifyOption" >
    <div class="search">
                    <label style="margin-left: 15px;">Find Employee information</label>
                                <div class="searchEmp" >
                                    <input type="text" name="employee_name" value="" placeholder=" Type employee name">
                                    <button class="buttonStyle">Search </button>
                                </div>
            </div>
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
                                    <th >Modify</th>
                                    
                                </tr>
                            </thead>
                            <form name="modifyEmployee" action="" method="POST">
                            <tr>
                                <td>
                                    <label>xil129@pitt.edu</label>
                                </td>
                                <td>
                                    <input type="text" value="Ivy" name="name" style="width: 30px;">
                                </td>
                                
                                <td>
                                    <input type="text" name="address_street" value="3162 Bohem ST" style="width: 90px;">
                                </td>
                                <td>
                                    <input type="text" name="address_city" value="Pittsburgh" style="width: 60px;">
                                </td>
                                <td>
                                    <input type="text" name="address_state" value="PA" style="width: 20px;">
                                </td>
                                <td>
                                    <input type="text" name="address_zipcode" value="15213" style="width: 40px;">
                                </td>
                             
                                <td>
                                    <input type="text" name="salary" value="$34" style="width: 30px;">
                                </td>
                                <td>
                                    <input type="text" name="job_title" value="Student" style="width: 50px;">
                                </td>
                                <td>
                               
                                    <select name="store_region" style="width:80px;">
                                        <option value ="Pittsburgh Area">Pittsburgh Area</option>
                                    </select>
                                    </td>
                                    <td>
                                        <button type="submit" value="change" style="width:50px; height:20px;">change</button>
                                    </td>
                                
                                
                            </tr>
                            </form>
                        </table>
                        
                       
                    </center>
        
                 
                    
                </div>
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
</body>
</html>
