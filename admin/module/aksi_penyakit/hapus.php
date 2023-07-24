<?php

$hapus = $koneksi->query("DELETE FROM `penyakit` WHERE idpenyakit='$_GET[idpenyakit]'");
if ($hapus) {
    echo "<script>alert('Data berhasil di hapus');window.location='index.php?page=data_penyakit';</script>";
} else {
    echo "<script>alert('Data gagal di hapus');window.location='index.php?page=data_penyakit';</script>";
}
