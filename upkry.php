<html>
<head>
	<title>Ubah data Karyawan</title>
</head>
<body>
<style>
            .table {
                width: 50%;
                margin: 0 auto;
                font-size: 16px;
                text-align: left;
            }
            label {
                font-weight: bold;
                margin-right: 10px;
                display: inline-block;
                width: 200px;
            }
            input[type="text"], input[type="date"] {
                padding: 10px;
                width: 100%;
                font-size: 16px;
                margin-bottom: 20px;
                border: 1px solid lightgray;
            }
            fieldset {
                width: 50%;
                margin: 0 auto;
                padding: 20px;
            }
            form {
                width: 100%;
                margin: 0 auto;
                padding: 20px;
                background-color: white;
                box-shadow: 2px 2px 10px lightgray;
            }
            p {
                padding: 10px;
            }
        </style>
	<label>Ubah Data Karyawan : <?php echo $_GET['id_karyawan']; ?></label>
	<?php 
	include 'connect.php';
	if(isset($_POST['simpan'])){  // untuk proses simpan
		
		$sql =  "update karyawan set id_karyawan='".$_POST['id_karyawan']."', nama_karyaawan='".$_POST['nama_karyawan']."', ";
		$sql .= "alamat_karyawan='".$_POST['alamat_karyawan']."', where id_karyawan='".$_GET['id_karyawan']."'";	

		mysqli_query($con, $sql);
		
        echo "<script>alert('data berhasil diubah');window.location='idxkaryawan.php';</script>";
	}
	// untuk pembacaan data dari tabel sesuai npm
	$sql = "select * from karyawan where id_karyawan ='".$_GET['id_karyawan']."'";
	$data = mysqli_query($con, $sql);
	$rd = mysqli_fetch_array($data);
	?>
	<form method="post">
    <p>
		<lable>Nama Karyawan</label>
			<input  type="text" name="nama_karyawan" value="<?php echo $rd['nama_karyawan'] ?> ">
		</p>
		<p>
		<lable>Alamat Karyawan</label>
			<input type="text" name="alamat_karyawan" value="<?php echo $rd['alamat_karyawan'] ?>">
		</p>
		<p>
		<lable>Telepon Karyawan</label>
			<input type="text" name="telepon_karyawan" value="<?php echo $rd ['telepon_karyawan']?>">
		</p>
		<p>
		</p>
		<input type="submit" name="simpan" value="simpan">
	</form>
</body>
</html>

<?php 
