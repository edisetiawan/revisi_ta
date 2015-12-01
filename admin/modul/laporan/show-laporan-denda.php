  <br />
  <?php
  
   function konversi_tanggal($date)  
     {  
         $exp = explode('-',$date);  
     if(count($exp) == 3)  
     {  
       $date = $exp[2].'-'.$exp[1].'-'.$exp[0];  
     }  
     return $date;  
     }   
  $var_tanggal_awal=$_POST['frm_tanggal_awal'];
  $var_tanggal_selesai=$_POST['frm_tanggal_selesai'];
 // echo $var_tanggal_awal." ? ";
  //echo $var_tanggal_selesai;
  
  ?>
  <script language="JavaScript">
function kiRim(){
        var awal = document.getElementById('awal').value;
        var akhir = document.getElementById('akhir').value;
        if(awal > akhir){
        alert('Tanggal selesai tidak boleh lebih besar dari tanggal awal ');
        return false;
        }
       
}
</script>
  <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Laporan denda
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" action="?page=laporan.show-laporan-denda" onsubmit="return kiRim()">
                                    <div class="row">
                                       <div class="col-lg-4">
                                        <div class="form-group">
								            <label>Tanggal Awal</label>
									           <div class="input-group date form_date col-md-10" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
									               <input class="form-control" size="10" type="text" name="frm_tanggal_awal" id="awal"/>
   
									                   <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                              </div>
										      <input type="hidden" id="dtp_input2" value=""/>
										</div>
                                        </div>
                                        <div class="col-lg-4">
                                        <div class="form-group">
								            <label>Tanggal Selesai</label>
								        	   <div class="input-group date form_date col-md-10" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
									               <input class="form-control" size="10" type="text" name="frm_tanggal_selesai" id="akhir"/>
									               <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
								            </div>
			                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                        <div class="form-group">
                                        <label></label>
                                        <div class="input-group col-md-10">
                                        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Tampilkan</button>
			                            </div>
                                        </div>
                                        </div> 
                                    </form>
                            </div>
                            
                            <form method="post" action="lib/denda.php" target="_blank">
                            <input type="hidden" value="<?php echo $var_tanggal_awal; ?>" name="frm_tanggal_awal"/>
                            <input type="hidden" value="<?php echo $var_tanggal_selesai; ?>" name="frm_tanggal_selesai"/>   
                           <!-- <a href="lib/anggota-pdf.php" target="_blank"> -->
                            <button type="submit" class="btn btn-default">
                            <i class="fa    fa-print   fa-fw">
                            </i>Cetak PDF</button>
                                </form>
                            
                            <table class="table table-striped table-bordered table-hover" id="1dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>ID Anggota</th>
                                            <th>Judul</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal harus kembali</th>
                                            <th>Tangal kembali</th>
                                            <th>Denda</th>
                                            <th>Keterlambatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $no=0;
                            $sql="SELECT *
FROM
    revisi_done.pinjaman
    INNER JOIN revisi_done.denda 
        ON (pinjaman.pinjam_id = denda.pinjam_id)
    INNER JOIN revisi_done.buku 
        ON (buku.kode_buku = pinjaman.kode_buku)
    INNER JOIN revisi_done.anggota 
        ON (anggota.anggota_nis = pinjaman.anggota_nis) WHERE tanggal_pinjam BETWEEN '".konversi_tanggal($var_tanggal_awal)."' AND '".konversi_tanggal($var_tanggal_selesai)."'";
                            //echo $sql; exit;
                            $result=mysql_query($sql);
                            $rows=mysql_num_rows($result);
                            if($rows == 0){
                                echo"<tr class='odd gradeX' ><td colspan='8'>Tidak ada data denda dari tanggal ".konversi_tanggal($var_tanggal_awal)." s/d tanggal ".konversi_tanggal($var_tanggal_selesai)."</td></tr>";
                            }else{
                            while($data=mysql_fetch_array($result)){ 
                            $no++;
                            
                            ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['anggota_nis']; ?></td>
                                            <td><?php echo $data['judul_buku']; ?></td>
                                            <td><?php echo $data['tanggal_pinjam']; ?></td>
                                            <td><?php echo $data['tanggal_kembali']; ?></td>
                                            <td><?php echo $data['tanggal_kembali']; ?></td>
                                            <td><?php echo "Rp. ".number_format($data['bayar'],0,',','.'); ?>,00 </td>
                                            <td>terlambat 2 hari<?php echo $data['nayar']; ?></td>
                                        </tr>
                            <?php
                            }
                            }
                            ?>
                                    </tbody>
                                </table>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
<script type="text/javascript" src="datatime/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="datatime/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script type="text/javascript">
 $('.form_date').datetimepicker({

        language:  'id',

        weekStart: 1,

        todayBtn:  1,

  autoclose: 1,

  todayHighlight: 1,

  startView: 2,

  minView: 2,

  forceParse: 0

    });

</script> 
<!-- http://asdyaniarya.blogspot.co.id/2013/11/tugas-2-smbd-database-tkatpa.html -->
