<?php
//require_once('inc-db.php');
$var_id=$_POST['frm_hidden'];
//echo "ID :".$var_id; exit;
$var_judul=htmlentities($_POST['frm_judul']);
$var_klasifikasi=htmlentities($_POST['frm_klasifikasi']);
$var_nomorklasifikasi=htmlentities($_POST['nomor_klasifikasi']);
//$var_pengarang=$_POST['textbox'];   //pengarang
$var_penerbit=htmlentities($_POST['frm_penerbit']);
$var_tahun=htmlentities($_POST['frm_tahun']);
$var_isbn=htmlentities($_POST['frm_isbn']);
$var_rak=htmlentities($_POST['frm_rak']);
$var_jumlah=htmlentities($_POST['frm_jumlah']);
$var_sinopsis=htmlentities($_POST['frm_sinopsis']);
//-----------------------ambil gambar
$kode_pengarang=$_POST['kodep'];
$nama_pengarang=$_POST['textbox'];
//------------pengarang -----------
$type_file= $_FILES['fupload']['type'];
$lokasi_file =   $_FILES['fupload']['tmp_name'];
$nama_file =     $_FILES['fupload']['name'];
$ukuran_file =   $_FILES['fupload']['size'];

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
    if(empty($var_sinopsis)){
        $error=7;
    }
    if(!empty($nama_file)){
    if($type_file != 'image/jpeg' AND $type_file != 'image/gif' AND $type_file != 'image/pjpeg' AND $type_file !='image/png'){
    
     $error=8;
    }
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
            $error_msg = "sinopsis tidak boleh kosong";
            break;
         case 8:
            $error_msg = "type file <b>".$nama_file."</b> : ".$type_file."<br>Type file yang boleh di uploaud : gif,jpg dan png";
            break;
         
      }
      echo "<h3>$error_msg</h3>";
      echo "<a href='?page=buku.frm-update&id={$var_id}'>kembali</a>";
      exit;
   }  */
  if(empty($nama_file)){
      $sql="update buku set 
                judul_buku='".$var_judul."',
                klasifikasi_id='".$var_klasifikasi."',
                nomor_klasifikasi='".$var_nomorklasifikasi."',
                kode_penerbit='".$var_penerbit."',
                tahun_terbit='".$var_tahun."',
                isbn='".$var_isbn."',
                rak='".$var_rak."',
                sinopsis='".$var_sinopsis."',
                jumlah_awal='".$var_jumlah."',
                jumlah_akhir='".$var_jumlah."'
                where kode_buku='".$var_id."'";
                // echo $sql;
                //exit;   
       $result=mysql_query($sql);
       $data = array_combine($kode_pengarang, $nama_pengarang);
       $sql = null;
       foreach ($data as $key => $value) {
	   $sql ="UPDATE pengarang SET nama_pengarang = '".$value."' WHERE kode_pengarang = '".$key."'";
       $result_pengarang=mysql_query($sql);
        //echo $sql;
        }
       
       
       include_once('display.php');
    }else{
     
       $query="update buku set 
                judul_buku='".$var_judul."',
                klasifikasi_id='".$var_klasifikasi."',
                nomor_klasifikasi='".$var_nomorklasifikasi."',
                foto_buku='".$nama_file."',
                kode_penerbit='".$var_penerbit."',
                tahun_terbit='".$var_tahun."',
                isbn='".$var_isbn."',
                rak='".$var_rak."',
                sinopsis='".$var_sinopsis."',
                jumlah_awal='".$var_jumlah."',
                jumlah_akhir='".$var_jumlah."'
                where kode_buku='".$var_id."'";
          // echo $query;
           // exit;          
    $result=mysql_query($query);
    $derektori="../images/".$nama_file;
    move_uploaded_file($lokasi_file,"$derektori");
    include_once('display.php');
    } 
?>