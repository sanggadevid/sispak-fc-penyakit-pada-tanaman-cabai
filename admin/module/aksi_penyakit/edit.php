<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


            <div class="row m-t-1">
                <div class="col-md-12">
                    <?php
                    $tampil = mysqli_query($koneksi, "select * from penyakit where idpenyakit='$_GET[idpenyakit]'");
                    $penyakit = mysqli_fetch_array($tampil);
                    ?>
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="col-lg-12">
                            <a href="index.php?page=data_admin" class="btn btn-primary ">Kembali</a>
                            <div class="m-t-25 card">
                                <div class="card-header">
                                    <strong>Edit</strong> Admin
                                </div>
                                <div class="card-body card-block ">
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Kode Penyakit</b></label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $penyakit['kdpenyakit']; ?>" class="form-control form-control-line" name="kdpenyakit">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Penyakit</b></label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $penyakit['penyakit']; ?>" class="form-control form-control-line" name="penyakit">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Keterangan Penyakit</b></label>
                                        <div class="col-md-12">
                                            <textarea name="keterangan" class="form-control form-control-line" cols="30" rows="10"><?php echo $penyakit['keterangan']; ?>
                                            </textarea>
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

                        $simpan = $koneksi->query("UPDATE  `penyakit` SET kdpenyakit = '$_POST[kdpenyakit]', penyakit= '$_POST[penyakit]' , keterangan= '$_POST[keterangan]'  where idpenyakit='$_GET[idpenyakit]'");

                        if ($simpan) {
                            echo "<script>alert('Data Tersimpan');window.location='index.php?page=data_penyakit';</script>";
                        } else {
                            echo "<script>alert('Data Tidak Tersimpan');window.location='index.php?page=data_penyakit';</script>";
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