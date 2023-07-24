<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


            <div class="row m-t-1">
                <div class="col-md-12">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="col-lg-12">
                            <a href="index.php?page=data_admin" class="btn btn-primary ">Kembali</a>
                            <div class="m-t-25 card">
                                <div class="card-header">
                                    <strong>Tambah</strong> Penyakit
                                </div>
                                <div class="card-body card-block ">

                                    <div class="form-group">
                                        <label class="col-md-12"><b>Kode Penyakit</b></label>
                                        <div class="col-md-12">
                                            <input name="kdpenyakit" type="text" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Penyakit</b></label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="penyakit">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Keterangan Penyakit</b></label>
                                        <div class="col-md-12">
                                            <textarea type="text" class="form-control form-control-line" name="keterangan" rows="5"></textarea>
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
                        $kdpenyakit     = $_POST['kdpenyakit'];
                        $penyakit     = $_POST['penyakit'];
                        $keterangan     = $_POST['keterangan'];

                        $simpan = $koneksi->query("INSERT INTO `penyakit`                                   (`kdpenyakit`, 
                                                                            `penyakit`,`keterangan`)
                                                                            VALUES 
                                                                            ('$kdpenyakit',
                                                                            '$penyakit','$keterangan')");


                        if ($simpan) {
                            echo "<script>alert('Data Tersimpan');window.location='index.php?page=data_penyakit';</script>";
                        } else {
                            echo "<script>alert('Data Gagal Tersimpan');window.location='index.php?page=data_penyakit';</script>";
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