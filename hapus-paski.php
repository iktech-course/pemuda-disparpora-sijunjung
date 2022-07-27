<?php
    include 'koneksi.php';

    $id_paski = $_GET['id_paski'];

    $query = mysqli_query($koneksi, "DELETE FROM `tb_paski` WHERE id_paski= '$id_paski';");

    if($query)
    {
        echo "Data Berhasil Di Hapus";
        echo "<meta http-equiv = 'refresh' content = '2; url=cek-pendaftaran.php'>";
    }
    else {
        echo "Data Gagal Di Hapus";
        mysqli_error($query);
    }

?>