<?php

$servername = "remotemysql.com";
$username = "E5zzygJPZ0";
$password = "jZhOfjAlee";
$db = "E5zzygJPZ0";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
