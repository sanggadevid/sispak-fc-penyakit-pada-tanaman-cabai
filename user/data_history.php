<div class="main-content">
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Data Riwayat Konsultasi</h2>
                    </div>
                </div>
            </div>
            <div class="row m-t-25">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3 m-t-25">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Konsultasi</th>
                                    <th>Gejala</th>
                                    <th>Penyakit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $iduser = $_SESSION['akun']['iduser'];
                                $no = 1;
                                $ambil = $koneksi->query("SELECT * FROM hasil LEFT JOIN penyakit ON hasil.idpenyakit=penyakit.idpenyakit LEFT JOIN user ON hasil.iduser=user.iduser WHERE hasil.iduser='$iduser' ");
                                while ($pecah = $ambil->fetch_object()) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $pecah->nama ?></td>
                                        <td><?php echo $pecah->jeniskelamin ?></td>
                                        <td><?php echo $pecah->tanggal ?></td>
                                        <td>
                                            <?php
                                            $s = $pecah->gejalakonsul;
                                            $pecahgp = explode(",", $s);
                                            foreach ($pecahgp as $gejd => $value2) {
                                                $b = mysqli_fetch_array($koneksi->query("select * from gejala where idgejala='$value2'"));
                                                echo "* $b[gejala]<br/>";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php if ($pecah->gejalakonsul == 0) { ?>
                                                <h4 class=" role admin title-2 m-b-25 m-t-25">Maaf Penyakit Tidak Terdeteksi</h4>
                                            <?php } else { ?>
                                                <?php echo $pecah->penyakit ?>
                                            <?php } ?>
                                        </td>
                                        <td>
                                              <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PRINT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../user/cetak.php" method="GET">
      <div class="modal-body">
  
      <div class="row">
                        <div class="col-md-2">
                            <label for="">Jabatan</label>
                        </div>
                        <div class="col-md-8">
                        <input type="text" required name="jabatan" class="form-control">
                        <input type="hidden" required name="id"  value="<?= $pecah->idhasil ?>" class="form-control">
                        </div>
                       </div>
                       <br>
                       <div class="row">
                        <div class="col-md-2">
                            <label for="">Nama</label>
                        </div>
                        <div class="col-md-8">
                        <input type="text" required name="nama" class="form-control">
                        </div>
                       </div>
                       
                        
      </div>

      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Cetak</button>
      </div>
      </form>
    </div>
  </div>
</div>
                                            
                                            <div class="table-data-feature">
                                                <div class="item">
                                                    <a target="" href="#">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cetak">
                                                        <button type="button"  data-toggle="modal" data-target="#exampleModal">
                                                        <i class="zmdi zmdi-print"></i>
</button>


                                                        </button>
                                                    </a>
                                                </div>
                                        </td>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                    <p>Copyright © <?php echo date('Y') ?> Sistem Pakar Forward Chaining </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>