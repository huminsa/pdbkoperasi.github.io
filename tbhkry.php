<html>
<head>
	<title>Tambah data Anggota</title>
	<center>
	<h1> Tambah data Anggota Koperasi Konoha </h1>
	</center>
</head>
<body style="background-color:powderblue" background="oke.jpg">
	<fieldset>
	<form method="post">
    <table class="table " >
	<tr>
		<p>
		<lable>Nama Karyawan</label>
			<input type="text" name="nama_karyawan">
		</p>
		<p>
		<lable>Alamat Karyawan</label>
			<input type="text" name="alamat_karyawan">
		</p>
		<p>
		<lable>Telepon Karyawan</label>
			<input type="text" name="telepon_karyawan">
		</p>
		<p>
		</p>
	</tr>
		<p>
			
			<?php 
			include 'connect.php';
			$sql = "SELECT * from karyawan ";
			$data = mysqli_query($con, $sql);
			while($rd = mysqli_fetch_array($data)){
			?>
			<?php } ?>
		</select>
		<input type="submit" name="simpan" value="simpan">
			</p>
		</p>
		
	</form>
	</fieldset>
</body>
</html>
<?php 
if(isset($_POST['simpan'])){		
	$sql =  "insert into karyawan set nama_karyawan='".$_POST['nama_karyawan']."', alamat_karyawan='".$_POST['alamat_karyawan']."',  telepon_karyawan='".$_POST['telepon_karyawan']."' ";
	$prose = mysqli_query($con, $sql);
	echo "<script>alert('data berhasil disimpan');window.location='idxkaryawan.php';</script>";
}
?>