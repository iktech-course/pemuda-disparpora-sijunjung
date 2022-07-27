
<!DOCTYPE html>
<html>
    <head>
    <link rel="shortcut icon" href="gambar/Logo_of_Ministry_of_Agriculture_of_the_Republic_of_Indonesia.svg.png">
        <title>Kegiatan</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">		
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">		
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
     h1{
      font-family: serif;
      text-align: center;
    }
  </style>
    </head>
<body class="bg-whitesmoke">
  <!--Menu Navigasi-->
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light bg-success " style="margin: 10px; position: sticky; top: 0%;z-index: 3;">
        <a class="navbar-brand" href="#">
          <img alt="Logo Pertanian" src="gambar/Logo_of_Ministry_of_Agriculture_of_the_Republic_of_Indonesia.svg.png" height="40px" style="margin-left: 10px;" >
        </a> 
        <a class="navbar-brand" href="#" style="color: white;"><b>Pertanian Merangin</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php" style="color: whitesmoke;" data-bs-toggle="tooltip" data-bs-placement="top" title="Halaman Utama">Beranda</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kegiatan-panen.php" style="color: whitesmoke;">Informasi</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="data-produksi.php" style="color: whitesmoke;">Data Produksi</a>
              </li>
           </ul>
            
        </div>
        <div>
            <a href="Login.php" class="btn btn-primary btn-md"  style="align-items: flex-end;">Login</a>
        </div>
      </nav>
      <!--isi content-->
      <!--Button kegiatan dan komoditas-->
      <div class="container-md">
      <div class="row">
      <div class="col-xl-3 col-md-6">
             <div class="card bg-primary text-white mb-4">
             <div class="card-body"><p style="font-family : serif; font-size : 18px;">Kegiatan Pasca Panen</p></div>
             <div class="card-footer d-flex align-items-center justify-content-between">
             <a class="small text-white stretched-link" href="kegiatan-panen.php">View Details</a>
             <div class="small text-white"><i class="fas fa-angle-right"></i></div>
             </div>
             </div>
        </div>
        <div class="col-xl-3 col-md-6">
             <div class="card bg-success text-white mb-4">
             <div class="card-body"><p style="font-family : serif; font-size : 18px;">Komoditas</></div>
             <div class="card-footer d-flex align-items-center justify-content-between">
             <a class="small text-white stretched-link" href="komoditas.php">View Details</a>
             <div class="small text-white"><i class="fas fa-angle-right"></i></div>
             </div>
             </div>
        </div>
      </div>
      </div>
      <!--JUDUL-->
      <h1 style="text-align: center;">KEGIATAN PASCA PANEN</h1>
<p class="lead" style="text-align: center;">Dinas Tanaman Pangan dan Hortikultura</p>
      <div class="container">
      
        
            <!--tampilkan-->
          <?php
        $koneksi = mysqli_connect("localhost","root","","db_website");

        $query = mysqli_query($koneksi,"SELECT * FROM kegiatan");

        while($data = mysqli_fetch_array($query))
        {

        ?>
        <div class="card mb-3" style="max-width: 100%; background-color : whitesmoke;">
        <div class="row g-0">
        <div class="col-md-4">
        <img class="img-fluid rounded-start" src="gambar/<?= $data['images']?>" alt="" style="width: 350px; height: 300px;">
        </div>
        <div class="col-md-8">
        <div class="card-body">
          <table>
            <tr>
              <td></td>
              <td></td>
              <td class="text-muted"><p class="card-text" style="text-align: justfy;"><small><?php echo $data["waktu"] ?></small>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg> Hits :
              
              <?php
$conn = mysqli_connect('localhost', 'root', '', 'db_website');

$find_count = mysqli_query($conn, "SELECT * FROM view");

while($row = mysqli_fetch_assoc($find_count)){
    $current_count = $row['jumlah_kegiatan'];
    $new_count = $current_count + 1;
    $update_count = mysqli_query($conn, "UPDATE view SET jumlah_kegiatan = '".$new_count."'");
    echo  $new_count;
}
?>
              | Kegiatan</p></td>
            </tr>
            <tr>
              <td>Nama Kegiatan</td>
              <td>:</td>
              <td><h5 class="card-title" style="font-family: serif"><?php echo $data["kegiatan"] ?></h5></td>
            </tr>
            <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td><p class="card-text" style="text-align : justify"><?php echo $data["keterangan"] ?></p></td>
            </tr>
          </table>
            </div>
          </div>
          </div>
          </div>
        <?php
        }
        ?>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
           </div>
      </div>
    
      <div>
        <footer class="page-footer font-small mdb-color pt-4 bg-success" >
    
          <!-- Footer Links -->
          <div class="container text-center text-md-left">
        
            <!-- Footer links -->
            <div class="row text-center text-md-left">
        
              <!-- Grid column -->
              <div class="col">
                <h6 class="text-uppercase mb-4 font-weight-bold" style="color: white;">Dinas Tanaman Pangan Dan Hortikultura</h6>
                <p style="color: white;">Copyright @2021 design website by Ilham dan Riko<br>
                Jln. Pemuda IBRD KM. 02 Kab. Merangin Prov. Jambi</p>
              </div>
             
              <div class="col" style="color: white;">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p>
                   Email :<a href="https://accounts.google.com/AddSession/signinchooser?hl=id&continue=https%3A%2F%2Fmail.google.com%2Fmail&service=mail&ec=GAlAFw&flowName=GlifWebSignIn&flowEntry=AddSession"> pertanian.merangin@yahoo.co.id </a></p>
                <p>
                  Telp (0746) 322781 Fax (0746) 322781</p>
              </div>
            </div>
          </div>
        
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
    </html>