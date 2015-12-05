 
<?php
echo"<table>";                            
require_once ("PhpProject1/includes/db.php");
                            $result = db::getInstance()->view_product_chocolate;
                            while($row = mysqli_fetch_array($result)){
                               echo"<tr><td>" . htmlentities($row["name"]) . "</td>";
                               echo"<td>" . htmlentities($row["amount"]) . "</td>";
                               echo"<td>" . htmlentities($row["price"]) . "</td>";
                               echo"<td>
                                    <input type="text">
                                    <button>Buy</button>
                                </td>";
                               echo "</tr>";
                               
                            }
                            echo "</table>"
                               