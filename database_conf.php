<?php

$servername = "kilimanjaro.liara.cloud";
$username = "root";
$password = "0mwMn5vqreDcLq8AfsK3zvqN";
$dbname = "musing_lovelace";
$port = 31069;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute create table query
if ($conn->query($sql) === TRUE) {
    // echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
?>
