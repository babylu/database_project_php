
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function get_data(){
    require_once ("connect.php");
    $sql = "select * from customer;";
    $result = mysql_query($sql);
    $column = mysql_fetch_array($result);
    return column;
}
?>
