<?php
include "koneksi.php";
$kode_provinsi=$_POST["kode_provinsi"];
$kode_kabupaten=$_POST["kode_kabupaten"];
$nama_kabupaten=$_POST["nama_kabupaten"];

$sql="insert into kabupaten values('$kode_provinsi','$kode_kabupaten','$nama_kabupaten')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:kabupaten.php');
}
?>