<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


            <div class="row m-t-1">
                <div class="col-md-12">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="col-lg-12">
                            <a href="index.php?page=data_solusi" class="btn btn-primary ">Kembali</a>
                            <div class="m-t-25 card">
                                <div class="card-header">
                                    <strong>Tambah</strong> Solusi
                                </div>
                                <div class="card-body card-block ">

                                    <div class="form-group">
                                        <label class="col-md-12"><b>Kode Solusi</b></label>
                                        <div class="col-md-12">
                                            <input name="kdsolusi" type="text" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Solusi</b></label>
                                        <div class="col-md-12">
                                            <textarea name="solusi" rows="4" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Penyakit</b></label>
                                        <div class="col-md-12">
                                            <select class="form-control form-control-line" name="idpenyakit">
                                                <?php
                                                $ambil = $koneksi->query("SELECT * FROM penyakit");
                                                while ($row = $ambil->fetch_assoc()) {
                                                ?>
                                                    <option value="<?php echo $row['idpenyakit']; ?>"><?php echo $row['penyakit']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button name="simpan" type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Simpan
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['simpan'])) {
                        $kdsolusi     = $_POST['kdsolusi'];
                        $solusi    = $_POST['solusi'];
                        $idpenyakit     = $_POST['idpenyakit'];

                        $simpan = $koneksi->query("INSERT INTO `solusi` (`kdsolusi`, 
                                                                            `solusi`,`idpenyakit`)
                                                                            VALUES 
                                                                            ('$kdsolusi',
                                                                            '$solusi',
                                                                            '$idpenyakit')");


                        if ($simpan) {
                            echo "<script>alert('Data Tersimpan');window.location='index.php?page=data_solusi';</script>";
                        } else {
                            echo "<script>alert('Data Tidak Tersimpan');window.location='index.php?page=data_olusi';</script>";
                        }
                    }
                    ?>
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