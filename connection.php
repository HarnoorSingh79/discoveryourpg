<?php
//$servername = "127.0.0.1:3306";
//$username = "u991494125_master";
//$password = "3Rs9okT?9";
//$dbname = "u991494125_pg";

$servername = "localhost";
$username = "master";
$password = "khalsa1313";
$dbname = "pg";

// Create connection
$link = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
}
?>