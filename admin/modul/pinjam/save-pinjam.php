<?php
    //echo "jancuk";  exit;
    $var_nis_anggota=$_SESSION['anggota_nis'];
    
    $tanggal_pinjam			= date("d-m-Y");
    $tiga_hari		= mktime(0,0,0,date("n"),date("j")+3,date("Y"));
    $tanggal_harus_kembali		= date("d-m-Y", $tiga_hari);
    foreach($_SESSION['pinjam'] as $key => $val){
    $sql_insert="insert into pinjaman values ('','".$key."','".$var_nis_anggota."','".$tanggal_pinjam."','".$tanggal_harus_kembali."','','1','1')";
    //echo $sql_insert; //exit;
    $result_sql_insert=mysql_query($sql_insert);
    
    //buku paling sering dipinjam
    $sql_update="update buku set value=value+1 where kode_buku='".$key."'";
    //echo $sql_update;
    $result_update=mysql_query($sql_update);
    //exit;
	//echo "<script>alert('Kode Buku tidak ditemukan');</script>";
    //exit;  
    }
    unset($_SESSION['pinjam']);
    unset($_SESSION['anggota_nis']);
    echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.frm-idanggota'>";
?>