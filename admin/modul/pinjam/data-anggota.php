          <?php
          //require_once('inc-db.php');
          require_once('fungsi.php');
          
          $var_anggota_id=$_SESSION['anggota_nis'];
          $pinjam			= date("d-m-Y");                   //pinjam
          $tiga_hari		= mktime(0,0,0,date("n"),date("j")+3,date("Y"));
          $kembali		= date("d-m-Y", $tiga_hari);          //kembali
          //echo $var_anggota_id; exit;
          $query="SELECT *
FROM
    anggota
                WHERE anggota.anggota_nis='".$_SESSION['anggota_nis']."'";
          //echo $query; exit;
          $result=mysql_query($query);
          $data=mysql_fetch_array($result);
          ?>
          <br /><br />
          <form method="post" action="?page=pinjam.save-pinjam"  onclick="return confirm('Tutup/Selesaikan Transaksi')">
          <input type="submit" name="selesai" value="Selesai Transaksi" class="btn btn-primary"/>
          </form>
                    <div class="panel panel-default">
                    
                    <div class="well">
                                <h4>Data Siswa</h4>
                                          <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody>
                                        <tr>
                                            <td><b>Nama Anggota</b></td>
                                            <td><?php echo $data['anggota_nama']; ?></td>
                                            <td><b>Email</b></td>
                                            <td><?php echo $data['anggota_email']; ?></td>
                                          <td rowspan="3"><img src="../images/<?php echo $data['anggota_images']; ?>" width="200" height="200"/></td>
                                        </tr>
                                        <tr>
                                            <td><b>Kelas</b></td>
                                            <td><?php echo $data['kelas']; ?></td>
                                            <td><b>Nomor hand phone</b></td>
                                            <td><?php echo $data['anggota_hp']; ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Jurusan</b></td>
                                            <td><?php echo $data['jurusan']; ?></td>
                                            <td><b>Masa Berlaku</b></td>
                                            <td><?php echo $data['anggota_berlaku']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>   
                            </div>
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#pinjaman" data-toggle="tab"><h4>Pinjaman</h4></a>
                                </li>
                                <li><a href="#pinjamansaatini" data-toggle="tab"><h4>Pinjaman saat ini</h4></a>
                                </li>
                                <li><a href="#sejarah" data-toggle="tab"><h4>Sejarah Peminjaman</h4></a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="pinjaman">
                                <!--<form method="post" action="?page=pinjam.save-pinjam"><br /> -->
                                <form method="post" action="?page=pinjam.save"><br />
                               
                                   <b> masukan kode buku </b>  <input type="text" name="kode_buku" /> <input type="submit" name="pinjam" value="pinjam" class="btn btn-primary"/>
                                </form>
                                    <p>
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                    <th>Hapus</th>
                                    <th>Kode Buku</th>
                                    <th>Judul</th>
                                    <th>Tangal pinjam</th>
                                    <th>Tanggal Harus Kembali</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                        <?php
                        
                    if (!empty($_SESSION['pinjam'])) {
                    $pinjaman=$_SESSION['pinjam'];
                    foreach ($pinjaman as $key => $val) { 
                    $query="SELECT * FROM buku WHERE kode_buku='".$key."'";
                    $hasil=mysql_query($query);
                    if ($hasil) {
                    $data=mysql_fetch_array($hasil); 
                    
                        ?>
                    <tr>
                    <td><a href="?page=pinjam.delete&id=<?php echo $key; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php //echo $data_tmp['bukdet_kode'];  ?>')"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-trash"></i></button></a>
                    </td>
                    <td><?php echo $data['kode_buku']; ?></td>
                    <td><?php echo $data['judul_buku']; ?></td>
                    <td><?php echo $pinjam; ?></td>
                    <td><?php echo $kembali; ?></td>           
                    </tr>
                    <?php               
                       }
                    } 
                    
                    }//else{
                    //echo "<tr><td colspan='6'>Tidak ada barang dikeranjang</td></tr></table>";
                    //}
                                    ?>
                                    </tbody>
                                    </table>
                                    </div>
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="pinjamansaatini">
                                   <!-- <h4>start Pinjaman saat ini</h4> -->
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                    <th>Kembali</th>
                                    <th>Perpanjang</th>
                                    <th>kode buku</th>
                                    <th>judul</th>
                                    <th>tanggal pinjam</th>
                                    <th>tanggal harus kembali</th>
                                    </tr>
                                    </thead>
                                     <tbody>
                                    <?php 
                                    
                                $sql="SELECT *
