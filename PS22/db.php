<?php
$host = "localhost";
$user = "root";
$password = "root";
$dbname = "vit_results";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
