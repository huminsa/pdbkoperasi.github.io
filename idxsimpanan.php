<html>
    <head>
    <title>Data Simpanan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<style>
div {
  border: 1px solid black;
  background-color: lightblue;
  padding-top:0px;
  padding-right: 60px;
  padding-bottom: 45px;
  padding-left: 123px;
}
body{
        margin: 0 auto;
        width: 80%;
        padding:50px;
    }
    
    </style>
</style>
    </head><body style type="background-color:powderblue" background="oke.jpg"
		body{
			background-image : url(bground.jpg)
			margin: 0 auto;
			width :80%;
			padding:35px;
		}
		>
	<div class="col card-header text-left">
	<a href="berhasil_login.php" class="btn btn-info btn-lg">
		<span class="glyphicon glyphicon-home"></span>Home</a><ul class="nav navbar-nav"  class="btn btn-primary" >
        </a>
	<a href="tbhsimpanan.php" class="btn btn-info btn-lg">
		<span class="glyphicon glyphicon-plus"></span>Tambah Simpanan </a><ul class="nav navbar-nav"  class="btn btn-primary" >
        </a>
	</div>

    <table class="table table-bordered" >
	<thead>
	<tr>
		<td  class=" text-success">Id Simpanan  </td>
        <td class=" text-success" >Tanggal Simpanan </td>
		<td class=" text-success">No Anggota</td>
		<td class=" text-success">Id Karyawan</td>
		<td class=" text-success">Jumlah Simpanan</td>
        <td class=" text-success">Bunga Simpanan </td>
		<td class=" text-success">Aksi</td>
        
	</tr>
    <thread>
    <?php 
	include 'connect.php';
	$sql = "select * from simpanan";
	$data= mysqli_query($con, $sql);
	
	while($rd = mysqli_fetch_array($data)) { 
		?>
		<tr>
        <td><?php echo ucwords($rd['id_simpan']); ?></td>
		<td><?php echo  ($rd['tgl_simpan'] ); ?></td>
        <td><?php echo $rd['no_anggota']; ?></td>
        <td><?php echo $rd['id_karyawan']; ?></td>
        <td><?php echo $rd['jumlah_simpan']; ?></td>
        <td><?php echo $rd['bunga_simpan']; ?></td>
    

		<td>
			<a href="hpssimpanan.php?id_simpan=<?php echo $rd['id_simpan']; ?>"><button type="button" class="btn btn-danger" > Hapus </a>&nbsp; &nbsp;
			<a href="upsimpanan.php?id_simpan=<?php echo $rd['id_simpan']; ?>"> <button type="button" class="btn btn-danger" >ubah </a>

		</td>
	</tr>
	<?php } ?>
    </body>   
</html>