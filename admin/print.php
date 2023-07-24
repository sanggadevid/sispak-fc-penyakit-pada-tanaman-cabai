<?php
include('components/koneksi.php');
include('components/head.php');
?>

<!-- <script>
    window.print()
</script> -->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        
                 
                    </div>
                </div>
            </div>
            <div class="m-t-25"></div>

            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-25">
                    <table style="width:98%" border="0">
  <th></th>
            <td align="center" colspan="3"><h2>Laporan Hasil Konsultasi <br>
            </h2><h2>Sistem Pakar Mengidentifikasi Penyakit Pada Tanaman Cabai Menggunakan Metode Forward Chaining</h2><br>
            <th></th>
  </table>
</tr>
<hr>
                        <table  class="table table-borderless table-data3 m-t-25">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tanggal Konsultasi</th>
                                    <th>Gejala Dipilih</th>
                                    <th>Nama Penyakit</th>
                                   
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

            <br>
<table border="0" align="right">
    <tr>
        <td colspan="2" align="center"><b>Dharmasraya, 
                <?php echo date('d-M-Y');?> </b><br><?= $_POST['jabatan'] ?>
              </br><b></b></br></br></br></br>
           <b>(<?= $_POST['nama'] ?>) </b><br>
           </td>
    </tr>
</table>
             
        </div>
    </div>
</div>