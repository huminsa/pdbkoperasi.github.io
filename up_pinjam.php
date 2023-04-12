<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="ooo.css">
    <link rel="stylesheet" type="text/css" href="">
	<title>Ubah data Simpanan</title>
    <center>
        <h1>Proses Ubah data Pinjam</h1>
    </center>
</head>
<body style="background-color:powderblue;"
    background= "oke.jpg">
        
    </body>
    
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

	<label>Ubah Data Simpanan : <?php echo $_GET['id_pinjam']; ?></label>
	<?php 
	include 'connect.php';
	if(isset($_POST['simpan'])){
        $sql = "update into pinjaman set id_pinjam='".$_POST['id_pinjam']."',tgl_pinjam='".$_POST['tgl_pinjam']."',id_transaksi='".$_POST['id_transaksi']."',jumlah_pinjam='".$_POST['jumlah_pinjam']."',id_karyawan='".$_POST['id_karyawan']."',";
        $sql.= "jangka_pinjam='".$_POST['jangka_pinjam']."',id_anggota='".$_POST['id_anggota']."',bunga_pinjam='".$_POST['bunga_pinjam']."', where id_pinjam='".$_POST['id_pinjam']."' ";
        $prose = mysqli_query($con, $sql);
        echo"<script> alert('Data Berhasil di Ubah');window.location='idxpinjaman.php';</script>";
    
    }
	// untuk pembacaan data dari tabel sesuai id-simpan
	$sql = "SELECT * from pinjaman where id_pinjam='".$_GET['id_pinjam']."'";
	$data = mysqli_query($con, $sql);
	$rd = mysqli_fetch_array($data);
	?>
	<fieldset>
        <form method="post">
            <table class= "table">
                <tr>
                    <p>
                        <label> Id Pinjaman</label>
                        <input readonly type="text" name="id_pinjam">
                    </p>
                    <p>
                        <label> Tanggal Pinjaman</label>
                        <input type="date" name="tgl_pinjam">
                    </p>
                    <p>
                            <label> No Anggota</label>

                            <select name="no_anggota">
                                    <?php 
                                        include 'connect.php';
                                        $sql = "SELECT * from anggota ";
                                        $data = mysqli_query($con, $sql);
                                        while($rd = mysqli_fetch_array($data)){
                                        ?>
                                            <option value="<?php echo $rd['no_anggota'] ?>"><?php echo $rd['no_anggota'] ?></option>
                                    <?php } ?>
                            </select>
                        </p> 
                        <p>
                            <label> Id Karyawan</label>

                            <select name="id_karyawan">
                                    <?php 
                                        include 'connect.php';
                                        $sql = "SELECT * from karyawan ";
                                        $data = mysqli_query($con, $sql);
                                        while($rd = mysqli_fetch_array($data)){
                                        ?>
                                            <option value="<?php echo $rd['id_karyawan'] ?>"><?php echo $rd['id_karyawan'] ?></option>
                                    <?php } ?>
                            </select>
                        </p> 
                    <p>
                        <label>Jumlah Pinjaman</label>
                        <input type="text" name="jumlah_pinjam"rp>
                    </p>
                    <p>
                        <label> Id Transaksi</label>
                        <input type="text" name="id_transaksi">
                    </p>
                    <p>
                        <label> Jangka Pinjaman</label>
                        <input type="text" name="jangka_pinjam">
                    </p>
                    <p>
                        <label> Bunga Pinjaman</label>
                        <input type="text" name="bunga_pinjam">
                    </p>
                    <?php 
                        include 'connect.php';
                        $sql = "SELECT * from pinjaman ";
                        $data = mysqli_query($con, $sql);
                        while($rd = mysqli_fetch_array($data)){
                            
                        ?>
                            
                    <?php } ?>
		                <input type="reset" name="batal" value="batal" header="idxpinjaman.php">
                
                        <input type="submit" name="simpan" value="simpan">
                    

                </tr>

            </table>
        </form>
    </fieldset>
</body>
</html>
