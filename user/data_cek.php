<div class="main-content">
    
<div class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Hasil Konsultasi</h2>
                    </div>
                </div>
            </div>
            <div class="au-card m-t-25">
                <div class="au-card-inner">
                    <?php

                    // error_reporting(0);
                    $jml = mysqli_num_rows($koneksi->query("SELECT * FROM gejala"));
                    $koma = 0;
                    $getGejala = $_GET['gjl'];
                    $s = $_GET['gjl'];
                    $id = $_SESSION['akun']['iduser'];
                    $user = mysqli_fetch_array($koneksi->query("SELECT * FROM user WHERE iduser= '$id'"));
                    ?>
                    <h4 class="title-2 m-b-25"><b>Data User :</b></h4>

                    <table class=''>
                        <tbody>
                            <tr>
                                <th width='200px' scope='row'>Tgl.Konsultasi</th>
                                <td><?php echo date('d-m-Y')  ?></td>
                            </tr>
                            <tr>
                                <th width='200px' scope='row'>Username</th>
                                <td><?php echo $user['username'] ?></td>
                            </tr>
                            <tr>
                                <th width='200px' scope='row'>Nama Lengkap</th>
                                <td><?php echo $user['nama'] ?></td>
                            </tr>
                            <tr>
                                <th width='200px' scope='row'>Jenis Kelamin</th>
                                <td><?php echo $user['jeniskelamin'] ?></td>
                            </tr>
                            <tr>
                                <th width='200px' scope='row'>No.Hp</th>
                                <td><?php echo $user['nohp'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <h4 class=" title-2 m-t-25 m-b-25"><b>Gejala Dipilih :</b></h4>
                    <table class='table table-condensed table-bordered'>
                        <thead>
                            <tr>
                                <th width='10px' scope='row'>No.</th>
                                <th>Gejala</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $pecahgp = explode(",", $s);
                            foreach ($pecahgp as $gejd => $value2) :
                                $b = mysqli_fetch_array($koneksi->query("SELECT * FROM gejala WHERE idgejala='$value2'"))
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $b['gejala'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>

                    <?php

                    // echo "$s.<br>";
                 
                    $penyakit = $koneksi->query("SELECT * FROM rule order by idrule asc");
                    while ($rp = mysqli_fetch_array($penyakit)) {
                        $a1 = 0;
                        $b1 = 0;
                        $pecahgp = explode(",", $s);
                        foreach ($pecahgp as $gejd => $value2) {
                            $jika = $rp['idgejala'];
                            $pecahjk = explode(",", $jika);
                          
                            foreach ($pecahjk as $gejk => $value3) {
                                if ($value2 == "$value3") {
                                    $a1 = $a1 + 1;
                                   
                                }
                            }
                            
                        }

                        $jika2 = $rp['idgejala'];
                        $pecahjk2 = explode(",", $jika2);
                        foreach ($pecahjk as $gejk => $value4) {
                            $b1 = $b1 + 1;
                            
                         }

                         



                        // echo "$a1 / $b  </br>";
                        $kodep = "$rp[idpenyakit]";
                        $hp[$kodep] = $a1 / $b1;
//                          echo "<pre>";
//                         var_dump($hp[$kodep]);
                        
//                         echo"$kodep";
//  echo "</pre>";
                    }
                 

                    $max = max($hp);
                    // echo "<pre>";
                    // var_dump($max);
                    // echo "</pre>";
                    $penyakit2 = $koneksi->query("SELECT * FROM `solusi` LEFT JOIN penyakit ON solusi.idpenyakit=penyakit.idpenyakit ");
                    while ($h2 = mysqli_fetch_array($penyakit2)) {
                        $kdp = "$h2[idpenyakit]";
                        // echo "<pre>";
                        // var_dump($hp[$kdp]);
                        
                        
                        // echo "</pre>";
                        if ($max == $hp[$kdp] ) {
                            // echo "Benar";
                            $koneksi->query("INSERT INTO hasil VALUES ('','$id','$kdp',now(),'$_GET[gjl]')");
                            $kdpakhir=$kdp;
                        }else{
                            // echo "salah";
                        }
                    }
                    
                    ?>

                    <hr>
                    <h4 class='title-2 m-b-25 m-t-25'><b>Hasil Diagnosa :</b></h4>
                    <?php

                    $rule = mysqli_fetch_object($koneksi->query("SELECT * FROM `rule` LEFT JOIN penyakit ON rule.idpenyakit=penyakit.idpenyakit LEFT JOIN solusi ON penyakit.idpenyakit=solusi.idpenyakit WHERE rule.idpenyakit = '$kdpakhir'"));
                    // echo "<pre>";
                    // var_dump($rule);
                    // var_dump($_SESSION['akun']);
                    // echo "</pre>";
                    ?>
                    <?php
                    if ($rule->idpenyakit != 0) {
                    ?>
                        <table class='table table-condense table-bordered'>
                            <tbody>
                                <tr>
                                    <th width='200px' scope='row'>Nama Penyakit</th>
                                    <td><?php echo $rule->penyakit ?></td>
                                    </th>
                                </tr>
                                <tr>
                                    <th width='200px' scope='row'>Keterangan</th>
                                    <td><?php echo $rule->keterangan ?></td>
                                </tr>
                                <tr>
                                    <th width='200px' scope='row'>Solusi</th>
                                    <td><?php echo $rule->solusi ?></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php } else { ?>
                        <h4 class=" role admin title-2 m-b-25 ">Maaf Penyakit Tidak Terdeteksi</! -->
                        <?php } ?>

                        <?php
                        // $koneksi->query("INSERT INTO hasil VALUES ('','$id','$rule->idpenyakit',now(),'$_GET[gjl]')");
                        ?>
                        <?php

                        $id_sebelumnya = mysqli_fetch_array($koneksi->query("SELECT * FROM hasil ORDER BY idhasil DESC"));
                        $cetak = mysqli_fetch_array($koneksi->query("SELECT * FROM hasil WHERE iduser='$id'"));
                        ?>
                        <br>
                </div>
                <button type="button" class=" m-t-25 btn btn-success"  data-toggle="modal" data-target="#exampleModal">
                                                      Cetak  <i class="zmdi zmdi-print"></i>
</button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PRINT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../user/cetak.php" method="GET">
      <div class="modal-body">
  
      <div class="row">
                        <div class="col-md-2">
                            <label for="">Jabatan</label>
                        </div>
                        <div class="col-md-8">
                        <input type="text" required name="jabatan" class="form-control">
                        <input type="hidden" required name="id"  value="<?php echo $id_sebelumnya['idhasil'] ?>" class="form-control">
                        </div>
                       </div>
                       <br>
                       <div class="row">
                        <div class="col-md-2">
                            <label for="">Nama</label>
                        </div>
                        <div class="col-md-8">
                        <input type="text" required name="nama" class="form-control">
                        </div>
                       </div>
                       
                        
      </div>

      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Cetak</button>
      </div>
      </form>
    </div>
  </div>
</div>
                <!-- <a href="cetak.php?id=" target='_blank' class=" m-t-25 btn btn-success">Cetak</a> -->
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