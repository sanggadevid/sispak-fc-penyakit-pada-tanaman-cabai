<?php

$hapus = $koneksi->query("DELETE FROM `admin` WHERE idadmin='$_GET[idadmin]'");
if ($hapus) {
    echo "<script>alert('Data berhasil di hapus');window.location='index.php?page=data_admin';</script>";
} else {
    echo "<script>alert('Data gagal di hapus');window.location='index.php?page=data_admin';</script>";
}
