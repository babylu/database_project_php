<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$con = mysqli_connect("localhost:8889","root","root","e-commerce");

if(!$con)
{
    die('could not connect:' . mysqli_connect_error());
}
         
$referer="http://localhost:8888/database_project_php/index.php";

//check user login
session_start();
$customer_id=$_SESSION['customer_id'];
if($customer_id==''){
    echo "<script>alert('User Not Login!');</script>";
    echo "<script>location.href = 'http://localhost:8888/database_project_php/html/login.php';</script>";
    exit();
}

//check input number
$number = intval($_POST['number']);
if($number<=0){
    echo "<script>alert('Input Wrong Number!');</script>";
    echo "<script>window.history.go(-1);</script>";
    exit();
}

//check product sold out
$product_id =intval($_POST['product_id']);
$sqlSelectFromProduct = "select * from product where product_id=$product_id";
$result=mysqli_query($con, $sqlSelectFromProduct);
while($row =  mysqli_fetch_array($result)){  
    if($row['amount']<$number){
        echo "<script>alert('Do Not Have Enough Product');</script>";
        echo "<script>window.history.go(-1);</script>";
        exit();
    }
    if($row['amount']>0){
        $price = $row['price'] * $number;       
    }else if($row['amount']==0){
        echo "<script>alert('Product Sold Out');</script>";
        echo "<script>window.history.go(-1);</script>";
        exit();
    }else {
        echo "<script>alert('Database Error');</script>";
        echo "<script>window.history.go(-1);</script>";
        exit();
    }          
}     

//select salesperson
$sqlSelectSalesperson = "select salesperson_id from salesperson where store_id <>''";
$resultSelectSalesperson=mysqli_query($con, $sqlSelectSalesperson);
$flag = 0;
while($row =  mysqli_fetch_array($resultSelectSalesperson)){  
    $salespersonList[$flag] = $row['salesperson_id'];   
    $flag = $flag +1;
}
$position= rand(0,$flag);
$salesperson = $salespersonList[$position];



//everything is right, update database
$ordernumber = date(ydmhis);
$sqlUpdateTransaction = "INSERT INTO transaction(order_number,product_price,product_quantity,product_id,customer_id,salesperson_id)"
        ."VALUES ('$ordernumber','$price','$number','$product_id','$customer_id','$salesperson')";
$sqlUpdateProduct ="UPDATE product set amount = amount-$number where product_id=$product_id;";
if(mysqli_query($con,$sqlUpdateTransaction)){
   echo "<script>alert('Buy success!   Your salesperson is ".$salesperson.".   Order number is ".$ordernumber."');</script>";
   if(mysqli_query($con, $sqlUpdateProduct)){
        echo "<script>alert('product update success');</script>";
        echo "<script>window.location.href = '$referer';</script>";
    }else{
        echo  "<script>alert(\"" . mysqli_error($con) . "\");window.location.href=\"" . $referer . "\";</script>";
    }
}else{
   echo  "<script>alert(\"" . mysqli_error($con) . "\");window.location.href=\"" . $referer . "\";</script>";
}

?>