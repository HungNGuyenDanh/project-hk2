<?php
$hostname = "localhost";
$user = "root";
$password = "";
$database = "employee";

$con = mysqli_connect($hostname, $user, $password, $database);

if (!$con) {
    die();
}
