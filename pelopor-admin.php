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
		  <a class="sidebar" >Informasi Kepemudaan</a>
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
            <a class="sidebar" href="beranda.php" onclick="return confirm('Anda Yakin Ingin Keluar ?')">Keluar</a>
          </li>
        </ul>
            
                </div>
              </div>
			</div>
            
          </nav>
		 <div class="bg-info" style="margin-top: -20px;">
		  <h1 style="text-align :center; margin-top: 20px"> PEMUDA PELOPOR  </h1>
		  </div>
		  <div class="container">
          <table class="table table-striped">
              <thead>
                    <tr>
                    <th scope="col">NO</th>
					<th scope="col">FOTO</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">TEMPAT LAHIR</th>
                    <th scope="col">TANGGAL LAHIR</th>
                    <th scope="col"> AGAMA</th>
					<th scope="col"> JENIS KELAMIN</th>
					<th scope="col"> SUKU BANGSA</th>
					<th scope="col"> ALAMAT</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include 'koneksi.php';

                    $query = mysqli_query($koneksi, "SELECT * FROM tb_pelopor");
                    $no = 0;

                    while ($data = mysqli_fetch_array($query))
                    {
                        $no++;
                        
                ?>
                    <tr>
                        <th scope="row"><?=  $no ?></th>
                        <td><img src="images/<?= $data['images']?>" alt="" style="width: 100px"></td>
                        <td> <?= $data['nama'] ?></td>
                        <td> <?= $data['tempat_lahir']?></td>
                        <td> <?= $data['tanggal_lahir']?></td>
                        <td> <?= $data['agama']?></td>
                        <td> <?= $data['jenis_kelamin']?></td>
                        <td> <?= $data['suku_bangsa']?></td>
                        <td> <?= $data['alamat']?></td>
                        <td>
                          <a href="edit-pelopor-admin.php?images=<?= $data['images'] ?>" class="btn btn-warning">Edit</a>
                          <a href="hapus-pelopor.php?images=<?= $data['images'] ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')">Hapus</a>
                          </td>
                    </tr>
                <?php } ?>
                </tbody>
                </div>
		  
<div class="container">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambahkan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  <form action="" method="post" enctype="multipart/form-data">
        <b>Pilih Photo</b>
        <input type="file" name="namaGambar"><br><br>
        <input  name="nama"  placeholder="Nama" class="form-control" style="width: 50%"><br>
		<input  name="jenis_kelamin"  placeholder="Jenis Kelamin" class="form-control" style="width: 50%"><br>
		<input  name="agama"  placeholder="Agama" class="form-control" style="width: 50%"><br>
		<input  name="tanggal_lahir"  placeholder="Tanggal Lahir" class="form-control" style="width: 50%"><br>
		<input  name="tempat_lahir"  placeholder="Tempat Lahir" class="form-control" style="width: 50%"><br>
		<input  name="alamat"  placeholder="Alamat" class="form-control" style="width: 50%"><br>
		<input  name="suku_bangsa"  placeholder="Suku Bangsa" class="form-control" style="width: 50%"><br>
		<input  name="pekerjaan"  placeholder="Pekerjaan" class="form-control" style="width: 50%"><br>
		<input type="submit" value="Upload" name="proses" class="btn btn-primary" onclick="return confirm('Menyimpan Data?')">
        </form>
       
        
    

    <?php
        $koneksi = mysqli_connect("localhost","root","","db_website");
        if(isset($_POST['proses']))
        {
			$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
			$jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
			$agama = mysqli_real_escape_string($koneksi, $_POST['agama']);
			$tanggal_lahir = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
			$tempat_lahir = mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);
			$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
			$suku_bangsa = mysqli_real_escape_string($koneksi, $_POST['suku_bangsa']);
			$pekerjaan = mysqli_real_escape_string($koneksi, $_POST['pekerjaan']);
            $dir = "images/";
            $file = $_FILES['namaGambar']['name'];
            move_uploaded_file($_FILES['namaGambar']['tmp_name'],$dir.$file);

            mysqli_query($koneksi,"INSERT INTO tb_pelopor (nama, jenis_kelamin, agama, tanggal_lahir, tempat_lahir, alamat, suku_bangsa, pekerjaan, images) VALUES ('$nama', '$jenis_kelamin', '$agama', '$tanggal_lahir', '$tempat_lahir', '$alamat', '$suku_bangsa', '$pekerjaan', '$file')");
			echo "<meta http-equiv = 'refresh' content = '2; url=pelopor-admin.php'>";
            }
            
        
    ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
</div>
		
	</body>
</html>