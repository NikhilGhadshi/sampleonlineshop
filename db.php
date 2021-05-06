<?php

//$servername = "remotemysql.com";
//$username = "E5zzygJPZ0";
//$password = "jZhOfjAlee";
//$db = "E5zzygJPZ0";

$servername = "remotemysql.com";
$username = "boNfoXOHDX";
$password = "BakR9KGaSF";
$db = "boNfoXOHDX";
// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
