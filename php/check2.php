<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$db = mysql_connect("localhost","root","root") or die("fail to connect database". mysql_error());
    mysql_select_db("e-commerce")
    or 
    die ("can not connect to e-commerce".  mysql_error());
    $name=$_POST['username'];
    $password=$_POST['password'];
    $sql = "select * from customer where customer_id= '$name' and password = '$password' limit 1";
    $result = mysql_query($sql);
    
    if($_POST['type']=='Customer'){
        $sql = "select * from customer where customer_id= '$name' and password = '$password' limit 1";
        $result = mysql_query($sql);
        while($check =  mysql_fetch_array($result)){
            $_SESSION['customer_id']= $name;
            $_SESSION['username']= $check['name'];
            echo "<script>alert('login success')</script>";
            echo "<script>window.location.href = 'http://localhost:8888/database_project_php/index.html'</script>";
        }
    }
    else{
        $sql = "select * from admin_user where username= '$name' and password = '$password' limit 1";
        $result = mysql_query($sql);
        while($check =  mysql_fetch_array($result)){
            echo "<script>alert('login success')</script>";
            echo "<script>window.location.href = 'http://localhost:8888/database_project_php/html/adminDetail.php'</script>";
        }
    }
    
    while(!$check =  mysql_fetch_array($result)){
        echo "<script>alert('login fail')</script>";
        echo "<script>window.location.href = 'http://localhost:8888/database_project_php/html/logIn.php'</script>";
    }
 ?>
