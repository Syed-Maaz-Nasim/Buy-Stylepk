<?php
include('header.php');
logcheck();
?>
<?php
navbar();
include('connection.php');
?>
<div class="con">
        <h1>Orders</h1>
    </div>
<?php

$myquery = "Select * from menorder";
$data = $mycon->query($myquery);
echo "<table border ='1'>
        <tr style='nth-child(even) background-color: #000000;'>
            <th>ID</th>
            <th>product_image</th>
            <th>product_title</th>
            <th>product_discription</th>
            <th>product_price</th>
            <th>name</th>
            <th>contact</th>
            <th>email</th>
            <th>address</th>
            <th>city</th>
            <th>anymsg</th>
            
        </tr>";
    while($myrow = $data->fetch_assoc()){
        echo "<tr style='nth-child(odd) background-color: blue;'>";
        echo "<td>" .$myrow["id"] . "</td>";
        echo "<td>" .$myrow["product_image"]. "</td>";
        echo "<td>" .$myrow["product_title"]. "</td>";
        echo "<td>" .$myrow["product_discription"]. "</td>";
        echo "<td>" .$myrow["product_price"]. "</td>";
        echo "<td>" .$myrow["name"]. "</td>";
        echo "<td>" .$myrow["contact"]. "</td>";
        echo "<td>" .$myrow["email"]. "</td>";
        echo "<td>" .$myrow["address"]. "</td>";
        echo "<td>" .$myrow["city"]. "</td>";
        echo "<td>" .$myrow["anymsg"]. "</td>";
        // echo "<td><a href='http://localhost:81/BuyStylepk/Admin/dist/msgview1.php?id=".$myrow["cusid"]."'>View</a></td>";
        echo "</tr>";
    }
    echo "</table>";

?>