<?php 
 	include 'connect.php';
	$sql = "delete  from simpanan where id_simpan='".$_GET['id_simpan']."'";	
	$data= mysqli_query($con, $sql);
	echo "<script>alert('data berhasil dihapus');window.location='idxsimpanan.php';</script>"
?>