<html>
    <head>
        <title> Tambah Data Simpanan</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
				<link rel="stylesheet " href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    			<link rel="stylesheet " href="jquery.dataTables.min.css" />
				<style type= "text/css"></style>
    
    </head>
    <body style="background-color:powderblue;"
    background= "oke.jpg">
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
    </body>
    <legend> 
        <h2 align="center"> Menambah Simpanan 
        </h2>
        </legend>
    <fieldset>
        <form method="post">
            <table class= "table">
                <tr>
                   <div class = "input type">
                        <p>
                            <label> Tanggal Simpan</label>
                            <input type="date" name="tgl_simpan">
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
                            <label>Id Karyawan</label>
                            <input type="text" name="id_karyawan">
                        </p>
                        <p>
                            <label>Jumlah Simpanan</label>
                            <select type="text" name="jumlah_simpan">
                                <option value="500000">500000</option>
                                <option value="1000000">1000000</option>
                                <option value="1500000">1500000</option>
                                <option value="2000000">2000000</option>
                            
                            </select>
        
                        </p>
                        <p>
                            <label> Bunga Simpanan</label>
                            <input type="text" name="bunga_simpan">
                        </p>
                        <?php 
                            include 'connect.php';
                            $sql = "SELECT * from simpanan ";
                            $data = mysqli_query($con, $sql);
                            while($rd = mysqli_fetch_array($data)){
                            ?>
                                
                        <?php } ?>
                            <input type="reset" name="batal" value="batal" header="idxsimpanan.php">
                        
                            <input type="submit" name="simpan" value="simpan">
                    </div>   

                </tr>

            </table>
        </form>
    </fieldset>
</html>
<?php
if (isset($_POST['simpan'])){
    $sql = "insert into simpanan set id_simpan='".$_POST['id_simpan']."',tgl_simpan='".$_POST['tgl_simpan']."',no_anggota='".$_POST['no_anggota']."',id_karyawan='".$_POST['id_karyawan']."',";
    $sql.= "jumlah_simpan='".$_POST['jumlah_simpan']."', bunga_simpan='".$_POST['bunga_simpan']."' ";
    $prose = mysqli_query($con, $sql);
    echo"<script> alert('Data Berhasil Disimpan');window.location='idxsimpanan.php';</script>";

}
?>
