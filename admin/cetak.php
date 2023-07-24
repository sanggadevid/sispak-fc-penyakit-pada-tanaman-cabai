<?php
error_reporting(0);
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
                                    <!-- <h2 class="title-1">Hasil Konsultasi</h2> -->
                                </div>
                            </div>
                        </div>
                        <div class="au-card m-t-25">
                            <div class="au-card-inner">
                            <tr  align="center">
  <table style="width:98%" border="0">
  <th></th>
            <td align="center" colspan="3"><h2> Laporan User<br>
            </h2><h2>Sistem Pakar Mengidentifikasi Penyakit Pada Tanaman Cabai Menggunakan Metode Forward Chaining </h2><br>
            <th></th>
  </table>
</tr>
<hr>
                                <?php

                                // error_reporting(0);
                                $id = $_GET['id'];
                                $getUser = $koneksi->query("SELECT * FROM hasil LEFT JOIN user ON hasil.iduser=user.iduser LEFT JOIN penyakit ON hasil.idpenyakit=penyakit.idpenyakit WHERE hasil.idhasil = '$id'");
                                $rowUser = $getUser->fetch_object();
                                ?>
                          

                                <table class="table table-borderless table-data3 m-t-25">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Umur</th>
                                    <th>Alamat</th>
                                    <th>No Hp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $ambil = $koneksi->query("select * from user");
                                while ($pecah = $ambil->fetch_object()) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $pecah->username ?></td>
                                        <td><?php echo $pecah->password ?></td>
                                        <td><?php echo $pecah->nama ?></td>
                                        <td><?php echo $pecah->jeniskelamin ?></td>
                                        <td><?php echo $pecah->umur ?></td>
                                        <td><?php echo $pecah->alamat ?></td>
                                        <td><?php echo $pecah->nohp ?></td>
                                        <td>
                                            <div class="table-data-feature">
                                                <div class="item">
                                                    <a href="index.php?page=module/aksi_user/edit&iduser=<?php echo $pecah->iduser ?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                    </a>
                                                </div>

                                                <div class="item">
                                                    <a href="index.php?page=module/aksi_user/hapus&iduser=<?php echo $pecah->iduser ?>">
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
                </div>
            </div>
        </div>

    </div>
    <?php include('components/scripts.php'); ?>
   
</body>

</html>
<!-- end document-->