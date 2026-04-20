<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "edge";


//new mysql() is the connection object its connects to mysql server with the details
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>