<?php
    include 'koneksi.php';

    $id_prestasi = $_GET['id_prestasi'];

    $query = mysqli_query($koneksi, "DELETE FROM tb_pemuda WHERE id_prestasi='$id_prestasi'");

    if($query)
    {
        echo "Data Berhasil Di Hapus";
        echo "<meta http-equiv = 'refresh' content = '2; url=kegiatan-prestasi.php'>";
    }
    else {
        echo "Data Gagal Di Hapus";
    }

?>
