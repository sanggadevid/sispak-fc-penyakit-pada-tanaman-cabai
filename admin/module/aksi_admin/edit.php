<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


            <div class="row m-t-1">
                <div class="col-md-12">
                    <?php
                    $tampil = mysqli_query($koneksi, "select * from admin where idadmin='$_GET[idadmin]'");
                    $admin = mysqli_fetch_array($tampil);
                    ?>
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="col-lg-12">
                            <a href="index.php?page=data_admin" class="btn btn-primary ">Kembali</a>
                            <div class="m-t-25 card">
                                <div class="card-header">
                                    <strong>Edit</strong> Admin
                                </div>
                                <div class="card-body card-block ">
                                    <div class="row form-group">
                                        <label class="col-md-12"><b>Username</b></label>
                                        <div class="col-md-12">
                                            <input value="<?php echo $admin['username']; ?>" name="username" type="text" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-md-12"><b>Password</b></label>
                                        <div class="col-md-12">
                                            <input value="<?php echo $admin['password']; ?>" type="text" class="form-control form-control-line" name="password">
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

                        $simpan = $koneksi->query("UPDATE  `admin` SET username = '$_POST[username]', password= '$_POST[password]' where idadmin='$_GET[idadmin]'");



                        if ($simpan) {
                            echo "<script>alert('Data Tersimpan');window.location='index.php?page=data_admin';</script>";
                        } else {
                            echo "<script>alert('Data Tidak Tersimpan');window.location='index.php?page=data_admin';</script>";
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