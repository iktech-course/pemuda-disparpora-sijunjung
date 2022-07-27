<?php
    include 'koneksi.php';

    $images = $_POST['images'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
   

    $query = mysqli_query($koneksi, "UPDATE `tb_berita` SET `judul` = '$judul', `deskripsi` = '$deskripsi' WHERE images = '$images';");

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