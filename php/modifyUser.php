<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$customer_id = $_SESSION['customer_id'];
$con = mysqli_connect("localhost:8889","root","root","e-commerce");
$_POST;
if(!$con)
{
    die('could not connect:' . mysqli_connect_error);
}
$sql="update customer set name = '$_POST[name]',address_street='$_POST[address_street]',address_city='$_POST[address_city]',address_state='$_POST[address_state]',address_zipcode='$_POST[address_zipcode]'
        where customer_id='$customer_id';";
$sql .="update personal set marriage='$_POST[marriageStatue]',gender='$_POST[gender]',age='$_POST[age]',income='$_POST[income]'
        where customer_id='$customer_id';";
$sql1="update customer set name = '$_POST[name]',address_street='$_POST[address_street]',address_city='$_POST[address_city]',address_state='$_POST[address_state]',address_zipcode='$_POST[address_zipcode]'
        where customer_id='$customer_id';";
$sql1 .="update business set category='$_POST[category]',gross_income='$_POST[annualIncome]'
        where customer_id='$customer_id';";

if($_POST[type]==home){
    if (mysqli_multi_query($con, $sql)) { 
        echo "<script>alert('modify success');</script>";
        echo "<script>location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
    } else {
        echo "<script>alert(\"" . mysqli_error($con) . "\");window.location.href=\"" . $referer . "\";</script>";
    }
}else {
    if (mysqli_multi_query($con, $sql1)) {
                echo "<script>alert('modify success');</script>";
        echo "<script>location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
    } else {
        echo  "<script>alert(\"" . mysqli_error($con) . "\");window.location.href=\"" . $referer . "\";</script>";
    }
}
?>
