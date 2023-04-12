<html>
<head>
	<title>Tambah data Anggota</title>
	<center>
	<h1> Tambah data Anggota Koperasi Konoha </h1>
	</center>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
				<link rel="stylesheet " href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    			<link rel="stylesheet " href="jquery.dataTables.min.css" />
				<style type= "text/css" href="css/ooo.css">
</head>
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
<body background="./img/loh.jpg">
			<div class="col card-header text-left">
				<a href="berhasil_login.php" class="btn btn-info btn-lg">
					<span class="glyphicon glyphicon-home"></span>Home</a><ul class="nav navbar-nav"  class="btn btn-primary" >
			</div>
	<fieldset>
	<form method="post">
    <table class="table " >
	<tr>
			<p>
        <lable>No Anggota</label>
            <input type="text" name="no_anggota">
		</p>
		<p>
        <lable>Nama Anggota</label>
            <input type="text" name="nama_anggota">	
		</p>
		<p>
        <lable>Alamat Anggota</label>
			<input type="text" name="alamat_anggota">
		</p>
		<p>
			 <lable>Email</label>
			<input type="text" name="email">
		</p>
		</p>
		<lable>Telepon</label>
			<input type="text" name="telepon">
		</p>
		<p>
		<lable>Kode Pos</label>
			<input type="text" name="kode_pos">
		</p>
		<p>
		<lable>Jenis Kelamin</label>
			<input type="text" name="jenis_kelamin">
		</p>
		<p>
		<lable>Pekerjaan</label>
			<input type="text" name="pekerjaan">
		</p>
	</tr>
		<p>
			
			<?php 
			include 'connect.php';
			$sql = "SELECT * from anggota ";
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
	$sql =  "insert into anggota set no_anggota='".$_POST['no_anggota']."', nama_anggota='".$_POST['nama_anggota']."', ";
	$sql .= "alamat_anggota='".$_POST['alamat_anggota']."', email='".$_POST['email']."' , telepon='".$_POST['telepon']."',  kode_pos='".$_POST['kode_pos']."', jenis_kelamin='".$_POST['jenis_kelamin']."', pekerjaan='".$_POST['pekerjaan']."' ";
	
	$prose = mysqli_query($con, $sql);
	echo "<script>alert('data berhasil disimpan');window.location='idxanggota.php';</script>";
}
?>