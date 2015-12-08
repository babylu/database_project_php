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
                $referer="http://localhost:8888/database_project_php/html/adminStock.php";
                if(intval($_POST[amount])>0&&intval($_POST[price])>0){
                $product_id=date(ymdhis);
                
                $sql="INSERT INTO product (product_id,name,amount,price,kind)"
                    ."values('$product_id','$_POST[InventoryName]','$_POST[amount]','$_POST[price]','$_POST[product_kind]')";
                if(mysql_query($sql)){
                   echo "<script>alert('product added');</script>";
//                   echo "<script>window.history.go(-1);</script>";
                }else{
                   echo "<script>alert('product added failed'".mysql_error().");</script>";
                   echo "<script>window.history.go(-1);</script>";
                }
                }else{
                    echo"<script>alert('please provide with correct data');</script>";
                    echo  "<script>alert(\"" . mysqli_error($con) . "\");window.location.href=\"" . $referer . "\";</script>";
                }
                   
?>
