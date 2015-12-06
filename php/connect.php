
<?php
function(){
    $db = mysql_connect("localhost","root","root") or die("fail to connect database". mysql_error());
    mysql_select_db("e-commerce")
    or 
    die ("can not connect to e-commerce".mysql_errno());
}
    ?>
