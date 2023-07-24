<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


            <div class="row m-t-1">
                <div class="col-md-12">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="col-lg-12">
                            <a href="index.php?page=data_rule" class="btn btn-primary ">Kembali</a>
                            <div class="m-t-25 card">
                                <div class="card-header">
                                    <strong>Tambah</strong> Rule
                                </div>
                                <div class="card-body card-block ">

                                    <div class="form-group">
                                        <label class="col-md-12"><b>Kode Rule</b></label>
                                        <div class="col-md-12">
                                            <input name="kdrule" type="text" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Gejala</b></label>
                                        <div class="col-md-12 ">
                                            <?php
                                            $getGejala = $koneksi->query("SELECT * FROM gejala ORDER BY idgejala");
                                            while ($rowGejala = $getGejala->fetch_object()) {
                                            ?>
                                             
                                                <input type="checkbox" class="form-check-input  " name="<?php echo $rowGejala->idgejala ?>" value="<?php echo $rowGejala->idgejala ?>"> <?php echo $rowGejala->kdgejala ?> ). <?php echo $rowGejala->gejala ?><br />
                                            <?php } ?>
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

                        $g = $koneksi->query("SELECT * FROM gejala ORDER BY idgejala");

                        $no = 0;
                        while ($r = mysqli_fetch_array($g)) {
                            $gejala = "$r[idgejala]";

                            if ($_POST[$gejala] != "") {
                                if ($no >= 1) {
                                    $koma = ",";
                                } else {
                                    $koma = "";
                                }
                                $no++;

                                $gjl = "$gjl$koma$_POST[$gejala]";
                            }
                        }

                        $kdrule     = $_POST['kdrule'];
                        // $idgejala    = $_POST['idgejala'];
                        $idpenyakit     = $_POST['idpenyakit'];

                        $simpan = $koneksi->query("INSERT INTO `rule` (`kdrule`, 
                                                                        `idgejala`,
                                                                        `idpenyakit`)
                                                                        VALUES 
                                                                        ('$kdrule',
                                                                        '$gjl',
                                                                        '$idpenyakit')");


                        if ($simpan) {
                            echo "<script>alert('Data Tersimpan');window.location='index.php?page=data_rule';</script>";
                        } else {
                            echo "<script>alert('Data Tidak Tersimpan');window.location='index.php?page=data_rule';</script>";
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