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
                    $sql = "UPDATE product Set name=".$_POST['name'].",amout="
                            .$_POST['amount'].",price=".$_POST[price].",kind=".$_POST[Category]."where product_id=".int($_POST[id]);        
                    $referer="http://localhost:8888/database_project_php/adminStock.php";
                    if(mysql_query($sql)){
                        echo "<script>alert('modify success')<script>";
                        echo "<script>window.location.href = 'http://localhost:8888/database_project_php/adminStock.php';</script>"; 
                    }else{
                
                        echo  "<script>alert(\"" . mysqli_error($con) . "\");window.location.href=\"" . $referer . "\";</script>";
                    }
                    ?>