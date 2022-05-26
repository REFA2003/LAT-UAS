<?php
require '../koneksi.php';

function tampilkan_data(){
    global $conn;

    $query = "SELECT * FROM pegawai_rey";

    $result = mysqli_query($conn, $query);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tampilkan_hasil(){
    global $conn;

    $query = "SELECT * FROM v_login";

    $result = mysqli_query($conn, $query);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

?>