<?php

$hapus = $koneksi->query("DELETE FROM `rule` WHERE idrule='$_GET[idrule]'");
if ($hapus) {
    echo "<script>alert('Data berhasil di hapus');window.location='index.php?page=data_rule';</script>";
} else {
    echo "<script>alert('Data gagal di hapus');window.location='index.php?page=data_rule';</script>";
}
