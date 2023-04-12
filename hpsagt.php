<?php 
 	include 'connect.php';
	$sql = "delete  from anggota where no_anggota='".$_GET['no_anggota']."'";	
	$data= mysqli_query($con, $sql);
	echo "<script>alert('data berhasil dihapus');window.location='idxanggota.php';</script>"
?>