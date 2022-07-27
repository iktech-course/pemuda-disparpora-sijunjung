<?php
    include 'koneksi.php';

    $id_galeri = $_GET['id_galeri'];
    $query = mysqli_query($koneksi, "DELETE FROM tb_galeri WHERE  id_galeri='$id_galeri'");

    if($query)
    {
        echo "Data Berhasil Di Hapus";
        echo "<meta http-equiv = 'refresh' content = '2; url=admin-galeri.php'>";
    }
    else {
        echo "Data Gagal Di Hapus";
    }

?>
