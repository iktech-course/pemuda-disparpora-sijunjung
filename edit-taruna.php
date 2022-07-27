<?php
    include 'koneksi.php';

    $judul = $_POST['judul'];
    $images = $_POST['images'];
    $deskripsi = $_POST['deskripsi'];


    $query = mysqli_query($koneksi, "UPDATE `tb_berita` SET `JUDUL` = '$judul', `IMAGES` = '$images', `DESKRIPSI` = '$deskripsi', ;");

    if($query)
    {
        echo "Data Berhasil Di Ubah";
        echo "<meta http-equiv = 'refresh' content = '2; url=berita-admin.php'>";
    }
     else {
        echo "Data Gagal diubah";
        mysqli_error($query);
    }

?>