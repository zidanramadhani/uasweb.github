<?php

include('koneksi.php'); 
$id = $_GET['id'];
$query_hapus = "DELETE FROM web WHERE id = '$id'";
$connect = mysqli_query($conn, $query_hapus);
header('location:index.php'); 
?>