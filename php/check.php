<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ("get_data.php");
$name=$_POST['customer_id'];
$password=$_POST['password'];
if($name == "")
{
    
    echo "<script type = 'text/javascript'>alert('please fill out your Email');location = 'http://localhost:8888/database_project_php/html/login.php'</script>";
    
}
elseif($password=="")
{
    echo "<script type = 'text/javascript'>alert('please fill out your password');location = 'http://localhost:8888/database_project_php/html/login.php'</script>";
}
else
{
    $colum = get_data();
    if(($colum['customer_id']==$name)&&($colum['password']==$password))
    {
       echo"<script type = 'text/javascript'>alert('login success!');location = 'http://localhost:8888/database_project_php/index.html'" ;
    }
    else
    {
        echo "<script type = 'text/javascript'>alert('wrong password');location = 'http://localhost:8888/database_project_php/html/login.php'</script>";
    }
}
?>