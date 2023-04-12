<?php 
 
session_start();
 
if (!isset($_SESSION['login'])) {
    header("Location: idxanggota.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/ooo.css">
    <link rel="stylesheet" type="text/css" href="">
    <title>Berhasil Login</title>
   
      
</head>
<body background="./img/loh.jpg">
        
<center>
<!-- Collect the nav links, forms, and other content for toggling -->

<div class="nav navbar-nav ">
        
        <nav id="menu">   
            <a class="navbar-logo"> Koperasi <span> Konoha</span></a>     
            <div class="navbar-nav">   
                <a href="berhasil_login.php">Home</a>
                <a href="idxanggota.php">Data Anggota</a>
                <a href="idxsimpanan.php">Simpanan</a>
                <a href="idxpinjaman.php">Pinjaman</a>  
                <a href="idxkaryawan.php">Petugas </a>
            </div>      
                <form class="form-inline" method="GET">
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="nama_anggota" class="sr-only">Nama</label>
                        <input type="nama" class="form-control" id="nama_anggota" placeholder="Masukan Nama" name="nama">
                    </div>
                    <header id="masthead" class="site-header" role="banner">

                    <div class="site-header-top">
                        <div class="inner"
                                input type="search" class="search-field" name="s" value="">
                                <button type="submit" class="search-button">Search</button>
                            </form><!-- #header-search -->

                            
                        </div><!-- .inner -->
                    </div><!-- .site-header-top -->
                </form>
        </nav>        
    </div>
</div>     
    </nav>
</center>
 <section class="hero" id="tambahkpr.php">
    <main class="content">
        <h1>Selamat Datang Di <span>Koperasi Konoha</span></h1>
        <p>Koperasi adalah organisasi bisnis yang dimiliki dan dikendalikan oleh anggotanya sendiri. Tujuannya adalah untuk membantu anggota memenuhi kebutuhan ekonomi dan sosial mereka melalui pengelolaan usaha bersama.Anggota koperasi berkontribusi dengan modal dan bekerja sama untuk mencapai tujuan bersama. Koperasi juga sering memfokuskan pada prinsip-prinsip seperti solidaritas, demokrasi, dan keadilan.</p>
        <a href="tambahkpr.php" class="cta">Ayo daftarkan Keanggotaanmu</a>
    </main>
</section>


    <div class="container p-5 my-5 bg-primary text-black">
  <h1></h1>
</div>
<tbody>
   <!-- Konten halaman web -->
   <footer style="background-color: black; color: white; padding: 10px; position: fixed; bottom: 0; width: 100%;">
      <p>powerby: myhuminsanainggolan@gmail.com &copy; 2023 - hahahahah</p>
   </footer>
</tbody>

</body>
</html>
<php
if (isset($_GET['nama_anggota'])) {
        $nama_dicari = $_GET['nama_anggota'];
        $pesan_masuk = mysqli_query($conn, "SELECT * FROM anggota WHERE nama LIKE '%$nama_dicari%' ORDER BY users ASC");
    } else {
        $pesan_masuk = mysqli_query($conn, "SELECT * FROM anggota ORDER BY users ASC");
    }
?>