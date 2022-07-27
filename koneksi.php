<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "db_si_pemuda";

    $koneksi = mysqli_connect($server,$username,$password,$database);

    if(mysqli_connect_errno())
    {
        echo "Koneksi Gagal : ". mysqli_connect_err();
    }
?>