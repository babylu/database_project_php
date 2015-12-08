<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
                            
$con = mysql_connect("localhost","root","root");
if (!$con){
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("e-commerce", $con);

//input control
if($_POST[name]=="" || $_POST[amount]=="" || $_POST[price]==""){
    echo "<script>alert('Input error!');</script>";
    echo "<script>window.history.go(-1);</script>";
    exit();
}

if(preg_match("/[0-9]+/",$_POST[amount]) == 0 || intval($_POST[amount]) <= 0){
    
    echo "<script>alert('amount input error!');</script>";
    echo "<script>window.history.go(-1);</script>";
    exit();
}
if(preg_match("/[0-9]+/",$_POST[price]) == 0 || intval($_POST[price]) <= 0){
    echo "<script>alert('price input error!');</script>";
    echo "<script>window.history.go(-1);</script>";
    exit();
}

$referer="http://localhost:8888/database_project_php/html/adminStock.php";

$sql="UPDATE product SET name='$_POST[name]',amount='$_POST[amount]',price='$_POST[price]',kind='$_POST[product_kind]' WHERE product_id=$_POST[id]";
if(mysql_query($sql)){
    echo "<script>alert('modify success')</script>";
    echo "<script>window.location.href = '$referer';</script>"; 
}else{
    echo "<script>alert(\"" . mysql_error($con) . "\");window.location.href=\"" . $referer . "\";</script>";
}                         
?>