<?php
$conn = new mysqli("localhost", "adminphp", "pasword", "stastay");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "✅ Connected to database stastay as adminphp!";