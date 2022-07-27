<div>
		  <h3 style="text-align :center; margin-top: 20px"> DATA PEMUDA KABUPATEN SIJUNJUNG </h3>
		  </div>
          <div class="container">
          <a href="form_tambahkan.php" class="btn btn-success mb-3 mt-2 p-2">Tambah Data</a>
              <table class="table table-striped">
              <thead>
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">NIK</th>
                    <th scope="col">TEMPAT LAHIR</th>
                    <th scope="col">TANGGAL LAHIR</th>
                    <th scope="col"> JENIS KELAMIN</th>
                    <th scope="col"> RIWAYAT ORGANISASI</th>
                    <th scope="col"> AKSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include 'koneksi.php';

                    $query = mysqli_query($koneksi, "SELECT * FROM tb_prestasi");
                    $no = 0;

                    while ($data = mysqli_fetch_array($query))
                    {
                        $no++;
                ?>
                    <tr>
                        <th scope="row"><?=  $no ?></th>
                        <td> <?= $data['NAMA'] ?></td>
                        <td> <?= $data['NIK'] ?></td>
                        <td> <?= $data['TEMPAT LAHIR']?></td>
                        <td> <?= $data['TANGGAL LAHIR']?></td>
                        <td><?= $data['JENIS KELAMIN'] ?></td>
                        <td><?= $data['RIWAYAT ORGANISASI']?></td>
                        <td>
                        <a href="form_edit.php?nik=<?= $data['NIK'] ?>" class="btn btn-warning">Edit</a>
                        <a href="hapus-proses.php?nik=<?= $data['NIK'] ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
              </div>
          </div>
	</body>
</html>
<table border="1">
    <tr>
        <th> No </th>
        <th> Nama OKP </th>
    </tr>
    <tr>
        <td>ssa</td>
        <td>ssa</td>
    </tr>
</table>
<table class="table table-bordered border-primary">
<tr>
        <th> No </th>
        <th> Nama OKP </th>
    </tr>
    <tr>
        <td>ssa</td>
        <td>ssa</td>
    </tr>
</table>