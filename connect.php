<?php

$host = "db";
$user = "root";
$pass = "root";
$db = "gallery";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    echo "Failed to connect DB" . $conn->connect_error;
}
?>
