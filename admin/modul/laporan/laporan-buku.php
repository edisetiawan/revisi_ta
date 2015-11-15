<br /><br /> <div class="panel panel-default">
                        <div class="panel-heading">
                        Laporan Data Buku
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div class="table-responsive"><a href="lib/buku.php" target="_blank"><button type="button" class="btn btn-default"><i class="fa    fa-print   fa-fw"></i>Cetak PDF</button></a>
                            <div class="table-responsive">
                            
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode Buku</th>
                                            <th>Judul</th>
                                            <th>ISBN</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Jumlah Awal</th>
                                            <th>Jumlah Akhir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $sql="SELECT *
FROM
    revisi_done.penerbit
    INNER JOIN revisi_done.buku 
        ON (penerbit.penerbit_kode = buku.kode_penerbit)";
                            $result=mysql_query($sql);
                            while($data=mysql_fetch_array($result)){
                            ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $data['kode_buku'];  ?></td>
                                            <td><?php echo $data['judul_buku'];  ?></td>
                                            <td><?php echo $data['isbn'];  ?></td>
                                            <td><?php 
                            $sql_pengarang="SELECT *
                                FROM
                            pengarang
                                INNER JOIN dikarang 
                            ON (pengarang.kode_pengarang = dikarang.kode_pengarang) WHERE dikarang.kode_buku='".$data['kode_buku']."'";
                            //echo $sql_pengarang; exit;
                            $result1=mysql_query($sql_pengarang);
                            while($data1=mysql_fetch_array($result1)){
                            echo $data1['nama_pengarang']."<br>";
                            }
                                            ?></td>
                                            <td><?php echo $data['penerbit_nama'];  ?></td>
                                            <td align="center"><?php echo $data['jumlah_awal'];?></td>
                                            <td align="center"><?php echo $data['jumlah_akhir'];?></td>
                                        </tr>
                            <?php
                            }
                            ?>
                                    </tbody>
                                </table>