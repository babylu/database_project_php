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
                                $name=$_POST[name];
                                $amount=$_POST[amount];
                                $price=$_POST[price];
                                $kind=$_POST[Category];
                                $product_id=intval($_POST[id]);
                                $sql="UPDATE product SET name=$name,amount=$amount,price=$price,kind=$kind WHERE product_id=$product_id";
                                if(mysql_query($sql)){
                                    echo "<script>alert('modify success')<script>";
                                }else{
                                    echo"<script>window.location.href = 'http://localhost:8888/database_project_php/html/adminStock.php';</script>";
                                }
                                      
?>
