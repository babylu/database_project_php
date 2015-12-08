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
                            $product_id=  intval($_POST[id]);
                            $name=$_POST[name];
                            $amount= intval($_POST[amount]);
                            $price= doubleval($_POST[price]);
                            $kind = $_POST[Category];
                            if($amount<0||$price<0){
                               echo "<script>alert('please provide correct data')<script>";
                               echo "<script>window.location.href = 'http://localhost:8888/database_project_php/html/adminStock.php';</script>";                                
                          }else{
                              
                          
                    $referer="http://localhost:8888/database_project_php/html/adminStock.php";
                    $sql="UPDATE product SET name=$name,amount=$amount,price=$price,kind=$kind WHERE product_id=$product_id";
                    if(mysql_query($sql)){
                        echo "<script>alert('modify success')<script>";
                        echo "<script>window.location.href = 'http://localhost:8888/database_project_php/html/adminStock.php';</script>"; 
                    }else{
                
                        echo "<script>alert(\"" . mysql_error($con) . "\");window.location.href=\"" . $referer . "\";</script>";
                    }
                          }
                    ?>