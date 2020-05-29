<?php
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "CYO";

$mysqli = new mysqli($server, $username, $password, $database);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>