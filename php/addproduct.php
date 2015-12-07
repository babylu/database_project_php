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
                $product_id=date(ymdhis);
                $sql="INSERT INTO product (product_id,name,amount,price,kind)"
                    ."values('$product_id','$_POST[InventoryName]','$_POST[amount]','$_POST[price]','$_POST[product_kind]')";
                if(mysql_query($sql)){
                   echo "<script>alert('product added');</script>";
                }else{
                   echo "<script>alert('product added failed');</script>".mysql_error();
                }
                
                   
?>