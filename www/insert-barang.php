<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
    $id=$_POST['id'];
    $kd_brg=$_POST['kd_brg'];
    $nm_brg=$_POST['nm_brg'];
    $stok=$_POST['stok'];
 $q=mysqli_query($con,"INSERT INTO `barang` (`id`,`kd_brg`,`nm_brg`,`stok`) VALUES ('$id','$kd_brg','$nm_brg','$stok')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>