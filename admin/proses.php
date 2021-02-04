<?php
include "koneksi.php";

$NPM=$_POST ['NPM'];
$Nama=$_POST ['Nama'];
$Tempat_Lahir=$_POST ['Tempat_Lahir'];
$Tanggal_Lahir=$_POST ['Tanggal_Lahir'];
$Jenis_Kelamin=$_POST ['Jenis_Kelamin'];
$Alamat=$_POST ['Alamat'];
$Kode_Pos=$_POST ['Kode_Pos'];


$sql="INSERT INTO web Values (NULL,'$NPM','$Nama','$Tempat_Lahir','$Tanggal_Lahir','$Jenis_Kelamin','$Alamat','$Kode_Pos')";
$query=mysqli_query($conn,$sql);
// if(!$query)
// {	die(mysqli_error());}
header ('Location: index.php');
?>