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
                                    <th >Username</th>
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
                                <label>Username:</label>           
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
                            <form name="getemployee" action="" method="POST">
                            <thead>
                                <tr>
                                    <th >Name</th>
                                    <th >Username</th>
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
                                <td>
                                    <label>xil129</label>
                                </td>
                                <td>
                                    <input type="text" value="Ivy" style="width: 30px;">
                                </td>
                                
                                <td>
                                    <input type="text" value="3162 Bohem St" style="width: 90px;">
                                </td>
                                <td>
                                    <input type="text" value="Pittsburgh" style="width: 60px;">
                                </td>
                                <td>
                                    <input type="text" value="PA" style="width: 20px;">
                                </td>
                                <td>
                                    <input type="text" value="15213" style="width: 40px;">
                                </td>
                             
                                <td>
                                    <input type="text" value="$34" style="width: 30px;">
                                </td>
                                <td>
                                    <input type="text" value="Student" style="width: 50px;">
                                </td>
                                <td>
                               
                                    <select name="store_region" style="width:80px;">
                                        <option value ="Pittsburgh Area">Pittsburgh Area</option>
                                    </select>
                                    </td>
                                
                                
                            </tr>
                            
                        </table>
                        <input type="submit" value="Save Changes" class="buttonStyle">
                       
                    </center>
        
                 </form>
                    
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
