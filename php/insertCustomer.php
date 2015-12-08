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

if(preg_match("/[0-9]+/",$_POST[address_Zipcode]) == 0 || strlen($_POST[address_Zipcode])!=5){
    echo "<script>alert('Zipcode input error!');</script>";
    echo "<script>window.history.go(-1);</script>";
    exit();
}

if($_POST[type] == "home"){
    if($_POST[age]==''){
        echo "<script>alert('Please input your age!');</script>";
        echo "<script>window.history.go(-1);</script>";
        exit();
    }
    if($_POST[income]==''){
        echo "<script>alert('Please input your income!');</script>";
        echo "<script>window.history.go(-1);</script>";
        exit();
    }
    if(preg_match("/[0-9]+/",$_POST[age]) == 0 || intval($_POST[age])>999){
        echo "<script>alert('age input error!');</script>";
        echo "<script>window.history.go(-1);</script>";
        exit();
    }
    if(preg_match("/[0-9]+/",$_POST[income]) == 0 || intval($_POST[income])<0){
    echo "<script>alert('income input error!');</script>";
    echo "<script>window.history.go(-1);</script>";
    exit();
}
}else{
    if($_POST[category]==''){
        echo "<script>alert('Please input your company's category!');</script>";
        echo "<script>window.history.go(-1);</script>";
        exit();
    }
    if($_POST[annualIncome]==''){
        echo "<script>alert('Please input your annual income!');</script>";
        echo "<script>window.history.go(-1);</script>";
        exit();
    }
}


$con = mysqli_connect("localhost:8889","root","root","e-commerce");
$_POST;
if(!$con)
{
    die('could not connect:' . mysqli_connect_error);
}

$sql="INSERT INTO customer (customer_id,name,address_street,address_city,address_state,address_zipcode,password,kind)
    VALUES('$_POST[username]','$_POST[name]','$_POST[address_street]','$_POST[address_city]','$_POST[address_state]','$_POST[address_Zipcode]','$_POST[password]','$_POST[type]');";
$sql .="INSERT INTO personal (customer_id,marriage,gender,age,income)
    VALUES('$_POST[username]','$_POST[marriageStatue]','$_POST[gender]','$_POST[age]','$_POST[income]')";

$sql1="INSERT INTO customer (customer_id,name,address_street,address_city,address_state,address_zipcode,password,kind)
    VALUES('$_POST[username]','$_POST[name]','$_POST[address_street]','$_POST[address_city]','$_POST[address_state]','$_POST[address_Zipcode]','$_POST[password]','$_POST[type]');";
$sql1 .="INSERT INTO business (customer_id,category,gross_income)
    VALUES('$_POST[username]','$_POST[category]','$_POST[annualIncome]')";

$referer = "http://localhost:8888/database_project_php/html/register.html";
if($_POST[type]=='home'){
    if (mysqli_multi_query($con, $sql)) { 
        session_start();
        $_SESSION['customer_id']= $_POST[username];
        $_SESSION['username']= $_POST[name];
        echo "<script>alert('register success');</script>";
        echo "<script>window.location.href = 'http://localhost:8888/database_project_php/index.php';</script>";
    } else {
        echo "<script>alert(\"" . mysqli_error($con) . "\");window.location.href=\"" . $referer . "\";</script>";
    }
}else {
    if (mysqli_multi_query($con, $sql1)) {
        session_start();
        $_SESSION['customer_id']= $_POST[username];
        $_SESSION['username']= $_POST[name];
        echo "<script>alert('register success');</script>";
        echo "<script>window.location.href = 'http://localhost:8888/database_project_php/index.php';</script>"; 
    } else {
        echo  "<script>alert(\"" . mysqli_error($con) . "\");window.location.href=\"" . $referer . "\";</script>";
    }
}
$con=null;
  
 ?>
