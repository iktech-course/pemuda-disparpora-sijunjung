<?php
  include "koneksi.php";
  $query = mysqli_query($koneksi, "SELECT * FROM Kecamatan ORDER BY id ASC");
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
    .sidebar {
      color: white;
      text-decoration: none;
      font-family: aria-labelledby;
    }

    
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-black bg-info">
    <div class="container-fluid">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <img src="images/pemkabb.png" style="width : 140px; height: 140px;">
          <div class="col ms-2" style="color: white">
            <h3 style="color: red">Dinas Pemuda Dan Olahraga</h3>
            <h2 style="color: red">Kabupaten Sijunjung</h2>
            <div id="clock"></div>
            <script type="text/javascript" >
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
                document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
              }

              function checkTime(i) {
                if (i < 10) {
                  i = "0" + i;
                }
                return i;
              }
              setInterval(showTime, 500);

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
            </script>
          </div>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" style="color : white"href="beranda.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href=""style="color : white" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tentang Kami
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="visimisi.php">Visi Misi</a></li>
                <li><a class="dropdown-item" href="struktur.php">Struktur Organisasi</a></li>
                <li>
                <hr class="dropdown-divider">
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="hm.php"style="color : white" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Data Pemuda
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href=".php">Pemuda Berdasarkan Jenis Kelamin</a></li>
                <li><a class="dropdown-item" href=".php">Pemuda Berdasrkan Pendidikan</a></li>
                <li><a class="dropdown-item" href=".php">Pemuda Berdasarkan Pekerjaan</a></li>
                <hr class="dropdown-divider">
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href=""style="color : white" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kegiatan Pemuda
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="prestasi.php">Pemuda Berprestasi</a></li>
                <li><a class="dropdown-item" href=".php">Pemuda Dalam Organisasi</a></li>
                <li><a class="dropdown-item" href=".php">Pemuda Dalam Wirausaha</a></li>
                <hr class="dropdown-divider">
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="berita.php"style="color : white">Berita</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="event.php"style="color : white">Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="galeri.php"style="color : white">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" style="color : white" tabindex="-1" aria-disabled="true">Login</a>
            </li>
          </ul>
        </div>
      </div>

    </div>
    </div>
    </div>
    </div>
  </nav>
  <!-- visi misi -->
    
  <div class="col-lg-12 col-md-12 col-sm-12 mb-4 mt-4">
  <div class="row g-0">
    <div class="col-md-4">
      <center><img src="images/LOGO PEMUDA.png" class="img-fluid rounded-start" alt="..."style="width: 70%;height:300px;" ></center>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h1 class="card-title" style="color:green;">VISI DAN MISI</h1>
        <h3 style="color:blue;">Visi</h3>
        <p class="card-text" style="color: red;">“MENINGKATKAN KUALITAS PELAYANAN KEPADA PUBLIK DENGAN EFEKTIF,EFISIEN,RESPONSIF DAN SANTUN (SMART AND SMILE)”</p>
        <h3 style="color: blue;">Misi</h3>
        <p class="card-text" style="color: red;" >
        1.	MEMBERIKAN PELAYANAN PUBLIK YANG BERKUALITAS DAN EFEKTIF<br>
        2.	MENGEmBANGKAN PELAYANAN PUBLIK YANG RESPINSIF DAN SANTUN,IKHLAS,KERJA KERASDAN CERDAS (SMART)<br>
        3.	MENYELENGGARAKAN PELAYANAN INFORMASI TERKAIT DIBIDANG PEMUDA DAN OLAHRAGA.<br>
        </p>
      </div>
    </div>
  </div>
</div>

<
    
    <script src="assets/js/jquery.js"></script> 
      <script src="assets/js/popper.js"></script> 
      <script src="assets/js/bootstrap.js"></script>
    <div>
      <div>
        <footer class="page-footer font-small mdb-color pt-2 bg-primary" >
    
          <!-- Footer Links -->
          <div class="container text-center text-md-left">
        
            <!-- Footer links -->
            <div class="row text-center text-md-left">
        
              <!-- Grid column -->
              <div class="col">
                <h6 class="text-uppercase mb-4 font-weight-bold" style="color: white;">Dinas Pemuda dan Olahraga </h6>
                <p style="color: white;">Copyright @2022 design website by Qorina Zaer<br>
                8WPP+QQ8, Muaro, Kecamaten Sijunjung, Kabupaten Sijunjung, Sumatera Barat 27562</p>
              </div>
             
              <div class="col" style="color: white;">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p>
                   Email :<a href="https://accounts.google.com/AddSession/signinchooser?hl=id&continue=https%3A%2F%2Fmail.google.com%2Fmail&service=mail&ec=GAlAFw&flowName=GlifWebSignIn&flowEntry=AddSession"> parporadinas@gmail.com </a></p>
                
              </div>
            </div>
          </div>
        
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
</body>

</html>  