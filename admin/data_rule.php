<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Data rule</h2>
                    </div>
                </div>
            </div>
            <div class="m-t-25"></div>

            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <a href="index.php?page=module/aksi_rule/tambah" class="btn btn-primary ">Tambah</a>
                        <table class="table table-borderless table-data3 m-t-25">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Rule</th>
                                    <th>Gejala</th>
                                    <th>Penyakit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // LEFT JOIN gejala on rule.idgejala=gejala.idgejala 
                                $no = 1;
                                $ambil = $koneksi->query("SELECT * FROM rule LEFT JOIN penyakit on rule.idpenyakit=penyakit.idpenyakit");
                                while ($pecah = $ambil->fetch_object()) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $pecah->kdrule ?></td>
                                        <td>
                                            <?php
                                            $s = $pecah->idgejala;
                                            $pecahgp = explode(",", $s);
                                            foreach ($pecahgp as $gejd => $value2) {
                                                $b = mysqli_fetch_array($koneksi->query("select * from gejala where idgejala='$value2'"));
                                                echo "- $b[gejala]<br/>";
                                            }
                                            ?>
                                        </td>
                                        <td><?php echo $pecah->penyakit ?></td>
                                        <td>
                                            <div class="table-data-feature">
                                                <div class="item">
                                                    <a href="index.php?page=module/aksi_rule/hapus&idrule=<?php echo $pecah->idrule ?>">
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