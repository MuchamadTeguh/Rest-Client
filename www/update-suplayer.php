<?php
 include "db.php";
 if(isset($_POST['update']))
 {
    $id=$_POST['id'];
    $kode_spl=$_POST['kode_spl'];
    $nama_spl=$_POST['nama_spl'];
    $jns_kelamin=$_POST['jns_kelamin'];
 $q=mysqli_query($con,"UPDATE `suplayer` SET `kode_spl`='$kode_spl',`nama_spl`='$nama_spl',`jns_kelamin`='$jns_kelamin' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>