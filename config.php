<?php

$SERVER = 'localhost';
$USERNAME = 'root';
#$PASSWORD = 'root123asi847';
$PASSWORD = "";
#$DATABASE = 'tipping-app';
$DATABASE = "tippingdb";

$conn = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (!$conn) {
    die("MySQL connection Error: " . mysqli_connect_error);
}

?>