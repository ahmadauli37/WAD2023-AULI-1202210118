<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

$connect = mysqli_connect("localhost:3306", "root", "","modul3");
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan err
// 
if (!$connect)
echo"error";
?>