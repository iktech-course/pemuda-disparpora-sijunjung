<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="gambar/Logo_of_Ministry_of_Agriculture_of_the_Republic_of_Indonesia.svg.png">
        <title>Beranda</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Hasil produksi merangin">
        <meta name="description" content="hasil produksi di kabupaten merangain adalah">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">		
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
<body>
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
              <a class="nav-link" href="index.php" style="color: whitesmoke;">Beranda</span></a>
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
            <a href="Login.php" class="btn btn-primary btn-sm" style="align-items: flex-end;">Login</a>
        </div>
      </nav>
      <?php
                $koneksi = mysqli_connect("localhost","root","","db_website");

                $query = mysqli_query($koneksi,"SELECT * FROM foto");

                while($data = mysqli_fetch_array($query))
               {

                ?>
      <div class="container">
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="height: 450px; width: 100%;">
              <div class="carousel-item active">
                <img src="gambar/<?= $data['foto']?>" class="d-block w-100 h-120" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  
                </div>
              </div>
              <div class="carousel-item">
                <img src="gambar/<?= $data['foto2']?>" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  
                </div>
              </div>
              <div class="carousel-item">
                <img src="gambar/<?= $data['foto3']?>" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <?php
                 }
                 ?> 
      <!--informasi berjalan-->
        <div class="container" style="padding-top: 10px;">  
          <div class="row featurette">
             <div class="col-md-3 jumbotron" style="border-top:2px solid #0066ff;" >
               <h4 style="text-align: center" >Informasi</h4>
               <p class="lead" style="text-align: center">Terkini</p>
               <div class="col-sd-6 col-md-10">
               <marquee behavior="scroll" direction="up" scrollamount="2" >
              <?php
                $koneksi = mysqli_connect("localhost","root","","db_website");

                $query = mysqli_query($koneksi,"SELECT * FROM informasi");

                while($data = mysqli_fetch_array($query))
               {

                ?>
                
              <div class="thumbnail">
                 <img src="gambar/<?= $data['images']?>" class="rounded" style="border: 1px solid grey;" height="120px" width="170px" alt="...">
                 <div class="caption">
                 <h5 style="text-align : center"><?php echo $data["judul"] ?></h5>
                      <p class="lead" style="font-size : 15px; text-align : justify;"><?php echo $data["keterangan"] ?></p>
                      <p><a href="<?php echo $data["link"] ?>" class="btn btn-info btn-sm" role="button"> Lihat</a></p>
                  
                <?php
                 }
                 ?> 
                 </div>
                  </div>
                  </marquee>
      
          </div>
             </div>
             <!-- end informasi berjalan -->
             <div class="col-md-1"> &nbsp </div>
             <div class="col-md-8 jumbotron" style="border-top:2px solid #0066ff; text-align: center;">
             <?php
                $koneksi = mysqli_connect("localhost","root","","db_website");

                $query = mysqli_query($koneksi,"SELECT * FROM tb_event");

                while($data = mysqli_fetch_array($query))
               {

                ?>
              <center><img src="gambar/<?= $data['images']?>" style="margin-bottom: 30px;" height="150PX" width="120PX"></center>
               <h2 style="text-align: center;"><?php echo $data["judul"] ?></h2>
               <p > <?php echo $data["deskripsi"] ?></p>
             </div><br>
             <?php
                 }
                 ?> 
             </div>
           </div>
          </div> 
          <script src="assets/js/jquery.js"></script> 
      <script src="assets/js/popper.js"></script> 
      <script src="assets/js/bootstrap.js"></script>
    <div>
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
</body>
    </html>