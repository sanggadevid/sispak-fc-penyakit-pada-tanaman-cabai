<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


            <div class="row m-t-1">
                <div class="col-md-12">
                    <?php
                    $tampil = mysqli_query($koneksi, "select * from solusi where idsolusi='$_GET[idsolusi]'");
                    $solusi = mysqli_fetch_array($tampil);

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
                                        <label class="col-md-12"><b>Kode Solusi</b></label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $solusi['kdsolusi']; ?>" class="form-control form-control-line" name="kdsolusi">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Solusi</b></label>
                                        <div class="col-md-12">
                                            <textarea name="solusi" class="form-control form-control-line" cols="30" rows="5"><?php echo $solusi['solusi'] ?></textarea>
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
                                            <script>
                                                document.getElementsByName("idpenyakit")[0].value = "<?php echo $solusi['idpenyakit']; ?>";
                                            </script>
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

                        $simpan = $koneksi->query("UPDATE  `solusi` SET kdsolusi = '$_POST[kdsolusi]', solusi= '$_POST[solusi]' , idpenyakit= '$_POST[idpenyakit]'  where idsolusi='$_GET[idsolusi]'");



                        if ($simpan) {
                            echo "<script>alert('Data Tersimpan');window.location='index.php?page=data_solusi';</script>";
                        } else {
                            echo "<script>alert('Data Tersimpan');window.location='index.php?page=data_solusi';</script>";
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