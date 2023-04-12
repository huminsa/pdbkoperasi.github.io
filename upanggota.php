<html>
<head>
	<title>Ubah Data Anggota </title>
	
</head>
<body style="background-color:powderblue" background="oke.jpg">


	<label>Ubah Data Anggota : 
		<?php echo $_GET['no_anggota']; ?>
	</label>
	<?php 
		include 'connect.php';
			if(isset($_POST['simpan'])){		
				$sql =  "update into anggota set no_anggota='".$_POST['no_anggota']."', nama_anggota='".$_POST['nama_anggota']."', ";
				$sql .= "alamat_anggota='".$_POST['alamat_anggota']."', email='".$_POST['email']."' , telepon='".$_POST['telepon']."',  kode_pos='".$_POST['kode_pos']."', jenis_kelamin='".$_POST['jenis_kelamin']."', pekerjaan='".$_POST['pekerjaan']."', where no_anggota='".$_GET['no_anggota']."' ";
				
				$prose = mysqli_query($con, $sql);
				echo "<script>alert('data berhasil diubah');window.location='idxanggota.php';</script>";
			}
		// untuk pembacaan data dari tabel sesuai no anggota
				$sql = "SELECT * from anggota where no_anggota='".$_GET['no_anggota']."'";
				$data = mysqli_query($con, $sql);
				$rd = mysqli_fetch_array($data);
	?>
	<form method="post">
        
		<p>
			<lable>No Anggota</label>
				<input readonly  type="text" name="no_anggota" value="
					<?php echo $rd['no_anggota'] ?> ">
		</p>
		<p>
			<lable>Nama Anggota</label>
				<input type="text" name="nama_anggota" value="
					<?php echo $rd['nama_anggota'] ?> ">
		</p>
		<p>
			<lable>Alamat Anggota</label>
				<input type="text" name="alamat_anggota" value="
					<?php echo $rd['alamat_anggota'] ?> ">
		</p>
		<p>
			<lable>Email</label>
				<input type="text" name="email" value="
					<?php echo $rd['email'] ?> ">
		</p>
		</p>
			<lable>Telepon</label>
				<input type="text" name="telepon" value="
					<?php echo $rd['telepon'] ?> ">
		</p>
		<p>
			<lable>Kode Pos</label>
				<input type="text" name="kode_pos" value="
					<?php echo $rd['kode_pos'] ?> ">
		</p>
		<p>
			<lable>Jenis Kelamin</label>
				<input type="text" name="jenis_kelamin" value="
					<?php echo $rd['jenis_kelamin'] ?> ">
		</p>
		<p>
			<lable>Pekerjaan</label>
				<input type="text" name="pekerjaan" value="
					<?php echo $rd['pekerjaan'] ?> ">
		</p>
        <?php 
			include 'connect.php';
				$sql = "SELECT * from anggota ";
				$data = mysqli_query($con, $sql);
			while($rd = mysqli_fetch_array($data))
		?>
	
		<input type="submit" name="simpan" value="simpan">
	</form>
</body>
</html>