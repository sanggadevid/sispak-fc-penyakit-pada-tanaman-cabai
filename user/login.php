<?php
session_start();
include('components/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Administrator</title>
    <?php include('components/head.php'); ?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="login.php">
                                <img width="50px" src="images/bil_logo.jpg" alt="BIL Transport" />
                            </a>
                            <p style="margin-left:6px ;">PT. Putra BIL Transport</p>
                        </div>
                        <div class="login-form">
                            <form method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input name="uname" class="au-input au-input--full" type="text" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="pass" class="au-input au-input--full" type="password" placeholder="Password">
                                </div>
                                <button name="login" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Login</button>
                            </form>
                            <?php
                            // jk ada tombol login di tekan 
                            if (isset($_POST['login'])) {
                                // mk lakukan query cek akun admin di db
                                $uname = $_POST['uname'];
                                $pass = $_POST['pass'];
                                $ambil = $koneksi->query("SELECT * FROM tb_admin WHERE admin_user='$uname'AND admin_pass='$pass'");

                                // hitung akun yang terambil
                                $cek = $ambil->num_rows;
                                // jk 1 akun yg cocok mk boleh di loginkan
                                if ($cek > 0) {
                                    // anda sudah login
                                    // mendapatkan akun dlm btk array
                                    $akun = $ambil->fetch_object();

                                    // Simpan di session admin
                                    $_SESSION["admin"] = $akun;

                                    echo "<script>alert('Anda sukses login');</script>";
                                    echo "<script>window.location='index.php'</script>";
                                } else {
                                    // gagal login
                                    echo "<script>alert('Anda gagal login, Periksa Username dan password');</script>";
                                    echo "<script>window.location='login.php'</script>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include('components/scripts.php'); ?>

</body>

</html>
<!-- end document-->