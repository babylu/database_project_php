<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$con = mysqli_connect("localhost:8889","root","root","e-commerce");
if(!$con)
{
    die('could not connect:' . mysqli_connect_error);
}
$sql="INSERT INTO customer (customer_id,name,address_street,address_city,address_state,address_zipcode,password,kind)
    VALUES('$_POST[username]','$_POST[name]','$_POST[address_street]','$_POST[address_city]','$_POST[address_state]','$_POST[address_zipcode]','$_POST[password]','$_POST[type]');";
$sql .="INSERT INTO personal (customer_id,marriage,gender,age,income)
        VALUES('$_POST[username]','$_POST[marriageStatue]','$_POST[gender]','$_POST[age]','$_POST[income]')";

 $sql1="INSERT INTO customer (customer_id,name,address_street,address_city,address_state,address_zipcode,password,kind)
    VALUES('$_POST[username]','$_POST[name]','$_POST[address_street]','$_POST[address_city]','$_POST[address_state]','$_POST[address_zipcode]','$_POST[password]','$_POST[type]');";
$sql1 .="INSERT INTO business (customer_id,category,gross_income)
        VALUES('$_POST[username]','$_POST[category]','$_POST[gross_income]')";


    if($_POST[type]==home){
        if (mysqli_multi_query($con, $sql)) {  
 echo "<script>alert('register success')</script>";     
        ;      
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

    }else {
    
    if (mysqli_multi_query($con, $sql1)) { 
        echo "<script>alert('register success')</script>";
          
              
} else {
           echo  "Error: " . $sql1 . "<br>" . mysqli_error($con);
}     
}
$con=null;
  
   ?>