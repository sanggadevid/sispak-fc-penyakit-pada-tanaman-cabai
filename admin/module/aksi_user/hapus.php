<?php

$hapus = $koneksi->query("DELETE FROM `user` WHERE iduser='$_GET[iduser]'");
if ($hapus) {
    echo "<script>alert('Data berhasil di hapus');window.location='index.php?page=data_user';</script>";
} else {
    echo "<script>alert('Data gagal di hapus');window.location='index.php?page=data_user';</script>";
}
