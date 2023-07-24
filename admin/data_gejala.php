<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Data Gejala</h2>
                    </div>
                </div>
            </div>
            <div class="m-t-25"></div>

            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <a href="index.php?page=module/aksi_gejala/tambah" class="btn btn-primary ">Tambah</a>
                        <table class="table table-borderless table-data3 m-t-25">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <!-- <th>Tipe</th> -->
                                    <th>Kode Gejala</th>
                                    <th>Gejala</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $ambil = $koneksi->query("select * from gejala");
                                while ($pecah = $ambil->fetch_object()) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <!-- <td><?php echo $pecah->type ?></td> -->
                                        <td><?php echo $pecah->kdgejala ?></td>
                                        <td><?php echo $pecah->gejala ?></td>
                                        <td><img src="../assets/images/gejala/<?= $pecah->gambar?>" alt="" style="width:100px;height:100PX"></td>
                                        <td>
                                            <div class="table-data-feature">
                                                <div class="item">
                                                    <a href="index.php?page=module/aksi_gejala/edit&idgejala=<?php echo $pecah->idgejala ?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                    </a>
                                                </div>

                                                <div class="item">
                                                    <a href="index.php?page=module/aksi_gejala/hapus&idgejala=<?php echo $pecah->idgejala ?>">
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