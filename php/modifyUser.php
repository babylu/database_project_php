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

if(preg_match("/[0-9]+/",$_POST[address_zipcode]) == 0 || strlen($_POST[address_zipcode])!=5){
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
    if(intval($_POST[annualIncome])<0){
        echo "<script>alert('annual income input error!');</script>";
        echo "<script>window.history.go(-1);</script>";
        exit();
    }
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
