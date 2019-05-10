<?php
include "koneksi.php";
$kode_provinsi=$_POST["kode_provinsi"];
$nama_provinsi=$_POST["nama_provinsi"];

$sql="insert into provinsi values('$kode_provinsi','$nama_provinsi')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:provinsi.php');
}
?>