<?php
include "koneksi.php";
$id= abs (intval($_GET['id']));
$sql= "SELECT * FROM artikel WHERE id='$id' LIMIT 1";
$query= mysql_query($sql);
$r= mysql_fetch_array($query);
echo "<h2>".$r['judul']."</h2>";
echo $r['isi'];
?>