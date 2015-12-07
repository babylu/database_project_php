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
    $sql="INSERT INTO salesperson (salesperson_id,name,address_street,address_city,address_state,address_zipcode,email,job_title,salary)
          values ('$_POST[salesman_email]','$_POST[salesman_name]','$_POST[street]','$_POST[city]','$_POST[state]','$_POST[zipcode]','$_POST[salesman_email]','$_POST[job_title]','$_POST[salary]')";
    
    $referer = "http://localhost:8888/database_project_php/html/adminEmployee.php";
    if (mysqli_multi_query($con, $sql)) {  
        echo "<script>alert('add success');</script>";
        echo "<script>window.location.href = 'http://localhost:8888/database_project_php/html/adminEmployee.php';</script>";
    } else {
        echo "<script>alert(\"" . mysqli_error($con) . "\");window.location.href=\"" . $referer . "\";</script>";
    }


?>