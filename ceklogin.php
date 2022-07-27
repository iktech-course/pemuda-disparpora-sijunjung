<?php
    session_start();
    include "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi,"SELECT * FROM tb_login WHERE USERNAME = '$username' AND PASSWORD = '$password'");
    $data = mysqli_fetch_array($query);
    $jml = mysqli_num_rows($query);

    if($jml > 0)
    {
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];

        header ('location: admin-beranda.php');
        $_SESSION['log'] = true;
    }
    else
    {
        echo "<p align='center'>Login Gagal</p>";
        echo "<meta http-equiv='refresh' content='2; url=login.php'>";
    }


?>