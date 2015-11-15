<?php
//require_once('inc-db.php');
$var_kode_buku=$_POST['kode_buku'];
$pinjaman=$_SESSION['pinjam'];

foreach($pinjaman as $index =>$value){
    $jumlah+=$value;
}

if($jumlah >= 2){
    echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota'>";
	echo "<script>alert('Max pinjam 2 exemplar');</script>";
    exit;
}
$sql_status_pinjam="select status_pinjam,anggota_nis from pinjaman where status_pinjam='1' and anggota_nis='".$_SESSION['anggota_nis']."'";
$result_pinjam=mysql_query($sql_status_pinjam);
$jml_sdng_dipjam=mysql_num_rows($result_pinjam);
//echo $jml_sdng_dipjam; exit;
if($jml_sdng_dipjam >=2){
    echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota'>";
	echo "<script>alert('anda masih pinjam dan belum dikembalikan, maksimal pinjam hanya 2');</script>";
    exit;
}

$sql_check="select kode_buku,jumlah_akhir from buku where kode_buku='".$var_kode_buku."'";
$result=mysql_query($sql_check);
$data=mysql_fetch_array($result);
if($data['jumlah_akhir'] == 0){
    echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota'>";
	echo "<script>alert('Stok buku sedang habis');</script>";
    exit;
}
$rows=mysql_num_rows($result);
if($rows > 0){
if(isset($var_kode_buku)){  
$id=$var_kode_buku;
} else {
$id=0;
}
                    if (!empty($_SESSION['pinjam'][$id])) {
                    $pesan="hewan wes ono keranjang";
                    } else {
                    $_SESSION['pinjam'][$id]=1;
                    }

echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota'>";
exit;
}else{
    echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota'>";
	echo "<script>alert('Kode buku tidak ditemukan');</script>";
    exit;
}
?>