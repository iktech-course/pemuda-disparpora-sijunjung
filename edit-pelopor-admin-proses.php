<?php
    include 'koneksi.php';

    $images = $_POST['images'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];


    $query = mysqli_query($koneksi, "UPDATE `tb_pelopor` SET `nama` = '$nama', `tanggal_lahir` = '$tanggal_lahir', `tempat_lahir` = '$tempat_lahir', `jenis_kelamin` = '$jenis_kelamin', `alamat` = '$alamat' WHERE images = '$images';");

    if($query)
    {
        echo "Data Berhasil Di Ubah";
        echo "<meta http-equiv = 'refresh' content = '2; url=pelopor-admin.php'>";
    }
     else {
        echo "Data Gagal diubah";
        mysqli_error($query);
    }

?>