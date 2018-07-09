<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
    $id=$_POST['id'];
    $kode_spl=$_POST['kode_spl'];
    $nama_spl=$_POST['nama_spl'];
    $jns_kelamin=$_POST['jns_kelamin'];
 $q=mysqli_query($con,"INSERT INTO `suplayer` (`id`,`kode_spl`,`nama_spl`,`jns_kelamin`) VALUES ('$id','$kode_spl','$nama_spl','$jns_kelamin')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>