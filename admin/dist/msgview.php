<?php
include('header.php');
logcheck();
?>
<?php
navbar();
include('connection.php');
?>
<div class="con">
        <h1>Messages</h1>
    </div>
<?php

$myquery = "Select * from message";
$data = $mycon->query($myquery);
echo "<table border ='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            
        </tr>";
    while($myrow = $data->fetch_assoc()){
        echo "<tr>";
        echo "<td>" .$myrow["cusid"] . "</td>";
        echo "<td>" .$myrow["cusname"]. "</td>";
        echo "<td>" .$myrow["cusemail"]. "</td>";
        echo "<td>" .$myrow["cusphone"]. "</td>";
        echo "<td>" .$myrow["cusmsg"]. "</td>";
        // echo "<td><a href='http://localhost:81/BuyStylepk/Admin/dist/msgview1.php?id=".$myrow["cusid"]."'>View</a></td>";
        echo "</tr>";
    }
    echo "</table>";

?>