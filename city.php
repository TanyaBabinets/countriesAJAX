<?php

if (isset($_POST['countryID'])) {
    $countryId = $_POST['countryID'];

    $connetion = new mysqli("localhost", "root", "", "travel");
    if ($connetion->connect_error) {
        die("connection failed: " . $connetion->connect_error);

    }
    $result = $connetion->query("SELECT city FROM `cities` WHERE `countryID` = $countryId");

    if ($result->num_rows > 0) {
        echo "<table border='1'>
<tr>
<th>Города</th>   
</tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['city'] . "</td></tr>";
        }
        echo "</table>";

    } else {
        echo "0 results";
    }

    $connetion->close();
}
?>