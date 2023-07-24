<div id='div1'>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Laporan User</h2>
                    </div>
                </div>
            </div>
            <div class="m-t-25"></div>

            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                    <form action="cetak.php" method="POST">
                       <div class="row">
                        <div class="col-md-2">
                            <label for="">Jabatan</label>
                        </div>
                        <div class="col-md-4">
                        <input type="text" required name="jabatan" class="form-control">
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-md-2">
                            <label for="">Nama</label>
                        </div>
                        <div class="col-md-4">
                        <input type="text" required name="nama" class="form-control">
                        </div>
                       </div>
                       
                        <button type="submit" class="btn btn-primary">Cetak</button>
                    </form>
                        <table class="table table-borderless table-data3 m-t-25">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Umur</th>
                                    <th>Alamat</th>
                                    <th>No Hp</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $ambil = $koneksi->query("select * from user");
                                while ($pecah = $ambil->fetch_object()) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $pecah->username ?></td>
                                        <td><?php echo $pecah->password ?></td>
                                        <td><?php echo $pecah->nama ?></td>
                                        <td><?php echo $pecah->jeniskelamin ?></td>
                                        <td><?php echo $pecah->umur ?></td>
                                        <td><?php echo $pecah->alamat ?></td>
                                        <td><?php echo $pecah->nohp ?></td>
                                     
                                      
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
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
</div>


<script>
   function  print_member(){
    window.print()
 
    document.getElementById("atasan").style.display = "none";

   }
</script>