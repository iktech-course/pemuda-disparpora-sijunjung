<?php
    include 'koneksi.php';

    $id_organisasi = $_GET['id_organisasi'];

    $query = mysqli_query($koneksi, "DELETE FROM organisasi_pemuda WHERE id_organisasi='$id_organisasi'");

    if($query)
    {
        echo "Data Berhasil Di Hapus";
        echo "<meta http-equiv = 'refresh' content = '2; url=okp.php'>";
    }
    else {
        echo "Data Gagal Di Hapus";
    }

?>
