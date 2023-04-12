<?php 
 	include 'connect.php';
	$sql = "delete  from pinjaman where id_pinjam='".$_GET['Id_pinjam']."'";	
	$data= mysqli_query($con, $sql);
	echo "<script>alert('data berhasil dihapus');window.location='idxpinjaman.php';</script>"
?>