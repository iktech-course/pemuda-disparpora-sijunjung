<?php
    include 'koneksi.php';

    $images = $_GET['images'];

    $query = mysqli_query($koneksi, "DELETE FROM `tb_taruna` WHERE images = '$images';");

    if($query)
    {
        echo "Data Berhasil Di Hapus";
        echo "<meta http-equiv = 'refresh' content = '2; url=karangtaruna-admin.php'>";
    }
    else {
        echo "Data Gagal Di Hapus";
        mysqli_error($query);
    }

?>