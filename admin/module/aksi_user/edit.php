<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


            <div class="row m-t-1">
                <div class="col-md-12">
                    <?php
                    $tampil = mysqli_query($koneksi, "select * from user where iduser='$_GET[iduser]'");
                    $user = mysqli_fetch_array($tampil)
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
                                        <label class="col-md-12"><b>Username</b></label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $user['username']; ?>" class="form-control form-control-line" name="username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Password</b></label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $user['password']; ?>" class="form-control form-control-line" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Nama</b></label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $user['nama']; ?>" class="form-control form-control-line" name="nama">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Jenis Kelamin</b></label>
                                        <div class="col-md-12">

                                            <select name="jeniskelamin" value="<?php echo $user['jeniskelamin']; ?>" class="form-control ">
                                                <option value="<?php echo $user['jeniskelamin']; ?>"><?php echo $user['jeniskelamin']; ?></option>
                                                <option value="L">Laki-Laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Umur</b></label>
                                        <div class="col-md-12">
                                            <input class="form-control" min="1" type="number" name="umur" value="<?php echo $user['umur']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Alamat</b></label>
                                        <div class="col-md-12">
                                            <input name="alamat" value="<?php echo $user['alamat']; ?>" rows="2" class="form-control form-control-line" type="text"></input>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>No Hp</b></label>
                                        <div class="col-md-12">
                                            <input name="nohp" value="<?php echo $user['nohp']; ?>" class="form-control form-control-line" type="text"></input>
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

                        $simpan = $koneksi->query("UPDATE  `user` SET username = '$_POST[username]', password= '$_POST[password]' , nama= '$_POST[nama]' , jeniskelamin= '$_POST[jeniskelamin]' , umur= '$_POST[umur]' , alamat= '$_POST[alamat]',nohp= '$_POST[nohp]' where iduser='$_GET[iduser]'");



                        if ($simpan) {
                            echo "<script>alert('Data Tersimpan');window.location='index.php?page=data_user';</script>";
                        } else {
                            echo "<script>alert('Data Tidak Tersimpan');window.location='index.php?page=data_user';</script>";
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