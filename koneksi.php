<?php
// error_reporting(0);
session_start();
$server = "localhost";
$username = "root";
$password = "";
$database = "rodagilajaya_db";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {

    echo "<h1>database belum terkoneksi</h1>";
    die;
}
