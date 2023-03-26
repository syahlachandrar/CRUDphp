<?php
  include "koneksi.php";
  $nim=$_GET['edit'];
  $query=mysqli_query($koneksi,"DELETE FROM absen WHERE nim='$nim'");
  if ($query) {
   header("location:hlm1.php");
  } 
?>