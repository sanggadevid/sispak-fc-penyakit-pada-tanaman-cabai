<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


            <div class="row m-t-1">
                <div class="col-md-12">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="col-lg-12">
                  
                            <div class="m-t-25 card">
                                <div class="card-header">
                                    <strong>Registrasi</strong> 
                                </div>
                                <div class="card-body card-block ">

                                    <div class="form-group">
                                        <label class="col-md-12"><b>Username</b></label>
                                        <div class="col-md-12">
                                            <input name="username" type="text" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Password</b></label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Nama</b></label>
                                        <div class="col-md-12">
                                            <input name="nama" type="text" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Jenis Kelamin</b></label>
                                        <div class="col-md-12">
                                            <select name="jeniskelamin" class="form-control">
                                                <option value="L">Laki-Laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Umur</b></label>
                                        <div class="col-md-12">
                                            <input class="form-control" min="1" type="number" name="umur">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Alamat</b></label>
                                        <div class="col-md-12">
                                            <textarea name="alamat" rows="2" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>No Hp</b></label>
                                        <div class="col-md-12">
                                            <input class="form-control" min="0" type="number" name="nohp">
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
                        $username     = $_POST['username'];
                        $password     = $_POST['password'];
                        $nama         = $_POST['nama'];
                        $jeniskelamin = $_POST['jeniskelamin'];
                        $umur         = $_POST['umur'];
                        $alamat       = $_POST['alamat'];
                        $nohp       = $_POST['nohp'];

                        $simpan = $koneksi->query("INSERT INTO `user`(`username`, 
                                                                            `password`, 
                                                                            `nama`, 
                                                                            `jeniskelamin`, 
                                                                            `umur`, 
                                                                            `alamat`,`nohp`)
                                                                            VALUES 
                                                                            ('$username',
                                                                            '$password',
                                                                            '$nama',
                                                                            '$jeniskelamin',
                                                                            '$umur',
                                                                            '$alamat','$nohp')");

                        if ($simpan) {
                            echo "<script>alert('Registrasi berhasil, Silahkan');window.location='index.php?page=login';</script>";
                        } else {
                            echo "<script>alert('Data Tidak Tersimpan');window.location='index.php?page=login';</script>";
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