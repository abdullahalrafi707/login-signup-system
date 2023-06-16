<?php
$servername = "sql12.freemysqlhosting.net";
$username = "sql12626387";
$password = "g7qd4uyNJ6";
$dbname = "sql12626387";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
