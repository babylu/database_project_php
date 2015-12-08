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

if(preg_match("/[0-9]+/",$_POST[zipcode]) == 0 || strlen($_POST[zipcode])!=5){
    echo "<script>alert('Zipcode input error!');</script>";
    echo "<script>window.history.go(-1);</script>";
    exit();
}

$store_id = (int)date(ymdhis);
$sql="INSERT INTO store (store_id,address_street,address_city,address_state,address_zipcode,manager_id,number_salesperson,region_id)
    values('$store_id','$_POST[street]','$_POST[city]','$_POST[state]','$_POST[zipcode]','$_POST[manager_id]',0,'$_POST[region_id]')";
if(mysql_query($sql)){
    echo "<script>alert('store added');</script>";
    echo "<script>window.location.href = 'http://localhost:8888/database_project_php/html/adminStore.php';</script>";
}else{
    echo "<script>alert('store added failed');</script>".mysql_error();
}

mysql_close();  
?>           