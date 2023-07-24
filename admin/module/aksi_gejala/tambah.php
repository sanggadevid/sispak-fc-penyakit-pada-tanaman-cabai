<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


            <div class="row m-t-1">
                <div class="col-md-12">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="col-lg-12">
                            <a href="index.php?page=data_gejala" class="btn btn-primary ">Kembali</a>
                            <div class="m-t-25 card">
                                <div class="card-header">
                                    <strong>Tambah</strong> Gejala
                                </div>
                                <div class="card-body card-block ">

                                    <div class="form-group">
                                        <label class="col-md-12"><b>Kode Gejala</b></label>
                                        <div class="col-md-12">
                                            <input name="kdgejala" type="text" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Gejala</b></label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="gejala">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Gambar</b></label>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control form-control-line" name="gambar">
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
                        $kdgejala     = $_POST['kdgejala'];
                        $gejala     = $_POST['gejala'];

                        $rand = rand();
                        $ekstensi =  array('png','jpg','jpeg','gif','PNG','JPG','JPEG','GIF');
                        $filename = $_FILES['gambar']['name'];
                        $ukuran = $_FILES['gambar']['size'];
                        $ext = pathinfo($filename, PATHINFO_EXTENSION);
                        
                        if(!in_array($ext,$ekstensi) ) {
                            echo "<script>alert('Data Tidak Tersimpan');window.location='index.php?page=data_gejala';</script>";
                        }else{
                            if($ukuran < 1044070){		
                                $xx = $rand.'_'.$filename;
                                move_uploaded_file($_FILES['gambar']['tmp_name'], '../assets/images/gejala/'.$rand.'_'.$filename);
                              $simpan = $koneksi->query("INSERT INTO `gejala` (`kdgejala`, `gejala`, gambar) VALUES ('$kdgejala','$gejala','$xx')");
                                if ($simpan) {
                                    echo "<script>alert('Data Tersimpan');window.location='index.php?page=data_gejala';</script>";
                                } else {
                                    echo "<script>alert('Data Tidak Tersimpan');window.location='index.php?page=data_gejala';</script>";
                                }
                            }else{
                                echo "<script>alert('Data Tidak Tersimpan');window.location='index.php?page=data_gejala';</script>";
                            }

 


                      
                    }}
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