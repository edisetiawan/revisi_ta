<?php

/*
$updtae="SELECT *
FROM
    revisi_done.buku
    INNER JOIN revisi_done.dikarang 
        ON (buku.kode_buku = dikarang.kode_buku)
    INNER JOIN revisi_done.pengarang 
        ON (pengarang.kode_pengarang = dikarang.kode_pengarang) WHERE buku.kode_buku='B0005'";
$result=mysql_query($update);
$data=mysql_fetch_array($result);
echo "Jancukk";
foreach($data as $index => $value){
    echo $index." - ".$value."<br>";
}  */


//include_once('display.php');
//exit;

$kode_pengarang=$_POST['kodep'];
$nama_pengarang=$_POST['textbox'];


$data = array_combine($kode_pengarang, $nama_pengarang);
$sql = null;
foreach ($data as $key => $value) {
	$sql ="UPDATE table SET nama = ".$value." WHERE id = ".$key."<br>";
    echo $sql;
}


//echo $sql;


exit;
$data = array(
            array(
              'kode' => $kode_pengarang, 
              'nama' => $nama_pengarang
              )
          );
//print_r($data); exit;

foreach($data as $key => $value){
     print_r($value);
      
      //echo "<br>";
      //echo $value;      
      //echo "update pengarang set nama_pengarang='".$value[0]."'";// where kode_pengarang='".$value[1]."' <br>";//['kode'];
//    echo $value['kode'];
    //foreach($value as $as =>$isi){
      //  echo $isi;//." = ".$isi[];
    //}
        //echo $value;
    
    //echo "update penganrang set nama_pengarang='".$value['kode']."' where kode_pengarang='".$value['nama']."'";
}

exit;
/*foreach($data as $key => $value){
  //echo $key;
   
  foreach($value as $k => $v)
  {
    //echo $v;
  }  
    
}
  */         
//print_r($data);
//echo $jumlah=count($data);
/*
exit;
for($row=0;$row<2;$row++){
    echo "Nama    : ".$data[$row]["Kode"]."<br>";
    echo "Alamat  : ".$data[$row]["Pengarang"]."<br>";

}    
exit;

$data=array(array($kode_pengarang),array($nama_pengarang));

foreach($data as $isi=>$value){
    foreach($value as $index=>$lagi){
       echo $index."=".$isi."<br>";
    }
  //  echo $value;
}

*/

/*

foreach($nama_pengarang as $index => $value){
    foreach($kode_pengarang as $isi=>$value1)
    //echo $index." update pengarang set nama_pengarang='".$value."' where pengarang_kode='".$isi."'";
    echo " update pengarang set nama_pengarang='".$value."' where pengarang_kode='".$value1."'";
    echo "<br>";
   
}  
//echo $nama_pengarang; 
exit;   */
/*
function tampilBuku(){
    $query=mysql_query("SELECT *
FROM
    revisi_done.buku
    INNER JOIN revisi_done.dikarang 
        ON (buku.kode_buku = dikarang.kode_buku)
    INNER JOIN revisi_done.pengarang 
        ON (pengarang.kode_pengarang = dikarang.kode_pengarang) WHERE buku.kode_buku='B0005'");//  limit {$start},{$end}");
    while($row=mysql_fetch_array($query))
    $data[]=$row;
    return $data;
}

$array=tampilBuku();
foreach($array as $index =>$value){
    
    echo $value['kode_pengarang']." = ".$value['nama_pengarang']."<br>";
}

*/
?>