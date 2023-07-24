<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1"><?= $menu_atas ?></h2>
                    </div>
                </div>
            </div>
            <div class="au-card m-t-25">
                <div class="au-card-inner">
                               <?php $ambil = $koneksi->query("select * from user");
                                $pecah = $ambil->fetch_object(); ?>
                    <table>
                        <tr>
                            <td style="text-indent:0.5in;" width="180px">Username</td>
                            <td width="10px">:</td>
                            <td><?php echo $pecah->username ?></td>
                        </tr>
                        <tr>
                            <td style="text-indent:0.5in;" width="180px">Password</td>
                            <td>:</td>
                            <td><?php echo $pecah->password ?></td>
                        </tr>
                        <tr>
                            <td style="text-indent:0.5in;" width="180px">Nama</td>
                            <td>:</td>
                            <td><?php echo $pecah->nama ?></td>
                        </tr>
                        <tr>
                            <td style="text-indent:0.5in;" width="180px">Jenis Kelamin</td>
                            <td>:</td>
                            <td><?php echo $pecah->jeniskelamin ?></td>
                        </tr>
                        <tr>
                            <td style="text-indent:0.5in;" width="180px">Umur</td>
                            <td>:</td>
                            <td><?php echo $pecah->umur ?></td>
                        </tr>
                        <tr>
                            <td style="text-indent:0.5in;" width="180px">Alamat</td>
                            <td>:</td>
                            <td><?php echo $pecah->alamat ?></td>
                        </tr>
                        <tr>
                            <td style="text-indent:0.5in;" width="180px">No Hp</td>
                            <td>:</td>
                            <td><?php echo $pecah->nohp ?></td>
                        </tr>
                        <tr>
                            <td width="180px">
                                <a href="index.php?page=module/aksi_user/edit&iduser=<?php echo $pecah->iduser ?>  " class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                    <p>Copyright © <?php echo date('Y') ?> Sistem Pakar Forward Chaining </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>