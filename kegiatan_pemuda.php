
<div class="about-box">
    <div class="container">
        <div class="section-title text-center">
            <h3> Galeri  </h3>
        </div>
        <hr>
        <div class="row">
            <?php
            include './koneksi/koneksi.php';
        $select = mysqli_query($koneksi, "SELECT * FROM `tb_berita` WHERE id_galeri  ORDER BY tanggal DESC");
        $no=1;
        

        while($d = mysqli_fetch_array($select)){ ?>
        
            <div class="col-md-3">
                <div class="panel panel-warning">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <img class="img-responsive" style="width:230px;height:200px"
                            src="./admin/foto/<?php echo $d['foto']; ?>" alt="image">

                        <div>
                        <h6 style="margin-top:25px" ><span class="fa fa-laptop"></span>  <?= substr( $d['judul'],0,25) ?></h6>
                        </div>

                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
</div>