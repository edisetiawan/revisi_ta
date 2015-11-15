    <br />
    <?php
    $id=$_GET['id'];
   // echo $id; exit;
    $sql_buku="SELECT *
FROM
    revisi_done.klasifikasi
    INNER JOIN revisi_done.buku 
        ON (klasifikasi.klasifikasi_id = buku.klasifikasi_id)
    INNER JOIN revisi_done.penerbit 
        ON (penerbit.penerbit_kode = buku.kode_penerbit) WHERE kode_buku='".$id."'";
    //  echo $sql_buku; exit;
    $result_buku=mysql_query($sql_buku);
    $data_buku=mysql_fetch_array($result_buku);
    ?>
    <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Detail Buku</h3>
                                <div class="col-lg-3">
                                    <a href="#"> 
                                        <img class="img-responsive img-hover thumbnail" src="../images/<?php echo $data_buku['foto_buku']; ?>" alt="" height="160px auto" width="200px auto"> 
                                    </a>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <table>
                                            <tr>
                                                <td class="text-left"> Kode</td>
                                                <td class="col-sm-1"> : </td>
                                                <td class="text-left"><?php echo $data_buku['kode_buku']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"> Nomor Klasifikasi</td>
                                                <td class="col-sm-1"> : </td>
                                                <td class="text-left"><?php echo $data_buku['nomor_klasifikasi']; ?></td>
                                            </tr>
                                             <tr>
                                                <td class="text-left"> Klasifikasi</td>
                                                <td class="col-sm-1"> : </td>
                                                <td class="text-left"><?php echo $data_buku['klasifikasi_nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"> Judul Buku </td>
                                                <td class="col-sm-1"> : </td>
                                                <td class="text-left"><?php echo $data_buku['judul_buku']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Pengarang</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left">
                                                <?php 
                                                $sql_pengarang="SELECT *
                                                FROM
                                                pengarang
                                                    INNER JOIN dikarang 
                                                ON (pengarang.kode_pengarang = dikarang.kode_pengarang) WHERE dikarang.kode_buku='".$data_buku['kode_buku']."'";
                                                //echo $sql_pengarang; exit;
                                                $result1=mysql_query($sql_pengarang);
                                                    while($data1=mysql_fetch_array($result1)){
                                                echo $data1['nama_pengarang']."<br>";
                                                    } 
                                                ?>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Penerbit</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_buku['penerbit_nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">ISBN</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_buku['isbn']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Tahun Terbit</td>
                                                <td class="col-sm-1"> : </td>
                                                <td class="text-left"><?php echo $data_buku['tahun_terbit']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Kota Terbit</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_buku['penerbit_kota']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Rak</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_buku['rak']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Jumlah awal</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_buku['jumlah_awal']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Jumlah akhir</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_buku['jumlah_akhir']; ?></td>
                                            </tr>
                                             <tr>
                                                <td class="text-left">Sinopsis</td>
                                                <td class="col-sm-1">:</td>
                                                <td class="text-left"><?php echo $data_buku['sinopsis']; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                          
                            <form method="post" action="lib/cetak-barcode/cetak.php" target="_blank">
                           <input type="hidden" name="id" value="<?php echo $data_buku['kode_buku']; 
                           
                          //echo "Buku Id : ".$data_buku['buku_id']; exit;
                           ?>"/>
                           <button type="submit" class="btn btn-default">
                            <i class="fa fa-print fa-fw">
                            </i>Cetak Barcode</button>
                            </form>
                            <a href="?page=buku.display"><button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-circle-arrow-left"></i> Kembali</button></a>
                        </div>
                    </div>
                </div>