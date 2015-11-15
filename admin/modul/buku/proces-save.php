<?php
$var_judul=htmlentities($_POST['frm_judul']);
$var_klasifikasi=htmlentities($_POST['frm_klasifikasi']);
$var_nomorklasifikasi=htmlentities($_POST['nomor_klasifikasi']);
$var_pengarang=$_POST['textbox'];   //pengarang
$var_penerbit=htmlentities($_POST['frm_penerbit']);
$var_tahun=htmlentities($_POST['frm_tahun']);
$var_isbn=htmlentities($_POST['frm_isbn']);
$var_rak=htmlentities($_POST['frm_rak']);
$var_jumlah=htmlentities($_POST['frm_jumlah']);
$var_sinopsis=htmlentities($_POST['frm_sinopsis']);

//-----------------------ambil gambar
$type_file= $_FILES['fupload']['type'];
$lokasi_file =   $_FILES['fupload']['tmp_name'];
$nama_file =     $_FILES['fupload']['name'];
$ukuran_file =   $_FILES['fupload']['size'];
//echo "Nama file :".$nama_file; exit;
/*
    if(empty($var_judul)){
        $error=1;
    }
    if(empty($var_klasifikasi)){
        $error=2;
    }
    if(empty($var_pengarang)){
        $error=3;
    }
    if(empty($var_penerbit)){
        $error=4;
    }
    if(empty($var_tahun_terbit)){
        $error=5;
    }
    if(empty($var_isbn)){
        $error=6;
    }
    if(empty($var_jumlah)){
        $error=7;
    }
    if(empty($var_rak)){
        $error=8;
    }
    if(empty($var_sinopsis)){
        $error=9;
    }
    if($type_file != 'image/jpeg' AND $type_file != 'image/gif' AND $type_file != 'image/pjpeg' AND $type_file !='image/png'){
    $error=10;    
    }
    if (!preg_match("/^[0-9]*$/",$var_jumlah)) {    // hanya angka yang dizinkan 
    $error=11;  
}
    
    if($error != 0){
      switch ($error) {
         case 1:
            $error_msg = "judul tidak boleh kosong ";
            break;
         case 2:
            $error_msg = "klasifikasi tidak boleh kosong";
            break;
         case 3:
            $error_msg = "pengarang tidak boleh kosong ";
            break;
         case 4:
            $error_msg = "penerbit tidak boleh kosong";
            break;
         case 5:
            $error_msg = "tahun terbit tidak boleh kosong ";
            break;
         case 6:
            $error_msg = "ISBN tidak boleh kosong";
            break;
         case 7:
            $error_msg = "jumlah tidak boleh kosong ";
            break;
         case 8:
            $error_msg = "rak tidak boleh kosong";
            break;
         case 9:
            $error_msg = "sinopsis tidak boleh kosong";
            break;
         case 10:
            $error_msg = "type file <b>".$nama_file."</b> : ".$type_file."<br>Type file yang boleh di uploaud : gif,jpg dan png";
            break;
         case 11:
            $error_msg = "maaf yang di izinkan hanya angka";
            break;
      }
      echo "<h3>$error_msg</h3>";
      echo "<a href='?page=buku.frm-insert'>kembali</a>";
      exit;
   }
   */
   
$kode_sql="select max(right(kode_buku,4)) as kd_max from buku";
//echo $kode; exit;
$result=mysql_query($kode_sql);
$data=mysql_fetch_array($result);
$isi_rekord=$data['kd_max']+1;
$tmp=$isi_rekord++;
$kd=sprintf('%04s',$tmp);
$kode="B".$kd;
//echo $kode; 
//exit;

$query="insert into buku values 
        ('".$kode."',
            '".$var_judul."',
            '".$var_klasifikasi."',
            '".$var_nomorklasifikasi."',
            '".$nama_file."',
            '".$var_penerbit."',
            '".$var_tahun."',
            '".$var_isbn."',
            '".$var_rak."',
            '".$var_sinopsis."',
            '".$var_jumlah."',
            '".$var_jumlah."',
            '0')";
            //echo $query;
            //exit;          
$result=mysql_query($query);   
//exit;
$kode_pengarang="select max(right(kode_pengarang,4)) as kd_max from pengarang";
//echo $kode_pengarang; exit;
$result_p=mysql_query($kode_pengarang);
$data=mysql_fetch_array($result_p);
$isi_rekord=$data['kd_max']+1;
//echo $isi_rekord; exit;


foreach($var_pengarang as $index =>$value){

    $tmp=$isi_rekord++;
    $kd=sprintf('%04s',$tmp);
    $kode_p="P".$kd;
    
    //echo $kode_p." - ".$value."<br>"; //exit();
    $sql_pengarang="INSERT INTO pengarang VALUES ('$kode_p','$value')";
    // echo $sql_pengarang."<br>"; //exit;
    $result1=mysql_query($sql_pengarang);  
    $sql_dikarang="INSERT INTO dikarang VALUES ('','$kode','$kode_p')";
    //echo $sql_dikarang."<br>"; //exit;
    $result2=mysql_query($sql_dikarang);    
}
//exit;
$derektori="../images/".$nama_file;
move_uploaded_file($lokasi_file,"$derektori");
include_once('display.php');
   //echo "berhasil";
?>