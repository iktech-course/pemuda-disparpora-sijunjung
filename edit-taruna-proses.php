<?php
    include 'koneksi.php';

    $images = $_POST['images'];
    $judul = $_POST['judul'];
    $narasi = $_POST['narasi'];
   

    $query = mysqli_query($koneksi, "UPDATE `tb_taruna` SET `judul` = '$judul', `narasi` = '$narasi' WHERE images = '$images';");

    if($query)
    {
        echo "Data Berhasil Di Ubah";
        echo "<meta http-equiv = 'refresh' content = '2; url=karangtaruna-admin.php'>";
    }
     else {
        echo "Data Gagal diubah";
        mysqli_error($query);
    }

?>