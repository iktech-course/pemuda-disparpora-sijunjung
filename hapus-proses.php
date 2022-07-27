
<?php
    include 'koneksi.php';

    $nik = $_GET['nik'];

    $query = mysqli_query($koneksi, "DELETE FROM `tb_pemuda` WHERE NIK = '$nik';");

    if($query)
    {
        echo "Data Berhasil Di Hapus";
        echo "<meta http-equiv = 'refresh' content = '2; url=tabel-pemuda.php'>";
    }
    else {
        echo "Data Gagal Di Hapus";
        mysqli_error($koneksi);
    }

?>