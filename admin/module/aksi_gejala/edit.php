<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


            <div class="row m-t-1">
                <div class="col-md-12">
                    <?php
                    $tampil = mysqli_query($koneksi, "select * from gejala where idgejala='$_GET[idgejala]'");
                    $gejala = mysqli_fetch_array($tampil);
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
                                        <label class="col-md-12"><b>Kode Gejala</b></label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $gejala['kdgejala']; ?>" class="form-control form-control-line" name="kdgejala">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Gejala</b></label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $gejala['gejala']; ?>" class="form-control form-control-line" name="gejala">
                                        </div>
                                    </div>
                                   <div class="form-group">
                                 <div class="col-md-12">
                                 <img src="../assets/images/gejala/<?php echo $gejala['gambar']?>"style='width:100px' alt="">
                                 </div>
                                </div>
                                   </div>
                                <div class="form-group">
                                        <label class="col-md-12"><b>Gambar</b></label>
                                        <div class="col-md-12">
                                            <input type="hidden"  value="<?php echo $gejala['gambar']; ?>" class="form-control form-control-line" name="gambarOld">
                                            <input type="file"  class="form-control form-control-line" name="gambar">
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

                       
                        $rand = rand();
                        $ekstensi =  array('png','jpg','jpeg','gif','PNG','JPG','JPEG','GIF');
                        $filename = $_FILES['gambar']['name'];
                        $lokasi_file  = $_FILES['gambar']['tmp_name'];
                        $ukuran = $_FILES['gambar']['size'];
                        $ext = pathinfo($filename, PATHINFO_EXTENSION);
                        

                                $xx = $rand.'_'.$filename;
                               move_uploaded_file($_FILES['gambar']['tmp_name'], '../assets/images/gejala/'.$rand.'_'.$filename);
                               if ($filename !=''){
                                if($ukuran < 1044070){
                                    $simpan = $koneksi->query("UPDATE  `gejala` SET kdgejala = '$_POST[kdgejala]', gejala= '$_POST[gejala]', gambar='$xx' where idgejala='$_GET[idgejala]'");

                                }else{
                                    echo "<script>alert('Data  Ukuran salah');window.location='index.php?page=data_gejala';</script>";
                                }	
                            }else{
                                $simpan = $koneksi->query("UPDATE  `gejala` SET kdgejala = '$_POST[kdgejala]', gejala= '$_POST[gejala]', gambar='$_POST[gambarOld]' where idgejala='$_GET[idgejala]'");
                              }

                                if ($simpan) {
                                    echo "<script>alert('Data Update');window.location='index.php?page=data_gejala';</script>";
                                } else {
                                    echo "<script>alert('Data Tidak Tersimpan');window.location='index.php?page=data_gejala';</script>";
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