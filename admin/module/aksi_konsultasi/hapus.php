<?php

$hapus = $koneksi->query("DELETE FROM `hasil` WHERE idhasil='$_GET[idhasil]'");
if ($hapus) {
    echo "<script>alert('Data berhasil di hapus');window.location='index.php?page=data_konsultasi';</script>";
} else {
    echo "<script>alert('Data gagal di hapus');window.location='index.php?page=data_konsultasi';</script>";
}
