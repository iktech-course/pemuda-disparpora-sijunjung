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
        <img alt="Logo Pertanian" src="images/pemkabb.png" height="40px" style="margin-left: 10px;">
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
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="logout.php" onclick="return confirm('Yakin Ingin Keluar?')">Logout</a></li>
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
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Data Pemuda
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Pemuda Berdasarkan Jenis Kelamin</a>
                                <a class="nav-link" href="#">Pemuda Berdasarkan Pendidikan</a>
                                <a class="nav-link" href="#">Pemuda Berdasarkan Pekerjaan</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Kegiatan Pemuda
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Pemuda Dalam Prestasi</a>
                                <a class="nav-link" href="#">Pemuda Dalam Organisasi</a>
                                <a class="nav-link" href="#">Pemuda Dalam Wirausaha</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="admin-berita.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Berita
                        </a>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tentang Kami
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts">
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
                        <li class="breadcrumb-item active">Kegiatan Pemuda</li>
                    </ol>
                    <!-- judul-->
                    <h3 style="text-align : center; font-family : serif;">Pemuda Berprestasi</h3>
                    <!-- Tabel-->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Pemuda
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">

                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>ALAMAT</th>
                                        <th>CABANG LOMBA</th>
                                        <th>PRESTASI</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <!-- Menampilkan Data-->
                                    <?php
                                    $koneksi = mysqli_connect("localhost", "root", "", "db_website");

                                    $query = mysqli_query($koneksi, "SELECT * FROM tb_pemuda");
                                    $no = 0;
                                    while ($data = mysqli_fetch_array($query)) {
                                        $no++;
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $no ?></th>
                                            
                                            <td><?php echo $data["nama"] ?></td>
                                            <td><?php echo $data["alamat"] ?></td>
                                            <td><?php echo $data["cabang_lomba"] ?></td>
                                            <td><?php echo $data["prestasi"] ?></td>
                                            <td>
                                            <button type="button" class="btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal1<?php echo $data["id_prestasi"] ?>">
                                                    Edit
                                                </button>
                                                <a href="hapus-prestasi.php?id_prestasi=<?= $data['id-prestasi'] ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')">Hapus</a>
                                            </td>

                        </div>
                        <!--end modal-->
                                                                        <!-- Modal Edit Data -->
                                                                        <div class="modal fade" id="exampleModal1<?php echo $data["id_prestasi"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Data Pemuda</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="" method="post" enctype="multipart/form-data">
                                                                    <input name="id_prestasi" placeholder="Id" value="<?php echo $data["id_prestasi"] ?>" class="form-control" hidden>
                                                                    <input name="nama" placeholder="Nama Lengkap" value="<?php echo $data["nama"] ?>" class="form-control"><br>
                                                                    <input name="alamat" placeholder="Alamat Lengkap" value="<?php echo $data["alamat"] ?>" class="form-control"><br>
                                                                    <input name="cabang lomba" placeholder="Jenis Lomba" value="<?php echo $data["cabang_lomba"] ?>" class="form-control"><br>
                                                                    <input name="Prestasi" placeholder="Prestasi Yang Diraih" value="<?php echo $data["prestasi"] ?>" class="form-control"><br>

                                                                    <input type="submit" value="Upload" name="update" class="btn btn-primary">

                                                                </form>

                                                                <?php
                                                                if (isset($_POST['update'])) {
                                                                    $id_prestasi = mysqli_real_escape_string($koneksi, $_POST['id_prestasi']);
                                                                    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
                                                                    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
                                                                    $cabang_lomba = mysqli_real_escape_string($koneksi, $_POST['cabang_lomba']);
                                                                    $prestasi = mysqli_real_escape_string($koneksi, $_POST['prestasi']);
                                                                       mysqli_query($koneksi, "UPDATE tb_pemuda set nama='$nama', alamat='$alamat', cabang_lomba='$cabang_lomba', prestasi='$prestasi' where id_prestasi='$id_prestasi'");

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
                    <?php
                                    }
                    ?>

                    </tr>

                    </tbody>

                    </table>
                    <!-- merupakan menu untuk menambah data-->

                    <div><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg> Tambah
                        </button>


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">DATA PRESTASI PEMUDA</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post" enctype="multipart/form-data">

                                            <input name="nama" placeholder="NAMA LENGKAP" class="form-control"><br>
                                            <input name="alamat" placeholder="ALAMAT LENGKAP" class="form-control"><br>
                                            <input name="cabang_lomba" placeholder="CABANG LOMBA" class="form-control"><br>
                                            <textarea name="prestasi" placeholder="PRESTASI" class="form-control"></textarea><br>
                                            <input type="submit" value="Upload" name="proses" class="btn btn-primary">

                                        </form>

                                        <?php
                                        $koneksi = mysqli_connect("localhost", "root", "", "db_website");
                                        if (isset($_POST['proses'])) {
                                            $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
                                            $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
                                            $cabang_lomba = mysqli_real_escape_string($koneksi, $_POST['cabang_lomba']);
                                            $prestasi = mysqli_real_escape_string($koneksi, $_POST['prestasi']);
                                            
                                            // $sql = "INSERT INTO tb_pemuda (nama, alamat, cabang_lomba, prestasi) VALUES ('$nama','$alamat','$cabang_lomba','$prestasi')";
                                            // echo($sql);
                                            mysqli_query($koneksi, "INSERT INTO tb_pemuda (nama, alamat, cabang_lomba, prestasi) VALUES ('$nama','$alamat','$cabang_lomba','$prestasi')");

                                            echo "<b>Gambar berhasil di upload</b>";
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