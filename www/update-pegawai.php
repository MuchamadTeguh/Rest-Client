<?php
 include "db.php";
 if(isset($_POST['update']))
 {$id=$_POST['id'];
 $kd_pgw=$_POST['kd_pgw'];
 $nm_pgw=$_POST['nm_pgw'];
 $jns_kelamin=$_POST['jns_kelamin'];
 $q=mysqli_query($con,"UPDATE `pegawai` SET `kd_pgw`='$kd_pgw',`nm_pgw`='$nm_pgw',`jns_kelamin`='$jns_kelamin' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>