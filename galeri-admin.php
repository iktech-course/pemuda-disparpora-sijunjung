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
              <a class="nav-link active" aria-current="page" href="berita-admin.php"style="color : white">Berita</a>
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
              <a class="nav-link" href="beranda.php" style="color : white" tabindex="-1" aria-disabled="true">Logout</a>
            </li>
          </ul>
        </div>
      </div>

    </div>
    </div>
    </div>

    </div>

  </nav>
<div class="container">
          <table class="table table-striped">
              <thead>
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">IMAGES</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col"> AKSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include 'koneksi.php';

                    $query = mysqli_query($koneksi, "SELECT * FROM tb_berita");
                    $no = 0;

                    while ($data = mysqli_fetch_array($query))
                    {
                        $no++;
                        
                ?>
                    <tr>
                        <th scope="row"><?=  $no ?></th>
                        <td><img src="images/<?= $data['images']?>" alt="" style="width: 100px"></td>
                        <td> <?= $data['judul'] ?></td>
                        <td> <?= $data['deskripsi']?></td>
                        <td>
                        <a href="edit-berita-admin.php?images=<?= $data['images'] ?>" class="btn btn-warning">Edit</a>
                        <a href="hapus-berita.php?images=<?= $data['images'] ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
                </div>
<div class="container" style="margin-top: 10px">
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
        <input  name="judul"  placeholder="Judul" class="form-control" style="width: 50%"><br>
        <textarea name="deskripsi" placeholder="Deskripsi" class="form-control"></textarea><br>
		<input type="submit" value="Upload" name="proses" class="btn btn-primary" onclick="return confirm('Menyimpan Data?')">
        </form>
    
    <?php
        $koneksi = mysqli_connect("localhost","root","","db_website");
        if(isset($_POST['proses']))
        {
            $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
            $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
            $dir = "images/";
            $file = $_FILES['namaGambar']['name'];
            move_uploaded_file($_FILES['namaGambar']['tmp_name'],$dir.$file);

            mysqli_query($koneksi,"INSERT INTO tb_berita (images, judul, deskripsi) VALUES ('$file', '$judul', '$deskripsi')");
            echo "<meta http-equiv = 'refresh' content = '2; url=berita-admin.php'>";
            }
            
        
    ?>
      </div>
      <div class="modal-footer">
       
      </div>
     </div>
     
	</body>
</html>