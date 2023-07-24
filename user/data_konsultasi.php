<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Konsultasi</h2>
                    </div>
                </div>
            </div>
            <div class="au-card m-t-25">
                <div class="au-card-inner">
                    <?php
                    $x =  $koneksi->query("SELECT * FROM gejala");
                    $jml = $x->num_rows;
                    if ($_GET['hal'] != "") {
                        $hal = $_GET['hal'];
                    } else {
                        $hal = 1;
                    }
                    echo "<h3>Jawablah Pertanyaan Berikut Sesuai Dengan Keadaan <br>($hal dari $jml)</h3></br>";
                    echo "<table class='table table-hovered table-bordered'>";

                    $posisi = $hal - 1;
                    $getR = $koneksi->query("SELECT * from gejala order by idgejala asc limit $posisi,1");
                    $r = $getR->fetch_object();
                    echo "<tr><td align='center'><img src='../assets/images/gejala/$r->gambar' style='width:200px;height:200PX'></h2></td></tr>";
                    echo "<tr><td align='center'><h2>Apakah Tanaman Mengalami $r->gejala ?</h2></td></tr>";
                    if ($_GET['gjl'] != "") {
                        $gjl = "$_GET[gjl],$r->idgejala";
                    } else {
                        $gjl = "$r->idgejala";
                    }
                    if ($jml == "$hal") {
                        echo "<tr><td colspan=2 align='center'>";
                        echo "<a href='index.php?page=data_cek&gjl=$gjl' class='item btn btn-info btn-lg'>Ya</a>";
                        echo "<a href='index.php?page=data_cek&gjl=$_GET[gjl]' class='item btn btn-danger btn-lg'>Tidak</a>";
                        echo "</td></tr>";
                    } else {
                        $hal = $hal + 1;
                        echo "<tr><td colspan=2 align='center'>";
                        echo "<a href='index.php?page=data_konsultasi&hal=$hal&gjl=$gjl' class='item btn btn-info btn-lg'>Ya</a>";
                        echo "<a href='index.php?page=data_konsultasi&hal=$hal&gjl=$_GET[gjl]' class='item btn btn-danger btn-lg'>Tidak</a>";
                        echo "</td></tr>";
                    }
                    echo "</table>";
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                    <p>Copyright © <?php echo date('Y') ?> Sistem Pakar Forward Chaining </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>