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

$number = $_POST['number'];
$product_id = $_POST['product_id'];

//gathering data
$sqlSelectFromProduct = "select price from Product where product_id= '$product_id'";
$priceResult = mysql_query($sqlSelectFromProduct);
while($check =  mysql_fetch_array($result)){
    $price = $check['price'] * $number;
}


//    echo "<script>alert('".$price."')</script>";
    
//    $sql="INSERT INTO customer (customer_id,name,address_street,address_city,address_state,address_zipcode,password,kind)
//        VALUES('$_POST[username]','$_POST[name]','$_POST[address_street]','$_POST[address_city]','$_POST[address_state]','$_POST[address_zipcode]','$_POST[password]','$_POST[type]');";
//    $sql .="INSERT INTO personal (customer_id,marriage,gender,age,income)
//        VALUES('$_POST[username]','$_POST[marriageStatue]','$_POST[gender]','$_POST[age]','$_POST[income]')";
//    $sql = "select * from customer where customer_id= '$name' and password = '$password' limit 1";
//    $result = mysql_query($sql);
//    
//    
//    while($check =  mysql_fetch_array($result)){
//        if($_POST['type']=='Customer'){
//        $_SESSION['customer_id']= $name;
//        $_SESSION['username']= $check['name'];
//        echo "<script>alert('login success')</script>";
//        echo "<script>window.location.href = 'http://localhost:8888/database_project_php/index.html'</script>";
//     
//        }
//        else{
//            echo "<script>alert('login success')</script>";
//            echo "<script>window.location.href = 'http://localhost:8888/database_project_php/html/adminDetail.php'</script>";
//        }
//    }
//    while(!$check =  mysql_fetch_array($result)){
//        echo "<script>alert('login fail')</script>";
//        echo "<script>window.location.href = 'http://localhost:8888/database_project_php/html/logIn.php'</script>";
//    }
?>