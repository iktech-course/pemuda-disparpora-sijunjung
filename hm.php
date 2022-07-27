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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
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
              <a class="nav-link active" aria-current="page" style="color : white" href="beranda.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" style="color : white">Tentang Kami</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="hm.php" style="color : white" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Data Pemuda
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="tb_pemuda_pendidikan.php">Pemuda Berdasarkan Pendidikan</a></li>
                <li><a class="dropdown-item" href="dtb_pemuda_pekerjaan.php">Pemuda Berdasarkan Pekerjaan</a></li>
                <li><a class="dropdown-item" href="tb_pemuda_umum.php">Pemuda Berdasarkan Jenis Kelamin</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" style="color : white" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kegiatan Pemuda
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="user-pemuda.php">Pemuda Pelopor</a></li>
                <li><a class="dropdown-item" href="daftar-paski.php">Paskibraka</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="berita.php" style="color : white">Berita</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" style="color : white" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Event
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="user-pemuda.php">Pemuda Pelopor</a></li>
                <li><a class="dropdown-item" href="daftar-paski.php">Paskibraka</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="galeri.php" style="color : white" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
  <h1 class="text-center">Grafik Data Pemuda</h1>
  <tbody>
    <?php
    include('koneksi.php');
    ?>
    <div class="col-sm-4">
      <form id="" method="post" action="">


        <br>Pilih Kecamatan :<br>
        <select name="nama_kecamatan" id="kec" class="form-control">
          <option>--Pilih Kecamatan--</option>
          <?php
          //mengambil nama-nama kecamatan yang ada di database
          $kecamatan = mysqli_query($koneksi, "SELECT * FROM tb_kecamatan ");
          while ($p = mysqli_fetch_array($kecamatan)) {
            echo "<option value=\"$p[id]\">$p[nama_kecamatan]</option>\n";
          }
          ?>
        </select>

        <br>Pilih Nagari :<br>
        <select name="nama_nagari" id="nagari" class="form-control">
          <option>--Pilih Nagari--</option>
          <?php
          //mengambil nama-nama nagari yang ada di database
          $kota = mysqli_query($koneksi, "SELECT * FROM tb_nagari ");
          while ($p = mysqli_fetch_array($nagari)) {
            echo "<option value=\"$p[id]\">$p[nama_kecamatan]\"$p[id_kecamatan]</option>\n";
          }
          ?>
        </select>

        <br>Pilih Kategori :<br>
        <select name="kategori_data"  class="form-control">
          <option>--Pilih Kategori--</option>
          <option value="1">Pemuda Berdasarkan Jenis Kelamin</option> 
          <option value="2">Pemuda Berdasarkan Pendidikan</option>
          <option value="3">Pemuda Berdasarkan Pekerjaan</option>
        </select>

        <input id='' type='submit' value='Simpan' name='submit' class="btn btn-sm btn-success" />
        <input type="reset" value="Batal" class="btn btn-sm btn-warning">
      </form>
      <!-- Simpan Pilihan Dari Form Ke Variabel $sql-query -->
      <?php
      if (isset($_POST['submit'])) {
        include('koneksi.php');
        $nagari = $_POST['nama_nagari'];
        $kecamatan = $_POST['nama_kecamatan'];
        $kategori = $_POST['kategori_data'];

         // SQL Query Ambil Data Nama Nagari Dan Kecamatan
         $sql = "SELECT tb_kecamatan.id AS id_kecamatan, tb_kecamatan.nama_kecamatan, tb_nagari.id, tb_nagari.nama_nagari FROM tb_kecamatan INNER JOIN tb_nagari ON tb_nagari.id_kecamatan = tb_kecamatan.id WHERE tb_kecamatan.id = $kecamatan AND tb_nagari.id = $nagari";
         $result = mysqli_query($koneksi, $sql);
         $row = mysqli_fetch_array($result);
 
         // Data Nagari Dan Kecamatan
         $nama_nagari = $row['nama_nagari'];
         $nama_kecamatan = $row['nama_kecamatan'];

        // Kategori Data Pemuda
        $kategori_table;

        switch ($kategori) {
          case 1:
            $kategori_table = 'tb_pemuda_umum';
            $sql_data = "SELECT tb_pemuda_umum.id, tb_pemuda_umum.id_nagari, tb_nagari.nama_nagari, tb_pemuda_umum.laki_laki, tb_pemuda_umum.Perempuan, tb_pemuda_umum.jumlah FROM `tb_pemuda_umum` INNER JOIN tb_nagari ON tb_pemuda_umum.id_nagari = tb_nagari.id WHERE tb_pemuda_umum.id_nagari = $nagari";
            $data = mysqli_query($koneksi, $sql_data);
            $fetch_data = mysqli_fetch_array($data);
            $laki_laki = $fetch_data['laki_laki'];
            $Perempuan = $fetch_data['Perempuan'];

            // Chart Data
            $chart_title = "Pesebaran Pemuda Berdasarkan Jenis Kelamin Nagari $nama_nagari";
            $chart_legend = "Jenis Kelamin";
            $chart_data = "[$laki_laki,$Perempuan]";
            $chart_label = "['Laki - Laki', 'Perempuan']";
            break;
          case 2:
            $kategori_table = 'tb_pemuda_pendidikan';
            $sql_data = "SELECT tb_jenjang_pendidikan.pendidikan, tb_pemuda_pendidikan.jumlah FROM tb_pemuda_pendidikan INNER JOIN tb_nagari ON tb_pemuda_pendidikan.id_nagari = tb_nagari.id JOIN tb_jenjang_pendidikan ON tb_pemuda_pendidikan.id_pendidikan = tb_jenjang_pendidikan.id WHERE tb_pemuda_pendidikan.id_nagari = $nagari";
            $data = mysqli_query($koneksi, $sql_data);
            // die;
            
            
            foreach($data as $value) {
              $pendidikan[] = $value['pendidikan'];
              $jumlah[] = $value['jumlah'];
            }

            // Chart Data
            $chart_title = "Pesebaran Pemuda Berdasarkan Pendidikan Nagari $nama_nagari";
            $chart_legend = "Pendidikan";
            $chart_data = $jumlah;
            $chart_label = $pendidikan;
            break;
          case 3:

            $kategori_table = 'tb_pemuda_pekerjaan';
            $sql_data = "SELECT jenis_pekerjaan.pekerjaan, tb_pemuda_pekerjaan.Jumlah FROM tb_pemuda_pekerjaan JOIN jenis_pekerjaan ON tb_pemuda_pekerjaan.id_pekerjaan = jenis_pekerjaan.id_pekerjaan JOIN tb_nagari ON tb_pemuda_pekerjaan.id_nagari = tb_nagari.id WHERE tb_pemuda_pekerjaan.id_nagari = $nagari";
            $data = mysqli_query($koneksi, $sql_data);

            foreach($data as $value) {
              $pekerjaan[] = $value['pekerjaan'];
              $jumlah[] = $value['Jumlah'];
            }

            // Chart Data
            $chart_title = "Pesebaran Pemuda Berdasarkan Pekerjaan Nagari $nama_nagari";
            $chart_legend = "Pekerjaan";
            $chart_data = $jumlah;
            $chart_label = $pekerjaan;

            break;
          default:
            echo("<script>alert('Pilih Kategori Data');</script>");
            break;
        }
      }
      ?>
    </div>
    <div class="col-sm-8"></div><br />
    <canvas id="myChart" width="100%" height="50%"></canvas>
    </div>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.js"></script>
    <script>
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <!-- Chart JS Script -->
    <script>
      const ctx = document.getElementById("myChart").getContext("2d");
      const myChart = new Chart(ctx, {
        type: "bar",
        data: {
          labels: <?php
          // Create if from switch condition
          if ($kategori_table == 'tb_pemuda_umum') {
            echo $chart_label;
          }
          else {
            echo json_encode($chart_label, true);
          }
            ?>,
          datasets: [
            {
              label: "<?php echo $chart_legend ?>",
              data: <?php
              // Create if from switch condition
              if ($kategori_table == 'tb_pemuda_umum') {
                echo $chart_data;
              }
              else {
                echo json_encode($chart_data, true);
              }
              ?>,
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
              ],
              borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)',
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
              ],
              borderWidth: 1,
            },
          ],
        },
        options: {
          plugins: {
            title: {
                display: true,
                text: '<?= $chart_title?>',
                fullsize: true,
                padding: {
                    top: 10,
                    bottom: 30
                }
            }
        },
          scales: {
            y: {
              beginAtZero: true,
            },
          },
        },
      });
    </script>

    <script type="text/javascript">
      var htmlobjek;
      $(document).ready(function() {
        //apabila terjadi event onchange terhadap object <select id=propinsi>
        $("#kec").change(function() {
          var kec = $("#kec").val();
          $.ajax({
            url: "ambil-nagari.php",
            data: "kec=" + kec,
            cache: false,
            success: function(msg) {
              //jika data sukses diambil dari server kita tampilkan
              //di <select id=kota>
              $("#nagari").html(msg);
            }
          });
        });
        $("#kota").change(function() {
          var kota = $("#kota").val();
          $.ajax({
            url: "ambil-kecamatan.php",
            data: "kota=" + kota,
            cache: false,
            success: function(msg) {
              $("tb_kecamatan").html(msg);
            }
          });
        });
      });
      //menampilkan data
    </script>
</body>

</html>