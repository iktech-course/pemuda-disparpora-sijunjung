<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dinas Pemuda dan Olahraga</title>
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
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-secondary">
            <!-- Navbar Brand-->
            <img alt="Logo Pertanian" src="images/pemkabb.png" height="40px" style="margin-left: 10px;" >
            <a class="navbar-brand ps-3" href="#">Dinas Pemuda & Olahraga</a>
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
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color : #6c757d">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="dashboard-admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link" href="admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Data Pemuda
                            </a>
                            <a class="nav-link" href="admin-kegiatan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Kegiatan Pemuda
                            </a>
                            <a class="nav-link" href="admin-berita.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Berita
                            </a>
                            <a class="nav-link" href="admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tentang Kami
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Event
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="admin-pemuda.php">Pemuda Pelopor</a>
                                    <a class="nav-link" href="admin-paski.php">Paskibraka</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Galeri
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <a class="nav-link" href="admin-galeri.php">Foto</a>
                                            
                                </nav>
                            </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dinas Pemuda & Olahraga Kabupaten Sijunjung</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Kegiatan</li>
                        </ol>
                        <!-- judul-->
                        <h3 style="text-align : center; font-family : serif;">Kegiatan</h3>
                        <!-- Tabel-->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Berita
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                           
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama</th>
                                            <th>Tempat Tanggal Lahir</th>
                                            <th>Asal Sekolah</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelaman</th>
                                            <th>Tinggi Badan</th>
                                            <th>Berat Badan</th>
                                            <th>Nomor Hp</th>
                                            <th>Edit</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama</th>
                                            <th>Tempat Tanggal Lahir</th>
                                            <th>Asal Sekolah</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelaman</th>
                                            <th>Tinggi Badan</th>
                                            <th>Berat Badan</th>
                                            <th>Nomor Hp</th>
                                            <th>Edit</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <!-- Menampilkan Data-->
                                    <?php
                            $koneksi = mysqli_connect("localhost","root","","db_website");

                             $query = mysqli_query($koneksi,"SELECT * FROM tb_paski");
                             $no = 0;
                             while($data = mysqli_fetch_array($query))
                                 {
                                    $no++;
                            ?>
                                        <tr>
                                            <th scope="row"><?=  $no ?></th>
                                            <td><?php echo $data["nama"] ?></td>
                                            <td><?php echo $data["ttl"] ?></td>
                                            <td><?php echo $data["asal_sekolah"] ?></td>
                                            <td><?php echo $data["alamat"] ?></td>
                                            <td><?php echo $data["jenis_kelamin"] ?></td>
                                            <td><?php echo $data["tinggi_badan"] ?></td>
                                            <td><?php echo $data["berat_badan"] ?></td>
                                            <td><?php echo $data["no_hp"] ?></td>
                                            <td>
                                            <a href="hapus-paski.php?id_paski=<?= $data['id_paski'] ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')">Hapus</a>
                                            <?php
                             }
                              ?>
                                            
                                        </tr>
      
                                    </tbody>
                                    
                                </table>
        
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
