<?php
session_start();
if(!isset($_SESSION['log'])){
  header('location: login.php');
  exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<style>
	.sidebar{
	color: white;
	text-decoration: none;
	font-family: aria-labelledby;
	}
	</style>
	</head>
	<body>
	<div class="container">
	<div class="row">
		<div class="col-md-3">
		<center><img src="images/LOGO PEMUDA.png" style="height: 120px; width: 120px;margin-top: 4px;"></center>
		</div>
		<div class="col-md-6">
		<h4 style="text-align :center; margin-top: 20px">SISTEM INFORMASI KEPEMUDAAN DINAS PARIWISATA PEMUDA DAN OLAHRAGA
		KABUPATEN SIJUNJUNG </h4>
		</div> 
		<div class="col-md-3">
		<center><img src="images/PEMKAB.png" style="height: 120px; width: 120px; margin-bottom: 10px;"></center>
		</div>
	</div>
	</div>
	
	 <nav class="navbar navbar-dark" style="background-color: blue;">
            <div class="container-fluid">
              
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span style="align-items:flex-start" class="navbar-toggler-icon"></span>
              </button>
              <div style="float: right; color: white;">
                <!-- Menampilkan Jam (Aktif) -->
                <div id="clock" style="float: right;"></div>
                    <script type="text/javascript">
                    
                    function showTime() {
                        var a_p = "";
                        var today = new Date();
                        var curr_hour = today.getHours();
                        var curr_minute = today.getMinutes();
                        var curr_second = today.getSeconds();
                        if (curr_hour < 12) {
                            a_p = "AM";
                        } else {
                            a_p = "PM";
                        }
                        if (curr_hour == 0) {
                            curr_hour = 12;
                        }
                        if (curr_hour > 12) {
                            curr_hour = curr_hour - 12;
                        }
                        curr_hour = checkTime(curr_hour);
                        curr_minute = checkTime(curr_minute);
                        curr_second = checkTime(curr_second);
                     document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                        }
            
                    function checkTime(i) {
                        if (i < 10) {
                            i = "0" + i;
                        }
                        return i;
                    }
                    setInterval(showTime, 500);
                    //-->
                    </script>
            <br>
                    <!-- Menampilkan Hari, Bulan dan Tahun -->
                    
                    <script type='text/javascript'> 
                    
                        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                        var date = new Date();
                        var day = date.getDate();
                        var month = date.getMonth();
                        var thisDay = date.getDay(),
                            thisDay = myDays[thisDay];
                        var yy = date.getYear();
                        var year = (yy < 1000) ? yy + 1900 : yy;
                        document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                        //-->
                    </script>
                    </div>
              <div class="offcanvas offcanvas-start bg-info" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h4 class="offcanvas-title" id="offcanvasNavbarLabel" style="color: black">DINAS KEPEMUDAAN</h4>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-start flex-grow-3 pe-3">
                  <li class="sidebar">
            <a class="sidebar" aria-current="page" href="index-admin.php">Beranda</a>
          </li>
		  <li>

      <ul>
		  <li style="margin-left: 40px;">
		  <a class="sidebar" href="tabel-pemuda.php">Data Pemuda</a>
		  </li>
		  </ul>
		  </li>
		  <li>
		  <a class="sidebar" >Kegiatan Pemuda</a>
		  <ul>
		  <li style="margin-left: 40px;">
		  <a class="sidebar" href="pelopor-admin.php">Pemuda Pelopor</a>
		  </li>
		  <li style="margin-left: 40px;">
		  <a class="sidebar" href="karangtaruna-admin.php">Karang Taruna</a>
		  </li>
		  </ul>
		  </li>
		   <li class="sidebar">
            <a class="sidebar" href="berita-admin.php">Berita Terbaru</a>
          </li>
          
           <li class="sidebar">
            <a class="sidebar" href="beranda.php"  onclick="return confirm('Anda Yakin Ingin Keluar ?')">Keluar</a>
          </li>
           
        </ul>
            
                </div>
              </div>
            </div>
            
			</div>
            
          </nav>
		 
		  <div>
		  <h3 style="text-align :center; margin-top: 20px"> DATA PEMUDA KABUPATEN SIJUNJUNG </h3>
		  </div>
          <div class="container">
          <a href="form_tambahkan.php" class="btn btn-success mb-3 mt-2 p-2">Tambah Data</a>
              <table class="table table-striped">
              <thead>
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">NIK</th>
                    <th scope="col">TEMPAT LAHIR</th>
                    <th scope="col">TANGGAL LAHIR</th>
                    <th scope="col"> JENIS KELAMIN</th>
                    <th scope="col"> RIWAYAT ORGANISASI</th>
                    <th scope="col"> AKSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include 'koneksi.php';

                    $query = mysqli_query($koneksi, "SELECT * FROM tb_pemuda");
                    $no = 0;

                    while ($data = mysqli_fetch_array($query))
                    {
                        $no++;
                ?>
                    <tr>
                        <th scope="row"><?=  $no ?></th>
                        <td> <?= $data['NAMA'] ?></td>
                        <td> <?= $data['NIK'] ?></td>
                        <td> <?= $data['TEMPAT LAHIR']?></td>
                        <td> <?= $data['TANGGAL LAHIR']?></td>
                        <td><?= $data['JENIS KELAMIN'] ?></td>
                        <td><?= $data['RIWAYAT ORGANISASI']?></td>
                        <td>
                        <a href="form_edit.php?nik=<?= $data['NIK'] ?>" class="btn btn-warning">Edit</a>
                        <a href="hapus-proses.php?nik=<?= $data['NIK'] ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
              </div>
          </div>
	</body>
</html>