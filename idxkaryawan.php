<html>
<head>	
	<title>Data Karyawan</title>
	<center>
	<h1> Data Karyawan Koperasi Konoha</h1>
	</center>
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color:powderblue;" background="oke.jpg"

		}

>
<div class="col card-header text-right">
		<a href="berhasil_login.php" class="btn btn-info btn-lg">
        	 <span class="glyphicon glyphicon-home"></span>Home</a><ul class="nav navbar-nav"  class="btn btn-primary" >
        <a href="tbhkry.php" class="btn btn-info btn-lg">
        	  <span class="glyphicon glyphicon-plus"></span>Tambah data Karyawan</a><ul class="nav navbar-nav"  class="btn btn-primary" >
	</div>
        </a>

     
<table class="table table-bordered" >
	<thead>
	<tr><th class=" text-success" readonly> Id Karyawan</th> 
		<th class=" text-success"> Nama Karyawan</th>
		<th class=" text-success">Alamat Karyawan</th>
		<th class=" text-success">Telepon Karyawan</th>
		<th class=" text-success"> Aksi </th>
	</tr>
	</thead>
	<?php 
	include 'connect.php';
	$sql = "select * from karyawan";
	$data= mysqli_query($con, $sql);
	
	while($rd = mysqli_fetch_array($data)) { 
		?>
		<tr>
        <td bg-color= "red" cosplan=""><?php echo ucwords($rd['id_karyawan']); ?></td>
        <td><?php echo $rd['nama_karyawan']; ?></td>
        <td><?php echo $rd['alamat_karyawan']; ?></td>
        <td><?php echo $rd['telepon_karyawan']; ?></td>
       

		<td>
			<a href="hpskry.php?id_karyawan=<?php echo $rd['id_karyawan']; ?>"> <span class="glyphicon glyphicon-trash"></span>Hapus</a><ul class="nav navbar-nav"  class="btn btn-primary" > </a>
			<a href="upkry.php?i_karyawan=<?php echo $rd['id_karyawan']; ?>"> <span class="glyphicon glyphicon-retweet"></span>Ubah</a><ul class="nav navbar-nav"  class="btn btn-primary " style= background-color:"red" > </a>

		</td>
	</tr>
	<?php } ?>	
</table>

</body>
</html>
