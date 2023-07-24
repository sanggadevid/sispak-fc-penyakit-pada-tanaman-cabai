
<div class="main-content">
    
    <div class="">
        <div class="container">
            

            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Data Konsultasi</h2>
                
                    </div>
                </div>
            </div>
            <div class="m-t-25"></div>

            <div class="row">
                <div class="col-md-12">
                    
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-25">

                    <form action="print.php" method="POST">
                       <div class="row">
                        <div class="col-md-2">
                            <label for="">Jabatan</label>
                        </div>
                        <div class="col-md-4">
                        <input type="text" required name="jabatan" class="form-control">
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-md-2">
                            <label for="">Nama</label>
                        </div>
                        <div class="col-md-4">
                        <input type="text" required name="nama" class="form-control">
                        </div>
                       </div>
                       
                        <button type="submit" class="btn btn-primary">Cetak</button>
                    </form>


                    

                    
                        <table class="table table-borderless table-data3 m-t-25">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tanggal Konsultasi</th>
                                    <th>Gejala Dipilih</th>
                                    <th>Nama Penyakit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = $koneksi->query("SELECT * FROM hasil LEFT JOIN user ON hasil.iduser=user.iduser LEFT JOIN penyakit ON hasil.idpenyakit=penyakit.idpenyakit");
                                $no = 1;
                                while ($row = mysqli_fetch_array($sql)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['nama'] ?></td>
                                        <td><?php echo $row['tanggal'] ?></td>
                                        <td>
                                            <?php
                                            $s = $row['gejalakonsul'];
                                            $pecahgp = explode(",", $s);
                                            foreach ($pecahgp as $gejd => $value2) {
                                                $b = mysqli_fetch_array($koneksi->query("select * from gejala where idgejala='$value2'"));
                                                echo "* $b[gejala]<br/>";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php if ($row['idpenyakit'] == 0) { ?>
                                                <h4 class=" role admin title-2 m-b-25 m-t-25">Maaf Penyakit Tidak Terdeteksi</h4>
                                            <?php } else { ?>
                                                <?php echo $row['penyakit'] ?>
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
                        <input type="hidden" required name="id"  value="<?= $row['idhasil'] ?>" class="form-control">
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

                                                <div class="item">
                                                    <a href="index.php?page=module/aksi_konsultasi/hapus&idhasil=<?php echo $row['idhasil'] ?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </a>
                                                </div>
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
                    <p>Copyright © <?php echo date('Y') ?> Sistem Pakar Forward Chaining </p>                    </div>
                </div>
            </div>
        </div>
    </div>
</div>