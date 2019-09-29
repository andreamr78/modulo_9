<?php
$server = "localhost";
$user = "root";
$password = "";
$database = null;
$link = mysqli_connect($server, $user, $password, $database);

if (!$link) {
    echo "error: unable to connect to my sql. ". PHP_EOL;
    exit;
}

echo "SUCCESS!".PHP_EOL;
mysqli_close($link);
?>