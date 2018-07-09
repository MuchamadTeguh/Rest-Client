<?php
 include "db.php";
 if(isset($_POST['update']))
 {$id=$_POST['id'];
 $kd_brg=$_POST['kd_brg'];
 $nm_brg=$_POST['nm_brg'];
 $stok=$_POST['stok'];
 $q=mysqli_query($con,"UPDATE `barang` SET `kd_brg`='$kd_brg',`nm_brg`='$nm_brg',`stok`='$stok' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>