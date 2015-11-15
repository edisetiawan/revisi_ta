<?php
$id=$_GET['id'];
 if (!empty($_SESSION['pinjam'][$id])) {
            unset($_SESSION['pinjam'][$id]);
        }
echo "<meta http-equiv='refresh' content='0; url=?page=pinjam.data-anggota'>";
exit;
?>