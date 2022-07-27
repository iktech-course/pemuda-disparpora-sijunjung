<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" style="color : white">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"style="color : white">Data Pemuda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"style="color : white">Kegiatan Pemuda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="berita.php"style="color : white">Berita</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#"style="color : white" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Event
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Pemuda Pelopor</a></li>
                <li><a class="dropdown-item" href="#">Paskibraka</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#"style="color : white" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Galery
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Foto</a></li>
                <li><a class="dropdown-item" href="#">Vidio</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
              </ul>
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
  <div class="container mt-4" style="align-items: flex-end">
  <h1 style="text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Pendaftaran Pemuda Pelopor</h1>
  <center>
  <form action="" method="post" enctype="multipart/form-data">
        <input  name="nama"  placeholder="Nama" class="form-control" style="width: 50%"><br>
        <input  name="ttl"  placeholder="Tempat/Tanggal Lahir" class="form-control" style="width: 50%"><br>
        <input  name="jenis_kelamin"  placeholder="Jenis Kelamin" class="form-control" style="width: 50%"><br>
        <input  name="alamat"  placeholder="Alamat" class="form-control" style="width: 50%"><br>
        <input  name="pekerjaan"  placeholder="Pekerjaan" class="form-control" style="width: 50%"><br>
        <input  name="no_hp"  placeholder="Nomor Handphone" class="form-control" style="width: 50%"><br>
		<input type="submit" value="Daftar" name="proses" class="btn btn-primary" onclick="return confirm('Menyimpan Data?')">
        </form>
        </center>
    <?php
        $koneksi = mysqli_connect("localhost","root","","db_website");
        if(isset($_POST['proses']))
        {
            $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
            $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
            $pekerjaan = mysqli_real_escape_string($koneksi, $_POST['pekerjaan']);
            $no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
            $ttl = mysqli_real_escape_string($koneksi, $_POST['ttl']);
            $jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);

            mysqli_query($koneksi,"INSERT INTO tb_event (nama, alamat, pekerjaan, no_hp, ttl, jenis_kelamin) VALUES ('$nama', '$alamat', '$pekerjaan', '$no_hp', '$ttl', '$jenis_kelamin')");
            echo "<meta http-equiv = 'refresh' content = '2; url=event.php'>";
            }
            
        
    ?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
</body>
    
</html>