<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $db = mysql_connect("localhost:8889","root","root") or die("fail to connect database". mysql_error());
    mysql_select_db("e-commerce")
    or 
    die ("can not connect to e-commerce".mysql_errno());
    $sql = "select * from customer;";
    $result = mysql_query($sql);
    $column = mysql_fetch_array($result);
    
    $name=$_POST['username'];
    $password=$_POST['password'];
     
    if(($column['customer_id']==$name)&&($column['password']==$password))
    {
        if($_POST['type'] == 'customer'){
            echo "<script>alert('login success')</script>";
            echo "<script>window.location.href = 'http://localhost:8888/database_project_php/index.html'</script>";
           
        }   
          
    else
    {
         echo "<script>alert('login success')</script>";
         echo "<script>window.location.href = 'http://localhost:8888/database_project_php/html/adminDetail.php'</script>";
        
    }
    }
?>