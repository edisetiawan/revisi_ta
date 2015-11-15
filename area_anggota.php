 <?php
// echo $_SESSION['nis']; exit;
require_once('menu.php');
require_once('fungsi.php');

//exit;
?>
<br />
 <section id="katalog" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    
                    <?php
                    $sql_anggota="SELECT *
FROM
    anggota WHERE anggota_nis='".$_SESSION['nis']."'";
       // echo $sql_anggota; exit;
                $result_anggota=mysql_query($sql_anggota);
                $data_anggota=mysql_fetch_array($result_anggota);    
                    ?>
                    <!--  Katalog Content Row 1-->
                    <div class="row">
                        <div class="well">
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="#"> 
                                        <img class="img-responsive img-hover thumbnail" src="images/<?php echo $data_anggota['anggota_images']; ?>" alt="" height="160px auto" width="200px auto"> 
                                    </a>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <table>
                                            <tr>
                                                <td class="text-left"> Nis</td>
                                                <td class="col-sm-1"> : </td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_nis']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Nama</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_nama']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Kelas</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_anggota['kelas']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Jurusan</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_anggota['jurusan']; ?></td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="text-left">Jenis Kelamin</td>
                                                <td> : </td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_jns_kelamin']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Angkatan</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_alamat']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Email</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_email']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Nomor HP</td>
                                                <td>:</td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_hp']; ?></td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td class="text-left">Alamat</td>
                                                <td> : </td>
                                                <td class="text-left"><?php echo $data_anggota['anggota_alamat']; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Pinjman Terkini
                                        </div>
                                        <!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Kode Buku</th>
                                                            <th class="text-center">Judul</th>
                                                            <th class="text-center">Tanggal Pinjam</th>
                                                            <th class="text-center">Tanggal Harus Kembali</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $sql_pinjam="SELECT *
FROM
    anggota
    INNER JOIN pinjaman 
        ON (anggota.anggota_nis = pinjaman.anggota_nis)
    INNER JOIN buku 
        ON (buku.kode_buku = pinjaman.kode_buku) WHERE anggota.anggota_nis='".$_SESSION['nis']."' and pinjaman.status_pinjam='1'";
        //echo $sql_pinjam; exit;
                                                    $result_pinjam=mysql_query($sql_pinjam);
                                                    $rows=mysql_num_rows($result_pinjam);
                                                    if($rows == 0){
                                                    echo "<tr><td colspan='4'>Hai...<b style='color: blue;font: bold;'>".$data_anggota['anggota_nama']."</b> kamu belum meminjam buku di Perpustakaan lhoo..</td></tr>";
                                                    }else{
                                                    while($data_pinjam=mysql_fetch_array($result_pinjam)){ 
													$tgl_dateline=$data_pinjam['tanggal_harus_kembali'];     //diambil dari database
													$tgl_kembali=date('d-m-Y');
													$lambat=terlambat($tgl_dateline, $tgl_kembali);
													//echo $lambat; exit();
													$denda1=200;
													$denda=$lambat*$denda1;
                                                    ?>
                                                        <tr>
                                                            <td><?php  echo $data_pinjam['kode_buku']; ?></td>
                                                            <td><?php  echo $data_pinjam['judul_buku']; ?>
															<?php
													if($lambat > 0 ){
													?> 
													<br />
													<p style="color: red;font: bold;">TERLAMBAT selama <?php echo $lambat; ?> hari dengan jumlah denda <?php echo "Rp. ".number_format($denda,0,',','.'); ?>,00</p>
													<?php } ?>
															</td>
                                                            <td><?php  echo $data_pinjam['tanggal_pinjam']; ?></td>
                                                            <td><?php  echo $data_pinjam['tanggal_harus_kembali']; ?></td>
                                                        </tr>
                                                     <?php   
                                                        }
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     <?php  
     require_once('navigasi.php'); 
     ?>
            </div>
        </div>
    </section>