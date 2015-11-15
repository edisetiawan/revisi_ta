<?php
//require_once('inc-db.php');
?>
<br /><br /> <div class="panel panel-default">
                        <div class="panel-heading">
                            Laporan Buku Sering dipinjam
                        </div>
                            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form method="post" action="lib/sering-dipinjam.php" target="_blank">
                            <input type="hidden" value="12-07-2015" name="tgl"/>
                            <!-- <a href="lib/anggota-pdf.php" target="_blank"> -->
                            <button type="submit" class="btn btn-default">
                            <i class="fa    fa-print   fa-fw">
                            </i>Cetak PDF</button>
                                </form>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Buku</th>
                                            <th>Judul Buku</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Jumlah Awal</th>
                                            <th>Jumlah Akhir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $no=0;
                            $sql="SELECT *
FROM
    revisi_done.buku
    INNER JOIN revisi_done.dikarang 
        ON (buku.kode_buku = dikarang.kode_buku)
    INNER JOIN revisi_done.pengarang 
        ON (pengarang.kode_pengarang = dikarang.kode_pengarang)
    INNER JOIN revisi_done.penerbit 
        ON (penerbit.penerbit_kode = buku.kode_penerbit)";
                            $result=mysql_query($sql);
                            while($data=mysql_fetch_array($result)){ 
                            $no++;
                            ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['kode_buku']; ?></td>
                                            <td><?php echo $data['judul_buku']; ?></td>
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
                                            <td><?php echo $data['penerbit_nama']; ?></td>
                                            <td><?php echo $data['jumlah_akhir']; ?></td>
                                            <td><?php echo $data['jumlah_awal']; ?></td>
                                        </tr>
                            <?php
                            }
                            ?>
                                    </tbody>
                                </table>