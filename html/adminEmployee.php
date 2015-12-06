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
                
                
                
            </ul>
            </div>
            </div>
            <div class="right">
                <div id="navHead" class="navHead" style="display:block">
                    <input type="radio" name="EmpOption" id="view" value="view" checked="">View
                    <input type="radio" name="EmpOption" id="add" value="add">Add
                    <input type="radio" name="EmpOption" id="modify" value="modify">Modify
                </div>
                <label></label>
<!--                show view employee part-->
                <div id="viewEmp" >
            <div class="search">
                    <label style="margin-left: 15px;">Find Employee information</label>
                                <div class="searchEmp" >
                                    <input type="text" name="employee_name" value="" placeholder=" Type employee name">
                                    <button class="buttonStyle">Search </button>
                                </div>
            </div>
                <div class="showForm">
                    <div class="quantity">
                        <label>Show</label> 
                        <select id="showQuantity">
                            <option value ="10">10</option>
                            <option value ="20">20</option>
                            <option value="30">30</option>
                            <option value="all">all</option>
                        </select>
                        <label>Entities</label> 
                    </div>
                    <center>
                        <table class="viewTable">
                            
                            <thead>
                                <tr>
                                    <th >Name</th>
                                    <th >Email</th>
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
                                <td>Xiyi Li</td>
                                <td>xil129@pitt.edu</td>
                                <td>3162 bohem street</td>
                                <td>Pittsburgh</td>
                                <td>PA</td>
                                <td>15213</td>
                             
                                <td>$1234</td>
                                <td>Student</td>
                                <td>Pittsburgh Area</td>
                                
                            </tr>
                            <tbody>    
                                
                                
                                
                            </tbody>
                        </table>
                        
                    </center>
                
                    
                </div>
                    </div>
<!--                show add employee part-->
<div id="addEmp" >
    <div class="showTable">
                     
                         <center>
                <form name="getemployee" action="editEmployee.php" method="POST">
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
                                <label>Store ID:</label>
                                    <select name="store_id">
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
<div id="modifyEmp" >
    test
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
