<?php
$koneksi = mysqli_connect("localhost","root","","Covid_19");

if (mysqli_connect_errno()){
    echo "Koneksi Gagal : " . mysqli_connect_error();
}
?>