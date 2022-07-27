<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dinas Tanaman Pangan & Hortikultura</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">		
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
            <!-- Navbar Brand-->
            <img alt="Logo Pertanian" src="gambar/Logo_of_Ministry_of_Agriculture_of_the_Republic_of_Indonesia.svg.png" height="40px" style="margin-left: 10px;" >
            <a class="navbar-brand ps-3" href="#">Dinas Pertanian</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="admin-kelola.php">Kelola Akun</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php"  onclick="return confirm('Yakin Ingin Keluar?')">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color : #198754">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="dashboard-admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard Admin
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link" href="admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Data Produksi / Panen
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Informasi
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="admin-informasi.php">Kegiatan Pasca Panen</a>
                                    <a class="nav-link" href="admin-komoditas.php">Komoditas</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Beranda
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <a class="nav-link" href="admin-beranda.php">Informasi</a>
                                            <a class="nav-link" href="admin-beranda-foto.php">Foto</a>
                                            <a class="nav-link" href="admin-sambutan.php">Kata Sambutan</a>
                                </nav>
                            </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dinas Tanaman Pangan Dan Hortikultura Kabupaten Merangin</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Produksi >_<</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Data Hasil Produksi/Panen</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="admin.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Informasi</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="admin-informasi.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Beranda</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="admin-beranda.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Grafik Data Produksi Padi
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas>
                                <!-- Grafik -->
                <?php

                $akses_database = mysqli_connect("localhost", "root", "", "db_website");

                ?>

                <?php

                $akses_tabel = mysqli_query($akses_database, "SELECT Id_produksi, kecamatan, produksi FROM data_2021");

                ?>
            <?php

            $sumbu_y = 'Jumlah Produksi';	
	            $k = -1;
	
	            while($row = mysqli_fetch_array($akses_tabel))  
                          {  
					  
							
					           $y = $row["produksi"];
							   $kecamatan = $row["kecamatan"];
							   $k = $k + 1;
							   
							  
							$dataPoints[$k] = array("y"=> $y, "label"=> $kecamatan);
							   				
							   }
                                    ?>

                    <script>
                    window.onload = function () {

                    var chart = new CanvasJS.Chart("chartContainer", {
                        animationEnabled: true,
                        theme: "light1", // "light1", "light2", "dark1", "dark2"
                        title:{
                            text: <?php print json_encode($sumbu_y . " Padi 2021"); ?>
                        },
                        axisY: {
                            title: <?php print json_encode($sumbu_y); ?>
                        },
                        data: [{        
                            type: "column",  
                            showInLegend: true, 
                            legendMarkerColor: "grey",
                            legendText: <?php print json_encode("kecamatan"); ?>,
                            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                        }]
                            
                        
                    });
                    chart.render();

                    }
                    </script>


                    <div id="chartContainer" style="height: 300px; max-width: 400px; margin: 0px auto;"></div>
                    <script src="canvasjs.min.js"></script>
                    <!-- end grafik-->
                                </div>
                                </div>
                            </div>
                            
                        </div>
                         <!-- Menu pilihan untuk kegiatan dam komoditas-->
                         <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Tahun
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="admin.php">2019</a></li>
                            <li><a class="dropdown-item" href="2020.php">2020</a></li>
                            <li><a class="dropdown-item" href="2021.php">2021</a></li>
                           
                        </ul>
                        </div>
                        <!-- judul-->
                        <h3 style="text-align : center; font-family : serif;">DATA PRODUKSI / PANEN</h3>
                        <!-- tabel -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Produksi / Panen <a class="btn btn-secondary btn-sm" href="print.php">Export</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                           
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Kecamatan</th>
                                            <th>Luas Tanam (Ha)</th>
                                            <th>Luas Panen (Ha)</th>
                                            <th>Provitas (Kw/Ha)</th>
                                            <th>Produksi (Ton)</th>
                                            <th>Tahun</th>
                                            <th>Edit</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Kecamatan</th>
                                            <th>Luas Tanam (Ha)</th>
                                            <th>Luas Panen (Ha)</th>
                                            <th>Provitas (Kw/Ha)</th>
                                            <th>Produksi (Ton)</th>
                                            <th>Tahun</th>
                                            <th>Edit</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                            $koneksi = mysqli_connect("localhost","root","","db_website");

                             $query = mysqli_query($koneksi,"SELECT * FROM data_2021");

                             while($data = mysqli_fetch_array($query))
                                 {

                            ?>
                                        <tr>
                                            <td><?php echo $data["id_produksi"] ?></td>
                                            <td><?php echo $data["kecamatan"] ?></td>
                                            <td><?php echo $data["luas_tanam"] ?></td>
                                            <td><?php echo $data["luas_panen"] ?></td>
                                            <td><?php echo $data["provitas"] ?></td>
                                            <td><?php echo $data["produksi"] ?></td>
                                            <td><?php echo $data["tahun"] ?></td>
                                            <td><button type="button" class="btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal1<?php echo $data["id_produksi"] ?>">
                                             Edit
                                            </button>
                                        <!-- Modal Edit Data -->
       <div class="modal fade" id="exampleModal1<?php echo $data["id_produksi"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DATA HASIL PRODUKSI / PANEN</h5>\
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
            <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
        
        <input  name="id_produksi" value="<?php echo $data["id_produksi"] ?>" placeholder="id" class="form-control"><br>
        <input  name="kecamatan"  placeholder="kecamatan" value="<?php echo $data["kecamatan"] ?>" class="form-control"><br>
        <input  name="luas_tanam"  placeholder="luas_tanam" value="<?php echo $data["luas_tanam"] ?>" class="form-control"><br>
        <input  name="luas_panen"  placeholder="luas_panen" value="<?php echo $data["luas_panen"] ?>" class="form-control"><br>
        <input  name="provitas"  placeholder="provitas" value="<?php echo $data["provitas"] ?>" class="form-control"><br>
        <input  name="produksi"  placeholder="produksi" value="<?php echo $data["produksi"] ?>" class="form-control"><br>
        <input  name="tahun"  placeholder="tahun" value="<?php echo $data["tahun"] ?>" class="form-control"><br>
        <input type="submit" value="Upload" name="update" class="btn btn-primary">
        
        </form>

        <?php
        if(isset($_POST['update']))
        {
            $id_produksi = mysqli_real_escape_string($koneksi, $_POST['id_produksi']);
            $kecamatan = mysqli_real_escape_string($koneksi, $_POST['kecamatan']);
            $luas_tanam = mysqli_real_escape_string($koneksi, $_POST['luas_tanam']);
            $luas_panen = mysqli_real_escape_string($koneksi, $_POST['luas_panen']);
            $provitas = mysqli_real_escape_string($koneksi, $_POST['provitas']);
            $produksi = mysqli_real_escape_string($koneksi, $_POST['produksi']);
            $tahun = mysqli_real_escape_string($koneksi, $_POST['tahun']);
           

            mysqli_query($koneksi,"UPDATE data_2021 set kecamatan='$kecamatan', luas_tanam='$luas_tanam', luas_panen='$luas_panen', provitas='$provitas', produksi='$produksi', tahun='$tahun' where id_produksi='$id_produksi'");

            echo "<b>data berhasil di upload</b>";
            
        }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
<!--end modal-->
                                        </td>
                                            <td><a class="btn btn-danger btn-sm" href="hapus-produksi.php?id=<?=$data['id_produksi']?>" onclick="return confirm('Hapus data ini?')">HAPUS</a></td>
                                            <?php
        }
    ?>
                                            
                                        </tr>
      
                                    </tbody>
                                    
                                </table>
                                <!-- merupakan menu untuk menambah data-->

        <div><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg> Tambah
          </button>
                                            

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DATA HASIL PRODUKSI / PANEN</h5>\
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
            <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
        
        <input  name="id_produksi"  placeholder="id" class="form-control"><br>
        <input  name="kecamatan"  placeholder="kecamatan" class="form-control"><br>
        <input  name="luas_tanam"  placeholder="luas_tanam" class="form-control"><br>
        <input  name="luas_panen"  placeholder="luas_panen" class="form-control"><br>
        <input  name="provitas"  placeholder="provitas" class="form-control"><br>
        <input  name="produksi"  placeholder="produksi" class="form-control"><br>
        <input  name="tahun"  placeholder="tahun" class="form-control"><br>
        <input type="submit" value="Upload" name="proses" class="btn btn-primary">
        
        </form>

        <?php
        $koneksi = mysqli_connect("localhost","root","","db_website");
        if(isset($_POST['proses']))
        {
            $id_produksi = mysqli_real_escape_string($koneksi, $_POST['id_produksi']);
            $kecamatan = mysqli_real_escape_string($koneksi, $_POST['kecamatan']);
            $luas_tanam = mysqli_real_escape_string($koneksi, $_POST['luas_tanam']);
            $luas_panen = mysqli_real_escape_string($koneksi, $_POST['luas_panen']);
            $provitas = mysqli_real_escape_string($koneksi, $_POST['provitas']);
            $produksi = mysqli_real_escape_string($koneksi, $_POST['produksi']);
            $tahun = mysqli_real_escape_string($koneksi, $_POST['tahun']);
           

            mysqli_query($koneksi,"INSERT INTO data_2021 (id_produksi, kecamatan, luas_tanam, luas_panen, provitas, produksi, tahun) VALUES ('$id_produksi', '$kecamatan', '$luas_tanam', '$luas_panen', '$provitas', '$produksi', '$tahun')");

            echo "<b>data berhasil di upload</b>";
            
        }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
<!--end modal-->

                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
