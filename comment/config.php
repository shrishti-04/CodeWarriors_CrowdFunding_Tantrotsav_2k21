<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "comment_system";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>
