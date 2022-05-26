<?php

require '../koneksi.php';

function proses($data){

    global $conn;
    
    $nip = htmlspecialchars($data["nip"]);
    $ndep = htmlspecialchars($data["ndep"]);
    $nblk = htmlspecialchars($data["nblk"]);
    $jk = htmlspecialchars($data["jk"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $telp = htmlspecialchars($data["telp"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $gaji = htmlspecialchars($data["gaji"]);
    $nocab = htmlspecialchars($data["nocab"]);

    $query = "INSERT INTO pegawai_rey VALUES('$nip', '$ndep', '$nblk', '$jk','$alamat','$telp','$jabatan','$gaji','$nocab')";
    mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}

?>