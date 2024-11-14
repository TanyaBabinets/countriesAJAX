<?php
$connetion=new mysqli("localhost", "root", "", "travel");
if ($connetion->connect_error) {
    die("connection failed: " . $connetion->connect_error);

}
$result=$connetion->query("SELECT id,  country FROM `countries`");

$option="";
if($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {
        $option .= "<option value='" . $row["id"] . "'>" . htmlentities($row["country"]) . "</option>";
    }
}
echo $option;
$connetion->close();
?>