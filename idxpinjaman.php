<html>
    <head>
    <title>Data Pinjaman</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<body style type="background-color:powderblue"
		
			background="oke.jpg"
		>
    </head>
	<a href="tbhpinjaman.php"
	 class="btn btn-info" span class="glyphicon glyphicon-plus"></span>Tambah Data Pinjaman</a><ul class="nav navbar-nav"  class="btn btn-primary" >
	 <a href="berhasil_login.php"
	 class="btn btn-info" span class="glyphicon glyphicon-power"></span>Home</a><ul class="nav navbar-nav"  class="btn btn-primary" >

    <table class="table table-bordered" >
	<thead>
	<tr>
		<td class="text-success" >Id Pinjaman</td>
        <td class=" text-success" >Tanggal Pinjaman </td>
		<td class=" text-success">Id Transaksi</td>
		<td class=" text-success">Jumlah Pinjaman</td>
		<td class=" text-success">Id Karyawan</td>
		<td class=" text-success">Jangka Pinjaman</td>
		<td class=" text-success">Id Anggota</td>
        <td class=" text-success">Bunga Pinjaman </td>
		<td class=" text-success">Aksi</td>
        
	</tr>
    <thread>
    <?php 
	include 'connect.php';
	$sql = "select * from pinjaman";
	$data= mysqli_query($con, $sql);
	
	while($rd = mysqli_fetch_array($data)) { 
		?>
		<tr>
        <td><?php echo ($rd['id_pinjam']); ?></td>
		<td><?php echo $rd['tgl_pinjam'] ; ?></td>
		<td><?php echo $rd['id_transaksi']; ?></td>
		<td><?php echo $rd['jumlah_pinjam']; ?></td>
		<td><?php echo $rd['id_karyawan']; ?></td>
		<td><?php echo $rd['jangka_pinjam']; ?></td>
        <td><?php echo $rd['id_anggota']; ?></td>    
        <td><?php echo $rd['bunga_pinjam']; ?></td>

		<td>
			<a href="hpspinjam.php?id_pinjam=<?php echo $rd['id_pinjam']; ?>"> <span class="glyphicon glyphicon-trash"></span>Hapus</a><ul class="nav navbar-nav"  class="btn btn-primary" > </a>
			<a href="up_pinjam.php?id_pinjam=<?php echo $rd['id_pinjam']; ?>"> <span class="glyphicon glyphicon-retweet"></span>Ubah</a><ul class="nav navbar-nav"  class="btn btn-primary" class="btn btn-info btn-lg" style= background-color:red > </a>

		</td>
	</tr>
	<?php } ?>
    </body>   
</html>