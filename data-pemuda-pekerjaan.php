<?php
include('koneksi.php');
$kecamatan = mysqli_query($koneksi, "SELECT id,nama_kecamatan FROM tb_kecamatan");
echo "<option>-- Pilih Kecamatan --</option>";
while($k = mysqli_fetch_array($kecamatan)){
echo "<option value=\"".$k['id']."\">".$k['nama_kecamatan']."</option>\n";
}
?>