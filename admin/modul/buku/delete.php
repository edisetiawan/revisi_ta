<?php
//require_once('inc-db.php');
$id=$_GET['id'];
//echo $id; exit;
$sql="delete from buku where kode_buku='".$id."'";
//echo $sql; exit;
$result=mysql_query($sql);
if($result){
    $sql_del="delete from dikarang where kode_buku='".$id."'";
    $result1=mysql_query($sql_del);
    require_once('display.php');
    //header('location: http://localhost/dci/admin/admin_area.php?page=project.display');
}
?>