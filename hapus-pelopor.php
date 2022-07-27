<?php
    include 'koneksi.php';

    $id_pelopor = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM `tb_event` WHERE id= '$id_pelopor';");

    if($query)
    {
        echo "Data Berhasil Di Hapus";
        echo "<meta http-equiv = 'refresh' content = '2; url=admin-pemuda.php'>";
    }
    else {
        echo "Data Gagal Di Hapus";
        mysqli_error($query);
    }

?>