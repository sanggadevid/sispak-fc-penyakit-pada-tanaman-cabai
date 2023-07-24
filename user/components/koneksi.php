<?php $koneksi = mysqli_connect("localhost", "root", "", "db_pakarcabai");
$no = 1;
$menu_atas = 'SISTEM PAKAR';
// Untuk Rupiah
error_reporting(0);
function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka);
    return $hasil_rupiah;
}