FROM
    anggota
    INNER JOIN pinjaman 
        ON (anggota.anggota_nis = pinjaman.anggota_nis)
    INNER JOIN buku 
        ON (buku.kode_buku = pinjaman.kode_buku) WHERE anggota.anggota_nis='".$_SESSION['anggota_nis']."' AND pinjaman.status_pinjam='1'";
        //echo $sql; exit;
                                $result_sql=mysql_query($sql);
                                while($data_pinjam=mysql_fetch_array($result_sql)){
                                $tgl_dateline=$data_pinjam['tanggal_harus_kembali'];     //diambil dari database
                                $tgl_kembali=date('d-m-Y');
	                           	$lambat=terlambat($tgl_dateline, $tgl_kembali);
        
                                //echo $lambat; exit();
                                $denda1=200;
                                $denda=$lambat*$denda1;  
                                
                                    ?>
                                    <tr>
                                    <td>
                                    <form method="post" action="?page=pinjam.proces-kembali">
                                    <input type="hidden" name="denda" value="<?php echo $denda; ?>"/>
                                    <input type="hidden" name="kode_buku" value="<?php echo $data_pinjam['kode_buku']; ?>"/>
                                    <input type="hidden" name="pinjam_id" value="<?php echo $data_pinjam['pinjam_id']; ?>"/>
                                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-share-alt"></i></button>
                                    </form>
                                    <td>
                                    
                                    <?php
                                    if($lambat > 0){
                                    ?>
                                    <button type="button" class="btn btn-warning" disabled=""><i class="glyphicon glyphicon-plus-sign"></i></button></a>
                                    <?php
                                    }else {
                                    ?>
                                    <a href="?page=pinjam.proces-perpanjang&id=<?php echo $data_pinjam['pinjam_id']; ?>" onclick="return confirm('Anda yakin, ingin memperpanjang peminjaman kode buku <?php //echo $data_pinjam['pinjam_id'];  ?>')">
                                    <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i></button></a>
                                    
                                    <?php
                                    }
                                    ?>
                                    </td>
                                    <td><?php echo $data_pinjam['kode_buku']; ?></td>
                                    <td>
                                    <?php echo $data_pinjam['judul_buku']; ?>
                                     <?php
                                     if($lambat > 0 ){
                                     ?> 
                                     <br />
                                    <b style="color: red;font: bold;">TERLAMBAT selama <?php echo $lambat; ?> hari dengan jumlah denda <?php echo "Rp. ".number_format($denda,0,',','.'); ?>,00</b>
                                    <?php  } ?>
                                    </td>
                                    <td><?php echo $data_pinjam['tanggal_pinjam']; ?></td>
                                    <td><?php echo $data_pinjam['tanggal_harus_kembali']; ?></td>
                                    </tr>
                                    <?php
                                   }
                                    ?>
                                    </tbody>
                                    </table>
                                    </div>                                   
                                </div>
                                   <!-- end Pinjaman saat ini -->
                                   <!-- start sejarah peminjaman -->
                                <div class="tab-pane fade" id="sejarah">
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                    <th>Kode</th><th>Judul</th><th>Tanggal Pinjam</th><th>Tanggal dikembalikan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    
                                    $sql_sejarah="SELECT *
                                    FROM
                                        revisi_done.buku
                                    INNER JOIN pinjaman 
                                        ON (buku.kode_buku = pinjaman.kode_buku)
                                    INNER JOIN anggota 
                                    ON (anggota.anggota_nis = pinjaman.anggota_nis) WHERE anggota.anggota_nis='".$_SESSION['anggota_nis']."' AND status_pinjam='2'";
                                    // echo $sql_sejarah; exit;
                                    $result11=mysql_query($sql_sejarah);
                                    while($data_sejarah=mysql_fetch_array($result11)){ 
                                    ?>
                                    <tr>
                                    <td><?php echo $data_sejarah['kode_buku'];?></td>
                                    <td><?php echo $data_sejarah['judul_buku'];?></td>
                                    <td><?php echo $data_sejarah['tanggal_pinjam']; ?></td>
                                    <td><?php echo $data_sejarah['tanggal_kembali'];?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                    </table>
                                    </div>
                                </div>
                                <!-- end sejarah peminjaman -->
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>              