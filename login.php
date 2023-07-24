<div class="main-content" >
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Silahkan Login</h2>
                    </div>
                </div>
            </div>
            <div class="au-card m-t-25" >
                <div class="au-card-inner">
                    <div class="login-form">
                        <form method="post">
                            <div class="form-group">
                                <br>
                                <label class="col-md-12 "><u>Username</u></label>
                                <div class="col-md-10">
                                    <input name="user" type="text" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12"><u>Password</u></label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control form-control-line" name="pass">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12"></label>
                                <div class="col-md-10">
                                    <select name="level" id="level" class="form-control">
                                        <option value="-">Pilih Level</option>>
                                        <option value="Admin">Admin</option>>
                                        <option value="User">User</option>>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input name="login" type="submit" value="Login" class="btn btn-info">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php
                        if (@$_POST["login"]) { //jika tombol Login diklik
                            $user = $_POST["user"];
                            $pass = $_POST["pass"];
                            $level = $_POST["level"];


                            if ($level == "User") {
                                $tabel = "user";
                            } else {
                                $tabel = "admin";
                            }


                            if ($user != "" && $pass != "") {

                                $em = mysqli_query($koneksi, "SELECT * from $tabel where password = '$pass' && username = '$user'");
                                $data = mysqli_fetch_assoc($em);

                                // echo "<pre>";
                                // var_dump($data);
                                // echo "</pre>";
                                // exit;
                                session_start();
                                if ($data["username"] == $user && $data["password"] == $pass) {
                                    $_SESSION["user"] = $data["username"];
                                    $_SESSION["pass"] = $data["password"];
                                    $_SESSION["akun"] = $data;

                                    if ($level == "User") {

                        ?>

                                        <script>
                                            alert("Selamat Datang")
                                            window.location.href = 'user/index.php'
                                        </script>
                                        exit;
                                    <?php

                                    } else {
                                    ?>
                                        <script>
                                            alert("Selamat Datang ")
                                            window.location.href = 'admin/index.php'
                                        </script>
                                        exit;
                                    <?php
                                    }
                                    ?>
                        <?php
                                } else {

                                    echo "<script>alert('Mohon Ulangi Lagi !! Data Tidak Ditemukan!!');</script>";
                                    echo " <script>window.location='index.php?page=login';</script>";
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                    <p>Copyright © <?php echo date('Y') ?> Sistem Pakar Forward Chaining </p>                    </div>
                </div>
            </div>
        </div>
    </div>
</div>