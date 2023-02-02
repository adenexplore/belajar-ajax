<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
 
$sql="insert into user (nama,jenis_kelamin,alamat) values('$nama','$jenis_kelamin','$alamat')";

//Mengeksekusi/menjalankan query diatas
$hasil=mysqli_query($kon,$sql);

?>