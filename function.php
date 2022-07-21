<?php
include 'koneksi.php';


function query($query)
{
    global $conn;
    $data = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_array($data)) {
        $rows[] = $row;
    }
    return $rows;
}
