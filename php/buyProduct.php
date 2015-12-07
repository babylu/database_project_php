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
         

                session_start();
                $customer_id=$_SESSION['customer_id'];
                $number = intval($_POST['number']);
                $product_id =intval($_POST['product_id']);
                $ordernumber = (int)date(ydmhis);
                $sqlSelectFromProduct = "select * from product where product_id=$product_id";
                $result=mysqli_query($con, $sqlSelectFromProduct);
                while($row =  mysqli_fetch_array($result)){
                    echo "<script>alert('success');</script>";
                    if($row['amount']>0){
                        $price = $row['price'] * $number;
                        echo "<script>alert('$price');</script>";
                    }else{
                        echo "<script>alert('product sold out');</script>";
                        exit();
           } 
           
   }            
                $referer="http://localhost:8888/database_project_php/index.php";
                $sqlUpdateTransaction = "INSERT INTO transaction(order_number,product_price,product_quantity,product_id,customer_id)"
                        ."VALUES ('$ordernumber','$price','$number','$product_id','$customer_id')";
                $sqlUpdateProduct ="UPDATE product set amount=amount-$number where product_id=$product_id;";
                if(mysqli_query($con,$sqlUpdateTransaction)){
                   echo "<script>alert('Buy success');</script>";
                   echo "<script>window.location.href = 'http://localhost:8888/database_project_php/index.php';</script>";
                }else{
                   echo  "<script>alert(\"" . mysqli_error($con) . "\");window.location.href=\"" . $referer . "\";</script>";
                }
                if(mysqli_query($con, $sqlUpdateProduct)){
                    echo "<script>alert('product update success');</script>";
                    
                }else{
                    echo  "<script>alert(\"" . mysqli_error($con) . "\");window.location.href=\"" . $referer . "\";</script>";
                }
?>