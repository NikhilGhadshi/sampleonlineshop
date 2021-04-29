<?php

$servername = "E5zzygJPZ0";
$username = "E5zzygJPZ0";
$password = "jZhOfjAlee";
$db = "remotemysql.com";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
