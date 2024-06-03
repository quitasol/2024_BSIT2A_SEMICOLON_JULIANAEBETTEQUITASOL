<?php

$mysqli = new mysqli("localhost", "root", "", "gadgetgroovee");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>