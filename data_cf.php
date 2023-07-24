<?php
$ambil = $koneksi->query("SELECT * FROM tb_galleri");
$galleri = $ambil->num_rows;
$ambil = $koneksi->query("SELECT * FROM tb_jadwal");
$jadwal = $ambil->num_rows;
$ambil = $koneksi->query("SELECT * FROM tb_paket");
$paket = $ambil->num_rows;
$ambil = $koneksi->query("SELECT * FROM tb_admin");
$admin = $ambil->num_rows;
?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Certainty Factor</h2>
                    </div>
                </div>
            </div>
            <div class="au-card m-t-25">
                <div class="au-card-inner">
                Certainty Factor atau faktor kepastian diperkenalkan pertama kali pada tahun 1975 oleh shortliffe buchanan. Certainty factor adalah suatu metode untuk membuktikan apakah suatu fakta itu pasti ataukah tidak pasti. Metode ini sangat cocok untuk sistem pakar yang mendiagnosis sesuatu yang belum pasti. <br><br>

                Menurut Prihatini (2011), faktor kepastian kepastian yang diisikan oleh pakar bersama aturan dalam kepercayaan pakar terhadap hubungan antara antecedent dan consequent pada aturan kaidah produksi faktor kepastian yang diisikan oleh pengguna untuk menunjukkan besarnya kepercayaan terhadap keberadaan masing-masing elemen dalam antecedent.
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