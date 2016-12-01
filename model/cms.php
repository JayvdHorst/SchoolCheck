<?php

$sql = "SELECT * FROM schools";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $id = $row['id'];
        echo "<table>";
        echo "<tr align='center'>";
        echo"<td>" .$row['id']."</td>";
        echo"<td>" .$row['name']."</td>";
        echo"<td>" .$row['location']."</td>";
        echo"<td> <a href ='model/update.php?id=$id'>Edit</a>";
        echo"<td> <a href ='model/delete.php?id=$id'>Delete</a>";

        echo "</tr>";
        echo "</table>";
    }
} else {
    echo "0 results";
}