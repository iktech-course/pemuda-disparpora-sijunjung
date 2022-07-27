<?php
    include 'koneksi.php';

    $id_kegiatan = $_GET['id_kegiatan'];

    $query = mysqli_query($koneksi, "DELETE FROM tb_kegiatan_pemuda WHERE id_kegiatan='$id_kegiatan'");

    if($query)
    {
        echo "Data Berhasil Di Hapus";
        echo "<meta http-equiv = 'refresh' content = '2; url=admin-kegiatan.php'>";
    }
    else {
        echo "Data Gagal Di Hapus";
    }

?>
