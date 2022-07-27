<?php
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $riwayat_organisasi = $_POST['riwayat_organisasi'];


    $query = mysqli_query($koneksi, "INSERT INTO `tb_pemuda` 
    (`NAMA`, `NIK`, `TANGGAL LAHIR`, `TEMPAT LAHIR`, `JENIS KELAMIN`, `ALAMAT`, `RIWAYAT ORGANISASI`) 
    VALUES ('$nama', '$nik', '$tanggal_lahir', '$tempat_lahir', '$jenis_kelamin', '$alamat', '$riwayat_organisasi')");

    if($query)
    {
        echo "Data Berhasil Disimpan";
        echo "<meta http-equiv = 'refresh' content = '2; url=tabel-pemuda.php'>";
    }
     else {
        echo "Data Gagal Tersimpan";
        mysqli_error($query);
    }

?>