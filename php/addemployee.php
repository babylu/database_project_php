<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$con = mysql_connect("localhost","root","root");
if(!$con)
{
    die('could not connect:' . mysqli_connect_error);
}
mysql_select_db("E-commerce", $con);


//input control
if($_POST[salesman_email]==''){
    echo "<script>alert('Please input your email!');</script>";
    echo "<script>window.history.go(-1);</script>";
    exit();
}
if($_POST[salesman_name]==''){
    echo "<script>alert('Please input your name!');</script>";
    echo "<script>window.history.go(-1);</script>";
    exit();
}
if(preg_match("/[0-9]+/",$_POST[zipcode]) == 1 && strlen($_POST[zipcode])!=5){
    echo "<script>alert('Zipcode input error!');</script>";
    echo "<script>window.history.go(-1);</script>";
    exit();
}
if(preg_match("/[0-9]+/",$_POST[salary]) == 1 && strlen($_POST[zipcode])!=10){
    echo "<script>alert('Salary input error!');</script>";
    echo "<script>window.history.go(-1);</script>";
    exit();
}
$sqlSelectFromSaleperson = "SELECT salesperson_id FROM salesperson;";
$resultSelectFromSaleperson = mysql_query($sqlSelectFromSaleperson);
while($row =  mysql_fetch_array($resultSelectFromSaleperson)){
    if($_POST[salesman_email] == $row["salesperson_id"]){
        echo "<script>alert('This email has been used. Please try other one!');</script>";
        echo "<script>window.history.go(-1);</script>";
        exit();
    }
}

$sqlInsertSalesperson="INSERT INTO salesperson (salesperson_id,name,address_street,address_city,address_state,address_zipcode,email,job_title,salary,store_id)
      values ('$_POST[salesman_email]','$_POST[salesman_name]','$_POST[street]','$_POST[city]','$_POST[state]','$_POST[zipcode]','$_POST[salesman_email]','$_POST[job_title]','$_POST[salary]','$_POST[store_id]')";

$referer = "http://localhost:8888/database_project_php/html/adminEmployee.php";
if (mysql_query($sqlInsertSalesperson)) {  
    echo "<script>alert('add success');</script>";
    echo "<script>window.location.href = 'http://localhost:8888/database_project_php/html/adminEmployee.php';</script>";
} else {
    echo "<script>alert(\"" . mysqli_error($con) . "\");window.location.href=\"" . $referer . "\";</script>";
}


?>