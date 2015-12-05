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
$sql="INSERT INTO customer (customer_id,name)
    VALUES('$_POST[username]','$_POST[name]')";
   if (!mysql_query($sql,$con))
   {
       die ('error:' . mysql_error());
       
   }
   echo "1 record added";
   mysql_close($con)
   ?>