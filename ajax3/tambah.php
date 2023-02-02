<?php
//Include file koneksi ke database
include "koneksi.php";
//menerima nilai dari kiriman form 
$nik=$_POST["nik"];
$nama=$_POST["nama"];
$jurusan=$_POST["jurusan"];

//Query input menginput data kedalam tabel mahasiswa
$sql="insert into mahasiswa (nik,nama,jurusan) values('$nik','$nama','$jurusan')";

//Mengeksekusi/menjalankan query diatas
$hasil=mysqli_query($kon,$sql);

?>