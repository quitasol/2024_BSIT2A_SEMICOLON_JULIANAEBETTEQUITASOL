<?php

function openConnection() {
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "gadgetgroove";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function closeConnection($conn) {
    $conn->close();
}
?>
