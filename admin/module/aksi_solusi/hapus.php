<?php

$hapus = $koneksi->query("DELETE FROM `solusi` WHERE idsolusi='$_GET[idsolusi]'");
if ($hapus) {
    echo "<script>alert('Data berhasil di hapus');window.location='index.php?page=data_solusi';</script>";
} else {
    echo "<script>alert('Data gagal di hapus');window.location='index.php?page=data_solusi';</script>";
}
