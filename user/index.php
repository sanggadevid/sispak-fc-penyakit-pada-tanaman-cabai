<?php
session_start();
// error_reporting(0);
include('components/koneksi.php');

if (!isset($_SESSION['akun'])) {
    echo "<script>alert('Anda harus login');location='../index.php';</script>";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Sistem Pakar</title>
    <?php include('components/head.php'); ?>
</head>

<body class=" animsition">
    
    <div class="page-wrapper">
        <?php include('components/menu.php'); ?>
        <!-- PAGE CONTAINER-->
        <div class="page-container" style="background-image: url('../assets/images/xx.jpg')">
            <!-- HEADER DESKTOP-->
            <?php include('components/top-bar.php'); ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <?php include('contents.php'); ?>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    <?php include('components/scripts.php'); ?>
</body>

</html>
<!-- end document-->