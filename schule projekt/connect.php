<?php
$host = 'localhost';
$db = 'magiq_school';
$user = 'root';
$pass = ''; // your DB password

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
