<?php
include('koneksi.php');
$pendidikan = mysqli_query($koneksi, "SELECT id_nagari,id_pendidikan,jumlah FROM tb_pemuda_pendidikan");
echo "<option>-- jumlah --</option>";
while($k = mysqli_fetch_array($pendidikan)){
echo "<option value=\"".$k['id_nagari']."\">".$k['id_pendidikan']\"".$k['jumlah']."</option>\n";
}
?>