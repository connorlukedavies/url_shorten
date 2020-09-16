<?php

//database connection code

$host = "localhost"; 
$username = "url_shortener";
$password = "password";
$database = "urlShortener";

$conn = new mysqli($host, $username, $password, $database);

if ($conn -> connect_error) {
    die("connection failed: " . $conn->connect_error); 
}
?>