<?php
$servername = "localhost";
$username = "root";
$password = "mc12345";
$dbname = "test";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("HATA: " . $conn->connect_error);
}
?>
