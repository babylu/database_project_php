<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$con = mysql_connect("localhost:8889","root","root");
if(!$con)
{
    die('could not connect:' . mysql_error);
}
mysql_select_db("e-commerce",$con);
$sql="INSERT INTO customer (customer_id,name,address_street,address_city,address_state,address_zipcode,password)
    VALUES('$_POST[username]','$_POST[name]','$_POST[address_street]','$_POST[address_city]','$_POST[address_state]','$_POST[address_zipcode]','$_POST[password]')";
   if (!mysql_query($sql,$con))
   {
       die ('error:' . mysql_error());
       
   }
   echo "<script>alert('register success')</script>";
   mysql_close($con)
   ?>