<?php

$hapus = $koneksi->query("DELETE FROM `gejala` WHERE idgejala='$_GET[idgejala]'");
if ($hapus) {
    echo "<script>alert('Data berhasil di hapus');window.location='index.php?page=data_gejala';</script>";
} else {
    echo "<script>alert('Data gagal di hapus');window.location='index.php?page=data_gejala';</script>";
}
