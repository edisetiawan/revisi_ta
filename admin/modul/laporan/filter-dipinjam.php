<?php
//require_once('inc-db.php');
?>
<br /><br /> <div class="panel panel-default">
                        <div class="panel-heading">
                            Laporan Peminjaman
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            
                            <form method="post" action="lib/filter-dipinjam.php" target="_blank">
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
                                            <th>ID Anggota</th>
                                            <th>Nama</th>
                                            <th>Kode Buku</th>
                                            <th>Judul</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $no=0;
                            $sql="SELECT *
FROM
    revisi_done.buku
    INNER JOIN revisi_done.pinjaman 
        ON (buku.kode_buku = pinjaman.kode_buku)
    INNER JOIN revisi_done.anggota 
        ON (anggota.anggota_nis = pinjaman.anggota_nis)";
                            $result=mysql_query($sql);
                            while($data=mysql_fetch_array($result)){ 
                            $no++;
                            
                            ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['anggota_nis']; ?></td>
                                            <td><?php echo $data['anggota_nama']; ?></td>
                                            <td><?php echo $data['kode_buku']; ?></td>
                                            <td><?php echo $data['judul_buku']; ?></td>
                                            <td><?php echo $data['tanggal_pinjam']; ?></td>
                                            <td>
                                            <?php 
                                            if($data['status_pinjam']==1){
                                                echo "<b style='color: red;font: bold;'>belum kembali</b>";
                                            }else{
                                                echo "<b style='color: blue;font: bold;'>sudah kembali</b>";
                                            }
                                            ?></td>
                                        </tr>
                            <?php
                            }
                            ?>
                                    </tbody>
                                </table>