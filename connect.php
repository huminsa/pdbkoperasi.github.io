<?php 


$con = mysqli_connect("localhost","root", "", "pdbkoperasi");
if (!$con) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
?>