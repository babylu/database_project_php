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
                $store_id=date(ymdhis);
                mysql_select_db("e-commerce", $con);
                $sql="INSERT INTO store (store_id,address_street,address_city,address_state,address_zipcode)
                    values('$store_id','$_POST[street]','$_POST[city]','$_POST[state]','$_POST[zipcode]')";
                if(mysql_query($sql)){
                   echo "<script>alert('store added');</script>";
                   echo "<script>window.location.href = 'http://localhost:8888/database_project_php/html/adminStore.php';</script>";
                }else{
                   echo "<script>alert('store added failed');</script>".mysql_error();
                }
                mysql_close();  
                   