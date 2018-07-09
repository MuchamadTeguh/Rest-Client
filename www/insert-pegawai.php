<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $id=$_POST['id'];
 $kd_pgw=$_POST['kd_pgw'];
 $nm_pgw=$_POST['nm_pgw'];
 $jns_kelamin=$_POST['jns_kelamin'];
 $q=mysqli_query($con,"INSERT INTO `pegawai` (`id`,`kd_pgw`,`nm_pgw`,`jns_kelamin`) VALUES ('$id','$kd_pgw','$nm_pgw','$jns_kelamin')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>