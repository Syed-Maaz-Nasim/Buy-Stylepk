<?php  
require('header.php');
logcheck();
navbar();
require('connection.php');
    if (isset($_GET['id'])) {
        $stdID = $_GET['id'];
        $myquery = "Select * from message WHERE ID = ".$stdID;
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
            echo "<td>" .$myrow["id"] . "</td>";
            echo "<td>" .$myrow["cusname"]. "</td>";
            echo "<td>" .$myrow["cusemail"]. "</td>";
            echo "<td>" .$myrow["cusphone"]. "</td>";
            echo "<td>" .$myrow["cusmsg"]. "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "CONTACT ADMINISTRATOR";
    }
?>