<?php
$servername = "localhost";
$username = "root";
$password = "";
$base = "bet_expert";

$conn = mysqli_connect($servername, $username, $password, $base);
$conn->set_charset("utf8");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>