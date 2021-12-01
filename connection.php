<?php
$servername = "localhost";
$username = "argo_crew";
$password = "argo_crew";
$nameDb = "argo_crew";

// Create connection
$conn = new mysqli($servername, $username, $password, $nameDb);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
