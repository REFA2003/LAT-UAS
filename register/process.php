<?php

require '../koneksi.php';

function tambahUser($data){

    global $conn;
    $nama_user = htmlspecialchars($data["nama_user"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $role = $data["role"];

    $query ="INSERT INTO user VALUES(NULL, '$nama_user', '$username', '$password', '$role')";
    mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}

?>