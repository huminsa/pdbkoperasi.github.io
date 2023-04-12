<html>
    <head>
        <title> Tambah Data Simpanan</title>
    </head>
    <body style="background-color:powderblue;"
    background= "oke.jpg">
        
    </body>
    <legend> Menambah Simpanan </legend>
    <fieldset>
        <form method="post">
            <table class= "table">
                <tr>
                    
                    <p>
                        <label> Tanggal Simpan</label>
                        <input type="date" name="tgl_simpan">
                    </p>
                    <p>
                        <label> Id Anggota</label>
                        <input type="text" name="id_anggota">
                    </p> <p>
                        <label>Id Karyawan</label>
                        <input type="text" name="id_karyawan">
                    </p>
                    <p>
                        <label>Jumlah Simpanan</label>
                        <input type="text" name="jumlah_simpan">
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
                            <option value="<?php echo $rd['id_simpan'] ?>"><?php echo $rd['id_simpan'] ?></option>
                    <?php } ?>
		                <input type="reset" name="batal" value="batal">
                    <p> 
                        <input type="submit" name="simpan" value="simpan">
                    </p>

                </tr>

            </table>
        </form>
    </fieldset>
</html>
<?php
if (isset($_POST['simpan'])){
    $sql = "insert into simpanan set id_simpan='".$_POST['id_simpan']."',no='".$_POST['id_anggota']."',id_karyawan='".$_POST['id_karyawan']."',";
    $sql.= "jumlah_simpan='".$_POST['jumlah_simpan']."', bunga_simpan='".$_POST['bunga_simpan']."' ";
    $prose = mysqli_query($con, $sql);
    echo"<script> alert('Data Berhasil Disimpan');window.location='idxsimpanan.php';</script>";

}
?>
