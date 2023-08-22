<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "tourist";
$tableName = "collection";

$conn = mysqli_connect($servername, $username, $password, $databaseName);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());

}

?>