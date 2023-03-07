<?php
    $servername = "localhost";
    $username = "admin";
    $password = "admin";
    $dbname = "assignment";
    $conn = new mysqli($servername, $username, $password, $dbname, 3306);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>