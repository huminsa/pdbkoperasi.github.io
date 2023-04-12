<?php
session_start();
if($_SESSION['login'] != 'login'){
	echo "<script> alert('anda harus login terlebih dahulu')</script>";
	echo '<meta http-equiv="refresh" content="0;url=index.php">';
}
else {
?>

<html>
<head>	
	<title>Data Anggota</title>
	<center>
	<h1> Data Anggota Koperasi Konoha</h1>
	</center>
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
				<link rel="stylesheet " href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
				<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
				<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
				<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    			<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"/>
		
    
</head>
<body style="background-color:powderblue" background="oke.jpg"

>
<div class="col card-header text-left">
		<a href="berhasil_login.php" class="btn btn-info btn-lg">
        	 <span class="glyphicon glyphicon-home"></span>Home</a><ul class="nav navbar-nav"  class="btn btn-primary" >
        <a href="tambahkpr.php" class="btn btn-info btn-lg">
        	  <span class="glyphicon glyphicon-plus"></span>Tambah data Anggota</a><ul class="nav navbar-nav"  class="btn btn-primary" >
			  <a href="logout.php"class="btn btn-info btn-lg">
			  <span class="btn btn-innfo btn-ig" > </span>LOG OUT</a><ul class="nav navbar-nav"  class="btn btn-primary" >
	</div>
        </a>

     
<table  id="example" class="display" style="width:100%" >
	
	<thead>
	<tr>
		
    	<th class=" text-success" >id Anggota</th>
    	<th class=" text-success" >Nama Anggota</th>
		<th class=" text-success">Alamat Anggota</th>
		<th class=" text-success">Email</th>
		<th class=" text-success">Telepon</th>
        <th class=" text-success">Kode Pos</th>
		<th class=" text-success">Jenis Kelamin</th>
		<th class=" text-success">Pekerjaan</th>
		<th class=" text-success">Aksi</th>
        
	</tr>
	</thead>
	<tbody>
		<?php 
	include 'connect.php';
	$sql = "select * from anggota";
	$data= mysqli_query($con, $sql);
	
	while($rd = mysqli_fetch_array($data)) { 
		?>
		<tr>
        <td bg-color= "red" cosplan=""><?php echo ucwords($rd['no_anggota']); ?></td>
        <td><?php echo $rd['nama_anggota']; ?></td>
        <td><?php echo $rd['alamat_anggota']; ?></td>
        <td><?php echo $rd['email']; ?></td>
        <td><?php echo $rd['telepon']; ?></td>
        <td><?php echo $rd['kode_pos']; ?></td>
        <td><?php echo $rd['jenis_kelamin']; ?></td>
        <td><?php echo $rd['pekerjaan']; ?></td>

		<td>
			<a href="hpsagt.php?no_anggota=<?php echo $rd['id_karyawan']; ?>"> <span class="glyphicon glyphicon-trash"></span>Hapus</a><ul class="nav navbar-nav"  class="btn btn-primary" > </a>
			<a href="upanggota.php?no_anggota?no_anggota=<?php echo $rd['id_karyawan']; ?>"> <span class="glyphicon glyphicon-retweet"></span>Ubah</a><ul class="nav navbar-nav"  class="btn btn-primary" class="btn btn-info btn-lg" style= background-color:red > </a>

		</td>
			
	</tr>
	<?php } ?>	

</tbody>
</table>


</body>
</html>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.dataTables.min.js"></script>

<script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
<?php
	}
?>
