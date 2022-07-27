<?php
include('koneksi.php');
$id_kec=$_GET['kec'];

$nagari  = mysqli_query($koneksi, "SELECT id, nama_nagari FROM tb_nagari WHERE id_kecamatan= $id_kec");
echo "<option>-- Pilih Nagari --</option>";
while($k = mysqli_fetch_array($nagari)){
echo "<option value=\"".$k['id']."\">".$k['nama_nagari']."</option>\n";
}
?>