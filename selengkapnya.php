<?php
include "koneksi.php";
$query= mysql_query("SELECT * FROM artikel");
while($r=mysql_fetch_array($query)):
echo "<h2>".$r['judul']."</h2>";
echo substr($r['isi'], 0, 250);//pemecah artikel
echo ".....<br />[ <a href =artikel.php?id=".$r['id'].">Selengkapnya</a>]<hr />;
//pada saat diklik akan mengambil IDnya dan menmapilkan halaman artikel sesuai dengan ID 
endwhile;
?>