<?php
//require_once('inc-db.php');
?>
<br /><br /> <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="?page=buku.frm-insert">Tambah Data Buku</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Foto</th>
                                            <th>Judul</th>
                                            <th>Pengarang</th>
                                            <th>ISBN</th>
                                            <th class="center">Jumlah Awal</th>
                                            <th>Jumlah Akhir</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $sql="select * from buku ORDER BY kode_buku DESC";
                            $result=mysql_query($sql);
                            while($data=mysql_fetch_array($result)){
                            ?>
                                        <tr class="odd gradeX">
                                            <td><img src="../images/<?php echo $data['foto_buku']; ?>" width="200" height="200"/></td>
                                            <td>
                                            <a href="?page=buku.detail-buku&id=<?php echo $data['kode_buku']; ?>" rel="tooltip" title="Detail Buku">
                                            <?php echo $data['judul_buku']; ?>
                                            </a>
                                            </a></td>
                                            <td>
                            <?php
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
                            ?>
                                            </td>
                                            <td><?php echo $data['isbn']; ?></td>
                                            <td align="center"><?php echo $data['jumlah_awal']; ?></td>
                                            <td align="center"><?php echo $data['jumlah_akhir']; ?></td>
                                            <td class="center">
                                            <a href="?page=buku.frm-update&id=<?php echo $data['kode_buku']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i>edit</button></a>
                                            <a href="?page=buku.delete&id=<?php echo $data['kode_buku']; ?>"  onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data['judul_buku'];  ?>')"><button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i>delete</button></a>
                                            </td>
                                        </tr>
                            <?php
                            }
                            ?>
                                    </tbody>
                                </table>