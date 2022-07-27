<?php
    include 'koneksi.php';

    $id_berita = $_GET['id_berita'];

    $query = mysqli_query($koneksi, "DELETE FROM tb_berita WHERE id_berita='$id_berita'");

    if($query)
    {
        echo "Data Berhasil Di Hapus";
        echo "<meta http-equiv = 'refresh' content = '2; url=admin-berita.php'>";
    }
    else {
        echo "Data Gagal Di Hapus";
    }

?>
