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
if($_POST[InventoryName]=="" || $_POST[amount]=="" || $_POST[price]==""){
    echo "<script>alert('Input error!');</script>";
    echo "<script>window.history.go(-1);</script>";
    exit();
}
if(preg_match("/[0-9]+/",$_POST[amount]) == 0 || strlen($_POST[amount]) <= 0){
    echo "<script>alert('amount input error!');</script>";
    echo "<script>window.history.go(-1);</script>";
    exit();
}
if(preg_match("/[0-9]+/",$_POST[price]) == 0 || strlen($_POST[price]) <= 0){
    echo "<script>alert('price input error!');</script>";
    echo "<script>window.history.go(-1);</script>";
    exit();
}


$product_id = (int)date(ymdhis);
$sql="INSERT INTO product(product_id,name,amount,price,kind)
       values('$product_id','$_POST[InventoryName]','$_POST[amount]','$_POST[price]','$_POST[product_kind]')";
if(mysql_query($sql)) { 
    echo "<script>alert('product added');</script>";  
}else{
    echo '<script>alert("product added failed '.mysql_error().'");</script>';
}
echo "<script>window.location.href='http://localhost:8888/database_project_php/html/adminStock.php';</script>";

?>
