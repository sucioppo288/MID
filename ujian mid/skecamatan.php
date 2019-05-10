<?php
include "koneksi.php";
$kode_kabupaten=$_POST["kode_kabupaten"];
$kode_kecamatan=$_POST["kode_kecamatan"];
$nama_kecamatan=$_POST["nama_kecamatan"];

$sql="insert into kecamatan values('$kode_kabupaten','$kode_kecamatan','$nama_kecamatan')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:kecamatan.php');
}
?>