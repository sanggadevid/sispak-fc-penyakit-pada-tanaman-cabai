<?php
// error_reporting(0);
include('components/koneksi.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Sistem Pakar</title>
    <?php include('components/head.php'); ?>
</head>

<body class=" animsition">
    <div class="page-wrapper">
        <div class="container">

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                              
                                </div>
                            </div>
                        </div>
                        <div class="au-card m-t-25">
                            <div class="au-card-inner">
                            <tr  align="center">
  <table style="width:98%" border="0">
  <th></th>
            <td align="center" colspan="3"><h2> Hasil Konsultasi User<br>
            </h2><h2>Sistem Pakar Mengidentifikasi Penyakit Pada Tanaman Cabai Menggunakan Metode Forward Chaining </h2><br>
            <th></th>
  </table>
</tr>
<hr>
                                <?php

                                // error_reporting(0);
                                $id = $_GET['id'];
                                $getUser = $koneksi->query("SELECT * FROM hasil LEFT JOIN user ON hasil.iduser=user.iduser LEFT JOIN penyakit ON hasil.idpenyakit=penyakit.idpenyakit LEFT JOIN solusi ON penyakit.idpenyakit=solusi.idpenyakit WHERE hasil.idhasil = '$id'");
                                $rowUser = $getUser->fetch_object();
                                ?>
                                <h4 class="title-2 m-b-25"><b>Data User :</b></h4>

                                <table class=''>
                                    <tbody>
                                        <tr>
                                            <th width='200px' scope='row'>Tgl.Konsultasi</th>
                                            <td><?php echo $rowUser->tanggal  ?></td>
                                        </tr>
                                        <tr>
                                            <th width='200px' scope='row'>Username</th>
                                            <td><?php echo $rowUser->username ?></td>
                                        </tr>
                                        <tr>
                                            <th width='200px' scope='row'>Nama Lengkap</th>
                                            <td><?php echo $rowUser->nama ?></td>
                                        </tr>
                                        <tr>
                                            <th width='200px' scope='row'>Jenis Kelamin</th>
                                            <td><?php echo $rowUser->jeniskelamin ?></td>
                                        </tr>
                                        <tr>
                                            <th width='200px' scope='row'>No.Hp</th>
                                            <td><?php echo $rowUser->nohp ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <h4 class=" title-2 m-t-25 m-b-25"><b>Gejala Dipilih :</b></h4>
                                <table class='table table-condensed table-bordered'>
                                    <thead>
                                        <tr>
                                            <th width='10px' scope='row'>No.</th>
                                            <th>Gejala</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $pecahgp = explode(",", $rowUser->gejalakonsul);
                                        foreach ($pecahgp as $gejd => $value2) :
                                            $b = mysqli_fetch_array($koneksi->query("SELECT * FROM gejala WHERE idgejala='$value2'"))
                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $b['gejala'] ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>

                                <h4 class="title-2 m-t-25"><b>Hasil Diagnosa :</b></h4>
                                <?php if ($rowUser->idpenyakit == 0) { ?>
                                    <h4 class=" role admin title-2 m-b-25 m-t-25">Maaf Penyakit Tidak Terdeteksi</h4>
                                <?php } else { ?>
                                    <table class='m-b-25 m-t-25 table table-condense table-bordered'>
                                        <tbody>
                                            <tr>
                                                <th width='200px' scope='row'>Nama Penyakit</th>
                                                <td><?php echo $rowUser->penyakit ?></td>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th width='200px' scope='row'>Keterangan</th>
                                                <td><?php echo $rowUser->keterangan ?></td>
                                            </tr>
                                            <tr>
                                                <th width='200px' scope='row'>Solusi</th>
                                                <td><?php echo $rowUser->solusi ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                <?php } ?>
                                <br>
                                <table border="0" align="right">
    <tr>
        <td colspan="2" align="center"><b>Dharmasraya, 
                <?php echo date('d-M-Y');?> </b><br><?= $_POST['jabatan'] ?><?= $_GET['jabatan'] ?>
              </br><b></b></br></br></br></br>
           <b>(<?= $_POST['nama'] ?><?= $_GET['nama'] ?>) </b><br>
           </td>
    </tr>
</table>
             

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include('components/scripts.php'); ?>
 
</body>

</html>
<!-- end document-->