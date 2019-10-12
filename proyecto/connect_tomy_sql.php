<?php
include('mysql.php');
$conn = new mysqli($server, $user, $password, $database);
if ($conn->connect_error) {
    die('connection error'.$conn->connect_error);
}
?>