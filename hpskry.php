<?php 
 	include 'connect.php';
	$sql = "delete  from karyawan where id_karyawan='".$_GET['id_karyawan']."'";	
	$data= mysqli_query($con, $sql);
	echo "<script>alert('data berhasil dihapus');window.location='idxkaryawan.php';</script>"
?>