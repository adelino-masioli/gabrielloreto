<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "gabriellorettocontato";

$servername = "localhost";
$dbname = "admin_gloreto";
$username = "admin_gloreto";
$password = "@gloretocontato2018";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}