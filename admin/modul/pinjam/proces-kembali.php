<?php
require_once('inc-db.php');
$pinjam_id=$_POST['pinjam_id'];
$kode_buku=$_POST['kode_buku'];
$tanggal_kembali=date('d-m-Y');
$denda=$_POST['denda'];
//echo "denda :".$denda; exit;
if($denda > 0){
    $sql_insert_denda="insert into denda values ('','".$pinjam_id."','".$denda."')";
    $result_denda=mysql_query($sql_insert_denda);
    //echo $sql_insert_denda; exit;
    $sql_pinjam="update pinjaman set status_pinjam='2',tanggal_kembali='".$tanggal_kembali."' where kode_buku='".$kode_buku."' and pinjam_id='".$pinjam_id."'";
    //echo $sql_pinjam; exit;
    $result1=mysql_query($sql_pinjam);
    $sql_update_buku="update buku set jumlah_akhir=jumlah_akhir+1 where kode_buku='".$kode_buku."'";
    $result_update_buku=mysql_query($sql_update_buku);
    echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota#pinjamsaatini'>";  
}else{
    // echo "tidak menyimpan denda";
    //merubah status pinjam menjadi sudah dikembalikan
    $sql_pinjam="update pinjaman set status_pinjam='2',tanggal_kembali='".$tanggal_kembali."' where kode_buku='".$kode_buku."' and pinjam_id='".$pinjam_id."'";
    //echo $sql_pinjam; exit;
    $result1=mysql_query($sql_pinjam);
    $sql_update_buku="update buku set jumlah_akhir=jumlah_akhir+1 where kode_buku='".$kode_buku."'";
    $result_update_buku=mysql_query($sql_update_buku);
    echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota#pinjamsaatini'>";  
}
?>
