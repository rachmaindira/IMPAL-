<?php
include('koneksi.php');
$kode_buku	= $_GET['kode_buku'];

$sql 	= 'delete from buku where kode_buku="'.$kode_buku.'"';
$query	= mysqli_query($db_link,$sql);
header('location: databuku_slogin.php');
?>