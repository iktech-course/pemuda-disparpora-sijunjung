<?php
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $riwayat_organisasi = $_POST['riwayat_organisasi'];


    $query = mysqli_query($koneksi, "UPDATE `tb_pemuda` SET `NAMA` = '$nama', `NIK` = '$nik', `TANGGAL LAHIR` = '$tanggal_lahir', `TEMPAT LAHIR` = '$tempat_lahir', `JENIS KELAMIN` = '$jenis_kelamin', `ALAMAT` = '$alamat', `RIWAYAT ORGANISASI` = '$riwayat_organisasi' WHERE NIK = '$nik';");

    if($query)
    {
        echo "Data Berhasil Di Ubah";
        echo "<meta http-equiv = 'refresh' content = '2; url=tabel-pemuda.php'>";
    }
     else {
        echo "Data Gagal diubah";
        mysqli_error($query);
    }

?>